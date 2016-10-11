<?php include("assets/php/phpScript.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Test app</title>
</head>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<link rel="apple-touch-icon" sizes="57x57" href="assets/img/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets/img/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="assets/img/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
<link rel="manifest" href="assets/img/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/img/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link href="assets/style/global.css" rel="stylesheet" type="text/css">
<style> .imglogo { width: <?php echo $logowidth; ?>; } </style>
<body>

<div id="frame-api"  >
<div class="imglogo bounceing"><img src="http://orig05.deviantart.net/0488/f/2010/236/2/c/supertux_dock_icon_by_sarrel.png" /></div>
<form action="index.php" method="post" enctype="multipart/form-data">
<div align="center"><input name="username" type="text" placeholder="username" required="required" class="searchUser " /><input name="search" value="Search" type="submit" class="buttonSubmit"/><a href="?clear"><input name="clear" value="Clear" type="button" class="buttonClear"/></a></div>
</form>
<div id="frame-tweet">
<?php echo $showtweets ?>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script>
$(function () {
    $(".bounceing").effect("bounce", { times:4, distance:100 }, 400);
});
</script>
</body>
</html>