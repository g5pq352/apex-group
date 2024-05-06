<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>


	<div class="px-[102px] mt-[300px] mb-[264px]">
		<div class="mb-[120px] group" data-enter="">
			<div class="flex items-center -mb-5 delay-1000 transition-all duration-500 opacity-0 group-[.is-enter]:opacity-100">
				<svg width="23.35" height="49.95" viewBox="0 0 23.35 49.95">
					<polygon points="23.35 0 0 49.95 4.05 49.95 23.35 8.69 23.35 0" style="fill: #666;"/>
				</svg>
				<span class="font-ch font-medium text-gray-700 text-5xl tracking-normal mx-2">表參道</span>
				<svg width="23.35" height="49.95" viewBox="0 0 23.35 49.95">
					<polygon points="23.35 0 0 49.95 4.05 49.95 23.35 8.69 23.35 0" style="fill: #666;"/>
				</svg>
			</div>
			<div class="relative inline-block">
				<div class="absolute inset-0 after:absolute after:inset-x-0 after:bottom-[14px] after:top-[30px] after:bg-black-300 after:-z-10 group-[.is-enter]:animate-clip lg:after:top-[15px] lg:after:bottom-[10px]">
					<div class="font-en font-medium text-[88px] leading-normal text-white">Omotesando</div>
				</div>
				<div class="font-en font-medium text-[88px] leading-normal text-black-300 delay-500 opacity-0 group-[.is-enter]:opacity-100">Omotesando</div>
			</div>
		</div>

		<div class="">
			<section class="" v-scope="Omotesando({
				lists:[{
					id: '1',
					pic: 'images/project-d-1-1.jpg',
					en: 'Rain Screen Assembly',
					date: '2023.12.26',
					title: '外牆組裝',
				}, {
					id: '2',
					pic: 'images/project-d-1-2.jpg',
					en: 'Vented Airspace',
					date: '2023.11.17',
					title: '外牆透氣工法',
				}, {
					id: '3',
					pic: 'images/project-d-1-3.jpg',
					en: 'Vented Airspace',
					date: '2023.11.17',
					title: '外牆透氣工法',
				}, {
					id: '4',
					pic: 'images/project-d-1-1.jpg',
					en: 'Rain Screen Assembly',
					date: '2023.12.26',
					title: '外牆組裝',
				}, {
					id: '5',
					pic: 'images/project-d-1-2.jpg',
					en: 'Vented Airspace',
					date: '2023.11.17',
					title: '外牆透氣工法',
				}, {
					id: '6',
					pic: 'images/project-d-1-3.jpg',
					en: 'Vented Airspace',
					date: '2023.11.17',
					title: '外牆透氣工法',
				}]
			})" v-on:vue:mounted="mounted($el)"></section>

			<template id="omotesando-template">
				<div class="">
					<ul class="grid grid-cols-2 gap-y-12">
						<li v-for="(list, i) in lists" v-on:click="getData(list.id)" class="border-b border-black pb-6 cursor-pointer group" :class="[
							i%2 == 0 ? 'pr-6' : ' pl-6'
						]">
							<div class="relative mb-5">
								<img :src="list.pic" class="grayscale transition-all duration-500 group-hover:grayscale-0">
								<div class="absolute tf z-10 w-[116px] h-[116px] bg-black-200 rounded-full flex items-center justify-center opacity-0 transition-all duration-500 group-hover:opacity-100">
									<span class="text-lg font-medium text-white">MORE</span>
								</div>
							</div>
							<div class="font-medium flex items-center justify-between mb-4">
								<div class="">{{list.en}}</div>
								<div class="">{{list.date}}</div>
							</div>
							<div class="font-ch font-medium text-[27px] tracking-normal">{{list.title}}</div>
						</li>
					</ul>
				</div>
			</template>
		</div>
	</div>

	<div class="flex justify-center">
		<div class="flex items-center">
			<a href="javascript:;" class="mr-[150px]"><svg width="42.73" height="37.47" viewBox="0 0 42.73 37.47">
				<g>
					<path d="M15.19,28.24h3.45c1.25,0,2.21,.23,2.9,.69s1.03,1.16,1.03,2.11-.34,1.63-1.01,2.09c-.68,.46-1.65,.69-2.91,.69h-2.09v3.52h-1.35v-9.1Zm3.47,4.95c1.7,0,2.55-.72,2.55-2.16s-.85-2.17-2.55-2.17h-2.12v4.33h2.12Z" style="fill: #4d4d4d;"/>
					<path d="M23.73,30.97h1.2v1.37c.17-.48,.43-.85,.79-1.11,.36-.26,.79-.39,1.31-.39,.2,0,.35,.02,.44,.05l-.12,.83c-.13-.07-.31-.1-.55-.1-.59,0-1.05,.25-1.38,.74s-.49,1.12-.49,1.87v3.11h-1.2v-6.37Z" style="fill: #4d4d4d;"/>
					<path d="M33.29,36.51c.4-.29,.66-.68,.77-1.17h.98c-.17,.67-.54,1.19-1.13,1.57-.59,.38-1.31,.57-2.16,.57-.71,0-1.33-.13-1.87-.4-.53-.27-.95-.65-1.24-1.15s-.44-1.08-.44-1.74,.14-1.27,.43-1.77c.29-.5,.7-.89,1.23-1.16,.53-.27,1.15-.41,1.85-.41,1.06,0,1.88,.29,2.48,.86,.59,.57,.9,1.38,.93,2.42h-5.72v.07c0,.86,.21,1.53,.62,2.02,.42,.49,1,.73,1.77,.73,.59,0,1.09-.14,1.49-.43Zm-3.11-4.56c-.4,.39-.64,.93-.73,1.63h4.55c-.1-.71-.34-1.26-.72-1.64s-.89-.57-1.53-.57-1.17,.19-1.57,.58Z" style="fill: #4d4d4d;"/>
					<path d="M35.47,30.97h1.3l2.65,5.13,2.6-5.13h.7l-3.25,6.5h-.56l-3.44-6.5Z" style="fill: #4d4d4d;"/>
				</g>
					<g>
					<line x1="7.41" y1="19.41" x2="42.59" y2="19.41" style="fill: none; stroke: #b3b3b3; stroke-miterlimit: 10;"/>
					<polygon points="0 19.91 42.59 0 42.59 3.45 7.41 19.91 0 19.91" style="fill: #888;"/>
				</g>
			</svg></a>

			<nav class="news-pager text-[19px] space-x-4">
				<a href="javascript:;" class="current">1</a>
				<a href="javascript:;">2</a>
				<a href="javascript:;">3</a>
			</nav>

			<a href="javascript:;" class="ml-[150px]"><svg width="42.59" height="37.47" viewBox="0 0 42.59 37.47">
				<g>
					<path d="M.16,28.24H1.53l5.54,7.06v-7.06h1.14v9.1h-.68L1.31,29.42v7.92H.16v-9.1Z" style="fill: #4d4d4d;"/>
					<path d="M14.88,36.51c.4-.29,.66-.68,.77-1.17h.98c-.17,.67-.54,1.19-1.13,1.57-.59,.38-1.31,.56-2.16,.56-.71,0-1.33-.13-1.87-.4-.53-.27-.95-.65-1.24-1.15s-.44-1.08-.44-1.74,.14-1.26,.43-1.77c.29-.5,.7-.89,1.23-1.16,.53-.27,1.15-.41,1.85-.41,1.06,0,1.88,.29,2.48,.86s.9,1.38,.93,2.42h-5.72v.06c0,.86,.21,1.53,.62,2.02,.42,.49,1,.74,1.77,.74,.59,0,1.09-.14,1.49-.43Zm-3.11-4.56c-.4,.38-.64,.93-.73,1.63h4.55c-.1-.71-.34-1.26-.72-1.64s-.89-.57-1.53-.57-1.17,.19-1.57,.58Z" style="fill: #4d4d4d;"/>
					<path d="M22.79,37.34l-2.2-2.61-2.28,2.61h-.87l2.72-3.13-2.72-3.24h1.37l2.09,2.5,2.12-2.5h.84l-2.55,3,2.81,3.37h-1.34Z" style="fill: #4d4d4d;"/>
					<path d="M25.99,37c-.28-.31-.42-.79-.42-1.44v-4.06h-1.14l.18-.53h.98l.47-1.79h.71v1.79h1.78l-.17,.53h-1.61v4.24c0,.79,.29,1.18,.88,1.18,.31,0,.62-.08,.91-.25v.56c-.36,.16-.8,.23-1.31,.23-.56,0-.98-.16-1.26-.47Z" style="fill: #4d4d4d;"/>
				</g>
				<g>
					<line x1="35.18" y1="19.41" y2="19.41" style="fill: none; stroke: #b3b3b3; stroke-miterlimit: 10;"/>
					<polygon points="42.59 19.91 0 0 0 3.45 35.18 19.91 42.59 19.91" style="fill: #888;"/>
				</g>
			</svg></a>
		</div>
	</div>

	<div class="">
		<div class="omotesando-close fixed w-full top-0 left-0 h-screen bg-black cursor-pointer z-80 opacity-0 pointer-events-none transition-all duration-500" id="omotesando-mask"></div>

		<section id="fancy-app" class="sliderbox fixed w-full h-[90vh] flex items-end z-90 left-0 bottom-0 bg-[#FBFBF6] rounded-t-[20px] pb-16">
			<div class="ml-[186px] mb-16 w-full">
				<div class="swiper-container max-w-[920px]" ref="sliderList">
					<ul class="swiper-wrapper">
						<li v-for="p in sliders" class="swiper-slide">
							<div class="mb-5"><img :src="p.file_link1"></div>
							<div class="font-ch text-lg tracking-normal font-medium mb-2">{{p.d_title}}</div>
							<div class="font-medium" v-html="p.d_content"></div>
						</li>
					</ul>
				</div>
			</div>

			<div class="absolute pl-[186px] w-full bottom-16 left-0">
				<div class="flex items-center justify-end pr-10 mb-4">
					<div class="total">{{total}}</div>
					<div class="w-4 h-px bg-black mx-1"></div>
					<div class="font-medium text-xl mb-1" id="swiper-now">{{now}}</div>
				</div>
				<div class="swiper-scrollbar">
					<!-- <div class="customize-scrollbar-drag"></div> -->
				</div>
			</div>

			<div class="omotesando-close text-gray absolute right-10 top-16 tracking-normal basic-hover">CLOSE</div>
		</section>
	</div>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>
