<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đa Khoa Quốc Tế Nhân Ái - Địa Chỉ Khám Chữa Bệnh Uy Tín</title>
    <link href="<?php echo get_template_directory_uri()?>/assets/images/favicon.png" rel="shortcut icon" type="image/x-icon" />

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" >
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" type="text/css" />
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <!-- Google Tag Manager -->
    <!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NQ9VGS8');</script> -->
<!-- End Google Tag Manager -->
</head>
<body <?php body_class(); ?> id="main">
    <!-- Google Tag Manager (noscript) -->
    <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NQ9VGS8"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
        <!-- End Google Tag Manager (noscript) -->
        <div class="header mb">
            <div class="header_nav" >
            <div class="container">
                <div class="row m-0">
               
                    <div class="header_navCol col-lg-4 col-md-12 col-8">
                        <a href="<?php echo home_url();?>">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" class="logoTop" alt="logo - Đa Khoa Nhân Ái">
                        </a>
                    </div>
                    
                    <div class="col-lg-8 col-md-12 col-4">
                        <div class="top-menu-nav hidden-mb">
                            <ul class="top-menu-cus">
                                <li> <a href="<?php echo home_url();?>">trang chủ</a> </li>
                                <li class="top-menu_danhmuc">danh mục
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
                                </li>
                                <li><a href="<?php echo LIVE_CHAT;?>" rel="noopener noreferrer" target="_blank">tư vấn</a> </li>
                                <li><a href="<?php echo LIVE_CHAT;?>" rel="noopener noreferrer" target="_blank">đặt lịch khám</a> </li>
                                <li><a href="<?php echo LIVE_CHAT;?>" rel="noopener noreferrer" target="_blank">liên hệ</a> </li>
                            </ul>
                        </div>
                        <div class="top-menu-mb show-mb">
                            <span class="call menu_cus click_menu" id="sidenav-open" onclick="openNav()">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                   
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="header-banner">
            <picture>
                <source srcset="<?php echo get_template_directory_uri()?>/assets/images/banner.jpg" media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 2), (min-width: 768px) and (min-resolution: 192dpi)"> 
                <source srcset="<?php echo get_template_directory_uri()?>/assets/images/banner.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/bannermb.jpg" alt="banner Phòng khám tại Bắc Ninh"> 
            <picture>
        </div>