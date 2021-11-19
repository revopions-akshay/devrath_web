<!-- HEADER -->
<header id="header" class="header-v3 clearfix">

    <!-- HEADER TOP -->
    <div class="header_top">
        <div class="container">
            <div class="header_left float-left">
                <!-- <span><i class="lotus-icon-cloud"></i> 18 °C</span> -->
                <span><i class="lotus-icon-location"></i><?php echo $settings['address']; ?></span>
                <span><i class="lotus-icon-phone"></i><?php echo $settings['phone']; ?></span>
            </div>

            <div class="header_right float-right">
                <span class="socials">
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
                
                  
                </span>
                <!-- <span class="login-register">
                    <a href="login.html">Login </a>
                    <a href="register.html"> Register</a>
                </span> 
                <div class="dropdown currency">
                    <span>USD <i class="fa fa"></i></span>
                    <ul>
                        <li class="active"><a href="#">USD</a></li>
                        <li><a href="#">EUR</a></li>
                    </ul>
                </div>
                <div class="dropdown language">
                    <span>ENG</span>

                    <ul>
                        <li class="active"><a href="#">ENG</a></li>
                        <li><a href="#">FR</a></li>
                    </ul>
                </div> -->
            </div>
            <!-- HEADER LOGO -->
            <a class="logo-top img-responsive" href="#"><img src="<?php echo base_url(); ?>/assets/devrath/images/logo-header.png" alt=""></a>
            <!-- END / HEADER LOGO -->

        </div>
    </div>
    <!-- END / HEADER TOP -->

    <!-- HEADER LOGO & MENU -->
    <div class="header_content" id="header_content">

        <div class="container">

            <!-- HEADER LOGO -->
            <div class="header_logo">
                <a href="#"><img src="<?php echo base_url(); ?>/assets/devrath/images/logo-header.png" alt=""></a>
            </div>
            <!-- END / HEADER LOGO -->
            <!-- HEADER MENU -->
            <nav class="header_menu">

                <ul class="menu">



                    <?php
                    if (!empty($navigations)) {
                        foreach ($navigations as $navigation) {
                    ?>
                            <li class="current-menu-item">
                                <a href="<?php echo $navigation['link']; ?>"><?php echo $navigation['menu']; ?> <span class="<?php echo ($navigation['level1'] == '') ? '' : 'fa fa-caret-down'; ?>"></span></a>

                                <?php
                                if (!empty($navigation['level1'])) {
                                ?>
                                    <ul class="sub-menu">
                                        <?php
                                        foreach ($navigation['level1'] as $submenu) {
                                        ?>
                                            <li><a href="<?php echo (($submenu['flag'] == 1) ? base_url() . $submenu['link'] : 'javascript:void(0)'); ?>"><?php echo $submenu['submenu']; ?><?php echo $navigation['menu']; ?> <span class="<?php echo ($submenu['level2'] == '') ? '' : 'fa fa-caret-down'; ?>"></span> </a>
                                                <?php
                                                if (!empty($submenu['level2'])) {
                                                ?>
                                                    <ul class="sub-menu">
                                                        <?php
                                                        foreach ($submenu['level2'] as $subsubmenu) {
                                                        ?>
                                                            <li><a href="<?php echo $subsubmenu['link']; ?>"><?php echo $subsubmenu['catname']; ?> </a></li>
                                                        <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                <?php
                                                }
                                                ?>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                <?php
                                }
                                ?>


                            </li>


                    <?php
                        }
                    }
                    ?>




                </ul>







            </nav>
            <!-- END / HEADER MENU -->

            <!-- MENU BAR -->
            <span class="menu-bars">
                <span></span>
            </span>
            <!-- END / MENU BAR -->

        </div>
    </div>
    <!-- END / HEADER LOGO & MENU -->

</header>
<!-- END / HEADER -->