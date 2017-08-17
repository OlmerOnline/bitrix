<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if($USER->isAuthorized()) {
	if(!empty($_REQUEST["message"])) {
		$message = $_REQUEST["message"];

		$datetime = new Datetime();
		$datetime = \Bitrix\Main\Type\DateTime::createFromPhp($datetime);
		$datetime->add("1 hour");

		$arFields = array(
			"text" => $message,
			"user" => $USER->GetLogin(),
			"datetime" => $datetime
		);

		$el = new CIBlockElement;
		$arLoad = array(
			"MODIFIED_BY" => $USER->GetID(),
			"IBLOCK_ID" => 1,
			"PROPERTY_VALUES" => $arFields,
			"NAME" => "message"
		);
		if($el->Add($arLoad)) {
			LocalRedirect("/");
		}else {
			ShowMessage($el->LAST_ERROR);
		}
	}else {
		if(!empty($_REQUEST)) {
			ShowMessage("Введите сообщение");
		}
	}

	$this->IncludeComponentTemplate();	
}

?>