<?php

namespace App\Actions;

class GithubClient
{
    const GITHUB_TOKEN = env('GITHUB_TOKEN');


    public function __construct()
    {
        // Initialize the GitHub client with the token
        $this->client = new \Github\Client();
        $this->client->authenticate(self::GITHUB_TOKEN, null, \Github\AuthMethod::ACCESS_TOKEN);
    }
}
