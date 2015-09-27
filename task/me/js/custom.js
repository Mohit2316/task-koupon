"use strict";
// Global vars
var TWITTER_USERNAME = 'kouponize',
    GOOGLE_MAP_LAT = 40.7564971,
    GOOGLE_MAP_LNG = -73.9743277;


// Countdown
$(function() {
    $('.countdown').each(function() {
        var count = $(this);
        $(this).countdown({
            zeroCallback: function(options) {
                var newDate = new Date(),
                    newDate = newDate.setHours(newDate.getHours() + 130);

                $(count).attr("data-countdown", newDate);
                $(count).countdown({
                    unixFormat: true
                });
            }
        });
    });
});


// Bootstrap carousel
$('.carousel').carousel({
    interval: 6
});

// Responsive video
$("body").fitVids();

// Sticky search
if ($('body').hasClass('sticky-search')) {
    var theLoc = $('.search-area').position().top;
    if ($('body').hasClass('sticky-header')) {
        var header_h = $('header.main').outerHeight();
    } else {
        header_h = 0;
    }

    $(window).scroll(function() {
        if (theLoc >= $(window).scrollTop()) {
            if ($('.search-area').hasClass('fixed')) {
                $('.search-area').removeClass('fixed').css({
                    top: 0
                });
            }
        } else {
            if (!$('.search-area').hasClass('fixed')) {
                $('.search-area').addClass('fixed').css({
                    top: header_h
                });
            }
        }
    });
}

// Sticky header
if ($('body').hasClass('sticky-header')) {
    var theLoc = $('header.main').position().top;
    $(window).scroll(function() {
        if (theLoc >= $(window).scrollTop()) {
            if ($('header.main').hasClass('fixed')) {
                $('header.main').removeClass('fixed');
            }
        } else {
            if (!$('header.main').hasClass('fixed')) {
                $('header.main').addClass('fixed');
            }
        }
    });
}

// Price slider
$("#price-slider").ionRangeSlider({
    min: 130,
    max: 575,
    type: 'double',
    prefix: "$",
    prettify: false,
    hasGrid: false
});

// Responsive navigation
$('#flexnav').flexNav();



// Lighbox text
$('.popup-text').magnificPopup({
    removalDelay: 500,
    closeBtnInside: true,
    callbacks: {
        beforeOpen: function() {
            this.st.mainClass = this.st.el.attr('data-effect');
        }
    },
    midClick: true
});

// Lightbox iframe
$('.popup-iframe').magnificPopup({
    dispableOn: 700,
    type: 'iframe',
    removalDelay: 160,
    mainClass: 'mfp-fade',
    preloader: false
});


$('#star-rating > li').each(function() {
    var list = $(this).parent(),
        listItems = list.children(),
        itemIndex = $(this).index();

    $(this).hover(function() {
        for (var i = 0; i < listItems.length; i++) {
            if (i <= itemIndex) {
                $(listItems[i]).addClass('hovered');
            } else {
                break;
            }
        };
        $(this).click(function() {
            for (var i = 0; i < listItems.length; i++) {
                if (i <= itemIndex) {
                    $(listItems[i]).addClass('selected');
                } else {
                    $(listItems[i]).removeClass('selected');
                }
            };
        });
    }, function() {
        listItems.removeClass('hovered');
    });
});


// Bootstrap tooltips
$('[data-toggle="tooltip"]').tooltip();



// Twitter
$("#twitter").tweet({
    username: TWITTER_USERNAME,
    count: 3
});

$("#twitter-ticker").tweet({
    username: TWITTER_USERNAME,
    page: 1,
    count: 20
});


// Checkboxes and radio
$('.i-check, .i-radio').iCheck({
    checkboxClass: 'i-check',
    radioClass: 'i-radio'
});


// Item quantity control (shopping cart)
$(".cart-item-plus").click(function() {
    var currentVal = parseInt($(this).prev(".cart-quantity").val());

    if (!currentVal || currentVal == "" || currentVal == "NaN") currentVal = 0;

    $(this).prev(".cart-quantity").val(currentVal + 1);
});

$(".cart-item-minus").click(function() {
    var currentVal = parseInt($(this).next(".cart-quantity").val());
    if (currentVal == "NaN") currentVal = 0;
    if (currentVal > 0) {
        $(this).next(".cart-quantity").val(currentVal - 1);
    }
});


