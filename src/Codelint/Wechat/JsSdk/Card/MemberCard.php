<?php namespace Codelint\Wechat\JsSdk\Card;

/**
 * MemberCard:
 * @date 15/2/23
 * @time 02:40
 * @author Ray.Zhang <codelint@foxmail.com>
 **/
class MemberCard extends CardBase {
    function set_supply_bonus($supply_bonus)
    {
        $this->supply_bonus = $supply_bonus;
    }

    function set_supply_balance($supply_balance)
    {
        $this->supply_balance = $supply_balance;
    }

    function set_bonus_cleared($bonus_cleared)
    {
        $this->bonus_cleared = $bonus_cleared;
    }

    function set_bonus_rules($bonus_rules)
    {
        $this->bonus_rules = $bonus_rules;
    }

    function set_balance_rules($balance_rules)
    {
        $this->balance_rules = $balance_rules;
    }

    function set_prerogative($prerogative)
    {
        $this->prerogative = $prerogative;
    }

    function set_bind_old_card_url($bind_old_card_url)
    {
        $this->bind_old_card_url = $bind_old_card_url;
    }

    function set_activate_url($activate_url)
    {
        $this->activate_url = $activate_url;
    }
}