<?php namespace Codelint\Wechat\JsSdk\Card;

/**
 * BaseInfo:
 * @date 15/2/23
 * @time 02:25
 * @author Ray.Zhang <codelint@foxmail.com>
 **/
class BaseInfo {
    function __construct($logo_url, $brand_name, $code_type, $title, $color, $notice, $service_phone,
                         $description, $date_info, $sku)
    {
        if (!$date_info instanceof DateInfo)
            exit("date_info Error");
        if (!$sku instanceof Sku)
            exit("sku Error");
        if (!is_int($code_type))
            exit("code_type must be integer");
        $this->logo_url = $logo_url;
        $this->brand_name = $brand_name;
        $this->code_type = $code_type;
        $this->title = $title;
        $this->color = $color;
        $this->notice = $notice;
        $this->service_phone = $service_phone;
        $this->description = $description;
        $this->date_info = $date_info;
        $this->sku = $sku;
    }

    function set_sub_title($sub_title)
    {
        $this->sub_title = $sub_title;
    }

    function set_use_limit($use_limit)
    {
        if (!is_int($use_limit))
            exit("use_limit must be integer");
        $this->use_limit = $use_limit;
    }

    function set_get_limit($get_limit)
    {
        if (!is_int($get_limit))
            exit("get_limit must be integer");
        $this->get_limit = $get_limit;
    }

    function set_use_custom_code($use_custom_code)
    {
        $this->use_custom_code = $use_custom_code;
    }

    function set_bind_openid($bind_openid)
    {
        $this->bind_openid = $bind_openid;
    }

    function set_can_share($can_share)
    {
        $this->can_share = $can_share;
    }

    function set_location_id_list($location_id_list)
    {
        $this->location_id_list = $location_id_list;
    }

    function set_url_name_type($url_name_type)
    {
        if (!is_int($url_name_type))
            exit("url_name_type must be int");
        $this->url_name_type = $url_name_type;
    }

    function set_custom_url($custom_url)
    {
        $this->custom_url = $custom_url;
    }
}