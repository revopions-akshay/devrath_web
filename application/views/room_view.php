<!-- SUB BANNER -->
<section class="section-sub-banner bg-9">
    <div class="awe-overlay"></div>
    <div class="sub-banner">
        <div class="container">
            <div class="text text-center">
                <h2><?php echo  $room[0]->title;  ?></h2>
                <!-- <p>Lorem Ipsum is simply dummy text</p> -->
            </div>
        </div>

    </div>

</section>
<!-- END / SUB BANNER -->


<!-- ROOM DETAIL -->
<section class="section-room-detail bg-white">
    <div class="container">

        <!-- DETAIL -->
        <div class="room-detail">
            <div class="row">
                <div class="col-lg-9">

                    <!-- LAGER IMGAE -->
                    <div class="room-detail_img">


                    

                        <div class="room_img-item">
                            <img src="<?php echo base_url('assets/devrath/images/rooms/') . $room[0]->file_path; ?>" alt="">

                        </div>
                        <div class="room_img-item">
                            <img src="images/room/detail/lager/img-1.jpg" alt="">
                        </div>

                            <div class="room_img-item">
                                <img src="images/room/detail/lager/img-1.jpg" alt="">

                            </div>
                            <div class="room_img-item">
                                <img src="images/room/detail/lager/img-1.jpg" alt="">

                            </div>
                            <div class="room_img-item">
                                <img src="images/room/detail/lager/img-1.jpg" alt="">

                            </div>
                            <div class="room_img-item">
                                <img src="images/room/detail/lager/img-1.jpg" alt="">

                            </div>
                            <div class="room_img-item">
                                <img src="images/room/detail/lager/img-1.jpg" alt="">

                            </div>
                        </div>
                        <!-- END / LAGER IMGAE -->

                        <!-- THUMBNAIL IMAGE -->
                        <div class="room-detail_thumbs">
                            <a href="#"><img src="images/room/detail/img-2.jpg" alt=""></a>
                            <a href="#"><img src="images/room/detail/img-2.jpg" alt=""></a>
                            <a href="#"><img src="images/room/detail/img-2.jpg" alt=""></a>
                            <a href="#"><img src="images/room/detail/img-2.jpg" alt=""></a>
                            <a href="#"><img src="images/room/detail/img-2.jpg" alt=""></a>
                            <a href="#"><img src="images/room/detail/img-2.jpg" alt=""></a>
                            <a href="#"><img src="images/room/detail/img-2.jpg" alt=""></a>
                            <a href="#"><img src="images/room/detail/img-2.jpg" alt=""></a>
                        </div>
                        <!-- END / THUMBNAIL IMAGE -->

                    </div>

                    <div class="col-lg-3">

                        <!-- FORM BOOK -->
                        <div class="room-detail_book">

                            <div class="room-detail_total">
                                <img src="images/icon-logo.png" alt="" class="icon-logo">

                                <!-- <h6><?php echo  $room[0]->title;   ?></h6> -->

                                <p class="price">
                                    <span class="amout"><?php echo  $room[0]->title;   ?></span>
                                </p>
                            </div>

                            <div class="room-detail_form">
                                <label>Max. Person</label>
                                <!-- <input type="text" class="awe-calendar from" placeholder="Arrive Date"> -->
                                <?php echo  $room[0]->max_person;   ?>
                                <label>Bed</label>
                                <!-- <input type="text" class="awe-calendar to" placeholder="Departure Date">
                                 -->
                                <?php echo  $room[0]->bed;   ?>
                                <label>View</label>
                                <?php echo  $room[0]->view;   ?>
                                <!-- <select class="awe-select">
                                        <option>1</option>
                                        <option>2</option>
                                        <option selected>3</option>
                                        <option>4</option>
                                    </select> -->
                                <label>Room Size</label>
                                <?php echo  $room[0]->room_size;   ?>
                                <!-- <select class="awe-select">
                                        <option>1</option>
                                        <option>2</option>
                                        <option selected>3</option>
                                        <option>4</option>
                                    </select> -->
                                <!-- <button class="awe-btn awe-btn-13">Book Now</button> -->
                            </div>

                        </div>
                        <!-- END / FORM BOOK -->

                    </div>
                </div>
            </div>
            <!-- END / DETAIL -->


            <div class="row">
                <div class="col-lg-12">
                    <?php echo  $room[0]->content;   ?>

                </div>
            </div>

            <!--              
                <div class="room-detail_compare">
                    <h2 class="room-compare_title">COMPARE ACCOMMODATION</h2>

                    <div class="room-compare_content">
                        
                        <div class="row">
                        
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="room-compare_item">
                                    <div class="img">
                                        <a href="#"><img src="images/room/detail/compare/img-1.jpg" alt=""></a>
                                    </div>  
                                
                                    <div class="text">
                                        <h2><a href="">LUxury room</a></h2>
                                
                                        <ul>
                                            <li><i class="lotus-icon-person"></i> Max: 2 Person(s)</li>
                                            <li><i class="lotus-icon-bed"></i> Bed: King-size or twin beds</li>
                                            <li><i class="lotus-icon-view"></i> View: Ocen</li>
                                        </ul>
                                
                                        <a href="#" class="awe-btn awe-btn-default">VIEW DETAIL</a>
                                
                                    </div>
                                
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="room-compare_item">
                                    <div class="img">
                                        <a href="#"><img src="images/room/detail/compare/img-1.jpg" alt=""></a>
                                    </div>  
                                
                                    <div class="text">
                                        <h2><a href="">Family Room</a></h2>
                                
                                        <ul>
                                            <li><i class="lotus-icon-person"></i> Max: 2 Person(s)</li>
                                            <li><i class="lotus-icon-bed"></i> Bed: King-size or twin beds</li>
                                            <li><i class="lotus-icon-view"></i> View: Ocen</li>
                                        </ul>
                                
                                        <a href="#" class="awe-btn awe-btn-default">VIEW DETAIL</a>
                                
                                    </div>
                                
                                </div>
                            </div>
                          
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="room-compare_item">
                                    <div class="img">
                                        <a href="#"><img src="images/room/detail/compare/img-1.jpg" alt=""></a>
                                    </div>  
                                
                                    <div class="text">
                                        <h2><a href="">standard Room</a></h2>
                                
                                        <ul>
                                            <li><i class="lotus-icon-person"></i> Max: 2 Person(s)</li>
                                            <li><i class="lotus-icon-bed"></i> Bed: King-size or twin beds</li>
                                            <li><i class="lotus-icon-view"></i> View: Ocen</li>
                                        </ul>
                                
                                        <a href="#" class="awe-btn awe-btn-default">VIEW DETAIL</a>
                                
                                    </div>
                                
                                </div>
                            </div>
                           
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="room-compare_item">
                                    <div class="img">
                                        <a href="#"><img src="images/room/detail/compare/img-1.jpg" alt=""></a>
                                    </div>  
                                
                                    <div class="text">
                                        <h2><a href="">couple Room</a></h2>
                                
                                        <ul>
                                            <li><i class="lotus-icon-person"></i> Max: 2 Person(s)</li>
                                            <li><i class="lotus-icon-bed"></i> Bed: King-size or twin beds</li>
                                            <li><i class="lotus-icon-view"></i> View: Ocen</li>
                                        </ul>
                                
                                        <a href="#" class="awe-btn awe-btn-default">VIEW DETAIL</a>
                                
                                    </div>
                                
                                </div>
                            </div>
                            
                        </div>

                    </div>
                </div> -->

        </div>
