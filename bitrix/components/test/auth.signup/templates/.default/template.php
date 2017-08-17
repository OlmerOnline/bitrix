<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


<section class="6u 12u(narrower)">
	<h3>Заполните все поля для регистрации</h3>
	<form method="post" action="">
		<div class="row 50%">
			<div class="6u 12u(mobilep)">
				<input type="text" name="login" id="login" placeholder="Логин" />
			</div>
		</div>
		<div class="row 50%">
			<div class="6u 12u(mobilep)">
				<input type="email" name="email" id="email" placeholder="Почта" />
			</div>
		</div>
		<div class="row 50%">
			<div class="6u 12u(mobilep)">
				<input type="text" name="first_name" id="first_name" placeholder="Имя" />
			</div>
		</div>
		<div class="row 50%">
			<div class="6u 12u(mobilep)">
				<input type="text" name="last_name" id="last_name" placeholder="Фамилия" />
			</div>
		</div>
		<div class="row 50%">
			<div class="6u 12u(mobilep)">
				<input type="password" name="password" id="password" placeholder="Пароль" />
			</div>
		</div>
		<div class="row 50%">
			<div class="6u 12u(mobilep)">
				<input type="password" name="password_confirm" id="password_confirm" placeholder="Повторите пароль" />
			</div>
		</div>
		<div class="row 50%">
			<div class="12u">
				<ul class="actions">
					<li><input type="submit" class="button" value="Зарегистрироваться" /></li>
				</ul>
			</div>	
		</div>
	</form>
</section>