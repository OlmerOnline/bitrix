<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?>

<!-- Main -->
<section class="wrapper style1">
	<div class="container">
		<div class="row 200%">
			<div class="8u 12u(narrower)">
				<div id="content">

					<!-- Content -->

						<article>
							<header>
								<h2>Right Sidebar</h2>
								<p>Sidebar on the right, content on the left.</p>
							</header>

							<span class="image featured"><img src="images/banner.jpg" alt="" /></span>

							<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus.
							Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat.
							Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis nisi
							consequat etiam lorem ipsum dolor sit amet nullam.</p>
						</article>

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