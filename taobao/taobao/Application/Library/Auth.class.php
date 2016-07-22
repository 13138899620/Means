<?php namespace Library;
/**
 * Created by PhpStorm.
 * User: Yang
 * Date: 2015/12/8
 * Time: 10:47
 */

class Auth
{
    //定义cookie常量
    const Staff = '_Staff_';
    const TokenId='_TokenId_';

    public static function user()
    {
        return cookie(self::Staff);
    }

    public static function guest()
    {
        return is_null(cookie(self::Staff));
    }

    public static function check()
    {
        return !self::guest();
    }

    public static function login($user)
    {
        cookie(self::Staff, $user);
    }

    public static function logout()
    {
        cookie(self::Staff, null);
    }
    public static function setTokenId($token)
    {
        cookie(self::TokenId,$token);
    }
    public static function tokenId()
    {
        return 'Basic '.base64_encode('asdf:1:asd');
        //cookie(self::TokenId);
    }
}