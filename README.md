# openlib-functions

#### 介绍
常用函数封装

#### 使用示例
~~~
require 'vendor/autoload.php';  

list($startAt, $endAt) = time_area('today');  
echo sprintf("Start Time: %s End Time: %s", $startAt, $endAt);  
~~~