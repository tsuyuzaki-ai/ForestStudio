<?php  session_start();

if( !empty($_POST['username']) && !empty($_POST['usermail']) 
&& !empty($_POST['usercomment']) && !empty($_POST['token']) 
&& $_POST['token'] == $_SESSION['token']){

	$body = '';
	foreach ($_POST as $key => $value) 
		$body.=htmlspecialchars($value,ENT_QUOTES).PHP_EOL;

	$header = "From: hoge1@hoge.com\n";
	$header .= "Cc: hoge2@hoge.com\n";
	$header .= "Bcc: hoge3@hoge.com";

	$success = mb_send_mail($_POST['usermail'] ,'お問合せ',$body,$header);
	// メールサーバーに届いたら $successには trueが代入されるので
	if( $success ){ 
		echo '<p>お問合せありがとうございました｡';
	}else{
		echo '<p>送信出来ませんでした｡';
	}

}else{
	echo '<p>必須項目がありません';
}