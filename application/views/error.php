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
				<div class="tinted">
					<div class="warning"></div>
					<div><?php echo lang('error_description'); ?></div>
				</div>
			</div>
			<div>
				<a href="<?php echo base_url(); ?>" class="btn btn-primary"><?php echo lang('back'); ?></a>
			</div>
		</div>
	</div>
</body>
</html>