$(function(){

	$('#login-button').click(function(){
		FB.login(checkStatus);
	});

	function checkStatus(response, login) {
		if(response.status === 'connected') {
			location.reload();
		}

		else if(login) {
			FB.login(checkStatus);
		}
	}

	window.fbAsyncInit = function(){
		FB.getLoginStatus(function(response){
			checkStatus(response, true);
		});
	};
});