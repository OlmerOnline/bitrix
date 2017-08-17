<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if($USER->isAuthorized()) {
	LocalRedirect("/");
}else {
	if(!empty($_REQUEST["login"]) && !empty($_REQUEST["password"])) {
		$login = $_REQUEST["login"];
		$password = $_REQUEST["password"];

		$result = $USER->Login($login, $password, "Y");
		if($USER->isAuthorized()) {
			LocalRedirect("/");
		}else {
			ShowMessage($result);
		}
	}else {
		if(!empty($_REQUEST)) {
			ShowMessage("Введите логин и пароль");
		}
	}

	$this->IncludeComponentTemplate();
}

?>