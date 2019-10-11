<?php
/**
 * 对象函数
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/10/10
 * Time: 17:53
 */

if (!function_exists('object_to_array')) {
    /**
     * 快速对象转数组
     *
     * @param object $data
     * @return array
     */
    function object_to_array($data)
    {
        return json_decode(json_encode($data), true);
    }
}