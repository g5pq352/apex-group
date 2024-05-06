<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="relative h-[80vh] overflow-hidden">
		<div class="absolute w-full h-full -z-10">
			<div class=""><img src="images/corporation-bg.png"></div>
			<div class="absolute top-0 w-full h-[50%] bg-gradient-to-b from-[#00669E] opacity-60"></div>
			<div class="absolute -bottom-[400px] opacity-0" id="sun" data-depth="0.3"><img src="images/sun.png"></div>
		</div>

		<div class="text-gray-700 pt-[246px]">
			<div class="mb-32">
				<div class="flex items-center justify-center">
					<svg width="23.35" height="49.95" viewBox="0 0 23.35 49.95">
						<polygon points="23.35 0 0 49.95 4.05 49.95 23.35 8.69 23.35 0" style="fill: #878787;"/>
					</svg>
					<span class="font-ch font-medium text-5xl tracking-normal mx-2">中陽事業</span>
					<svg width="23.35" height="49.95" viewBox="0 0 23.35 49.95">
						<polygon points="23.35 0 0 49.95 4.05 49.95 23.35 8.69 23.35 0" style="fill: #878787;"/>
					</svg>
				</div>
				<div class="font-bold text-7xl text-center mt-6 mb-4">APEX GROUP</div>
				<div class="font-ch text-center text-[#878787]">跨足零售、藝文等產業激發前瞻思維，交叉結合不同專業領域 。</div>
			</div>
			<ul class="corporationCats flex items-center justify-center space-x-24">
				<li class="cursor-pointer"><img src="images/corporation-deco-1.svg"></li>
				<li class="cursor-pointer"><img src="images/corporation-deco-2.svg"></li>
				<li class="cursor-pointer"><img src="images/corporation-deco-3.svg"></li>
				<li class="cursor-pointer"><img src="images/corporation-deco-4.svg"></li>
				<li class="cursor-pointer"><img src="images/corporation-deco-5.svg"></li>
				<li class="cursor-pointer"><img src="images/corporation-deco-6.svg"></li>
				<li class="cursor-pointer"><img src="images/corporation-deco-7.svg"></li>
			</ul>
		</div>
	</div>

	<section v-scope="{
		posts: [{
			link: '',
			bg: 'images/corporation-1.jpg',
			deco: 'corporation-deco-white-1.svg',
			ch: '中陽建設',
			en: 'APEX Construction',
			title: '以建築人的職責，滿足家的嚮往',
			content: `我們不僅是頂尖、專業的建築專家，更是追求美感至上的都會空間策劃者，擅長整體建築規劃，提升居住價值為使命，以居住者的角度，設身處地思考以建築人的職責，滿足家的嚮往，只有做到最好，才能超越期待。`,
		}, {
			link: '',
			bg: 'images/corporation-2.jpg',
			deco: 'corporation-deco-white-2.svg',
			ch: '勤立營造',
			en: 'APEX Construction',
			title: '追求安全 、 創新 、 高效 、 品質卓越',
			content: `團隊從開發、規劃、採購、營造、機電、行銷、售服，甚至相關法律稅務，都採 「一條龍SOP 」 除確保工程營造品質，從細節處為消費者把關，不只使消費者住得安心，更希望實現一次結緣，終身知己的品牌承諾。`,
		}, {
			link: '',
			bg: 'images/corporation-3.jpg',
			deco: 'corporation-deco-white-3.svg',
			ch: '大買家',
			en: 'Save & Safe',
			title: '陪伴每一位顧客的幸福生活',
			content: `1993 、 1997 年分別成立大買家國光店、北屯店，2008 年採取多角化經營，成立招商營運部門，專營以品牌專櫃OUTLETO業態為核心的商店街、購物中心； 2009 年成立網路事業部門， 設立網路量販店，為全台第一家進軍網路店的量販品牌。`,
		}, {
			link: '',
			bg: 'images/corporation-4.jpg',
			deco: 'corporation-deco-white-4.svg',
			ch: '異想新樂園',
			en: 'Wonder Newland',
			title: '實踐真正寓教於樂',
			content: `首創與醫學級兒童發展教育團隊聯合打造， 位於台中大里， 佔地超過3000 坪， 為全台最大的室內親子樂園，以兒童發展理論為出發點， 開發出5大兒童學習發展領域， 八大主題區79項遊樂設施， 讓孩童在玩樂中， 培養未來潛能。`,
		}, {
			link: '',
			bg: 'images/corporation-5.jpg',
			deco: 'corporation-deco-white-5.svg',
			ch: '藝術廣場',
			en: 'Dali Art Plaza',
			title: '智慧建築 、 人性思維 、 有機共生 ， 集結當代科技',
			content: `規劃、建設、經營，打造文創數位3D示範基地為目標， 建造了包含兩座展覽館、一座多功能演藝廳， 以及可容納數千人的表演廣場， 同時引進藝廊、畫廊、文創商品商鋪、餐飲美食等商家，讓在地與全球的藝文作品有更多的交流。`,
		}, {
			link: '',
			bg: 'images/corporation-6.jpg',
			deco: 'corporation-deco-white-6.svg',
			ch: '中陽藝術',
			en: 'Dali Art Gallery',
			title: '讓生活與藝術更貼近',
			content: `中陽集團致力推動藝術普及與藝術教育，曾舉辦DALIART大里藝術村藝術家進駐計畫、台灣文創藝術博覽會，透過定期舉行各式藝文活動與群眾互動； 以全球視野收藏及推廣當代藝術， 期許藝術更親近生活。`,
		}, {
			link: '',
			bg: 'images/corporation-7.jpg',
			deco: 'corporation-deco-white-7.svg',
			ch: 'Ashine 選物好朋友',
			en: 'Ashine Select Shop',
			title: '選物樂趣，親子共享',
			content: `2023中陽新品牌進駐，Ashine選物好朋友結合親子天下OPEN圖書館特展，提供挑選屬於自己的獨特品味，啟發生活的美好契機，能與孩子一同沉浸在豐富的故事世界中，共同探索書海的無盡樂趣。`,
		}]
	}" class="corporationList">
		<div v-for="p,i in posts" class="relative group">
			<div class="relative">
				<div class="absolute w-full h-screen bg-no-repeat bg-fixed bg-center bg-gradient-to-r from-[#231815] opacity-50"></div>
				<div class="absolute w-full h-screen bg-no-repeat bg-fixed bg-center bg-gradient-to-t from-[#231815] opacity-50"></div>
				<div class="h-screen bg-no-repeat bg-fixed bg-center lg:bg-scroll lg:bg-cover lg:fixed lg:w-full lg:h-screen lg:top-0 lg:left-0" :style="'background-image: url('+p.bg+')'"></div>
			</div>

			<div class="fixed left-24 bottom-20 text-white max-w-[570px] tracking-normal">
				<div class="font-ch font-bold text-[32px]">{{p.ch}}</div>
				<div class="font-bold text-[48px]">{{p.en}}</div>
				<div class="font-ch font-medium text-[24px] mb-10">{{p.title}}</div>
				<div class="font-ch text-justify text-lg" v-html="p.content"></div>

				<a :href="p.link" class="inline-block mt-[104px]"><svg width="132.12" height="21.64" viewBox="0 0 132.12 21.64">
					<polygon points="132.12 21.6 95.75 4.6 95.75 7.54 125.79 21.6 132.12 21.6" style="fill: #fff;"/>
					<line x1="107.9" y1="20.89" y2="20.89" style="fill: none; stroke: #fff; stroke-miterlimit: 10; stroke-width: 1.5px;"/>
					<g>
					<path d="M15.19,.19V13.49h-1.98V2.32l-5.17,11.17h-.93L1.57,2.17V13.49H.39V.19H2.65L7.95,11.13,13.03,.19h2.17Z" style="fill: #fff;"/>
					<path d="M20.99,12.86c-1.08-.54-1.9-1.33-2.47-2.37-.57-1.03-.85-2.27-.85-3.71s.29-2.64,.85-3.66c.57-1.02,1.39-1.8,2.47-2.33,1.08-.53,2.36-.8,3.86-.8s2.78,.27,3.85,.8c1.07,.53,1.89,1.31,2.46,2.33,.57,1.02,.85,2.24,.85,3.66s-.29,2.68-.85,3.71c-.57,1.03-1.39,1.82-2.46,2.37-1.07,.54-2.35,.82-3.85,.82s-2.78-.27-3.86-.82Zm7.68-1.65c.9-1.04,1.35-2.51,1.35-4.43s-.45-3.32-1.34-4.34-2.17-1.53-3.83-1.53-2.94,.51-3.84,1.52c-.9,1.01-1.35,2.46-1.35,4.35s.45,3.39,1.35,4.43c.9,1.04,2.18,1.56,3.84,1.56s2.92-.52,3.82-1.56Z" style="fill: #fff;"/>
					<path d="M45.41,12.45c.25,.44,.49,.73,.73,.88v.15h-2.07c-.22-.24-.42-.54-.6-.91s-.38-.84-.6-1.41c-.35-.94-.72-1.66-1.08-2.18-.37-.51-.82-.85-1.35-1.02h-4.01v5.51h-1.98V.19h5.49c1.82,0,3.23,.32,4.23,.96,.99,.64,1.49,1.62,1.49,2.94,0,1.96-1.11,3.19-3.33,3.67,.48,.24,.9,.59,1.25,1.05s.69,1.09,1.01,1.89c.29,.73,.56,1.32,.81,1.76Zm-5.42-5.37c2.48,0,3.72-1,3.72-3s-1.24-2.98-3.72-2.98h-3.55V7.09h3.55Z" style="fill: #fff;"/>
					<path d="M47.78,.19h11.27v.91h-9.29V5.91h8.21v.89h-8.21v5.78h9.29v.91h-11.27V.19Z" style="fill: #fff;"/>
					</g>
				</svg></a>
			</div>
		</div>
	</section>
	
	<?php include 'footer.php'; ?>
</body>	

<?php include 'script.php'; ?>
</html>

<script>
gsap.to("#sun", 3, {
	bottom: 0,
	opacity: 1,
	ease: 'power2.out',
})

$("[data-depth]").each(function (i, el) {
	gsap.to(el, {
		scrollTrigger: {
			trigger: el,
			start: "top center",
			end: "bottom center",
			scrub: 2,
			// markers: true,
		},
		y: `${$(el).height() * el.dataset.depth}px`,
     	ease: "power1.out",
	});
})

$(".corporationCats li").on("click", function(){
	var _index = $(this).index()
	TweenMax.to($(window), 1, {
		scrollTo: {
			y: $(".corporationList >div").eq(_index),
		},
		ease:Power2.easeInOut,
	})
})
</script>