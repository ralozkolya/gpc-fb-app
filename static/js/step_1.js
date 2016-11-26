$(function(){

	$('#phone').get(0)

	$('#check-form').submit(function(){

		var valid = true;

		$('input', this).each(function(index, input){

			var pattern = $(input).attr('data-pattern');
			
			if(!check(input, pattern)) {

				if(valid) {
					$(input).focus();
				}

				valid = false;
				$(input).addClass('bg-danger');
			}

		}.bind(this));

		if(!valid) {
			return false;
		}

		$('#submit-button').attr('disabled', 'disabled');
		$('#submit-button > .loading').show();
	});

	$('#check-form input').on('focus input', function(){
		$(this).removeClass('bg-danger');
	});

	$('#check-form input').blur(function(){
		var input = this;
		var pattern = $(this).attr('data-pattern');
		
		if(!check(input, pattern)) {
			$(this).addClass('bg-danger');
		}
	});

	function check(input, pattern) {

		var regex = new RegExp(pattern, 'gi');

		if(input.value && !input.value.match(regex)) {
			return true;
		}

		return false;
	}
});