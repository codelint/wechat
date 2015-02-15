<?php namespace Codelint\Wechat\Common;

/**
 * IAuth: 
 * @date 15/2/14
 * @time 23:35
 * @author Ray.Zhang <codelint@foxmail.com>
 **/
interface IAuthParams {
    public function getAppId();
    public function setAppId($app_id);
    public function getMchId();
    public function setMchId($mch_id);
    public function getAppSecret();
    public function setAppSecret($secret);
    public function getPaySignKey();
    public function setPaySignKey($key);
    public function getCertPath();
    public function setCertPath($path);
    public function getCertKeyPath();
    public function setCertKeyPath($path);
}