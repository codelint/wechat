<?php namespace Codelint\Wechat\JsSdk\Card;

/**
 * Card:
 * @date 15/2/23
 * @time 02:45
 * @author Ray.Zhang <codelint@foxmail.com>
 **/
class Card { //工厂
    private $CARD_TYPE = Array("GENERAL_COUPON",
        "GROUPON", "DISCOUNT",
        "GIFT", "CASH", "MEMBER_CARD",
        "SCENIC_TICKET", "MOVIE_TICKET");

    private $card_type = '';

    function __construct($card_type, $base_info)
    {
        if (!in_array($card_type, $this->CARD_TYPE))
            exit("CardType Error");
        if (!$base_info instanceof BaseInfo)
            exit("base_info Error");
        $this->card_type = $card_type;
        switch ($card_type)
        {
            case $this->CARD_TYPE[0]:
                $this->general_coupon = new GeneralCoupon($base_info);
                break;
            case $this->CARD_TYPE[1]:
                $this->groupon = new Groupon($base_info);
                break;
            case $this->CARD_TYPE[2]:
                $this->discount = new Discount($base_info);
                break;
            case $this->CARD_TYPE[3]:
                $this->gift = new Gift($base_info);
                break;
            case $this->CARD_TYPE[4]:
                $this->cash = new Cash($base_info);
                break;
            case $this->CARD_TYPE[5]:
                $this->member_card = new MemberCard($base_info);
                break;
            case $this->CARD_TYPE[6]:
                $this->scenic_ticket = new ScenicTicket($base_info);
                break;
            case $this->CARD_TYPE[8]:
                $this->movie_ticket = new MovieTicket($base_info);
                break;
            default:
                exit("CardType Error");
        }
        return true;
    }

    function get_card()
    {
        switch ($this->card_type)
        {
            case $this->CARD_TYPE[0]:
                return $this->general_coupon;
            case $this->CARD_TYPE[1]:
                return $this->groupon;
            case $this->CARD_TYPE[2]:
                return $this->discount;
            case $this->CARD_TYPE[3]:
                return $this->gift;
            case $this->CARD_TYPE[4]:
                return $this->cash;
            case $this->CARD_TYPE[5]:
                return $this->member_card;
            case $this->CARD_TYPE[6]:
                return $this->scenic_ticket;
            case $this->CARD_TYPE[8]:
                return $this->movie_ticket;
            default:
                exit("GetCard Error");
        }
    }

    function toJson()
    {
        return "{ \"card\":" . urldecode(json_encode($this)) . "}";
    }
}

;