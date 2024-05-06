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

	<div id="app" class="transition-all duration-300" :class="cat[now]['bg']">
		<div class="max-w-[1540px] mx-auto py-[300px]">
			<div class="relative flex justify-between mb-60">
				<div class="mr-[174px] group" data-enter="">
					<div class="flex items-center -mb-5 delay-1000 transition-all duration-500 opacity-0 group-[.is-enter]:opacity-100">
						<span v-html="cat[now]['deco']"></span>
						<span class="font-ch font-medium text-5xl tracking-normal mx-2" :class="cat[now]['text_color']">客戶服務</span>
						<span v-html="cat[now]['deco']"></span>
					</div>
					<div class="relative inline-block">
						<div class="absolute inset-0 after:absolute after:inset-x-0 after:bottom-[14px] after:top-[30px] after:-z-10 group-[.is-enter]:animate-clip lg:after:top-[15px] lg:after:bottom-[10px]" :class="[cat[now]['text_color_2'], cat[now]['bg_2']]">
							<div class="font-en font-semibold text-7xl leading-normal" :class="cat[now]['text_color_2']">Service</div>
						</div>
						<div class="font-en font-semibold text-7xl leading-normal delay-500 opacity-0 group-[.is-enter]:opacity-100" :class="cat[now]['text_color']">Service</div>
					</div>	

					<!-- <div class="font-medium text-7xl leading-none mb-6" :class="cat[now]['text_color']">Service</div> -->
					<div class=""><img src="images/service.jpg"></div>
				</div>

				<div class="shrink-0 pt-[120px]">
					<div class="sticky top-60">
						<div class="mb-10">
							<div class="text-lg" :class="cat[now]['note_color']">Tel</div>
							<div class="text-[38px] font-bold" :class="cat[now]['text_color']">04 2320 1333</div>
						</div>
						<div class="">
							<div class="text-lg" :class="cat[now]['note_color']" :class="cat[now]['note_color']">Adress</div>
							<div class="text-[38px]" :class="cat[now]['text_color']">
								台灣 台中<br>
								西區大隆路20號14號樓之8
							</div>
							<div class="" :class="cat[now]['note_color']">No. 20, Dalong Road, West District, Taichung City, Taiwan 14-8</div>
						</div>
					</div>
				</div>
			</div>

			<div class="flex justify-between" id="inquiry">
				<div class="mr-[320px]">
					<div class="flex items-center">
						<span v-html="cat[now]['deco']"></span>
						<span class="font-ch font-medium text-5xl tracking-normal mx-2" :class="cat[now]['text_color']">{{cat[now]['cat_ch']}}</span>
						<span v-html="cat[now]['deco']"></span>
					</div>
					<div class="font-medium text-[88px] leading-none mb-36 min-w-[616px]" :class="cat[now]['text_color']" v-html="cat[now]['cat_en']"></div>

					<div class="">
						<div class="font-medium text-[35px]" :class="cat[now]['text_color']">
							Thank you for your<br>
							completion 
						</div>
						<div class="font-ch font-medium text-[27px] tracking-wide mb-12" :class="cat[now]['text_color']">感謝您的填寫！</div>
						<div class="text-[17px] font-ch tracking-normal" :class="cat[now]['text_color']">
							期待您蒞臨體驗，若有任何問題都歡迎與我們聯絡。<br>
							請填寫右側資料回傳，將有專人盡快與您聯繫，謝謝。
						</div>
					</div>
				</div>

				<div class="flex-auto">
					<form action="javascript:;" class="serviceLogin select-mod" id="serviceLogin">
						<div class="item mb-12">
							<div class="flex items-center mb-2">
								<div class="text-xl mr-8" :class="cat[now]['note_color']">Inquiry Content</div>
								<div class="font-ch tracking-normal" :class="cat[now]['input_color']">洽詢內容</div>
							</div>
							<select name="inquiry" id="" class="font-ch font-medium tracking-normal">
								<option value="0">預約看屋 Reservation</option>
								<option value="1">線上報修 Online Request Repair</option>
							</select>
						</div>

						<!-- 預約看屋 -->
						<div class="item mb-12" v-show="now == 0">
							<div class="flex items-center mb-2">
								<div class="text-xl mr-8" :class="cat[now]['note_color']">Case Consultation</div>
								<div class="font-ch tracking-normal" :class="cat[now]['input_color']">個案諮詢</div>
							</div>
							<select name="" id="" class="font-ch font-medium tracking-normal">
								<option value=""></option>
								<option value="">表參道 Omotesando</option>
								<option value="">中陽旭月 Above Expectation</option>
								<option value="">表參道 Omotesando</option>
								<option value="">中陽森 Full House</option>
							</select>
						</div>
						<div class="item mb-12" v-show="now == 0">
							<div class="flex items-center mb-2">
								<div class="text-xl mr-8" :class="cat[now]['note_color']">Budget</div>
								<div class="font-ch tracking-normal" :class="cat[now]['input_color']">預 算</div>
							</div>
							<select name="" id="" class="font-ch font-medium tracking-normal">
								<option value=""></option>
								<option value="">2000 萬 ～ 3000萬</option>
								<option value="">4000 萬 ～ 5000萬</option>
								<option value="">5000 萬 ～ 6000萬</option>
							</select>
						</div>

						<!-- 線上報修 -->
						<div class="item mb-12" v-show="now == 1">
							<div class="flex items-center mb-2">
								<div class="text-xl mr-8" :class="cat[now]['note_color']">Housing Project Name</div>
								<div class="font-ch tracking-normal" :class="cat[now]['input_color']">住宅專案名稱</div>
							</div>
							<select name="" id="" class="font-ch font-medium tracking-normal">
								<option value=""></option>
								<option value="">表參道 Omotesando</option>
								<option value="">中陽旭月 Above Expectation</option>
								<option value="">表參道 Omotesando</option>
								<option value="">中陽森 Full House</option>
							</select>
						</div>
						<div class="item mb-12" v-show="now == 1">
							<div class="flex items-center mb-2">
								<div class="text-xl mr-8" :class="cat[now]['note_color']">Repair Content</div>
								<div class="font-ch tracking-normal" :class="cat[now]['input_color']">報修項目</div>
							</div>
							<select name="" id="" class="font-ch font-medium tracking-normal">
								<option value=""></option>
								<option value="">1</option>
								<option value="">2</option>
							</select>
						</div>
						<div class="item mb-12" v-show="now == 1">
							<div class="flex items-center mb-2">
								<div class="text-xl mr-8" :class="cat[now]['note_color']">Contact Hours</div>
								<div class="font-ch tracking-normal" :class="cat[now]['input_color']">聯繫時段</div>
							</div>
							<select name="" id="" class="font-ch font-medium tracking-normal">
								<option value=""></option>
								<option value="">1</option>
								<option value="">2</option>
							</select>
						</div>

						<div class="item-group grid grid-cols-2 gap-x-24 mb-12">
							<div class="item">
								<div class="flex items-center mb-2">
									<div class="text-xl mr-8" :class="cat[now]['note_color']">Name</div>
									<div class="font-ch tracking-normal" :class="cat[now]['input_color']">姓 名</div>
								</div>
								<input type="text" name="" class="tracking-wide w-full" :class="[cat[now]['input_bottom'], cat[now]['text_color']]">
							</div>
							<div class="item">
								<div class="flex items-center mb-2">
									<div class="text-xl mr-8" :class="cat[now]['note_color']">Phone</div>
									<div class="font-ch tracking-normal" :class="cat[now]['input_color']">電 話</div>
								</div>
								<input type="text" name="" class="tracking-wide w-full" :class="[cat[now]['input_bottom'], cat[now]['text_color']]">
							</div>
						</div>
						<div class="item mb-12">
							<div class="flex items-center mb-5">
								<div class="text-xl mr-8" :class="cat[now]['note_color']">Sex</div>
								<div class="font-ch tracking-normal" :class="cat[now]['input_color']">性 別</div>
							</div>
							<div class="flex space-x-36">
								<div class="radio-group" :class="cat[now]['radio_color']">
									<input type="radio" name="sex" id="sex1">
									<label for="sex1" :class="cat[now]['text_color']">男</label>
								</div>
								<div class="radio-group" :class="cat[now]['radio_color']">
									<input type="radio" name="sex" id="sex2">
									<label for="sex2" :class="cat[now]['text_color']">女</label>
								</div>
							</div>
						</div>
						<div class="item mb-12">
							<div class="flex items-center mb-2">
								<div class="text-xl mr-8" :class="cat[now]['note_color']">Mail</div>
								<div class="font-ch tracking-normal" :class="cat[now]['input_color']">電子郵件</div>
							</div>
							<input type="text" name="" class="tracking-wide w-full" :class="[cat[now]['input_bottom'], cat[now]['text_color']]">
						</div>
						<div class="item mb-12">
							<div class="flex items-center mb-2">
								<div class="text-xl mr-8" :class="cat[now]['note_color']">Message</div>
								<div class="font-ch tracking-normal" :class="cat[now]['input_color']">留言訊息</div>
							</div>
							<textarea name="" id="" class="resize-none" :class="[cat[now]['input_bottom'], cat[now]['text_color']]"></textarea>
						</div>
						<div class="font-ch text-sm leading-relaxed tracking-normal" :class="cat[now]['note_color']">
							您所登錄的個人資料作為以下用途:<br>
							1.本網站載之相關事項通知<br>
							2.客戶管理與服務<br>
							3.本公司行銷業務之推廣<br>
							4.(本案現場實際內容，以現場公布為準，蒐集僅有本網站使用，不會提供給第三方利用)
						</div>
						<div class="mt-[50px]">
							<button class="submit inline-block ml-auto flex items-center">
								<div class="mr-8" :class="cat[now]['text_color']">Submit</div>
								<div class=""><span v-html="cat[now]['deco_button']"></span></div>
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>
</html>

