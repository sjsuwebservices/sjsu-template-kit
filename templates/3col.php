<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><!-- USER_CONTENT --></title>
<?php require($_SERVER['DOCUMENT_ROOT']."/inc/header.php"); ?>
</head>
<body class="col-3"><!--googleoff:all-->
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
            <ul class="sn1" role="navigation">                        
            <li><a href="../FOO">Sibling Page</a></li>
            <li class="selected">
                <a href="../FOO">Current Page</a>
                <ul>
                    <li><a href="../FOO">Child Page</a></li>
                    <li><a href="../FOO">Child Page</a></li>
                </ul>

            </li>
            <li><a href="../FOO">Sibling Page</a></li>
            <li><a href="../FOO">Sibling Page</a></li>
            </ul>
            </nav>
        </div>
        <div class="content_wrapper">
        <!--googleon: all-->
        <!--
        There are 3 configurations possible for content inside of content_wrapper. They are all activated by a class applied to the body element.

        <body class="1-col">: One full width (660px) column:
        <div class="content_wrapper">
            <div class="left">
                Full width main column content
            </div>
        </div>

        <body class="2-col">: One narrow (180px) left sidebar and one wider (460px) main column
        <div class="content_wrapper">   
            <div class="left">
                Narrow left sidebar content
            </div>
            <div class="right">
                Wider right main column content
            </div>
        </div>

        <body class="3-col">: One narrow (180px) left sidebar and two wider (220px) main columns
        <div class="content_wrapper">   
            <div class="left">
                Narrow left sidebar content
            </div>
            <div class="middle">
                Wider middle main column content
            </div>
            <div class="right">
                Wider right main column content
            </div>
        </div>
        -->
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
