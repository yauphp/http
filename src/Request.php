<?php
namespace Yauphp\Http;

/**
 * http请求实体
 * @author Tomix
 *
 */
class Request
{
    /**
     * 请求方法
     * @var string
     */
    public $method="GET";

    /**
     * 字符编码
     * @var string
     */
    public $charset="utf-8";

    /**
     * 内容类型
     * @var string
     */
    public $contentType = "text/html";

    /**
     * 内容长度
     * @var string
     */
    public $contentLength=0;

    /**
     * 协议
     * @var string
     */
    public $protocol="HTTP/1.1";

    /**
     * 协议头
     * @var string
     */
    public $scheme="http";

    /**
     * 主机名
     * @var string
     */
    public $host="";

    /**
     * 端口
     * @var string
     */
    public $port=80;

    /**
     * 请求URI
     * @var string
     */
    public $uri;

    /**
     * GET参数
     * @var string
     */
    public $get=[];

    /**
     * POST参数
     * @var array
     */
    public $post=[];

    /**
     * 请求头部
     * @var string
     */
    public $headers=[];

    /**
     * cookie
     * @var array
     */
    public $cookies=[];

    /**
     * 请求主体
     * @var string
     */
    public $body;

    /**
     * 获取请求参数(搜索顺序:get,post)
     * @param string $name
     * @param string $default
     */
    public function getParameter($name,$default="")
    {
        if(array_key_exists($name, $this->get)){
            return $this->get[$name];
        }else if(array_key_exists($name, $this->post)){
            return $this->post[$name];
        }
        return $default;
    }

    /**
     * 获取GET请求参数
     * @param string $name
     * @param string $default
     * @return string
     */
    public function getGetParameter($name,$default="")
    {
        if(array_key_exists($name, $this->get)){
            return $this->get[$name];
        }
        return $default;
    }

    /**
     * 获取POST请求参数
     * @param string $name
     * @param string $default
     * @return string
     */
    public function getPostParameter($name,$default="")
    {
        if(array_key_exists($name, $this->post)){
            return $this->get[$name];
        }
        return $default;
    }
}