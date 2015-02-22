<?php namespace Codelint\Wechat\JsSdk\Card;

/**
 * ScenicTicket:
 * @date 15/2/23
 * @time 02:43
 * @author Ray.Zhang <codelint@foxmail.com>
 **/
class ScenicTicket extends CardBase {
    function set_ticket_class($ticket_class)
    {
        $this->ticket_class = $ticket_class;
    }

    function set_guide_url($guide_url)
    {
        $this->guide_url = $guide_url;
    }
}