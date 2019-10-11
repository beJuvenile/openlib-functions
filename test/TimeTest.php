<?php
/**
 * 时间函数测试
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/10/10
 * Time: 18:05
 */
require_once '../vendor/autoload.php';


list($startAt, $endAt) = time_area('today');
echo sprintf("Start Time: %s End Time: %s", $startAt, $endAt);