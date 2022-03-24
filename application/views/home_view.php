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
                        <!-- <p style="text-align: justify;"><?php echo $about[0]->content_one; ?></p> -->
                        <p style="text-align: justify;">Devrath – Palace and Resort by Big Bite is an iconic luxury resort 
                        located on Meerut – Delhi Expressway (NH 58) at Meerut By-Pass. With a total area of 10 acres, 
                        it has played host to some of the most illustrious social and corporate events in the city.</p>

                        <p style="text-align: justify;">As the name suggests, Devrath Palace is a divine carriage that 
                        takes you closer to your dream events. With 10 unique and beautifully crafted venues, it gives
                         you a wide variety to choose from for your D-Day.</p>

                         <p style="text-align: justify;">Creative menus, dedicated catering staff, unique culinary team, 
                         beautifully designed venues 
                         and professional wedding services are all available at Devrath – Palace and Resort.</p> 

                        <a href="/about-us/" class="awe-btn awe-btn-default">READ MORE</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>




<section class="section-home-about bg-white">
    <div class="container">
        <div class="home-about">
            <div class="row">

                <div class="col-md-6">
                    <div class="text">
                        <h2 class="heading"><?php echo $banquet[0]->title_two; ?></h2>
                        <span class="box-border"></span>
                        <p><?php echo $banquet[0]->content_one; ?></p>
                        <a href="/banquet/" class="awe-btn awe-btn-default">READ MORE</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="img">
                        <a href="#"><img src="<?php echo base_url(); ?>/assets/devrath/images/banquet/<?php echo $banquet[0]->file_path_two;  ?>" alt=""></a>
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
                        <h2 class="mb15">Accommodations</h2>
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
                    <div class="ot-accomd-modations-content owl-single" data-single_item="false" data-desktop="1" data-small_desktop="1" data-tablet="2" data-mobile="1" data-nav="false" data-pagination="false">
                        <div class="row">
                            <div class="col-xs-2">
                            </div>


                            <div class="col-xs-8 room-design">
                                <?php
                                if (!empty($room4home)) {
                                ?>
                                    <?php
                                    foreach ($room4home as $room) {
                                    ?>

                                        <div class="col-xs-12 col-sm-6">
                                            <!-- <div class="col-sm-4">
                                        </div> -->
                                            <div class="item room-item text-center accomd-modations-room_1">
                                                <div class="img">
                                                    <a href="#"><img class="img-responsive img-full" src="<?php echo base_url(); ?>assets/devrath/images/rooms/<?php echo $room->room_home; ?>" alt="" style="height: 236px; width: 370px;"></a>
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
                                            <!-- <div class="col-sm-4">
                                        </div> -->
                                        </div>
                                    <?php
                                    }
                                    ?>

                                <?php
                                }
                                ?>
                            </div>

                            <div class="col-xs-2">
                            </div>



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
                        <h2>Amenities and Facilities</h2>
                    </div>
                </div>
            </div>
     
            <div class="owl-single owl-best" data-single_item="false" data-desktop="6" data-small_desktop="4" data-tablet="3" data-mobile="2" data-nav="true" data-pagination="false">

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




