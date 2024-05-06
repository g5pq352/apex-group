$(window).on("resize", function (){
	if ($(this).width() > 1025) {
		if (window.device == 'mobile') {
			location.reload()
		}
		window.device = 'desktop';
	}else{
		if (window.device == 'desktop') {
			location.reload()
		}
		window.device = 'mobile';
	}
}).trigger("resize")

$.fn.ryderCool = function(option) {
	return this.each(function() {
		var $this = $(this);

		var deFault = {
			hook: 0.9,
			repeat: false,
			enter_check: true,
			leave_check: true,
			count: 0,
			enter() {},
			leave() {}
		};

		var setting = $.extend(deFault, option);

		function ryderScrolling() {
			var scrollTop = $(window).scrollTop(),
				elementOffset = $this.offset().top,
				distance = (elementOffset - scrollTop),
				windowHeight = $(window).height(),
				breakPoint = windowHeight * setting.hook,
				leavePoint = $this.height() - windowHeight * (1 - setting.hook);

			if (distance > breakPoint || distance < -leavePoint) {

				if (setting.count >= 1) {
					setting.enter_check = setting.repeat;
				}

				setting.leave_check && setting.leave($this);
				setting.leave_check = false;

			}else if (distance < breakPoint) {

				setting.enter_check && setting.enter($this);
				setting.enter_check && setting.count++;
				setting.enter_check = false;
				setting.leave_check = true;
			}
		}

		$(window).on("scroll", ryderScrolling).trigger("scroll");
	});
};

class RyderMarquee {
	constructor(el, direct = 0) {
		this.hero = $(el).parent().get(0)
		this.wrapper = el
		this.delta = 0
		this.transform = 0
		this.step = (device == 'mobile') ? 0.4 : 0.8
		this.direct = direct % 2
		this.hover = false

		if (this.direct == 1) {
			this.wrapper.style.transform = `translate3d(-${this.wrapper.getBoundingClientRect().width / 2}px, 0, 0)`;
			this.transform = -this.wrapper.getBoundingClientRect().width / 2
		}

		// if (device != 'mobile') {
		// 	$(el).hover(() => {
		// 		this.hover = true
		// 	}, () => {
		// 		this.hover = false
		// 	})
		// }
	}

	animate() {
		if (!this.hover) {
			this.transform += this.step
		}

		if (this.direct == 1) {
			if (this.transform > 0) {
				this.transform = -this.wrapper.getBoundingClientRect().width / 2;
			}
			this.wrapper.style.transform = `translate3d(${this.transform}px, 0, 0)`;
		} else {
			if (this.transform > this.wrapper.getBoundingClientRect().width / 2) {
				this.transform = 0;
			}
			this.wrapper.style.transform = `translate3d(-${this.transform}px, 0, 0)`;
		}
	}

	render() {
		this.scrollY = $(window).scrollTop()

		const bounding = this.hero.getBoundingClientRect();
		const distance = (window.innerHeight + this.scrollY) - (bounding.top + this.scrollY);
		const percentage = distance / ((window.innerHeight + bounding.height) / 100);

		this.animate();
	}

	create() {
		gsap.ticker.add(this.render.bind(this));
	}
}


$(".footerWrap").each(function (i, el) {
	gsap.from("#footer-sun", {
		scrollTrigger: {
			trigger: el,
			start: "top bottom",
			end: "bottom bottom",
			scrub: 2,
			// markers: true,
		},
		y: `${$(el).height()}px`,
     	ease: "power1.out",
	});
})


$(".marquee").each(function (i, el) {
	var $copy = $(el).contents().clone()
	$(el).append($copy)

	var ryderMarquee = new RyderMarquee(el, i).create()
})

$(".menuOpen").on("click", function(){
	$(this).toggleClass("is-open")
	
	$(this).toggleClass("is-white")

	$(".menuWrap").toggleClass("opacity-0 pointer-events-none")
})

$("#backtotop").on("click", function(){
	gsap.to($(window), 1.2, {
		scrollTo: {
			y: 'body',
		},
		ease:Power2.easeInOut,
		onComplete: function() {}
	})
})




function titleEnter(){
	const Observer = new IntersectionObserver((entries, observer) => {
	    entries.forEach(entry => {
	        if(entry.isIntersecting) {
	       		$("[data-enter]").addClass("is-enter")
	        }
	    });
	}, {});
	if($("[data-enter]")[0]){
		Observer.observe($("[data-enter]")[0]);
	}
}

// $(".menuWrap .close").on("click", function(){
// 	$(".menuWrap").addClass("opacity-0 pointer-events-none");
// })

var _scrollLast = 0
$(window).on("scroll", () => {
	var _scrollTop = $(window).scrollTop()
	var _allBottom = $("body").height() - $(window).height() - 100

	if (_scrollTop < 0 || _scrollTop > _allBottom) {
		return false;
	}

	if (_scrollTop > _scrollLast) {
		// $("#topmenuWrap").addClass("is-hide")
	} else {
		// $("#topmenuWrap").removeClass("is-hide")
	}

	_scrollLast = _scrollTop
})


$(window).on("load", function() {
	titleEnter()
})