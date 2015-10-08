<?php

require'vendor/autoload.php';

define('SITE_URL','http://www.google.com');

$paypal = new\PayPal\Rest\ApiContext(

	new PayPal\Auth\OAuthTokenCredential(
		'AXekoZNZRpav2TUDe5iQFIcboRc_X8nDKim3Wk9l_WSz6fiKrDdC8IXd3KTly88DD_g6EqfK1tXu0_6j',
		'EBmiMf-T2KuicfnNRbX13lQtNiziNYGgfS3tgxUHd2LljIX9KOtf2WAr4Q4b9rZ6xmux0E3mruaxr2EK'

		)

	);


?>