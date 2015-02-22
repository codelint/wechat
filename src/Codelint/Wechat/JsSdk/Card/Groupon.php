<?php namespace Codelint\Wechat\JsSdk\Card;

/**
 * Groupon:
 * @date 15/2/23
 * @time 02:43
 * @author Ray.Zhang <codelint@foxmail.com>
 **/
class Groupon extends CardBase {
    function set_deal_detail($deal_detail)
    {
        $this->deal_detail = $deal_detail;
    }
}