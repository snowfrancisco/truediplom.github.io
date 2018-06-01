<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Portfolio Mickel</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="fonts/fonts.css">
</head>
<body>
	<header>
		<div class="logo__menu">

			<div class="logo">
				<span class="name">GTAvision</span>
			</div>

			<div class="buttons">
				<div class="btn__wrapper">

				<ul class="buttons__ul">
					<li>
						<a href="">Главная</a>
					</li>
					<li>
						<a href="">О себе</a>
					</li>
					<li>
						<a href="">Услуги</a>
					</li>
					<li>
						<a href="">Обратная связь</a>
					</li>
				</ul>

				</div>
				
			</div>
		</div>

		<div class="info">
			<div class="info__name">
				<div class="dip__name">
					<!--<span>Дипломная работа</span>-->
				</div>
				<div class="dip__surname">
					<!--<span>Студента: Цоколова М.Ю. группы: 473к ГБПОУ "СПбПК" </span>-->
				</div>
			</div>
			<div class="info__photo">
				<!--<div>
					
				</div>-->
			</div>
			<div class="info__GH">
				<div>
					<a href=""><img src="../image/github.svg" alt="" width="50px" height="50px"></a>
				</div>
			</div>
		</div>
	</header>

	<div class="about">
		
		<div class="about__info">
			<div class="about__title">
				<span>О себе</span>
			</div>
			<div class="about__description">
				<span>GTA vision — это всегда актуальная информация про игры серии Grand Theft Auto. Мы используем исключительно официальные и проверенные источники
				</span>
			</div>
		</div>

	</div>


	<div class="services">

		
	</div>

	<div class="feedBack">

		<div fb__main__wrapper>
		<div class="fb__title">
			<span><p><b>Обратная связь</b></p></span>
		</div>


		<div class="half">
		<form action="send.php" method="post" class="FrmFeedback">
			<div class="fb__wrapper">
			<p><b>Ваше ФИО</b></p>
			<input type="text" placeholder="Александр Васильевич Пупкин" name="usrname"
			autocomplete required>
			<p><b>Ваш e-mail</b></p>
			<input type="email" name="email" required>

			<p><b>Тема/комментарий</b></p><br>

			<textarea name="comment" id="comment" cols="30" rows="10" required></textarea>

			<input type="submit" class="btn__style" name="submit" inset value="Отправить">
			</div>


			<div class="fb__wrapper">
				
			</div>


		</form>

		<div class=" twohalf__info">
			<p>
				<span>Номер:</span><br>
				<span>
					<small>8-800-555-35-35</small>
				</span>
			</p>
			<p>
				<span>Юридичесий адрес:</span><br>
				<span>
					<small>
					г.Мухосранск, дом Пушкина ул. Колотушкина, кв 34
					</small>
				</span>
			</p>

			<p>
				<span>Дисклеймер:</span><br>
				<span>
					<small>
					Мы не несем ответственности за ваши персональные данные.
					</small>
				</span>
			</p>
			<p>
				<span>Группа:</span><br>
				<span>
					<small>
						<a href="https://vk.com/gtavision">https://vk.com/gtavision</a>
					</small>
				</span>
			</p>
		</div>
		</div>
		</div>
	</div>

	<div class="footer">
		
	</div>

	<script src="js/script.js"></script>
</body>
</html>