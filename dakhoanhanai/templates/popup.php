<script language="javascript">    
  jQuery(document).ready(function(){     

    jQuery("#popup-mid").hide().delay(6000).fadeIn();
    $('#closepp').click(function () {
      $('#popup-mid').hide().delay(6000).fadeIn();
    });
    jQuery("#chat-bottom-1").hide().delay(25000).fadeIn();
    jQuery("#chat-bottom-2").hide().delay(26000).fadeIn();
  });
</script>
<style>
  #bottom-tuvan-lchat{display:block;height:auto;width:100%;position:fixed;bottom:49px;background:#fdfdfd;z-index:99999}#bottom-tuvan-lchat .bottom_close{position:absolute;right:5px;top:5px;color:red;background:white;border-radius:100%;font-size:24px;height:24px;line-height:24px}#bottom-tuvan-lchat .bottom_close .fas{display:inherit;font-family:'FontAwesome';font-style:normal}#bottom-tuvan-lchat .bottom_img{width:20%;float:left;text-align:center}#bottom-tuvan-lchat .number-chat{position:absolute;bottom:30px;right:10px;background-color:#f00;width:33px;height:33px;border-radius:100%;padding:0 12px;line-height:32px;font-size:16px;color:#fffa2a;border-bottom-left-radius:0}.tit-bottom-tuvan-lchat{font-family:Tahoma;background:#0d90cc;height:40px;font-size:14px;line-height:40px;color:#fff;text-align:left;padding-left:15px;text-transform:uppercase;font-weight:700;font-family:arial!important}#chat-bottom-1,#chat-bottom-2{margin:6px;display:none}.chat-bottom-tuvan-lchat{padding-left:12px;margin-top:7px;text-align:justify;font-size:14px;line-height:22px;color:#000;float:right;min-height:40px;padding:5px;width:80%;border:1px solid #7ebbe4;border-top-color:#b2daf0;border-radius:6px;box-shadow:0 3px 0 #3ea0dd,inset 0 1px 1px #fff;background-image:-moz-linear-gradient(#c6e5fa,#a6d7f7);background-image:-webkit-linear-gradient(#c6e5fa,#a6d7f7);background-image:-o-linear-gradient(#c6e5fa,#a6d7f7);background-image:linear-gradient(#c6e5fa,#a6d7f7);font-family:arial!important;font-family:arial!important}.btn-tuvan{height:50px;clear:both;width:100%;padding:10px 0 15px;border-top:1px solid #c7c7c0;border-bottom:1px solid #979185;background-color:#eaebed;text-align:center;background:#fff;bottom:0;display:block!important;position:fixed}.btn-tuvan span{display:inline-block;width:39%;height:2em;float:left;margin:0 5%;border:1px solid #a6a5a1;border-radius:10px;background-color:#fefefe;box-shadow:0 2px 2px #d1d1d3;font-size:16px;color:#6c6761;line-height:2;text-align:center;text-decoration:none;transition:all .3s linear 0s}.btn-tuvan-left{-webkit-animation:maume 1.5ms infinite;-moz-animation:maume 1.5ms infinite;-o-animation:maume 1.5ms infinite;animation:maume 1.5s infinite}@-webkit-keyframes maume{25%{opacity:0.7}50%{background:red;color:white}75%{opacity:0.7}}@keyframes maume{25%{opacity:0.7}50%{background:red;color:white}75%{opacity:0.7}}.w-clear:after{display:block;content:"";clear:both}
