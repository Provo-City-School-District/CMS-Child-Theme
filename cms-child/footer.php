<footer id="mainFooter">
	<section id="teacherAccess">
		<h2 class="teacherActivate"><a href="<?php bloginfo('url') ?>/teacher-access/">Teacher Access</a></h2>
		<ul class="imagelist">
			<li><a href="<?php bloginfo('url') ?>/wp-login.php"><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/web-page-login.svg" alt="" />Teacher Web Page Login</a></li>
			<li><a href="https://helpdesk.provo.edu:8443/helpdesk/WebObjects/Helpdesk.woa"><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/work-order.svg" alt="" />Open a work order</a></li>
			<li><a href="http://mail.google.com"><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/email.svg" alt="" />Email Access</a></li>
			<li><a href="https://grades.provo.edu/teachers/pw.html"><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/power-school.png" alt="" />PowerTeacher Login</a></li>
			<li><a href="https://provo.instructure.com/login/saml/13"><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/file-white.svg" alt="" />Canvas Login</a></li>			
			<li><a href="<?php bloginfo('url') ?>/how-to-schedule-a-substitute/"><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/find-a-substitute.svg" alt="" />Absence Management System</a></li>
			<li class="employeelink"><a href="https://employee.provo.edu/"><img src="<?php bloginfo('url') ?>/wp-content/themes/pcsd-2019-theme/assets/icons/pcsd-logo-website-header-branding.png" alt="" />Employee Support Website</a></li>
		</ul>
	</section>
	<?php
	// create a new cURL resource
	$globalfooter = curl_init();
	// set URL and other appropriate options
	curl_setopt($globalfooter, CURLOPT_URL, 'https://globalassets.provo.edu/globalpages/ada-footer.php');
	curl_setopt($globalfooter, CURLOPT_HEADER, 0);
	// grab URL and pass it to the browser
	curl_exec($globalfooter);
	// close cURL resource, and free up system resources
	curl_close($globalfooter);
	?>
</footer>
<?php wp_footer(); ?>
<script type="text/javascript" src="//customer.cludo.com/scripts/bundles/search-script.min.js"></script>
<script>
	var CludoSearch;
	(function() {
		var cludoSettings = {
			customerId: 10000352,
			engineId: 10000520,
			searchUrl: '<?php echo get_home_url(); ?>/search-results/',
			language: 'en',
			searchInputs: ['cludo-search-form'],
			template: 'StandardInlineImages',
			type: 'inline',
			initFacets: {
				"Category": ["Centennial Middle"]
			}
		};
		CludoSearch = new Cludo(cludoSettings);
		CludoSearch.init();
	})();
</script>
<!--[if lte IE 9]>
		<script src="https://api.cludo.com/scripts/xdomain.js" slave="https://api.cludo.com/proxy.html" type="text/javascript"></script>
		<![endif]-->
</body>

</html>