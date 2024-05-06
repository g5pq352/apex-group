<?php
if (!isset($_SESSION)) {
	session_start();
}

if($_SESSION['checkPrev'] != '' && $_SESSION['checkPrev'] != 0){
	$_SESSION['checkPrev'] = 0;

	header('Location: classic.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body class="is-lock">
	<?php include 'topmenu.php'; ?>

	<div class="h-screen w-full fixed overflow-hidden z-90" id="classic-start">
		<div class="absolute tf z-10"><img src="images/classic-slogan.svg"></div>
		<div class="absolute tf w-full h-full bg-black opacity-30"></div>
		<ul class="relative h-full inline-flex" id="startList">
			<li class="absolute w-[100vw] h-full overflow-hidden"><div class="h-full" style="background: url(images/classic-ani-1.jpg) center center / cover"></div></li>
			<li class="absolute w-[100vw] h-full overflow-hidden"><div class="h-full" style="background: url(images/classic-ani-2.jpg) center center / cover"></div></li>
			<li class="absolute w-[100vw] h-full overflow-hidden"><div class="h-full" style="background: url(images/classic-ani-3.jpg) center center / cover"></div></li>
			<li class="absolute w-[100vw] h-full overflow-hidden"><div class="h-full" style="background: url(images/classic-ani-1.jpg) center center / cover"></div></li>
			<li class="absolute w-[100vw] h-full overflow-hidden"><div class="h-full" style="background: url(images/classic-ani-2.jpg) center center / cover"></div></li>
			<li class="absolute w-[100vw] h-full overflow-hidden"><div class="h-full" style="background: url(images/classic-ani-3.jpg) center center / cover"></div></li>
			<li class="absolute w-[100vw] h-full overflow-hidden"><div class="h-full" style="background: url(images/classic-ani-1.jpg) center center / cover"></div></li>
			<li class="absolute w-[100vw] h-full overflow-hidden"><div class="h-full" style="background: url(images/classic-ani-2.jpg) center center / cover"></div></li>
		</ul>
	</div>

	
	<main data-barba="wrapper">

		<!--  -->

		<div class="absolute h-screen w-full pr-[17px]" data-barba="container" data-barba-namespace="home">

			<div class="h-screen relative flex">
				<div class="black-bg absolute w-full h-full left-0 -z-10 opacity-0 transition-all duration-1000"><img src="images/classic-bg.png" class="img-cover"></div>
				<div class="house absolute tf z-70 transition-all duration-500 opacity-0">
					<img src="images/classic-house-1.svg" class="opacity-0">
					<ul class="absolute tf w-full h-full" id="houseList">
						<li class="absolute tf w-full h-full transition-all duration-500"><img src="images/classic-house-1.svg"></li>
						<li class="absolute tf w-full h-full transition-all duration-500 opacity-0"><img src="images/classic-house-1.svg"></li>
						<li class="absolute tf w-full h-full transition-all duration-500 opacity-0"><img src="images/classic-house-1.svg"></li>
					</ul>
				</div>
				<div class="w-[50vw] transition-all duration-1000 relative z-30">		
					<div class="pics-mask absolute top-0 -left-[100%] w-[50vw] h-full bg-white"></div>

					<div class="home_hgroup absolute tf-y pl-14">
						<div class="home_siteName opacity-0 pointer-events-none"><span>
							<div class="text-black-300">
								<div class="flex items-center mb-16 block overflow-hidden">
									<svg width="19" height="40" viewBox="0 0 18.68 39.96">
										<polygon points="18.68 0 0 39.96 3.24 39.96 18.68 6.95 18.68 0" style="fill: #666;"/>
									</svg>
									<span class="font-ch font-medium text-[36px] tracking-wide mx-2">中陽旭月</span>
									<svg width="19" height="40" viewBox="0 0 18.68 39.96">
										<polygon points="18.68 0 0 39.96 3.24 39.96 18.68 6.95 18.68 0" style="fill: #666;"/>
									</svg>
								</div>
								<div class="text-[88px] font-medium leading-none">
									Above<br>
									Expectation
								</div>
							</div>
						</span></div>
						<div class="home_titles absolute tf-y w-full h-full">
							<div class="home_title absolute block overflow-hidden">
								<div class="text-black-300 block overflow-hidden">
									<div class="flex items-center mb-16 block overflow-hidden">
										<!-- <span><svg width="19" height="40" viewBox="0 0 18.68 39.96">
											<polygon points="18.68 0 0 39.96 3.24 39.96 18.68 6.95 18.68 0" style="fill: #666;"/>
										</svg></span> -->
										<span class="font-ch font-medium text-[36px] tracking-wide mx-2 split">中陽旭月</span>
										<!-- <span><svg width="19" height="40" viewBox="0 0 18.68 39.96">
											<polygon points="18.68 0 0 39.96 3.24 39.96 18.68 6.95 18.68 0" style="fill: #666;"/>
										</svg></span> -->
									</div>
									<div class="text-[88px] font-medium leading-none block overflow-hidden split">
										Above<br>
										Expectation
									</div>
								</div>
								<div class="mask absolute top-0 -left-[100%] w-full h-full bg-white z-10"></div>
							</div>
							<div class="home_title absolute block overflow-hidden">
								<div class="text-black-300">
									<div class="flex items-center mb-16 block overflow-hidden">
										<!-- <span><svg width="19" height="40" viewBox="0 0 18.68 39.96">
											<polygon points="18.68 0 0 39.96 3.24 39.96 18.68 6.95 18.68 0" style="fill: #666;"/>
										</svg></span> -->
										<span class="font-ch font-medium text-[36px] tracking-wide mx-2 split">中陽旭月</span>
										<!-- <span><svg width="19" height="40" viewBox="0 0 18.68 39.96">
											<polygon points="18.68 0 0 39.96 3.24 39.96 18.68 6.95 18.68 0" style="fill: #666;"/>
										</svg></span> -->
									</div>
									<div class="text-[88px] font-medium leading-none block overflow-hidden split">
										Above<br>
										Expectation
									</div>
								</div>
								<div class="mask absolute top-0 -left-[100%] w-full h-full bg-white z-10"></div>
							</div>
							<div class="home_title absolute block overflow-hidden">
								<div class="text-black-300">
									<div class="flex items-center mb-16 block overflow-hidden">
										<!-- <span><svg width="19" height="40" viewBox="0 0 18.68 39.96">
											<polygon points="18.68 0 0 39.96 3.24 39.96 18.68 6.95 18.68 0" style="fill: #666;"/>
										</svg></span> -->
										<span class="font-ch font-medium text-[36px] tracking-wide mx-2 split">中陽旭月</span>
										<!-- <span><svg width="19" height="40" viewBox="0 0 18.68 39.96">
											<polygon points="18.68 0 0 39.96 3.24 39.96 18.68 6.95 18.68 0" style="fill: #666;"/>
										</svg></span> -->
									</div>
									<div class="text-[88px] font-medium leading-none block overflow-hidden split">
										Above<br>
										Expectation
									</div>
								</div>
								<div class="mask absolute top-0 -left-[100%] w-full h-full bg-white z-10"></div>
							</div>
						</div>
					</div>
					<div class="absolute bottom-[70px] pl-14 overflow-hidden">
						<div class="home_siteNote opacity-0 pointer-events-none">
							<div class="home_note">
								<div class="text-gray-600">
									<div class="font-ch font-medium text-[22px] tracking-normal">晝迎序．夜引月</div>
									<div class="text-[17px] text-[#888888] flex"><span class="font-medium">2024 , Taichung</span> ／ <span class="font-ch">商辦大樓</span></div>
								</div>
							</div>
						</div>
						<div class="home_notes absolute tf-y w-full h-full z-10">
							<div class="home_note absolute block overflow-hidden">
								<div class="text-gray-600">
									<div class="font-ch font-medium text-[22px] tracking-normal split">晝迎序．夜引月</div>
									<div class="text-[17px] text-[#888888] flex"><span class="font-medium split">2024 , Taichung</span> <span class="split">／</span> <span class="font-ch split">商辦大樓</span></div>
								</div>
								<div class="mask absolute top-0 -left-[100%] w-full h-full bg-white z-10"></div>
							</div>
							<div class="home_note absolute block overflow-hidden">
								<div class="text-gray-600">
									<div class="font-ch font-medium text-[22px] tracking-normal split">晝迎序．夜引月</div>
									<div class="text-[17px] text-[#888888] flex"><span class="font-medium split">2024 , Taichung</span> <span class="split">／</span> <span class="font-ch split">商辦大樓</span></div>
								</div>
								<div class="mask absolute top-0 -left-[100%] w-full h-full bg-white z-10"></div>
							</div>
							<div class="home_note absolute block overflow-hidden">
								<div class="text-gray-600">
									<div class="font-ch font-medium text-[22px] tracking-normal split">晝迎序．夜引月</div>
									<div class="text-[17px] text-[#888888] flex"><span class="font-medium split">2024 , Taichung</span> <span class="split">／</span> <span class="font-ch split">商辦大樓</span></div>
								</div>
								<div class="mask absolute top-0 -left-[100%] w-full h-full bg-white z-10"></div>
							</div>

							<div class="mask absolute top-[1px] -left-[100%] w-full h-full bg-white z-10"></div>
						</div>

						<div class="min-w-[742px] -mt-4 transition-all duration-500" id="progress">
							<div class="flex items-center justify-end font-medium mb-4">
								<div class="text-[#888888] text-xs">03</div>
								<div class="inline-block w-3 h-px bg-[#888888] mx-1"></div>
								<div class="now-number text-xl text-black-300 -mt-1">01</div>
							</div>	
							<div class="w-full relative">
								<div class="w-full h-px bg-[#B3B3B3]"></div>
								<div class="line absolute left-0 -top-[1px] w-[33%] h-[3px] bg-[#B0B0B0]"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="w-[50vw] relative">
					<div class="h-full relative" id="picsList">
						<div class="item w-[50vw] absolute right-0 h-full overflow-hidden z-20"><a href="javascript:;">
							<div class="pic h-full" style="background: url(images/classic-item-1.jpg) center center / cover"></div>
						</a></div>
						<div class="item w-[50vw] absolute right-0 h-full overflow-hidden z-10"><a href="javascript:;">
							<div class="pic h-full" style="background: url(images/is5-pic-1-1.jpg) center center / cover"></div>
						</a></div>
						<div class="item w-[50vw] absolute right-0 h-full overflow-hidden z-0"><a href="javascript:;">
							<div class="pic h-full" style="background: url(images/is5-bg-1.jpg) center center / cover"></div>
						</a></div>
					</div>
					<div class="w-[50vw] absolute top-0 right-0 h-full overflow-hidden -z-10"><a href="javascript:;">
						<div class="pic h-full" style="background: url(images/classic-item-1.jpg) center center / cover"></div>
					</a></div>
				</div>
			</div>

		</div>

		<!--  -->

	</main>

</body>

<?php include 'script.php'; ?>
<?php include 'changelogo_classic.php'; ?>
</html>

<script>
class classicSlider {
	constructor(el, setting) {
		this.$titles = $(".home_titles").find(".home_title")
		this.$notes = $(".home_notes").find(".home_note")
		this.$pics = $("#picsList >div")
		this._total = $(".home_titles >div").length
		this._now = 0
		this._prev = -1
		this._next = -1
		this._index = 0
		this._changing = false
		this.autoplay = false;


		Object.assign(this, setting)

		this.init()
	}
	init() {

		var _tl = new SplitText($(".split"), {
			// type: "lines",
			type: "chars",
		})
		gsap.set(_tl.chars, {
			y: "100%",
			opacity: 0,
		})

		// first play
		gsap.set($(this.$titles[this._now]).find(".split >div"), {
			y: "0%",
			opacity: 1,
		})
		gsap.set($(this.$notes[this._now]).find(".split >div"), {
			y: "0%",
			opacity: 1,
		})


		addEventListener("wheel", (event) => {
			if (event.deltaY > 0) {
				// 向上滚
				if(this._changing){
					return false
				}
				$slider.next()
			} else if (event.deltaY < 0) {
				// 向下滚
				if(this._changing){
					return false
				}
				$slider.prev()
			}
		});

		$("#picsList >div a").on("click", (e) => {
			this._changing = true

			this._index = $(e.target).closest(".item").index()

			this.homeLeave()

		// 	$(".pics-mask").hide()

		// 	var _index = $(e.target).closest(".item").index();

		// 	gsap.to($(this.$titles[this._now]).find(".split >div"), {
		// 		duration: .5,
		// 		y: "-100%",
		// 		opacity: 0,
		// 		stagger: 0.01,
		// 	})
		// 	gsap.to($(this.$notes[this._now]).find(".split >div"), {
		// 		duration: .5,
		// 		y: "-100%",
		// 		opacity: 0,
		// 		stagger: 0.01,
		// 		onComplete: () =>{
		// 			$(this.$titles[_index]).find(".split").addClass("text-white")
		// 			$(this.$notes[_index]).find(".split").addClass("text-white")

		// 			$("#progress").addClass("opacity-0")

		// 			gsap.fromTo($(this.$titles[_index]).find(".split >div"), {
		// 				y: "100%",
		// 				opacity: 0,
		// 			}, {
		// 				duration: .5,
		// 				y: "0%",
		// 				opacity: 1,
		// 				stagger: 0.01,
		// 			})
		// 		}
		// 	})

		// 	$(".house").addClass("opacity-0")
		// 	$(".black-bg").removeClass("opacity-0")

		// 	var _go = gsap.timeline({
		// 	    paused: false,
		// 	}).to($("#picsList >div").eq(_index), 1.5, {
		// 		delay: .2,
		// 		width: "100vw",
		// 		ease: Power4.easeInOut,
		// 		onComplete: () =>{
		// 			// window.history.pushState(null, null, newUrl);
		// 			// location.reload();
		// 			// location.href = newUrl
		//     	}
		// 	})
		})
	}
	prev() {
		this._changing = true

		gsap.to($(this.$titles[this._now]).find(".split >div"), {
			duration: .5,
			y: "100%",
			opacity: 0,
			stagger: 0.01,
		})
		gsap.to($(this.$notes[this._now]).find(".split >div"), {
			duration: .5,
			y: "100%",
			opacity: 0,
			stagger: 0.01,
		})

		this._prev = (this._now - 1 + this._total) % this._total
		this._now = this._prev

		$("#houseList li").eq(this._now).removeClass("opacity-0").siblings().addClass("opacity-0")

		gsap.to($("#progress .line"), {
			duration: .5,
			width: `${((this._now+1)/this._total*100)}%`,
		})

		if(this._now == this._total-1){
			gsap.set($(this.$pics), {
				x: "-100%",
			})
			gsap.set($(this.$pics).find(".pic"), {
				x: "100%",
			})

			gsap.set($(this.$pics[this._now]), {
				x: "0%",
			})
			gsap.set($(this.$pics[this._now]).find(".pic"), {
				x: "0%",
			})
		}

		gsap.fromTo($(this.$pics[this._now]), {
			x: "-100%",
		}, {
			duration: 1,
			x: "0%",
			ease: Power4.easeInOut,
		})
		gsap.fromTo($(this.$pics[this._now]).find(".pic"), {
			x: "100%",
		}, {
			duration: 1,
			x: "0%",
			ease: Power4.easeInOut,
		})

		gsap.fromTo($(this.$titles[this._now]).find(".split >div"), {
			y: "-100%",
			opacity: 0,
		}, {
			delay: .5,
			duration: .5,
			y: "0%",
			opacity: 1,
			stagger: 0.01,
		})
		gsap.fromTo($(this.$notes[this._now]).find(".split >div"), {
			y: "-100%",
			opacity: 0,
		}, {
			delay: .5,
			duration: .5,
			y: "0%",
			opacity: 1,
			stagger: 0.01,
			onComplete: () =>{
				this._changing = false
		    }
		})

		$(".now-number").text('0'+(this._now+1))
	}
	next() {
		this._changing = true

		gsap.to($(this.$titles[this._now]).find(".split >div"), {
			duration: .5,
			y: "-100%",
			opacity: 0,
			stagger: 0.01,
		})
		gsap.to($(this.$notes[this._now]).find(".split >div"), {
			duration: .5,
			y: "-100%",
			opacity: 0,
			stagger: 0.01,
		})

		gsap.fromTo($(this.$pics[this._now]), {
			x: "0%",
		}, {
			duration: 1,
			x: "-100%",
			ease: Power4.easeInOut,
		})
		gsap.fromTo($(this.$pics[this._now]).find(".pic"), {
			x: "0%",
		}, {
			duration: 1,
			x: "100%",
			ease: Power4.easeInOut,
		})

		this._next = (this._now + 1 + this._total) % this._total
		this._now = this._next

		$("#houseList li").eq(this._now).removeClass("opacity-0").siblings().addClass("opacity-0")

		gsap.to($("#progress .line"), {
			duration: .5,
			width: `${((this._now+1)/this._total*100)}%`,
		})
		

		gsap.fromTo($(this.$titles[this._now]).find(".split >div"), {
			y: "100%",
			opacity: 0,
		}, {
			delay: .5,
			duration: .5,
			y: "0%",
			opacity: 1,
			stagger: 0.01,
		})
		gsap.fromTo($(this.$notes[this._now]).find(".split >div"), {
			y: "100%",
			opacity: 0,
		}, {
			delay: .5,
			duration: .5,
			y: "0%",
			opacity: 1,
			stagger: 0.01,
			onComplete: () =>{
				if(this._now == 0){
					gsap.set($(this.$pics), {
						x: "0%",
					})
					gsap.set($(this.$pics).find(".pic"), {
						x: "0%",
					})
				}

				this._changing = false
		    }
		})

		$(".now-number").text('0'+(this._now+1))
	}
	homeLeave() {
		$(".pics-mask").hide()

		gsap.to($(this.$titles[this._now]).find(".split >div"), {
			duration: .5,
			y: "-100%",
			opacity: 0,
			stagger: 0.01,
		})
		gsap.to($(this.$notes[this._now]).find(".split >div"), {
			duration: .5,
			y: "-100%",
			opacity: 0,
			stagger: 0.01,
			onComplete: () =>{
				$(this.$titles[this._index]).find(".split").addClass("text-white")
				$(this.$notes[this._index]).find(".split").addClass("text-white")

				$("#progress").addClass("opacity-0")

				gsap.fromTo($(this.$titles[this._index]).find(".split >div"), {
					y: "100%",
					opacity: 0,
				}, {
					duration: .5,
					y: "0%",
					opacity: 1,
					stagger: 0.01,
				})
			}
		})

		$(".house").addClass("opacity-0")
		$(".black-bg").removeClass("opacity-0")

		var _go = gsap.timeline({
		    paused: false,
		}).to($("#picsList >div").eq(this._index), 1.5, {
			delay: .2,
			width: "100vw",
			ease: Power4.easeInOut,
			onComplete: () =>{
				var newUrl = 'http://127.0.0.1/apex-group/' + `classic_detail${this._index}.php`;
				location.href = newUrl
				// window.history.pushState(null, null, newUrl);
				// location.reload();
			}
		})
	}
	// detailEnter() {
	// 	var _tl_txt = new SplitText($(".split-index"), {
	// 		type: "chars",
	// 	})
	// 	var _tl = new SplitText($(".split"), {
	// 		// type: "lines",
	// 		type: "chars",
	// 	})
	// 	gsap.set(_tl.chars, {
	// 		y: "100%",
	// 		opacity: 0,
	// 	})

	// 	var _go = gsap.timeline({
	// 	    paused: false,
	// 	}).to(".bg-mask", {
	// 		opacity: .3,
	// 	}, 0).set($(".split"), {
	// 		opacity: 1,
	// 	}, 0).to($(".split >div"), {
	// 		duration: .5,
	// 		y: "0%",
	// 		opacity: 1,
	// 		stagger: 0.01,
	// 	}, 0)

	// 	gsap.delayedCall(1, function () {
	// 		let _x = $("#horizontalWrap").outerWidth(true) - ($(window).width()*0.6999) - 1

	// 	    var _tl = gsap.timeline({
	// 	        paused: 0,
	// 	    }).to("#horizontalWrap", {
	// 	        x: -_x,
	// 	        ease: 'none'
	// 	    })

	// 	    if (_x > 0) {
	// 	        ScrollTrigger.create({
	// 	            toggleActions: "play pause resume reverse",
	// 	            trigger: "#horizontalWrap",
	// 	            start: "top 0%",
	// 	            end: `+=${_x}`,
	// 	            pin: "#horizontalWrap",
	// 	            pinSpace: false,
	// 	            scrub: 0.7,
	// 	            animation: _tl,
	// 	            // markers: true,
	// 	        });
	// 	    }

	// 	    var _flick_total = $(".sliderList li").length
	// 		var $carousel = $(".sliderList").flickity({
	// 			"prevNextButtons": false,
	// 			"pageDots": false,
	// 			"wrapAround": true,	
	// 			// "autoPlay": 6000,
	// 			"autoPlay": false,
	// 			"pauseAutoPlayOnHover": false,
	// 			"imagesLoaded": true,
	// 			"cellAlign": "left",
	// 			"selectedAttraction": 0.02,
	// 			"arrowShape": ""
	// 		});

	// 		$carousel.on( 'change.flickity', function( event, index ) {
	// 			gsap.to($("#progress .line"), {
	// 				duration: .5,
	// 				width: `${((index+1)/_flick_total*100)}%`,
	// 			})
	// 		});
	// 	})
	// }
	// detailLeave() {
	// 	var _go = gsap.timeline({
	// 	    paused: false,
	// 	}).to($("#picsList >div").eq(this._index), 1.5, {
	// 		delay: .2,
	// 		width: "50vw",
	// 		ease: Power4.easeInOut,
	// 	})
	// }
}


$("body").addClass("is-lock")
$("#topmenuWrap, .menuOpen").addClass("is-hide")

gsap.set($(".home_titles .home_title").eq(0).find(".mask"), {
	left: "0",
})
gsap.set($(".home_notes >.mask"), {
	left: "0",
})
gsap.set($(".pics-mask"), {
	left: "calc(100% - 9px)",
})
gsap.set("#classic-start", {
	scale: 1,
	opacity: 1,
})

const _start_time = 6
var _start = gsap.timeline({
    paused: true,
}).to("#classic-start", _start_time, {
	scale: 0.05,
	ease: "power2.in",
}).to("#classic-start", 1, {
	opacity: 0,
	ease: "power2.in",
}, `<${_start_time-1}`)

var _inin = gsap.timeline({
    paused: true,
    onComplete: () =>{
    	$(".house").removeClass("opacity-0")
    }
}).to($(".home_titles .home_title").eq(0).find(".mask"), 1, {
	left: "100%",
	ease: Power4.easeInOut,
	onComplete: () =>{
    	gsap.set($(".home_titles .home_title").eq(0).find(".mask"), {
			left: "100%",
		})
    }
}, 0).to($(".home_notes >.mask"), 1, {
	left: "100%",
	ease: Power4.easeInOut,
	onComplete: () =>{
		gsap.set($(".home_notes >.mask"), {
			left: "100%",
		})
	}
}, 0).to($(".pics-mask"), 1, {
	left: "calc(0% - 17px)",
	ease: Power4.easeInOut,
}, 0)

var _start_push = gsap.timeline({
	paused: true,
	onStart: () => {
		_start.restart()
	},
	onComplete: () =>{
		$("#topmenuWrap, .menuOpen").removeClass("is-hide")
		_inin.restart()
	}
}).fromTo($("#startList >li").not(":eq(0)"), {
	clipPath: 'polygon(125% 0%, 100% 0%, 100% 100%, 100% 100%)',
}, {
	delay: 1,
	clipPath: 'polygon(-5% 0%, 100% 0%, 100% 100%, -20% 100%)',
	ease: "power1.inOut",
	stagger: {
	    each:  _start_time / $("#startList >li").length * 0.8,
	}
})
_start_push.restart()

$slider = new classicSlider({})


// barba.init({
// 	transitions: [{
// 		from: {
// 			namespace: ['home'],
// 		},
// 		to: {
// 			namespace: ['detail'],
// 		},
// 		sync: true,
// 		async leave(data) {
// 			const done = this.async();

// 			gsap.set(data.next.container, {
//             	opacity: 0
//             });

// 			$slider.homeLeave()

// 			gsap.delayedCall(1.4, function () {
// 				gsap.set(data.next.container, {
// 	            	opacity: 1,
// 	            });

// 	            $slider.detailEnter()
// 				$("body").removeClass("is-lock")
//         		done()
// 			})
// 		},
// 		async enter(data) {
// 		}
// 	}],
// 	views: [{
// 		namespace: 'home',
// 		beforeEnter(data) {
// 			// $("body").addClass("is-lock")
// 			// $("#topmenuWrap, .menuOpen").addClass("is-hide")

// 			// gsap.set($(".home_titles .home_title").eq(0).find(".mask"), {
// 			// 	left: "0",
// 			// })
// 			// gsap.set($(".home_notes >.mask"), {
// 			// 	left: "0",
// 			// })
// 			// gsap.set($(".pics-mask"), {
// 			// 	left: "calc(100% - 9px)",
// 			// })
// 			// gsap.set("#classic-start", {
// 			// 	scale: 1,
// 			// 	opacity: 1,
// 			// })

// 			// const _start_time = 6
// 			// var _start = gsap.timeline({
// 			//     paused: true,
// 			// }).to("#classic-start", _start_time, {
// 			// 	scale: 0.05,
// 			// 	ease: "power2.in",
// 			// }).to("#classic-start", 1, {
// 			// 	opacity: 0,
// 			// 	ease: "power2.in",
// 			// }, `<${_start_time-1}`)

// 			// var _inin = gsap.timeline({
// 			//     paused: true,
// 			//     onComplete: () =>{
// 			//     	$(".house").removeClass("opacity-0")
// 			//     }
// 			// }).to($(".home_titles .home_title").eq(0).find(".mask"), 1, {
// 			// 	left: "100%",
// 			// 	ease: Power4.easeInOut,
// 			// 	onComplete: () =>{
// 			//     	gsap.set($(".home_titles .home_title").eq(0).find(".mask"), {
// 			// 			left: "100%",
// 			// 		})
// 			//     }
// 			// }, 0).to($(".home_notes >.mask"), 1, {
// 			// 	left: "100%",
// 			// 	ease: Power4.easeInOut,
// 			// 	onComplete: () =>{
// 			// 		gsap.set($(".home_notes >.mask"), {
// 			// 			left: "100%",
// 			// 		})
// 			// 	}
// 			// }, 0).to($(".pics-mask"), 1, {
// 			// 	left: "calc(0% - 17px)",
// 			// 	ease: Power4.easeInOut,
// 			// }, 0)

// 			// var _start_push = gsap.timeline({
// 			// 	paused: true,
// 			// 	onStart: () => {
// 			// 		_start.restart()
// 			// 	},
// 			// 	onComplete: () =>{
// 			// 		$("#topmenuWrap, .menuOpen").removeClass("is-hide")
// 			// 		_inin.restart()
// 			// 	}
// 			// }).fromTo($("#startList >li").not(":eq(0)"), {
// 			// 	clipPath: 'polygon(125% 0%, 100% 0%, 100% 100%, 100% 100%)',
// 			// }, {
// 			// 	delay: 1,
// 			// 	clipPath: 'polygon(-5% 0%, 100% 0%, 100% 100%, -20% 100%)',
// 			// 	ease: "power1.inOut",
// 			// 	stagger: {
// 			// 	    each:  _start_time / $("#startList >li").length * 0.8,
// 			// 	}
// 			// })
// 			// _start_push.restart()

// 			// $slider = new classicSlider({})
// 		},
// 		// beforeLeave(data) {
// 		// 	console.log(1)
// 		// },
// 		// beforeEnter(data) {
// 		// 	onsole.log(2)
// 		// },
// 		// afterLeave(data) {
// 		// 	console.log(3)
// 		// },
// 		// afterEnter(data) {

// 		// },
// 		// afterLeave(data) {
			
// 		// }
// 	}, {
// 		namespace: 'detail',
// 		afterEnter(data) {
			
// 		},
// 		afterLeave(data) {
			
// 		}
// 	}, {
// 		namespace: 'main',
// 		afterEnter(data) {
// 			return gsap.from(data.next.container, {
//               opacity: 0
//             });
// 		},
// 		afterLeave(data) {
// 			return gsap.to(data.current.container, {
//               opacity: 0
//             });
// 		}
// 	}],
// });
</script>