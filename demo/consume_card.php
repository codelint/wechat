<?php
require_once('../vendor/autoload.php');
require_once('./WxPay.pub.config.php');
use Codelint\Wechat\JsSdk\JsSdk;

$jsSdk = new JsSdk();
$jsSdk->setAppId(WxPayConf_pub::APPID);
$jsSdk->setAppSecret(WxPayConf_pub::APPSECRET);
$jsSdk->setup(array(
    'cert_path' => WxPayConf_pub::SSLCERT_PATH,
    'cert_key_path' => WxPayConf_pub::SSLKEY_PATH
));


$token = $jsSdk->getToken();

$card_id = $_GET['card_id'] ;

$jsSdk->consumeCard($token, $_GET['card_id'], $_GET['card_code']);