// Card form
$('.form-group-cc-number input').payment('formatCardNumber');
$('.form-group-cc-date input').payment('formatCardExpiry');
$('.form-group-cc-cvc input').payment('formatCardCVC');


// Google map
if ($('#map-canvas').length) {
    var map,
        service;
    jQuery(function($) {
        $(document).ready(function() {
            var latlng = new google.maps.LatLng(17.3660,78.4760);
			var locations = [
			  ['Lansum House',17.3660,78.4760,3],
			  ['Jubelie Hills', 17.412769, 78.399864, 2],
			  ['Madhapur', 17.412011, 78.435019, 1]
			];
			
			var map = new google.maps.Map(document.getElementById('map-canvas'), {
			  zoom: 10,
			  center: new google.maps.LatLng(17.3660,78.4760),
			  mapTypeId: google.maps.MapTypeId.ROADMAP
			});

			var infowindow = new google.maps.InfoWindow();

           // map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);

			var marker, i;
			var markers = new Array();

			for (i = 0; i < locations.length; i++) {  
			  marker = new google.maps.Marker({
				position: new google.maps.LatLng(locations[i][1], locations[i][2]),
				map: map
			  });
			markers.push(marker);

			  google.maps.event.addListener(marker, 'click', (function(marker, i) {
				return function() {
				  infowindow.setContent(locations[i][0]);
				  infowindow.open(map, marker);
				}
			  })(marker, i));
			}
			
			marker.setMap(map);
			
            $('a[href="#google-map-tab"]').on('shown.bs.tab', function(e) {
                google.maps.event.trigger(map, 'resize');
                map.setCenter(latlng);
            });
        });
    });
}

if ($('#map-canvas1').length) {
    var map,
        service;
    jQuery(function($) {
        $(document).ready(function() {
            var latlng = new google.maps.LatLng(17.3660,78.4760);
			var locations = [
			  ['Jubelie Hills', 17.412769, 78.399864, 2]
			];
			
			var map = new google.maps.Map(document.getElementById('map-canvas1'), {
			  zoom: 10,
			  center: new google.maps.LatLng(17.3660,78.4760),
			  mapTypeId: google.maps.MapTypeId.ROADMAP
			});

			var infowindow = new google.maps.InfoWindow();

           // map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);

			var marker, i;
			var markers = new Array();

			for (i = 0; i < locations.length; i++) {  
			  marker = new google.maps.Marker({
				position: new google.maps.LatLng(locations[i][1], locations[i][2]),
				map: map
			  });
			markers.push(marker);

			  google.maps.event.addListener(marker, 'click', (function(marker, i) {
				return function() {
				  infowindow.setContent(locations[i][0]);
				  infowindow.open(map, marker);
				}
			  })(marker, i));
			}
			
			marker.setMap(map);
			
            $('a[href="#google-map-tab"]').on('shown.bs.tab', function(e) {
                google.maps.event.trigger(map, 'resize');
                map.setCenter(latlng);
            });
        });
    });
}

$('.bg-parallax').each(function() {
    var $obj = $(this);

    $(window).scroll(function() {
        // var yPos = -($(window).scrollTop() / $obj.data('speed'));
        var animSpeed;
        if ($obj.hasClass('bg-blur')) {
            animSpeed = 10;
        } else {
            animSpeed = 15;
        }
        var yPos = -($(window).scrollTop() / animSpeed);
        var bgpos = '50% ' + yPos + 'px';
        $obj.css('background-position', bgpos);

    });
});

