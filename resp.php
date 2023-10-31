<?php
$mess = $_GET["mess"];
$mail = new SaeMail();
$ret = $mail->quickSend( 'to@qq.com' , '表白情况汇报' , $mess , 'from@sina.com' , '密码' );
if ($ret === false)
var_dump($mail->errno(), $mail->errmsg());
?>
