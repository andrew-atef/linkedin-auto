<?php

require_once '../vendor/autoload.php';
require_once '../Models/Article.php';

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

// load .env file
$dotenv = Dotenv\Dotenv::createImmutable("../");
$dotenv->load();

class AiController
{
  public function paraphraseArticle(Article $article)
  {

    $text = "paraphrase this title and description as short tweet and add hashtags,  title: " . $article->getTitle() . " description: " . $article->getDesc() . ")";
    $result = $this->generate($text);
    $start = strrpos($result,"<|assistant|>");

    $result = substr($this->generate($text) , $start + strlen("<|assistant|>") );
    
    return $result;
  }

  private function generate($text)
  {
    $input = "<|prompter|>" . $text . "<|endoftext|><|assistant|>";
    $resultLoop = $this->sendReq($input);


    
    while(substr_count($resultLoop, "endoftext") <= 1){
      $resultLoop .= $this->sendReq($resultLoop);
      $result = $this->sendReq($resultLoop);
    }
    return $result;
  }

  private function sendReq($input)
  {
    $client = new Client();

    $headers = [
      'Authorization' => 'Bearer ' . $_ENV['HUGGINGFACE_KEY'],
      'Content-Type' => 'application/json'
    ];
    $body = '{
          "inputs": "' . $input . '",
          "parameters": {
            "temperature": 0.8
          }
        }';
    $request = new Request('POST', 'https://api-inference.huggingface.co/models/OpenAssistant/oasst-sft-4-pythia-12b-epoch-3.5', $headers, $body);
    $res = $client->sendAsync($request)->wait();
    return json_decode($res->getBody())[0]->generated_text;
  }
}
