<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('head'); ?>
	<link rel="stylesheet" href="<?php echo static_url('css/steps.css?v='.V); ?>">
	<script src="<?php echo static_url('js/step_2.js?v='.V); ?>"></script>
</head>
<body>
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
			<div class="message text-left">
				<h3 class="bpg-nino"><?php echo lang('gpc_gift') ?></h3>
				<p><?php echo lang('i_got'); ?></p>
				<p><?php echo lang('gpc_gifts_place'); ?></p>
			</div>
			<div>
				<button id="share-button" class="btn btn-primary button">
					<img class="loading" alt="Loading" src="<?php echo static_url('img/loading.gif'); ?>">
					<?php echo lang('share'); ?>
				</button>
			</div>
		</div>
	</div>
</body>
</html>