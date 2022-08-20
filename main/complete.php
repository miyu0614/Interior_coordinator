<?php
//直リンクされた場合index.phpにリダイレクト
if($_SERVER["REQUEST_METHOD"] != "POST"){
	header("Location: index.php");
	exit();
}

//メールの日本語設定
mb_language("japanese");
mb_internal_encoding("UTF-8");

//送信先アドレス
$to = $_POST['email'];
//メールの件名
$subject = "お問合せありがとうございます。";
//メッセージ本文を視覚的にみやすく格納

$message = <<< EOM
お問合せありがとうございます。

以下の内容で承りました。

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
【お名前】
{$_POST['name']}

【メール】
{$_POST['email']}

【性別】
{$_POST['sex']}

【お問合せ理由】
{$_POST['reason']}

【本文】
{$_POST['contact_body']}

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
EOM;

//送信元
$headers = "From: support@example.com";
//メール送信
mb_send_mail($to,$subject,$message,$headers);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel ="stylesheet" href = "style.css">
    <title>完了画面</title>
</head>
<body>
<h2>complete</h2>
<div class = complete>
	<p>お問い合わせありがとうございました。</p>
	<p>3営業日以内にご連絡させていただきます。</p>
	<p>今後とも当サイトをよろしくお願いいたします。</p>

	<p ><a href="main.php">お問い合わせトップへ</p>
</div>
    
</body>
</html>