$(function(){

	$('#share-button').click(function(){
		FB.ui({
			method: 'feed',
			link: url.base,
			picture: url.base + 'static/img/share.png',
			name: $('.message > h3').html(),
			description: $('.message > p').html(),
			caption: '#GPCSACHUQARI',
			hashtag: '#GPCSACHUQARI',
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