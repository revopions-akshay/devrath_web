<!-- SUB BANNER -->
<section class="section-sub-banner bg-9">
    <div class="sub-banner">
        <div class="container">
            <div class="text text-center">
                <h2>Send Your Message</h2>
            </div>
        </div>
    </div>
</section>
    <!-- PAGE WRAP -->
    <div id="page-wrap">
        
        <section class="section-comingsoon bg-6">
            <div class="awe-overlay"></div>
            <div class="comingsoon text-center">
                <a href=""><img src="<?php echo $logo;  ?>" alt=""></a>
                <h1>COMING <span>SOON</span></h1>
                <h6>This page is in under construction.</h6>
                <p>The page will be open.</p>

                <div class="countdown">
                    <div id="countdown"></div>
                </div>

                <div class="widget widget_social">
                    <h4 class="widget-title">Follow Us</h4>
                    <div class="widget-social">
                    <?php
                    if (!empty($sociallinks)) {
                ?>
                        <div class="social-icon">
                            <?php
                            foreach ($sociallinks as $sociallink) {
                            ?>
                             <a target="_blank" href="<?php echo $sociallink->link; ?>"><i class="<?php echo $sociallink->fa_icon; ?>"></i></a>
                                <!-- <a class="mr20" target="_blank" href="<?php echo $sociallink->link; ?>"><i class="<?php echo $sociallink->fa_icon; ?> f20"></i></a> -->
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

        </section>

    </div>