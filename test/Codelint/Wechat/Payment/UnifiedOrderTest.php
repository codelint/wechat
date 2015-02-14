<?php namespace Codelint\Wechat\Payment;

require_once(__DIR__ .'/../../../../vendor/autoload.php');
require_once(__DIR__ .'/BaseTest.php');

/**
 * UnifiedOrderTest: 
 * @date 15/2/14
 * @time 13:35
 * @author Ray.Zhang <codelint@foxmail.com>
 **/
global $_SERVER;
class UnifiedOrderTest extends BaseTest{

    public function testGetPrepareId()
    {
        $unifiedOrder = new UnifiedOrder();
        $unifiedOrder->init($this->config);

        $unifiedOrder->setParameter('out_trade_no', time());
        $unifiedOrder->setParameter('total_fee', 1);
        $unifiedOrder->setParameter('body', 'pay 1 fen');
        $unifiedOrder->setParameter('trade_type', 'JSAPI');
        $_SERVER['REMOTE_ADDR'] = '127.0.0.1';

        $unifiedOrder->setParameter('openid', $this->config['open_id']);

        $unifiedOrder->setParameter('notify_url', 'http://m.qiaocat.com');

        $res = $unifiedOrder->getResult();

        $this->assertEquals('SUCCESS', $res['return_code']);

    }

} 