// Document ready functions
$(document).ready(function() {


    $('html').niceScroll({
        cursorcolor: "#000",
        cursorborder: "0px solid #fff",
        railpadding: {
            top: 0,
            right: 0,
            left: 0,
            bottom: 0
        },
        cursorwidth: "5px",
        cursorborderradius: "0px",
        cursoropacitymin: 0,
        cursoropacitymax: 0.7,
        boxzoom: true,
        horizrailenabled: false,
        zindex: 9999
    });


    // Owl Carousel
    var owlCarousel = $('#owl-carousel'),
        owlItems = owlCarousel.attr('data-items'),
        owlCarouselSlider = $('#owl-carousel-slider'),
        owlNav = owlCarouselSlider.attr('data-nav');
    // owlSliderPagination = owlCarouselSlider.attr('data-pagination');

    owlCarousel.owlCarousel({
        items: owlItems,
        navigation: true,
        navigationText: ['', '']
    });

    $("#owl-carousel-slider").owlCarousel({
        slideSpeed: 300,
        paginationSpeed: 400,
			//pagination: owlSliderPagination,
        singleItem: true,
        navigation: true,
        navigationText: ['', ''],
        transitionStyle: 'fade',
        autoPlay: 3000		
    });


    // Twitter Ticker
    var ul = $('#twitter-ticker').find(".tweet-list");
    var ticker = function() {
        setTimeout(function() {
            ul.find('li:first').animate({
                marginTop: '-9em',
                opacity: 0
            }, 700, function() {
                $(this).detach().appendTo(ul).removeAttr('style');
            });
            ticker();
        }, 5000);
    };
    ticker();


     // footer always on bottom
    var docHeight = $(window).height();
   var footerHeight = $('#main-footer').height();
   /*var footerTop = $('#main-footer').position().top + footerHeight;
   
   if (footerTop < docHeight) {
    $('#main-footer').css('margin-top', (docHeight - footerTop) + 'px');
   }*/ 
   // commented by adasi since the .TOP is causing an error in loading custom js

});


// Lighbox gallery
$('#popup-gallery').each(function() {
    $(this).magnificPopup({
        delegate: 'a.popup-gallery-image',
        type: 'image',
        gallery: {
            enabled: true
        }
    });
});

// Lighbox gallery
$('#popup-gallery').each(function() {
    $(this).magnificPopup({
        delegate: 'a.popup-gallery-image',
        type: 'image',
        gallery: {
            enabled: true
        }
    });
});

// Lighbox image
$('.popup-image').magnificPopup({
    type: 'image'
});

$(window).load(function() {
        $('#masonry').masonry({
            itemSelector: '.col-masonry'
        });
});

// login and register
$(document).ready(function(){
   $("#login").click(function(){
		//alert("Login click....");
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/; 
        var username=$("#logemail").val();
		//alert(username);
        var password=$("#logpassword").val();
		//alert(password);
		if(reg.test(username)==false){
			$("#add_err").html("Enter valid email*");
			return false;
		}
		if(username=='' || password=='' ){
			$("#add_err").html("All Fields are Required*");
			//alert("all fields are required");
			return false;
		}
		else{
         $.ajax({
            type: "POST",
            url: "./bin/login.php",
            data: "name="+username+"&pwd="+password,
            success: function(html){
			//alert(html);
              if(html=='true')
              {
				$("#credentials").html("<ul class='login-register'><li><a href='./bin/logout.php'><i class='icon-signin'></i>Logout</a>  </li>	</ul>");
				//location.reload();
				window.location = "index.php";
				
              }
			else if(html=='Block'){
				$("#add_err").html("Please confirm your email.");
				//$(".dialog-form").show();
				return false;
			}
              else
              {
                    $("#add_err").html("Wrong username or password");
					//$(".dialog-form").show();
					return false;
              }
            },
            beforeSend:function()
			{
                 $("#add_err").html("Validating and Redirecting ......");
				 //$(".dialog-form").hide();
            }
		
         });
         
		}
    });
	
	$("#reg_user").click(function(){
		//alert("register click");
		var email=$("#email").val();
		//alert("email : "+email);
		var password=$("#password").val();
		//alert("password : "+password);
		var repeat=$("#repeat").val();
		//alert("password-rep : "+repeat);
		var city=$("#city").val();
		//alert("city : "+city);
		var mobile=$("#mobile").val();
		//alert("Mobile : "+mobile);
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/; 
		
		if(email=='' || password=='' || repeat=='' || city=='' || mobile=='')
		{
			$("#add_err_reg").html("All Fields are Required*");
			return false;
		}
		else {
			if(reg.test(email)==false){
				$("#add_err_reg").html("Enter valid email*");
				return false;
			}
			else if(password!=repeat){
				$("#add_err_reg").html("Passwords do not match*");
				return false;
			}
			else{
				 $.ajax({
					type: "POST",
					url: "./bin/register.php",
					data: "email="+email+"&password="+password+"&city="+city+"&mobile="+mobile,
					success: function(html){
					//alert(html);
					  if(html=='true')
					  {
						$("#add_err_reg").html("Done! Please verify your email...!");
							/*$.magnificPopup.open({
								  items: {
									  src: '#register-success-dialog',
									  type: 'inline'
								  },
								  closeBtnInside: true
							});	*/
						$("#register-dialog").addClass("mfp-hide");
						$("#register-success-dialog").removeClass("mfp-hide");
						return false;
					  }
					  else if (html=='already')
					  {
							$("#add_err_reg").html("Email Id already exist...!");
							return false;
					  }
					  else
					  {
							$("#add_err_reg").html("Oops some thing went wrong...!");
							return false;
					  }
					},
					beforeSend:function()
					{
						 $("#add_err_reg").html("Loading...")
					}
				
				});
			}
			return false;
		}
		
		return false;
		
	});

});	

