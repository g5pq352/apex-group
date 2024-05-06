<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="relative pb-32">
		<div class="absolute"></div>

		<div class="max-w-[1400px] mx-auto flex pt-[282px]">
			<div class="max-w-[800px] mr-[174px] group" data-enter="">
				<div class="flex items-center -mb-5 delay-1000 transition-all duration-500 opacity-0 group-[.is-enter]:opacity-100">
					<svg width="23.35" height="49.95" viewBox="0 0 23.35 49.95">
						<polygon points="23.35 0 0 49.95 4.05 49.95 23.35 8.69 23.35 0" style="fill: #666;"/>
					</svg>
					<span class="font-ch font-medium text-gray-700 text-5xl tracking-normal mx-2">工程進度</span>
					<svg width="23.35" height="49.95" viewBox="0 0 23.35 49.95">
						<polygon points="23.35 0 0 49.95 4.05 49.95 23.35 8.69 23.35 0" style="fill: #666;"/>
					</svg>
				</div>
				<div class="relative inline-block">
					<div class="absolute inset-0 after:absolute after:inset-x-0 after:bottom-[14px] after:top-[30px] after:bg-black-300 after:-z-10 group-[.is-enter]:animate-clip lg:after:top-[15px] lg:after:bottom-[10px]">
						<div class="font-en font-medium text-[88px] leading-normal text-white">
							CONSTRUCTION
						</div>
					</div>
					<div class="font-en font-medium text-[88px] leading-normal text-black-300 delay-500 opacity-0 group-[.is-enter]:opacity-100">
						CONSTRUCTION
					</div>
				</div>
				<div class="relative inline-block mb-6 -mt-12">
					<div class="absolute inset-0 after:absolute after:inset-x-0 after:bottom-[14px] after:top-[30px] after:bg-black-300 after:-z-10 group-[.is-enter]:animate-clip lg:after:top-[15px] lg:after:bottom-[10px]">
						<div class="font-en font-medium text-[88px] leading-normal text-white">
							PROGRESS
						</div>
					</div>
					<div class="font-en font-medium text-[88px] leading-normal text-black-300 delay-500 opacity-0 group-[.is-enter]:opacity-100">
						PROGRESS
					</div>
				</div>
				<div class="font-ch text-[#868686] tracking-normal">您好 ! 請選擇建案名稱與輸入帳號密碼登入工程進度頁面 。</div>
			</div>

			<div class="flex-auto pt-[66px]">
				<form action="progress_detail.php" class="projectLogin select-mod" id="projectLogin">
					<div class="item mb-16">
						<div class="flex items-center mb-2">
							<div class="text-xl mr-8">Project Name</div>
							<div class="font-ch">建案名稱</div>
						</div>
						<select name="" id="" class="font-ch font-medium tracking-normal w-[416px]">
							<option value="">表參道 Omotesando</option>
							<option value="">中陽旭月 Above Expectation</option>
							<option value="">表參道 Omotesando</option>
							<option value="">中陽森 Full House</option>
						</select>
					</div>
					<div class="item mb-7">
						<div class="flex items-center mb-2">
							<div class="text-xl mr-8">Account</div>
							<div class="font-ch">帳 號</div>
						</div>
						<input type="text" name="" class="tracking-wide w-full">
					</div>
					<div class="item">
						<div class="flex items-center mb-2">
							<div class="text-xl mr-8">Password</div>
							<div class="font-ch">密 碼</div>
						</div>
						<input type="password" name="" class="text-xl tracking-wider w-full">
					</div>
					<div class="mt-[50px]">
						<button class="submit inline-block ml-auto flex items-center">
							<div class="mr-8">Sign In</div>
							<div class=""><svg width="59" height="59" viewBox="0 0 58.23 58.23" class="submit-deco">
								<g>
									<polygon points="42.76 30.92 18.18 42.35 18.18 39.18 35.95 30.92 42.76 30.92" style="fill: #888;"/>
									<polygon points="49.46 30.92 18.18 16.19 18.18 19.36 42.65 30.92 49.46 30.92" style="fill: #888;"/>
								</g>
							<circle cx="29.11" cy="29.11" r="28.21" style="fill: none; stroke: #888; stroke-miterlimit: 10; stroke-width: 1.8px;"/>
							</svg></div>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>
</html>

<script>
$("select").niceSelect();
</script>