<?php
/**
 * Created by PhpStorm.
 * User: Yang
 * Date: 2015/12/8
 * Time: 15:04
 */
use Library\Auth;
use Library\HttpClient;
use Library\HttpClientException;

function query($sql, $paramList = array(), $compress = 'false')
{
    return serviceGet('Basic/QueryList', array('sql' => $sql, 'compress' => $compress, 'paramList' => $paramList));
}



function serviceGet($api, $parameters = array(), $base_url = null, $assoc = false)
{
    return serviceSend(Auth::tokenId(), $api, $parameters, null, $assoc = $assoc, $base_url);
}



function servicePost($api, $parameters = array(), $data = '', $base_url = null, $assoc = false)
{
    return serviceSend(Auth::tokenId(), $api, $parameters, $data, $assoc = $assoc, $base_url);
}



function serviceSend($tokenId, $api, $parameters = array(), $data = null, $assoc = false, $base_url = null)
{
    $base_url = empty($base_url) ? C('BASE_API') : $base_url;
    $options = array(
        'base_url' => $base_url
    );
    $r = new HttpClient($options);
    if ($data === null) {
        $header = array('Authorization' => $tokenId);
        $result = $r->get($api, $parameters, $header);
    } else {
        //post最大数据为1024，如果大于就要加'Expect'=>null，不然会报错"100-continue"，错误信息提示不出来
        $header = array('Authorization' => $tokenId, 'Content-Type' => 'application/json;charset=utf-8', 'Expect' => null);
        $result = $r->post($api, $parameters, $data, $header);
    }
    if ($result->error != '') {
        // throw new HttpClientException($result->error);
    } elseif ($result->info->http_code == 500) {
        $error = json_decode($result->response);
        return $error->ExceptionMessage;
    } elseif ($result->info->http_code < 200 || $result->info->http_code > 299) {
        $error = json_decode($result->response);
        if ($error->ExceptionMessage != '')
            //echo $error->ExceptionMessage;
            throw new HttpClientException('http_code:' . $result->info->http_code . 'error:' . $error->ExceptionMessage);
        elseif ($error->message != '')
            throw new HttpClientException('http_code:' . $result->info->http_code . 'error:' . $error->message);
        else
            throw new HttpClientException('http_code:' . $result->info->http_code . 'error:' . $result->response);
    }
    return json_decode($result->response, $assoc);
}
