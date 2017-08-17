<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");?><?$APPLICATION->IncludeComponent(
	"test:auth.signup",
	"",
Array()
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>