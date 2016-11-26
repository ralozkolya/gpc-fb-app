<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('head'); ?>
	<script src="<?php echo static_url('js/login.js?v='.V); ?>"></script>
</head>
<body>
	<div class="wrapper text-center">
		<div class="content">
			<div class="bpg-nino">
				<h3><?php echo lang('require_login'); ?></h3>
			</div>
			<div>
				<button id="login-button" class="btn btn-primary"><?php echo lang('login'); ?></button>
			</div>
		</div>
	</div>
</body>
</html>