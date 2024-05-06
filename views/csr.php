<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="max-w-[1560px] mx-auto mt-[300px] mb-[256px]">
		<div class="flex items-end justify-between">
			<div class="flex items-end text-black-300">
				<div class="font-bold text-7xl text-center leading-[0.8] mr-12">CSR</div>
				<div class="flex items-center justify-center">
					<svg width="23.35" height="49.95" viewBox="0 0 23.35 49.95">
						<polygon points="23.35 0 0 49.95 4.05 49.95 23.35 8.69 23.35 0" style="fill: #666;"/>
					</svg>
					<span class="font-ch font-medium text-5xl tracking-normal mx-2">企業永續</span>
					<svg width="23.35" height="49.95" viewBox="0 0 23.35 49.95">
						<polygon points="23.35 0 0 49.95 4.05 49.95 23.35 8.69 23.35 0" style="fill: #666;"/>
					</svg>
				</div>
			</div>
			<div class="">
				<ul class="inline-flex space-x-28">
					<li class="relative text-gray-400"><a href="javascript:;">
						<div class="">All</div>
						<div class="absolute left-0 tf-y w-max opacity-0">全部</div>
					</a></li>
					<li class="relative text-gray-400"><a href="javascript:;">
						<div class="">Green day</div>
						<div class="absolute left-0 tf-y w-max opacity-0">年輕歲月</div>
					</a></li>
					<li class="relative text-gray-400"><a href="javascript:;">
						<div class="">Charity</div>
						<div class="absolute left-0 tf-y w-max opacity-0">慈善機構</div>
					</a></li>
					<li class="relative text-gray-400"><a href="javascript:;">
						<div class="">Daily life</div>
						<div class="absolute left-0 tf-y w-max opacity-0">日常生活</div>
					</a></li>
				</ul>
			</div>
		</div>

		<div class="relative mt-10 flex">
			<div class="mr-[114px]">
				<div class="font-ch">
					<div class="text-[25px]">OUR</div>
					<div class="text-[65px] writing-vertical leading-none">LIVELY LIFE</div>
				</div>
			</div>
			<div class="pt-12 flex-auto">
				<ul v-scope="{
					posts: [{
						link: `csr/走吧! 3.12一起植樹去`,
						cat: 'Green day',
						date: '2024.03.01',
						title: '走吧! 3.12一起植樹去',
						content: `中陽集團致力於營造綠意盎然的城市。3/12舉行戶外植樹日，鼓勵住戶共同參與這場自然奏鳴曲。植樹不僅是美麗風景，更是對未來世代的許諾，為環境永續發展奠定基礎......`,
						pic_1: 'images/csr-1-1.jpg',
						pic_2: 'images/csr-1-2.jpg',
					}, {
						link: `csr/平安夜，與孩子們的約定，聖誕老人到你家`,
						cat: 'Charity ',
						date: '2023.12.24',
						title: '平安夜，與孩子們的約定，聖誕老人到你家',
						content: `中陽集團致力於營造綠意盎然的城市。3/12舉行戶外植樹日，鼓勵住戶共同參與這場自然奏鳴曲。植樹不僅是美麗風景，更是對未來世代的許諾，為環境永續發展奠定基礎......`,
						pic_1: 'images/csr-2-1.jpg',
						pic_2: 'images/csr-2-2.jpg',
					}, {
						link: `csr/2023 年末，全員活力淨街`,
						cat: 'Daily life',
						date: '2023.12.20',
						title: '2023 年末，全員活力淨街',
						content: `中陽集團致力於營造綠意盎然的城市。3/12舉行戶外植樹日，鼓勵住戶共同參與這場自然奏鳴曲。植樹不僅是美麗風景，更是對未來世代的許諾，為環境永續發展奠定基礎......`,
						pic_1: 'images/csr-3-1.jpg',
						pic_2: 'images/csr-3-2.jpg',
					}, {
						link: `csr/5000份暖心煲湯，寒冷的日子裡，分享中陽溫度`,
						cat: 'Green day',
						date: '2024.03.01',
						title: '5000份暖心煲湯，寒冷的日子裡，分享中陽溫度',
						content: `中陽集團致力於營造綠意盎然的城市。3/12舉行戶外植樹日，鼓勵住戶共同參與這場自然奏鳴曲。植樹不僅是美麗風景，更是對未來世代的許諾，為環境永續發展奠定基礎......`,
						pic_1: 'images/csr-4-1.jpg',
						pic_2: 'images/csr-4-2.jpg',
					}, {
						link: `csr/森呼吸，一同揮灑綠色魔法打造綠色城市`,
						cat: 'Green day',
						date: '2024.03.01',
						title: '森呼吸，一同揮灑綠色魔法打造綠色城市',
						content: `中陽集團致力於營造綠意盎然的城市。3/12舉行戶外植樹日，鼓勵住戶共同參與這場自然奏鳴曲。植樹不僅是美麗風景，更是對未來世代的許諾，為環境永續發展奠定基礎......`,
						pic_1: 'images/csr-1-1.jpg',
						pic_2: 'images/csr-1-2.jpg',
					}]
				}" class="space-y-[58px]">
					<li v-for="(p, i) in posts" class="relative rounded-tl-[47px] overflow-hidden" :class="[
						i==4 ? '' : 'pb-[58px] border-b border-[#8080802e]'
					]">
						<a :href="p.link" class="relative inline-block py-8 group">
							<div class="absolute top-0 left-0 w-full h-full bg-[#F4F4F4] opacity-60 -z-10 group-hover:bg-[#F9F9EF] transition-all duration-300 group-hover:opacity-100"></div>
							<div class="absolute top-0 left-0 flex items-center">
								<div class="w-[92px] h-[92px] bg-[#CACACA] text-white rounded-full flex flex-col items-center justify-center mr-5 transition-all duration-300 group-hover:bg-black-300 group-hover:text-[#A8A8A8]">
									<div class="">CSR</div>
									<div class="">0{{i+1}}</div>
								</div>
								<div class="text-[#979797] border-b border-[#979797] pb-1 opacity-50 transition-all duration-300 group-hover:opacity-100">{{p.cat}}</div>
							</div>
							<div class="pl-10 flex items-end">
								<div class="mr-[132px]">
									<div class="font-medium text-gray-300 mb-2 opacity-50 transition-all duration-300 group-hover:opacity-100">{{p.date}}</div>
									<div class="font-ch text-[27px] font-bold text-justify text-gray-700 mb-12 tracking-normal opacity-40 transition-all duration-300 group-hover:opacity-100">{{p.title}}</div>
									<div class="font-ch text-[#808080] text-justify tracking-normal opacity-0 transition-all duration-300 group-hover:opacity-100" v-html="p.content"></div>
								</div>
								<div class="shrink-0 flex space-x-2 opacity-25 transition-all duration-300 group-hover:opacity-100">
									<div class=""><img :src="p.pic_1"></div>
									<div class=""><img :src="p.pic_2"></div>
								</div>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="flex justify-center mb-32">
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
	
	<?php include 'footer.php'; ?>
</body>	

<?php include 'script.php'; ?>
</html>

<script>

</script>