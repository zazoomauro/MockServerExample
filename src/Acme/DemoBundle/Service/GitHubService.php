<?php

namespace Acme\DemoBundle\Service;

use Guzzle\Http\Client;
use Guzzle\Http\Message\Request;
use Guzzle\Http\Message\Response;
use Guzzle\Http\Exception\ClientErrorResponseException;

use Acme\DemoBundle\Entity\GitHubUser;

/**
 * GitHub Service
 */
class GitHubService
{
    /**
     * @var \Guzzle\Http\Client
     */
    protected $client;

    /**
     * Constructor
     *
     * @param \Guzzle\Http\Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * GetUserByName
     *
     * @param $name string
     * @return \Guzzle\Http\Message\Response
     */
    public function getUserByName($name)
    {
        $request = $this->client->get('/users/' . $name);

        try {
            $response = $request->send();
        } catch(ClientErrorResponseException $e) {
            return null;
        }

        $user = $this->hydrateUser(json_decode($response->getBody(true)));

        return $user;
    }

    protected function hydrateUser(\stdClass $data)
    {
        $user = new GitHubUser($data->id);

        $user
            ->setType($data->type)
            ->setLogin($data->login)
            ->setName($data->name)
            ->setEmail($data->email)
            ->setBio($data->bio)
            ->setLocation($data->location)
            ->setCompany($data->company)
            ->setHireable($data->hireable)
        ;

        return $user;
    }
}
