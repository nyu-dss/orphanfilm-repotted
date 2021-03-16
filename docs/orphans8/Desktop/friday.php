<?php

$root_path = '';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<!-- meta tags -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<!-- title of the page -->
		<title>7th Orphan Film Symposium</title>
		
		<!-- main CSS Stylesheet -->
		<link href="<?php echo $root_path; ?>style_BW.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $root_path; ?>style_conf.css" rel="stylesheet" type="text/css" />
        


        <!-- fancybox stylesheet -->
		<link rel="stylesheet" href="<?php echo $root_path; ?>fancybox/jquery.fancybox-1.3.1.css" type="text/css" media="screen" />
		
		<!-- .JS Files -->
		<script type="text/javascript" src="<?php echo $root_path; ?>js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo $root_path; ?>js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="<?php echo $root_path; ?>js/cufon-yui.js"></script>
		<script type="text/javascript" src="<?php echo $root_path; ?>js/LeagueGothic.font.js"></script>
		<script type="text/javascript" src="<?php echo $root_path; ?>js/scripts.js"></script>
        
        <!-- fancybox js -->
		<script type="text/javascript" src="<?php echo $root_path; ?>fancybox/jquery.fancybox-1.3.1.pack.js"></script>
        
        <script type="text/javascript">
		
			$(document).ready(function() {
				
				//$('.menu').dropDown();
				//$('#hide-fixed').hideMenu();
				$('#showcase').DDShowCase();
				$('.more').DDShowHidden();
				
				$(".lightbox").fancybox({ 'titleShow' : false });
				
				Cufon.replace('.menu a, h1, h2, h3, h4, h5, h6', {
					hover: true
				});
				
			});
		
		</script>
        
        <!--[if IE 6]>
		<script src="js/DD_belatedPNG.js"></script>
		<script> DD_belatedPNG.fix('*'); </script>
		<link href="ie6.css" rel="stylesheet" type="text/css" />
		<![endif]-->
		


	</head>

	<body>
    
    	<div id="top_menu">
        
        	<ul class="menu">
              
                  <li class="current"><a href="program.php">Program</a>
                  
                  	           	<ul>
                    
            	<li><a href="wednesday.php">Wednesday</a></li>
                    
                    	<li><a href="thursday.php">Thursday</a></li>
                    
                    	<li><a href="friday.php">Friday</a></li>

                    	<li><a href="saturday.php">Saturday</a></li>
                    </ul>
                  	 
                          <li><a href="attendees.php">Attendees</a>


                                   <li><a href="sponsors.php">Sponsors</a>
                  <li><a href="video.php">Video</a>



                  
                  </li>
              
              
              
              </ul>
              <!-- /.menu -->
              
              <div id="top_menu_bg"></div>
        
        </div>
        <!-- /#top_menu -->
    
  
    	<div id="fixed-scroll">
        
        	<div id="">
            
       	    	<h3><a href="#"></a></h3>
            
			</div>
            <!-- /#logo -->
              
              <ul class="menu">
              <br><br><br><br>
                  <li class="current"><a href="program.php">Program</a>
                  
                  	           	<ul>
                    
                    	<li><a href="wednesday.php">Wednesday</a></li>
                    
                    	<li><a href="thursday.php">Thursday</a></li>
                    
                    	<li><a href="friday.php">Friday</a></li>

                    	<li><a href="saturday.php">Saturday</a></li>
                    </ul>
                  	 
                          <li><a href="attendees.php">Attendees</a>


                                   <li><a href="sponsors.php">Sponsors</a>
                  <li><a href="video.php">Video</a>

              
              
              </ul>
              <!-- /.menu -->
        
		</div>
        <!-- /#fixed-scroll -->
        
              <div id="showcase">
        
        	<div id="showcase_wrapper">
        
                <div class="showcase_item">
                
                    <a class="lightbox"><img src="<?php echo $root_path; ?>assets/Mike_Mashon.gif" width="80px" height="80px" alt="Mike Mashon" /></a>
                    
                    <div class="hidden">
                    
                        <h1><a href="<?php echo $root_path; ?>video/Mike_Mashon.php">Mike Mashon</a></h1>
                        
                        <p>Head of the Moving Image Section, Library of Congress </p>
                        
                        <p><a href="<?php echo $root_path; ?>video/Mike_Mashon.php"><b>Watch video interview</b></a></p>
                    
                    </div>
                    <!-- /.hidden content -->
                
                </div>
                <!-- /.showcase_item -->
            
                <div class="showcase_item">
                
                    <a class="lightbox"><img src="<?php echo $root_path; ?>assets/Meg_Labrum.gif" width="80px" height="80px" alt="Meg Labrum" /></a>
                    
                    <div class="hidden">
                    
                        <h1><a href="<?php echo $root_path; ?>video/Meg_Labrum.php"> Meg Labrum </a></h1>
                        
                        <p>Chief Curator, National Film and Sound Archive, Australia </p>
                        
                        <p><a href="<?php echo $root_path; ?>video/Meg_Labrum.php"><b>Watch video interview</b></a></p>
                    
                    </div>
                    <!-- /.hidden content -->
                
                </div>
                <!-- /.showcase_item -->
            
                <div class="showcase_item">
                
                    <a class="lightbox"><img src="<?php echo $root_path; ?>assets/Sergei_Kapterev.gif" width="80px" height="80px" alt="Gratitude" /></a>
                    
                    <div class="hidden">
                    
                        <h1><a href="<?php echo $root_path; ?>video/Sergei_Kapterev.php">Sergei Kapterev</a></h1>
                        
                        <p>Moscow Research Institute of Film Art </p>
                        
                        <p><a href="<?php echo $root_path; ?>video/Sergei_Kapterev.php"><b>Watch video interview</b></a></p>
                    
                    </div>
                    <!-- /.hidden content -->
                
                </div>
                <!-- /.showcase_item -->
            
                <div class="showcase_item">
                
                    <a class="lightbox"><img src="<?php echo $root_path; ?>assets/Julia_Noordegraaf.gif" width="80px" height="80px" alt="Gratitude" /></a>
                    
                    <div class="hidden">
                    
                        <h1><a href="<?php echo $root_path; ?>video/Julia_Noordegraaf.php">Julia Noordegraaf</a></h1>
                        
                        <p>Director, Moving Image Preservation & Presentation, U of Amsterdam </p>
                        
                        <p><a href="<?php echo $root_path; ?>video/Julia_Noordegraaf.php"><b>Watch video interview</b> </a></p>
                    
                    </div>
                    <!-- /.hidden content -->
                
                </div>
                <!-- /.showcase_item -->

                <div class="showcase_item">
                
                    <a class="lightbox"><img src="<?php echo $root_path; ?>assets/Dan_Streible.gif" width="80px" height="80px" alt="Gratitude" /></a>
                    
                    <div class="hidden">
                    
                        <h1><a href="<?php echo $root_path; ?>video/Dan_Streible.php">Dan Streible</a></h1>
                        <p>Director, Orphan Film Symposium</p>
                        
                        <p> </p>
                        
                        <p><a href="<?php echo $root_path; ?>video/Dan_Streible.php"><b>Watch video interview</b></a></p>
                    
                    </div>
                    <!-- /.hidden content -->
                
                </div>
                <!-- /.showcase_item -->
            
            
                <div class="showcase_item">
                
                    <a class="lightbox"><img src="<?php echo $root_path; ?>assets/Ishumael_Zinyengere.gif" width="80px" height="80px" alt="Gratitude" /></a>
                    
                    <div class="hidden">
                    
                        <h1><a href="<?php echo $root_path; ?>video/Ishumael_ Zinyengere.php">Ishumael Zinyengere </a></h1>
                        
                        <p>A-V archivist, U.N. International Criminal Tribunal for Rwanda </p>
                        
                        <p><a href="<?php echo $root_path; ?>video/Ishumael_ Zinyengere.php"><b>Watch video interview</b></a></p>
                    
                    </div>
                    <!-- /.hidden content -->
                
                </div>
                <!-- /.showcase_item -->
            
                <div class="showcase_item">
                
                    <a class="lightbox"><img src="<?php echo $root_path; ?>assets/Jodie_Mack.gif" width="80px" height="80px" alt="Gratitude" /></a>
                    
                    <div class="hidden">
                    
                        <h1><a href="<?php echo $root_path; ?>video/Jodie_Mack.php">Jodie Mack </a></h1>
                        
                        <p>Filmmaker, Dartmouth College</p>
                        
                        <p><a href="<?php echo $root_path; ?>video/Jodie_Mack.php"><b>Watch video interview</b></a></p>
                    
                    </div>
                    <!-- /.hidden content -->
                
                </div>
                <!-- /.showcase_item -->
            
                <div class="showcase_item">
                
                    <a class="lightbox"><img src="<?php echo $root_path; ?>assets/Danielle_Ash.gif" width="80px" height="80px" alt="Gratitude" /></a>
                    
                    <div class="hidden">
                    
                        <h1><a href="<?php echo $root_path; ?>video/Danielle_Ash.php">Danielle Ash</a></h1>
                        
                        <p>Independent filmmaker, New York </p>
                        
                        <p><a href="<?php echo $root_path; ?>video/Danielle_Ash.php"><b>Watch video interview</b></a></p>
                    
                    </div>
                    <!-- /.hidden content -->
                
                </div>
                <!-- /.showcase_item -->
            
                <div class="showcase_item">
                
                    <a class="lightbox"><img src="<?php echo $root_path; ?>assets/Peggy_Ahwesh.gif" width="80px" height="80px" alt="Gratitude" /></a>
                    
                    <div class="hidden">
                    
                        <h1><a href="<?php echo $root_path; ?>video/Peggy_Ahwesh.php">Peggy Ahwesh</a></h1>
                        
                        <p>Filmmaker, Bard College </p>
                        
                        <p><a href="<?php echo $root_path; ?>video/Peggy_Ahwesh.php"><b>Watch video interview</b></a></p>
                    
                    </div>
                    <!-- /.hidden content -->
                
                </div>
                <!-- /.showcase_item -->
            
                <div class="showcase_item">
                
                    <a class="lightbox"><img src="<?php echo $root_path; ?>assets/Gustav_Deutsch.gif" width="80px" height="80px" alt="image" /></a>
                    
                    <div class="hidden">
                    
                        <h1><a href="<?php echo $root_path; ?>video/Gustav_Deutsch.php">Gustav Deutsch</a></h1>
                        
                        <p>Filmmaker, Vienna </p>
                        
                        <p><a href="<?php echo $root_path; ?>video/Gustav_Deutsch.php"><b>Watch video interview</b></a></p>
                    
                    </div>
                    <!-- /.hidden content -->
                
                </div>
                <!-- /.showcase_item -->
            
                <div class="showcase_item">
                
                    <a class="lightbox"><img src="<?php echo $root_path; ?>assets/Andrea_Callard.gif" width="80px" height="80px" alt="image" /></a>
                    
                    <div class="hidden">
                    
                        <h1><a href="<?php echo $root_path; ?>video/Andrea_Callard.php">Andrea Callard</a></h1>
                        
                        <p>Independent artist, New York </p>
                        
                        <p><a href="<?php echo $root_path; ?>video/Andrea_Callard.php"><b>Watch video interview</b></a></p>
                    
                    </div>
                    <!-- /.hidden content -->
                
                </div>
                <!-- /.showcase_item -->
            
                <div class="showcase_item">
                
                    <a class="lightbox"><img src="<?php echo $root_path; ?>assets/Nico_de_Klerk.gif" width="80px" height="80px" alt="image" /></a>
                    
                    <div class="hidden">
                    
                        <h1><a href="<?php echo $root_path; ?>video/Nico_de_Klerk.php">Nico de Klerk </a></h1>
                        
                        <p>Researcher, Nederlands Filmmuseum</p>
                        
                        <p><a href="<?php echo $root_path; ?>video/Nico_de_Klerk.php"><b>Watch video interview</b></a></p>
                    
                    </div>
                    <!-- /.hidden content -->
                
                </div>
                <!-- /.showcase_item -->
            
                <div class="showcase_item">
                
                    <a class="lightbox"><img src="<?php echo $root_path; ?>assets/Russ_Suniewick.gif" width="80px" height="80px" alt="image" /></a>
                    
                    <div class="hidden">
                    
                        <h1><a href="<?php echo $root_path; ?>video/Russ_Suniewick.php">Russ Suniewick </a></h1>
                        
                        <p>President, Colorlab Corp. </p>
                        
                        <p><a href="<?php echo $root_path; ?>video/Russ_Suniewick.php"><b>Watch video interview</b></a></p>
                    
                    </div>
                    <!-- /.hidden content -->
                
                </div>
                <!-- /.showcase_item -->
            
   <div class="showcase_item">
                
                    <a class="lightbox"><img src="<?php echo $root_path; ?>assets/George_Willeman2.gif" width="80px" height="80px" alt="image" /></a>
                    
                    <div class="hidden">
                    
                        <h1><a href="<?php echo $root_path; ?>video/George_Willeman.php">George Willeman</a></h1>
                        
                        <p>Library of Congress</p>
                        
                        <p><a href="<?php echo $root_path; ?>video/George_Willeman.php"><b>Watch video interview</b></a></p>
                    
                    </div>
                    <!-- /.hidden content -->
                
                </div>
                <!-- /.showcase_item -->

                <div class="showcase_item">
                
                    <a class="lightbox"><img src="<?php echo $root_path; ?>assets/Stephen_Parr.gif" width="80px" height="80px" alt="image" /></a>
                    
                    <div class="hidden">
                    
                        <h1><a href="<?php echo $root_path; ?>video/Stephen_Parr.php">Stephen Parr </a></h1>
                        
                        <p>Oddball Film + Video</p>
                        
                        <p><a href="<?php echo $root_path; ?>video/Stephen_Parr.php"><b>Watch video interview</b></a></p>
                    
                    </div>
                    <!-- /.hidden content -->
                
                </div>
                <!-- /.showcase_item -->
            

                <div class="showcase_item">
                
                    <a class="lightbox"><img src="<?php echo $root_path; ?>assets/Rick_Prelinger.gif" width="80px" height="80px" alt="image" /></a>
                    
                    <div class="hidden">
                    
                        <h1><a href="<?php echo $root_path; ?>video/Rick_Prelinger.php">Rick Prelinger </a></h1>
                        
                        <p>Prelinger Library and Archives</p>
                        
                        <p><a href="<?php echo $root_path; ?>video/Rick_Prelinger.php"><b>Watch video interview</b></a></p>
                    
                    </div>
                    <!-- /.hidden content -->
                
                </div>
                <!-- /.showcase_item -->
            

  <div class="showcase_item">
                
                    <a class="lightbox"><img src="<?php echo $root_path; ?>assets/Andrew_Lampert.gif" width="80px" height="80px" alt="image" /></a>
                    
                    <div class="hidden">
                    
                        <h1><a href="<?php echo $root_path; ?>video/Andrew_Lampert.php">Andrew Lampert  </a></h1>
                        
                        <p>Archivist, Anthology Film Archives </p>
                        
                        <p><a href="<?php echo $root_path; ?>video/Andrew_Lampert.php"><b>Watch video interview</b></a></p>
                    
                    </div>
                    <!-- /.hidden content -->
                
                </div>
                <!-- /.showcase_item -->


                <div class="showcase_item">
                
                    <a class="lightbox"><img src="<?php echo $root_path; ?>assets/Dwight_Swanson.gif" width="80px" height="80px" alt="image" /></a>
                    
                    <div class="hidden">
                    
                        <h1><a href="<?php echo $root_path; ?>video/Dwight_Swanson.php">Dwight Swanson</a></h1>
                        
                        <p>Archivist, Center for Home Movies </p>
                        
                        <p><a href="<?php echo $root_path; ?>video/Dwight_Swanson.php"><b>Watch video interview</b></a></p>
                    
                    </div>
                    <!-- /.hidden content -->
                
                </div>
                <!-- /.showcase_item -->
            
                <div class="showcase_item">
                
                    <a class="lightbox"><img src="<?php echo $root_path; ?>assets/Albert_Steg.gif" width="80px" height="80px" alt="image" /></a>
                    
                    <div class="hidden">
                    
                        <h1><a href="<?php echo $root_path; ?>video/Albert_Steg.php">Albert Steg</a></h1>
                        
                        <p>Center for Home Movies </p>
                        
                        <p><a href="<?php echo $root_path; ?>video/Albert_Steg.php"><b>Watch video interview</b></a></p>
                    
                    </div>
                    <!-- /.hidden content -->
                
                </div>
                <!-- /.showcase_item -->
     
         
           <div class="showcase_item">
                
                    <a class="lightbox"><img src="<?php echo $root_path; ?>assets/Mark_G_Cooper.gif" width="80px" height="80px" alt="image" /></a>
                    
                    <div class="hidden">
                    
                        <h1><a href="<?php echo $root_path; ?>video/Mark_G_Cooper.php">Mark G. Cooper  </a></h1>
                        
                        <p>Director, Moving Image Research Collections, Univ. of South Carolina </p>
                        
                        <p><a href="<?php echo $root_path; ?>video/Mark_G_Cooper.php"><b>Watch video interview</b></a></p>
                    
                    </div>
                    <!-- /.hidden content -->
                
                </div>
                <!-- /.showcase_item -->

           <div class="showcase_item">
                
                    <a class="lightbox"><img src="<?php echo $root_path; ?>assets/Jacqueline_Stewart.gif" width="80px" height="80px" alt="image" /></a>
                    
                    <div class="hidden">
                    
                        <h1><a href="<?php echo $root_path; ?>video/Jacqueline_Stewart.php">Jacqueline Stewart  </a></h1>
                        
                        <p>Professor of Cinema Studies, Northwestern University </p>
                        
                        <p><a href="<?php echo $root_path; ?>video/Jacqueline_Stewart.php"><b>Watch video interview</b></a></p>
                    
                    </div>
                    <!-- /.hidden content -->
                
                </div>
                <!-- /.showcase_item -->

      <div class="showcase_item">
                
                    <a class="lightbox"><img src="<?php echo $root_path; ?>assets/Julie_Hubbert.gif" width="80px" height="80px" alt="image" /></a>
                    
                    <div class="hidden">
                    
                        <h1><a href="<?php echo $root_path; ?>video/Julie_Hubbert.php">Julie Hubbert </a></h1>
                        
                        <p>Associate Professor of Music, University of South Carolina School of Music</p>
                        
                        <p><a href="<?php echo $root_path; ?>video/Julie_Hubbert.php"><b>Watch video interview</b></a></p>
                    
                    </div>
                    <!-- /.hidden content -->
                
                </div>
                <!-- /.showcase_item -->


                      <div class="showcase_item">
                
                    <a class="lightbox"><img src="<?php echo $root_path; ?>assets/Donald_Sosin.gif" width="80px" height="80px" alt="image" /></a>
                    
                    <div class="hidden">
                    
                        <h1><a href="<?php echo $root_path; ?>video/Donald_Sosin.php">Donald Sosin </a></h1>
                        
                        <p>Accompanist, composer</p>
                        
                        <p><a href="<?php echo $root_path; ?>video/Donald_Sosin.php"><b>Watch video interview</b></a></p>
                    
                    </div>
                    <!-- /.hidden content -->
                
                </div>
                <!-- /.showcase_item -->
                
                
      <div class="showcase_item">
                
                    <a class="lightbox"><img src="<?php echo $root_path; ?>assets/Vanessa_Toulmin.gif" width="80px" height="80px" alt="image" /></a>
                    
                    <div class="hidden">
                    
                        <h1><a href="<?php echo $root_path; ?>video/Vanessa_Toulmin.php">Vanessa Toulmin </a></h1>
                        
                        <p>National Fairground Archive</p>
                        
                        <p><a href="<?php echo $root_path; ?>video/Vanessa_Toulmin.php"><b>Watch video interview</b></a></p>
                    
                    </div>
                    <!-- /.hidden content -->
                
                </div>
                <!-- /.showcase_item -->
                
                
                
                
                      <div class="showcase_item">
                
                    <a class="lightbox"><img src="<?php echo $root_path; ?>assets/Snowden_Becker.gif" width="80px" height="80px" alt="image" /></a>
                    
                    <div class="hidden">
                    
                        <h1><a href="<?php echo $root_path; ?>video/Snowden_Becker.php">Snowden Becker</a></h1>
                        
                        <p>Center for Home Movies</p>
                        
                        <p><a href="<?php echo $root_path; ?>video/Snowden_Becker.php"><b>Watch video interview</b></a></p>
                    
                    </div>
                    <!-- /.hidden content -->
                
                </div>
                <!-- /.showcase_item -->
                
                                
                

       
            </div>
            <!-- /#showcase_wrapper -->
        
        </div>
        <!-- /#showcase -->

        <div id="showcase_arrow_up"></div>
        <div id="showcase_arrow_down"></div>
        <!-- showcase arrows -->
        
        
        
        <div id="top_info">
        
            <div class="wrapper">
            
            	<a href="<?php echo $root_path; ?>index.php"><img src="<?php echo $root_path; ?>images/classic/slogan.png" width="300px" height="73px" border="0" alt="Orphans 7" class="alignleft" /></a>
            
            	<p><br>The 7th Orphan Film Symposium: Moving Pictures Around the World <br>April 7 - 10, 2010</p>


            
            </div>
            <!-- /.wrapper -->
        

        </div>
        <!-- /#top_info -->
        
        <div id="top_info_bg_bottom"></div>
        <!-- /#top_info_bg_bottom -->
        
        <div id="content">
        
        	<div class="wrapper">
                
                <div class="post_item">
                
                    <h3 class="title">Friday, April 9</h3>

   
