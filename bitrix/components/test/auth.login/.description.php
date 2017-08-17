<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("COMPONENT_NAME"),
	"DESCRIPTON" => GetMessage("COMPONENT_DESC"),
	"PATH" => array(
		"ID" => "test_components",
		"NAME" => "Мои компоненты",
		"CHILD" => array(
			"ID" => "auth",
			"NAME" => "Аутентификация",
		),
	),
);

?>