   <!-- SUB BANNER -->
   <section class="section-sub-banner" style="background-image: url(<?php echo base_url(); ?>/assets/devrath/images/banquet/<?php echo $banquet[0]->page_breadcrumb; ?>);">


       <div class="sub-banner">
           <div class="container">
               <div class="text text-center">
                   <h2>Banquet</h2>
                   <!-- <p>Lorem Ipsum is simply dummy text of the printing</p> -->
               </div>
           </div>

       </div>

   </section>
   <!-- END / SUB BANNER -->

   <!-- RESTAURANTS -->
   <section class="section-restaurant-4 bg-white">
       <div class="container">

           <div class="container">
               <div class="about">
                   <!-- ITEM -->
                   <div class="about-item">

                       <div class="img owl-single">
                           <img src="<?php echo base_url(); ?>/assets/devrath/images/banquet/<?php echo $banquet[0]->file_path; ?>" alt="">
                           <!-- <img src="<?php echo base_url(); ?>/assets/devrath/images/about/img-2.jpg" alt=""> -->
                       </div>

                       <div class="text">
                           <h2 class="heading"><?php echo $banquet[0]->title_one; ?></h2>
                           <div class="desc">
                               <p><?php echo $banquet[0]->content_one; ?></p><br>
                               <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p> -->
                           </div>
                       </div>

                   </div>
                   <!-- END / ITEM -->

                   <!-- ITEM -->
                   <div class="about-item about-right">

                       <div class="img">
                           <img src="<?php echo base_url(); ?>/assets/devrath/images/banquet/<?php echo $banquet[0]->file_path_two; ?>" alt="">
                       </div>

                       <div class="text">
                           <h2 class="heading"><?php echo $banquet[0]->title_two; ?></h2>
                           <div class="desc">
                               <p><?php echo $banquet[0]->content_two; ?></p>
                           </div>
                       </div>

                   </div>
                   <!-- END / ITEM -->

               </div>

           </div>

       </div>
   </section>
   <!-- END / RESTAURANTS -->



   <!-- GALLERY -->
   <!-- <section class="section_page-gallery">
       <div class="container">
           <div class="gallery gallery-3">
               <h2 class="heading">Banquet Gallery</h2>
              
               <div class="gallery-content">
                   <div class="row">
                       <div class="gallery-isotope col-4">
                            <div class="item-size"></div>
                                <?php
                                    if (!empty($banquetgalleries)) {
                                ?>

                                    <?php
                                        foreach ($banquetgalleries as $gallery) {
                                    ?>

                                        <div class="item-isotope larger <?php echo $gallery->class; ?>">
                                            <div class="gallery_item">
                                                <a href="<?php echo base_url(); ?>assets/devrath/images/banquet/gallery/<?php echo $gallery->file_path; ?>" class="mfp-image">
                                                    <img src="<?php echo base_url(); ?>assets/devrath/images/banquet/gallery/<?php echo $gallery->file_path; ?>" alt="">
                                                </a>
                                                
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
   </section> -->
   <!-- END / GALLERY -->



<!--Devrath  BANQUET DETAIL -->
<section class="section-room-detail bg-white">
    <div class="container">

        <!-- DETAIL -->
        <div class="room-detail">
            <div class="row">
                <div class="col-lg-9">

                    <!-- LAGER IMGAE -->
                    <div class="room-detail_img">
                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/devrath-1.JPG'); ?>" alt="Devrath">
                        </div>
                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/devrath-22.png'); ?>" alt="Devrath">
                        </div>
                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/devrath-3.JPG'); ?>" alt="Devrath">
                        </div>
                                            
                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/devrath-4.JPG'); ?>" alt="Devrath">
                        </div>
                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/devrath-5.JPG'); ?>" alt="Devrath">
                        </div>
                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/devrath-6.JPG'); ?>" alt="Devrath">
                        </div>
                    </div>

                    <!-- <div class="room-detail_thumbs">
                        <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/devrath-1.JPG'); ?>" alt="Devrath"></a>
                         <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/devrath-22.png'); ?>" alt="Devrath"></a>
                          <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/devrath-3.JPG'); ?>" alt="Devrath"></a>
                        <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/devrath-4.JPG'); ?>" alt="Devrath"></a>
                        <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/devrath-5.JPG'); ?>" alt="Devrath"></a>
                        <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/devrath-6.JPG'); ?>" alt="Devrath"></a>

                    </div>          -->
                </div>


            <div class="col-lg-3">
                <!-- FORM BOOK -->
                <div class="room-detail_book">
                    <div class="room-detail_total">
                        <img src="images/icon-logo.png" alt="" class="icon-logo">

                        <p class="price">
                            <span class="amout">Devrath</span>
                        </p>
                    </div>  
                                
                    <div class="room-detail_form">
                        <label>Capacity</label>
                            <p>800 persons</p>
                        <label>Size </label>
                        <p>20,000 sq ft</p>                     
                    </div> 

                </div>
                <!-- END / FORM BOOK -->

            </div>
        </div>
    </div>
    <!-- END / DETAIL -->
    <div class="row">
        <br>
    </div>

    </div>
</section>
<!-- END / Banquet DETAIL -->



<!-- Royal Pine BANQUET DETAIL -->
<section class="section-room-detail bg-white">
    <div class="container">

        <!-- DETAIL -->
        <div class="room-detail">
            <div class="row">
                <div class="col-lg-9">

                    <!-- LAGER IMGAE -->
                    <div class="room-detail_img">
                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/royal-pine-1.JPG'); ?>" alt="Royal Pine">
                        </div>
                                            
                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/royal-pine-2.JPG'); ?>" alt="Royal Pine">
                        </div>

                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/royal-pine-3.JPG'); ?>" alt="Royal Pine">
                        </div>
                    
                    </div>

                    <div class="room-detail_thumbs">
                        <!-- <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/royal-pine-3.JPG'); ?>" alt="Royal Pine"></a>
                        <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/royal-pine-3.JPG'); ?>" alt="Royal Pine"></a>
                        -->

                    </div>         
                </div>


            <div class="col-lg-3">
                <!-- FORM BOOK -->
                <div class="room-detail_book">
                    <div class="room-detail_total">
                        <img src="images/icon-logo.png" alt="" class="icon-logo">

                        <p class="price">
                            <span class="amout">Royal Pine</span>
                        </p>
                    </div>  
                    
                    <div class="room-detail_form">
                        <label>Capacity</label>
                            <p>800 persons</p>
                        <label>Size </label>
                        <p>20,000 sq ft</p>
                       
                      
                    </div>

                </div>
                <!-- END / FORM BOOK -->

            </div>
        </div>
    </div>
    <!-- END / DETAIL -->
    <div class="row">
        <br>
    </div>


    </div>
</section>
<!-- END / Banquet DETAIL -->







<!-- Antler  BANQUET DETAIL -->
<section class="section-room-detail bg-white">
    <div class="container">

        <!-- DETAIL -->
        <div class="room-detail">
            <div class="row">
                <div class="col-lg-9">

                    <!-- LAGER IMGAE -->
                    <div class="room-detail_img">
                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/antler.JPG'); ?>" alt="Antler">
                        </div>
                                            
                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/Antler1.JPG'); ?>" alt="Antler">
                        </div>
                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/Antler2.JPG'); ?>" alt="Antler">
                        </div>
                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/Antler3.JPG'); ?>" alt="Antler">
                        </div>
                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/Antler4.JPG'); ?>" alt="Antler">
                        </div>
                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/Antler5.JPG'); ?>" alt="Antler">
                        </div>
                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/Antler6.JPG'); ?>" alt="Antler">
                        </div>
                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/Antler7.JPG'); ?>" alt="Antler">
                        </div>
                    </div>

                    <!-- <div class="room-detail_thumbs">
                        <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/antler.JPG'); ?>" alt="Antler"></a>
                        <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/Antler1.JPG'); ?>" alt="Antler"></a>
                        <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/Antler2.JPG'); ?>" alt="Antler"></a>
                        <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/Antler3.JPG'); ?>" alt="Antler"></a>
                        <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/Antler4.JPG'); ?>" alt="Antler"></a>
                        <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/Antler5.JPG'); ?>" alt="Antler"></a>
                        <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/Antler6.JPG'); ?>" alt="Antler"></a>
                        <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/Antler7.JPG'); ?>" alt="Antler"></a>

                        

                    </div>          -->
                </div>


            <div class="col-lg-3">
                <!-- FORM BOOK -->
                <div class="room-detail_book">
                    <div class="room-detail_total">
                        <img src="images/icon-logo.png" alt="" class="icon-logo">

                        <p class="price">
                            <span class="amout">Antler</span>
                        </p>
                    </div>   

                    <div class="room-detail_form">
                        <label>Capacity</label>
                            <p>300 persons</p>
                        <label>Size </label>
                        <p>10,000 sq ft</p>                     
                    </div> 

                </div>
                <!-- END / FORM BOOK -->

            </div>
        </div>
    </div>
    <!-- END / DETAIL -->
    <div class="row">
        <br>
    </div>

    </div>
</section>
<!-- END / Banquet DETAIL -->






<!-- jASHN  BANQUET DETAIL -->
<section class="section-room-detail bg-white">
    <div class="container">

        <!-- DETAIL -->
        <div class="room-detail">
            <div class="row">
                <div class="col-lg-9">

                    <!-- LAGER IMGAE -->
                    <div class="room-detail_img">
                        <div class="room_img-item">
                            <!-- <video src="<?php echo base_url('assets/devrath/images/banquet/Jashn1.JPG'); ?>" alt="Jashn"> -->

                            <video  controls poster="<?php echo base_url('assets/devrath/images/banquet/video-thumbnail.png'); ?>">
                                <source src="<?php echo base_url('assets/devrath/images/banquet/devrath-jashan-video.mp4'); ?>" type="video/mp4">
                                <source src="<?php echo base_url('assets/devrath/images/banquet/devrath-jashan-video.mp4'); ?>" type="video/ogg">
                                
                            </video>


                        </div>


                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/Jashn1.JPG'); ?>" alt="Jashn">
                        </div>
                                            
                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/Jashn2.JPG'); ?>" alt="Jashn">
                        </div>

                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/Jashn3.JPG'); ?>" alt="Jashn">
                        </div>

                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/Jashn4.JPG'); ?>" alt="Jashn">
                        </div>

                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/Jashn5.JPG'); ?>" alt="Jashn">
                        </div>

                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/Jashn6.JPG'); ?>" alt="Jashn">
                        </div>

                    
                    </div>

                    <div class="room-detail_thumbs">
                        <!-- <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/Jashn1.JPG'); ?>" alt="Palm Court"></a>
                        <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/Jashn2.JPG'); ?>" alt="Palm Court"></a>
                        <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/Jashn3.JPG'); ?>" alt="Palm Court"></a>
                        <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/Jashn4.JPG'); ?>" alt="Palm Court"></a>
                        <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/Jashn5.JPG'); ?>" alt="Palm Court"></a>
                        <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/Jashn6.JPG'); ?>" alt="Palm Court"></a>
                        -->

                    </div>         
                </div>


            <div class="col-lg-3">
                <!-- FORM BOOK -->
                <div class="room-detail_book">
                    <div class="room-detail_total">
                        <img src="images/icon-logo.png" alt="" class="icon-logo">

                        <p class="price">
                            <span class="amout">Jashn</span>
                        </p>
                    </div>  
                    <div class="room-detail_form">
                        <label>Capacity</label>
                            <p>1500 - 2000 persons</p>
                        <label>Size </label>
                        <p>50,000 sq ft</p>                     
                    </div>  

                </div>
                <!-- END / FORM BOOK -->

            </div>
        </div>
    </div>
    <!-- END / DETAIL -->
    <div class="row">
        <br>
    </div>


    </div>
</section>
<!-- END / Banquet DETAIL -->





<!-- Palm Court  BANQUET DETAIL -->
<section class="section-room-detail bg-white">
    <div class="container">

        <!-- DETAIL -->
        <div class="room-detail">
            <div class="row">
                <div class="col-lg-9">

                    <!-- LAGER IMGAE -->
                    <div class="room-detail_img">
                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/Palm-court1.JPG'); ?>" alt="Palm Court">
                        </div>
                                            
                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/Palm-court2.JPG'); ?>" alt="Palm Court">
                        </div>

                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/Palm-court3.JPG'); ?>" alt="Palm Court">
                        </div>

                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/Palm-court4.JPG'); ?>" alt="Palm Court">
                        </div>

                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/Palm-court5.JPG'); ?>" alt="Palm Court">
                        </div>

                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/Palm-court6.JPG'); ?>" alt="Palm Court">
                        </div>
                    
                    </div>

                    <div class="room-detail_thumbs">
                        <!-- <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/Palm-court1.JPG'); ?>" alt="Palm Court"></a>
                        <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/Palm-court2.JPG'); ?>" alt="Palm Court"></a>
                        <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/Palm-court3.JPG'); ?>" alt="Palm Court"></a>
                        <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/Palm-court4.JPG'); ?>" alt="Palm Court"></a>
                        <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/Palm-court5.JPG'); ?>" alt="Palm Court"></a>
                        <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/Palm-court6.JPG'); ?>" alt="Palm Court"></a>
                      
                        -->

                    </div>         
                </div>


            <div class="col-lg-3">
                <!-- FORM BOOK -->
                <div class="room-detail_book">
                    <div class="room-detail_total">
                        <img src="images/icon-logo.png" alt="" class="icon-logo">

                        <p class="price">
                            <span class="amout">Palm Court</span>
                        </p>
                    </div>  
                    <div class="room-detail_form">
                        <label>Capacity</label>
                            <p>100 - 250 persons</p>
                        <!-- <label>Size </label>
                        <p>20,000 sq ft</p>                      -->
                    </div>  

                </div>
                <!-- END / FORM BOOK -->

            </div>
        </div>
    </div>
    <!-- END / DETAIL -->
    <div class="row">
        <br>
    </div>


    </div>
</section>
<!-- END / Banquet DETAIL -->




<!-- Olive  BANQUET DETAIL -->
<section class="section-room-detail bg-white">
    <div class="container">

        <!-- DETAIL -->
        <div class="room-detail">
            <div class="row">
                <div class="col-lg-9">

                    <!-- LAGER IMGAE -->
                    <div class="room-detail_img">
                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/olive1.jpeg'); ?>" alt="Olive">
                        </div>
                                            
                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/olive2.jpeg'); ?>" alt="Olive">
                        </div>

                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/banquet/olive3.jpeg'); ?>" alt="Olive">
                        </div>

                    
                    </div>

                    <div class="room-detail_thumbs">
                        <!-- <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/olive1.jpeg'); ?>" alt="Palm Court"></a>
                        <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/olive2.jpeg'); ?>" alt="Palm Court"></a>
                        <a href="#"><img src="<?php echo base_url('assets/devrath/images/banquet/olive3.jpeg'); ?>" alt="Palm Court"></a>
                       
                        -->

                    </div>         
                </div>


            <div class="col-lg-3">
                <!-- FORM BOOK -->
                <div class="room-detail_book">
                    <div class="room-detail_total">
                        <img src="images/icon-logo.png" alt="" class="icon-logo">

                        <p class="price">
                            <span class="amout">Olive</span>
                        </p>
                    </div>  
                    <div class="room-detail_form">
                        <label>Capacity</label>
                            <p>100 - 200 persons</p>
                        <!-- <label>Size </label>
                        <p>20,000 sq ft</p>                      -->
                    </div>  

                </div>
                <!-- END / FORM BOOK -->

            </div>
        </div>
    </div>
    <!-- END / DETAIL -->
    <div class="row">
        <br>
    </div>


    </div>
</section>
<!-- END / Banquet DETAIL -->

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

<script>
setTimeout(function() {
    $('.success').fadeOut('fast');
}, 30000);

</script>