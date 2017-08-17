<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); 

if(CModule::IncludeModule("iblock")) {
	$elements = CIBlockElement::GetList(
		array(),
		array(
			"IBLOCK_ID" => 1
		),
		false,
		false,
		array()
	);

	$arResult["ELEMENTS"] = $elements;

	$this->IncludeComponentTemplate();
}

?>