<style>
    #owl-demo .item img {
        display: block;
        width: 100%;
        height: auto;
    }

    .modal-header .count-slide {
        height: 415px;
    }

    @media (max-width: 767px) {
        .hidden-xs {
            display: none !important;
        }

        .text-center {
            text-align: center;
        }

        .room-design{
            width: 100% !important;
        }

    }



    .event-small-title {
        text-transform: uppercase;
        color: #393939;
        font-size: 1.6875rem;
        letter-spacing: 1px;
        font-weight: 700;
    }

    .event-all-info div.event-title,
    .event-all-info h3.event-title,
    .event-all-info p.event-title {
        font-size: 2.25rem;
        font-weight: 700;
        line-height: 2.75rem;
        font-family: FreightProItalic, sans-serif;
        font-weight: 500;
    }

    .event-description {
        color: #393939;
        width: 65%;
        margin: 0 auto;
        max-height: 280px;
        overflow: auto;
    }

    .event-detail-link {
        display: inline-block;
        padding: 5px 8px;
        margin-bottom: 15px;
    }

    .event-all-info a:focus {
        outline: none;
    }

    a:focus .tertiary-button {
        color: #393939;
        font-weight: 500;
        outline: 2px solid #bb5c19;
        outline-offset: 2px;
    }

    .event-slider-item {
        position: relative;
    }

    .event-info {
        width: 90%;
        margin: 20px auto 30px;
        max-width: 600px;
    }

    .event-slider {
        margin: 0 auto;
        position: relative;
        max-width: 1130px;
    }

    .event-details {
        width: 460px;
        height: 460px;
        background-color: #fff;
        position: absolute;
        top: 10%;
        right: 0;
        display: table;
        box-shadow: 0 2px 60px 0 rgba(0, 0, 0, 0.1);
    }

    .event-all-info {
        display: table-cell;
        vertical-align: middle;
        padding: 0 10px;
    }

    .event-content {
        text-align: center;
        max-width: 975px;
        margin: 0 auto;
        overflow: hidden;
    }

    .event-content h2 {
        padding-top: 30px;
        font-family: FreightProItalic, sans-serif;
        font-weight: 400;
    }

    .event-all-info p.event-small-title {
        padding-top: 15px !important;
        margin: 0;
    }

    .event-all-info h3.event-title,
    .event-all-info p.event-description {
        padding-top: 15px !important;
    }

    .event-all-info div,
    .event-all-info h2 {
        padding-top: 15px;
    }

    .event-all-info h2 {
        font-family: ITCFranklinGothicStd !important;
    }

    .event-all-info div.tertiary-button,
    .event-all-info p.tertiary-button {
        padding-top: 0;
        margin-top: 15px;
    }

    .brand-destination-scroll button.slick-prev,
    .event-slider button.slick-prev {
        left: -45px;
        z-index: 9;
        fill: #000;
        width: 20px;
        height: 20px;
    }

    .brand-destination-scroll button.slick-next,
    .event-slider button.slick-next {
        right: -45px;
        z-index: 9;
        fill: #000;
        width: 20px;
        height: 20px;
    }

    .event-details {
        width: 460PX;
        height: 360PX;
        background-color: #fff;
        position: absolute;
        top: 10%;
        right: 0;
        display: table;
        box-shadow: 0 2px 60px 0 rgb(0 0 0 / 10%);
    }

    .text-center {
        text-align: center;
    }

    .event-all-info p.event-small-title {
        padding-top: 15px !important;
        margin: 0;
    }


    @media (max-width: 767px) {
        #events .event-all-info .event-description {
            padding-left: 15px;
            padding-right: 15px;
        }

        .event-description {
            width: 100%;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        #events .event-details {
            min-height: 300px;
            height: 400px;
            padding-bottom: 15px;
        }

        .event-details {
            width: 90%;
            position: relative;
            height: 350px;
            left: 0;
            margin: -60px auto 50px;
        }

    }
</style>







<!-- Events -->
<section class="ot-out-best mt60">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col col-xs-12 col-lg-6 col-lg-offset-3">
                    <div class="ot-heading mb40 row-20 text-center">
                        <h2>Plan an Event</h2>
                    </div>
                </div>
            </div>
           <!-- owl-carousel owl-theme  id="owl-demo"    -->

            <div class=" owl-single owl-best">

                <div class="item-slide">
                    <div class="row" style="background-color:aliceblue;">
                        <div class="col-md-12">
                            <img src="<?php echo base_url(); ?>assets/devrath/images/events/wedding.jpg" width="770" height="578" alt="The Last of us">
                            <div class="event-details text-center">                            
                                <div class="event-all-info">
                                    <p class="event-small-title text-center">
                                       Event
                                    </p>
                                    <h3 class="event-title text-center remove-title-padding NoClass">
                                        Weddings
                                    </h3>
                                    <a href="" class="underlined-link" target="_self" tabindex="0">
                                        <p class="event-description text-center NoClass">
                                           Devrath offers an enviable array of venues for successful wedding and all wedding functions.
                                        </p>
                                        <div class="status-label-container">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="item-slide">
                    <div class="row" style="background-color:aliceblue;">
                        <div class="col-md-12">
                            <img src="<?php echo base_url(); ?>assets/devrath/images/events/birthday2.jpg" width="770" height="578"  alt="The Last of us">
                            <div class="event-details text-center">                            
                                <div class="event-all-info">
                                    <p class="event-small-title text-center">
                                        Event
                                    </p>
                                    <h3 class="event-title text-center remove-title-padding NoClass">
                                   Birthdays
                                    </h3>
                                    <a href="#" class="underlined-link" target="_self"  tabindex="0">
                                        <p class="event-description text-center NoClass">
                                           Devrath offers an enviable array of venues for successful Birthday parties and all events.
                                        </p>
                                        <div class="status-label-container">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="item-slide">
                    <div class="row" style="background-color:aliceblue;">
                        <div class="col-md-12">
                            <img src="<?php echo base_url(); ?>assets/devrath/images/events/3.jpeg" width="770" height="578" alt="The Last of us">
                            <div class="event-details text-center">                            
                                <div class="event-all-info">
                                    <p class="event-small-title text-center">
                                       Event
                                    </p>
                                    <h3 class="event-title text-center remove-title-padding NoClass">
                                    Meetings
                                    </h3>
                                    <a href="" class="underlined-link" target="_self" tabindex="0">
                                        <p class="event-description text-center NoClass">
                                           Devrath offers an enviable array of venues for successful corporate meetings and professional conferences.
                                        </p>
                                        <div class="status-label-container">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>           
               
         

                <div class="item-slide">
                    <div class="row" style="background-color:aliceblue;">
                        <div class="col-md-12">
                            <img src="<?php echo base_url(); ?>assets/devrath/images/events/2A.jpeg" width="770" height="578" alt="The Last of us">
                            <div class="event-details text-center">                            
                                <div class="event-all-info">
                                    <p class="event-small-title text-center">
                                        Event
                                    </p>
                                    <h3 class="event-title text-center remove-title-padding NoClass">                                    
                                    Social Events                                
                                    </h3>
                                    <a href="#" class="underlined-link" target="_self"  tabindex="0">
                                        <p class="event-description text-center NoClass">
                                            Whether you are planning a black-tie gala or a prestigious affair,
                                             Devrath understands the demands of hosting center stage events.                                    
                                        </p>
                                        <div class="status-label-container">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Events -->





