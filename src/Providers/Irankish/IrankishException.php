<?php

namespace Alighasemzadeh\Gateway\Providers\Irankish;

use Alighasemzadeh\Gateway\Exceptions\TransactionException;

class IrankishException extends TransactionException
{

    /**
     * returns an associative array of `code` => `message`
     *
     * @return array
     */
    protected function getErrors()
    {
        return [
            100 => 'تراکنش با موفقیت انجام شد',
            110 => 'انصراف دارنده کارت',
            120 => 'موجودی حساب کافی نمی باشد',
            121 => 'مبلغ تراکنشهای کارت بیش از حد مجاز',
            130 => 'اطالعات کارت نا درست می باشد',
            131 => 'رمز کارت اشتباه است',
            132 => 'کارت مسدود است',
            133 => 'کارت منقضی شده است',
            140 => 'زمان مورد نظر به پایان رسیده است',
            150 => 'خطای داخلی بانک',
            160 => 'خطای انقضای کارت و یا اطلاعات CVV2 اشتباه است',
            166 => 'بانک صادر کننده کارت شما مجوز انجام تراکنش را صادر نکرده است',
            167 => 'خطا در مبلغ تراکنش',
            200 => 'مبلغ تراکنش بیش از حدنصاب مجاز',
            201 => 'مبلغ تراکنش بیش از حدنصاب مجاز برای روز کاری',
            202 => 'مبلغ تراکنش بیش از حدنصاب مجاز برای ماه کاری',
            203 => 'تعداد تراکنشهای مجاز از حد نصاب گذشته است',
            499 => 'خطای سیستمی ، لطفا مجددا تالش فرمایید',
            500 => 'خطا در تایید تراکنش های خرد شده',
            501 => 'خطا در تایید تراکتش ، ویزگی تایید خودکار',
            502 => 'آدرس آی پی نا معتبر',
            503 => 'پذیرنده در حالت تستی می باشد ، مبلغ نمی تواند بیش از حد مجاز تایین شده برای پذیرنده تستی باشد',
            504 => 'خطا در بررسی الگوریتم شناسه پرداخت',
            505 => 'مدت زمان الزم برای انجام تراکنش تاییدیه به پایان رسیده است',
            506 => 'ذیرنده یافت نشد',
            507 => 'توکن نامعتبر/طول عمر توکن منقضی شده است',
            508 => 'توکن مورد نظر یافت نشد و یا منقضی شده است',
            509 => 'خطا در پارامترهای اجباری خرید تسهیم شده',
            510 => 'خطا در تعداد تسهیم | مبالغ کل تسهیم مغایر با مبلغ کل ارائه شده | خطای شماره ردیف تکراری',
            511 => 'حساب مسدود است',
            512 => 'حساب تعریف نشده است',
            513 => 'شماره تراکنش تکراری است',
            -20 => 'در درخواست کارکتر های غیر مجاز وجو دارد',
            -30 => 'تراکنش قبلا برگشت خورده است',
            -50 => 'طول رشته درخواست غیر مجاز است',
            -51 => 'در در خواست خطا وجود دارد',
            -80 => 'تراکنش مورد نظر یافت نشد',
            -81 => ' خطای داخلی بانک',
            -90 => 'تراکنش قبلا تایید شده است',
        ];
    }
}
