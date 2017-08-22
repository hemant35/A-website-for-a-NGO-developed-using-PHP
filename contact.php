<?php 
$currentPage=7;
include("inc/header.php"); ?>
   </header> <!-- Header End -->

   <!-- Page Title
   ================================================== -->
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1>Get In Touch<span>.</span></h1>

            <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
            enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
         </div>

      </div>

   </div> <!-- Page Title End-->

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row page">

         <div id="primary" class="eight columns">

            <section>

              <h1>Hello. Let's talk.</h1>

              <p class="lead">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
              nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
              cursus a sit amet mauris. Morbi accumsan ipsum velit. </p>

              <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
              nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
              cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a
              ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. </p>

              <div id="contact-form">

                  <!-- form -->
                  <form name="contactForm" id="contactForm" method="post" action="sendEmail.php">
      					<fieldset>

                        <div class="half">
      						   <label for="contactName">Name <span class="required">*</span></label>
      						   <input name="contactName" type="text" id="contactName" size="35" value="" />
                        </div>

                        <div class="half pull-right">
      						   <label for="contactEmail">Email <span class="required">*</span></label>
      						   <input name="contactEmail" type="text" id="contactEmail" size="35" value="" />
                        </div>

                        <div>
      						   <label for="contactSubject">Subject</label>
      						   <input name="contactSubject" type="text" id="contactSubject" size="35" value="" />
                        </div>

                        <div>
                           <label  for="contactMessage">Message <span class="required">*</span></label>
                           <textarea name="contactMessage"  id="contactMessage" rows="15" cols="50" ></textarea>
                        </div>

                        <div>
                           <button class="submit">Submit</button>
                           <span id="image-loader">
                              <img src="images/loader.gif" alt="" />
                           </span>
                        </div>

      					</fieldset>
      				</form> <!-- Form End -->

                  <!-- contact-warning -->
                  <div id="message-warning"></div>
                  <!-- contact-success -->
      				<div id="message-success">
                     <i class="icon-ok"></i>Your message was sent, thank you!<br />
      				</div>

               </div>

            </section> <!-- section end -->

         </div>

         <div id="secondary" class="four columns end">

            <aside id="sidebar">

               <div class="widget widget_search">
                  <h5>Search</h5>
                  <form action="#">

                     <input class="text-search" type="text" onfocus="if (this.value == 'Search here...') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Search here...'; }" value="Search here...">
                     <input type="submit" class="submit-search" value="">

                  </form>
               </div>

               <div class="widget widget_text">
                  <h5 class="widget-title">Text Widget</h5>
                  <div class="textwidget">Proin gravida nibh vel velit auctor aliquet.
                  Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                  nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus
                  a sit amet mauris. Morbi accumsan ipsum velit. </div>
		         </div>

               <div class="widget widget_contact">
					   <h5>Address and Phone</h5>
					   <p class="address">
						   Sagar<br>
						   470001 Sagar, Madhya Pradesh <br>
					
				 	   <span>+919669143100</span>
					   </p>

					   <h5>Email and Social</h5>
					   <p>
                     E-mail: info{@}diamondfantasies.com<br>
                     Twitter: <a href="#">@DFOWORLD</a><br>
                     Facebook: <a href="https://www.facebook.com/DFOWORLD">@DFOWORLD</a><br>
                     Google+: <a href="#">@dfoworld</a>
                  </p>
				   </div>

               <div class="widget widget_photostream">
                  <h5>Photostream</h5>
                  <ul class="photostream cf">
                     <li><a href="https://www.facebook.com/DFOWORLD/photos/pcb.1834672526847682/1834672436847691/?type=3&theater"><img src="images/thumb1.jpg" alt="thumbnail"></a></li>
                     <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                     <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                     <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                     <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                     <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                     <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                     <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                  </ul>
	            </div>

            </aside>

         </div>

      </div>

   </div> <!-- Content End-->

   
   <!-- footer
   ================================================== -->
  <?php include("inc/footer.php"); ?>

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/doubletaptogo.js"></script>
   <script src="js/init.js"></script>

</body>

</html>