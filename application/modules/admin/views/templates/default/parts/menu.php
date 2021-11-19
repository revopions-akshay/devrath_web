<section class="sidebar fixed ">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu tree">
        <!--        <li class="header">MAIN NAVIGATION</li>-->
        <li class="treeview">
            <a href="<?php echo site_url('admin/dashboard'); ?>">
                <i class="fa fa-home"></i> <span>Dashboard</span>
            </a>
        </li>
        <?php if ($this->ion_auth->is_admin()) : ?>
            <!-- <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>User Management</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview">
                        <a href="<?php echo site_url('admin/user/'); ?>">
                            <i class="fa fa-edit"></i> <span>Manage Users</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="<?php echo site_url('admin/user_groups/'); ?>">
                            <i class="fa fa-edit"></i> <span>Manage Groups</span>
                        </a>
                    </li>
                </ul>
            </li> -->
            <!-- 
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                 Navigation
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="<?php echo site_url('admin/navigation'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/categories'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sub-menu</p>
                </a>
              </li>
          
            </ul>
          </li> -->

       






            <li class="treeview menu-open">

                <a href="<?php echo site_url('admin/navigation'); ?>">
                    <i class="fa fa-list-alt"></i> <span>Navigation</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>

                <ul class="treeview-menu" style="">
                    <li><a href="<?php echo site_url('admin/navigation'); ?>"><i class="fa fa-list-alt"></i>Menu</a></li>
                    <li><a href="<?php echo site_url('admin/categories'); ?>"><i class="fa fa-list-alt"></i> Sub-Menu</a></li>
                    <li><a href="<?php echo site_url('admin/sub_categories'); ?>"><i class="fa fa-list-alt"></i>Sub Sub-Menu</a></li>

                </ul>
            </li>

            <!-- <li class="treeview">
                <a href="<?php echo site_url('admin/categories'); ?>">
                    <i class="fa fa-mars"></i> <span>Categories</span>
                </a>
            </li>


            <li class="treeview">
                <a href="<?php echo site_url('admin/sub_categories'); ?>">
                    <i class="fa fa-mars-double"></i> <span>Sub-Categories</span>
                </a>
            </li> -->

            <li class="treeview">
                <a href="<?php echo site_url('admin/blogs_pages'); ?>">
                    <i class="fa fa-book"></i> <span>Blogs/Pages</span>
                </a>
            </li>

            <li class="treeview">
                <a href="<?php echo site_url('admin/about_section'); ?>">
                    <i class="fa fa-book"></i> <span>About Us</span>
                </a>
            </li>



            <li class="treeview">
                <a href="<?php echo site_url('admin/rooms'); ?>">
                    <i class="fa fa-book"></i> <span>Rooms</span>
                </a>
            </li>


            <li class="treeview menu-open">

                <a href="<?php echo site_url('admin/banquet'); ?>">
                    <i class="fa fa-list-alt"></i> <span>Banquet</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>

                <ul class="treeview-menu" style="">
                    <li><a href="<?php echo site_url('admin/banquet'); ?>"><i class="fa fa-list-alt"></i>Banquet</a></li>
                    <!-- <li><a href="<?php echo site_url('admin/categories'); ?>"><i class="fa fa-list-alt"></i> Sub-Menu</a></li>
                    <li><a href="<?php echo site_url('admin/sub_categories'); ?>"><i class="fa fa-list-alt"></i>Sub Sub-Menu</a></li> -->

                </ul>
            </li>



            <li class="treeview">
                <a href="<?php echo site_url('admin/sliders'); ?>">
                    <i class="fa fa-bookmark-o"></i> <span>Sliders</span>
                </a>
            </li>




            <li class="treeview">
                <a href="<?php echo site_url('admin/facilities'); ?>">
                    <i class="fa fa-bookmark-o"></i> <span>Facilities</span>
                </a>
            </li>


            <li class="treeview menu-open">

                <a href="<?php echo site_url('admin/gallery'); ?>">
                    <i class="fa fa-list-alt"></i> <span>Gallery</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>

                <ul class="treeview-menu" style="">
                    <li><a href="<?php echo site_url('admin/gallerycategory'); ?>"><i class="fa fa-photo"></i>Gallery Category</a></li>
                    <li><a href="<?php echo site_url('admin/gallery'); ?>"><i class="fa fa-photo"></i> Gallery</a></li>

                </ul>
            </li>

            <!-- <li class="treeview">
                <a href="<?php echo site_url('admin/gallery'); ?>">
                    <i class="fa fa-photo"></i> <span>Gallery</span>
                </a>
            </li> -->

            <li class="treeview">
                <a href="<?php echo site_url('admin/partners'); ?>">
                    <i class="fa fa-image"></i> <span>Partners</span>
                </a>
            </li>

            <li class="treeview">
                <a href="<?php echo site_url('admin/socialmedia'); ?>">
                    <i class="fa fa-globe"></i> <span>Social Media</span>
                </a>
            </li>



            <li class="treeview menu-open">

                <a href="#">
                    <i class="fa fa-user"></i> <span>Testimonials</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>

                <ul class="treeview-menu" style="">
                    <li><a href="<?php echo site_url('admin/testimonial'); ?>"><i class="fa fa-user"></i>Testimonials</a></li>
                    <li><a href="<?php echo site_url('admin/testi_image'); ?>"><i class="fa fa-picture-o"></i>Testimonials Background</a></li>


                </ul>
            </li>





            <li class="treeview">
                <a href="<?php echo site_url('admin/team'); ?>">
                    <i class="fa fa-user"></i> <span>Team</span>
                </a>
            </li>

            <li class="treeview menu-open">

                <a href="#">
                    <i class="fa fa-clock-o"></i> <span>Counters</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>

                <ul class="treeview-menu" style="">
                    <li><a href="<?php echo site_url('admin/counters'); ?>"><i class="fa fa-user"></i>Counters</a></li>
                    <li><a href="<?php echo site_url('admin/countersbackground'); ?>"><i class="fa fa-picture-o"></i>Counters Background</a></li>


                </ul>
            </li>



            <!-- <li class="treeview">
                <a href="<?php echo site_url('admin/counters'); ?>">
                    <i class="fa fa-clock-o"></i> <span>Counters</span>
                </a>
            </li> -->
