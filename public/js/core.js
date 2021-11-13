/* Easy access to noty error class w/ options */
function notyError(msg) {
    new Noty({
      text: '<div class="text-center">'+msg+'</strong></div>',
      type: 'error',
      killer: true,
      theme: 'mint',
      layout: 'topRight',
      timeout: 4000,
      force: true
    }).show();
}

/* Side Menu functionality for mobile */
$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        $("#sidebar-wrapper").hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        $("#sidebar-wrapper").show();
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
$(document).ready(function() {
	$('#collapseOne-1, #collapseOne-2, #collapseOne-3, #collapseOne-4').collapse("hide");
});



/* "Pay Invoice" dropdown form functionality */
var modal_invoice_id = null;
var invoice_usd_amount = 0;

$(".invoice_a").click(function(event) {
	$(this).closest(".invoice_modal_form").submit();
	event.stopPropagation();
	return false;
})
/* On submit of form in "Pay Invoice" dropdown */
$(".invoice_modal_form").submit(function(event) {
	var invoiceTxtInput = $(this).find(".invoice_text");
	var invoiceLookupBtn = $(this).find(".invoice_a");
	console.log(invoiceTxtInput.val())

	if(!invoiceTxtInput.val()) {
		notyError("You must enter an invoice ID.");
		return false;
	}
	invoiceTxtInput.addClass("disabled").attr("disabled", true)
	invoiceLookupBtn.html("&nbsp; <i class='fa fa-spinner fa-spin'></i> &nbsp;");

	$.ajax({
		url: "/invoice/lookup/"+invoiceTxtInput.val(),
		type: "get",
		dataType: 'json',
		success: function(data) {
			$(invoiceLookupBtn).removeClass("disabled").removeAttr("disabled").html("Go");
			invoiceTxtInput.removeClass("disabled").removeAttr("disabled");

			modal_invoice_id = data.invoice.identifier;

			if(typeof(data.error) != "undefined") {
				notyError(data.error);
				return false;
			}

			$("#invoice_modal_total").html("$"+data.invoice.total_unpaid);
			$("#invoice_modal_line_items_total").html("$"+data.invoice.total_unpaid);
			$(".paypal_item_price").val(data.invoice.total_unpaid);
			invoice_usd_amount = data.invoice.total_unpaid;
			$(".modal_totals_str").html("$"+data.invoice.total_unpaid);
			$("#paypal_custom_val").val(data.invoice.identifier);
			$(".paypal_item_name, #invoice_modal_id_header").val('Invoice #'+data.invoice.identifier);

			var itemsHtml = null;
			for (var key in data.invoice.items) {
				var item = data.invoice.items[key];
				var subTotal = item.rate * item.hours;
				itemsHtml = itemsHtml+'<tr><td class="quantity">'+item.hours+' x</td><td class="product"><span class="small">'+item.category+'</span></td><td class="amount">$'+subTotal+'</td></tr>';
			}
			$("#invoice_modal_items_table tbody").html(itemsHtml);
			$("#payment_modal").modal('show');


		}
	})
	return false;
});






