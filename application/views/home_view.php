 
    <!-- CHECK AVAILABILITY -->
    <!-- <section class="section-check-availability availability-style-2 clearfix">
        <div class="container">
            <div class="check-availability">
                <div class="ot-heading">
                    <h2 class="mb40">CHECK availability</h2>
                </div>
                <form id="ajax-form-search-room" class="mt40 mb50" action="search_step_2.php" method="post">
                    <div class="availability-form mb40">
                        <input type="text" name="arrive" class="awe-calendar from" placeholder="Arrival Date">
                        <input type="text" name="departure" class="awe-calendar to" placeholder="Departure Date">

                        <select class="awe-select" name="adults">
                            <option>Adults</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        <select class="awe-select" name="children">
                            <option>Children</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class="vailability-submit">
                        <button class="awe-btn awe-btn-13 pr30 pl30 f16 bold font-hind">Check Availability</button>
                    </div>
                </form>
            </div>
        </div>
    </section> -->
    <!-- END / CHECK AVAILABILITY -->


    <!-- END / ACCOMMODATIONS -->

    <!-- ABOUT -->
    <!-- <section class="ot-about mt60">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col col-xs-12 col-lg-6 col-lg-offset-3">
                        <div class="ot-heading mb40 row-20 text-center">
                            <h2>ABOUT LOTUS HOTEL</h2>
                            <p class="sub pr10 pl10">
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page when looking at its layout
                            </p>
                        </div>
                    </div>
                </div>
                <div class="img-hover-box mb40">
                    <div class="img">
                        <img class="img-responsive" src="<?php echo base_url(); ?>/assets/devrath/images/home-3/about-hill.png" alt="">
                    </div>
                </div>
                <div class="text-center mt40 mb30 featured">
                    <p class="font-hind f-500 f20">Brent Conrad talks with everyone from, frequent travelers to the busy
                        family that can
                        only get away for vacation every couple of years. </p>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <div class="details">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <p class="font-hind f14 pr15">
                                        The cards are being handed out by quarantine officials at Chicago,
                                        O’Hare International Airport; Los Angeles; old York City, JFK International
                                        Airport; Newark; & San Francisco. These airports are the only U.S.
                                        airports receiving direct flights from Hong Kong. No U.S. airports
                                        receive direct flights from Hanoi or the Guangdong Province. CDC officials
                                        expect to expand the distribution of
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <p class="font-hind f14 pl15">
                                        The Centers for Disease Control & Prevention (CDC) on Saturday began
                                        distributing cards at airports receiving flights returning directly from Hong
                                        Kong warning travelers returning to the United States from Hong Kong & Guangdong
                                        Province, People’s Republic of China & Hanoi,
                                        Vietnam that they may have been exposed to cases of severe acute respiratory
                                        syndrome (SARS).
                                    </p>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="!#" class="awe-btn awe-btn-default mt30 mb30 font-hind f12 bold btn-medium"
                                   target="_blank">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> -->


    <section class="section-home-about bg-white">
        <div class="container">
            <div class="home-about">
                <div class="row">
                    <div class="col-md-6">
                        <div class="img">
                            <a href="#"><img src="<?php echo base_url(); ?>/assets/devrath/images/about/<?php echo $about[0]->file_path; ?>" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text">
                            <h2 class="heading"><?php echo $about[0]->title_one; ?></h2>
                            <span class="box-border"></span>
                            <p><?php echo $about[0]->content_one; ?></p>
                            <a href="#" class="awe-btn awe-btn-default">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- END / ABOUT -->


        <!-- ACCOMMODATIONS -->

        <section class="ot-accomd-modations">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-xs-12 col-lg-6 col-lg-offset-3">
                        <div class="ot-heading pt80 pb30 text-center row-20">
                            <h2 class="mb15">ACCOMMODATIONS</h2>
                            <!-- <p class="sub pr10 pl10">
                                It is a long established fact that a reader will be distracted by the readable
                                content of a page
                                when looking at its layout
                            </p> -->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="ot-accomd-modations-content owl-single" data-single_item="false" data-desktop="1"
                             data-small_desktop="1"
                             data-tablet="2" data-mobile="1"
                             data-nav="false"
                             data-pagination="false">
                            <div class="row">


                            
                                <?php
                                    if (!empty($room4home)) {
                                ?>
                                    <?php
                                        foreach ($room4home as $room) {
                                        ?>
    
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="item room-item text-center accomd-modations-room_1">
                                            <div class="img">
                                                <a href="#"><img class="img-responsive img-full" src="<?php echo base_url(); ?>assets/devrath/images/rooms/<?php echo $room->room_home; ?>"
                                                                alt="" style="height: 236px; width: 370px;"></a>
                                            </div>
                                            <h2 class="title"><a href="<?php echo base_url(); ?><?php echo $room->seourl; ?>"><?php echo $room->title; ?></a></h2>
                                            <p class="price">
                                            <!-- <?php echo $room->short; ?> -->
                                            </p>
                                            <div class="info upper">
                                                <p>
                                                    <span class="number"><?php echo $room->max_person; ?></span>
                                                    <span>Max Guest</span>
                                                </p>
                                                <p>
                                                    <span class="number"><?php echo $room->room_size; ?></span>
                                                    <span>Size (M<sup>2</sup>)</span>

                                                </p>
                                                <p>
                                                    <span class="number"><?php echo $room->bedroom; ?></span>
                                                    <span> Bedroom</span>
                                                </p>
                                            </div>
                                            <a class="awe-btn awe-btn-default btn-medium font-hind f12 bold" href="<?php echo base_url(); ?><?php echo $room->seourl; ?>"> View
                                                Details</a>
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
        </div>
    </section>




    <!-- OUR BEST -->
    <section class="ot-out-best mt60">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col col-xs-12 col-lg-6 col-lg-offset-3">
                        <div class="ot-heading mb40 row-20 text-center">
                            <h2>We Provides</h2>
                        </div>
                    </div>
                </div>
                <div class="owl-single owl-best" data-single_item="false" data-desktop="6"
                     data-small_desktop="4"
                     data-tablet="3" data-mobile="2"
                     data-nav="true"
                     data-pagination="false">
                    


                   

                <?php
                    if (!empty($facilities)) {
                ?>
                <?php
                    foreach ($facilities as $facility) {
                    ?>
                    <div class="item text-center">
                        <img class="img-responsive mb10" src="<?php echo base_url(); ?>/assets/devrath/images/facilities/<?php echo $facility->file; ?>" alt="icon">
                        <span class="font-hind f-500"><?php echo $facility->name; ?></span>
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
    </section>
    <!-- END / OUR BEST -->

    <!-- HOME GUEST BOOK -->
    <div class="section-home-guestbook home-guestbook-style-2 awe-parallax bg-22 mt90 pt100 pb100">
        <div class="container">
            <div class="home-guestbook pt0 pb0">
                <div class="row">
                    <div class="col-xs-12 col-lg-6 col-lg-offset-3">
                        <div class="ot-heading mb40 row-20 text-center">
                            <h2>Guest book</h2>
                            <p class="sub">Your feedback means the world to us.</p>
                        </div>
                    </div>
                    <div class="guestbook-content text-center owl-single">



                            <?php
                            if (!empty($testimonials)) {
                            ?>

                            <?php
                            foreach ($testimonials as $testimonial) {
                            ?>

                            <!-- ITEM -->
                            <div class="guestbook-item">
                                <div class="text">
                                    <p class="f20"><?php echo $testimonial->short_desc; ?></p>
                                </div>
                                <div class="img">
                                    <img src="<?php echo base_url(); ?>assets/devrath/images/testimonials/<?php echo $testimonial->file_path; ?>" alt="">
                                </div>
                                <div class="info-author">
                                    <span class="f20 c-main"><strong><?php echo $testimonial->name; ?></strong></span><br>
                                    <span class="f14"><?php echo $testimonial->address; ?></span>
                                </div>
                            </div>
                            <!-- ITEM -->
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

                                <div class="col-md-12">
                                    <div class="g-recaptcha" data-sitekey="6LeqV7MZAAAAAGOM15h14FVxdp-Y6LxadqtKxdAj"></div>
                                </div>

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




    <!-- END / HOME GUEST BOOK -->

    <!-- DEALS PACKAGE -->
    <!-- <section class="section-deals mt90">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col col-xs-12 col-lg-6 col-lg-offset-3">
                        <div class="ot-heading row-20 mb30 text-center">
                            <h2>Deals & PACKAGE</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="item item-deal">
                            <div class="img">
                                <img class="img-full" src="<?php echo base_url(); ?>/assets/devrath/images/home-3/deals/deals-1.png" alt="">
                            </div>
                            <div class="info">
                                <a class="title bold f26 font-monserat upper" href="!#">Lotus</a>
                                <p class="sub font-monserat f12 f-600 upper mt10 mb20">Restaurant</p>
                                <a class="awe-btn awe-btn-12 btn-medium font-hind f12 bold" href="!#">Click here</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="item item-deal">
                            <div class="img">
                                <img class="img-full" src="<?php echo base_url(); ?>/assets/devrath/images/home-3/deals/deals-1.png" alt="">
                            </div>
                            <div class="info">
                                <a class="title bold f26 font-monserat upper" href="!#">gym</a>
                                <p class="sub font-monserat f12 f-600 upper mt10 mb20">package</p>
                                <a class="awe-btn awe-btn-12 btn-medium font-hind f12 bold" href="!#">Click here</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="item item-deal">
                            <div class="img">
                                <img class="img-full" src="<?php echo base_url(); ?>/assets/devrath/images/home-3/deals/deals-1.png" alt="">
                            </div>
                            <div class="info">
                                <a class="title bold f26 font-monserat upper" href="!#">Spa salon</a>
                                <p class="sub font-monserat f12 f-600 upper mt10 mb20">package</p>
                                <a class="awe-btn awe-btn-12 btn-medium font-hind f12 bold" href="!#">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="item item-deal">
                            <div class="img">
                                <img class="img-full" src="<?php echo base_url(); ?>/assets/devrath/images/home-3/deals/deals-1.png" alt="">
                            </div>
                            <div class="info">
                                <a class="title bold f26 font-monserat upper" href="!#">weeding</a>
                                <p class="sub font-monserat f12 f-600 upper mt10 mb20">event</p>
                                <a class="awe-btn awe-btn-12 btn-medium font-hind f12 bold" href="!#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- END / DEALS PACKAGE -->

    <!-- NEWS -->
    <!-- <section class="section-news mt60">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-xs-12 col-lg-6 col-lg-offset-3">
                        <div class="ot-heading row-20 mb40 text-center">
                            <h2>News</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="item">
                            <div class="img">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>/assets/devrath/images/home-3/blog/blog-1.png" alt="">
                            </div>
                            <div class="info">
                                <p class="date f20">
                                    21 December, 2017
                                </p>
                                <a class="title font-monserat f20 mb20 block bold upper" href="!#">UPDATE MENU FOOD IN LOTUS
                                    HOTEL</a>
                                <a class="more block f13" href="!#">[Read more]</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="item">
                            <div class="img">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>/assets/devrath/images/home-3/blog/blog-1.png" alt="">
                            </div>
                            <div class="info">
                                <p class="date f20">
                                    06 Octorber, 2017
                                </p>
                                <a class="title font-monserat f20 mb20 block bold upper" href="!#">WEDDING DAY
                                    JONATHA & JESSICA</a>
                                <a class="more block f13" href="!#">[Read more]</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="item">
                            <div class="img">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>/assets/devrath/images/home-3/blog/blog-1.png" alt="">
                            </div>
                            <div class="info">
                                <p class="date f20">
                                    18 March, 2017
                                </p>
                                <a class="title font-monserat f20 mb20 block bold upper" href="!#">Bryce Canyon A Stunning Us
                                    Travel Destination</a>
                                <a class="more block f13" href="!#">[Read more]</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="!#" class="awe-btn awe-btn-default font-hind f12 bold btn-medium mt15">View more</a>
                </div>
            </div>
        </div>
    </section> -->
    <!-- END / NEWS -->

 