<br> <p><br>

<blockquote><b><big>SILENT CIRCUITS</b></big><br>
<font size="2">

<a href="<?php echo $root_path; ?>audio/Orphans7_Day3.1_SosinBeethovenPiano.mp3"><img src="<?php echo $root_path; ?>audio/icon_audio.gif"> &nbsp;Prelude: <i><i> <font color="#990000">Origin of Beethoven's Moonlight Sonata </i></font></i>(Edison, 1909) piano by <b>Donald Sosin</b><br> 
<a href="<?php echo $root_path; ?>audio/Orphans7_Day3.2_MatthewSolomanGlobalCirculation.mp3"><img src="<?php echo $root_path; ?>audio/icon_audio.gif"> &nbsp;<b>Matthew Solomon</b> (CUNY Staten Island) Reaching the Whole World, 1896-2010: The Global Circulation of Star-Films<br>
<a href="<?php echo $root_path; ?>audio/Orphans7_Day3.3_RipsDream.mp3"><img src="<?php echo $root_path; ?>audio/icon_audio.gif"> &nbsp;<i><i> <font color="#990000">Rip's Dream </i></font></i>[La lègende de Rip Van Winkle]</i> (Georges Méliès, 1905) piano by <b>Donald Sosin</b><br>
<a href="<?php echo $root_path; ?>audio/Orphans7_Day3.4_Hiawatha.mp3"><img src="<?php echo $root_path; ?>audio/icon_audio.gif"> &nbsp;<b>Nancy Watrous</b> (Chicago Film Archives), <b>Judith Miller</b> (Valparaiso U), and <b>Andy Uhrich</b> (NYU MIAP) The Story of <i><i> <font color="#990000"> A Pictorial Story of Hiawatha</i></font></i> (Katharine Ertz-Bowden and Charles Bowden, 1904)<br>
<a href="<?php echo $root_path; ?>audio/Orphans7_Day3.5_ScottSimmonPresentation.mp3"><img src="<?php echo $root_path; ?>audio/icon_audio.gif"> &nbsp;<b>Scott Simmon</b> (UC Davis) Reenacting the Revolution: Sheriff Eugene Buck’s Forgotten Docudrama <i><i> <font color="#990000"> Ammunition Smuggling on the Mexican Border </i></font></i>(1914)<br>
<b>Marty Marks</b>, piano
<p></font>