/*.bt-contact {
  z-index: 999999;
  background: #fff;
  display: block;
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  text-align: center;
  margin: 0 auto;
  padding: 5px 0;
  border-top: 1px solid #d0d0d0;
  box-shadow: 0 0 20px #d0d0d0;
}
.bt-contact .block:nth-child(1) {
  width: 24%;
  margin-left: 1%;
  padding: 12px 8px 8px;
  background: #00a141;
  border-radius: 5px;
}
.bt-contact .block:nth-child(1) .bt-animation {
  animation: shake 1s infinite;
  transform: translate3d(0,0,0);
  backface-visibility: hidden;
  perspective: 1000px;
}
.bt-contact .block:nth-child(2), .bt-contact .block:nth-child(3) {
  width: 17.5%;
  margin-left: 1%;
  padding: 6px 15px;
  background: #00acff;
  border-radius: 5px;
}
.bt-contact .block:nth-child(4) {
  width: 36%;
  margin: 0 1%;
  padding: 13px 8px 9px;
  background: #f2292f;
  border-radius: 5px;
}
@keyframes shake{10%,90%{transform:translate3d(-1px,0,0)}20%,80%{transform:translate3d(2px,0,0)}30%,50%,70%{transform:translate3d(-4px,0,0)}40%,60%{transform:translate3d(4px,0,0)}}*/
/*  */
.sticker-hotline-mobile{position:fixed;top:170px;right:10px;width:60px;-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;-webkit-box-shadow:0 0 0 8px rgba(219,33,40,.14);-moz-box-shadow:0 0 0 8px rgba(219,33,40,.14);box-shadow:0 0 0 8px rgba(219,33,40,.14);z-index:99999999;transition:all .5s ease;-webkit-transition:all .5s ease}.sticker-hotline-mobile a{background-color:rgba(219,33,40,0.5);-webkit-box-shadow:0 0 0 4px rgba(219,33,40,.5);-moz-box-shadow:0 0 0 4px rgba(219,33,40,.5);box-shadow:0 0 0 4px rgba(219,33,40,.5);text-align:center;display:block;width:100%;height:60px;-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;position:relative}.sticker-hotline-mobile a .t24h{font-weight:bold;color:#fff;font-size:13px;font-family:cursive;position:absolute;display:block;text-align:center;width:100%;bottom:3px}.sticker-hotline-mobile a i.fa{display:block;font-size:22px;padding-top:8px;padding-right:2px;text-align:center;color:#fff;animation:nki-phone-call 2.5s ease infinite}@keyframes nki-phone-call{0%{transform:scale(.9)}10%,30%,50%{transform:scale(1.1) rotate(20deg)}20%,40%,60%{transform:scale(1.1) rotate(-20deg)}70%,80%,90%,100%{transform:scale(1) rotate(0deg)}}

/**/
.popup-mid{
  display: none;
  z-index: 999999999;
  position: fixed;
  /*  background: #00000066;*/
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}
.popup-mid .card1 {
  transform: translate(-50%,-50%) scale(1,1);
  z-index: 9999999999;
  border-radius: 4px;
  max-width: 440px;
  width: 100%;
  position: fixed;
  left: 50%;
  top: 50%;
  background-color: #f4f4f4;
  transition: all .8s ease-out 0s;
  overflow: hidden;
  box-shadow: 0 0 15px 0 rgb(0 0 0 / 10%);
  border-bottom: 1px solid #8d60ac;
}
.popupClick {
  position: absolute;
  height: 32px;
  width: 100%;
  bottom: 0;
}

.popupClick a {
  width: 50%;
  height: 32px;
  float: left;
}
</style>
<div id="bottom-tuvan-lchat" class="on-mobile show-mb"> 
  <a class="tu-van-ads" href="<?php echo LIVE_CHAT;?>" class="bottom_body">
   <div class="tit-bottom-tuvan-lchat">Bác Sĩ Tư Vấn Đang Online
   </div>
   <div id="chat-bottom-1" class="w-clear">
     <div class="bottom_img">
       <img src="<?php echo get_template_directory_uri()?>/assets/images/favicon.png" alt="tư vấn sức khỏe miễn phí" style="width:60px" />
     </div>
     <div class="chat-bottom-tuvan-lchat">Chào bạn! Tôi là Bác sĩ tư vấn chuyên khoa. Bạn có vấn đề sức khỏe gì cần tôi tư vấn?</div>
   </div>
   <div id="chat-bottom-2" class="w-clear">
     <div class="bottom_img">
       <img src="<?php echo get_template_directory_uri()?>/assets/images/favicon.png" alt="tư vấn sức khỏe miễn phí" style="width:60px" />
     </div>
     <div class="chat-bottom-tuvan-lchat">Bạn cứ trao đổi, cuộc hội thoại được bảo mật.</div>
   </div>
 </a>
 <div class="btn-tuvan">
  <a class="call-ads" href="tel:<?php echo SDT?>">
    <span class="btn-tuvan-left">Gọi cho bác sĩ</span>
  </a>
  <a class="tu-van-ads" href="<?php echo LIVE_CHAT?>" target="_blank">
    <span class="btn-tuvan-right">Chat với bác sĩ</span>
  </a>
</div>
</div>



<!-- sticky hotline -->
<div class="sticker-hotline-mobile show-mb">
	<a href="tel:<?php echo SDT; ?>"><i class="fa fa-phone"></i><span class="t24h">24h</span></a>
</div>
<!-- #popup-mid   -->
<div id="popup-mid" class="popup-mid">
  <div class="card1">
    <a href="<?php echo LIVE_CHAT;?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/popup.gif" alt="popup"></a>
    <div class="popupClick">
      <a href="<?php echo LIVE_CHAT;?>"></a>
      <a id="closepp"></a>
    </div>  
  </div>
</div>

