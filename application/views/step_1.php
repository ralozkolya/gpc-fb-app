<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('head'); ?>
	<link rel="stylesheet" href="<?php echo static_url('css/steps.css?v='.V); ?>">
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
			<div>
				<button class="btn btn-primary"><?php echo lang('agree'); ?></button>
			</div>
		</div>
	</div>
</body>
</html>