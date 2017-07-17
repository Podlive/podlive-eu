
	<!-- Footer -->
	<footer class="bottom">
		<p class="maker"><?= $site->copyright()->text() ?></p>
		<p class="share"><a target="_blank" class="twitter" href="https://twitter.com/<?= $site->twitter()->text() ?>">@<?= $site->twitter()->text() ?></a></p>
	</footer>

	</div>

	<?= js('assets/js/jquery-min.js') ?>
	<?= js('assets/js/podlive.js') ?>

	<!-- Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-83852839-3', 'auto');
		ga('send', 'pageview');
	</script>

</body>
</html>