<br>

<b><big>ASIAN FRAGMENTS (FROM CHINA, ITALY, RUSSIA, GEORGIA, AND SOUTH CAROLINA</b></big><br>
<font size="2">
<a href="<?php echo $root_path; ?>audio/Orphans7_Day3.6_Kaptertev.mp3"><img src="<?php echo $root_path; ?>audio/icon_audio.gif"> &nbsp;<b>Sergei Kapterev</b> (Moscow Research Institute of Film Art) Rediscovering Kalatozov’s First Film <i><i> <font color="#990000">Their Kingdom </i></font></i> (Mikheil Kalatozishvili and Nutsa Gogoberidze, 1928) <br>
<i><i> <font color="#990000">[Aftermath of Japanese Attack on Shanghai] </i></font></i>(unid., 1937?) with remarks by <a href="<?php echo $root_path; ?>audio/Orphans7_Day3.6.5_WilscbacherPresentation.mp3"><img src="<?php echo $root_path; ?>audio/icon_audio.gif"> &nbsp;<b>Greg Wilsbacher</b>
(USC MIRC) 
<i><i><font color="#990000">[Chinese Motion Picture Studio] </i></font></i> (Fox Movietone News, 1934) preservation by Colorlab<br>
<a href="<?php echo $root_path; ?>audio/Orphans7_Day3.7_ZhangZhen.mp3"><img src="<?php echo $root_path; ?>audio/icon_audio.gif"> &nbsp;<b>Zhang Zhen</b> (NYU) Hou Yao’s Shadowplay <br>
<i><i> <font color="#990000">A Poet from the Sea </i></font></i> (China Sun Motion Picture Co., 1927) <br>
<a href="<?php echo $root_path; ?>audio/Orphans7_Day3.8_SosinPoetfromSeaPiano.mp3"><img src="<?php echo $root_path; ?>audio/icon_audio.gif"> &nbsp;<b>Donald Sosin</b>, piano</font>
<p>

<b><big>MOVING THE UNDERGROUND ABOVE GROUND</b></big><br>
<font size="2">
<i><i> <font color="#990000"> Sears Sox </i></font></i>(1968) by Pat O’Neill, Neon Park, and Chick Strand <br>
<a href="<?php echo $root_path; ?>audio/Orphans7_Day3.9_BrandCallard.mp3"><img src="<?php echo $root_path; ?>audio/icon_audio.gif"> &nbsp;<b>Bill Brand</b> (BB Optics) and <b>Andrea Callard</b> <i><i> <font color="#990000">11 thru 12 </i></font></i>(1977) <br>
<a href="<?php echo $root_path; ?>audio/Orphans7_Day3.10_ToscanoPresentsLangdon.mp3"><img src="<?php echo $root_path; ?>audio/icon_audio.gif"> &nbsp;<b>Mark Toscano</b> (Academy Film Archive) GO OH WOW: Unexpected Discoveries in the
Excavation of the L.A. Avant-Garde (Films of Chris Langdon) <br>
<a href="<?php echo $root_path; ?>audio/Orphans7_Day3.11_AndyLampertIntroRawNerves.mp3"><img src="<?php echo $root_path; ?>audio/icon_audio.gif"> &nbsp;<b>Andrew Lampert </b>(Anthology Film Archives) <i><i> <font color="#990000">Raw Nerves: A Lacanian Thriller </i></font></i>(Manuel DeLanda, 1980) <br>
<a href="<?php echo $root_path; ?>audio/Orphans7_Day3.12_UndergroundQA.mp3"><img src="<?php echo $root_path; ?>audio/icon_audio.gif"> &nbsp;<b>Jeff Lambert</b> (NFPF) moderator</font>
<p>

<b><big>WOMEN AMATEUR FILMMAKERS TRAVEL</b></big><br>
<font size="2">
<a href="<?php echo $root_path; ?>audio/Orphans7_Day3.13_DuddingNewZealand.mp3"><img src="<?php echo $root_path; ?>audio/icon_audio.gif"> &nbsp;<b>Kathy Dudding</b> (Fulbright Fellow, New Zealand) Tracing the Flâneuse: New Zealand/Aotearoa <br>
<a href="<?php echo $root_path; ?>audio/Orphans7_Day3.14_DollmanPresentation.mp3"><img src="<?php echo $root_path; ?>audio/icon_audio.gif"> &nbsp;<b>Melissa Dollman</b> (Schlesinger Library, Radcliffe Institute) Margaret Cook Thomson’s Home
Movies of Ginling College, China (1930-38) <br>
<a href="<?php echo $root_path; ?>audio/Orphans7_Day3.15_KimTarrPresentation.mp3"><img src="<?php echo $root_path; ?>audio/icon_audio.gif"> &nbsp;<b>Kimberly Tarr</b> (Smithsonian Institution) 'Round the World and Back Again: An Examination of the Adelaide Pearson Travel Films (1931-1940)<br>
<a href="<?php echo $root_path; ?>audio/Orphans7_Day3.16_MarkCooperPresentation.mp3"><img src="<?php echo $root_path; ?>audio/icon_audio.gif"> &nbsp;<b>Mark G. Cooper</b> (USC Moving Image Research Collections) Claudia Lea Phelps’s <i><i> <font color="#990000"> Laconia Reel </i></font></i>(1923): Japan, Formosa, the Philippines, India, Egypt (preservation by Colorlab)
<p></font>

<b><big>MARSHA ORGERON AND DEVIN ORGERON (THE MOVING IMAGE) INTRODUCE</b></big><br>
<font size="2">
<a href="<?php echo $root_path; ?>audio/Orphans7_Day3.17_MusserInvestigators.mp3"><img src="<?php echo $root_path; ?>audio/icon_audio.gif"> &nbsp;<b>Charles Musser</b> (Yale U) Investigating <i><i> <font color="#990000"> The Investigators</i></font></i> (Union Films, 1948)
<p></font>

<b><big>"ROUGH, UNPOLISHED, BUT ALIVE": BLACK AND WHITE FILMS THE COLOR OF BLOOD </b></big><br>
<font size="2">
<a href="<?php echo $root_path; ?>audio/Orphans7_Day3.18_AnnaMcCarthyIntro.mp3"><img src="<?php echo $root_path; ?>audio/icon_audio.gif"> &nbsp;<b>Anna McCarthy</b> (NYU) on the production of <i><i> <font color="#990000"> The Cry of Jazz </i></font></i><br>
<b>Jonas Mekas</b> introduces <i><i> <font color="#990000"> The Cry of Jazz</i></font></i>(1959) restored by Anthology Film Archives with funding provided by The Film Foundation<br>
<a href="<?php echo $root_path; ?>audio/Orphans7_Day3.20_JacquelineStewartPresentation.mp3"><img src="<?php echo $root_path; ?>audio/icon_audio.gif"> &nbsp;<b>Jacqueline Stewart</b> (Northwestern U) introduces filmmaker <a href="<?php echo $root_path; ?>audio/Orphans7_Day3.21_EdBlandTalks.mp3"><img src="<?php echo $root_path; ?>audio/icon_audio.gif"> &nbsp;<b>Edward Bland</b> (for Q&A)<br>
<a href="<?php echo $root_path; ?>audio/Orphans7_Day3.22_SarahResnickIntro.mp3"><img src="<?php echo $root_path; ?>audio/icon_audio.gif"> &nbsp;<b>Sarah Resnick</b> (Acconci Studio) introduces <br>
<a href="<?php echo $root_path; ?>audio/Orphans7_Day3.23_EstherRobinsonIntro.mp3"><img src="<?php echo $root_path; ?>audio/icon_audio.gif"> &nbsp;<b>Esther B. Robinson</b> (Danny Williams Film Preservation Project) <i><i> <font color="#990000"> [The Velvet Underground Rehearses]</i></font></i> (1965)<br>
<a href="<?php echo $root_path; ?>audio/Orphans7_Day3.24_CallieAngellIntro.mp3"><img src="<?php echo $root_path; ?>audio/icon_audio.gif"> &nbsp;<b>Callie Angell</b> (Whitney Museum of American Art) Andy Warhol's <i><i> <font color="#990000"> Uptight #3 -- David Susskind</i></font></i>(1966) music performed by <a href="<?php echo $root_path; ?>audio/Orphans7_Day3.25_TGriffinUptight3LiveMusic.mp3"><img src="<?php echo $root_path; ?>audio/icon_audio.gif"> &nbsp;<b>T. Griffin</b><br>
<i><i> <font color="#990000"> [EPI at RISD]</i></font></i> (WJAR-TV, April 1, 1967) courtesy of Oddball Film + Video</font>


</blockquote>
                </div>
                <!-- /.post_item -->
            

            
            
            </div>
            <!-- /.wrapper -->
            
        </div>
        <!-- /#content -->

       
        
        <div id="copyright_bg_top"></div>
        <div id="copyright">
        
        	<div class="wrapper">
            
            	<div class="left">
                
                	<p><a href="http://www.nyu.edu/orphanfilm/"><font color="#FFFFFF">Orphan Film Symposium</font></a> | <a href="http://cinema.tisch.nyu.edu/"><font color="#FFFFFF">Department of Cinema Studies</font></a> | <a href="http://www.nyu.edu"><font color="#FFFFFF">New York University</font></a></p>
                
                </div>
                <!-- /.left -->
                
                <div class="right">
                
                	<p></p>
                
                </div>
                <!-- /.right -->
            
            </div>
            <!-- /.wrapper -->
        
        </div>
        <!-- /#copyright -->
            
	</body>
    
</html>
