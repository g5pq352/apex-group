<?php
if (!isset($_SESSION)) {
	session_start();
}

$_SESSION['checkPrev'] = 1;
?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>
		
	<main data-barba="wrapper">

		<!--  -->
		<div class="" data-barba="container" data-barba-namespace="detail">

			<div class="h-screen relative inline-flex">
				<div class="w-[100vw] transition-all duration-1000 fixed h-full">
					<div class="home_hgroup absolute tf-y pl-14">
						<div class="home_siteName relative block overflow-hidden">
							<div class="text-white block overflow-hidden">
								<div class="flex items-center mb-16 block overflow-hidden">
									<!-- <svg width="19" height="40" viewBox="0 0 18.68 39.96">
										<polygon points="18.68 0 0 39.96 3.24 39.96 18.68 6.95 18.68 0" style="fill: #fff;"/>
									</svg> -->
									<span class="font-ch font-medium text-[36px] tracking-wide mx-2 split-index">中陽旭月</span>
									<!-- <svg width="19" height="40" viewBox="0 0 18.68 39.96">
										<polygon points="18.68 0 0 39.96 3.24 39.96 18.68 6.95 18.68 0" style="fill: #fff;"/>
									</svg> -->
									<div class="text-[#979797] ml-6">
										<div class="text-xs font-medium scale-70 -ml-2 split-index">PROJET</div>
										<div class="text-[27px] font-bold leading-none split-index">01</div>
									</div>
								</div>
								<div class="text-[88px] font-medium leading-none text-[#F9F9EF] split-index">
									Above<br>
									Expectation
								</div>
							</div>
							<div class="mask absolute top-0 -left-[100%] w-full h-full bg-white z-10"></div>
						</div>
					</div>
					<div class="absolute bottom-[70px] pl-14">
						<div class="block overflow-hidden">
							<div class="font-ch text-[22px] text-[#CACACA] tracking-normal opacity-0 split">一種執著建築、居住者、環境的極致思維</div>
						</div>
					</div>
					<div class="absolute bottom-[70px] pr-14 right-0">
						<div class="block overflow-hidden">
							<div class="max-w-[470px] font-light text-[#E4E4E4] leading-loose tracking-normal opacity-0 split">中陽森，從一戶一森林發想，錯層內凹跳島式的森大陽台設計出迥異一般垂直森林的全新視野，戶戶朝南從中央公園樹海，到中庭高綠覆綠園，最終收合在每。</div>
						</div>
					</div>

					<div class="absolute w-full h-full left-0 -z-10"><img src="images/classic-bg.png"></div>
					<div class="w-[100vw] transition-all duration-1000 absolute right-[17px] h-full -z-10" id="bg">
						<div class="bg-mask absolute w-full h-full bg-black opacity-0"></div>
						<div class="h-full w-full">
							<div class="h-full" style="background: url(images/is5-pic-1-1.jpg) center center / cover"></div>
						</div>
					</div>
				</div>

				<div class="relative h-screen flex" id="horizontalWrap">
					<article class="shrink-0 w-[100vw]"></article>

					<article class="shrink-0 bg-white relative min-w-[100vw] -ml-px">
						<div class="inline-flex w-full h-full py-[74px] pl-[265px]">
							<div class="shrink-0 max-w-[650px]">
								<div class="text-[#1A1A1A] text-4xl font-bold mb-[140px]">Beyond Standard<br>Architectural Depth</div>
								<div class="font-ch font-medium text-[32px] text-gray-600 mb-5">森浮空中樹，築水引月來</div>
								<div class="text-[13px] text-gray mb-[50px]">The rooftop features a water tree and an aerial garden, where the<br>colorful clouds and starlit sky unfold the most beautiful night scenery.</div>
								<div class="text-[#F2EEE9] text-[75px] font-medium">2024.<span class="text-[47px]">06</span></div>
							</div>
							<div class="pl-[192px]"><img src="images/classic-d-1.jpg" class="max-w-none"></div>
						</div>
					</article>
					<article class="shrink-0 bg-white relative min-w-[100vw] -ml-px">
						<div class="inline-flex w-full h-full items-end pb-[74px] pl-[280px] pr-[425px]">
							<div class="shrink-0 mb-[180px]">
								<div class="text-4xl font-bold text-black-300 mb-[188px]">Information</div>
								<div class="border-l border-black-300 pl-8">
									<div class="mb-9">
										<div class="text-xl font-bold text-black-300">Address</div>
										<div class="font-ch text-gray tracking-normal">302新竹縣竹北市復興三路一段197號</div>
									</div>
									<div class="grid grid-cols-2 gap-x-[58px] gap-y-8">
										<div class="">
											<div class="text-xl font-bold text-black-300">Site Area</div>
											<div class="font-ch text-gray tracking-normal">669 坪</div>
										</div>
										<div class="">
											<div class="text-xl font-bold text-black-300">Ping</div>
											<div class="font-ch text-gray tracking-normal">四房 , 87~132坪</div>
										</div>
										<div class="">
											<div class="text-xl font-bold text-black-300">Type</div>
											<div class="font-ch text-gray tracking-normal">住宅大樓</div>
										</div>
										<div class="">
											<div class="text-xl font-bold text-black-300">Floor</div>
											<div class="font-ch text-gray tracking-normal">地上22層 , 地下3層</div>
										</div>
									</div>
								</div>
							</div>
							<div class="pl-[190px] pr-[122px]"><img src="images/classic-d-2.jpg" class="max-w-none"></div>
							<div class="max-w-[420px] font-ch tracking-normal mb-[244px]">
								<div class="text-[26px] font-medium text-gray-700  mb-10">
									隱於塵囂，森中深藏。 <br>
									究極精工，湛嘆之作。
								</div>
								<div class="text-[17px] text-gray text-justify leading-relaxed">新竹高鐵站前首席，萬坪中央公園首排，獨樹一格，獨領風騷，對位美國矽谷科技創意層峰的慢建築生活風潮，挑高3米6宅中庭院，戶戶朝南面大公園，純粹88坪大砌落成，讓大自然、新科技和諧共舞，創作天地之間自在翱翔的森活綠境。</div>
							</div>
						</div>
					</article>
					<article class="shrink-0 bg-white relative min-w-[100vw] -ml-px">
						<div class="pt-24 h-full">
							<div class="text-[72px] font-bold text-black-300 mb-2">Garllery</div>
							<div class="flex">
								<div class="text-gray-600 font-ch pl-1 mr-6">
			                        <div class="text-[19px]">OUR</div>
			                        <div class="writing-vertical text-[44px] leading-none">LIVING VIBES</div>
			                    </div>
								<div class="min-w-[2094px] pb-20 overflow-hidden">
									<div class="shrink-0 sliderbox-news relative">
										<div class="">
											<ul class="sliderList">
												<li class="mr-6">
													<div class="mb-5"><img src="images/classic-dd-1.jpg" class="max-w-none"></div>
													<div class="font-ch text-lg tracking-normal font-medium mb-2">景觀無限的游泳池</div>
													<div class="">Inﬁnity Pool with Scenic Views</div>
												</li>
												<li class="mr-6">
													<div class="mb-5"><img src="images/classic-dd-2.jpg" class="max-w-none"></div>
													<div class="font-ch text-lg tracking-normal font-medium mb-2">景觀無限的游泳池</div>
													<div class="">Inﬁnity Pool with Scenic Views</div>
												</li>
												<li class="mr-6">
													<div class="mb-5"><img src="images/classic-dd-1.jpg" class="max-w-none"></div>
													<div class="font-ch text-lg tracking-normal font-medium mb-2">景觀無限的游泳池</div>
													<div class="">Inﬁnity Pool with Scenic Views</div>
												</li>
												<li class="mr-6">
													<div class="mb-5"><img src="images/classic-dd-2.jpg" class="max-w-none"></div>
													<div class="font-ch text-lg tracking-normal font-medium mb-2">景觀無限的游泳池</div>
													<div class="">Inﬁnity Pool with Scenic Views</div>
												</li>
												<li class="mr-6">
													<div class="mb-5"><img src="images/classic-dd-1.jpg" class="max-w-none"></div>
													<div class="font-ch text-lg tracking-normal font-medium mb-2">景觀無限的游泳池</div>
													<div class="">Inﬁnity Pool with Scenic Views</div>
												</li>
												<li class="mr-6">
													<div class="mb-5"><img src="images/classic-dd-2.jpg" class="max-w-none"></div>
													<div class="font-ch text-lg tracking-normal font-medium mb-2">景觀無限的游泳池</div>
													<div class="">Inﬁnity Pool with Scenic Views</div>
												</li>
											</ul>
										</div>

										<div class="w-full absolute w-full -bottom-12 left-0" id="progress">
											<div class="w-full relative">
												<div class="w-full h-px bg-[#B3B3B3]"></div>
												<div class="line absolute left-0 -top-[1px] w-[33%] h-[3px] bg-[#B0B0B0]"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="text-center pl-[276px] pr-[300px]">
									<div class="pt-[100px]">
										<div class="text-[17px] text-gray-600 leading-relaxed font-bold tracking-normal mb-[200px]">
											ABOVE PEOPLE'S <br>
											EXPECTATION
										</div>
										<div class=""><a href="javascript:;" class="inline-block"><svg width="138.18" height="25.86" viewBox="0 0 138.18 25.86">
											<polygon points="138.18 25.86 91.62 4.1 91.62 7.87 130.08 25.86 138.18 25.86" style="fill: #888;"/>
											<line x1="107.18" y1="24.95" y2="24.95" style="fill: none; stroke: #888; stroke-miterlimit: 10; stroke-width: 1.5px;"/>
											<g>
											<path d="M.75,0H3.07L12.49,12.01V0h1.95V15.49h-1.15L2.69,2.01V15.49H.75V0Z" style="fill: #333;"/>
											<path d="M17.71,0h13.12V1.06h-10.82V6.66h9.56v1.04h-9.56v6.73h10.82v1.06h-13.12V0Z" style="fill: #333;"/>
											<path d="M43.91,15.49l-5.13-6.55-5.58,6.55h-1.66l6.46-7.57L31.81,0h2.7l4.89,6.26L44.75,0h1.64l-6.2,7.28,6.42,8.21h-2.7Z" style="fill: #333;"/>
											<path d="M53.45,1.06h-6.55V0h15.38V1.06h-6.53V15.49h-2.3V1.06Z" style="fill: #333;"/>
											</g>
										</a></svg></div>
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>

		</div>

		<!--  -->

	</main>
	
	<!-- <?php include 'footer.php'; ?> -->