</html>

<script>
function listInit(el) {
	
}

function PrefixInteger(num, length) {
	return (Array(length).join('0') + num).slice(-length);
}

let $fancy = new Vue({
	el: '#fancy-app',
	data: {
		total: '',
		now: '01',
		sliders: [],
		swiper: null
	},
	computed: {},
	methods: {
		sliderInit() {
			this.total = PrefixInteger(this.sliders.length, 2)

			if (this.swiper != null) {
				this.swiper.destroy();
			}

			this.swiper = new Swiper(this.$refs.sliderList, {
				slideToClickedSlide: true,
				slidePerView: "auto",
				grabCursor: true,
				spaceBetween: 48,
				freeMode: {
					enabled: true,
					sticky: false,
					momentumBounce: false,
				},
				scrollbar: {
					el: '.swiper-scrollbar',
				},
				mousewheel: {
					enabled: true,
					sensitivity: 4,
				},
				on:{
					slideChange: function(){
						$("#swiper-now").text(PrefixInteger(this.activeIndex + 1, 2))
					},
				},
			});
		},
	},
	mounted() {
		$(".omotesando-close").on("click", () => {
			$("#fancy-app").removeClass("is-open")
			$("#omotesando-mask").removeClass("opacity-50").addClass("pointer-events-none")
			$("body").removeClass("is-lock")

			gsap.delayedCall(0.5, () => {
				this.swiper.destroy();
			});
		})
	},
})


function Omotesando({now, lists}) {
	return {
		$template: '#omotesando-template',
		now,
		lists,
		mounted: listInit,

		async getData(id) {
			await axios.post('getfancydata.php', {
				id: id,
			}).then(({data}) => {
				$fancy.sliders = data.sliders
			})

			$fancy.sliderInit()
			$("#fancy-app").addClass("is-open")
			$("#omotesando-mask").addClass("opacity-50").removeClass("pointer-events-none")
			$("body").addClass("is-lock")
		},
	}
}


</script>