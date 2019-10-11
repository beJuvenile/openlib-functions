<?php
/**
 * 日志函数
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/10/10
 * Time: 18:38
 */

if (!function_exists('logger')) {
    /**
     * 记录日志
     *
     * @param string $file // 文件
     * @param string $msg // 内容
     * @param string $dir // 目录
     */
    function logger($msg, $file, $dir)
    {
        if (!is_dir($dir))
            mkdir($dir, 755, true);

        file_put_contents($dir . DIRECTORY_SEPARATOR . $file, date('Y-m-d H:i:s') . ' ' . $msg . PHP_EOL, FILE_APPEND);
    }
}