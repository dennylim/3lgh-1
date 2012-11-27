<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Home | Griya Hijau</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="style/menu.css" />
        <link rel="stylesheet" type="text/css" href="style/style.css" />
		<link rel="stylesheet" type="text/css" href="style/jquery-ui-1.9.2.custom.min.css" />
        <link rel="stylesheet" type="text/css" href="style/lightbox.css" />
        <link rel="stylesheet" type="text/css" href="style/html5-slideshow.css">

        <!-- JAVASCRIPT -->
		<script type="text/javascript" src="js/jquery-1.8.2.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.9.1.custom.min.js"></script>
        <script type="text/javascript" src="js/lightbox.js"></script>
        <script type="text/javascript" src="js/html5-slideshow.js"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				$(".slidingDiv").hide();
				$(".show_hide").show();
				
				$('.show_hide').click(function(){
					$(".slidingDiv").slideToggle("slow");
				});

                $(function() {
                    $("#tab-project-1").tabs();
                    $("#tab-project-2").tabs();
                    $("#accordion-projects").accordion({
                        heightStyle: "content",
                        collapsible: "true",
                        active: "false"
                    });
                });
			});
		</script>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta charset="UTF-8">

        <!-- TWITTER SCRIPT -->
        <script>
        !function(d,s,id){
            var js,fjs=d.getElementsByTagName(s)[0];
            if(!d.getElementById(id)){
                js=d.createElement(s);
                js.id=id;
                js.src="//platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js,fjs);
            }
        }
        (document,"script","twitter-wjs");
        </script>

        <!-- FACEBOOK SCRIPT -->
        <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>


        <!-- FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Petit+Formal+Script|Patua+One' rel='stylesheet' type='text/css'>
	</head>
    
    <body>
    	
        <!-- START TOOLBAR -->
        <div id="toolbar">
            <div id="toolbar-header">
                GRIYA HIJAU Development
            </div>
            <ul id="toolbar-menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#about-us">About US</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="javascript:void(0)" class="show_hide">Contact Us</a></li>
                <li>|</li>
                <li>
                    Stay Connected
                    <ul>
                        <li><a href="https://twitter.com/google" class="twitter-follow-button" data-show-count="false">Follow @google</a></li>
                        <li><div class="fb-like" data-href="http://www.facebook.com/Google" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- END TOOLBAR -->
        
        <!-- START HEADER -->
        <div id="mainHeader" class="dropShadow_lighter_more">
        	<div id="MainBox">
            	<div id="MainBox-frameWrapper">
                	<div id="MainBox-frameWrapper" class="mf-top">
                    	<div id="Box-top">
                        	<div id="BOX-1"></div>
                            <div id="BOX-2" class="BOX-2-top"></div>
                            <div id="BOX-2" class="BOX-2-bottom"></div>
                        </div>
                    </div>
                    <div id="MainBox-frameWrapper" class="mf-bottom"></div>
                </div>
            </div>
        </div>
        <!-- END HEADER -->
        
        
        <!-- START HOME -->
        <div id="home"></div>
        <div id="wrapper">
        	<div id="header-container" class="dropShadow_lighter_more">
            	<div id="header-wrapper">
                	<h1>Griya Hijau Development</h1>
                </div>
            </div>
        	<div id="sections">
            	<div id="aboutUS_mainFrame">
                    <div id="content">
                        <p>
                            Developer yang sebelumnya merupakan bagian dari Developer Perumahan Mansion Garden Ciputat, yang telah berhasil menyelesaikan pemasaran dan dalam tahap akhir penyelesaian proyek perdananya sebanyak 30 unit di Perumahan Cluster Mansion Garden Ciputat sepanjang 2011-2012.
                        </p>
                        
                        <p>
                            Melanjutkan konsep pembangunan perumahan cluster premium di daerah Ciputat, maka segera dimulai proyek perumahan Green Valley, yang berlokasi di Jl. Villa Mutiara IV/jl H. Mahmud Ginding, yang berdekatan dengan Bintaro Jaya sektor IX dan Stasiun KRL Sudimara. Cluster Green Valley akan memiliki unit sebanyak 30, dengan 24 diantaranya merupakan unit 1 lantai dan 6 merupakan unit 2 lantai. Rumah tersebut memiliki desain minimalis yang ramah lingkungan dan modern, dan menggunakan material kualitas setingkat diatas rata-rata perumahan di sekitar Tangerang Selatan.
                        </p>
                    </div>
            	</div>        
            </div>
        </div>
        <!-- END HOME -->
        
        <!-- START PROJECTS -->
        <div id="projects"></div>
        <div id="wrapper">
        	<div id="header-container" class="dropShadow_lighter_more">
            	<div id="header-wrapper">
                	<h1>Projects</h1>
                </div>
            </div>
        	<div id="sections">
                <!-- ACCGORDION 1 -->
                <div id="accordion-projects">
                    <h3><div class="accordion-header"><img src="resource/image/project/headerBanner/greenValley.png"></div></h3>
                    <div>
                        <!-- TABS -->
                        <div id="tab-project-1">
                            <ul>
                                <li><a href="#tabs-1">Tipe-A</a></li>
                                <li><a href="#tabs-2">Tipe-B</a></li>
                            </ul>
                            <!-- tabs 1-->
                            <div id="tabs-1">
                                <div id="tipeA" class="dropShadow"></div>
                                <div id="container-1">
                                    <div class="image-container">
                                        <a href="images/content/Green Valley/denah-41-72.jpg" rel="lightbox[tipeA]" title="Denah Bangunan Tipe 41/72">
                                            <img src="images/content/Green Valley/denah-41-72.jpg">
                                        </a>
                                        <a href="images/content/Green Valley/denah-45-108.jpg" rel="lightbox[tipeA]" title="Denah Bangunan Tipe 45/108">
                                            <img src="images/content/Green Valley/denah-45-108.jpg">
                                        </a>
                                        <a href="images/content/Green Valley/siteplan.jpg" rel="lightbox[tipeA]" title="Siteplan">
                                            <img src="images/content/Green Valley/siteplan.jpg">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- END tabs 1-->
                            
                            <!-- tabs 2-->
                            <div id="tabs-2">
                                <div id="tipeB" class="dropShadow"></div>
                                <div id="container-2">
                                    <div class="image-container">
                                        <a href="images/content/Green Valley/denah-69-72.jpg" rel="lightbox[tipeB]" title="Denah Bangunan Tipe 69/72">
                                            <img src="images/content/Green Valley/denah-69-72.jpg">
                                        </a>
                                        <a href="images/content/Green Valley/siteplan.jpg" rel="lightbox[tipeB]" title="Siteplan">
                                            <img src="images/content/Green Valley/siteplan.jpg">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- END tabs 2-->
                        </div>
                        <!-- END TABS -->
                    </div>
                    <!-- END ACCGORDION 1 -->
    
                    <!-- ACCGORDION 2 -->
                    <h3><div class="accordion-header"><img src="resource/image/project/headerBanner/masionGarden.png"></div></h3>
                    <div>
                        <!-- TABS -->
                        <div id="tab-project-2">
                            <ul>
                                <li><a href="#tabs-1">Tulip</a></li>
                                <li><a href="#tabs-2">Rose</a></li>
                            </ul>
                            <!-- tabs 1-->
                            <div id="tabs-1">
                                <div id="tulip" class="dropShadow"></div>
                                <div id="container-3">
                                    <div class="image-container">
                                        <a href="images/content/Mansion Garden/denah-41-72.jpg" rel="lightbox[tulip]" title="Denah Bangunan Tipe 41/72">
                                            <img src="images/content/Mansion Garden/denah-41-72.jpg">
                                        </a>
                                        <a href="images/content/Mansion Garden/site-plan.jpg" rel="lightbox[tulip]" title="Siteplan">
                                            <img src="images/content/Mansion Garden/site-plan.jpg">
                                        </a>
                                        <a href="images/content/Mansion Garden/peta-lokasi(view).jpg" rel="lightbox[tulip]" title="Peta Lokasi">
                                            <img src="images/content/Mansion Garden/peta-lokasi.jpg">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- END tabs 1-->
                            
                            <!--  tabs 2-->
                            <div id="tabs-2">
                                <div id="rose" class="dropShadow"></div>
                                <div id="container-4">
                                    <div class="image-container">
                                        <a href="images/content/Mansion Garden/denah-45-84.jpg" rel="lightbox[rose]" title="Denah Bangunan Tipe 45/84">
                                            <img src="images/content/Mansion Garden/denah-45-84.jpg">
                                        </a>
                                        <a href="images/content/Mansion Garden/site-plan.jpg" rel="lightbox[rose]" title="Siteplan">
                                            <img src="images/content/Mansion Garden/site-plan.jpg">
                                        </a>
                                        <a href="images/content/Mansion Garden/peta-lokasi(view).jpg" rel="lightbox[rose]" title="Peta Lokasi">
                                            <img src="images/content/Mansion Garden/peta-lokasi.jpg">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- END tabs 2-->
                        </div>
                        <!-- END TABS -->
                    </div>
                    <!-- END ACCGORDION 2 -->
                </div>
            </div>
        </div>
        <!-- END PROJECTS -->
        
        <!-- START GALLERY -->
        <div id="gallery"></div>
        <div id="wrapper">
        	<div id="header-container" class="dropShadow_lighter_more">
            	<div id="header-wrapper">
                	<h1>Gallery</h1>
                </div>
            </div>
        	<div id="sections">
                <!-- START GALLERY SLIDESHOW-->
                <div id="aboutUS_mainFrame">
                    <div id="slideshow">
                        <ul class="slides">
                            <li><img src="images/gallery/mansion1.jpg"></li>
                            <li><img src="images/gallery/mansion2.jpg"></li>
                            <li><img src="images/gallery/mansion3.jpg"></li>
                            <li><img src="images/gallery/mansion4.jpg"></li>
                            <li><img src="images/gallery/mansion5.jpg"></li>
                            <li><img src="images/gallery/mansion6.jpg"></li>
                            <li><img src="images/gallery/mansion7.jpg"></li>
                            <li><img src="images/gallery/mansion8.jpg"></li>
                            <li><img src="images/gallery/mansion9.jpg"></li>
                            <li><img src="images/gallery/mansion10.jpg"></li>
                            <li><img src="images/gallery/mansion11.jpg"></li>
                        </ul>
                        <span class="arrow previous"></span>
                        <span class="arrow next"></span>
                    </div>
                </div>    
                <!-- END GALLERY SLIDESHOW-->
            </div>
        </div>
        <!-- END GALLERY -->
        
        <!-- START ABOUT US -->
        <div id="about-us"></div>
        <div id="wrapper">
        	<div id="header-container" class="dropShadow_lighter_more">
            	<div id="header-wrapper">
                	<h1>About US</h1>
                </div>
            </div>
        	<div id="sections">
                <div id="aboutUS_mainFrame">
                	<div id="aboutUS_mainFrame_left">
                    	<div id="aboutUS_box" class="contactUS_box1">
                        	<div id="aboutUS_header" style="background-image:url(source/style/image/location.png)"></div>
                            <div id="aboutUS_contentWrapper"></div>
                        </div>
                        <div id="aboutUS_box" class="contactUS_box2">
                        	<div id="aboutUS_header" style="background-image:url(source/style/image/phone.png)"></div>
                            <div id="aboutUS_contentWrapper"></div>
                        </div>
                        <div id="aboutUS_box" class="contactUS_box3">
                        	<div id="aboutUS_header" style="background-image:url(source/style/image/socialMedia.png)"></div>
                            <div id="aboutUS_contentWrapper"></div>
                        </div>
                    </div>
            	</div>
            </div>
        </div>
        <!-- END ABOUT US -->
        
        <!-- START SLIDIN CONTACT US -->
        <div class="slidingDiv">
        	<div id="slidingHeader" class="dropShadow_lighter"></div>
            <div id="slidingContent">
            	<div id="contactUS_mainFrame">
                	<div id="contactUS_mainFrame_left">
						<form name="frm_sendEmail" action="sendEmail.php" method="post">
                            <table width="100%">
                                <tr>
                                    <td>
                                        Name <span class="required">(required*)</span><br />
                                        <input type="text" name="tb_name" id="tb_name" class="inputTextStyle" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Email Address <span class="required">(required*)</span><br />
                                        <input type="text" name="tb_email" id="tb_email" class="inputTextStyle" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Your Message <span class="required">(required*)</span><br />
                                        <textarea name="tb_email" id="tb_email" class="inputTextAreaStyle" ></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" value="Send Message" id="fsSubmitButton" />
                                        <input type="button" value="May be later" id="fsSubmitButton" class="show_hide" onclick="javascript:void(0)" />
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
            	</div>
            </div>
        </div>
        <!-- END SLIDIN CONTACT US -->


        <script type="text/javascript">
            $(function() {
                $('#toolbar-menu li a').bind('click', function(event){
                    var $anchor = $(this);
                    
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1500,'easeInOutExpo');

                    event.preventDefault();
                });
            });
        </script>
    </body>
</html>