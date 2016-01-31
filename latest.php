<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->
<head>      
      <meta charset="utf-8" />
      <title>Prabhav</title>      
      
      <!-- Mobile Specific Metas
            ================================================== -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      
      <!-- All CSS Files
            ================================================== -->
      <link rel="stylesheet" href="stylesheets/All-Stylesheets.css" />
      <link href='http://fonts.googleapis.com/css?family=Stardos+Stencil' rel='stylesheet' type='text/css' />      
      <link href="./stylesheets/custom.css" rel="stylesheet" />
      
      <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->   
         
      <!-- Favicons
            ================================================== -->
      <link rel="shortcut icon" href="images/favicon.png" />
      <link rel="apple-touch-icon" href="images/favicon.png" />     
      
</head>
<body>
     
            
      <!-- Gallery Page Starts -->
      <div id="portfolio" class="dark-texture-3">
            <div class="page-header">
                  <div class="container">
                        <div class="sixteen columns">
                              <h1 class="one"><span>Latest</span></h1>   
													  
                              
                        </div>
                  </div>
            </div>
            <div class="container">
            
			 <!-- Portfolio Navigation Starts -->
                  <div class="sixteen columns center">
                        <div id="options">
                              <ul>
                                    <li><a href="index.php">HOME</a></li>
                                    <li><a href="educational.php">EDUCATIONAL</a></li>
                                    <li><a href="pdmc.php">PDMC</a></li>                                    
                                    <li><a href="adventure.php">ADVENTURE</a></li>
                              </ul>
                        </div>
                  </div>
                  <!-- Portfolio Navigation Ends -->
                 
                  
                  <div class="clear"></div>
                  <div id="container-thumbs" class="gallery" style="">
                  
                        
						
						<!-- latest photos -->
						
						   <div class="one-third column element view view-third social">
                              <img src="images/gallery/latest/6.png" class="scale-with-grid image-shadow" alt="" />
                              
                              <div class="mask">
                                    <h3>Latest</h3>
                                    <a href="images/gallery/latest/6.png" rel="prettyPhoto[mixed]" title="" class="info"><img src="images/portfolio/photos.png" alt="" /></a> 
                              </div>
							</div>
							
								  <!--  <div class="one-third column element view view-third social">
									  <img src="images/gallery/latest/7.png" class="scale-with-grid image-shadow" alt="" />
									  
									  <div class="mask">
											<h3>Latest</h3>
											<a href="images/gallery/latest/7.png" rel="prettyPhoto[mixed]" title="" class="info"><img src="images/portfolio/photos.png" alt="" /></a> 
									  </div>
									</div> -->
									
									   <div class="one-third column element view view-third social">
										  <img src="images/gallery/latest/8.png" class="scale-with-grid image-shadow" alt="" />
										  
										  <div class="mask">
												<h3>Latest</h3>
												<a href="images/gallery/latest/8.png" rel="prettyPhoto[mixed]" title="" class="info"><img src="images/portfolio/photos.png" alt="" /></a> 
										  </div>
										</div>
										
										
										<div class="one-third column element view view-third social">
											  <img src="images/gallery/latest/9.png" class="scale-with-grid image-shadow" alt="" />
											  
											  <div class="mask">
													<h3>Latest</h3>
													<a href="images/gallery/latest/9.png" rel="prettyPhoto[mixed]" title="" class="info"><img src="images/portfolio/photos.png" alt="" /></a> 
											  </div>
										</div>
										
										   <div class="one-third column element view view-third social">
											  <img src="images/gallery/latest/10.png" class="scale-with-grid image-shadow" alt="" />
											  
											  <div class="mask">
													<h3>Latest</h3>
													<a href="images/gallery/latest/10.png" rel="prettyPhoto[mixed]" title="" class="info"><img src="images/portfolio/photos.png" alt="" /></a> 
											  </div>
											</div>
											
											
											   <div class="one-third column element view view-third social">
												  <img src="images/gallery/latest/11.png" class="scale-with-grid image-shadow" alt="" />
												  
												  <div class="mask">
														<h3>Latest</h3>
														<a href="images/gallery/latest/11.png" rel="prettyPhoto[mixed]" title="" class="info"><img src="images/portfolio/photos.png" alt="" /></a> 
												  </div>
												</div>
												
												   <div class="one-third column element view view-third social">
													  <img src="images/gallery/latest/12.png" class="scale-with-grid image-shadow" alt="" />
													  
													  <div class="mask">
															<h3>Latest</h3>
															<a href="images/gallery/latest/12.png" rel="prettyPhoto[mixed]" title="" class="info"><img src="images/portfolio/photos.png" alt="" /></a> 
													  </div>
													</div>
						
					</div>
                   
                         
        </div>
		
	</div>
      
      <!-- gallery Page Ends --> 
             
            
      
            
            <script>
            	/* validation script for contact form */
            	
            	function validate(){
            		
            		
            		
            		
            	}
            	
            	
            </script>
            
        <!--    <script>
            	
            	$(document).ready(function() {
	
	//if submit button is clicked
	$('#submit').click(function () {		
		
		//Get the data from all the fields
		var name = $('input[name=name]');
		var email = $('input[name=email]');
		var website = $('input[name=website]');
		var comment = $('textarea[name=comment]');

		//Simple validation to make sure user entered something
		//If error found, add hightlight class to the text field
		if (name.val()=='') {
			name.addClass('hightlight');
			return false;
		} else name.removeClass('hightlight');
		
		if (email.val()=='') {
			email.addClass('hightlight');
			return false;
		} else email.removeClass('hightlight');
		
		if (comment.val()=='') {
			comment.addClass('hightlight');
			return false;
		} else comment.removeClass('hightlight');
		
		//organize the data properly
		var data = 'name=' + name.val() + '&email=' + email.val() + '&website=' + 
		website.val() + '&comment='  + encodeURIComponent(comment.val());
		
		//disabled all the text fields
		$('.text').attr('disabled','true');
		
		//show the loading sign
		$('.loading').show();
		
		//start the ajax
		$.ajax({
			//this is the php file that processes the data and send mail
			url: "./includes/contact.php",	
			
			//GET method is used
			type: "GET",

			//pass the data			
			data: data,		
			
			//Do not cache the page
			cache: false,
			
			//success
			success: function (html) {				
				//if process.php returned 1/true (send mail success)
				if (html==1) {					
					//hide the form
					$('.form').fadeOut('slow');					
					
					//show the success message
					$('.done').fadeIn('slow');
					
				//if process.php returned 0/false (send mail failed)
				} else alert('Sorry, unexpected error. Please try again later.');				
			}		
		});
		
		//cancel the submit button default behaviours
		return false;
	});	
});	
            	
        </script> -->
      
      <!-- Included JS Files Starts
            ================================================== --> 
      
                  <!-- jQuery.js 
                        ================================================== --> 
                  <script src="js/jquery.js"></script> 
                  
                  <!-- Social Icons Hover
                        ================================================== -->                  
                  <script type="text/javascript" src="js/social-icons-hover/social-icons-modernizr.custom.js"></script> 
                  
                  <!-- AJAX Contact Form
                        ================================================== -->                   
                  <script type="text/javascript" src="js/contact/contact-form.js"></script>                 
                                   
                  <!-- Portfolio 
                        ================================================== --> 
                  <script src="js/isotope/jquery.isotope.min.js"></script> 
                  <script src="js/isotope/Isotope-Filtering.js"></script> 
                  
                  <!-- PrettyPhoto for Portfolio
                        ================================================== -->
                  <script src="js/prettyphoto/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script> 
                  <script src="js/prettyphoto/custom.js" type="text/javascript" charset="utf-8"></script> 
                  
                
                  <script type="text/javascript" src="js/bootstrap.min.js"></script>
                  <script type="text/javascript" src="js/contact.js"></script>
                  
               
                  
                 
     

</body>
</html>