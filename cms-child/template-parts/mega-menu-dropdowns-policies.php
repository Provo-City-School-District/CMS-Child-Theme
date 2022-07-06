				<div class="dropDownColumn">
					<?php
						//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
						if(is_page( 'policies-forms' ) || in_array( 16538, get_post_ancestors($post))){
							?>
							<h2><img src="<?php echo get_home_url(); ?>/wp-content/themes/pcsd-2019-theme/assets/icons/policy.svg" alt="" />Policies</h2>
							<?php
						} else {
							?>
							<h3><img src="<?php echo get_home_url(); ?>/wp-content/themes/pcsd-2019-theme/assets/icons/policy.svg" alt="" />Policies</h3>
							<?php
						}
					?>
					<ul>
						<li><a href="https://centennial.provo.edu/wp-content/uploads/2022/05/Student-Handbook.pdf">Student Handbook</a></li>
						<li><a href="<?php echo get_home_url(); ?>/policies-forms/dress-code/">Dress Code</a></li>
					</ul>
				</div>
				<div class="dropDownColumn">
					<?php
						//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
						if(is_page( 'policies-forms' ) || in_array( 16538, get_post_ancestors($post))){
							?>
							<h2><img src="<?php echo get_home_url(); ?>/wp-content/themes/pcsd-2019-theme/assets/icons/form.svg" alt="" />Forms</h2>
							<?php
						} else {
							?>
							<h3><img src="<?php echo get_home_url(); ?>/wp-content/themes/pcsd-2019-theme/assets/icons/form.svg" alt="" />Forms</h3>
							<?php
						}
					?>
					<ul>
						<li><a href="https://www2.myschoolapps.com">Application for Free and Reduced Meals</a></li>
						<li><a href="https://provo.edu/nurses/medicalhealth-forms/">Medical / Health Forms</a></li>
						<li><a href="<?php echo get_home_url(); ?>/counseling-registration/">Registration Forms</a></li>
					

					</ul>

				</div>
				<div class="dropDownColumn noheading">
					
				</div>
