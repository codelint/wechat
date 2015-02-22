<?php namespace Codelint\Wechat\JsSdk\Card;

/**
 * Cash:
 * @date 15/2/23
 * @time 02:41
 * @author Ray.Zhang <codelint@foxmail.com>
 **/
class Cash extends CardBase {
    function set_least_cost($least_cost)
    {
        $this->least_cost = $least_cost;
    }

    function set_reduce_cost($reduce_cost)
    {
        $this->reduce_cost = $reduce_cost;
    }
}

;