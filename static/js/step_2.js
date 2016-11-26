$(function(){

	$('#share-button').click(function(){
		FB.ui({
			method: 'feed',
			link: url.base,
			name: 'Test',
			description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
		}, function(response){

			if(response && !response.error_code) {
				location.assign(url.finish);
			}

			else {

				$('#share-button').removeAttr('disabled');
				$('#share-button > .loading').hide();
			}
		});

		$('#share-button').attr('disabled', 'disabled');
		$('#share-button > .loading').show();
	});
});