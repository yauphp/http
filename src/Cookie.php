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
    public $name;
    public $value;
    public $expire=0;
    public $path="/";
    public $domain;
    public $secure;
}

