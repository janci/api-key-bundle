<?php

namespace Uecode\Bundle\ApiKeyBundle\Model;

use FOS\UserBundle\Model\User as BaseUser;
use FOS\UserBundle\Model\UserInterface;
use Uecode\Bundle\ApiKeyBundle\Util\ApiKeyGenerator;

class ApiKeyUser extends BaseUser implements UserInterface
{
    protected $apiKey;

    public function __construct()
    {
        parent::__construct();
        $this->setApiKey(ApiKeyGenerator::generate());
    }

    /**
     * @param string $apiKey
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }
}
