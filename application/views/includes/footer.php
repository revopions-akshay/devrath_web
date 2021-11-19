   <!-- FOOTER -->
   <footer id="footer" class="footer-style-2">
       <!-- FOOTER TOP -->
       <!-- <div class="container">
            <div class="footer_top">
                <div class="row">
                    
                    <div class="content v-align clearfix">
                        <div class="col-xs-12 col-sm-6">
                            <img class="img-responsive img-mail mb20 mr30" src="images/home-3/footer/mail-footer.png"
                                 alt="">
                            <div class="desc clearfix inline-block">
                                <h4 class="font-monserat bold f36 upper">News &amp; Offers</h4>
                                <p class="sub f14">Lorem lipsum dolor sit amet</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="mailchimp">
                                <div class="mailchimp-form">
                                    <form action="#" method="POST">
                                        <input type="text" name="email" placeholder="Enter your email address"
                                               class="input-text">
                                        <button class="awe-btn">SIGN UP</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div> -->
       <!-- END / FOOTER TOP -->

       <!-- FOOTER CENTER -->
       <div class="footer_center bgr-footer">
           <div class="container">
               <div class="content pt10 pb60">
                   <div class="row">
                       <div class="col-xs-6 col-sm-3">
                           <div class="footer-logo clearfix">
                               <div class="widget widget_logo clearfix">
                                   <div class="widget-logo text-center">
                                       <div class="img">
                                           <a href="#"><img class="img-center" src="<?php echo base_url(); ?><?php echo ($footer_logo != "" ? $footer_logo : 'assets/devrath/images/logo.png'); ?>" alt=""></a>
                                       </div>

                                   </div>
                               </div>
                               <div class="widget widget_tripadvisor clearfix">
                                   <div class="tripadvisor text-center">
                                       <?php
                                        if (!empty($footer_about)) {
                                        ?>
                                           <p><?php echo $footer_about; ?></p>
                                       <?php
                                        }
                                        ?>
                                       <img class="img-center" src="images/home-3/footer/logo-trivision.png" alt="">
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-xs-6 col-sm-3">
                           <div class="widget">
                               <h4 class="widget-title f20 bold">Information</h4>
                               <div class="text">
                                   <p><i class="lotus-icon-location mr10"></i><?php echo $settings['address']; ?></p>
                                   <p><i class="lotus-icon-phone mr10"></i><?php echo $settings['phone']; ?></p>
                                   <p><i class="fa fa-envelope-o mr10"></i> <a href="mailto:<?php echo $settings['email']; ?>"><?php echo $settings['email']; ?></a>
                                   </p>
                               </div>
                           </div>
                           <div class="widget">
                               <h4 class="widget-title f20 bold">Follow Us</h4>
                               <div class="text">

                                   <?php
                                    if (!empty($sociallinks)) {
                                    ?>
                                       <div class="social-icon">
                                           <?php
                                            foreach ($sociallinks as $sociallink) {
                                            ?>
                                               <!-- <a target="_blank" href="<?php echo $sociallink->link; ?>"><i class="<?php echo $sociallink->fa_icon; ?>"></i></a> -->
                                               <a class="mr20" target="_blank" href="<?php echo $sociallink->link; ?>"><i class="<?php echo $sociallink->fa_icon; ?> f20"></i></a>
                                           <?php
                                            }
                                            ?>
                                       </div>
                                   <?php
                                    }
                                    ?>



                               </div>
                           </div>
                       </div>
                       <div class="col-xs-6 col-sm-3">
                           <div class="widget">
                               <h4 class="widget-title f20 bold">Locate Us</h4>
                               <!-- <ul>
                                    <li><a href="#">Accommodation</a></li>
                                    <li><a href="#">Guest Book</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Event</a></li>
                                    <li><a href="#">Offer</a></li>
                                </ul> -->
                               <div class="map">

                                   <?php echo $footer_map;  ?>
                               </div>


                           </div>
                       </div>
                       <div class="col-xs-6 col-sm-3">
                           <div class="widget">
                               <h4 class="widget-title f20 bold">Quick Links</h4>
                               <ul>
                                   <!-- <li><a href="">About</a></li>
                                    <li><a href="">Blog</a></li>
                                    <li><a href="">Contact Us</a></li>
                                    <li><a href="">Comming Soon</a></li>
                                    <li><a href="">Inquires</a></li> -->

                                   <?php
                                    if (!empty($quick_links)) {
                                    ?>
                                       <?php
                                        foreach ($quick_links as $menu) {
                                        ?>

                                           <li><a href="<?php echo $menu->link;  ?>"><?php echo $menu->catname;  ?></a></li>



                                   <?php  }
                                    }

                                    ?>

                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="copyright">
               <div class="container">
                   <p class="left inline-block f14"> <?php echo $footer_copyright; ?></p>
                   <div class="payment pull-right inline-block">
                       <img src="images/home-3/footer/card.png" alt="" class="img-responsive">
                   </div>
               </div>
           </div>
       </div>
       <!-- END / FOOTER CENTER -->


   </footer>
   <!-- END / FOOTER -->
   </div>

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <?php
    if (!empty($scripts)) {
        foreach ($scripts as $script) {
            echo $script;
        }
    }
    ?>

   </body>

   </html>