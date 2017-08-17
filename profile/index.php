<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");?>

<? if($USER->isAuthorized()): ?>
	<section class="wrapper style1">
		<div class="container">
			<header>
				<h2>Профиль пользователя</h2>
			</header>
			<div class="row 200%">
				<div class="1u 12u(narrower)">
					<div id="content">
						<article>
							<h3>Логин:</h3>
							<h3>Имя:</h3>
							<h3>Фамилия:</h3>
							<h3>Почта:</h3>
						</article>
					</div>
				</div>
				<div class="11u 12u(narrower)">
					<div id="sidebar">
						<section>
							<?$APPLICATION->IncludeComponent(
								"test:profile.personal_data",
								"",
								Array(),
								false
							);?>
						</section>
					</div>
				</div>
			</div>
		</div>
	</section>
<? else : ?>
	<? LocalRedirect("/") ?>
<? endif; ?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>