<?php namespace Codelint\Wechat\Common;

/**
 * Base: 
 * @date 15/2/14
 * @time 23:34
 * @author Ray.Zhang <codelint@foxmail.com>
 **/
class AuthParams implements IAuthParams {

    private $auth_data = array(
        'app_id' => '',
        'mch_id' => '',
        'app_secret' => '',
        'cert_path' => '',
        'cert_key_path' => '',
        'pay_sign_key' => ''
    );

    public function getAppId()
    {
        return $this->auth_data['app_id'];
    }

    public function setAppId($app_id)
    {
        $this->auth_data['app_id'] = $app_id;
    }

    public function getMchId()
    {
        return $this->auth_data['mch_id'];
    }

    public function setMchId($mch_id)
    {
        $this->auth_data['mch_id'] = $mch_id;
    }

    public function getAppSecret()
    {
        return $this->auth_data['app_secret'];
    }

    public function setAppSecret($secret)
    {
        $this->auth_data['app_secret'] = $secret;
    }

    public function getPaySignKey()
    {
        return $this->auth_data['pay_sign_key'];
    }

    public function setPaySignKey($key)
    {
        $this->auth_data['pay_sign_key'] = $key;
    }

    public function getCertPath()
    {
        return $this->auth_data['cert_path'];
    }

    public function setCertPath($path)
    {
        $this->auth_data['cert_path'] = $path;
    }

    public function getCertKeyPath()
    {
        return $this->auth_data['cert_key_path'];
    }

    public function setCertKeyPath($path)
    {
        $this->auth_data['cert_key_path'] = $path;
    }
}