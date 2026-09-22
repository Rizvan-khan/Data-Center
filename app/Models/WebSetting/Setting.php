<?php

namespace App\Models\WebSetting;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
    'mobile',
    'mobile2',
    'whatsapp',
    'whatsapp_new',
    'telegram_new',
    'phone_new',
    'facebook_new',
    'email',
    'emailfrom',
    'address',
    'city',
    'pincode',
    'state',
    'country',
    'title',
    'seo_title',
    'keywords',
    'description',
    'map',
    'pre',
    'url',
    'bitly',
    'package',
    'shipping_price',
    'logo',
    'website',
    'favicon',
    'facebook',
    'twitter',
    'youtube',
    'instagram',
    'linkedin',
    'pinterest',
    'status',
];
}
