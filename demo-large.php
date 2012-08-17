<?php 
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
 require_once("$root/template/head_top.php"); ?>

	<title>SigFrid | Nick Jones</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

<?php require_once("$root/template/scripts.php");?>
	<script type="text/javascript" src="files/setsflick.js"></script>
	<link rel="stylesheet" type="text/css" media="all" href="files/flckrSet.css">
 <script>  
    $(document).ready(function(){ 
    	$('#holder').setsFlick({thumbSize:'q'});		
    });
</script>
<?php require_once("$root/template/head_bot.php");?>

<?php require_once("$root/template/top.php");?>
	<h2>setsFlick Demo - large thumbnails</h2>
	<p><a href = "index.php"><- Back</a></p>
	<div id = "holder">
	</div>
<?php require_once("$root/template/bottom.php") ?>

