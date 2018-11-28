<?php

include ("../res/x5engine.php");
$ecommerce = new ImCart();
$ecommerce->setSettings(array(
	'force_sender' => false,
	'email_opening' => 'Vážený zákazníku,<br /><br />děkujeme Vám za Váš nákup. Zde uvádíme informace o Vaší objednávce.<br /><br />Níže je uveden seznam objednaných produktů, fakturační údaje a pokyny týkající se zvolené dopravy a platby.',
	'email_closing' => 'Kontaktujte nás, pokud potřebujete další informace.<br /><br />S pozdravem obchodní oddělení.',
	'useCSV' => true,
	'header_bg_color' => '#808080',
	'header_text_color' => '#000000',
	'cell_bg_color' => '#FFFFFF',
	'cell_text_color' => '#0040FF',
	'border_color' => '#808080',
	'owner_email' => 'boiliesodpavla@seznam.cz',
	'vat_type' => 'excluded'
));

if (@$_GET['action'] == 'sndrdr' && isset($_POST['orderData'])) {
	$orderNo = $_POST['orderData']['orderNo'];
	$ecommerce->setOrderData($_POST['orderData']);
	$ecommerce->sendOwnerEmail();
	$ecommerce->sendCustomerEmail();
	header('Content-type: application/json');
	echo '{ "orderNo": "' . $orderNo . '" }';
	exit();
}

// End of file x5cart.php