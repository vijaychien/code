<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
$string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

$code = '';

for ($i=1;$i<=5;$i++){
	
	$code .= '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$string{
		mt_rand(0,strlen($string)-1)
	}
	.'</span>';
	
}


?>
    <form action="doAction.php" method="post">
    <table border=1 bgcolor="abcdef" width="80%">
        <tr>
            <td align="right">用户名</td>
            <td><input type="text" name="username" id="" placeholder="请输入用户名...">用户首字母为英文字母，且长度为6~10之间</td>
        </tr>
        <tr>
            <td align="right">密码</td>
            <td><input type="password" name="password" id="" placeholder="请输入密码...">密码长度为6到10位之间</td>
        </tr>
        <tr>
            <td align="right">确认密码</td>
            <td><input type="password" name="password1" id="" placeholder="请输入确认密码..."></td>
        </tr>
        <tr>
            <td align="right">爱好</td>
            <td>
            <input type="checkbox" name="fav[]" id="" value="php">PHP
            <input type="checkbox" name="fav[]" id="" value="asp">ASP
            <input type="checkbox" name="fav[]" id="" value="java">JAVA
            <br />
            <input type="checkbox" name="fav[]" id="" value="c">C
            <input type="checkbox" name="fav[]" id="" value="c++">C++
            <input type="checkbox" name="fav[]" id="" value="NodeJS">NodeJS
            </td>
        </tr>
        <tr>
            <td align="right">邮箱</td>
            <td><input type="text" name="email" id="" placeholder="请输入邮箱..."></td>
        </tr>
        <tr>
            <td align="right">验证码</td>
            <td>
            <input type="text" name="verify" id="" placeholder="请输入验证码...">
            <input type="hidden" name="verify1" value="<?php echo strip_tags($code)?>">
            <?php echo $code;?>
            </td>
        </tr>
        <tr>
            <td colspan=2><input type="submit" value="立即注册"></td>
        </tr>
    </table>
    </form>
</body>
</html>