<?php namespace Codelint\Wechat\JsSdk\Card;

/**
 * MovieTicket:
 * @date 15/2/23
 * @time 02:44
 * @author Ray.Zhang <codelint@foxmail.com>
 **/
class MovieTicket extends CardBase {
    function set_detail($detail)
    {
        $this->detail = $detail;
    }
}