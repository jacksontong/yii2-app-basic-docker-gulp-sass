<?php
/**
 * @author Jackson Tong <tongtoan2704@gmail.com>
 */

return [
    'class' => 'yii\redis\Connection',
    'hostname' => getenv('REDIS_HOST'),
    'port' => 6379,
    'database' => 0,
];