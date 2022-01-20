<div class="dropDownColumn">
	<?php
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'student-essentials' ) || in_array( 18322, get_post_ancestors($post))){
			?>
			<h2><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/calendars.svg" alt="" />Calendars</h2>
			<?php
		} else {
			?>
			<h3><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/calendars.svg" alt="" />Calendars</h3>
			<?php
		}
	?>
		<ul>
			<li class="int"><a href="<?php echo get_home_url(); ?>/student-essentials/bell-schedules/">Bell Schedule</a></li>
			<li class="int"><a href="<?php echo get_home_url(); ?>/student-essentials/calendar/">School Calendar</a></li>
            <li class="int"><a href="<?php echo get_home_url(); ?>/student-essentials/district-calendar/">District Calendar</a></li>
		</ul>
		<?php
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'student-essentials' ) || in_array( 18322, get_post_ancestors($post))){
			?>
			<h2><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Library Media Center</h2>
			<?php
		} else {
			?>
			<h3><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Library Media Center</h3>
			<?php
		}
	?>
		<ul>
			<li class="int"><a href="<?php echo get_home_url(); ?>/student-essentials/dixon-library/">Dixon Panther Library</a></li>
		</ul>

</div>
<div class="dropDownColumn">
	<?php
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'student-essentials' ) || in_array( 18322, get_post_ancestors($post))){
			?>
			<h2><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Resources</h2>
			<?php
		} else {
			?>
			<h3><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Resources</h3>
			<?php
		}
	?>

		<ul>
			<li class="int"><a href="https://provo.edu/transportation/find-your-bus-route/">Bus Routes</a></li>
			<li class="int"><a href="<?php echo get_home_url(); ?>/student-essentials/dixon-map/">School Map</a></li>
			<li class="int"><a href="https://grades.provo.edu/public/">PowerSchool (Grades & Attendance)</a></li>
			<li class="int"><a href="https://provo.edu/departments/technology-support/login-to-canvas/">Canvas Login</a></li>
		</ul>
	<?php
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'student-essentials' ) || in_array( 18322, get_post_ancestors($post))){
			?>
			<h2><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Programs</h2>
			<?php
		} else {
			?>
			<h3><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Programs</h3>
			<?php
		}
	?>

		<ul>
			<li class="int"><a href="<?php echo get_home_url(); ?>/student-essentials/after-school-programs/">After School Programs</a></li>
			<li class="int"><a href="<?php echo get_home_url(); ?>/student-essentials/reality-town-career-fair/">Reality Town</a></li>
			<li class="int"><a href="<?php echo get_home_url(); ?>/student-essentials/summer-school/">Summer Programs</a></li>

		</ul>

</div>
<div class="dropDownColumn">
	<?php
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'student-essentials' ) || in_array( 18322, get_post_ancestors($post))){
			?>
			<h2><img src="<?php echo get_home_url(); ?>/wp-content/themes/pcsd-2019-theme/assets/icons/school-meals.svg" alt="" />School Meals</h2>
			<?php
		} else {
			?>
			<h3><img src="<?php echo get_home_url(); ?>/wp-content/themes/pcsd-2019-theme/assets/icons/school-meals.svg" alt="" />School Meals</h3>
			<?php
		}
	?>

	<ul>
		<?php
			$cnmenuhandle = curl_init();
			$cnmenuurl = "https://globalassets.provo.edu/globalpages/childNutritionMenu.php";
			// Set the url
			curl_setopt($cnmenuhandle, CURLOPT_URL, $cnmenuurl);
			// Set the result output to be a string.
			curl_setopt($cnmenuhandle, CURLOPT_RETURNTRANSFER, true);
			$cnmenuoutput = curl_exec($cnmenuhandle);
			// close the curl connection
			curl_close($cnmenuhandle);
			echo $cnmenuoutput;
		?>
	</ul>
</div>
