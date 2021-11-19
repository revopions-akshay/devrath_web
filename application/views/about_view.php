<!-- SUB BANNER -->
<section class="section-sub-banner bg-9">
    <div class="awe-overlay"></div>
    <div class="sub-banner">
        <div class="container">
            <div class="text text-center">
                <h2>ABOUT lotus</h2>
                <p>Lorem Ipsum is simply dummy text of the printing</p>
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
<section class="section-statistics bg-10">

    <div class="awe-overlay"></div>

    <div class="container">
        <div class="statistics">

            <h2 class="heading white text-center">Hotel statistics</h2>

            <div class="statistics_content">
                <div class="row">

                    <!-- ITEM -->
                    <div class="col-xs-6 col-md-3">
                        <div class="statistics_item">
                            <span class="count"><?php echo $counters[0]->value; ?></span>
                            <span><?php echo $counters[0]->title; ?></span>
                        </div>
                    </div>
                    <!-- END ITEM -->

                    <!-- ITEM -->
                    <div class="col-xs-6 col-md-3">
                        <div class="statistics_item">
                            <span class="count"><?php echo $counters[1]->value; ?></span>
                            <span><?php echo $counters[1]->title; ?></span>
                        </div>
                    </div>
                    <!-- END ITEM -->

                    <!-- ITEM -->
                    <div class="col-xs-6 col-md-3">
                        <div class="statistics_item">
                            <span class="count"><?php echo $counters[2]->value; ?></span>
                            <span><?php echo $counters[2]->title; ?></span>
                        </div>
                    </div>
                    <!-- END ITEM -->

                    <!-- ITEM -->
                    <div class="col-xs-6 col-md-3">
                        <div class="statistics_item">
                            <span class="count"><?php echo $counters[3]->value; ?></span>
                            <span><?php echo $counters[3]->title; ?></span>
                        </div>
                    </div>
                    <!-- END ITEM -->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- END / HOTEL STATISTICS -->

<!-- TEAM -->
<section class="section-team">
    <div class="container">

        <div class="team">
            <h2 class="heading text-center">Team Member</h2>
            <p class="sub-heading text-center">Lorem Ipsum is simply dummy text of the printing</p>

            <div class="team_content">
                <div class="row">

                    <!-- ITEM -->

                  
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
                    <!-- END / ITEM -->

                    <!-- ITEM -->
                    <!-- <div class="col-xs-6 col-md-3">
                        <div class="team_item text-center">

                            <div class="img">
                                <a href=""><img src="<?php echo base_url(); ?>/assets/devrath/images/team/img-1.jpg" alt=""></a>
                            </div>

                            <div class="text">
                                <h2>Robet WILIAM</h2>
                                <span>Founder Hotel</span>
                                <p>Mea omnium explicari te, eu sit vidit harum fabellas, his no legere feugaitper in laudem malorum epicuri, quod natum evertitur ne per.</p>
                                <div class="team-share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>

                        </div>
                    </div> -->
                    <!-- END / ITEM -->

                    <!-- ITEM -->
                    <!-- <div class="col-xs-6 col-md-3">
                        <div class="team_item text-center">

                            <div class="img">
                                <a href=""><img src="<?php echo base_url(); ?>/assets/devrath/images/team/img-1.jpg" alt=""></a>
                            </div>

                            <div class="text">
                                <h2>Adam</h2>
                                <span>Lorem lipsum</span>
                                <p>Mea omnium explicari te, eu sit vidit harum fabellas, his no legere feugaitper in laudem malorum epicuri, quod natum evertitur ne per.</p>
                                <div class="team-share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>

                        </div>
                    </div> -->
                    <!-- END / ITEM -->

                    <!-- ITEM -->
                    <!-- <div class="col-xs-6 col-md-3">
                        <div class="team_item text-center">

                            <div class="img">
                                <a href=""><img src="<?php echo base_url(); ?>/assets/devrath/images/team/img-1.jpg" alt=""></a>
                            </div>

                            <div class="text">
                                <h2>David Gari</h2>
                                <span>Lorem lipsum</span>
                                <p>Mea omnium explicari te, eu sit vidit harum fabellas, his no legere feugaitper in laudem malorum epicuri, quod natum evertitur ne per.</p>
                                <div class="team-share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>

                        </div>
                    </div> -->
                    <!-- END / ITEM -->

                </div>
            </div>
        </div>

    </div>
</section>
<!-- END / TEAM -->