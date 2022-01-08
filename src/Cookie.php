<?php

namespace Yauphp\Http;

/**
 * Cookie封装类型
 * @author Tomix
 *
 */
class Cookie
{
    //setcookie ( string name [, string value [, int expire [, string path [, string domain [, bool secure]]]]] )
    private $name;
    private $value;
    private $expiredAt=0;
    private $path="/";
    private $domain;
    private $secure;

    public function __construct($name,$value,$expiredAt=null){

        $this->name=$name;
        $this->value=$value;
        $this->expiredAt=$expiredAt;
    }

    /**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return the $value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return the $expiredAt
     */
    public function getExpiredAt()
    {
        return $this->expiredAt;
    }

    /**
     * @return the $path
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return the $domain
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @return the $secure
     */
    public function getSecure()
    {
        return $this->secure;
    }

    /**
     * @param field_type $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param field_type $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @param number $expiredAt
     */
    public function setExpiredAt($expiredAt)
    {
        $this->expiredAt = $expiredAt;
    }

    /**
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * @param field_type $domain
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
    }

    /**
     * @param field_type $secure
     */
    public function setSecure($secure)
    {
        $this->secure = $secure;
    }



}

