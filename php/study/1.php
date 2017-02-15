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
$res = 'hello i am king';
var_dump(is_string($res));
echo '<br />';
echo strtolower($res);
echo '<br />';
echo strtoupper($res);
echo '<br />';
echo ucfirst($res);
echo '<br />';
echo ucwords($res);
