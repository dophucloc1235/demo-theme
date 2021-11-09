<section class="footer">
    <!-- <div class="footer-banquyen">
        <p> Bản quyền nội dung 2021 thuộc về <b>Phòng khám Đa Khoa Nhân Ái</b> </p>
    </div> -->
</section>


<?php wp_footer(); ?>
<?php 
    get_template_part('templates/menu');
    // get_template_part('templates/popup');
?>
<script>
    var domain_site_uri = '<?php echo get_template_directory_uri()?>';
    </script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js" ></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/custom.js" ></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/scroll.js" ></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/ajaxphone.js" ></script>

<!-- <script type="text/javascript" src="<?php echo LIVE_CHAT_URL;?>" ></script>  -->

</body>
</html>