<?php

namespace Acme\DemoBundle\Entity;

class GitHubUser
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $login;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $bio;

    /**
     * @var string
     */
    protected $location;

    /**
     * @var string
     */
    protected $company;

    /**
     * @var bool
     */
    protected $hireable;

    /**
     * Constructor
     *
     * @param int $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Get Id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get Type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set Type
     *
     * @param string $type
     * @return GitHubUser
     */
    public function setType($type)
    {
        $this->type = (string) $type;

        return $this;
    }

    /**
     * Get Login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set Login
     *
     * @param string $login
     * @return GitHubUser
     */
    public function setLogin($login)
    {
        $this->login = (string) $login;

        return $this;
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     *
     * @param string $name
     * @return GitHubUser
     */
    public function setName($name)
    {
        $this->name = (string) $name;

        return $this;
    }

    /**
     * Get Email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set Email
     *
     * @param string $email
     * @return GitHubUser
     */
    public function setEmail($email)
    {
        $this->email = (string) $email;

        return $this;
    }

    /**
     * Get Bio
     *
     * @return string
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Set Bio
     *
     * @param string $bio
     * @return GitHubUser
     */
    public function setBio($bio)
    {
        $this->bio = (string) $bio;

        return $this;
    }

    /**
     * Get Location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set Location
     *
     * @param string $location
     * @return GitHubUser
     */
    public function setLocation($location)
    {
        $this->location = (string) $location;

        return $this;
    }

    /**
     * Get Company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set Company
     *
     * @param string $company
     * @return GitHubUser
     */
    public function setCompany($company)
    {
        $this->company = (string) $company;

        return $this;
    }

    /**
     * Get Hireable
     *
     * @return bool
     */
    public function getHireable()
    {
        return $this->hireable ? true : false;
    }

    /**
     * Set Hireable
     * @param $hireable
     * @return GitHubUser
     */
    public function setHireable($hireable)
    {
        $this->hireable = (bool) $hireable;

        return $this;
    }
}
