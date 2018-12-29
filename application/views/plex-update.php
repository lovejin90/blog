<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="title" content="JEON BYEONG JIN">
	<meta name="author" content="병지니">
	<meta name="keywords" content="개인포트폴리오 사이트">
	<meta name="subject" content="JEON BYEONG JIN">
	<meta name="content-language" content="ko">
	<meta name="copyright" content="Lovejin90 All rights reserved">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="naver-site-verification" content="267adbac0ede0230a9f300a30a1def3764839349"/>
	<title>JEON BYEONG JIN<?=$title?></title>

	<script src="<?=$lib_dir?>js/jquery-3.3.1.min.js"></script>
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?=$lib_dir?>4.2.1/css/bootstrap.min.css">
	<script src="<?=$lib_dir?>js/popper.js"></script>
    <script src="<?=$lib_dir?>4.2.1/js/bootstrap.min.js"></script>
	<!-- icon -->
	<link href="<?=$lib_dir?>fontawesome/css/all.css" rel="stylesheet">
	<!-- flexslider js -->
	<link rel="stylesheet" href="<?=$lib_dir?>flexslider/css/flexslider.css" type="text/css">
	<script src="<?=$lib_dir?>flexslider/js/jquery.flexslider.js"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR|Teko" rel="stylesheet">
    <style>
        html,body{
            min-height:100%;
        }
    </style>
</head>
<body>
    <?php foreach($movieData['movie'] as $k => $v) : ?>
        <?=$v?>
    <?php endforeach;?>


</body>
</html>