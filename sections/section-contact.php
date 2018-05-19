<?php 
	$confDisplay = 'display: none';

	if (isset($_POST['confDisplay'])) {
			$confDisplay = 'display: block';
	}
?>

<section id="section-contact">
	<div class="container">
		<div class="form-wrapper">
			<?php echo do_shortcode('[contact-form-7 id="629" title="Contact form 1"]'); ?>
			<h4>
				<?php
			 			$email = get_post_meta($post->ID, 'email_address', true);
			 			if(function_exists('eos_obfuscate')) {
						echo eos_obfuscate(array('email' => $email, 'link_title' => $email));
						} else {
						echo $email;
				} ?>
			</h4>
	  </div>
	  <div class="bg-shape"></div>
</section>