<?php namespace Codelint\Wechat\JsSdk;

use Codelint\Wechat\Common\AuthParams;
use Codelint\Wechat\Common\Utils;

/**
 * Auth:
 * @date 15/2/14
 * @time 23:33
 * @author Ray.Zhang <codelint@foxmail.com>
 **/
class JsSdk extends AuthParams {

    protected $token_entry = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=%s&secret=%s';
    protected $ticket_entry = 'https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token=%s&type=%s';

    const TICKET_TYPE_JSAPI = 'jsapi';
    const TICKET_TYPE_CARD = 'wx_card';

    public function getToken()
    {
        $entry = sprintf($this->token_entry, $this->getAppId(), $this->getAppSecret());
        $res = Utils::getJSON($entry);
        return array_get($res, 'access_token', false);
    }

    public function getTicket($type, $token = false)
    {
        if ($token = $token ? $token : $this->getToken())
        {
            $entry = sprintf($this->ticket_entry, $token, $type);
            $res = Utils::getJSON($entry);
            return array_get($res, 'ticket', false);
        }
        else
        {
            return false;
        }
    }

    public function getJsApiTicket($token = false)
    {
        return $this->getTicket(static::TICKET_TYPE_JSAPI, $token);
    }

    public function getCardTicket($token = false)
    {
        return $this->getTicket(static::TICKET_TYPE_CARD, $token);
    }

    public function getConfigSignature($ticket, $url)
    {
        $data = array(
            'timestamp' => $this->getAppId(),
            'noncestr' => str_random(16),
            'url' => $url,
            'jsapi_ticket' => $ticket
        );
        ksort($data);
        $sign_str = '';
        foreach ($data as $k => $v)
        {
            $sign_str .= "&$k=$v";
        }
        $sign_str = substr($sign_str, 1);
        $data['signature'] = sha1($sign_str);
        $data['sign_str'] = $sign_str;
        return array_except($data, 'jsapi_ticket');
    }

    public function getAddCardSignature($ticket, $card_id, $card_code = '', $balance = '', $openid = '', $timestamp = '')
    {
        $now = $timestamp ? : time();
        $ret['card_id'] = $card_id;
        $ret['code'] = $card_code;
        $ret['timestamp'] = '' . $now;
        $ret['api_ticket'] = $ticket;
        $ret['balance'] = $balance;
        $ret['openid'] = $openid;

        $values = array_values($ret);
        sort($values, SORT_STRING);
        $ret['sign_str'] = implode('', $values);
        $ret['signature'] = strtoupper(sha1($ret['sign_str']));
        return $ret;
    }

    public function getJsApiList()
    {
        return array('checkJsApi',
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
            'openCard');
    }
}