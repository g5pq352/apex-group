<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>
	
	<div class="mt-[334px]" id="asset">
		<div class="relative mb-16 pl-[154px] mr-[130px]">
			<div class="flex items-start">
				<div class="flex items-center mr-7">
					<svg width="18.85" height="40.33" viewBox="0 0 18.85 40.33">
						<polygon points="18.85 0 0 40.33 3.27 40.33 18.85 7.01 18.85 0" style="fill: #666;"/>
					</svg>
					<span class="font-ch font-medium text-black-300 text-5xl tracking-normal mx-2">資產租售</span>
					<svg width="18.85" height="40.33" viewBox="0 0 18.85 40.33">
						<polygon points="18.85 0 0 40.33 3.27 40.33 18.85 7.01 18.85 0" style="fill: #666;"/>
					</svg>
				</div>
				<div class="font-bold text-[92px] text-black-300 leading-none">ASSET LEASING & SALES</div>
			</div>

			<div class="asset-selectWrap absolute top-[158px] right-0 flex items-center space-x-5">
				<div class="item">
					<select name="" id="" ref="selectPing">
						<option value="">Ping</option>
						<option value="55-100">55-100</option>
						<option value="101-200">101-200</option>
						<option value="201-500">201-500</option>
						<option value="500 以上">500 以上</option>
					</select>
				</div>
				<div class="item">
					<select name="" id="" ref="selectType">
						<option value="">Type</option>
						<option value="住宅大樓1">住宅大樓1</option>
						<option value="住宅大樓2">住宅大樓2</option>
						<option value="住宅大樓3">住宅大樓3</option>
						<option value="住宅大樓4">住宅大樓4</option>
					</select>
				</div>
				<div class="item">
					<select name="" id="" ref="selectYear">
						<option value="">Year</option>
						<option value="2024">2024</option>
						<option value="2023">2023</option>
						<option value="2022">2022</option>
						<option value="2021">2021</option>
					</select>
				</div>
				<div class="item">
					<select name="" id="" ref="selectRegion">
						<option value="">Region</option>
						<option value="北部">北部</option>
						<option value="中部">中部</option>
						<option value="南部">南部</option>
						<option value="東部">東部</option>
					</select>
				</div>
			</div>
		</div>

		<div class="flex h-[110vh]">
			<div class="flex-auto pl-[154px] pr-[92px] pb-[94px] bg-[#F9F9EF]">
				<div class="flex items-end h-full">
					<a :href="'asset_detail.php?id='+first.id" class="group inline-block bg-white w-full p-10 hover:bg-black-300">
						<div class="relative h-[54vh]" :style="'background: url('+ first.pic +') center center / cover'">
							<div class="absolute tf w-28 h-28 rounded-full bg-[#1A1A1A] flex items-center justify-center opacity-0 transition-all duration-300 group-hover:opacity-100"><div class="text-white">MORE</div></div>
						</div>
						<div class="text-xs text-gray mt-2 mb-7 transition-all duration-300 group-hover:text-[#B1B1B1]" v-html="first.note"></div>
						<div class="text-black-300 mb-16 transition-all duration-300 group-hover:text-white">
							<div class="flex items-center mb-2">
								<svg width="12.9" height="27.61" viewBox="0 0 12.9 27.61">
									<polygon points="12.9 0 0 27.61 2.24 27.61 12.9 4.8 12.9 0" class="full-gray-300 transition-all duration-300 group-hover:fill-white"/>
								</svg>
								<span class="font-ch font-medium text-[22px] tracking-normal mx-2">{{first.ch}}</span>
								<svg width="12.9" height="27.61" viewBox="0 0 12.9 27.61">
									<polygon points="12.9 0 0 27.61 2.24 27.61 12.9 4.8 12.9 0" class="full-gray-300 transition-all duration-300 group-hover:fill-white"/>
								</svg>
							</div>
							<div class="font-bold text-[39px] leading-none">{{first.en}}</div>
						</div>
						<div class="border-t-2 border-gray-600 py-4">
							<ul class="grid grid-cols-4 space-x-7">
								<li>
									<div class="text-xl text-black-300 font-bold mb-1 transition-all duration-300 group-hover:text-[#E4E4E4]">Ping</div>
									<div class="font-ch text-[#979797] tracking-normal transition-all duration-300 group-hover:text-[#B1B1B1]">{{first.ping}}</div>
								</li>
								<li>
									<div class="text-xl text-black-300 font-bold mb-1 transition-all duration-300 group-hover:text-[#E4E4E4]">Type</div>
									<div class="font-ch text-[#979797] tracking-normal transition-all duration-300 group-hover:text-[#B1B1B1]">{{first.type}}</div>
								</li>
								<li>
									<div class="text-xl text-black-300 font-bold mb-1 transition-all duration-300 group-hover:text-[#E4E4E4]">Year</div>
									<div class="font-ch text-[#979797] tracking-normal transition-all duration-300 group-hover:text-[#B1B1B1]">{{first.year}}</div>
								</li>
								<li>
									<div class="text-xl text-black-300 font-bold mb-1 transition-all duration-300 group-hover:text-[#E4E4E4]">Region</div>
									<div class="font-ch text-[#979797] tracking-normal transition-all duration-300 group-hover:text-[#B1B1B1]">{{first.region}}</div>
								</li>
							</ul>
						</div>
					</a>
				</div>
			</div>

			<div class="flex-auto pl-[130px] pr-[260px] pb-[94px]">
				<div class="flex items-end h-full">
					<a :href="'asset_detail.php?id='+second.id" class="group inline-block bg-[#F0F0F0] w-full p-10 hover:bg-black-300">
						<div class="relative h-[45vh]" :style="'background: url('+ second.pic +') center center / cover'">
							<div class="absolute tf w-28 h-28 rounded-full bg-[#1A1A1A] flex items-center justify-center opacity-0 transition-all duration-300 group-hover:opacity-100"><div class="text-white">MORE</div></div>
						</div>
						<div class="text-xs text-gray mt-2 mb-7 transition-all duration-300 group-hover:text-[#B1B1B1]" v-html="second.note"></div>
						<div class="text-black-300 mb-10 transition-all duration-300 group-hover:text-white">
							<div class="flex items-center mb-2">
								<svg width="12.9" height="27.61" viewBox="0 0 12.9 27.61">
									<polygon points="12.9 0 0 27.61 2.24 27.61 12.9 4.8 12.9 0" class="full-gray-300 transition-all duration-300 group-hover:fill-white"/>
								</svg>
								<span class="font-ch font-medium text-[19px] tracking-normal mx-2">{{second.ch}}</span>
								<svg width="12.9" height="27.61" viewBox="0 0 12.9 27.61">
									<polygon points="12.9 0 0 27.61 2.24 27.61 12.9 4.8 12.9 0" class="full-gray-300 transition-all duration-300 group-hover:fill-white"/>
								</svg>
							</div>
							<div class="font-bold text-[33px] leading-none">{{second.en}}</div>
						</div>
						<div class="border-t-2 border-gray-600 py-4 transition-all duration-300 group-hover:border-[#888888]">
							<ul class="grid grid-cols-4 space-x-7">
								<li>
									<div class="text-lg text-black-300 font-bold mb-1 transition-all duration-300 group-hover:text-[#E4E4E4]">Ping</div>
									<div class="font-ch text-sm text-[#808080] tracking-normal transition-all duration-300 group-hover:text-[#B1B1B1]">{{second.ping}}</div>
								</li>
								<li>
									<div class="text-lg text-black-300 font-bold mb-1 transition-all duration-300 group-hover:text-[#E4E4E4]">Type</div>
									<div class="font-ch text-sm text-[#808080] tracking-normal transition-all duration-300 group-hover:text-[#B1B1B1]">{{second.type}}</div>
								</li>
								<li>
									<div class="text-lg text-black-300 font-bold mb-1 transition-all duration-300 group-hover:text-[#E4E4E4]">Year</div>
									<div class="font-ch text-sm text-[#808080] tracking-normal transition-all duration-300 group-hover:text-[#B1B1B1]">{{second.year}}</div>
								</li>
								<li>
									<div class="text-lg text-black-300 font-bold mb-1 transition-all duration-300 group-hover:text-[#E4E4E4]">Region</div>
									<div class="font-ch text-sm text-[#808080] tracking-normal transition-all duration-300 group-hover:text-[#B1B1B1]">{{second.region}}</div>
								</li>
							</ul>
						</div>
					</a>
				</div>
			</div>
		</div>

		<div class="relative" id="assetWrap">
			<div class="absolute inset-0 -z-10 pointer-events-none">
				<div id="app" class="absolute tf"></div>
			</div>

			<ul class="assetList grid grid-cols-3 px-[155px] py-[208px]">
				<li v-for="p in lists" class="border-b border-[#80808040] pb-16 mb-16">
					<a :href="'asset_detail.php?id='+p.id" class="group block bg-[#F0F0F0] p-7 hover:bg-black-300">
						<div class="relative h-[40vh]" :style="'background: url('+ p.pic +') center center / cover'">
							<div class="absolute tf w-28 h-28 rounded-full bg-[#1A1A1A] flex items-center justify-center opacity-0 transition-all duration-300 group-hover:opacity-100"><div class="text-white">MORE</div></div>
						</div>
						<div class="text-black-300 mt-10 mb-12 transition-all duration-300 group-hover:text-white">
							<div class="flex items-center mb-2">
								<svg width="12.9" height="27.61" viewBox="0 0 12.9 27.61">
									<polygon points="12.9 0 0 27.61 2.24 27.61 12.9 4.8 12.9 0" class="full-gray-300 transition-all duration-300 group-hover:fill-white"/>
								</svg>
								<span class="font-ch font-medium text-[17px] tracking-normal mx-2">經濟部台中軟體園區</span>
								<svg width="12.9" height="27.61" viewBox="0 0 12.9 27.61">
									<polygon points="12.9 0 0 27.61 2.24 27.61 12.9 4.8 12.9 0" class="full-gray-300 transition-all duration-300 group-hover:fill-white"/>
								</svg>
							</div>
							<div class="font-bold text-[28px] leading-none">Taichung Software Park</div>
						</div>
						<div class="border-t-2 border-gray-600 py-4 transition-all duration-300 group-hover:border-[#888888]">
							<ul class="grid grid-cols-4">
								<li>
									<div class="text-[17px] text-black-300 font-bold mb-1 transition-all duration-300 group-hover:text-[#E4E4E4]">Ping</div>
									<div class="font-ch text-sm text-[#808080] tracking-normal transition-all duration-300 group-hover:text-[#B1B1B1]">{{first.ping}}</div>
								</li>
								<li>
									<div class="text-[17px] text-black-300 font-bold mb-1 transition-all duration-300 group-hover:text-[#E4E4E4]">Type</div>
									<div class="font-ch text-sm text-[#808080] tracking-normal transition-all duration-300 group-hover:text-[#B1B1B1]">{{first.type}}</div>
								</li>
								<li>
									<div class="text-[17px] text-black-300 font-bold mb-1 transition-all duration-300 group-hover:text-[#E4E4E4]">Year</div>
									<div class="font-ch text-sm text-[#808080] tracking-normal transition-all duration-300 group-hover:text-[#B1B1B1]">{{first.year}}</div>
								</li>
								<li>
									<div class="text-[17px] text-black-300 font-bold mb-1 transition-all duration-300 group-hover:text-[#E4E4E4]">Region</div>
									<div class="font-ch text-sm text-[#808080] tracking-normal transition-all duration-300 group-hover:text-[#B1B1B1]">{{first.region}}</div>
								</li>
							</ul>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
	
	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>