$(document).ready(function(){
    $(".nav_stack_cpn").click(function(){
      var event=$(this).attr('rel');
	  $("li.active").removeClass("active");
	  $(this).parent("li").addClass("active");
	  
	  //alert(event);
      $(".load_posts").load("load_posts.php?id="+event, function(data) {
		//alert("return");
        $(data).hide().fadeIn("slow");
      });
    });
});

$(document).ready(function(){
	$(".kpn-log-reg").click(function() {
		//alert('register clickto');		
		$("#register-dialog").removeClass("mfp-hide");
		$("#login-dialog").addClass("mfp-hide");
	});
	$(".kpn-log-log").click(function() {
		//alert('register clickto');		
		$("#register-dialog").addClass("mfp-hide");
		$("#login-dialog").removeClass("mfp-hide");
	});	
	$(".kpn-log-pwd").click(function() {
		//alert('register clickto');		
		$("#login-dialog").addClass("mfp-hide");
		$("#password-recover-dialog").removeClass("mfp-hide");
		$("#login1").addClass("mfp-hide");
	});		
	
});



// ----- profile settings
$(document).ready(function(){
    $(".nav_stack_cpn1").click(function(){
		var event=$(this).attr('rel');
		$("li.active").removeClass("active");
		$(this).parent("li").addClass("active");
		if(event == 1) {
			$("#0").addClass("mfp-hide");			
			$("#1").removeClass("mfp-hide");
			$("#2").addClass("mfp-hide");
			$("#3").addClass("mfp-hide");
			$("#4").addClass("mfp-hide");
		}
		if(event == 2) {
			$("#0").addClass("mfp-hide");			
			$("#1").addClass("mfp-hide");
			$("#2").removeClass("mfp-hide");
			$("#3").addClass("mfp-hide");
			$("#4").addClass("mfp-hide");
		}
		if(event == 3) {
			$("#0").addClass("mfp-hide");			
			$("#1").addClass("mfp-hide");
			$("#2").addClass("mfp-hide");
			$("#3").removeClass("mfp-hide");
			$("#4").addClass("mfp-hide");
		}	
		if(event == 4) {
			$("#0").addClass("mfp-hide");			
			$("#1").addClass("mfp-hide");
			$("#2").addClass("mfp-hide");
			$("#3").addClass("mfp-hide");
			$("#4").removeClass("mfp-hide");
		}				
		if(event == 0) {
			$("#0").removeClass("mfp-hide");			
			$("#1").addClass("mfp-hide");
			$("#2").addClass("mfp-hide");
			$("#3").addClass("mfp-hide");
			$("#4").addClass("mfp-hide");
		}
		
    });
});

// ----- claim Koupon----
$(document).ready(function(){
    $("#claim").click(function(){
        email=$("#email").val();
		//alert(email);
        mobile=$("#mobile").val();
		//alert(mobile);
		volume=$("#volume").val();
		//alert(volume);
		var reg = /^([0-9])$/;  
		
		if(email=='' || mobile=='' || volume=='') {
			$("#resp").html("All Fields are Required *");
		}
		else if(reg.test(volume)==false) {
			$("#resp").html("Please enter a valid Volume.");
		}
		else if(volume>3) {
			$("#resp").html("Only 3 koupons allowed.");
		}
		else{
			$.ajax({
				type: "POST",
				url: "./bin/claimKoupon.php",
				data: "email="+email+"&mobile="+mobile+"&volume="+volume,
				success: function(html){
					if(html=='false'){
						$("#resp").html("Something Went Wrong .. Please try again");
						return false;
					}
					else{
						// First the #row-fluid divion should be hidden and then the #resp should be shown
						$('#claim_koupon_form').hide();
						$("#result").html("Thank you for using Kouponize.");
						$("#resp").html("Your Koupon Codes are :"+html+"<br><br>Please note your Koupon Codes to redeem.").attr("style","color:#7da044;"); // Inline HTML to the resp division
					}
				},
				beforeSend:function(){
					 $("#resp").html("Processing your koupons...");
				}
			
			});
		}
});
});

