<?php
header('content-type:text/html;charset=utf-8');
$username = 'vijay';
$str = <<<EOF
    <h1>{$username}</h1>
EOF;
echo $str;
echo '<br />';
$money = '123456';
echo number_format($money,2);
echo '<br />';
$res = 'hello king';
var_dump(is_string($res));