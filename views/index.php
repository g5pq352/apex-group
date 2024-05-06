<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body class="is-lock">
	<?php include 'topmenu.php'; ?>
	
	<section class="relative h-screen overflow-hidden" style="background: url('images/index-bg.png') center center / cover;">
		<div class="">
			<div class="index-bg-blue absolute top-0 w-full h-[70vh] bg-gradient-to-b from-[#00669E] opacity-100"></div>

			<div class="index-fixed-logo z-20 is-lock">
				<div class="absolute tf w-full opacity-0 transition-all duration-300 top-logo"><img src="images/top-logo.svg"></div>
				<div class="logo"><img src="images/index-logo.svg"></div>
			</div>

			<div class="absolute tf text-center">
				<div class="slogan-area">
					<div class="h-[55px] overflow-hidden mb-6">
						<span class="inline-block relative top-[55px]"><img src="images/slogan-1.svg"></span>
					</div>
					<div class="h-[35px] overflow-hidden">
						<span class="inline-block relative top-[35px]"><img src="images/slogan-2.svg"></span>
					</div>
				</div>
			</div>

			<div class="absolute tf-x bottom-[20vh] go-scroll">
				<div class="flex items-center writing-vertical w-full">
					<div class="mb-2">Scroll</div>
					<div class=""><svg width="11.43" height="7.72" viewBox="0 0 11.43 7.72">
						<polyline points="11.13 .24 5.85 7.12 .29 .24" style="fill: none; stroke: #4d4d4d; stroke-miterlimit: 10; stroke-width: .75px;"/>
					</svg></div>
				</div>
			</div>
		</div>

		<div class="">
			<div class="absolute top-[92vh] tf-x w-full index-sun"></div>
		</div>
	</section>
	
	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>
</html>

<script>
$("header").hide()
var _animation = gsap.timeline({
    paused: true,
    onStart: () => {
    	$(".index-fixed-logo").addClass("is-small")
    	$(".index-fixed-logo").removeClass("is-lock")
    },
    onComplete: () => {
    	$(".top-logo").removeClass("opacity-0")
    	// $("body").removeClass("is-lock")
    }
}).to(".index-bg-blue", {
	duration: 2,
    opacity: 0.8,
    top: "-30vh",
    onComplete: () => {
    	$(".top-logo").removeClass("opacity-0")
    	$(".index-fixed-logo .logo").addClass("opacity-0")
    }
}).to(".go-scroll", {
    opacity: 0,
}, 0).to(".slogan-area span", {
    duration: 1,
    top: 0,
    ease: "power1.out",
}, "<.3").to(".index-sun", {
    duration: 3,
    top: "-50vh",
    ease: "power1.out",
    onStart: () => {
    	$("header").removeClass("opacity-0")
    },
    onComplete: () => {
    	location.href = './main'
    }
})

$(window).on('mousewheel', function(event) {
    _animation.play()
});

</script>