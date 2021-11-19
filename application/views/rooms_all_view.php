<!-- <?php
// var_dump($room4home); exit;
?> -->
        <!-- SUB BANNER -->
        <section class="section-sub-banner bg-9">
            <div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>ROOMS &amp; RATES</h2>
                        <p>Lorem Ipsum is simply dummy text</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / SUB BANNER -->

        <!-- ROOM -->
        <section class="section-room bg-white">
            <div class="container">

                <div class="room-wrap-3">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">

                            <!-- ITEM -->

                            <?php
                                if (!empty($room4home)) {
                            ?>
                                <?php
                                    foreach ($room4home as $room) {
                                    ?>


                            <div class="room_item-3">

                                <div class="img">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>assets/devrath/images/rooms/<?php echo $room->file_path; ?>" alt="">
                                    </a>
                                </div>

                                <div class="text-thumbs">

                                    <div class="thumbs">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/devrath/images/rooms/<?php echo $room->room_home; ?>" alt=""></a>
                                    </div>

                                    <div class="text">
                                        <h2><a href="<?php echo base_url(); ?><?php echo $room->seourl; ?>"><?php echo $room->title; ?></a></h2>
                                       
                                        <p><?php echo $room->short; ?></p>
                                        <a href="<?php echo base_url(); ?><?php echo $room->seourl; ?>" class="awe-btn awe-btn-13">VIEW DETAILS</a>
                                    </div>

                                </div>

                            </div>    
                            <?php } ?>
                            <?php } ?>
                            <!-- END / ITEM -->

                            

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END / ROOM -->