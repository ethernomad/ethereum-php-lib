<?php

/**
 * @file
 * Contains \Ethereum\Client.
 */

namespace Ethereum;

use Graze\GuzzleHttp\JsonRpc\Client as RpcClient;

class Client {

  protected $id = 0;

  public function __construct($url) {
    $this->client = RpcClient::factory($url);
  }

  public function request($method, array $params = []) {
    return $this->client->send($this->client->request($this->id++, $method, $params))->getRpcResult();
  }

}