</section>
<!-- END / SHOP DETAIL -->



<!-- CONTACT -->
<section class="section-contact">
    <div class="container">
        <div class="contact">
            <div class="row">

                <div class="col-md-6 col-lg-5">
                    <div class="text">
                        <h2>Send Inquiry</h2>
                        <!-- <p><?php echo $contactabout[0]->content; ?></p> -->

                    </div>
                </div>

                <div class="col-md-12 col-lg-12">

                    <div class="contact-form">
                        <?php echo (!empty($this->session->flashdata('msg'))) ? $this->session->flashdata('msg') : ''; ?>
                        <form id="send-contact-form" action="<?php echo base_url(); ?>contact-us/send" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" name="form_name" class="field-text" value="" placeholder="Your Name" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" name="form_email" class="field-text" value="<?php echo (!empty($_GET['form_email'])) ? $_GET['form_email'] : ""; ?>" placeholder="Email Address" required>
                                </div>
                                <div class="col-sm-12">
                                    <input type="text" name="form_phone" class="field-text" value="" placeholder="Phone" required>
                                </div>
                                <!-- <div class="col-sm-12">
                                    <input type="text" name="form_subject" class="field-text" value="<?php echo (!empty($_GET['form_subject'])) ? $_GET['form_subject'] : ""; ?>" placeholder="Subject" required>
                                </div> -->


                                <div class="col-sm-12">
                                    <textarea name="form_message" class="field-textarea" placeholder="Your Message.." required><?php echo (!empty($_GET['form_message'])) ? $_GET['form_message'] : ""; ?></textarea>
                                    <!-- <textarea cols="30" rows="10" name="message"  class="field-textarea" placeholder="Write what do you want"></textarea> -->
                                </div>
<!-- 
                                <div class="col-md-12">
                                    <div class="g-recaptcha" data-sitekey="6LeqV7MZAAAAAGOM15h14FVxdp-Y6LxadqtKxdAj"></div>
                                </div> -->

                                <div class="col-sm-6">
                                    <!-- <button type="submit" class="awe-btn awe-btn-13">SEND</button> -->
                                    <div class="button-box">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button class="awe-btn awe-btn-13" data-text="Submit Here" type="submit" data-loading-text="Please wait...">Submit Here</button>
                                    </div>

                                </div>
                                <!-- 
                                <div class="button-box">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="theme-button-one bttn color-one" data-text="Submit Here" type="submit" data-loading-text="Please wait...">Submit Here</button>
                                </div> -->


                            </div>
                            <div id="contact-content"></div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- END / CONTACT -->