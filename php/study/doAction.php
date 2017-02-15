<?php
header('content-type:text/html;charset=utf-8');
$username = $_POST['username'];
$password = $_POST['password'];
$password1 = $_POST['password1'];
$email = $_POST['email'];
$fav = $_POST['fav'];
if(!empty($fav)){
    $favStr = join(',',$fav);
}else{
    $favStr = '';
}
$verify = strtolower(trim($_POST['verify']));
$verify1 = strtolower(trim($_POST['verify1']));
//检测首字母为英文字母
$char = $username{0};
$ascii = ord($char);//得到指定字符的ASCII值
if(!(($ascii >= 65 && $ascii <= 90) || ($ascii >= 97 && $ascii <= 122))){
    exit('用户名不符合规则');
}

if(strlen($username) < 6 || strlen($username) > 10){
    exit('用户名长度错误，请确认在6~10位之间');
}

$passLen = strlen($password);
if($passLen == 0){
    exit('密码不能为空');
}
if($passLen < 6 || $passLen > 10){
    exit('密码不符合规范');
}
if(strcmp($password,$password1) != 0){
    exit('两次输入的密码不一致');
}
if(strlen($email) == 0){
    exit('邮箱不能为空');
}
if(strpos($email,'@') == false){
    exit('非法邮箱');
}
if($verify !== $verify1){
    exit('验证码输入错误');
}
echo '恭喜您注册成功';
echo '<br />';

$table = <<<EOF
    <table border=1>
        <tr>
            <td>用户名</td>
            <td>邮箱</td>
            <td>兴趣爱好</td>
        </tr>
        <tr>
            <td>{$username}</td>
            <td>{$email}</td>
            <td>{$favStr}</td>
        </tr>
    </table>
EOF;
echo $table;