<?php
require_once('../../vendor/autoload.php');
require_once('../WxPay.pub.config.php');
use Codelint\Wechat\JsSdk\JsSdk;

$jsSdk = new JsSdk();
$jsSdk->setAppId(WxPayConf_pub::APPID);
$jsSdk->setAppSecret(WxPayConf_pub::APPSECRET);

$token = $jsSdk->getToken();

$ticket = $jsSdk->getJsApiTicket($token);

$url = array_get($_SERVER, 'HTTP_REFERER', '');
$config = $jsSdk->getConfigSignature($ticket, $url);

//$signature = new \Codelint\Wechat\JsSdk\Card\Signature();
//$signature->add_data(WxPayConf_pub::APPID);
//var_dump($nonstr = str_random(16));
//$signature->add_data($nonstr);
//var_dump($now = time());
//$signature->add_data('' . $now);
//$signature->add_data($jsSdk->getCardTicket($token));
//var_dump($signature->get_signature());
//$api_ticket = $jsSdk->getCardTicket($token);
//$ext = $jsSdk->getAddCardSignature($api_ticket, 'p8O_-jogSK_lQz0dyH-C9Plu4f_A');
//var_dump(json_encode(array_only($ext, ['code', 'openid', 'timestamp', 'signature'])));
//die();
?>

/*
* 注意：
* 1. 所有的JS接口只能在公众号绑定的域名下调用，公众号开发者需要先登录微信公众平台进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。
* 2. 如果发现在 Android 不能分享自定义内容，请到官网下载最新的包覆盖安装，Android 自定义分享接口需升级至 6.0.2.58 版本及以上。
* 3. 常见问题及完整 JS-SDK 文档地址：http://mp.weixin.qq.com/wiki/7/aaa137b55fb2e0456bf8dd9148dd613f.html
*
* 开发中遇到问题详见文档“附录5-常见错误及解决办法”解决，如仍未能解决可通过以下渠道反馈：
* 邮箱地址：weixin-open@qq.com
* 邮件主题：【微信JS-SDK反馈】具体问题
* 邮件内容说明：用简明的语言描述问题所在，并交代清楚遇到该问题的场景，可附上截屏图片，微信团队会尽快处理你的反馈。
*/
wx.config({
    debug: true,
    appId: '<?php echo $jsSdk->getAppId(); ?>',
    timestamp: '<?php echo $config['timestamp'] ?>',
    nonceStr: '<?php echo $config['noncestr'] ?>',
    signature: '<?php echo $config['signature'] ?>',
    signature_str: '<?php echo $config['sign_str'] ?>',
    jsApiList: [
        'checkJsApi',
        'onMenuShareTimeline',
        'onMenuShareAppMessage',
        'onMenuShareQQ',
        'onMenuShareWeibo',
        'hideMenuItems',
        'showMenuItems',
        'hideAllNonBaseMenuItem',
        'showAllNonBaseMenuItem',
        'translateVoice',
        'startRecord',
        'stopRecord',
        'onRecordEnd',
        'playVoice',
        'pauseVoice',
        'stopVoice',
        'uploadVoice',
        'downloadVoice',
        'chooseImage',
        'previewImage',
        'uploadImage',
        'downloadImage',
        'getNetworkType',
        'openLocation',
        'getLocation',
        'hideOptionMenu',
        'showOptionMenu',
        'closeWindow',
        'scanQRCode',
        'chooseWXPay',
        'openProductSpecificView',
        'addCard',
        'chooseCard',
        'openCard'
    ]
});