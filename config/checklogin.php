<?php

/* Admin Check Login  */
function sudo()
{
	if ((strlen($_SESSION['id']) == 0)) {
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = "index.php";
		$_SESSION["id"] = "";
		header("Location: http://$host$uri/$extra");
	}
}


/*  Staff  */
function staff()
{
	if (
		(strlen($_SESSION['id']) == 0) &&
		(strlen($_SESSION['number']) == 0)
	) {
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = "index.php";
		$_SESSION["id"] = "";
		header("Location: http://$host$uri/$extra");
	}
}
