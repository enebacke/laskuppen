<?php 
session_start();

if(!isset($_SESSION['login']) && !isset($_SESSION['redirect'])){
	$_SESSION['redirect'] = true;
	$_SESSION['login'] = false;
	header("Location:/laskuppen/login.php");
}
else{
	if(!$_SESSION['login'] && !$_SESSION['redirect']){
		$_SESSION['redirect'] = true;
		header("Location:/laskuppen/login.php");
	}
	else{
		$_SESSION['redirect'] = false;		
	}
}
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
<title> Laskuppen | NTI </title>
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="table.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="colors.css" />
<link rel="stylesheet" type="text/css" href="form.css" />


</head>
<body class="home page page-id-5 page-template-default">

<div id="wrapper" class="hfeed">
   	<div id="header">
            
        <div id="masthead">        	
        	<div class="site-title doshow">
            <a href="/laskuppen/" title="The Book Design" rel="home">Läskuppen</a>
            </div>
            		    		<h1 id="blog-description" class="doshow">NTI Gymnasiet Göteborg</h1>
			            <div id="access">
			</div><!-- #access -->
        </div><!--#masthead-->
    </div><!--#header-->
<div id="container">
	<div id="book-top"></div>
	    <div id="tabs">
			<div class="menu">
	    		<ul>
		    		<li class="page_item page-item-28"><a href="/laskuppen/" title="Blog">Start</a></li>
		    		<li class="page_item page-item-6"><a href="/laskuppen/classes.php" title="Klasser">Klasser</a></li>
		    		<li class="page_item page-item-7"><a href="/laskuppen/persons.php" title="Products">Personer</a></li>
		    		<li class="page_item page-item-8"><a href="/laskuppen/books.php" title="Services">Böcker</a></li>
		    		<li class="page_item page-item-10"><a href="/laskuppen/add.php" title="Contact">Recensera bok</a></li>
	    		</ul>
			</div>
	    </div><!--#tabs-->	
		<div id="content">
			
				
				<div id="post-5" class="post-5 page type-page status-publish hentry">
					