<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arComponentDescription = array(
	"NAME" => "Боковое меню",
	"DESCRIPTION" => "Выводит имя и логин пользователя, конопки профиль и Войти/Выйти",
	"PATH" => array(
		"ID" => "test_components",
		"NAME" => "Мои компоненты",
		"CHILD" => array(
			"ID" => "main",
			"NAME" => "Главная страница",
		),
	),
);

?>