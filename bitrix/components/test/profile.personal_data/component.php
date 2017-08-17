<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arResult["USER_LOGIN"] = $USER->GetLogin();
$arResult["USER_FIRST_NAME"] = $USER->GetFirstName();
$arResult["USER_LAST_NAME"] = $USER->GetLastName();
$arResult["USER_EMAIL"] = $USER->GetEmail();

$this->IncludeComponentTemplate();

?>