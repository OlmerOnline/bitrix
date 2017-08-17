<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if($USER->isAuthorized()) {
	$USER->Logout();
}
LocalRedirect("/");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>