<?php namespace Codelint\Wechat\JsSdk\Card;

/**
 * CardBase: 
 * @date 15/2/23
 * @time 02:26
 * @author Ray.Zhang <codelint@foxmail.com>
 **/
class CardBase{
	public function __construct($base_info){
		$this->base_info = $base_info;
	}
};