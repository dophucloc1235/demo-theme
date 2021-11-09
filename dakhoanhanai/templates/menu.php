<div class="sidenav-content hidden-md">
  <div id="mySidenav" class="sidenav">
    <div id="web-name">
      <?php if(lighthouse()):?>
       <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri()?>/assets/images/logo.png" alt="logo" style="width: 247px">
      </a>
    <?php endif;?>
  </div><!-- end web-name -->
  <div class="menu-mb-close" href="javascript:void(0)"  onclick="closeNav()"> <span>x</span>
  </div>
  <div id="main-menu">
    <?php
    $menu = wp_nav_menu(
      array(
        'menu' => 'Top Menu',
        'container' => '',
        'menu_class' => 'menu-up list-group',
        'menu_id' => 'menu-danh-muc-benh',
        'echo' => false,
        'after' => '<span class="cavera"></span>',
      )
    );
    echo $menu;
    ?>
  </div><!-- end main-menu -->


  <div class="menu-call mt-3">
   <div class="menu-call_phone">
    <a href="tel:<?php echo SDT;?>">
      <img src="<?php echo get_template_directory_uri();?>/assets/images/icon_phone_menu.png" alt="phone icon">
      <?php echo SDT;?>
    </a>
  </div>
  <div class="menu-call__dathen">
    <?php if(lighthouse()):?>
      <a href="<?php echo LIVE_CHAT;?>" rel="noopener" target="_blank" class="tu-van-ads">
       Đặt hẹn ngay
     </a>
   <?php endif;?>
 </div>
</div>
<div class="clearfix"></div>
<div class="mapt">
  <?php if(lighthouse()):?>
    <a href="<?php echo GGMAP_LINK;?>">
     <img src="<?php echo get_template_directory_uri();?>/assets/images/map.jpg" alt="maps">
   </a>
 <?php endif;?>
</div>
</div><!-- end mySidenav -->
</div><!-- end sidenav-content -->

<!--  -->
<?php if(wp_is_mobile()): ?>
  <div class="header_form d_contact" style="display:none;">
    <span class='click_danhmuc'  onclick="openNav()">
      <i class="fa fa-bars" aria-hidden="true"></i>
    </span>
    <input type="text" class="form-control d-phone" placeholder="Nhập số điện thoại cần tư vấn">
    <a class="btn d-send">Gửi</a>
    <div class="header_phone">
      <a href="tel:<?php echo PHONE; ?>"><i class="fa fa-phone vibrate-1" aria-hidden="true"></i>
      </a>
    </div>
  </div>
  <?php endif;?>