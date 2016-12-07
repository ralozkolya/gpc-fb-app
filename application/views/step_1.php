<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('head'); ?>
	<link rel="stylesheet" href="<?php echo static_url('css/steps.css?v='.V); ?>">
	<script src="<?php echo static_url('js/step_1.js?v='.V); ?>"></script>
</head>
<body>
	<div class="wrapper text-center">
		<div class="content">
			<div>
				<h4 class="title bpg-nino text-center"><?php echo lang('activate_points'); ?></h4>
			</div>
			<div class="steps">
				<img alt="Steps" src="<?php echo static_url('img/step_1.png'); ?>">
			</div>
			<div class="step-description">
				<strong><?php echo lang('step'); ?> 1.</strong>
				<span><?php echo lang('fill_form'); ?></span>
			</div>
			<br>
			<div>
				<form id="check-form" method="post" action="<?php echo base_url('check'); ?>">
					<div class="input-container">
						<label for="ticket-number"><?php echo lang('ticket_number'); ?></label>
						<input
							<?php if($input && $input['ticket-number']): ?>
							value="<?php echo $input['ticket-number']; ?>"
							<?php endif; ?>
							type="text" class="text-input" id="ticket-number"
							name="ticket-number" placeholder="XX XX XX XX"
							data-pattern="^\d+$" autofocus>
					</div>
					<div class="input-container">
						<label for="card-number"><?php echo lang('card_number'); ?></label>
						<input
							<?php if($input && $input['card-number']): ?>
							value="<?php echo $input['card-number']; ?>"
							<?php endif; ?>
							type="text" class="text-input" id="card-number"
							name="card-number" placeholder="XX XX XX XX"
							data-pattern="^\d+$">
					</div>
					<div class="input-container">
						<label for="phone"><?php echo lang('phone'); ?></label>
						<input
							<?php if($input && $input['phone']): ?>
							value="<?php echo $input['phone']; ?>"
							<?php endif; ?>
							type="text" class="text-input" id="phone"
							name="phone" placeholder="5XX XX XX XX"
							data-pattern="^\+?(995)?[\d]{9}$">
					</div>
					<div>
						<button id="submit-button" type="submit" class="btn btn-primary button">
							<img class="loading" alt="Loading" src="<?php echo static_url('img/loading.gif'); ?>">
							<?php echo lang('check'); ?>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>