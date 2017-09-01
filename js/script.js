$(document).ready(function() {
	function e() {
		var e = navigator.userAgent.toLowerCase();
		return e.indexOf("msie") != -1 && parseInt(e.split("msie")[1])
	}
	var a = function(e, a) {
		$(e).click(function(e) {
			e.stopPropagation(), $(a).slideToggle("fast")
		}), $(a).on("click", function(e) {
			e.stopPropagation()
		}), $(document).on("click", function() {
			$(a).hide()
		})
	};
	a(".header__toggle", ".header-nav"), $(".js-lazyYT").lazyYT(), $(".get-modal").click(function() {
		$(".modal").bPopup({
			closeClass: "icon-times",
			position: ["auto", "auto"],
			follow: [!0, !1],
			positionStyle: "fixed"
		})
	}), $(".calc-block").click(function() {
		var e = $(this).data("calcprice");
		$(".calc-block__el input").change(function() {
			var a = $(".calc-block__el input").length;
			a > 0 ? $(".calc-block__el input").each(function() {
				$(this).is(":checked") && (e += $(this).data("cost"), console.log(e)), $(".calc-block__val  span").text(e)
			}) : $(".calc-block__val  span").text(0)
		})
	}), 9 == e() && ($("body").append('<div class="old-browser"><div class="old-browser-text"> Браузер не поддерживается =(</div></div>'), $("html,body").css("overflow", "hidden")), $(".table_price").stacktable(), $(".client").owlCarousel({
		items: 4,
		responsive: {
			0: {
				items: 3
			},
			768: {
				items: 4
			},
			960: {
				items: 6
			}
		},
		lazyLoad: !0,
		margin: 50,
		autoHeight: !0,
		dots: !1,
		autoplay: !0,
		singleItem: !0,
		nav: !0,
		loop: !0,
		navText: ['<span class="icon-angle-left"></span>', '<span class="icon-angle-right"></span>']
	});
	var n = function(e) {
		$(e).owlCarousel({
			items: 1,
			autoHeight: !0,
			dots: !1,
			autoplay: !0,
			singleItem: !0,
			nav: !1,
			loop: !0,
			navText: ['<span class="icon-angle-left"></span>', '<span class="icon-angle-right"></span>']
		})
	};
	n(".slider"), n(".questions--wraper");
	var s = 300,
		o = !1;
	$(window).scroll(function() {
		var e = $(this).scrollTop();
		if(e > s && (o = !0), e >= s) {
			var a = $(".header").height(),
				n = $(".panel").height();
			$(".header").addClass("shrink"), $(".header").removeClass("shrinkUp"), $(".panel").addClass("shrinkPanel"), $(".panel").removeClass("shrinkPanelUp"), $("body").css({
				paddingTop: a
			}), $(".content__left").css({
				paddingTop: n
			})
		} else $(".header").removeClass("shrink"), $(".panel").removeClass("shrinkPanel"), $("body").css({
			paddingTop: "0px"
		}), $(".content__left").css({
			paddingTop: 0
		});
		e <= s && e >= 100 && o && ($(".header").addClass("shrinkUp"), $(".panel").addClass("shrinkPanelUp"), o = !1), e <= 100 && $(".header").removeClass("shrinkUp")
	});
	var a = function(e, a) {
		$(e).click(function(e) {
			e.stopPropagation(), $(a).slideToggle("fast")
		}), $(a).on("click", function(e) {
			e.stopPropagation()
		}), $(document).on("click", function() {
			$(a).hide()
		})
	};
	$(window).width() < 768 && (a(".header .icon-bars", ".header-nav"), a(".list-service .icon-bars", ".list-service__content")), setInterval(function() {
		$(".panel__get").addClass("shake")
	}, 26e3), setInterval(function() {
		$(".panel__get").removeClass("shake")
	}, 28e3)
});