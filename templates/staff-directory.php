<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><!-- USER_CONTENT --></title>
<?php require($_SERVER['DOCUMENT_ROOT']."/inc/header.php"); ?>
</head>
<body class="col-1"><!--googleoff:all-->
<div id="skip" class="acc"><a href="#skiptocontent">Skip to Main Content</a></div>
<div id="bg">
<div id="container">
    <!-- Subsite Primary Navigation -->
    <?php require($_SERVER['DOCUMENT_ROOT']."/inc/topnav-subsite.php"); ?>
    <!-- end Subsite Primary Navigation -->
    <div id="breadcrumb">
        <a href="/">SJSU Home</a> > 1 Column Template        
    </div><!-- end Breadcrumbs -->
    <div id="content" role="main">
        <!--googleon: all-->
        <h1 class="pagetitle" id="scrolltotop"><!-- title of page --></h1>
        <!--googleoff: all-->
        <div class="sidebar">
            <!-- Social Media -->
            <?php require($_SERVER['DOCUMENT_ROOT']."/inc/social-media-subsite.php"); ?>
            <nav class="secnav" role="navigation">
            <h2>Navigate</h2>
            <a class="back_up_level" href="../"><span class="navarrowback"></span>BACK to <!-- parent page <title> --></a>
            <ul id="childrenNav">
            <li><a href="/FOO">Child Page</li>                      
            <li><a href="/FOO">Child Page</li>                      
            <li><a href="/FOO">Child Page</li>                      
            </ul>
            <ul id="siblingNav">                        
            <li><a href="../FOO">Sibling Page</a></li>
            <li><a href="../FOO">Sibling Page</a></li>
            <li><a href="../FOO">Sibling Page</a></li>
            </ul>
            </nav>
        </div>
        <div class="content_wrapper">
        <!--googleon: all-->
            <?php require($_SERVER['DOCUMENT_ROOT']."/inc/profiles.php"); ?>
        <!--googleoff: all-->

        </div><!-- end .content_wrapper -->
        
    </div><!-- end #content -->

    <div id="footer">
        <?php
            print file_get_contents('http://www.sjsu.edu/sjsuhome/includes/2013-footer.inc'); 
        ?>
    </div><!-- end #footer -->
</div><!-- end #container -->
</div><!-- end #bg -->
<?php require($_SERVER['DOCUMENT_ROOT']."/inc/scripts.php"); ?>
</body>
</html>
