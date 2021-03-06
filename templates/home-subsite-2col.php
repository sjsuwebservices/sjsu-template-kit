<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><!-- USER_CONTENT --></title>
<?php require($_SERVER['DOCUMENT_ROOT']."/inc/header.php"); ?>
</head>
<body class="col-2"><!--googleoff:all-->
<div id="skip" class="acc"><a href="#skiptocontent">Skip to Main Content</a></div>
<div id="bg">
<div id="container">
    <!-- Subsite Primary Navigation -->
    <?php require($_SERVER['DOCUMENT_ROOT']."/inc/topnav-subsite.php"); ?>
    <!-- end Subsite Primary Navigation -->
    <div id="breadcrumb">
        <a href="/">SJSU Home</a> > 1 Column Template        
    </div><!-- end Breadcrumbs -->
    </div>
    <div id="content" role="main">
        <!--googleoff: all-->
        <div class="sidebar">
            <!-- Social Media -->
            <?php require($_SERVER['DOCUMENT_ROOT']."/inc/social-media-subsite.php"); ?>
            <!-- /Social Media -->
            <nav class="secnav_subsite" role="navigation">
                <!-- Quick Links  -->
                <div id="quicklinks">
                    <h2 class="quicklinkTitle">Quick Links</h2>
                    <ul>
                        <li><a href="#">Link 1</a></li>
                        <li><a href="#">Link 2</a></li>
                        <li><a href="#">Link 3</a></li>
                    </ul>
                </div><!-- end #quicklinks  -->
                <!-- Contact information generated from site properties -->
                <div class="contact-info">
                    <b>Department Name</b><br />
                    <b>Enclosed division/College</b><br />
                    One Washington Square<br />
                    San Jos&eacute;, CA 95192-0000<br />
                    408-924-1000<br />
                    <a href="#">email@sjsu.edu</a><br />
                    <a class="siteindex" href="site-index.php">site index</a>
                </div><!-- end .contact-info -->
            </nav>
        </div><!-- end .sidebar -->

<!-- for sites with a slideshow, use the following commented code

       <div id="slider-wrapper">
          <div class="nivo-caption-arrow"></div>
          <div id="slider" class="nivoslider"><img src="http://www.sjsu.edu/communications/pics/wsq-cover-050613.jpg" alt="Washington Square Magazine" title="#htmlcaption1"><img src="http://www.sjsu.edu/communications/pics/communications-social-media.jpg" alt="SJSU's facebook themes" title="#htmlcaption2"><img src="http://www.sjsu.edu/communications/pics/pat-harris-media-050613.jpg" alt="Pat Harris at media event" title="#htmlcaption3"></div>
          <div id="htmlcaption1" class="nivo-html-caption" role="complementary">
             <h3>University Publications</h3>
             <p>From design and editorial services to producing <a href="http://blogs.sjsu.edu/wsq/"><em>SJSU Washington Square</em></a> magazine for more than 90,000 alumni readers, our graphic designers and writers shape
                the face and voice of SJSU.
             </p>
          </div>
          <div id="htmlcaption2" class="nivo-html-caption" role="complementary">
             <h3>Web Communications</h3>
             <p>Are you connected to San Jose State? Our web communications team is building an informed
                community on the web, Facebook, Twitter and Youtube.
             </p>
          </div>
          <div id="htmlcaption3" class="nivo-html-caption" role="complementary">
             <h3>Media Relations</h3>
             <p>San Jose State is in the news every day. Our media relations team shares the successes
                of students and faculty members with the media, the campus community and the world.
             </p>
          </div>
       </div>

-->
<!-- for sites with a static banner image and caption, use the following commented code:
        <div class="banner-static">
            <div class="banner_caption">
                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                <p>Vivamus commodo erat sed justo auctor in mattis neque mollis. Suspendisse potenti.
                        Duis at ornare quam. In vehicula elit quis nunc faucibus pellentesque tincidunt sem
                        vestibulum. Integer nisi velit, varius at ornare non, mollis vel ante.
                </p>
            </div>
            <div class="banner_image">                     
                <img alt="Spartan Squad Students supporting SJSU athletics." src="/assets/images/_gallery_subsite/_banner_images/image_gallery_15.jpg">
            </div>
        </div>
-->
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
        </div>
        
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