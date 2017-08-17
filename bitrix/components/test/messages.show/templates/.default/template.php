<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


<? while($elem = $arResult["ELEMENTS"]->GetNextElement()): ?>
	<? $properties = $elem->GetProperties(); ?>
	<p>
		<header>
			<b><?=$properties["user"]["VALUE"]?></b>
			<?=$properties["datetime"]["VALUE"]?>
		</header>
		<?=$properties["text"]["VALUE"]?>
	</p>
<? endwhile; ?>