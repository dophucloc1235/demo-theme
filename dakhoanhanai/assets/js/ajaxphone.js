
jQuery(function($) {

    $.fn.d_contact = function() {
        var send_data = function(that) {    
            var fullname = that.find('.d-fullname').val();
            var phone_number = that.find('.d-phone').val();
            var email = that.find('.d-email').val();
            var message = that.find('.d-message').val();
            var bookDate = that.find('.d-date').val();
            var time = new Date().toLocaleString();      
            var ipJson = {};
            $.ajax({
                url: domain_site_uri+'/assets/js/getipaddress.php',
                async: false,
                dataType: 'json',
                success: function(data) {
                    ipJson = data.ip;
                    // console.log(ipJson);
                }
            });         
            if (phone_number == 'undefined' || fullname == 'undefined' || phone_number == '' || fullname == '' || /^\d{10,11}$/.test(phone_number)==false) {
                alert('Vui lòng nhập đúng số điện thoại !');
                that.find('.d-phone').focus();
            } else {
                $.ajax({
                    url: 'https://script.google.com/macros/s/AKfycby3yijeSFKyrfu0AmsHeIja4AX-A7_1rBX5iWOMrXoEB1jYgUIx/exec',
                    type: 'GET',
                    data: {
                        name: fullname,
                        phone: phone_number,
                        url: window.location.href,
                        TIME:time,
                        email:email,
                        message:message,
                        bookingDate:bookDate,
                        ip: ipJson
                    },
                    success: function(data) {
                        //    data = jQuery.parseJSON(data);
                        if(data=='false') {
                            alert('gửi thất bại');
                        }
                        else {
                            alert('thành công');
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                        
                    }
                })
            }
            
        }
        return this.each(function() {
            var that = $(this);
            that.find('.d-send').click(function() {

                send_data(that);
            })
            that.find('.d-phone').keydown(function(e) {
                if (e.keyCode == 13) {

                    send_data(that);
                }
            })
            that.find('.d-fullname').keydown(function(e) {
                if (e.keyCode == 13) {

                    send_data(that);
                }
            })
        })
    }
    $(function() {
        if ($(".d_contact").length) $('.d_contact').d_contact({});
    });
});

