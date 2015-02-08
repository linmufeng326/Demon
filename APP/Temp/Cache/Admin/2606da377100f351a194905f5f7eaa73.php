<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
	</head>
	<body>
<?php foreach ( $blog[0][attr] as $s => $q) echo $s.'='.$q; foreach ( $q as $k => $v) echo $k.'='.$v; echo '<p>'; foreach ( $attr as $ks => $vs) if(in_array($v,$vs)) echo 'yes'; else echo 'no';?>
	</body>
</html>