<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if($USER->isAuthorized()) {
	LocalRedirect("/");
}else {
	if(!empty($_REQUEST["login"]) && !empty($_REQUEST["email"]) && !empty($_REQUEST["first_name"]) && 
		!empty($_REQUEST["last_name"]) && !empty($_REQUEST["password"]) && !empty($_REQUEST["password_confirm"])) {

		if($_REQUEST["password"] == $_REQUEST["password_confirm"]) {
			$login = $_REQUEST["login"];
			$email = $_REQUEST["email"];
			$first_name = $_REQUEST["first_name"];
			$last_name = $_REQUEST["last_name"];
			$password = $_REQUEST["password"];

			$result = $USER->Register($login, $first_name, $last_name, $password, $password, $email);
			if($USER->isAuthorized()) {
				LocalRedirect("/");
			}else {
				ShowMessage($result);
			}
		}else {
			ShowMessage("Пароли не совпадают");
		}
	}else {
		if(!empty($_REQUEST)) {
			ShowMessage("Заполните все поля");
		}
	}
}

$this->IncludeComponentTemplate();

?>