$(document).ready(function(){	
	$("#update_email").click(function(){
		key=$("#email").val();
		email=$("#uemail").val();
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/; 
		if (email=='')
		{
				$("#message").html("Value required.");
				return false;
		}
		else if (email==key)
		{
				$("#message").html("Same E-mail address exist.");
				return false;
		}
		else if(reg.test(email)==false){
				$("#message").html("Enter valid email.");
				return false;
		}
		else 
		{
			 $.ajax({
				type: "POST",
				url: "./bin/edit_user.php",
				data: "key="+key+"&email="+email,
				success: function(html){
				  if(html=='true')
				  {
					$('#cmail').children("#cmailf").hide();
					$("#message").html("Done! E-mail Id changed Successfully.").attr("style","color:green;font-size:9pt;");
					location.reload();
					return false;
				  }
				  else
				  {
						$("#message").html("Email already exists .. !");
						return false;
				  }
				},
				beforeSend:function()
				{
					 $("#message").html("Loading...")
				}
			
			});
		}
		return false;
	});

	$("#save").click(function(){
		var key=$("#alt-email").val();
		var mobile=$("#alt-mobile").val();
		var city=$("#alt-city").val();
		var reg = /^([7-9]{1,1})+([0-9]{9,9})$/; 
		if (mobile=='')
		{
			$("#message1").html(" * Mobile Number required.");
			return false;
		}
		else if(reg.test(mobile)==false){
				$("#message1").html(" * Enter valid mobile number.");
				return false;
		}
		else if (city=='')
		{
				$("#message1").html(" * City cannot be empty.");
				return false;
		}
		else 
		{
			$.ajax({
				type: "POST",
				url: "./bin/edit_user.php",
				data: "key="+key+"&mobile="+mobile+"&city="+city,
				success: function(html){
				  if(html=='true')
				  {
					
					//$("#0").load(location.href + " #0");
					location.reload();
					$("#message1").html(" * Done! Your Profile changed Successfully.").attr("style","color:green;font-size:9pt;");
					return false;
				  }
				  else
				  {
						$("#message1").html(" * Some error occured. Please try again .. !");
						return false;
				  }
				},
				beforeSend:function()
				{
					 $("#message1").html(" Loading...")
				}
			
			});
		}
		
	});
	
	
	$("#update_mobile").click(function(){
		key=$("#email").val();
		mobile=$("#umobile").val();
		var reg = /^([7-9]{1,1})+([0-9]{9,9})$/; 
		if (mobile=='')
		{
				$("#message1").html("Value required.");
				return false;
		}
		else if(reg.test(mobile)==false){
				$("#message1").html("Enter valid mobile number.");
				return false;
		}
		else 
		{
			 $.ajax({
				type: "POST",
				url: "./bin/edit_user.php",
				data: "key="+key+"&mobile="+mobile,
				success: function(html){
				  if(html=='true')
				  {
					$('#cmob').children("#cmobf").hide();
					$("#message1").html("Done! Mobile number changed Successfully.").attr("style","color:green;font-size:9pt;");
					location.reload();
					return false;
				  }
				  else
				  {
						$("#message1").html("Some error occured. Please try again .. !");
						return false;
				  }
				},
				beforeSend:function()
				{
					 $("#message1").html("Loading...")
				}
			
			});
		}
		return false;
	});
	
	$("#update_city").click(function(){
		key=$("#email").val();
		city=$("#ucity").val();
		if (city=='')
		{
				$("#message2").html("Value required.");
				return false;
		}
		else 
		{
			 $.ajax({
				type: "POST",
				url: "./bin/edit_user.php",
				data: "key="+key+"&city="+city,
				success: function(html){
				  if(html=='true')
				  {
					$('#ccity').children("#ccityf").hide();
					$("#message2").html("Done! City name changed Successfully.").attr("style","color:green;font-size:9pt;");
					location.reload();
					return false;
				  }
				  else
				  {
						$("#message2").html("Some error occured. Please try again .. !");
						return false;
				  }
				},
				beforeSend:function()
				{
					 $("#message2").html("Loading...")
				}
			
			});
		}
		return false;
	});
	
	$("#update_password").click(function(){
		//alert('adfa');
		key=$("#email").val();
		opas=$("#old_password").val();
		npas=$("#new_password").val();
		nrep=$("#repeat").val();
		if (opas=='' || npas=='' || nrep=='')
		{
				$("#message3").html("All values required.");
				return false;
		}
		else if(npas!=nrep){
				$("#message3").html("Passwords are not matching.");
				return false;
		}
		else 
		{
			 $.ajax({
				type: "POST",
				url: "./bin/edit_user.php",
				data: "key="+key+"&new_password="+npas+"&old_password="+opas,
				success: function(html){
				  if(html=='true')
				  {
					$('#cpas').children("#cpasf").hide();
					$("#message3").html("Done! Password changed Successfully.").attr("style","color:green;font-size:9pt;");
					location.reload();
					return false;
				  }
				  else
				  {
						$("#message3").html("Old password doesn't match .. !");
						return false;
				  }
				},
				beforeSend:function()
				{
					 $("#message3").html("Loading...")
				}
			
			});
		}
		return false;
	});


	//Multicity
	$("#location").click(function(){
		var selCity=$("#selectedCity").val();
		document.cookie="Kouponize="+selCity+"; expires=Fri, 18 Dec 2015 12:00:00 GMT";
		location.reload();
		//document.getElementById("location-form").submit();
	});
	
	$("#forgot-pass").click(function(){
		var email=$("#emailfgt").val();
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/; 
		if (email=='')
		{
				$("#forgot-error").html("Value required.");
				return false;
		}
		else if(reg.test(email)==false){
				$("#forgot-error").html("Enter valid email.");
				return false;
		}
		else 
		{
			 $.ajax({
				type: "POST",
				url: "./bin/forgot_pass.php",
				data: "email="+email,
				success: function(html){
				  if(html=='true')
				  {
					$("#forgot-error").html("Done! Your password has sent to your email.").attr("style","color:green;font-size:9pt;");
					$("#login1").removeClass("mfp-hide");
					$("#forgoteml").addClass("mfp-hide");	
					$("#emailfgt").addClass("mfp-hide");	
					$("#forgot-pass").addClass("mfp-hide");
					
					//location.reload();
					return false;
				  }
				  else if(html=='false')
				  {
					$("#forgot-error").html("Email Id not exist...!");
					return false;
				  }
				  else
				  {
					$("#forgot-error").html("Oops some thing went wrong...!");
					return false;
				  }
				},
				beforeSend:function()
				{
					 $("#forgot-error").html("Loading...")
				}
			
			});
		}
		return false;
	});
});


