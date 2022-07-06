<div class="dropDownColumn">


	<?php
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( array('faculty-staff','teacher-course-directory','main-office-administration','teacher-license-information','education-support-professionals', 'teachers-by-category') ) || in_array( 16483, get_post_ancestors($post)) || in_array( 18419, get_post_ancestors($post))){
			?>
			<h2><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Teachers</h2>
			<?php
		} else {
			?>
			<h3><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Teachers</h3>
			<?php
		}
	?>
		<ul>
			<li class="int"><a href="<?php echo get_home_url(); ?>/faculty-staff/teacher-course-directory/">Find Your Teacher</a></li>
			<li class="int"><a href="<?php echo get_home_url(); ?>/faculty-staff/teacher-license-information/">Teacher License Information</a></li>
		</ul>
</div>
<div class="dropDownColumn">
	<?php
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( array('faculty-staff','teacher-course-directory','main-office-administration','teacher-license-information','education-support-professionals', 'teachers-by-category') ) || in_array( 16483, get_post_ancestors($post)) || in_array( 18419, get_post_ancestors($post))){

			?>
			<h2><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Staff</h2>
			<?php
		} else {
			?>
			<h3><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Staff</h3>
			<?php
		}
	?>
		<ul>
			<li class="int"><a href="<?php echo get_home_url(); ?>/faculty-staff/main-office-administration/">Administration &amp; Main Office</a></li>
			<li class="int"><a href="<?php echo get_home_url(); ?>/counseling-registration/find-your-counselor/">Find Your Counselor</a></li>
			<li class="int"><a href="<?php echo get_home_url(); ?>/faculty-staff/education-support-professionals/">Education Support Professionals</a></li>
		</ul>
</div>
