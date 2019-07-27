<?php
function json($code = '', $message = '', $date = array())
{
    $result = array(
        'code' => urlencode($code),
        'message' => urlencode($message),
        'content' => encodeArray($date)
    );
    exit(urldecode(json_encode($result)));
}

function encodeArray($arr = array())
{
    foreach ($arr as $key => $value) {
        if (is_array($value)) {
            $arr[$key] = encodeArray($value);
        } else {
            $arr[$key] = urlencode($value);
        }
    }
    return $arr;
}