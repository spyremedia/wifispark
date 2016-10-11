<?php
session_start();
if(isset($_POST[search])) {
	//// check fields are populated
	
	//// set session cookie
	$_SESSION[username] = $_POST[username];
	}
	
if(isset($_GET[clear])) {
	$_SESSION[username] = NULL;
	session_destroy();
	}
	
if(isset($_SESSION[username]) || $_SESSION[username] != NULL) {
	$showtweets = '<a class="twitter-timeline" href="https://twitter.com/'.$_SESSION[username].'">Tweets</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>';
	$logowidth = "25%";
	} else {
		$showtweets = "<div align='center'>Enter a Twitter @username to read the feed!</div>";
		$logowidth = "50%";
		}
?>