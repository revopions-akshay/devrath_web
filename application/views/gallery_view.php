



        <!-- SUB BANNER -->
        <section class="section-sub-banner bg-9">
            <div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>Gallery 3</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / SUB BANNER -->
        
        <!-- GALLERY -->
        <section class="section_page-gallery">
            <div class="container">
                <div class="gallery gallery-3">
                    <h1 class="element-invisible">Gallery</h1>
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





                            <!-- <li><a href="#" data-filter=".ground">HOTEL &amp; GROUND</a></li>
                            <li><a href="#" data-filter=".suite">ROOM/SUITE </a></li>
                            <li><a href="#" data-filter=".bathroom">BATHROOM</a></li>
                            <li><a href="#" data-filter=".dining">DINING</a></li> -->
                        </ul>
                    </div>
                    <!-- END / FILTER -->

                    <!-- GALLERY CONTENT -->
                    <div class="gallery-content">
                        <div class="row">
                            <div class="gallery-isotope col-4">

                                <!-- ITEM SIZE -->
                                <div class="item-size"></div>
                                <!-- END / ITEM SIZE -->

                                <?php
                                    if (!empty($galleries)) {
                                ?>

                                    <?php
                                        foreach ($galleries as $gallery) {
                                    ?>

                                        <div class="item-isotope larger <?php echo $gallery->catid; ?>">
                                            <div class="gallery_item">
                                                <a href="<?php echo base_url(); ?>assets/devrath/images/gallery/<?php echo $gallery->file_path; ?>" class="mfp-image">
                                                    <img src="<?php echo base_url(); ?>assets/devrath/images/gallery/<?php echo $gallery->file_path; ?>" alt="">
                                                </a>
                                                <h6 class="text"><?php echo $gallery->title; ?></h6>
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
                    <!-- GALLERY CONTENT -->

                </div>
            </div>       
        </section>
        <!-- END / GALLERY -->


