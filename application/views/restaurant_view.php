   <!-- SUB BANNER -->
    <section class="section-sub-banner" style="background-image: url(<?php echo base_url(); ?>/assets/devrath/images/restaurant/<?php echo $restaurant[0]->page_breadcrumb; ?>);">


       <div class="sub-banner">
           <div class="container">
               <div class="text text-center">
                   <h2>Restaurant</h2>
                  
               </div>
           </div>

       </div>

   </section>
  <!--
   <section class="section-restaurant-4 bg-white">
       <div class="container">

           <div class="container">
               <div class="about">
                  
                   <div class="about-item">

                       <div class="img owl-single">
                           <img src="<?php echo base_url(); ?>/assets/devrath/images/restaurant/<?php echo $restaurant[0]->file_path; ?>" alt="">
                         
                       </div>

                       <div class="text">
                           <h2 class="heading"><?php echo $restaurant[0]->title_one; ?></h2>
                           <div class="desc" style="line-height: 1.7em !important;">
                               <p><?php echo $restaurant[0]->content_one; ?></p><br>
                               
                           </div>
                       </div>

                   </div>
                  
                   <div class="about-item about-right">

                       <div class="img">
                           <img src="<?php echo base_url(); ?>/assets/devrath/images/restaurant/<?php echo $restaurant[0]->file_path_two; ?>" alt="">
                       </div>

                       <div class="text">
                           <h2 class="heading"><?php echo $restaurant[0]->title_two; ?></h2>
                           <div class="desc" style="line-height: 1.7em !important;">
                               <p><?php echo $restaurant[0]->content_two; ?></p>
                           </div>
                       </div>

                   </div>
                 ->

               </div>

           </div>

       </div>
   </section>
   -->



   <!-- GALLERY -->
   <section class="section_page-gallery">
       <div class="container">
           <div class="gallery gallery-3">
               <h2 class="heading">Restaurant Gallery</h2>
               <!-- FILTER -->
              

               <!-- GALLERY CONTENT -->
               <div class="gallery-content">
                   <div class="row">
                       <div class="gallery-isotope col-4">

                           <!-- ITEM SIZE -->
                           <div class="item-size"></div>
                           <!-- END / ITEM SIZE -->

                           <?php
                            if (!empty($restaurantgalleries)) {
                            ?>

                               <?php
                                foreach ($restaurantgalleries as $gallery) {
                                ?>

                                   <div class="item-isotope larger <?php echo $gallery->class; ?>">
                                       <div class="gallery_item">
                                           <a href="<?php echo base_url(); ?>assets/devrath/images/restaurant/gallery/<?php echo $gallery->file_path; ?>" class="mfp-image">
                                               <img src="<?php echo base_url(); ?>assets/devrath/images/restaurant/gallery/<?php echo $gallery->file_path; ?>" alt="">
                                           </a>
                                           <!-- <h6 class="text"><?php echo $gallery->title; ?></h6> -->
                                       </div>
                                   </div>



                               <?php
                                }
                                ?>



                           <?php
                            }

                            ?>


                       </div>
                   </div>

               </div>
              

           </div>
       </div>
   </section>
   <!-- END / GALLERY -->


   <!-- EVENT DEAL RESTAURANT -->
   <!-- <section class="section-event-restaurant bg-18">


       <div class="container">
           <div class="event-restaurant">
               <div class="row">
                   <div class="col-md-5 col-lg-4">

                       <div class="event-restaurant_header">
                           <span class="icon"><i class="lotus-icon-calendar"></i></span>
                           <h2>EVENT &amp; DEAL</h2>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                       </div>

                   </div>
                   <div class="col-md-7 col-lg-6 col-lg-offset-2">

                       <ul class="event-restaurant_content">

                           <li>
                               <span class="event-date">
                                   <strong>17</strong>
                                   Dec
                               </span>
                               <div class="text">
                                   <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>
                                   <a href="#">[ Read More ]</a>
                               </div>
                           </li>

                           <li>
                               <span class="event-date">
                                   <strong>23</strong>
                                   JUN
                               </span>
                               <div class="text">
                                   <h2>Lorem Ipsum is simply dummy text</h2>
                                   <a href="#">[ Read More ]</a>
                               </div>
                           </li>

                           <li>
                               <span class="event-date">
                                   <strong>26</strong>
                                   NOV
                               </span>
                               <div class="text">
                                   <h2>Lorem Ipsum is simply dummy text of the printing</h2>
                                   <a href="#">[ Read More ]</a>
                               </div>
                           </li>

                       </ul>

                   </div>
               </div>
           </div>
       </div>
   </section> -->
   <!-- END / EVENT DEAL RESTAURANT -->


   <!-- RESERVATION -->
   <!-- <section class="section-reservation">
       <div class="container">
           <div class="reservation">
               <h2>Send Inquiry</h2>

               <div class="reservation_form">
                   <div class="row">

                       <div class="col-md-4 col-sm-6">
                           <input type="text" class="awe-calendar" placeholder="Arrival Date">
                       </div>

                       <div class="col-md-4 col-sm-6">
                           <input type="text" class="awe-calendar" placeholder="Departure Date">
                       </div>

                       <div class="col-md-4 col-sm-6">
                           <input type="text" class="awe-input" placeholder="Start time">
                       </div>


                       <div class="col-md-12 col-sm-12">
                           <textarea class="awe-teaxtarea" cols="50" rows="10" placeholder="Request when reservation"></textarea>
                       </div>

                       <div class="col-md-12 col-sm-12 text-center">
                           <button class="awe-btn awe-btn-13">SEND REQUEST</button>
                       </div>

                   </div>
               </div>

           </div>
       </div>
   </section> -->
   <!-- END / RESERVATION -->


      <!-- CONTACT -->
      <section class="section-contact">
        <div class="container">
            <div class="contact">
                <div class="row">

                    <div class="col-md-2 col-lg-2">

                                 

                    </div>

                    <div class="col-md-8 col-lg-8">
                        <h2>Send Your Message</h2>
                        <div class="contact-form">
                               <!-- <?php echo (!empty($this->session->flashdata('msg'))) ? $this->session->flashdata('msg') : ''; ?> -->
                            <!-- <form id="send-contact-form" action="<?php echo base_url(); ?>contact-us/send" method="POST"> -->
                            <form id="send-contact-form"  method="POST">

                                <div class="row">
                                    <div class="col-sm-6">
                                    <input type="text" name="form_name" class="field-text"  value="" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-sm-6">
                                    <input type="email" name="form_email" class="field-text"  value="<?php echo (!empty($_GET['form_email'])) ? $_GET['form_email'] : ""; ?>" placeholder="Email Address" required>
                                    </div>
                                    <div class="col-sm-12">
                                    <input type="text" name="form_phone" class="field-text"  value="" placeholder="Phone" required>
                                    </div>
                                    <div class="col-sm-12">
                                    <input type="text" name="form_subject" class="field-text"  value="<?php echo (!empty($_GET['form_subject'])) ? $_GET['form_subject'] : ""; ?>" placeholder="Subject" required>
                                    </div>


                                    <div class="col-sm-12">
                                    <textarea name="form_message"  class="field-textarea" placeholder="Your Message.." required><?php echo (!empty($_GET['form_message'])) ? $_GET['form_message'] : ""; ?></textarea>
                                      
                                    </div>


                                    <div class="col-sm-6">
                                      
                                        <div class="button-box">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="awe-btn awe-btn-13" data-text="Submit Here" type="submit" data-loading-text="Please wait...">Submit Here</button>
                                </div>

                                    </div>



                                </div>
                                <div id="contact-content"></div>
                            </form>
                        </div>
                    </div>
                    
                    <div class="col-md-2 col-lg-2">
                     </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END / CONTACT -->