<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>

	<style type="text/css">
	.fade-enter-active,
	.fade-leave-active {
		transition: all .2s;
	}

	.fade-enter,
	.fade-leave-to {
		opacity: 0;
	}
	</style>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="" id="projectAll">
		<div class="relative px-[184px] mt-[300px] mb-[202px]">
			<div class="flex justify-between">
				<div class="group" data-enter="">
					<div class="flex items-center -mb-5 delay-1000 transition-all duration-500 opacity-0 group-[.is-enter]:opacity-100">
						<svg width="23.35" height="49.95" viewBox="0 0 23.35 49.95">
							<polygon points="23.35 0 0 49.95 4.05 49.95 23.35 8.69 23.35 0" style="fill: #666;"/>
						</svg>
						<span class="font-ch font-medium text-gray-700 text-5xl tracking-normal mx-2">所有建案</span>
						<svg width="23.35" height="49.95" viewBox="0 0 23.35 49.95">
							<polygon points="23.35 0 0 49.95 4.05 49.95 23.35 8.69 23.35 0" style="fill: #666;"/>
						</svg>
					</div>
					<div class="relative inline-block">
						<div class="absolute inset-0 after:absolute after:inset-x-0 after:bottom-[14px] after:top-[30px] after:bg-black-300 after:-z-10 group-[.is-enter]:animate-clip lg:after:top-[15px] lg:after:bottom-[10px]">
							<div class="font-en font-semibold text-7xl leading-normal text-white">All Projects</div>
						</div>
						<div class="font-en font-semibold text-7xl leading-normal text-black-300 delay-500 opacity-0 group-[.is-enter]:opacity-100">All Projects</div>
					</div>	
				</div>
				<div class="project-year mt-[108px]">
					<select name="year" id="" class="">
						<option value="0">Year</option>
						<option value="2024">2024</option>
						<option value="2020">2020</option>
						<option value="2010">2010</option>
					</select>
				</div>
			</div>
		</div>

		<div class="projectAllWrap">
			<transition-group name="fade" mode="out-in" class="space-y-24">
				<article v-if="cat == 2024 || cat == 0" key="a0">
					<div class="text-[88px] font-bold px-[184px] text-black-300">2024</div>
					<ul class="head-list grid px-[184px] py-8 font-bold text-[27px] text-black-300 border-y-[1px] border-black-300">
						<li class="">Project</li>
						<li class="">Location</li>
						<li class="text-center">Year</li>
						<li class="text-center">Type</li>
						<li class="text-center">Site Area</li>
						<li class="">Experience</li>
					</ul>
					<div class="relative">
						<div class="absolute w-full h-full top-0 left-0 bg-gradient-to-b from-[#F9F9EF] to-white opacity-60 -z-10"></div>
						<ul class="projectAll-items grid px-[184px] py-5 text-lg font-ch text-gray tracking-normal items-center border-b-[1px] border-[#B0B0B0]">
							<li class="font-medium text-[22px]">中陽旭月</li>
							<li>臺中市 , 南屯區</li>
							<li class="text-center">2024</li>
							<li class="text-center">住宅大樓</li>
							<li class="text-center">782 坪</li>
							<li>第 25 屆國家建築金質獎 - 規劃設計金獎</li>
						</ul>
						<ul class="projectAll-items grid px-[184px] py-5 text-lg font-ch text-gray tracking-normal items-center border-b-[1px] border-[#B0B0B0]">
							<li class="font-medium text-[22px]">中陽旭月</li>
							<li>臺中市 , 南屯區</li>
							<li class="text-center">2024</li>
							<li class="text-center">住宅大樓</li>
							<li class="text-center">782 坪</li>
							<li>第 25 屆國家建築金質獎 - 規劃設計金獎</li>
						</ul>
						<ul class="projectAll-items grid px-[184px] py-5 text-lg font-ch text-gray tracking-normal items-center border-b-[1px] border-[#B0B0B0]">
							<li class="font-medium text-[22px]">中陽旭月</li>
							<li>臺中市 , 南屯區</li>
							<li class="text-center">2024</li>
							<li class="text-center">住宅大樓</li>
							<li class="text-center">782 坪</li>
							<li>第 25 屆國家建築金質獎 - 規劃設計金獎</li>
						</ul>
					</div>
				</article>

				<article v-if="cat == 2020 || cat == 0" key="a1">
					<div class="text-[88px] font-bold px-[184px] text-black-300">2020 <span class="text-[60px]">s</span></div>
					<ul class="head-list grid px-[184px] py-8 font-bold text-[27px] text-black-300 border-y-[1px] border-black-300">
						<li class="">Project</li>
						<li class="">Location</li>
						<li class="text-center">Year</li>
						<li class="text-center">Type</li>
						<li class="text-center">Site Area</li>
						<li class="">Experience</li>
					</ul>
					<div class="relative">
						<div class="absolute w-full h-full top-0 left-0 bg-gradient-to-b from-[#F9F9EF] to-white opacity-60 -z-10"></div>
						<ul class="projectAll-items grid px-[184px] py-5 text-lg font-ch text-gray tracking-normal items-center border-b-[1px] border-[#B0B0B0]">
							<li class="font-medium text-[22px]">中陽旭月</li>
							<li>臺中市 , 南屯區</li>
							<li class="text-center">2023</li>
							<li class="text-center">住宅大樓</li>
							<li class="text-center">782 坪</li>
							<li>第 25 屆國家建築金質獎 - 規劃設計金獎</li>
						</ul>
						<ul class="projectAll-items grid px-[184px] py-5 text-lg font-ch text-gray tracking-normal items-center border-b-[1px] border-[#B0B0B0]">
							<li class="font-medium text-[22px]">中陽旭月</li>
							<li>臺中市 , 南屯區</li>
							<li class="text-center">2023</li>
							<li class="text-center">住宅大樓</li>
							<li class="text-center">782 坪</li>
							<li>第 25 屆國家建築金質獎 - 規劃設計金獎</li>
						</ul>
						<ul class="projectAll-items grid px-[184px] py-5 text-lg font-ch text-gray tracking-normal items-center border-b-[1px] border-[#B0B0B0]">
							<li class="font-medium text-[22px]">中陽旭月</li>
							<li>臺中市 , 南屯區</li>
							<li class="text-center">2022</li>
							<li class="text-center">住宅大樓</li>
							<li class="text-center">782 坪</li>
							<li>第 25 屆國家建築金質獎 - 規劃設計金獎</li>
						</ul>
						<ul class="projectAll-items grid px-[184px] py-5 text-lg font-ch text-gray tracking-normal items-center border-b-[1px] border-[#B0B0B0]">
							<li class="font-medium text-[22px]">中陽樓擇院</li>
							<li>新竹市 , 東區  </li>
							<li class="text-center">2022</li>
							<li class="text-center">住宅大樓</li>
							<li class="text-center">698 坪</li>
							<li>-</li>
						</ul>
					</div>
				</article>

				<article v-if="cat == 2010 || cat == 0" key="a2">
					<div class="text-[88px] font-bold px-[184px] text-black-300">2010 <span class="text-[60px]">s</span></div>
					<ul class="head-list grid px-[184px] py-8 font-bold text-[27px] text-black-300 border-y-[1px] border-black-300">
						<li class="">Project</li>
						<li class="">Location</li>
						<li class="text-center">Year</li>
						<li class="text-center">Type</li>
						<li class="text-center">Site Area</li>
						<li class="">Experience</li>
					</ul>
					<div class="relative">
						<div class="absolute w-full h-full top-0 left-0 bg-gradient-to-b from-[#F9F9EF] to-white opacity-60 -z-10"></div>
						<ul class="projectAll-items grid px-[184px] py-5 text-lg font-ch text-gray tracking-normal items-center border-b-[1px] border-[#B0B0B0]">
							<li class="font-medium text-[22px]">中陽旭月</li>
							<li>臺中市 , 南屯區</li>
							<li class="text-center">2024</li>
							<li class="text-center">住宅大樓</li>
							<li class="text-center">782 坪</li>
							<li>第 25 屆國家建築金質獎 - 規劃設計金獎</li>
						</ul>
						<ul class="projectAll-items grid px-[184px] py-5 text-lg font-ch text-gray tracking-normal items-center border-b-[1px] border-[#B0B0B0]">
							<li class="font-medium text-[22px]">中陽旭月</li>
							<li>臺中市 , 南屯區</li>
							<li class="text-center">2024</li>
							<li class="text-center">住宅大樓</li>
							<li class="text-center">782 坪</li>
							<li>第 25 屆國家建築金質獎 - 規劃設計金獎</li>
						</ul>
						<ul class="projectAll-items grid px-[184px] py-5 text-lg font-ch text-gray tracking-normal items-center border-b-[1px] border-[#B0B0B0]">
							<li class="font-medium text-[22px]">中陽旭月</li>
							<li>臺中市 , 南屯區</li>
							<li class="text-center">2024</li>
							<li class="text-center">住宅大樓</li>
							<li class="text-center">782 坪</li>
							<li>第 25 屆國家建築金質獎 - 規劃設計金獎</li>
						</ul>
					</div>
				</article>
			</transition-group>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>
</html>

<script>

$(window).on("load", function() {
	new Vue({
		el: '#projectAll',
		data: {
			cat: 0,
		},
		computed: {},
		methods: {},
		filters: {},
		mounted() {
			titleEnter();
			
			$("select").niceSelect();

			$("select").on("change", (e) => {
				this.cat = e.currentTarget.value
			})
		},
		updated() {},
	})
})

</script>