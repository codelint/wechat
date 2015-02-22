<?php namespace Codelint\Wechat\JsSdk\Card;

/**
 * DateInfo:
 * @date 15/2/23
 * @time 02:24
 * @author Ray.Zhang <codelint@foxmail.com>
 **/
class DateInfo {
    function __construct($type, $arg0, $arg1 = null)
    {
        if (!is_int($type))
            exit("DateInfo.type must be integer");
        $this->type = $type;
        if ($type == 1) //固定日期区间
        {
            if (!is_int($arg0) || !is_int($arg1))
                exit("begin_timestamp and  end_timestamp must be integer");
            $this->begin_timestamp = $arg0;
            $this->end_timestamp = $arg1;
        }
        else if ($type == 2) //固定时长（自领取后多少天内有效）
        {
            if (!is_int($arg0))
                exit("fixed_term must be integer");
            $this->fixed_term = $arg0;
        }
        else
            exit("DateInfo.tpye Error");
    }
}

;