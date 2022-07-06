<div class="dropDownColumn">
	<?php
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'counseling-registration' ) || in_array( 16504, get_post_ancestors($post))){
			?>
			<h2><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/folded-newspaper.svg" alt="" />Counseling</h2>
			<?php
		} else {
			?>
			<h3><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/folded-newspaper.svg" alt="" />Counseling</h3>
			<?php
		}
	?>
	<ul>
		<li><a href="<?php echo get_home_url(); ?>/counseling-registration/counseling-center/">Counseling Center</a></li>
		<li><a href="<?php echo get_home_url(); ?>/counseling-registration/find-your-counselor/">Find your Counselor</a></li>
		
	</ul>
	
</div>

<div class="dropDownColumn">
	<?php
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'counseling-registration' ) || in_array( 16504, get_post_ancestors($post))){
			?>
			<h2><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/registration.svg" alt="" />Registration</h2>
			<?php
		} else {
			?>
			<h3><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/registration.svg" alt="" />Registration</h3>
			<?php
		}
	?>
	<ul>
		<li><a href="<?php echo get_home_url(); ?>/wp-content/uploads/2022/07/Welcome-to-CMS-New-Student-Registration.pdf">Welcome to Centennial Middle School: How to Register a New Student</a></li>
		<li><a href="<?php echo get_home_url(); ?>/wp-content/uploads/2022/07/Bienvenidos-a-Centennial-Middle-School-Cómo-Inscribir-a-un-Nuevo-Estudiante.pdf">Bienvenidos a Centennial Middle School: Cómo Inscribir a un Nuevo Estudiante</a></li>
		<li><a href="<?php echo get_home_url(); ?>/counseling-registration/registration-documents/">Registration Documents</a></li>
		<li><a href="<?php echo get_home_url(); ?>/counseling-registration/documentos-de-registro/">Documentos de Registro</a></li>
		<li><a href="<?php echo get_home_url(); ?>/counseling-registration/extracurricular-course-information/">Extracurricular Course Information</a></li>
		<li><a href="<?php echo get_home_url(); ?>/counseling-registration/informacion-sobre-los-cursos-extracurriculares/">Información Sobre los Cursos Extracurriculares</a></li>
		<li><a href="<?php echo get_home_url(); ?>/letter-from-the-pta-2021/">Letter from the PTA 2021</a></li>
	</ul>
</div>

<div class="dropDownColumn noheading">

	<?php
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'counseling-registration' ) || in_array( 16504, get_post_ancestors($post))){
			?>
			<h2><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/planning.svg" alt="" />Fees</h2>
			<?php
		} else {
			?>
			<h3><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/planning.svg" alt="" />Fees</h3>
			<?php
		}
	?>
	<ul>
		<li><a href="https://provo.edu/school-fees/">About School Fees</a></li>
		<li><a href="https://provo.edu/school-fees-22-23/centennial-middle/">Fee Schedule</a></li>
		<li><a href="https://provo.aliohost.net:7443/AlioFeePay_PSD/Account/Login">Pay School Fees</a></li>
	</ul>
</div>
