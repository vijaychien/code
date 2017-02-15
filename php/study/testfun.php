<?php
header('content-type:text/html;charset=utf-8');
function test(){
    function test1(){
        return 'this is test.test1';
    }
}
test();
echo test1();