<!-- GALLERY -->
<section class="section_page-gallery">
    <div class="container">
        <div class="gallery gallery-3">
            <h2 class="heading text-center" style="font-family: FreightProItalic,sans-serif !important;">Gallery</h2>
            <!-- FILTER -->

            <div class="gallery-cat text-center">
                <ul class="list-inline">
                    <li class="active"><a href="#" data-filter="*">All</a></li>
                    <?php
                    if (!empty($galleriescat)) {
                    ?>
                        <?php
                        foreach ($galleriescat as $gallerycat) {
                        ?>
                            <li><a href="#" data-filter=".<?php echo $gallerycat->id;   ?>"><?php echo $gallerycat->catname;   ?></a></li>
                        <?php
                        }
                        ?>
                    <?php
                    }
                    ?>

                </ul>
            </div>
            <!-- END / FILTER -->

            <!-- GALLERY CONTENT -->
            <div class="gallery-content">
                <div class="row">
                    <div class="gallery-isotope col-4">
                        <div class="item-size"></div>

                        <?php
                        if (!empty($homegalleries)) {
                        ?>
                            <?php
                            foreach ($homegalleries as $gallery) {
                            ?>

                                <div class="item-isotope larger <?php echo $gallery->catid;  ?>">
                                    <div class="gallery_item">
                                        <a href="<?php echo base_url(); ?>assets/devrath/images/gallery/<?php echo $gallery->file_path; ?>" class="mfp-image">
                                            <img src="<?php echo base_url(); ?>assets/devrath/images/gallery/<?php echo $gallery->file_path; ?>" alt="">
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




<!-- CONTACT -->
<!-- <section class="section-contact">
    <div class="container">
        <div class="contact">
            <div class="row">

                <div class="col-md-2 col-lg-2">

                </div>

                <div class="col-md-8 col-lg-8">
                    <h2>Plan an Event</h2>
                    <div class="contact-form">
                       
                        <form id="send-event-form" method="POST">

                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="text" name="form_name" class="field-text" value="" placeholder="Your Name" required>
                                </div>
                             
                                <div class="col-sm-12">
                                    <input type="text" name="form_phone" class="field-text" value="" placeholder="Phone" required>
                                </div>
                                <div class="col-sm-12">
                                    <input type="text" name="form_date" class="field-text" value="<?php echo (!empty($_GET['form_date'])) ? $_GET['form_date'] : ""; ?>" placeholder="Event Date" required>
                                </div>
                                <div class="col-sm-12">
                                    <textarea name="form_message" class="field-textarea" placeholder="Description.." required><?php echo (!empty($_GET['form_message'])) ? $_GET['form_message'] : ""; ?></textarea>

                                </div>
                                <div class="col-sm-6">

                                    <div class="button-box">
                                     
                                        <button class="awe-btn awe-btn-13" id="submit-form" data-text="Submit Here" type="submit" data-loading-text="Please wait...">Submit Here</button>
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
</section> -->
<!-- END / CONTACT -->







<!-- HOME GUEST BOOK -->
<section class="section-home-guestbook home-guestbook-style-2 awe-parallax bg-22 mt90 pt100 pb100">
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

</section>











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
                        <form id="send-contact-form" method="POST">

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
                                <div class="col-sm-12">
                                    <input type="text" name="form_subject" class="field-text" value="<?php echo (!empty($_GET['form_subject'])) ? $_GET['form_subject'] : ""; ?>" placeholder="Subject" required>
                                </div>
                                <div class="col-sm-12">
                                    <textarea name="form_message" class="field-textarea" placeholder="Your Message.." required><?php echo (!empty($_GET['form_message'])) ? $_GET['form_message'] : ""; ?></textarea>

                                </div>
                                <div class="col-sm-6">

                                    <div class="button-box">
                                        <!-- <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value=""> -->
                                        <button class="awe-btn awe-btn-13" id="submit-form" data-text="Submit Here" type="submit" data-loading-text="Please wait...">Submit Here</button>
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