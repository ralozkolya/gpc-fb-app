<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('head'); ?>
	<link rel="stylesheet" href="<?php echo static_url('css/steps.css?v='.V); ?>">
	<script src="<?php echo static_url('js/step_2.js?v='.V); ?>"></script>
</head>
<body>
	<div class="pull-right">
		<div class="btn btn-danger delete-permissions">წაშლა</div>
	</div>
	<div class="wrapper text-center">
		<div class="content">
			<div>
				<h4 class="title bpg-nino text-center"><?php echo lang('activate_points'); ?></h4>
			</div>
			<div class="steps">
				<img alt="Steps" src="<?php echo static_url('img/step_2.png'); ?>">
			</div>
			<div class="step-description">
				<strong><?php echo lang('step'); ?> 2.</strong>
				<span><?php echo lang('share_and_tag'); ?></span>
			</div>
			<br>
			<div class="message">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
			<div>
				<button id="share-button" class="btn btn-primary"><?php echo lang('share'); ?></button>
			</div>
		</div>
	</div>
</body>
</html>