<!-- SUB BANNER -->
<section class="section-sub-banner bg9" style="background-image: url(<?php echo base_url(); ?>/assets/devrath/images/about/<?php echo $about[0]->page_breadcrumb; ?>);">
    <div class="awe-overlay"></div>
    <div class="sub-banner">
        <div class="container">
            <div class="text text-center">
                <h2>About Us</h2>
         
            </div>
        </div>
    </div>
</section>
<!-- END / SUB BANNER -->
<!-- ABOUT -->
<section class="section-about">
    <div class="container">
        <div class="about">
            <!-- ITEM -->
            <div class="about-item">

                <div class="img owl-single">
                    <img src="<?php echo base_url(); ?>/assets/devrath/images/about/<?php echo $about[0]->file_path; ?>" alt="">
                    <!-- <img src="<?php echo base_url(); ?>/assets/devrath/images/about/img-2.jpg" alt=""> -->
                </div>

                <div class="text">
                    <h2 class="heading"><?php echo $about[0]->title_one; ?></h2>
                    <div class="desc">
                        <p><?php echo $about[0]->content_one; ?></p><br>
                        <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p> -->
                    </div>
                </div>

            </div>
            <!-- END / ITEM -->

            <!-- ITEM -->
            <div class="about-item about-right">

                <div class="img">
                    <img src="<?php echo base_url(); ?>/assets/devrath/images/about/<?php echo $about[0]->file_path_two; ?>" alt="">
                </div>

                <div class="text">
                    <h2 class="heading"><?php echo $about[0]->title_two; ?></h2>
                    <div class="desc">
                        <p><?php echo $about[0]->content_two; ?></p>
                    </div>
                </div>

            </div>
            <!-- END / ITEM -->

        </div>

    </div>
</section>
<!-- END / ABOUT -->

<!-- HOTEL STATISTICS -->
<!-- <section class="section-statistics bg-10">

    <div class="awe-overlay"></div>

    <div class="container">
        <div class="statistics">

            <h2 class="heading white text-center">Hotel statistics</h2>

            <div class="statistics_content">
                <div class="row">

                  
                    <div class="col-xs-6 col-md-3">
                        <div class="statistics_item">
                            <span class="count"><?php echo $counters[0]->value; ?></span>
                            <span><?php echo $counters[0]->title; ?></span>
                        </div>
                    </div>
                 

                    <div class="col-xs-6 col-md-3">
                        <div class="statistics_item">
                            <span class="count"><?php echo $counters[1]->value; ?></span>
                            <span><?php echo $counters[1]->title; ?></span>
                        </div>
                    </div>
                   


                    <div class="col-xs-6 col-md-3">
                        <div class="statistics_item">
                            <span class="count"><?php echo $counters[2]->value; ?></span>
                            <span><?php echo $counters[2]->title; ?></span>
                        </div>
                    </div>
                  

                    <div class="col-xs-6 col-md-3">
                        <div class="statistics_item">
                            <span class="count"><?php echo $counters[3]->value; ?></span>
                            <span><?php echo $counters[3]->title; ?></span>
                        </div>
                    </div>
               

                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- END / HOTEL STATISTICS -->

<!-- TEAM -->
<!-- <section class="section-team">
    <div class="container">

        <div class="team">
            <h2 class="heading text-center">Team Member</h2>
            
            <div class="team_content">
                <div class="row">

                    

                  
                <?php
                    if (!empty($teamMember)) {
                ?>
                <?php
                    foreach ($teamMember as $team) {
                    ?>
                    <div class="col-xs-6 col-md-3">
                        <div class="team_item text-center">

                            <div class="img">
                                <a href=""><img src="<?php echo base_url(); ?>/assets/devrath/images/team/<?php echo $team->file_path; ?>" alt=""></a>
                            </div>

                            <div class="text">
                                <h2><?php echo $team->name; ?></h2>
                                <span><?php echo $team->designation; ?></span>
                                <p><?php echo $team->description; ?></p>
                                <div class="team-share">
                                    <a href="<?php echo $team->facebook; ?>"><i class="fa fa-facebook"></i></a>
                                    <a href="<?php echo $team->twitter; ?>"><i class="fa fa-twitter"></i></a>
                                    <a href="<?php echo $team->instagram; ?>"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>


                    <?php }
                    }
                    ?>
                   
                </div>
            </div>
        </div>

    </div>
</section> -->
<!-- END / TEAM -->



   
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

