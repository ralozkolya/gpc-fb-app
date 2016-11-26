$(function(){

	$.ajaxSetup({cache: true});

	$.getScript('//connect.facebook.net/en_US/sdk.js', function(){

		FB.Canvas.setAutoGrow();

		FB.init({
			appId: '624359667744524',
			version: 'v2.8',
			cookie: true,
		});
	});

	$('.delete-permissions').click(function(){
		FB.getLoginStatus(function(response){
			if(response.status === 'connected') {
				FB.api('/me/permissions', 'delete', {
					access_token: response.authResponse.access_token,
				}, function(response) {
					if(response.success) {
						location.reload();
					}
				});
			}
		});
	});
});