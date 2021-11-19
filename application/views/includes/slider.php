   <!-- BANNER SLIDER -->
   <section class="section-slider slider-style-2 clearfix">
        <h1 class="element-invisible">Slider</h1>
        <div id="slider-revolution">
             <ul>

                  <?php
                    if ($sliders) {
                         foreach ($sliders as $slider) {
                              
                    ?>


                            <li data-transition="fade">
                                 <img src="<?php echo base_url() . '/assets/devrath/images/slider/' . $slider->file_path; ?>" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

                                 <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="100" data-speed="700" data-start="1500" data-easing="easeOutBack">
                                      <img src="<?php echo base_url() . '/assets/devrath/images/slider/' . $slider->logo_file_path; ?>" alt="icons">
                                 </div>

                                 <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="240" data-speed="700" data-start="1500" data-easing="easeOutBack">
                                      <?php
                                        if (!empty($slider->sub_title)) {
                                             $heading = $slider->sub_title;
                                             echo "$heading";
                                        }
                                        ?>
                                 </div>

                                 <div class="tp-caption sfb fadeout slider-caption slider-caption-sub-1" data-x="center" data-y="280" data-speed="700" data-easing="easeOutBack" data-start="2000">
                                      <?php
                                        if (!empty($slider->name)) {
                                             $name = $slider->name;
                                             echo "$name";
                                        }
                                        ?>
                                 </div>

                                 <a href="<?php echo $slider->link; ?>" class="tp-caption sfb fadeout awe-btn awe-btn-12 awe-btn-slider" data-x="center" data-y="380" data-easing="easeOutBack" data-speed="700" data-start="2200">VIEW NOW</a>
                            </li>

                  <?php
                         }
                    }

                    ?>


             </ul>
        </div>

   </section>
   <!-- END / BANNER SLIDER -->