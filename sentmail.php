<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>R SoftTech :: Query Requested</title>
</head>

<body bgcolor="#071907" style="color:white;">
<?php
$name = $_POST["name"];
$org = $_POST["org"];
$email = $_POST["email"];
$msg = $_POST["msg"];

mail("softtechr@gmail.com","Query from ".$name.", ".$org,$msg,'From: '.$email);
?>
Your query has been successfully submitted.
</body>
</html>