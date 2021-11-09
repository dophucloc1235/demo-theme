
// thêm ID vào URL Chat
$('a[href*="nim.zoosnet.net/LR/Chatpre.aspx?id=NIM71591376"]').addClass('tu-van-ads');

function openNav() {
	document.getElementById("mySidenav").style.width = "300px";
// 	document.getElementById("main").style.marginLeft = "300px";
}

function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
// 	document.getElementById("main").style.marginLeft= "0";
}
$('.menu-mb-open').click(function() {
	$('.menu_close').addClass('active');
});
$('.menu-mb-close').click(function() {
	$('.menu_close').removeClass('active');
});
$('.menu_close').click(function() {
	$('.menu_close').removeClass('active');
	closeNav();
});

$(".cavera").click(function(){
	if($(this).hasClass('minus'))
		$(this).removeClass('minus');
	else
		$(this).addClass('minus');
	$(this).parent().find('.sub-menu').toggle(200,'swing');
});

// 
$(function () {
	$(window).scroll(function () {
		$(this).scrollTop() > 20 ? $(".header").addClass("fixed") : $(".header").removeClass("fixed");
		$(this).scrollTop() > 20 ? $(".header_form").addClass("header_fixed") : $(".header_form").removeClass("header_fixed");
	});
})
