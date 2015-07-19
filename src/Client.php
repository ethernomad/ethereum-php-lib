<?php

/**
 * @file
 * Contains \Ethereum\Client.
 */

namespace Ethereum;

use GuzzleHttp\Url;
use Graze\GuzzleHttp\JsonRpc\Client as RpcClient;

class Client {

  protected $id = 0;

  public function __construct(Url $url) {
    $this->client = RpcClient::factory($url);
  }

  public function request($method, array $params = []) {
    return $this->client->send($this->client->request($this->id++, $method, $params))->getRpcResult();
  }

}
