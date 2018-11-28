<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Rychlá zpráva', $_POST['imObjectForm_6_1'], '', false);
	$form->setField('E-mailová adresa', $_POST['imObjectForm_6_2'], '', false);
	$fileResult = $form->setFile('soubor', $_FILES['imObjectForm_6_3'], $imSettings['general']['public_folder'], '', 'jpg,raf,bmp,png,doc,docx,xls,xlsx,cdr');
	if ($fileResult == -1) { die(imPrintError('Cannot send file: soubor')); }
	if ($fileResult < -1) { die(imPrintError('"soubor" má špatný formát.')); }

	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != 'jsactive' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner($_POST['imObjectForm_6_2'] != "" ? $_POST['imObjectForm_6_2'] : 'boiliesodpavla@seznam.cz', 'boiliesodpavla@seznam.cz', '', '', false);
		@header('Location: ../index.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file