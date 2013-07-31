<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><!-- USER_CONTENT --></title>
<?php require($_SERVER['DOCUMENT_ROOT']."/inc/header.php"); ?>
</head>
<body class="col-1">
<h1 class="acc">San Jos&eacute; State University</h1>
<div id="bg">
<div id="container">
	<?php require($_SERVER['DOCUMENT_ROOT']."/inc/topnav.php"); ?>
    <div id="breadcrumb">
    	<div class="left"><!--link breadcrumbs go here--></div>
        <div class="right">
        	<?php require($_SERVER['DOCUMENT_ROOT']."/inc/social-media-subsite.php"); ?>
        </div>
        
    </div>
    <div id="content" role="main">
    	<div class="left">
    		<h1 class="acc">Content</h1>
        	<h2 class="pagetitle">Beta-test</h2>
    		<div id="betatest">
        	<h3>Homepage</h3>
        		<ul>
        			<li><a href="home-subsite-1col.php"> 1col Subsite Homepage</a></li>
            		<li><a href="home-subsite-2col.php">2col Subsite Homepage</a></li>
            		<li><a href="home-subsite-3col.php">3col Subsite Homepage</a></li>
        		</ul>
        	<h3>Intermediate/End Pages</h3>
        		<ul>
        			<li><a href="1col.php">1col Template</a></li>
            		<li><a href="2col.php"> 2col Template</a></li>
            		<li><a href="3col.php">3col Template</a></li>
            		<li><a href="news.php">News/blog (rss feed)</a></li>
            		<li><a href="forms.php">Forms</a></li>
            		<li><a href="staff-directory.php">Staff directory</a></li>
	        		<li><a href="site-index.php">Site Index</a></li>
    			</ul>
    
    		</div>
    		<p>&nbsp;</p>
    		<p>&nbsp;</p>
    		<p>&nbsp;</p>
    		<p>&nbsp;</p>
        </div>
        <div class="right">

        </div>
        
    </div>
	<!-- TEMPLATE CHANGE 2011-11-11 -->
	<div id="footer">
    	<?php
			print file_get_contents('http://www.sjsu.edu/sjsuhome/includes/footer.inc'); 
		?>
	<!-- END TEMPLATE CHANGE 2011-11-11 -->
</div> 
</div>
<div id="footer_bg"></div>
<?php require($_SERVER['DOCUMENT_ROOT']."/inc/scripts.php"); ?>
</body>
</html>
