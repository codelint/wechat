<?php namespace Codelint\Wechat\JsSdk\Card;

/**
 * Gift:
 * @date 15/2/23
 * @time 02:43
 * @author Ray.Zhang <codelint@foxmail.com>
 **/
class Gift extends CardBase {
    function set_gift($gift)
    {
        $this->gift = $gift;
    }
}