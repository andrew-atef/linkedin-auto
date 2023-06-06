<?php
require_once '../vendor/autoload.php';
require_once '../Models/Article.php';

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

// load .env file
$dotenv = Dotenv\Dotenv::createImmutable("../");
$dotenv->load();

class LinkedinController
{
    public function makePost(Article $article)
    {
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer ' . $_ENV['LINKEDIN_KEY'],
            'Content-Type' => 'application/json',
        ];
        $body = '{
            "owner": "urn:li:person:' . $_ENV['PERSON_ID'] . '",
            "subject": "' . $article->getParaphrase() . '",
            "text": {
                "text": "' . $article->getParaphrase() . " Apply: " . $article->getLink() . '"
            },
            "content": {
                "contentEntities": [
                {
                    "entity": "urn:li:digitalmediaAsset:D5622AQH33uOWtLy7Iw"
                }
                ],
                "title": "' . $article->getParaphrase() . '",
                "shareMediaCategory": "IMAGE"
            }
            }';

        $request = new Request('POST', 'https://api.linkedin.com/v2/shares', $headers, $body);
        $res = $client->sendAsync($request)->wait();

        return $res->getBody();
    }
}
