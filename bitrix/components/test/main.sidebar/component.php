<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arResult["USER_FULL_NAME"] = $USER->GetFullName();
$arResult["USER_LOGIN"] = $USER->GetLogin();

if($USER->isAuthorized()) {
	$arResult["BTN_LOGIN_HREF"] = "/auth/logout.php";
	$arResult["BTN_LOGIN_NAME"] = "Выйти";
}else {
	$arResult["BTN_LOGIN_HREF"] = "/auth/";
	$arResult["BTN_LOGIN_NAME"] = "Войти";
}

$this->IncludeComponentTemplate();

?>