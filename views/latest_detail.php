<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="mt-[290px] mb-[55px]">
		<div class="mb-36 text-center group" data-enter="">
			<div class="flex items-center justify-center -mb-5 delay-1000 transition-all duration-500 opacity-0 group-[.is-enter]:opacity-100">
				<svg width="23.35" height="49.95" viewBox="0 0 23.35 49.95">
					<polygon points="23.35 0 0 49.95 4.05 49.95 23.35 8.69 23.35 0" style="fill: #666;"/>
				</svg>
				<span class="font-ch font-medium text-gray-700 text-5xl tracking-normal mx-2">中陽森</span>
				<svg width="23.35" height="49.95" viewBox="0 0 23.35 49.95">
					<polygon points="23.35 0 0 49.95 4.05 49.95 23.35 8.69 23.35 0" style="fill: #666;"/>
				</svg>
			</div>
			<div class="relative inline-block group">
				<div class="absolute inset-0 after:absolute after:inset-x-0 after:bottom-[14px] after:top-[30px] after:bg-black-300 after:-z-10 group-[.is-enter]:animate-clip lg:after:top-[15px] lg:after:bottom-[10px]">
					<div class="font-en font-semibold text-7xl leading-normal text-white">Full House</div>
				</div>
				<div class="font-en font-semibold text-7xl leading-normal text-black-300 delay-500 opacity-0 group-[.is-enter]:opacity-100">Full House</div>
			</div>
		</div>
	</div>

	<div class="h-screen">
		<div class="h-screen w-full bg-no-repeat bg-fixed bg-center bg-cover lg:bg-scroll lg:bg-cover lg:fixed lg:w-full lg:h-screen lg:top-0 lg:left-0" style="background-image: url('images/news-1-1.jpg')"></div>
	</div>

	<div class="max-w-[1400px] mx-auto flex font-ch my-52">
		<div class="font-bold text-[48px] tracking-wider text-gray-700 shrink-0 mr-[226px]">
			大樹升空 x 宅中庭院<br>
			翱翔「森活綠境」慢建築
		</div>
		<div class="font-medium tracking-normal mt-20">
			<div class="text-[26px] text-gray-700 mb-8">隱於塵囂，森中深藏。 究極精工，湛嘆之作。</div>
			<div class="text-lg text-gray">
				新竹高鐵站前首席，萬坪中央公園首排，獨樹一格，獨領風騷，對位美國矽谷科技創意層峰的慢建築生活風潮，挑高3米6宅中庭院，戶戶朝南面大公園，純粹88坪大砌落成，讓大自然、新科技和諧共舞，創作天地之間自在翱翔的森活綠境。
			</div>
		</div>
	</div>

	<div class="px-[100px]">
		<div class="">
			
			<div v-on:click="isplay=1" v-scope="{
				code: 'sAf6RsJnPMU',
				isplay: 0,
			}" class="relative aspect-[1.78/1] cursor-pointer" v-on:vue:mounted="videoHandler($el)">
				<div class="relative w-full h-full overflow-hidden -z-10">
					<!-- <video class="w-full h-full object-cover" id="video" autoplay muted playsinline loop src="https://player.vimeo.com/progressive_redirect/playback/818983322/rendition/1080p/file.mp4?loc=external&signature=34e948a7b4de768f6b94fdc7c77ecc74867ff130ba2506171a1a7d25b055197f"></video> -->
					<div class="absolute h-screen top-0 left-0 w-full h-full" style="background:url('images/news-video.jpg') center center / cover;" id="mobile-ca"></div>
				</div>
			</div>

			<div class="flex justify-between mt-16 mb-[380px]">
				<div class="text-4xl font-bold">Information</div>
				<div class="flex-initial">
					<ul v-scope="{
			            posts: [{
			            	title: 'Address',
			            	content: '302新竹縣竹北市復興三路一段197號',
			            },{ 
			            	title: 'Type',
			            	content: '住宅大樓',
			            },{ 
			            	title: 'Ping',
			            	content: '四房 , 87 ~ 132 坪',
			            },{ 
			            	title: 'Site Area',
			            	content: '669 坪',
			            }, {
		            		title: 'Floor',
			            	content: '地上22層 , 地下3層',
			            }]
			        }" class="newsInformation grid gap-x-20 gap-y-10">
						<li v-for="p in posts">
							<div class="text-[24px] font-bold mb-2">{{p.title}}</div>
							<div class="font-ch text-xl text-gray">{{p.content}}</div>
						</li>
					</ul>
				</div>
			</div>

			<div class="flex mb-[392px]">
				<div class="mr-32">
					<div class="text-[67px] text-black-300 font-bold leading-tight mb-8">
						Green Luxury, <br>
						the Deepest Understanding
					</div>
					<div class=""><img src="images/news-pic-1.jpg"></div>
				</div>
				<div class="font-ch mt-[110px]">
					<div class="font-bold text-[32px] text-gray-700 tracking-wide mb-16">
						綠意奢華，是最懂<br>
						竹科層峰對慢生活的渴望
					</div>
					<div class="font-medium text-[24px] text-gray-600 tracking-wide mb-12">
						中陽 森，森不只是林，<br>
						絕無僅有的３層次內涵，享受深度慢生活。
					</div>
					<div class="text-lg text-gray tracking-normal leading-loose">
						中央公園的“樹海” <br>
						中陽森 前庭“綠園地” <br>
						「宅中庭院」與「植樹景觀陽台」
					</div>
				</div>
			</div>

			<div class="" v-on:vue:mounted="mounted" v-scope="differentList({
				cat: -1,
				now: -1,
	            posts: [{
	            	ch: '180度視角景觀大陽台',
	            	en: '180-degree Panoramic View Terrace',
	            	pic: 'images/news-slider-1.jpg',
	            }, {
	            	ch: '全區朝南，向大公園',
	            	en: 'Entire Area Faces South, Overlooking the Grand Park',
	            	pic: 'images/classic-ani-1.jpg',
	            }, {
	            	ch: '室內、戶外連成一體',
	            	en: 'Seamless Integration of Indoor and Outdoor Spaces',
	            	pic: 'images/news-slider-1.jpg',
	            }, {
	            	ch: '相互呼應，借景引光',
	            	en: 'Mutual Harmony, Borrowed Scenery, and Inviting Light',
	            	pic: 'images/classic-ani-2.jpg',
	            }, {
	            	ch: '獨立、無限視野的觀景陽台',
	            	en: 'Independent, Unobstructed View Terrace',
	            	pic: 'images/classic-ani-3.jpg',
	            }]
			})"></div>

			<template id="different-template" class="flex">
				<div class="flex">
					<div class="flex-auto mr-[224px]">
						<div class="text-gray-700 mb-40">
							<div class="font-ch font-bold text-[32px] tracking-wide">建築思維</div>
							<div class="text-[67px] font-bold">Think different</div>
						</div>
						<ul class="differentList space-y-[56px]">
							<li v-for="(p, i) in posts" class="group pb-3 px-2">
								<div class="flex justify-between">
									<div class="">
										<div class="font-ch text-gray-600 font-bold text-[24px] tracking-wide">{{p.ch}}</div>
										<div class="text-gray tracking-normal">{{p.en}}</div>
									</div>
									<div class="relative font-medium text-gray-300 left-0 top-2 transition-all duration-500 group-[.is-selected]:text-black-300 group-[.is-selected]:scale-150 group-[.is-selected]:-left-[5px]">0{{i+1}}</div>
								</div>
								<div class="progress-box">
									<div class="line w-full h-px group-[.is-selected]:h-[2px]"></div>
									<div class="progress-bar absolute left-0 bottom-0 h-[2px]" :class="[
										cat != i ? 'w-0 duration-0' : 'w-full duration-[5s]',
									]"></div>
								</div>
							</li>
						</ul>
						<div class="flex space-x-[124px] justify-end mt-[82px]">
							<div class="basic-hover" v-on:click="prev()"><svg width="42.73" height="37.47" viewBox="0 0 42.73 37.47">
								<g>
								<path d="M15.19,28.24h3.45c1.25,0,2.21,.23,2.9,.69,.68,.46,1.03,1.16,1.03,2.11s-.34,1.63-1.01,2.09c-.68,.46-1.65,.69-2.91,.69h-2.09v3.52h-1.35v-9.1Zm3.47,4.95c1.7,0,2.55-.72,2.55-2.16s-.85-2.17-2.55-2.17h-2.12v4.33h2.12Z" style="fill: #4d4d4d;"/>
								<path d="M23.73,30.97h1.2v1.37c.16-.48,.43-.85,.79-1.11,.36-.26,.79-.39,1.31-.39,.2,0,.35,.02,.44,.05l-.12,.83c-.13-.07-.31-.1-.55-.1-.59,0-1.05,.25-1.38,.74-.33,.49-.49,1.12-.49,1.87v3.11h-1.2v-6.37Z" style="fill: #4d4d4d;"/>
								<path d="M33.3,36.51c.4-.29,.66-.68,.77-1.17h.97c-.16,.67-.54,1.19-1.13,1.57s-1.31,.57-2.16,.57c-.71,0-1.33-.13-1.87-.4-.53-.27-.95-.65-1.24-1.15-.29-.5-.43-1.08-.43-1.74s.14-1.27,.43-1.77c.29-.5,.7-.89,1.23-1.16,.53-.27,1.15-.41,1.85-.41,1.06,0,1.88,.29,2.48,.86,.59,.57,.9,1.38,.93,2.42h-5.72v.06c0,.86,.21,1.53,.62,2.02,.42,.49,1,.73,1.77,.73,.59,0,1.08-.14,1.49-.43Zm-3.11-4.56c-.4,.39-.64,.93-.73,1.63h4.55c-.09-.71-.34-1.26-.72-1.64-.38-.38-.89-.57-1.53-.57s-1.17,.19-1.57,.58Z" style="fill: #4d4d4d;"/>
								<path d="M35.47,30.97h1.3l2.65,5.13,2.6-5.13h.7l-3.25,6.5h-.56l-3.44-6.5Z" style="fill: #4d4d4d;"/>
								</g>
								<g>
								<line x1="7.41" y1="19.41" x2="42.59" y2="19.41" style="fill: none; stroke: #b3b3b3; stroke-miterlimit: 10;"/>
								<polygon points="0 19.91 42.59 0 42.59 3.45 7.41 19.91 0 19.91" style="fill: #888;"/>
								</g>
							</svg></div>
							<div class="basic-hover" v-on:click="next()"><svg width="42.59" height="37.47" viewBox="0 0 42.59 37.47">
								<g>
								<path d="M.16,28.24H1.53l5.54,7.06v-7.06h1.14v9.1h-.68L1.31,29.42v7.92H.16v-9.1Z" style="fill: #4d4d4d;"/>
								<path d="M14.88,36.51c.4-.29,.66-.68,.77-1.17h.98c-.17,.67-.54,1.19-1.13,1.57-.59,.38-1.31,.57-2.16,.57-.71,0-1.33-.13-1.87-.4-.53-.27-.95-.65-1.24-1.15-.29-.5-.44-1.08-.44-1.74s.14-1.27,.43-1.77c.29-.5,.7-.89,1.23-1.16,.53-.27,1.15-.41,1.85-.41,1.06,0,1.88,.29,2.48,.86s.9,1.38,.93,2.42h-5.72v.06c0,.86,.21,1.53,.62,2.02,.42,.49,1,.73,1.77,.73,.59,0,1.09-.14,1.49-.43Zm-3.11-4.56c-.4,.39-.64,.93-.73,1.63h4.55c-.1-.71-.34-1.26-.72-1.64-.39-.38-.89-.57-1.53-.57s-1.17,.19-1.57,.58Z" style="fill: #4d4d4d;"/>
								<path d="M22.79,37.34l-2.2-2.61-2.28,2.61h-.87l2.72-3.13-2.72-3.24h1.37l2.09,2.5,2.12-2.5h.84l-2.55,3,2.81,3.37h-1.34Z" style="fill: #4d4d4d;"/>
								<path d="M25.99,37c-.28-.31-.42-.79-.42-1.44v-4.06h-1.14l.18-.53h.98l.47-1.79h.71v1.79h1.78l-.17,.53h-1.61v4.24c0,.79,.29,1.18,.88,1.18,.31,0,.62-.08,.91-.25v.56c-.36,.16-.8,.23-1.31,.23-.56,0-.98-.16-1.26-.47Z" style="fill: #4d4d4d;"/>
								</g>
								<g>
								<line x1="35.18" y1="19.41" y2="19.41" style="fill: none; stroke: #b3b3b3; stroke-miterlimit: 10;"/>
								<polygon points="42.59 19.91 0 0 0 3.45 35.18 19.91 42.59 19.91" style="fill: #888;"/>
								</g>
							</svg></div>
						</div>
					</div>
					<div class="mt-8 relative overflow-hidden">
						<img src="images/news-slider-1.jpg" class="opacity-0">
						<ul class="absolute top-0 w-full h-full inline-flex" id="differentList-pics">
							<!-- <li class="absolute w-full h-full overflow-hidden"><div class="h-full" style="background: url(images/classic-ani-1.jpg) center center / cover"></div></li>
							<li class="absolute w-full h-full overflow-hidden"><div class="h-full" style="background: url(images/classic-ani-2.jpg) center center / cover"></div></li>
							<li class="absolute w-full h-full overflow-hidden"><div class="h-full" style="background: url(images/classic-ani-3.jpg) center center / cover"></div></li>
							<li class="absolute w-full h-full overflow-hidden"><div class="h-full" style="background: url(images/news-slider-1.jpg) center center / cover"></div></li>
							<li class="absolute w-full h-full overflow-hidden"><div class="h-full" style="background: url(images/classic-ani-3.jpg) center center / cover"></div></li>
							<li class="absolute w-full h-full overflow-hidden"><div class="h-full" style="background: url(images/classic-ani-1.jpg) center center / cover"></div></li> -->
							<li v-for="(p, i) in posts" class="absolute w-full h-full overflow-hidden"><div class="h-full" :style="'background: url('+p.pic+') center center/cover no-repeat;'"></div></li>
							<li class="absolute w-full h-full overflow-hidden"><div class="h-full" :style="'background: url('+posts[0].pic+') center center/cover no-repeat;'"></div></li>
						</ul>
					</div>
				</div>
			</template>

			<div class="mt-[480px] mb-[380px] text-center text-black-300">
				<div class="text-[32px] font-ch font-bold tracking-wide mb-4">超越期待，超越標準的建築深度</div>
				<div class="font-bold text-[69px] mb-12">Beyond Standard Architectural Depth</div>
				<div class=""><img src="images/news-pic-2.jpg"></div>
			</div>

			<div class="sliderbox-news relative">
				<div class="sliderList swiper-container max-w-[1030px]">
					<ul class="swiper-wrapper" v-scope="{
			            posts: [{
			            	title: '景觀無限的游泳池',
			            	note: 'Inﬁnity Pool with Scenic Views',
			            	pic: 'images/news-swiper-1.jpg',
			            }, {
			            	title: '景觀無限的游泳池',
			            	note: 'Inﬁnity Pool with Scenic Views',
			            	pic: 'images/news-swiper-2.jpg',
			            }, {
			            	title: '景觀無限的游泳池',
			            	note: 'Inﬁnity Pool with Scenic Views',
			            	pic: 'images/news-swiper-1.jpg',
			            }, {
			            	title: '景觀無限的游泳池',
			            	note: 'Inﬁnity Pool with Scenic Views',
			            	pic: 'images/news-swiper-2.jpg',
			            }]
					}">
						<li v-for="p in posts" class="swiper-slide">
							<div class="mb-5"><img :src="p.pic"></div>
							<div class="font-ch text-lg tracking-normal font-medium mb-2">{{p.title}}</div>
							<div class="">{{p.note}}</div>
						</li>
					</ul>
				</div>

				<div class="absolute w-full -bottom-12 left-0">
					<div class="swiper-scrollbar"></div>
				</div>
			</div>

			<div class="mt-[240px] mb-[114px]"><svg width="470.19" height="38.9" viewBox="0 0 470.19 38.9" class="mx-auto">
				<polygon points="470.19 38.9 400.75 6.45 400.75 12.07 458.11 38.9 470.19 38.9" style="fill: #888;"/>
				<line x1="423.96" y1="37.55" y2="37.55" style="fill: none; stroke: #888; stroke-miterlimit: 10; stroke-width: 1.5px;"/>
				<g>
				<path d="M2.99,.33h3.43V23.43H2.99V.33Z" style="fill: #333;"/>
				<path d="M12.66,.33h3.46l14.06,17.92V.33h2.9V23.43h-1.72L15.56,3.33V23.43h-2.9V.33Z" style="fill: #333;"/>
				<path d="M37.97,.33h18.94V1.91h-15.51V10.26h13.3v1.55h-13.3v11.62h-3.43V.33Z" style="fill: #333;"/>
				<path d="M64.77,22.34c-1.87-.95-3.3-2.32-4.29-4.11s-1.48-3.94-1.48-6.45,.49-4.58,1.48-6.35c.99-1.77,2.42-3.12,4.29-4.04s4.1-1.39,6.7-1.39,4.82,.46,6.68,1.39c1.86,.92,3.28,2.27,4.27,4.04,.99,1.77,1.49,3.89,1.49,6.35s-.5,4.66-1.49,6.45-2.42,3.16-4.27,4.11c-1.86,.95-4.09,1.42-6.68,1.42s-4.83-.47-6.7-1.42Zm13.33-2.87c1.56-1.8,2.34-4.37,2.34-7.69s-.78-5.77-2.33-7.54c-1.55-1.77-3.77-2.66-6.65-2.66s-5.1,.88-6.67,2.64c-1.56,1.76-2.34,4.28-2.34,7.56s.78,5.89,2.34,7.69c1.56,1.8,3.78,2.71,6.67,2.71s5.07-.9,6.63-2.71Z" style="fill: #333;"/>
				<path d="M107.19,21.63c.43,.76,.85,1.27,1.27,1.54v.26h-3.6c-.37-.42-.72-.95-1.04-1.58-.32-.64-.67-1.45-1.04-2.44-.62-1.63-1.24-2.89-1.88-3.78-.64-.89-1.42-1.48-2.34-1.77h-6.96v9.57h-3.43V.33h9.54c3.17,0,5.62,.56,7.34,1.67,1.73,1.11,2.59,2.81,2.59,5.1,0,3.41-1.93,5.53-5.78,6.37,.84,.42,1.56,1.03,2.18,1.83,.62,.8,1.2,1.9,1.75,3.28,.51,1.28,.97,2.29,1.4,3.05Zm-9.42-9.32c4.31,0,6.47-1.74,6.47-5.21s-2.16-5.18-6.47-5.18h-6.17V12.31h6.17Z" style="fill: #333;"/>
				<path d="M137,.33V23.43h-3.43V4.03l-8.98,19.4h-1.62L113.34,3.76V23.43h-2.05V.33h3.93l9.21,19.01L133.24,.33h3.76Z" style="fill: #333;"/>
				<path d="M158.39,17.42h-13.3l-3,6.01h-2.31L151.79,0h1.78l11.32,23.43h-3.7l-2.8-6.01Zm-.76-1.58l-5.68-12.14-6.07,12.14h11.75Z" style="fill: #333;"/>
				<path d="M171.95,1.91h-9.77V.33h22.94V1.91h-9.74V23.43h-3.43V1.91Z" style="fill: #333;"/>
				<path d="M189.21,.33h3.43V23.43h-3.43V.33Z" style="fill: #333;"/>
				<path d="M204.03,22.34c-1.87-.95-3.3-2.32-4.29-4.11s-1.48-3.94-1.48-6.45,.49-4.58,1.48-6.35c.99-1.77,2.42-3.12,4.29-4.04s4.1-1.39,6.7-1.39,4.82,.46,6.68,1.39c1.86,.92,3.28,2.27,4.27,4.04,.99,1.77,1.49,3.89,1.49,6.35s-.5,4.66-1.49,6.45-2.42,3.16-4.27,4.11c-1.86,.95-4.09,1.42-6.68,1.42s-4.83-.47-6.7-1.42Zm13.33-2.87c1.56-1.8,2.34-4.37,2.34-7.69s-.78-5.77-2.33-7.54c-1.55-1.77-3.77-2.66-6.65-2.66s-5.1,.88-6.67,2.64c-1.56,1.76-2.34,4.28-2.34,7.56s.78,5.89,2.34,7.69c1.56,1.8,3.78,2.71,6.67,2.71s5.07-.9,6.63-2.71Z" style="fill: #333;"/>
				<path d="M227.42,.33h3.46l14.06,17.92V.33h2.9V23.43h-1.72l-15.81-20.1V23.43h-2.9V.33Z" style="fill: #333;"/>
				<path d="M287.22,.33V23.43h-3.43V4.03l-8.98,19.4h-1.62l-9.64-19.67V23.43h-2.05V.33h3.93l9.21,19.01L283.46,.33h3.76Z" style="fill: #333;"/>
				<path d="M297.28,22.34c-1.87-.95-3.3-2.32-4.29-4.11s-1.48-3.94-1.48-6.45,.49-4.58,1.48-6.35c.99-1.77,2.42-3.12,4.29-4.04s4.1-1.39,6.7-1.39,4.82,.46,6.68,1.39c1.86,.92,3.28,2.27,4.27,4.04,.99,1.77,1.49,3.89,1.49,6.35s-.5,4.66-1.49,6.45-2.42,3.16-4.27,4.11c-1.86,.95-4.09,1.42-6.68,1.42s-4.83-.47-6.7-1.42Zm13.33-2.87c1.56-1.8,2.34-4.37,2.34-7.69s-.78-5.77-2.33-7.54c-1.55-1.77-3.77-2.66-6.65-2.66s-5.1,.88-6.67,2.64c-1.56,1.76-2.34,4.28-2.34,7.56s.78,5.89,2.34,7.69c1.56,1.8,3.78,2.71,6.67,2.71s5.07-.9,6.63-2.71Z" style="fill: #333;"/>
				<path d="M339.71,21.63c.43,.76,.85,1.27,1.27,1.54v.26h-3.6c-.37-.42-.72-.95-1.04-1.58-.32-.64-.67-1.45-1.04-2.44-.62-1.63-1.24-2.89-1.88-3.78-.64-.89-1.42-1.48-2.34-1.77h-6.96v9.57h-3.43V.33h9.54c3.17,0,5.62,.56,7.34,1.67,1.73,1.11,2.59,2.81,2.59,5.1,0,3.41-1.93,5.53-5.78,6.37,.84,.42,1.56,1.03,2.18,1.83,.62,.8,1.2,1.9,1.75,3.28,.51,1.28,.97,2.29,1.4,3.05Zm-9.42-9.32c4.31,0,6.47-1.74,6.47-5.21s-2.16-5.18-6.47-5.18h-6.17V12.31h6.17Z" style="fill: #333;"/>
				<path d="M343.81,.33h19.57V1.91h-16.14V10.26h14.26v1.55h-14.26v10.03h16.14v1.58h-19.57V.33Z" style="fill: #333;"/>
				</g>
			</svg></div>

			<div class="text-center mb-[266px]">
				<div class="font-medium text-sm text-[#A8A8A8] mb-7">SHARE</div>
				<nav class="flex items-center justify-center space-x-6">
					<a href="javascript:;" class="basic-hover"><svg width="39" height="39" viewBox="0 0 38.54 38.54">
						<path d="M19.27,38.54C8.65,38.54,0,29.9,0,19.27S8.65,0,19.27,0s19.27,8.65,19.27,19.27-8.65,19.27-19.27,19.27ZM19.27,1.81C9.64,1.81,1.81,9.64,1.81,19.27s7.83,17.46,17.46,17.46,17.46-7.83,17.46-17.46S28.9,1.81,19.27,1.81Z" style="fill: #a8a8a8;"/>
						<g>
						<path d="M18,23.57s-.06,.08-.1,.13c-.6,.6-1.19,1.19-1.79,1.79-.32,.33-.69,.57-1.14,.7-1.13,.32-2.21-.33-2.41-1.48-.12-.68,.13-1.27,.55-1.79,.06-.07,.12-.14,.19-.21,1.13-1.13,2.27-2.26,3.39-3.4,.87-.88,2.23-1.04,3.12-.16,.42,.41,1.13,.33,1.52-.1,.41-.45,.4-1.12-.04-1.56-.82-.8-1.82-1.19-2.96-1.17-1.26,.02-2.33,.52-3.22,1.4-1.13,1.13-2.26,2.26-3.39,3.39-.65,.65-1.1,1.41-1.31,2.31-.06,.24-.37,1.13,.17,2.46,.68,1.8,2.53,2.87,4.46,2.57,1.03-.16,1.9-.63,2.64-1.37,1.01-1.01,2.01-2.01,3.02-3.02,.03-.03,.05-.06,.07-.08-.96,.23-1.86,.07-2.76-.43Z" style="fill: #a8a8a8;"/>
						<path d="M27.79,13.36c-.92-2.22-4.08-3.85-6.94-1.34-1.13,.99-2.14,2.12-3.2,3.19-.01,.01-.02,.03-.02,.04,.96-.21,1.86-.06,2.74,.43,.03-.04,.07-.09,.11-.13,.59-.59,1.18-1.19,1.78-1.77,.23-.22,.48-.42,.76-.56,1.22-.63,2.6,.03,2.8,1.35,.11,.74-.15,1.37-.66,1.89-1.18,1.2-2.37,2.39-3.57,3.57-.81,.79-2.13,.94-2.99,.1-.44-.43-1.13-.37-1.53,.06-.42,.45-.42,1.13,.03,1.57,.21,.2,.44,.39,.69,.55,1.63,1.03,3.79,.77,5.17-.5,1.33-1.24,2.71-2.44,3.87-3.84,1.9-2.28,1.32-3.78,.99-4.59Z" style="fill: #a8a8a8;"/>
						</g>
					</svg></a>
					<a href="javascript:;" class="basic-hover"><svg width="39" height="39" viewBox="0 0 38.54 38.54">
						<path d="M21.68,7.74c-1.52,0-2.9,.53-3.89,1.49-1.22,1.16-1.84,2.98-1.84,5.41l-1.99,.05v3.22h1.99v12.23h3.8v-12.23h3.43v-3.22h-3.43v-.14c0-3.08,1.14-3.48,2.13-3.48,.53,0,1,.09,1.38,.27l.74,.34,.58-3.29-.46-.19c-.33-.14-1.24-.46-2.44-.46Z" style="fill: #a8a8a8;"/>
						<path d="M19.27,38.54C8.65,38.54,0,29.9,0,19.27S8.65,0,19.27,0s19.27,8.65,19.27,19.27-8.65,19.27-19.27,19.27ZM19.27,1.81C9.64,1.81,1.81,9.64,1.81,19.27s7.83,17.46,17.46,17.46,17.46-7.83,17.46-17.46S28.9,1.81,19.27,1.81Z" style="fill: #a8a8a8;"/>
					</svg></a>
					<a href="javascript:;" class="basic-hover"><svg width="39" height="39" viewBox="0 0 38.54 38.54">
						<polygon points="7.3 14.97 5.45 14.97 5.45 23.57 11.6 23.57 11.6 21.84 7.3 21.84 7.3 14.97" style="fill: #a8a8a8;"/>
						<rect x="13" y="14.97" width="1.85" height="8.6" style="fill: #a8a8a8;"/>
						<polygon points="22.57 20.23 18.56 15.05 18.5 14.97 16.86 14.97 16.86 23.57 18.69 23.57 18.69 18.15 22.89 23.57 24.4 23.57 24.4 14.97 22.57 14.97 22.57 20.23" style="fill: #a8a8a8;"/>
						<polygon points="28.18 21.87 28.18 20.09 32.28 20.09 32.28 18.38 28.18 18.38 28.18 16.68 32.81 16.68 32.81 14.97 26.33 14.97 26.33 23.57 32.87 23.57 32.87 21.87 28.18 21.87" style="fill: #a8a8a8;"/>
						<path d="M19.27,38.54C8.65,38.54,0,29.9,0,19.27S8.65,0,19.27,0s19.27,8.65,19.27,19.27-8.65,19.27-19.27,19.27ZM19.27,1.81C9.64,1.81,1.81,9.64,1.81,19.27s7.83,17.46,17.46,17.46,17.46-7.83,17.46-17.46S28.9,1.81,19.27,1.81Z" style="fill: #a8a8a8;"/>
					</svg></a>
				</nav>
			</div>
		</div>
	</div>

	<div class="flex bg-[#F9F9EF] px-[100px] pt-[376px] pb-[164px]">
		<div class="mr-[250px]">
			<div class="text-7xl text-black-300 font-bold mb-12">Reservation</div>
			<div class="font-ch">
				<div class="font-medium text-[26px] text-gray-600 tracking-wide mb-5">預約看屋</div>
				<div class="text-lg text-gray tracking-normal">
					期待您蒞臨體驗，若有任何問題都歡迎與我們聯絡。<br>
					請填寫右側資料回傳，將有專人盡快與您聯繫，謝謝。
				</div>
			</div>
		</div>
		<div class="flex-auto">
			<form action="javascript:;" class="latestForm" id="latestForm">
				<div class="item-group grid grid-cols-2 gap-x-24 mb-12">
					<div class="item">
						<div class="flex items-center mb-2 text-gray-600">
							<div class="text-xl mr-8">Name</div>
							<div class="font-ch tracking-normal">姓 名</div>
						</div>
						<input type="text" name="" class="tracking-wide w-full border-b border-black-300 text-gray">
					</div>
					<div class="item">
						<div class="flex items-center mb-2 text-gray-600">
							<div class="text-xl mr-8">Phone</div>
							<div class="font-ch tracking-normal">電 話</div>
						</div>
						<input type="text" name="" class="tracking-wide w-full border-b border-black-300 text-gray">
					</div>
				</div>
				<div class="item mb-12">
					<div class="flex items-center mb-2 text-gray-600">
						<div class="text-xl mr-8">Mail</div>
						<div class="font-ch tracking-normal">電子郵件</div>
					</div>
					<input type="text" name="" class="tracking-wide w-full border-b border-black-300 text-gray">
				</div>
				<div class="item mb-12">
					<div class="flex items-center mb-2 text-gray-600">
						<div class="text-xl mr-8">Message</div>
						<div class="font-ch tracking-normal">留言訊息</div>
					</div>
					<textarea name="" id="" class="resize-none border-b border-black-300 text-gray"></textarea>
				</div>
				<div class="font-ch text-sm text-gray leading-relaxed tracking-normal">
					您所登錄的個人資料作為以下用途:<br>
					1.本網站載之相關事項通知<br>
					2.客戶管理與服務<br>
					3.本公司行銷業務之推廣<br>
					4.(本案現場實際內容，以現場公布為準，蒐集僅有本網站使用，不會提供給第三方利用)
				</div>
				<div class="mt-[50px]">
					<button class="submit inline-block ml-auto flex items-center">
						<div class="text-black-300 mr-8">Submit</div>
						<div class=""><svg width="58.23" height="58.23" viewBox="0 0 58.23 58.23">
						<polygon points="42.76 30.92 18.18 42.35 18.18 39.18 35.95 30.92 42.76 30.92" style="fill: #888;"/>
						<polygon points="49.46 30.92 18.18 16.19 18.18 19.36 42.65 30.92 49.46 30.92" style="fill: #888;"/>
						<circle cx="29.11" cy="29.11" r="28.21" style="fill: none; stroke: #888; stroke-miterlimit: 10; stroke-width: 1.8px;"/>
						</svg></div>
					</button>
				</div>
			</form>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>
