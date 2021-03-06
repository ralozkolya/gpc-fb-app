<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

<title><?php echo $title; ?></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo static_url('css/fonts.css?v='.V); ?>">
<link rel="stylesheet" href="<?php echo static_url('css/general.css?v='.V); ?>">

<link rel="icon" type="image/png" href="<?php echo static_url('img/favicon.png'); ?>">

<script>
	var url = {
		base: '<?php echo base_url(); ?>',
		finish: '<?php echo base_url('finish'); ?>',
	};
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo static_url('js/general.js?v='.V); ?>"></script>