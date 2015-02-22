<?php namespace Codelint\Wechat\JsSdk\Card;

/**
 * Discount:
 * @date 15/2/23
 * @time 02:43
 * @author Ray.Zhang <codelint@foxmail.com>
 **/
class Discount extends CardBase {
    function set_discount($discount)
    {
        $this->discount = $discount;
    }
}