<!-- 
            <li class="treeview">
                <a href="<?php echo site_url('admin/contactus'); ?>">
                    <i class="fa fa-envelope-o"></i> <span>Contact Us</span>
                </a>
            </li> -->

            <li class="treeview menu-open">

                <a href="<?php echo site_url('admin/contactus'); ?>">
                    <i class="fa fa-list-alt"></i> <span>Contact Us</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>

                <ul class="treeview-menu" style="">
                    <li><a href="<?php echo site_url('admin/contactus'); ?>"><i class="fa fa-list-alt"></i>Form Entries</a></li>
                    <li><a href="<?php echo site_url('admin/contact_about'); ?>"><i class="fa fa-list-alt"></i>About Section</a></li>
                   
                </ul>
            </li>



            <li class="treeview menu-open">

                <a href="<?php echo site_url('admin/footerbackground'); ?>">
                    <i class="fa fa-list-alt"></i> <span>Footer</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>

                <ul class="treeview-menu" style="">
                    <li><a href="<?php echo site_url('admin/footerbackground'); ?>"><i class="fa fa-list-alt"></i>Footer Background</a></li>
                    <li><a href="<?php echo site_url('admin/footer_menuone'); ?>"><i class="fa fa-list-alt"></i>Footer Quick Links</a></li>
                    <li><a href="<?php echo site_url('admin/footer_map'); ?>"><i class="fa fa-list-alt"></i>Footer Map</a></li>
                    
                </ul>
            </li>



            <li class="treeview">
                <a href="<?php echo site_url('admin/settings'); ?>">
                    <i class="fa fa-cogs"></i> <span>Settings</span>
                </a>
            </li>

        <?php endif; ?>
    </ul>
</section>
<!-- /.sidebar -->
<script type="text/javascript">
    $(document).ready(function() {

        $('.sidebar ul li').each(function() {
            if (window.location.href.indexOf($(this).find('a:first').attr('href')) > -1) {
                $(this).closest('ul').closest('li').attr('class', 'active');
                $(this).addClass('active').siblings().removeClass('active');
            }
        });

    });
</script>