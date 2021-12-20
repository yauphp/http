<?php
namespace Yauphp\Http;

/**
 * 过滤器接口
 * @author Tomix
 *
 */
interface IFilter
{
    /**
     * 执行过滤方法
     * @param Context $context
     */
    function filter(Context $context,FilterChain $chain);
}

