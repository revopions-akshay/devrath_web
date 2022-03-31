


 <!-- SUB BANNER -->
 <section class="section-sub-banner">
        <div class="sub-banner">
            <div class="container">
                <div class="text text-center">
                    <h2 style="color:#000000;">Contact With Us</h2>
                    
                </div>
            </div>

        </div>

    </section>
    <!-- END / SUB BANNER -->

    <!-- CONTACT -->
    <section class="section-contact">
        <div class="container">
            <div class="contact">
                <div class="row">

                    <div class="col-md-6 col-lg-5">

                        <div class="text">
                            <h2>Contact</h2>
                            <p><?php echo $contactabout[0]->content; ?></p>
                            <ul>
                                <li><i class="icon lotus-icon-location"></i> <?php echo $settings['address']; ?></li>
                                <li><i class="icon lotus-icon-phone"></i><a href="tel:<?php echo $settings['phone']; ?>"> <?php echo $settings['phone']; ?></a></li>
                                <li><i class="icon lotus-icon-phone"></i><a href="+917409102000">+917409102000</a></li>
                                <li><i class="icon lotus-icon-phone"></i><a href="+919837777693">+919837777693</a</li>
                                <li><i class="icon lotus-icon-phone"></i><a href="+919870674557">+919870674557</a</li>
                                <li><i class="icon fa fa-envelope-o"></i> <a href="mailto:<?php echo $settings['email']; ?>"><?php echo $settings['email']; ?></a></li>
                            </ul>
                        </div>

                     

                    </div>

                    <div class="col-md-6 col-lg-6 col-lg-offset-1">
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

                </div>
            </div>
        </div>
    </section>
    <!-- END / CONTACT -->

    <!-- MAP -->
    <section class="section-map">
        <h1 class="element-invisible">Map</h1>
        <div class="contact-map">
            <!-- <div id="map">
            <iframe width="1920" height="480" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224345.83923192866!2d77.06889754725779!3d28.52758200617606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1609008483286!5m2!1sen!2sin" allowfullscreen=""></iframe>
                </div> -->

                <?php echo  $contactabout[0]->map;  ?>
        </div>
    </section>
    <!-- END / MAP -->






