try{!function(a){a.fn.stellarNav=function(n,i,s){nav=a(this),i=a(window).width();var e=a.extend({theme:"plain",breakpoint:768,phoneBtn:!1,locationBtn:!1,sticky:!1,position:"static",showArrows:!0,closeBtn:!1,scrollbarFix:!1},n);return this.each(function(){function n(){var n=window.innerWidth;s>=n?(d(),nav.addClass("mobile"),nav.removeClass("desktop"),!nav.hasClass("active")&&nav.find("ul:first").is(":visible")&&nav.find("ul:first").hide()):(nav.addClass("desktop"),nav.removeClass("mobile"),nav.hasClass("active")&&nav.removeClass("active"),!nav.hasClass("active")&&nav.find("ul:first").is(":hidden")&&nav.find("ul:first").show(),a("li.open").removeClass("open").find("ul:visible").hide(),d(),v())}if(("light"==e.theme||"dark"==e.theme)&&nav.addClass(e.theme),e.breakpoint&&(s=e.breakpoint),e.phoneBtn&&e.locationBtn)var t="third";else if(e.phoneBtn||e.locationBtn)var t="half";else var t="full";if(nav.prepend('<a href="#" class="menu-toggle '+t+'"><i class="fa fa-bars"></i> Menu</a>'),e.phoneBtn&&"right"!=e.position&&"left"!=e.position){var l='<a href="tel:'+e.phoneBtn+'" class="call-btn-mobile '+t+'"><i class="fa fa-phone"></i> <span>Call us</span></a>';nav.find("a.menu-toggle").after(l)}if(e.locationBtn&&"right"!=e.position&&"left"!=e.position){var l='<a href="'+e.locationBtn+'" class="location-btn-mobile '+t+'" target="_blank"><i class="fa fa-map-marker"></i> <span>Location</span></a>';nav.find("a.menu-toggle").after(l)}if(e.sticky&&(navPos=nav.offset().top,i>=s&&a(window).bind("scroll",function(){a(window).scrollTop()>navPos?nav.addClass("fixed"):nav.removeClass("fixed")})),"top"==e.position&&nav.addClass("top"),"left"==e.position||"right"==e.position){var o='<a href="#" class="close-menu '+t+'"><i class="fa fa-close"></i> <span>Close</span></a>',f='<a href="tel:'+e.phoneBtn+'" class="call-btn-mobile '+t+'"><i class="fa fa-phone"></i></a>',r='<a href="'+e.locationBtn+'" class="location-btn-mobile '+t+'" target="_blank"><i class="fa fa-map-marker"></i></a>';nav.find("ul:first").prepend(o),e.locationBtn&&nav.find("ul:first").prepend(r),e.phoneBtn&&nav.find("ul:first").prepend(f)}"right"==e.position&&nav.addClass("right"),"left"==e.position&&nav.addClass("left"),e.showArrows||nav.addClass("hide-arrows"),e.closeBtn&&"right"!=e.position&&"left"!=e.position&&nav.find("ul:first").append('<li><a href="#" class="close-menu"><i class="fa fa-close"></i> Close Menu</a></li>'),e.scrollbarFix&&a("body").addClass("stellarnav-noscroll-x"),a(".menu-toggle").on("click",function(n){n.preventDefault(),"left"==e.position||"right"==e.position?(nav.find("ul:first").stop(!0,!0).fadeToggle(250),nav.toggleClass("active"),nav.hasClass("active")&&nav.hasClass("mobile")&&a(document).on("click",function(n){nav.hasClass("mobile")&&(a(n.target).closest(nav).length||(nav.find("ul:first").stop(!0,!0).fadeOut(250),nav.removeClass("active")))})):(nav.find("ul:first").stop(!0,!0).slideToggle(250),nav.toggleClass("active"))}),a(".close-menu").click(function(){nav.removeClass("active"),"left"==e.position||"right"==e.position?nav.find("ul:first").stop(!0,!0).fadeToggle(250):nav.find("ul:first").stop(!0,!0).slideUp(250).toggleClass("active")}),nav.find("li a").each(function(){a(this).next().length>0&&a(this).parent("li").addClass("has-sub").append('<a class="dd-toggle" href="#"><i class="fa fa-plus"></i></a>')}),nav.find("li .dd-toggle").on("click",function(n){n.preventDefault(),a(this).parent("li").children("ul").stop(!0,!0).slideToggle(250),a(this).parent("li").toggleClass("open")});var d=function(){nav.find("li").unbind("mouseenter"),nav.find("li").unbind("mouseleave")},v=function(){nav.find("li").on("mouseenter",function(){a(this).addClass("hover"),a(this).children("ul").stop(!0,!0).slideDown(250)}),nav.find("li").on("mouseleave",function(){a(this).removeClass("hover"),a(this).children("ul").stop(!0,!0).slideUp(250)})};n(),a(window).on("resize",function(){n()})})}}(jQuery);}catch(e){}