</body>

<?php include 'script.php'; ?>
<?php include 'changelogo_classic.php'; ?>
</html>

<script>
function horizonHandler(el) {
    let _x = $(el).outerWidth(true) - ($(window).width()*0.6999) - 1


    var _tl = gsap.timeline({
        paused: 0,
    }).to(el, {
        x: -_x,
        ease: 'none'
    })

    if (_x > 0) {
        ScrollTrigger.create({
            toggleActions: "play pause resume reverse",
            trigger: el,
            start: "top 0%",
            end: `+=${_x}`,
            pin: el,
            pinSpace: false,
            scrub: 0.7,
            animation: _tl,
            // markers: true,
            onUpdate: (self) => {

            },
        });
    }
}

var _tl_txt = new SplitText($(".split-index"), {
	type: "chars",
})
var _tl = new SplitText($(".split"), {
	// type: "lines",
	type: "chars",
})
gsap.set(_tl.chars, {
	y: "100%",
	opacity: 0,
})

var _go = gsap.timeline({
    paused: false,
}).to(".bg-mask", {
	opacity: .3,
}, 0).set($(".split"), {
	opacity: 1,
}, 0).to($(".split >div"), {
	duration: .5,
	y: "0%",
	opacity: 1,
	stagger: 0.01,
}, 0)

$(function(){
	var _flick_total = $(".sliderList li").length
	var $carousel = $(".sliderList").flickity({
		"prevNextButtons": false,
		"pageDots": false,
		"wrapAround": true,	
		// "autoPlay": 6000,
		"autoPlay": false,
		"pauseAutoPlayOnHover": false,
		"imagesLoaded": true,
		"cellAlign": "left",
		"selectedAttraction": 0.02,
		"arrowShape": ""
	});

	$carousel.on( 'change.flickity', function( event, index ) {
		gsap.to($("#progress .line"), {
			duration: .5,
			width: `${((index+1)/_flick_total*100)}%`,
		})
	});

	TweenMax.delayedCall(.5, function () {
		horizonHandler('#horizontalWrap');
	})
})
</script>