$(document).ready(function(){
    $("#follow-me").click(function(){
        koupon=$("#kpn-id").html();
        uid=$("#uid").html();
		//alert(user);
			$.ajax({
				type: "POST",
				url: "./bin/follow.php",
				data: "&koupon="+koupon+"&uid="+uid,
				success: function(html){
					if(html=='true'){		
						location.reload();
					}
					else{
						alert(html+"We are unable to process your request. Please try after some time.");
						location.reload();
					}
				},
				beforeSend:function(){
					 $("#follow-me").html("Wait...");
				}
			});
	});
});
$(document).ready(function(){
    $("#unfollow-me").click(function(){
        koupon=$("#kpn-id-un").html();
        uid=$("#uid").html();
		//alert(user);
			$.ajax({
				type: "POST",
				url: "./bin/follow.php",
				data: "&unkoupon="+koupon+"&uid="+uid,
				success: function(html){
					if(html=='true'){		
						location.reload();
					}
					else{
						alert(html+"We are unable to process your request. Please try after some time.");
						location.reload();
					}
				},
				beforeSend:function(){
					 $("#unfollow-me").html("Wait...");
				}
			});
	});
});

// Follow and Unfollow from SETTINGS Page
$(document).ready(function(){
    $("#follow-set").click(function(){
		//alert('follow click');
		var uid = $('#business').val();
		//alert(uid);
        var koupon='set';
		//alert(koupon);
			$.ajax({
				type: "POST",
				url: "./bin/followSet.php",
				data: "&koupon="+koupon+"&uid="+uid,
				success: function(html){
					//alert(html);
					if(html=='true'){		
						location.reload();
						//$('#1').fadeOut("slow").load('load-business.php').fadeIn("slow");
					}
					else{
						alert(html+"We are unable to process your request. Please try after some time.");
						location.reload();
					}
				},
				beforeSend:function(){
					 $("#unfollow-me").html("Wait...");
				}
			});
		
	});
});

