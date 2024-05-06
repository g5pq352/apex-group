<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>

	<main data-barba="wrapper">
		<!--  -->

		<div data-barba="container" data-barba-namespace="home" class="h-screen absolute">
			<h1>Home</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<a href="test2.php">About</a>
		</div>

		<!--  -->
	</main>

</body>

<?php include 'script.php'; ?>
</html>

<script type="text/javascript">
barba.init({
	transitions: [{
		name: 'opacity-transition',
		leave(data) {
			return gsap.to(data.current.container, {
				opacity: 0
			});
		},
		enter(data) {
			return gsap.from(data.next.container, {
				opacity: 0
			});
		}
	}],
});
</script>