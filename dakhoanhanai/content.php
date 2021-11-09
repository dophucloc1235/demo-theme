<div class="wz-content">
    <div class="wz-box">
        <div class="wz-title">
            <h1><?php the_title() ?></h1>
            <?php if (is_single()): ?>
                <p class="metapost text-secondary">Ngày đăng : <?php echo get_the_date('d-m-Y') ?> | Lượt xem : <?php echo getPostViews(get_the_ID()) ?></p>
            <?php endif ?>
            <!-- </div> -->
            <div class="single-content wz-txt">
                <?php the_content() ?>
            </div>
            <?php //get_template_part('templates/afterpost'); ?>
            <div class="text-center mt-10">
                <a href="<?php echo LIVE_CHAT;?>" rel="noopener noreferrer" class="tu-van-ads" title="Chat trực tuyến" target="_blank">
                    <?php if(lighthouse()):?>
                        <!-- <img src="<?php echo get_template_directory_uri()?>/assets/images/tuvan-post-end.gif" alt="banner tư vấn" class="border-1px"> -->
                    <?php endif;?>
                </a>
            </div>
            <p style="color:white">(*)Lưu ý: Hiệu quả điều trị tùy thuộc vào cơ địa của mỗi người.</p>

        </div>
    </div>
</div>
