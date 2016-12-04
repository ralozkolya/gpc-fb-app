<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('head'); ?>
	<link rel="stylesheet" href="<?php echo static_url('css/message.css?v='.V); ?>">
</head>
<body>
	<div class="wrapper text-center">
		<div class="content">
			<div>
				<h4 class="title bpg-nino text-center"><?php echo lang('activate_points'); ?></h4>
			</div>
			<div class="centered">
				<div class="text-center">
					<img alt="Success" src="<?php echo static_url('img/success.svg'); ?>">
				</div>
				<br>
				<h4 class="bpg-nino heading"><?php echo lang('congratulations'); ?></h4>
				<br>
				<div class="bpg-nino description"><?php echo lang('points_added'); ?></div>
			</div>
			<div>
				<a href="<?php echo base_url(); ?>" class="btn btn-primary button"><?php echo lang('main_page'); ?></a>
			</div>
		</div>
	</div>
</body>
</html>