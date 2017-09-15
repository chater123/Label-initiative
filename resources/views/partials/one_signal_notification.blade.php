<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async='async'></script>

<script>
var OneSignal = window.OneSignal || [];
OneSignal.push(["init", 
						{
							appId: "fde5427c-6447-4dc6-ae18-528489e21018",
							autoRegister: false,
							welcomeNotification: 
							{
								"title": "Label initiative",
								"message": "Bonjour dans notre site",
								// "url": "" /* Leave commented for the notification to not open a window on Chrome and Firefox (on Safari, it opens to your webpage) */
							},
							promptOptions: 
							{
								/* actionMessage limited to 90 characters */
								actionMessage: "Nous aimerions vous présenter les notifications pour les dernières nouvelles.",
								/* acceptButtonText limited to 15 characters */
								acceptButtonText: "AUTORISER",
								/* cancelButtonText limited to 15 characters */
								cancelButtonText: "NON MERCI"
							},
							notifyButton:
								{
        							enable: true, /* Required to use the notify button */
        							colors: { // Customize the colors of the main button and dialog popup button
      											'circle.background': 'rgb(255,47,36)',
      											'circle.foreground': 'white',
      											'badge.background': 'rgb(255,47,36)',
      											'badge.foreground': 'white',
      											'badge.bordercolor': 'white',
      											'pulse.color': 'white',
      											'dialog.button.background.hovering': 'rgb(77, 101, 113)',
      											'dialog.button.background.active': 'rgb(70, 92, 103)',
      											'dialog.button.background': 'rgb(255,47,36)',
      											'dialog.button.foreground': 'white'
    										},
        							size: 'medium', /* One of 'small', 'medium', or 'large' */
        							position: 'bottom-left', /* Either 'bottom-left' or 'bottom-right' */
        							offset: 
        								{
        							    	bottom: '0px',
        							    	left: '0px', /* Only applied if bottom-left */
        							    	right: '0px' /* Only applied if bottom-right */
        								},
        							prenotify: true, /* Show an icon with 1 unread message for first-time site visitors */
        							showCredit: false, /* Hide the OneSignal logo */
        							text: 
        								{
        							    	'tip.state.unsubscribed': 'Subscribe to notifications',
        							    	'tip.state.subscribed': "You're subscribed to notifications",
        							    	'tip.state.blocked': "You've blocked notifications",
        							    	'message.prenotify': 'Click to subscribe to notifications',
        							    	'message.action.subscribed': "Thanks for subscribing!",
        							    	'message.action.resubscribed': "You're subscribed to notifications",
        							    	'message.action.unsubscribed': "You won't receive notifications again",
        							    	'dialog.main.title': 'Manage Site Notifications',
        							    	'dialog.main.button.subscribe': 'SUBSCRIBE',
        							    	'dialog.main.button.unsubscribe': 'UNSUBSCRIBE',
        							    	'dialog.blocked.title': 'Unblock Notifications',
        							    	'dialog.blocked.message': "Follow these instructions to allow notifications:"
        								}
    							}
						}]);
</script>

<script data-cfasync="false">
	window.OneSignal = window.OneSignal || [];
		/* In milliseconds, time to wait before prompting user. This time is relative to right after the user presses <ENTER> on the address barand navigates to your page */
		var notificationPromptDelay = 20000;
		/* Why use .push? See: http://stackoverflow.com/a/38466780/555547 */

	window.OneSignal.push(function() 
	{
	/* Use navigation timing to find out when the page actually loaded instead of using setTimeout() only which can be delayed by script execution */
	var navigationStart = window.performance.timing.navigationStart;
	/* Get current time */
	var timeNow = Date.now();
	/* Prompt the user if enough time has elapsed */
	setTimeout(promptAndSubscribeUser, Math.max(notificationPromptDelay - (timeNow - navigationStart), 0));
	});

	function promptAndSubscribeUser() 
	{
		window.OneSignal.isPushNotificationsEnabled(function(isEnabled) 
		{
			if (!isEnabled) 
			{
				/* Want to trigger different permission messages? See: https://documentation.onesignal.com/docs/	permission-requests#section-onesignal-permission-messages */
				window.OneSignal.showHttpPrompt();
			}
		});
	}
</script>