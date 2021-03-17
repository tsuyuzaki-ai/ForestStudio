<?php session_start();
function random($length = 8){
    return substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, $length);
}
$_SESSION['token']  = random(20);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせ - FOREST STUDIO</title>
<link rel="stylesheet" href="style.css">

<!--[if lt IE 9]>
<script src="html5shiv-printshiv.js"></script>
<![endif]-->
</head>
<body id="contact">

<header>
<h1><a href="index.html"><img src="logo.png" alt="">FOREST STUDIO</a></h1>

<nav>
<ul>
<li><a href="index.html">トップ</a></li>
<li><a href="news.html">お知らせ</a></li>
<li><a href="about.html">工房について</a></li>
<li><a href="contact.html">お問い合わせ</a></li>
</ul>
</nav>
</header>

<article>
<h1>お問い合わせ</h1>

<p>ご意見、ご感想などがありましたら、以下の欄にご記入の上、送信してください。また、森の工房やイベントに関するご質問などもお気軽にお寄せください。</p>

<form action="https://www.rescue.ne.jp/form/mail.cgi" method="post">

<p>
<label>
名前：<input type="text" name="username">
</label>
</p>

<p>
<label>
メールアドレス：<input type="email" name="usermail">
</label>
</p>

<p>
<label>コメント：
<textarea name="usercomment"></textarea>
</label>
</p>


<p><input type="submit" value="送信"></p>
<input type="hidden" name="token" value="<?=$_SESSION['token'] ?>">
<small>Powered by <a href="http://www.rescue.ne.jp/" target="_blank">CGI RESCUE</a><sup>&reg;</sup></small>
</form>

</article>

<footer>
<small>Copyright &copy; FOREST STUDIO, all rights reserved.</small>
</footer>

</body>
</html>