<script>
new Vue({
	el: '#app',
	data: {
		now: 0,
		cat: {
			0: {
				bg: 'bg-white',
				bg_2: 'after:bg-black-300',
				note_color: 'text-gray-600',
				text_color: 'text-black-300',
				text_color_2: 'text-white',
				input_color: 'text-black-300',
				radio_color: 'black',
				deco: `<svg width="23.35" height="49.95" viewBox="0 0 23.35 49.95">
					<polygon points="23.35 0 0 49.95 4.05 49.95 23.35 8.69 23.35 0" style="fill: #666;"/>
				</svg>`,
				cat_ch: `預約看屋`,
				cat_en: `Reservation`,
				input_bottom: 'border-b border-black-300',
				deco_button: `<svg width="59" height="59" viewBox="0 0 58.23 58.23" class="submit-deco">
					<g>
						<polygon points="42.76 30.92 18.18 42.35 18.18 39.18 35.95 30.92 42.76 30.92" style="fill: #888;"/>
						<polygon points="49.46 30.92 18.18 16.19 18.18 19.36 42.65 30.92 49.46 30.92" style="fill: #888;"/>
					</g>
					<circle cx="29.11" cy="29.11" r="28.21" style="fill: none; stroke: #888; stroke-miterlimit: 10; stroke-width: 1.8px;"/>
				</svg>`,
			},
			1: {
				bg: 'bg-black-300',
				bg_2: 'after:bg-white',
				note_color: 'text-gray-200',
				text_color: 'text-white',
				text_color_2: 'text-black-300',
				input_color: 'text-white',
				radio_color: 'white',
				deco: `<svg width="23.35" height="49.95" viewBox="0 0 23.35 49.95">
					<polygon points="23.35 0 0 49.95 4.05 49.95 23.35 8.69 23.35 0" style="fill: #fff;"/>
				</svg>`,
				cat_ch: `線上報修`,
				cat_en: `Online Repair<br>Request`,
				input_bottom: 'border-b border-text-white',
				deco_button: `<svg width="59" height="59" viewBox="0 0 58.23 58.23" class="submit-deco">
					<g>
						<polygon points="42.76 30.92 18.18 42.35 18.18 39.18 35.95 30.92 42.76 30.92" style="fill: #fff;"/>
						<polygon points="49.46 30.92 18.18 16.19 18.18 19.36 42.65 30.92 49.46 30.92" style="fill: #fff;"/>
					</g>
					<circle cx="29.11" cy="29.11" r="28.21" style="fill: none; stroke: #fff; stroke-miterlimit: 10; stroke-width: 1.8px;"/>
				</svg>`,
			}
		},
	},
	computed: {},
	methods: {},
	filters: {},
	mounted() {
		$("select").niceSelect();

		var getUrlString = location.href;
		var url = new URL(getUrlString);

		if(url.searchParams.size){
			this.now = url.searchParams.get('c')

			if(this.now == 1){
				$("#top-logo").attr("src", 'images/topmenu-logo-white.svg')
				$(".menuOpen").addClass("is-white-fixed")

				$("select[name='inquiry']").val(1)
				$("select").niceSelect("update");
			}else{
				$("#top-logo").attr("src", 'images/topmenu-logo.svg')
				$(".menuOpen").removeClass("is-white-fixed")
			}

			gsap.to($(window), 1.2, {
				scrollTo: {
					y: '#inquiry',
					offsetY: $(inquiry).height() * 0.1
				},
				ease:Power2.easeInOut,
				onComplete: function() {}
			})
		}

		$("select[name='inquiry']").on("change", (e) => {
			this.now = e.currentTarget.value

			$("select").niceSelect("update");
			$("input").val("")
			$("textarea").val("")
			$("input[type='radio']").prop("checked", false)

			if(this.now == 1){
				$("#top-logo").attr("src", 'images/topmenu-logo-white.svg')
				$(".menuOpen").addClass("is-white-fixed")
			}else{
				$("#top-logo").attr("src", 'images/topmenu-logo.svg')
				$(".menuOpen").removeClass("is-white-fixed")
			}
		})
	},
	updated() {},
})
</script>