</html>

<script>
var swiper = new Swiper(".sliderList", {
	slideToClickedSlide: true,
	slidePerView: "auto",
	grabCursor: true,
	spaceBetween: 24,
	grabCursor: true,
	freeMode: {
		enabled: true,
		sticky: false,
		momentumBounce: false,
	},
	scrollbar: {
		el: '.swiper-scrollbar',
	},
});

function videoHandler(el) {
	gsap.timeline({
		paused: true,
		scrollTrigger: {
			trigger: el,
			toggleActions: "play none play none",
			start: "top 90%",
			end: "bottom 20%",
			// markers: true,
		},
	}).to(el, {
		opacity: 1,
		onComplete: () => {
			// if(device == 'mobile'){
			// 	let playPromise = document.getElementById('video').play();
			// 	// 似乎有些地方play不会返回个promise
			// 	if(playPromise) {
			// 		playPromise.then(
			// 			() => {
			// 				// $("#mobile-ca").addClass("opacity-0")
			// 			}, // 顺利播放的话就什么也不用做了
			// 			() => {
			// 				$("#video").addClass("opacity-0");
			// 			}
			// 		)
			// 	}
			// }

			// $("video").get(0).play()
		}
	})
}

function differentList(props) {
	return {
		$template: '#different-template',
		cat: props.cat,
		now: props.now,
		posts: props.posts,
		total: props.posts.length,
		mounted() {
			gsap.delayedCall(1, () => {
				this.autoplay()
			});
		},
		autoplay() {
			this.cat = (this.cat + 1) % this.total

			if(this.cat == 0 && this.now != -1){
				this.now = -1
				gsap.delayedCall(.2, () => {
					this.now = 0
					$(".differentList li").eq(this.now).addClass("is-selected").siblings().removeClass("is-selected")
				})
			}else{
				this.now = (this.now + 1) % this.total

				$(".differentList li").eq(this.now).addClass("is-selected").siblings().removeClass("is-selected")
			}

			if(this.now == -1) {
				gsap.fromTo($("#differentList-pics >li").eq(this.total), {
					clipPath: 'polygon(125% 0%, 100% 0%, 100% 100%, 100% 100%)',
				}, {
					clipPath: 'polygon(-5% 0%, 100% 0%, 100% 100%, -20% 100%)',
					ease: "power1.inOut",
					onComplete: () =>{
						$("#differentList-pics >li").removeAttr("style","");
				    }
				})
			}else if(this.now > 0){
				gsap.fromTo($("#differentList-pics >li").eq(this.now), {
					clipPath: 'polygon(125% 0%, 100% 0%, 100% 100%, 100% 100%)',
				}, {
					clipPath: 'polygon(-5% 0%, 100% 0%, 100% 100%, -20% 100%)',
					ease: "power1.inOut",
				})
			}

			gsap.delayedCall(5, () => {
				this.autoplay()
			});
		},
		prev() {
			this.cat = (this.cat - 1) % this.total

			if(this.cat == -1 && this.now == 0){
				this.cat = this.total-1
				this.now = this.total-1
				$(".differentList li").eq(this.now).addClass("is-selected").siblings().removeClass("is-selected")
			}else{
				this.now = (this.now - 1) % this.total
				$(".differentList li").eq(this.now).addClass("is-selected").siblings().removeClass("is-selected")
			}

			if(this.now == 0) {
				gsap.fromTo($("#differentList-pics >li").eq(1), {
					clipPath: 'polygon(-5% 0%, 100% 0%, 100% 100%, -20% 100%)',
				}, {
					clipPath: 'polygon(125% 0%, 100% 0%, 100% 100%, 100% 100%)',
					ease: "power1.inOut",
					onComplete: () =>{
						$("#differentList-pics >li").eq(1).removeAttr("style","");
				    }
				})
			}else if(this.now == this.total-1){
				gsap.set($("#differentList-pics >li:not(:first)"), {
					clipPath: 'polygon(-5% 0%, 100% 0%, 100% 100%, -20% 100%)',
				})

				gsap.fromTo($("#differentList-pics >li").eq(this.total), {
					clipPath: 'polygon(-5% 0%, 100% 0%, 100% 100%, -20% 100%)',
				}, {
					clipPath: 'polygon(125% 0%, 100% 0%, 100% 100%, 100% 100%)',
					ease: "power1.inOut",
					onComplete: () =>{
						$("#differentList-pics >li").eq(this.total).removeAttr("style","");
				    }
				})
			}else if(this.now > 0){
				gsap.fromTo($("#differentList-pics >li").eq(this.now+1), {
					clipPath: 'polygon(-5% 0%, 100% 0%, 100% 100%, -20% 100%)',
				}, {
					clipPath: 'polygon(125% 0%, 100% 0%, 100% 100%, 100% 100%)',
					ease: "power1.inOut",
					onComplete: () =>{
						$("#differentList-pics >li").eq(this.now+1).removeAttr("style","");
				    }
				})
			}
		},
		next() {
			this.cat = (this.cat + 1) % this.total

			if(this.cat == 0 && this.now != -1){
				this.now = 0
				$(".differentList li").eq(this.now).addClass("is-selected").siblings().removeClass("is-selected")
			}else{
				this.now = (this.now + 1) % this.total
				$(".differentList li").eq(this.now).addClass("is-selected").siblings().removeClass("is-selected")
			}

			if(this.now == 0) {
				gsap.fromTo($("#differentList-pics >li").eq(this.total), {
					clipPath: 'polygon(125% 0%, 100% 0%, 100% 100%, 100% 100%)',
				}, {
					clipPath: 'polygon(-5% 0%, 100% 0%, 100% 100%, -20% 100%)',
					ease: "power1.inOut",
					onComplete: () =>{
						$("#differentList-pics >li").removeAttr("style","");
				    }
				})
			}else if(this.now > 0){
				gsap.fromTo($("#differentList-pics >li").eq(this.now), {
					clipPath: 'polygon(125% 0%, 100% 0%, 100% 100%, 100% 100%)',
				}, {
					clipPath: 'polygon(-5% 0%, 100% 0%, 100% 100%, -20% 100%)',
					ease: "power1.inOut",
				})
			}
		},
	}
}
</script>