//unfollow business frm setings page
$(document).ready(function(){
    $(".remove-fol").click(function(){
		//alert('unfollow click');
		var uid = $(this).attr("id").substring(9);
		//var uid = $('#business').val();
		//alert(uid);
        var koupon='unset';
		//alert(koupon);
		//alert(uid);
		
		$.ajax({
			type: "POST",
			url: "./bin/followSet.php",
			data: "&unkoupon="+koupon+"&uid="+uid,
			success: function(html){
				//alert(html);
				if(html=='true'){		
					location.reload();
				}
				else{
					alert(html+"We are unable to process your request. Please try after some time.");
					location.reload();
				}
			},
			beforeSend:function(){
				 $("#unfollow-me").html("Wait...");
			}
		});
	});
});


//follow and unfolloe category

// Follow categoryfrom SETTINGS Page
$(document).ready(function(){
    $("#follow-cat").click(function(){
		//alert('follow cat click');
		var uid = $('#categ').val();
		//alert(uid);
        var koupon='set';
		//alert(koupon);
			$.ajax({
				type: "POST",
				url: "./bin/followCat.php",
				data: "&koupon="+koupon+"&uid="+uid,
				success: function(html){
					//alert(html);
					if(html=='true'){		
						location.reload();
						//$('#1').fadeOut("slow").load('load-business.php').fadeIn("slow");
					}
					else{
						alert(html+"We are unable to process your request. Please try after some time.");
						location.reload();
					}
				},
				beforeSend:function(){
					 $("#unfollow-me").html("Wait...");
				}
			});
		
	});
});

// Un-Follow categoryfrom SETTINGS Page
$(document).ready(function(){
    $(".remove-cat").click(function(){
		//alert('unfollow cat click');
		var uid = $(this).attr("id").substring(9);
		//alert(uid);
        var koupon='unset';
		//alert(koupon);
		
		$.ajax({
			type: "POST",
			url: "./bin/followCat.php",
			data: "&unkoupon="+koupon+"&uid="+uid,
			success: function(html){
				//alert(html);
				if(html=='true'){		
					location.reload();
				}
				else{
					alert(html+"We are unable to process your request. Please try after some time.");
					location.reload();
				}
			},
			beforeSend:function(){
				 $("#unfollow-me").html("Wait...");
			}
		});
	});
});


$(document).ready(function(){
	$("#followb").click(function() {
		alert('follow clickto');
	});
});

//unfollow and follow at load posts
$(document).ready(function(){
	$(".follow").click(function() {
	
		var bu_id = $(this).attr("id").substring(6);
		//alert('follow Me');
		//alert(bu_id);
		var koupon='set';
		$.ajax({
			type: "POST",
			url: "./bin/followSet.php",
			data: "&koupon="+koupon+"&uid="+bu_id,
			success: function(html){
				//alert(html);
				if(html=='true'){		
					location.reload();
					//$('#1').fadeOut("slow").load('load-business.php').fadeIn("slow");
				}
				else{
					alert(html+"We are unable to process your request. Please try after some time.");
					location.reload();
				}
			},
			beforeSend:function(){
				 $("#unfollow-me").html("Wait...");
			}
		});
		
	});

	$(".unfollow").click(function() {
		var bu_id = $(this).attr("id").substring(8);
		//alert('unfollow Me');
		//alert(bu_id);
		var koupon='unset';
		$.ajax({
			type: "POST",
			url: "./bin/followSet.php",
			data: "&unkoupon="+koupon+"&uid="+bu_id,
			success: function(html){
				//alert(html);
				if(html=='true'){		
					location.reload();
				}
				else{
					alert(html+"We are unable to process your request. Please try after some time.");
					location.reload();
				}
			},
			beforeSend:function(){
				 $("#unfollow-me").html("Wait...");
			}
		});
		
	});

});