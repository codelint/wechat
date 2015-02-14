<?php namespace Codelint\Wechat\Payment;
use PHPUnit_Framework_TestCase;

/**
 * BaseTest: 
 * @date 15/2/14
 * @time 13:43
 * @author Ray.Zhang <codelint@foxmail.com>
 **/
class BaseTest extends PHPUnit_Framework_TestCase{

    protected $config = array(
        'open_id' => '',
        'app_id' => '',
        'app_secret' => '',
        'mch_id' => '',
        'pay_sign_key' => '',
        'cert_path' => '',
        'cert_key_path' => ''
    );
} 