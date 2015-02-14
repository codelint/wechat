<?php namespace Codelint\Wechat\Payment;
use Codelint\Wechat\Common\Utils;

/**
 * Common_util_pub: 所有微信接口的基类
 * @date 15/2/12
 * @time 23:34
 * @author Ray.Zhang <codelint@foxmail.com>
 **/
class CommonUtil {

    protected $app_id = '';
    protected $app_secret = '';
    protected $pay_sign_key = '';
    protected $mch_id = '';
    protected $cert_path = '';
    protected $cert_key_path = '';
    protected $pub_cert_path = '';

    function init($opts)
    {
        $this->app_id = $opts['app_id'];
        $this->mch_id = $opts['mch_id'];
        $this->pay_sign_key = $opts['pay_sign_key'];
        $this->app_secret = $opts['app_secret'];
        $this->cert_path = $opts['cert_path'];
        $this->cert_key_path = $opts['cert_key_path'];
        $this->pub_cert_path = array_get($opts, 'pub_cert_path', '');
        return $this;
    }

    const CURL_TIMEOUT = 30;

    function __construct()
    {
    }

    function trimString($value)
    {
        return Utils::trimString($value);
    }

    /**
     *    作用：产生随机字符串，不长于32位
     */
    public function createNoncestr($length = 32)
    {
        return Utils::createNoncestr($length);
    }

    /**
     *    作用：格式化参数，签名过程需要使用
     */
    function formatBizQueryParaMap($paraMap, $urlencode)
    {
        return Utils::formatBizQueryParaMap($paraMap, $urlencode);
    }

    /**
     *    作用：生成签名
     */
    public function getSign($Obj)
    {
        return Utils::genSignature($Obj, $this->pay_sign_key);
    }

    /**
     *    作用：array转xml
     */
    function arrayToXml($arr)
    {
        return Utils::arrayToXml($arr);
    }

    /**
     *    作用：将xml转为array
     */
    public function xmlToArray($xml)
    {
        return Utils::xmlToArray($xml);
    }

    /**
     *    作用：以post方式提交xml到对应的接口url
     */
    public function postXmlCurl($xml, $url, $second = 30)
    {
        return Utils::postXmlCurl($xml, $url, $second);
    }

    /**
     *    作用：使用证书，以post方式提交xml到对应的接口url
     */
    function postXmlSSLCurl($xml, $url, $second = 30)
    {
        return static::postXmlSSLCurl($xml, $url, $this->cert_path, $this->cert_key_path, $second);
    }

    /**
     *    作用：打印数组
     */
    function printErr($wording = '', $err = '')
    {
        print_r('<pre>');
        echo $wording . "</br>";
        var_dump($err);
        print_r('</pre>');
    }
}