/* Handle continue button functionality in the payment modal itself */
var invoice_modal_step = null;
$("#continue_btn").click(function() {


	if(invoice_modal_step == "invoice_modal_stripe") {
		$("#invoice_modal_stripe").hide();
		$("#stripe-payment-form").submit();
		/* Hide first step and show next */
		$("#invoice_modal_step_1").fadeOut("fast", function() {
			$("#invoice_modal_cancel").parent().show();
			$("#invoice_modal_payments_accepted").hide();
			//$("#"+invoice_modal_step).show();
		});
	}

	if(invoice_modal_step == "invoice_modal_paypal") {
		$("#continue_btn").html("<i class='fa fa-spinner fa-spin'></i> Redirecting");
		$("#paypal_form").submit();
		/* Hide first step and show next */
		$("#invoice_modal_step_1").fadeOut("fast", function() {
			$("#invoice_modal_cancel").parent().show();
			$("#invoice_modal_payments_accepted").hide();
			$("#"+invoice_modal_step).show();
		});
		return false;
	}

	if(invoice_modal_step == null) {
		if($('input[name="payment_method"]:checked').val() == "credit_card") {
			invoice_modal_step = "invoice_modal_stripe";
			$("#invoice_modal_step_1").fadeOut("fast", function() {
				$("#invoice_modal_cancel").parent().show();
				$("#invoice_modal_payments_accepted").hide();
				$("#"+invoice_modal_step).show();
			});
		}
		if($('input[name="payment_method"]:checked').val() == "paypal") {
			invoice_modal_step = "invoice_modal_paypal";
			$("#invoice_modal_step_1").fadeOut("fast", function() {
				$("#invoice_modal_cancel").parent().show();
				$("#invoice_modal_payments_accepted").hide();
				$("#"+invoice_modal_step).show();
			});
			$("#continue_btn").html('<i class="fa fa-paypal" style="position: relative; top: 0px; color: #0070BA;"></i> PayPal Checkout <i class="fa fa-chevron-right"></i>');
		}
		if($('input[name="payment_method"]:checked').val() == "bitcoin") {
			invoice_modal_step = "invoice_modal_btc";

			$("#invoice_modal_step_1").fadeOut("fast", function() {
				$("#invoice_modal_cancel").hide();
				$("#invoice_modal_cancel").parent().show();
				$("#invoice_modal_success").show();
				$("#invoice_modal_success_h1").html("<small>Generating Address</small>");
				$("#continue_btn").hide();
				$("#invoice_modal_payments_accepted").hide();
			});

			$.ajax({
				url: "/payment/bitcoin/address?invoice_id="+modal_invoice_id,
				type: "get",
				dataType: 'json',
				success: function(data) {
					$("#invoice_modal_cancel").hide();
					$("#invoice_modal_btc").fadeIn("fast");

					setTimeout(function() {
						$('.circle-loader').toggleClass('load-complete');
						$('.checkmark').toggle();
						$("#invoice_modal_success_h1").html("<small>Payment Successful</small>");
					}, 2000);
					$("#invoice_modal_success_h1").html("<small>Awaiting Confirmation</small>");

					if(typeof(data.error) != "undefined") {
						notyError(data.error);
						return false;
					}


				}
			})

		}

	}
	return false;
})

$("body").on("click", "#paypal_checkout_btn", function() {
  $("#paypal_form").submit();
});


$("body").on("click", "#invoice_modal_cancel", function() {
	invoice_modal_step = null;
	$("#invoice_modal_stripe, #invoice_modal_paypal, #invoice_modal_btc").hide();
	$("#invoice_modal_cancel").parent().hide();
	$("#invoice_modal_payments_accepted").show();
	$("#invoice_modal_step_1").fadeIn("fast");
	$("#continue_btn").html('Continue <i class="fa fa-chevron-right"></i>');
});

/* Stripe.JS Payment Stuff */
var stripeObj = Stripe('pk_live_xhD1wTiO7qqhDza69A6DwIDv00v66UqBKK');
var elements = stripeObj.elements();