<script src="dist/shader-asset.js"></script>
</html>

<script>
new Vue({
	el: '#asset',
	data: {
		// allstore: $("#searchForm").data("store"),
		nowping: 0,
		nowtype: 0,
		nowyear: 0,
		nowregion: 0,
		first: {
			id: '0',
			pic: 'images/asset-1.jpg',
			note: `The rooftop features a water tree and an aerial garden, where the<br>colorful clouds and starlit sky unfold the most beautiful night scenery.`,
			ch: '中陽森',
			en: 'Full House',
			ping: '55-100 坪',
			type: '住宅大樓',
			year: '2024.06',
			region: '台中南屯區',
		},
		second: {
			id: '1',
			pic: 'images/asset-2.jpg',
			note: `The rooftop features a water tree and an aerial garden, where the<br>colorful clouds and starlit sky unfold the most beautiful night scenery.`,
			ch: '表參道',
			en: 'Omotesando',
			ping: '55-100 坪',
			type: '住宅大樓',
			year: '2024.06',
			region: '台中南屯區',
		},
		lists: [{
			id: '2',
			pic: 'images/asset-3.jpg',
			note: `The rooftop features a water tree and an aerial garden, where the<br>colorful clouds and starlit sky unfold the most beautiful night scenery.`,
			ch: '中陽森',
			en: 'Full House',
			ping: '55-100 坪',
			type: '住宅大樓',
			year: '2024.06',
			region: '台中南屯區',
		}, {
			id: '3',
			pic: 'images/asset-4.jpg',
			note: `The rooftop features a water tree and an aerial garden, where the<br>colorful clouds and starlit sky unfold the most beautiful night scenery.`,
			ch: '中陽森',
			en: 'Full House',
			ping: '55-100 坪',
			type: '住宅大樓',
			year: '2024.06',
			region: '台中南屯區',
		}, {
			id: '4',
			pic: 'images/asset-5.jpg',
			note: `The rooftop features a water tree and an aerial garden, where the<br>colorful clouds and starlit sky unfold the most beautiful night scenery.`,
			ch: '中陽森',
			en: 'Full House',
			ping: '55-100 坪',
			type: '住宅大樓',
			year: '2024.06',
			region: '台中南屯區',
		}, {
			id: '5',
			pic: 'images/asset-3.jpg',
			note: `The rooftop features a water tree and an aerial garden, where the<br>colorful clouds and starlit sky unfold the most beautiful night scenery.`,
			ch: '中陽森',
			en: 'Full House',
			ping: '55-100 坪',
			type: '住宅大樓',
			year: '2024.06',
			region: '台中南屯區',
		}, {
			id: '6',
			pic: 'images/asset-4.jpg',
			note: `The rooftop features a water tree and an aerial garden, where the<br>colorful clouds and starlit sky unfold the most beautiful night scenery.`,
			ch: '中陽森',
			en: 'Full House',
			ping: '55-100 坪',
			type: '住宅大樓',
			year: '2024.06',
			region: '台中南屯區',
		}, {
			id: '7',
			pic: 'images/asset-5.jpg',
			note: `The rooftop features a water tree and an aerial garden, where the<br>colorful clouds and starlit sky unfold the most beautiful night scenery.`,
			ch: '中陽森',
			en: 'Full House',
			ping: '55-100 坪',
			type: '住宅大樓',
			year: '2024.06',
			region: '台中南屯區',
		}],
	},
	computed: {
		// model() {
		// 	let arr = this.allmodel.filter(({d_class2}) => d_class2 == this.nowcar)
		// 	let unique = [...new Map(arr.map(item => [item['d_class4'], item])).values()]
		// 	return unique
		// },
		// chassis() {
		// 	let arr = this.allmodel.filter(({d_class4}) => d_class4 == this.nowmodel)
		// 	// let unique = [...new Map(arr.map(item => [item['d_class4'], item])).values()]
		// 	return arr
		// },
	},
	watch: {
		// nowcar(newVal, oldVal) {
		// 	if (newVal != oldVal) {
		// 		$(".bigen", this.$refs.selectModel).text('-- SELECT MODEL --')
		// 		$(".bigen", this.$refs.selectChassis).text('-- SELECT --')
		// 	}
		// },
		// nowmodel(newVal, oldVal) {
		// 	if (newVal != oldVal) {
		// 		$(".bigen", this.$refs.selectChassis).text('-- SELECT --')
		// 	}
		// },
	},
	methods: {
		selectHandler () {
			$(this.$refs.selectPing).on("change", (e) => {
				this.nowping = e.currentTarget.value
			})

			$(this.$refs.selectType).on("change", (e) => {
				this.nowtype = e.currentTarget.value
			})

			$(this.$refs.selectYear).on("change", (e) => {
				this.nowyear = e.currentTarget.value
			})

			$(this.$refs.selectRegion).on("change", (e) => {
				this.nowregion = e.currentTarget.value
			})


			// $(this.$refs.dropdownCar).on("click", "li", (e) => {
			// 	e.stopPropagation()

			// 	$(this.$refs.selectCar).removeClass("is-open")

			// 	let en = $(".en", e.currentTarget).text()

			// 	let id = $("input[name=car]", e.currentTarget).val()
			// 	let name = $("input[name=carname]", e.currentTarget).val()

			// 	this.nowcar = id
			// 	this.nowcarname = name

			// 	$(".bigen", this.$refs.selectCar).text(en)
			// })

		// 	// car
		// 	$(this.$refs.selectCar).on("click", (e) => {
		// 		$(e.currentTarget).toggleClass("is-open")
		// 	})

		// 	$(this.$refs.dropdownCar).on("click", "li", (e) => {
		// 		e.stopPropagation()

		// 		$(this.$refs.selectCar).removeClass("is-open")

		// 		let en = $(".en", e.currentTarget).text()

		// 		let id = $("input[name=car]", e.currentTarget).val()
		// 		let name = $("input[name=carname]", e.currentTarget).val()

		// 		this.nowcar = id
		// 		this.nowcarname = name

		// 		$(".bigen", this.$refs.selectCar).text(en)
		// 	})


		// 	// model
		// 	$(this.$refs.selectModel).on("click", (e) => {
		// 		$(e.currentTarget).toggleClass("is-open")
		// 	})

		// 	$(this.$refs.dropdownModel).on("click", "li", (e) => {
		// 		e.stopPropagation()

		// 		$(this.$refs.selectModel).removeClass("is-open")

		// 		let en = $(".en", e.currentTarget).text()

		// 		let model = $("input[name=model]", e.currentTarget).val()

		// 		this.nowmodel = model

		// 		$(".bigen", this.$refs.selectModel).text(en)
		// 	})


		// 	// chassis
		// 	$(this.$refs.selectChassis).on("click", (e) => {
		// 		$(e.currentTarget).toggleClass("is-open")
		// 	})

		// 	$(this.$refs.dropdownChassis).on("click", "li", (e) => {
		// 		e.stopPropagation()

		// 		$(this.$refs.selectChassis).removeClass("is-open")

		// 		let en = $(".en", e.currentTarget).text()

		// 		let year = $("input[name=year]", e.currentTarget).val()
		// 		let chassis = $("input[name=chassis]", e.currentTarget).val()

		// 		this.nowyear = year
		// 		this.nowchassis = chassis

		// 		$(".bigen", this.$refs.selectChassis).text(en)
		// 	})
		}
	},
	mounted() {
		$("select").niceSelect();
		// $("#send").BtnHover()
		this.selectHandler()
	},
})
</script>