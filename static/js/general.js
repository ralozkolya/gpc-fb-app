$(function(){

	$.ajaxSetup({cache: true});

	$.getScript('//connect.facebook.net/en_US/sdk.js', function(){

		FB.Canvas.setAutoGrow();

		FB.init({
			appId: '624359667744524',
			version: 'v2.8',
			cookie: true,
		});

		FB.AppEvents.logPageView();
	});
});