<?php

namespace Alighasemzadeh\Gateway\Providers\JiBit;

use Alighasemzadeh\Gateway\Exceptions\TransactionException;

class JiBitException extends TransactionException
{

    /**
     * returns an associative array of `code` => `message`
     *
     * @return array
     */
    protected function getErrors()
    {
        return [
            'INITIAL'                      => 'درخواست Initiate Order انجام شده و OrderId دریافت شده است',
            'PGENTRY'                      => 'کاربر به درگاه جیبیت منتقل شده است',
            'CANCEL_BY_SYSTEM'             => 'درخواست پرداخت توسط سیستم لغو شده است )به عنوان مثال در صورتی که پس از 1۵ دقیقه verify انجام نشود پرداخت به صورت سیستمی لغو خواهد شد(',
            'CANCEL_BY_USER'               => 'درخواست پرداخت توسط کاربر لغو شده است',
            'PURCHASE_BY_USER'             => 'پرداخت توسط کاربر انجام شده است، اما هنوز Verify نشده است',
            'PURCHASE_CONFIRM_BY_MERCHANT' => 'پرداخت توسط کاربر پرداخت و توسط پذیرنده verify شده است',
        ];
    }
}
