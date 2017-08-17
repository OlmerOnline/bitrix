<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?>

<!-- Main -->
<section>
	<div class="container">
		<header>
			<h2>Чат</h2>
		</header>
		<div class="row 200%">
			<div class="8u 12u(narrower)">
				<div id="content">
					<!-- Content -->
					<?$APPLICATION->IncludeComponent(
						"test:messages.show",
						"",
						Array(),
						false
					);?>
					<?$APPLICATION->IncludeComponent(
						"test:messages.add",
						"",
						Array(),
						false
					);?>
				</div>
			</div>
			<div class="4u 12u(narrower)">
				<div id="sidebar">
					<!-- Sidebar -->
					<section>
						<?$APPLICATION->IncludeComponent(
							"test:main.sidebar",
							"",
							Array()
						);?>
					</section>
				</div>
			</div>
		</div>
	</div>
</section>

<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>