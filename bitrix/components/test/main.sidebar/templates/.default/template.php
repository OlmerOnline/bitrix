<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if($USER->isAuthorized()): ?>
	<h3><?=$arResult["USER_LOGIN"]?> (<?=$arResult["USER_FULL_NAME"]?>)</h3>
	<footer>
		<a href="/profile/" class="button">Профиль</a>
	</footer>
	<footer>
		<a href="<?=$arResult['BTN_LOGIN_HREF']?>" class="button"><?=$arResult["BTN_LOGIN_NAME"]?></a>
	</footer>
<? else: ?>
	<footer>
		<a href="<?=$arResult['BTN_LOGIN_HREF']?>" class="button"><?=$arResult["BTN_LOGIN_NAME"]?></a>
	</footer>
<? endif; ?>
