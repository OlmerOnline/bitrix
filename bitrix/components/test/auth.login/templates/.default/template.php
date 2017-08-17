<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>



<section class="6u 12u(narrower)">
	<h3>Введите логин и пароль</h3>
	<form method="post" action="">
		<div class="row 50%">
			<div class="6u 12u(mobilep)">
				<input type="text" name="login" id="login" placeholder="Login" />
			</div>
		</div>
		<div class="row 50%">
			<div class="6u 12u(mobilep)">
				<input type="password" name="password" id="password" placeholder="Password" />
			</div>
		</div>
		<div class="row 50%">
			<div class="12u">
				<ul class="actions">
					<li><input type="submit" class="button" value="Войти" /></li>
					<li><a href="/auth/signup.php" class="button alt">Регистрация</a></li>
				</ul>
			</div>	
		</div>
	</form>
</section>