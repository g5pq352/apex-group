<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="px-12 mt-[300px] mb-[264px]">
		<div class="mb-36 group" data-enter="">
			<div class="flex items-center -mb-5 delay-1000 transition-all duration-500 opacity-0 group-[.is-enter]:opacity-100">
				<svg width="23.35" height="49.95" viewBox="0 0 23.35 49.95">
					<polygon points="23.35 0 0 49.95 4.05 49.95 23.35 8.69 23.35 0" style="fill: #666;"/>
				</svg>
				<span class="font-ch font-medium text-gray-700 text-5xl tracking-normal mx-2">最新建案</span>
				<svg width="23.35" height="49.95" viewBox="0 0 23.35 49.95">
					<polygon points="23.35 0 0 49.95 4.05 49.95 23.35 8.69 23.35 0" style="fill: #666;"/>
				</svg>
			</div>
			<div class="relative inline-block">
				<div class="absolute inset-0 after:absolute after:inset-x-0 after:bottom-[14px] after:top-[30px] after:bg-black-300 after:-z-10 group-[.is-enter]:animate-clip lg:after:top-[15px] lg:after:bottom-[10px]">
					<div class="font-en font-semibold text-7xl leading-normal text-white">Latest Projects</div>
				</div>

				<div class="font-en font-semibold text-7xl leading-normal text-black-300 delay-500 opacity-0 group-[.is-enter]:opacity-100">Latest Projects</div>
			</div>
		</div>

		<ul class="inline-flex space-x-28 mb-16">
			<li class="relative text-gray-400"><a href="javascript:;">
				<div class="">All</div>
				<div class="absolute left-0 tf-y w-max opacity-0">全部</div>
			</a></li>
			<li class="relative text-gray-400"><a href="javascript:;">
				<div class="">Office Building</div>
				<div class="absolute left-0 tf-y w-max opacity-0">辦公大樓</div>
			</a></li>
			<li class="relative text-gray-400"><a href="javascript:;">
				<div class="">Public Building</div>
				<div class="absolute left-0 tf-y w-max opacity-0">公共建築</div>
			</a></li>
			<li class="relative text-gray-400"><a href="javascript:;">
				<div class="">Apartment Building</div>
				<div class="absolute left-0 tf-y w-max opacity-0">公共建築</div>
			</a></li>
			<li class="relative text-gray-400"><a href="javascript:;">
				<div class="">Shopping Center</div>
				<div class="absolute left-0 tf-y w-max opacity-0">購物中心</div>
			</a></li>
		</ul>

		<div class="">
			<ul class="latestList-items space-y-64">
				<li class="flex">
					<div class="relative w-full min-h-[630px] mr-7">
						<div class="bg absolute w-full h-full" style="background: url('images/news-1-1.jpg') center center / cover;"></div>
						<ul class="bgList absolute w-full h-full inline-flex">
							<li class="absolute h-full w-[25%] left-0" data-img="images/news-1-1.jpg"></li>
							<li class="absolute h-full w-[25%] left-[25%]" data-img="images/news-1-2.jpg"></li>
							<li class="absolute h-full w-[25%] left-[50%]" data-img="images/news-1-1.jpg"></li>
							<li class="absolute h-full w-[25%] left-[75%]" data-img="images/news-1-2.jpg"></li>
						</ul>
					</div>
					<div class="max-w-[680px] flex flex-wrap justify-between">
						<div class=""><img src="images/news-1-2.jpg"></div>
						<div class="flex-auto flex justify-between items-end">
							<div class="">
								<div class="font-medium text-[22px] text-gray-600">Taichung Software Park</div>
								<div class="font-ch font-medium text-[26px] text-gray-700 mb-6">經濟部台中軟體園區</div>
								<div class="font-ch text-xl text-gray-600 mb-1">Find Different Ways</div>
								<div class="flex items-center text-[#B0B0B0] text-lg space-x-3">
									<div class="font-medium">2024</div>
									<div class="">,</div>
									<div class="font-medium">Miaoli County</div>
									<div class="font-ch">/　公共建築</div>
								</div>
							</div>
							<div class=""><a href="latest_detail.php"><svg height="21.64" viewBox="0 0 132.12 21.64">
								<polygon points="132.12 21.6 95.75 4.6 95.75 7.54 125.79 21.6 132.12 21.6" style="fill: #888;"/>
								<line x1="107.9" y1="20.89" y2="20.89" style="fill: none; stroke: #888; stroke-miterlimit: 10; stroke-width: 1.5px;"/>
								<g>
									<path d="M15.19,.19V13.49h-1.98V2.32l-5.17,11.17h-.93L1.57,2.17V13.49H.39V.19H2.65L7.95,11.13,13.03,.19h2.17Z" style="fill: #333;"/>
									<path d="M20.99,12.86c-1.08-.54-1.9-1.33-2.47-2.37-.57-1.03-.85-2.27-.85-3.71s.29-2.64,.85-3.66c.57-1.02,1.39-1.8,2.47-2.33,1.08-.53,2.36-.8,3.86-.8s2.78,.27,3.85,.8c1.07,.53,1.89,1.31,2.46,2.33,.57,1.02,.85,2.24,.85,3.66s-.29,2.68-.85,3.71c-.57,1.03-1.39,1.82-2.46,2.37-1.07,.54-2.35,.82-3.85,.82s-2.78-.27-3.86-.82Zm7.68-1.65c.9-1.04,1.35-2.51,1.35-4.43s-.45-3.32-1.34-4.34c-.89-1.02-2.17-1.53-3.83-1.53s-2.94,.51-3.84,1.52-1.35,2.46-1.35,4.35,.45,3.39,1.35,4.43,2.18,1.56,3.84,1.56,2.92-.52,3.82-1.56Z" style="fill: #333;"/>
									<path d="M45.41,12.45c.25,.44,.49,.73,.73,.88v.15h-2.07c-.22-.24-.42-.54-.6-.91-.18-.37-.38-.84-.6-1.41-.35-.94-.72-1.66-1.08-2.18-.37-.51-.82-.85-1.35-1.02h-4.01v5.51h-1.98V.19h5.49c1.82,0,3.23,.32,4.23,.96,.99,.64,1.49,1.62,1.49,2.94,0,1.96-1.11,3.19-3.33,3.67,.48,.24,.9,.59,1.25,1.05,.35,.46,.69,1.09,1.01,1.89,.29,.73,.56,1.32,.81,1.76Zm-5.42-5.37c2.48,0,3.72-1,3.72-3s-1.24-2.98-3.72-2.98h-3.55V7.09h3.55Z" style="fill: #333;"/>
									<path d="M47.78,.19h11.27v.91h-9.29V5.91h8.21v.89h-8.21v5.78h9.29v.91h-11.27V.19Z" style="fill: #333;"/>
								</g>
							</svg></a></div>
						</div>
					</div>
				</li>
				<li class="flex">
					<div class="max-w-[680px] flex flex-wrap justify-between">
						<div class=""><img src="images/news-2-2.jpg"></div>
						<div class="flex-auto flex justify-between items-end">
							<div class="">
								<div class="font-medium text-[22px] text-gray-600">Above Expectation</div>
								<div class="font-ch font-medium text-[26px] text-gray-700 mb-6">中陽旭月</div>
								<div class="font-ch text-xl text-gray-600 mb-1">晝迎序．夜引月</div>
								<div class="flex items-center text-[#B0B0B0] text-lg space-x-3">
									<div class="font-medium">2024</div>
									<div class="">,</div>
									<div class="font-medium">Taichung</div>
									<div class="font-ch">/　商辦大樓</div>
								</div>
							</div>
							<div class=""><a href="latest_detail.php"><svg height="21.64" viewBox="0 0 132.12 21.64">
								<polygon points="132.12 21.6 95.75 4.6 95.75 7.54 125.79 21.6 132.12 21.6" style="fill: #888;"/>
								<line x1="107.9" y1="20.89" y2="20.89" style="fill: none; stroke: #888; stroke-miterlimit: 10; stroke-width: 1.5px;"/>
								<g>
									<path d="M15.19,.19V13.49h-1.98V2.32l-5.17,11.17h-.93L1.57,2.17V13.49H.39V.19H2.65L7.95,11.13,13.03,.19h2.17Z" style="fill: #333;"/>
									<path d="M20.99,12.86c-1.08-.54-1.9-1.33-2.47-2.37-.57-1.03-.85-2.27-.85-3.71s.29-2.64,.85-3.66c.57-1.02,1.39-1.8,2.47-2.33,1.08-.53,2.36-.8,3.86-.8s2.78,.27,3.85,.8c1.07,.53,1.89,1.31,2.46,2.33,.57,1.02,.85,2.24,.85,3.66s-.29,2.68-.85,3.71c-.57,1.03-1.39,1.82-2.46,2.37-1.07,.54-2.35,.82-3.85,.82s-2.78-.27-3.86-.82Zm7.68-1.65c.9-1.04,1.35-2.51,1.35-4.43s-.45-3.32-1.34-4.34c-.89-1.02-2.17-1.53-3.83-1.53s-2.94,.51-3.84,1.52-1.35,2.46-1.35,4.35,.45,3.39,1.35,4.43,2.18,1.56,3.84,1.56,2.92-.52,3.82-1.56Z" style="fill: #333;"/>
									<path d="M45.41,12.45c.25,.44,.49,.73,.73,.88v.15h-2.07c-.22-.24-.42-.54-.6-.91-.18-.37-.38-.84-.6-1.41-.35-.94-.72-1.66-1.08-2.18-.37-.51-.82-.85-1.35-1.02h-4.01v5.51h-1.98V.19h5.49c1.82,0,3.23,.32,4.23,.96,.99,.64,1.49,1.62,1.49,2.94,0,1.96-1.11,3.19-3.33,3.67,.48,.24,.9,.59,1.25,1.05,.35,.46,.69,1.09,1.01,1.89,.29,.73,.56,1.32,.81,1.76Zm-5.42-5.37c2.48,0,3.72-1,3.72-3s-1.24-2.98-3.72-2.98h-3.55V7.09h3.55Z" style="fill: #333;"/>
									<path d="M47.78,.19h11.27v.91h-9.29V5.91h8.21v.89h-8.21v5.78h9.29v.91h-11.27V.19Z" style="fill: #333;"/>
								</g>
							</svg></a></div>
						</div>
					</div>
					<div class="relative w-full min-h-[630px] ml-7">
						<div class="bg absolute w-full h-full" style="background: url('images/news-2-1.jpg') center center / cover;"></div>
						<ul class="bgList absolute w-full h-full inline-flex">
							<li class="absolute h-full w-[25%] left-0" data-img="images/news-2-1.jpg"></li>
							<li class="absolute h-full w-[25%] left-[25%]" data-img="images/news-2-2.jpg"></li>
							<li class="absolute h-full w-[25%] left-[50%]" data-img="images/news-2-1.jpg"></li>
							<li class="absolute h-full w-[25%] left-[75%]" data-img="images/news-2-2.jpg"></li>
						</ul>
					</div>
				</li>
				<li class="flex">
					<div class="relative w-full min-h-[630px] mr-7">
						<div class="bg absolute w-full h-full" style="background: url('images/news-3-1.jpg') center center / cover;"></div>
						<ul class="bgList absolute w-full h-full inline-flex">
							<li class="absolute h-full w-[25%] left-0" data-img="images/news-3-1.jpg"></li>
							<li class="absolute h-full w-[25%] left-[25%]" data-img="images/news-3-2.jpg"></li>
							<li class="absolute h-full w-[25%] left-[50%]" data-img="images/news-3-1.jpg"></li>
							<li class="absolute h-full w-[25%] left-[75%]" data-img="images/news-3-2.jpg"></li>
						</ul>
					</div>
					<div class="max-w-[680px] flex flex-wrap justify-between">
						<div class=""><img src="images/news-3-2.jpg"></div>
						<div class="flex-auto flex justify-between items-end">
							<div class="">
								<div class="font-medium text-[22px] text-gray-600">Omotesando</div>
								<div class="font-ch font-medium text-[26px] text-gray-700 mb-6">表參道</div>
								<div class="font-ch text-xl text-gray-600 mb-1">精彩盛極 ， 表裏如一 。</div>
								<div class="flex items-center text-[#B0B0B0] text-lg space-x-3">
									<div class="font-medium">2024</div>
									<div class="">,</div>
									<div class="font-medium">Miaoli County</div>
									<div class="font-ch">/　住宅大樓</div>
								</div>
							</div>
							<div class=""><a href="latest_detail.php"><svg height="21.64" viewBox="0 0 132.12 21.64">
								<polygon points="132.12 21.6 95.75 4.6 95.75 7.54 125.79 21.6 132.12 21.6" style="fill: #888;"/>
								<line x1="107.9" y1="20.89" y2="20.89" style="fill: none; stroke: #888; stroke-miterlimit: 10; stroke-width: 1.5px;"/>
								<g>
									<path d="M15.19,.19V13.49h-1.98V2.32l-5.17,11.17h-.93L1.57,2.17V13.49H.39V.19H2.65L7.95,11.13,13.03,.19h2.17Z" style="fill: #333;"/>
									<path d="M20.99,12.86c-1.08-.54-1.9-1.33-2.47-2.37-.57-1.03-.85-2.27-.85-3.71s.29-2.64,.85-3.66c.57-1.02,1.39-1.8,2.47-2.33,1.08-.53,2.36-.8,3.86-.8s2.78,.27,3.85,.8c1.07,.53,1.89,1.31,2.46,2.33,.57,1.02,.85,2.24,.85,3.66s-.29,2.68-.85,3.71c-.57,1.03-1.39,1.82-2.46,2.37-1.07,.54-2.35,.82-3.85,.82s-2.78-.27-3.86-.82Zm7.68-1.65c.9-1.04,1.35-2.51,1.35-4.43s-.45-3.32-1.34-4.34c-.89-1.02-2.17-1.53-3.83-1.53s-2.94,.51-3.84,1.52-1.35,2.46-1.35,4.35,.45,3.39,1.35,4.43,2.18,1.56,3.84,1.56,2.92-.52,3.82-1.56Z" style="fill: #333;"/>
									<path d="M45.41,12.45c.25,.44,.49,.73,.73,.88v.15h-2.07c-.22-.24-.42-.54-.6-.91-.18-.37-.38-.84-.6-1.41-.35-.94-.72-1.66-1.08-2.18-.37-.51-.82-.85-1.35-1.02h-4.01v5.51h-1.98V.19h5.49c1.82,0,3.23,.32,4.23,.96,.99,.64,1.49,1.62,1.49,2.94,0,1.96-1.11,3.19-3.33,3.67,.48,.24,.9,.59,1.25,1.05,.35,.46,.69,1.09,1.01,1.89,.29,.73,.56,1.32,.81,1.76Zm-5.42-5.37c2.48,0,3.72-1,3.72-3s-1.24-2.98-3.72-2.98h-3.55V7.09h3.55Z" style="fill: #333;"/>
									<path d="M47.78,.19h11.27v.91h-9.29V5.91h8.21v.89h-8.21v5.78h9.29v.91h-11.27V.19Z" style="fill: #333;"/>
								</g>
							</svg></a></div>
						</div>
					</div>
				</li>
				<li class="flex">
					<div class="max-w-[680px] flex flex-wrap justify-between">
						<div class=""><img src="images/news-4-2.jpg"></div>
						<div class="flex-auto flex justify-between items-end">
							<div class="">
								<div class="font-medium text-[22px] text-gray-600">Full House</div>
								<div class="font-ch font-medium text-[26px] text-gray-700 mb-6">中陽森</div>
								<div class="font-ch text-xl text-gray-600 mb-1">翱翔 「森活綠境」 慢建築 。</div>
								<div class="flex items-center text-[#B0B0B0] text-lg space-x-3">
									<div class="font-medium">2024</div>
									<div class="">,</div>
									<div class="font-medium">Hsinchu County</div>
									<div class="font-ch">/　住宅大樓</div>
								</div>
							</div>
							<div class=""><a href="latest_detail.php"><svg height="21.64" viewBox="0 0 132.12 21.64">
								<polygon points="132.12 21.6 95.75 4.6 95.75 7.54 125.79 21.6 132.12 21.6" style="fill: #888;"/>
								<line x1="107.9" y1="20.89" y2="20.89" style="fill: none; stroke: #888; stroke-miterlimit: 10; stroke-width: 1.5px;"/>
								<g>
									<path d="M15.19,.19V13.49h-1.98V2.32l-5.17,11.17h-.93L1.57,2.17V13.49H.39V.19H2.65L7.95,11.13,13.03,.19h2.17Z" style="fill: #333;"/>
									<path d="M20.99,12.86c-1.08-.54-1.9-1.33-2.47-2.37-.57-1.03-.85-2.27-.85-3.71s.29-2.64,.85-3.66c.57-1.02,1.39-1.8,2.47-2.33,1.08-.53,2.36-.8,3.86-.8s2.78,.27,3.85,.8c1.07,.53,1.89,1.31,2.46,2.33,.57,1.02,.85,2.24,.85,3.66s-.29,2.68-.85,3.71c-.57,1.03-1.39,1.82-2.46,2.37-1.07,.54-2.35,.82-3.85,.82s-2.78-.27-3.86-.82Zm7.68-1.65c.9-1.04,1.35-2.51,1.35-4.43s-.45-3.32-1.34-4.34c-.89-1.02-2.17-1.53-3.83-1.53s-2.94,.51-3.84,1.52-1.35,2.46-1.35,4.35,.45,3.39,1.35,4.43,2.18,1.56,3.84,1.56,2.92-.52,3.82-1.56Z" style="fill: #333;"/>
									<path d="M45.41,12.45c.25,.44,.49,.73,.73,.88v.15h-2.07c-.22-.24-.42-.54-.6-.91-.18-.37-.38-.84-.6-1.41-.35-.94-.72-1.66-1.08-2.18-.37-.51-.82-.85-1.35-1.02h-4.01v5.51h-1.98V.19h5.49c1.82,0,3.23,.32,4.23,.96,.99,.64,1.49,1.62,1.49,2.94,0,1.96-1.11,3.19-3.33,3.67,.48,.24,.9,.59,1.25,1.05,.35,.46,.69,1.09,1.01,1.89,.29,.73,.56,1.32,.81,1.76Zm-5.42-5.37c2.48,0,3.72-1,3.72-3s-1.24-2.98-3.72-2.98h-3.55V7.09h3.55Z" style="fill: #333;"/>
									<path d="M47.78,.19h11.27v.91h-9.29V5.91h8.21v.89h-8.21v5.78h9.29v.91h-11.27V.19Z" style="fill: #333;"/>
								</g>
							</svg></a></div>
						</div>
					</div>
					<div class="relative w-full min-h-[630px] ml-7">
						<div class="bg absolute w-full h-full" style="background: url('images/news-4-1.jpg') center center / cover;"></div>
						<ul class="bgList absolute w-full h-full inline-flex">
							<li class="absolute h-full w-[25%] left-0" data-img="images/news-4-1.jpg"></li>
							<li class="absolute h-full w-[25%] left-[25%]" data-img="images/news-4-2.jpg"></li>
							<li class="absolute h-full w-[25%] left-[50%]" data-img="images/news-4-1.jpg"></li>
							<li class="absolute h-full w-[25%] left-[75%]" data-img="images/news-4-2.jpg"></li>
						</ul>
					</div>
				</li>
			</ul>
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

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>
</html>

<script>
$(".latestList-items >li .bgList").each(function(i, el){
	$("li", el).hover(function(){
		$(el).closest("li").find(".bg").css("background", `url('${$(this).data("img")}') center center / cover`)
	})
})
</script>