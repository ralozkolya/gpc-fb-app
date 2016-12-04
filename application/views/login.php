<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('head'); ?>
	<link rel="stylesheet" href="<?php echo static_url('css/login.css?v='.V); ?>">
	<script src="<?php echo static_url('js/login.js?v='.V); ?>"></script>
</head>
<body>
	<div class="wrapper text-center">
		<div class="content">
			<div class="bpg-nino loading">
				<h3><?php echo lang('loading'); ?></h3>
			</div>
			<div class="bpg-nino require-login">
				<h3><?php echo lang('require_login'); ?></h3>
			</div>
			<div>
				<button id="login-button" class="btn btn-primary button"><?php echo lang('login'); ?></button>
			</div>
		</div>
	</div>
</body>
</html>