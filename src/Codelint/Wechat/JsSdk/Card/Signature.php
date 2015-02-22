<?php namespace Codelint\Wechat\JsSdk\Card;

/**
 * Signature:
 * @date 15/2/23
 * @time 02:36
 * @author Ray.Zhang <codelint@foxmail.com>
 **/
class Signature {
    function __construct()
    {
        $this->data = array();
    }

    function add_data($str)
    {
        array_push($this->data, (string)$str);
    }

    function get_signature()
    {
        sort($this->data, SORT_STRING);
        return sha1(implode($this->data));
    }
}

;