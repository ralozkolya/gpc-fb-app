$(function(){

	$('#share-button').click(function(){

		var description = '';

		$('.message > p').each(function(i, p){
			description += p.innerHTML + '\n';
		});

		FB.ui({
			method: 'feed',
			link: url.base + 'redirect',
			picture: url.base + 'static/img/share_new.png',
			name: $('.message > h3').html(),
			description: description,
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
