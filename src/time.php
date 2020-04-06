<?php
/**
 * 时间函数
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/10/10
 * Time: 17:58
 */

if (!function_exists('time_area')) {
    /**
     * 获取精确时间范围
     *
     * @param string $tag
     * @return array
     */
    function time_area($tag)
    {
        $time = time();
        switch ($tag)
        {
            // 今天开始到现在的时间
            case 'today now':
                $timeArea = [
                    date('Y-m-d 00:00:00', $time),
                    date('Y-m-d H:i:s', $time),
                ];
                break;
            // 今天
            case 'today':
                $timeArea = [
                    date('Y-m-d 00:00:00', $time),
                    date('Y-m-d 23:59:59', $time),
                ];
                break;
            // 昨天
            case 'yesterday':
                $timeArea = [
                    date('Y-m-d 00:00:00', $time - 3600 * 24),
                    date('Y-m-d 23:59:59', $time - 3600 * 24),
                ];
                break;
            // 本周到现在时间
            case 'this week now':
                $weekDayStartOffset = date('N', $time) - 1;

                $timeArea = [
                    date('Y-m-d 00:00:00', $time - 3600 * 24 * $weekDayStartOffset),
                    date('Y-m-d 23:59:59', $time),
                ];
                break;
            // 本周
            case 'this week':
                $weekDayStartOffset = date('N', $time) - 1;
                $weekDayEndOffset   = 7 - date('N', $time);

                $timeArea = [
                    date('Y-m-d 00:00:00', $time - 3600 * 24 * $weekDayStartOffset),
                    date('Y-m-d 23:59:59', $time + 3600 * 24 * $weekDayEndOffset),
                ];
                break;
            // 上周
            case 'last week':
                $weekDayStartOffset = date('N', $time) - 8;

                $timeArea = [
                    date('Y-m-d 00:00:00', $time - 3600 * 24 * $weekDayStartOffset),
                    date('Y-m-d 23:59:59', $time - 3600 * 24 * ($weekDayStartOffset - 7)),
                ];
                break;
            // 本月到当前时间
            case 'this month now':
                $timeArea = [
                    date('Y-m-01 00:00:00', $time),
                    date('Y-m-d H:i:s', $time),
                ];
                break;
            // 本月
            case 'this month':
                $timeArea = [
                    date('Y-m-01 00:00:00', $time),
                    date('Y-m-t 23:59:59', $time),
                ];
                break;
            // 上月
            case 'last month':
                $time = strtotime(date('Y-m-01 00:00:00', $time)) - 1;

                $timeArea = [
                    date('Y-m-01 00:00:00', $time),
                    date('Y-m-t 23:59:59', $time),
                ];
                break;
            default:
                // 今天开始到现在的时间
                $timeArea = [
                    date('Y-m-d 00:00:00', $time),
                    date('Y-m-d H:i:s', $time),
                ];
                break;
        }

        return $timeArea;
    }
}

if (!function_exists('last_hour_area')) {
    /**
     * 最近n小时时间范围
     *
     * @param int $hour
     * @return array
     */
    function last_hour_area($hour=1)
    {
        $time = time();
        return [
            date('Y-m-d H:i:s', $time-3600*$hour),
            date('Y-m-d H:i:s', $time),
        ];
    }
}