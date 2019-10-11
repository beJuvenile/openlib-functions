<?php
/**
 * 异常
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/10/10
 * Time: 17:56
 */

if (!function_exists('exception_to_array')) {
    /**
     * 异常信息数组
     *
     * @param Exception $e
     * @return array
     */
    function exception_to_array($e)
    {
        return [
            'info'  => $e->getMessage(),
            'file'  => $e->getFile(),
            'line'  => $e->getLine(),
            'trace' => $e->getTraceAsString(),
        ];
    }
}

if (!function_exists('exception_to_string')) {
    /**
     * 异常信息字符串
     *
     * @param Exception $e
     * @return string
     */
    function exception_to_string($e)
    {
        return sprintf("Info: %s File: %s Line: %d", $e->getMessage(), $e->getFile(), $e->getLine());
    }
}