var style = {
  base: {
    color: '#32325d',
    lineHeight: '24px',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element
var card = elements.create('card', {style: style});
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

$("#stripe-payment-form").submit(function() {
	$("#continue_btn").hide();
	$("#invoice_modal_stripe").hide();
	$("#invoice_modal_success").show();
	$("#invoice_modal_cancel").hide();

	stripeObj.createToken(card).then(function(response) {
	      if (response.error) {
			$("#continue_btn").show();
			$("#invoice_modal_success").hide();
			$("#invoice_modal_stripe").show();
			$("#invoice_modal_cancel").show();
			$("#invoice_modal_success_h1").html("<small>Submitting Payment</small>");

	        notyError(response.error.message);
	        return false;
	      } else { // Token was created!
	        var token = response.token.id;  
	        
	        $.ajax({
	            url: '/payment/stripe/token?t='+token+"&invoice_id="+modal_invoice_id+"&usd_amount="+invoice_usd_amount,
	            type: 'GET',
	            success: function(d) {
	            	$("#invoice_modal_success_h1").html("<small>Payment Successful</small>");
					$("#invoice_modal_success").show();
					$('.circle-loader').toggleClass('load-complete');
					$('.checkmark').toggle();
	            }
	        });
		}
	});


	return false;
});

$('#partialPaymentTextBox').on('input', function() {
	updateInvoicePrice($('#partialPaymentTextBox').val());
})

$(".invoice_modal_email_reciept").change(function() {
	$(".paypal_customer_email").val($(this).val());
})



// if (window.location.pathname == "/") {
	var revSliderAPI = homepageSlider();
//}
scrollFunctions();

/* Pjax stuff */
$(document).pjax('.pjax', '#pjax-container', { timeout: "5000", maxCacheLength: 1, push: true, replace: false })


var pjax_total = 0;
$(document).on('pjax:send', function() {
	pjax_total = pjax_total + 1;

	$(window).scrollTop(0);
    if( $('#sidebar-wrapper:visible').length > 0) {
        $(".hamburger").click();  
    }
	if(typeof(revSliderAPI) != "undefined") revSliderAPI.revkill();
	
    $('#pjax_loading').css("width", "0px").show().animate({width:"100%"},2500);
})


$(document).on('pjax:complete', function() {

	if(pjax_total >= 10) {
		 location.reload(); 
		return false;
	}
	
	if(typeof(revSliderAPI) != "undefined") revSliderAPI.revkill();
    if (window.location.pathname == "/") {
		//$("#homepage_banner").show();
		if(typeof(revSliderAPI) != "undefined") revSliderAPI.revkill();
		revSliderAPI = homepageSlider();
		$(".header").addClass("transparent-header-on");
		$(".banner").css("padding-top", "0px");
    } else {
   //   $("#homepage_banner").hide();
	  if(typeof(revSliderAPI) != "undefined") revSliderAPI.revkill();
	  //$(".banner").css("padding-top", "55px");
	  console.log("test");
	  $(".header").removeClass("transparent-header-on");
	}
		
	
	$("html, body").animate({ scrollTop: 0 }, "slow");
	scrollFunctions();

	$('#pjax_loading').hide();


		// Animations
		//-----------------------------------------------
		if ($("[data-animation-effect]").length>0) {
			$("[data-animation-effect]").each(function() {
				if(Modernizr.csstransitions) {
					var waypoints = $(this).waypoint(function(direction) {
						var appearDelay = $(this.element).attr("data-effect-delay"),
						animatedObject = $(this.element);
						setTimeout(function() {
							animatedObject.addClass('animated object-visible ' + animatedObject.attr("data-animation-effect"));
						}, appearDelay);
						this.destroy();
					},{
						offset: '95%'
					});
				} else {
					$(this).addClass('object-visible');
				}
			});
		};
	
	Waypoint.refreshAll()
  
})
        
        
        
function homepageSlider() {
    if ($(".slider-banner-container").length>0) {
        var revSliderAPI = 
            $('.slider-banner-container .slider-banner-fullwidth-big-height').show().revolution({
                delay:8000,
                startwidth:1140,
                startheight:650,

                navigationArrows:"solo",

                navigationStyle: "preview2",
                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,

                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:0,
                soloArrowLeftVOffset:0,

                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:0,
                soloArrowRightVOffset:0,

                fullWidth:"on",

                spinner:"spinner2",

                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                onHoverStop: "off",

                shuffle:"off",

                autoHeight:"off",
                forceFullWidth:"off",

                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,

                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0
            });
        return revSliderAPI;
    };
};


        
					
function scrollFunctions() {
	// Fixed header
	//-----------------------------------------------
	headerTopHeight = $(".header-top").outerHeight(),
	headerHeight = $("header.header.fixed").outerHeight();
	$(window).resize(function() {
		if(($(this).scrollTop() < headerTopHeight + headerHeight -5 ) && ($(window).width() > 767)) {
			headerTopHeight = $(".header-top").outerHeight(),
			headerHeight = $("header.header.fixed").outerHeight();
		}
	});

	$(window).scroll(function() {
		if (($(".header.fixed:not(.fixed-before)").length > 0)  && !($(".transparent-header .slideshow").length>0)) {
			if (($(this).scrollTop() > headerTopHeight + headerHeight) && ($(window).width() > 767)) {
				$("body").addClass("fixed-header-on");
				$(".header.fixed:not(.fixed-before)").addClass('animated object-visible fadeInDown');
				$(".header-container").css("paddingBottom", (headerHeight)+"px");
			} else {
				$("body").removeClass("fixed-header-on");
				$(".header-container").css("paddingBottom", (0)+"px");
				$(".header.fixed:not(.fixed-before)").removeClass('animated object-visible fadeInDown');
			}
		} else if ($(".header.fixed:not(.fixed-before)").length > 0) {
			if (($(this).scrollTop() > headerTopHeight + headerHeight) && ($(window).width() > 767)) {
				$("body").addClass("fixed-header-on");
				$(".header.fixed:not(.fixed-before)").addClass('animated object-visible fadeInDown');
			} else {
				$("body").removeClass("fixed-header-on");
				$(".header.fixed:not(.fixed-before)").removeClass('animated object-visible fadeInDown');
			}
		};
	});

	$(window).scroll(function() {
		if (($(".header.fixed.fixed-before").length > 0)  && !($(".transparent-header .slideshow").length>0)) {
			if (($(this).scrollTop() > headerTopHeight) && ($(window).width() > 767)) {
				$("body").addClass("fixed-header-on");
				$(".header.fixed.fixed-before").addClass('object-visible');
				$(".header-container").css("paddingBottom", (headerHeight)+"px");
			} else {
				$("body").removeClass("fixed-header-on");
				$(".header-container").css("paddingBottom", (0)+"px");
				$(".header.fixed.fixed-before").removeClass('object-visible');
			}
		} else if ($(".header.fixed.fixed-before").length > 0) {
			if (($(this).scrollTop() > headerTopHeight) && ($(window).width() > 767)) {
				$("body").addClass("fixed-header-on");
				$(".header.fixed.fixed-before").addClass('object-visible');
			} else {
				$("body").removeClass("fixed-header-on");
				$(".header.fixed.fixed-before").removeClass('object-visible');
			}
		};
	});
}
  





 var currentVideo = false;
function startVideo(selector, mp4, webm, poster, position) {
	if (currentVideo != false) {
		var instance = currentVideo;
		if (instance) {
				instance.getVideoObject();
				instance.destroy();
		}
    }
//return false;
		if($(selector).length>0) {
		
			if (Modernizr.touch) {
				$(selector).vide({
					mp4: mp4,
					webm: webm,
					poster: poster
				}, {
					volume: 1,
					playbackRate: 1,
					muted: true,
					loop: true,
					autoplay: true,
					position: position, // Similar to the CSS `background-position` property.
					posterType: "jpg", // Poster image type. "detect" — auto-detection; "none" — no poster; "jpg", "png", "gif",... - extensions.
					resizing: true
				});
			} else {
				$(selector).vide({
					mp4: mp4,
					webm: webm,
					poster: poster
				}, {
					volume: 1,
					playbackRate: 1,
					muted: true,
					loop: true,
					autoplay: true,
					position: position, // Similar to the CSS `background-position` property.
					posterType: "jpg", // Poster image type. "detect" — auto-detection; "none" — no poster; "jpg", "png", "gif",... - extensions.
					resizing: true
				});
			};
		};
		currentVideo = $(selector).data('vide');
}



/* Payment type chooser functionality */
$(function(){
    $('div.payment-chooser').not('.disabled').find('div.payment-chooser-item').on('click', function(){
        $("#payment_type_val").val($(this).data("type"));
        $("#continue_btn").removeClass('disabled').removeAttr("disabled");
        $(this).parent().parent().parent().find('div.payment-chooser-item').removeClass('selected');
        $(this).addClass('selected');
        $(this).find('input[type="radio"]').prop("checked", true);
            
    });
});


$(function(){
    $('div.payment-chooser').not('.disabled').find('div.payment-chooser-item2').on('click', function(){
        $("#payment_type_val").val($(this).data("type"));
        $("#continue_btn").removeClass('disabled').removeAttr("disabled");
        $(this).parent().parent().parent().find('div.payment-chooser-item2').removeClass('selected');
        $(this).addClass('selected');
        $(this).find('input[type="radio"]').prop("checked", true);
            
    });
});


function updateInvoicePrice(amount) {
	invoice_usd_amount = amount;
	$("#stripe_amount_txt").html("$"+amount+" USD");
	$("#paypal_amount_txt").html("$"+amount+" USD");
}
