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
						<a href="">Обратная связь</a>
					</li>
				</ul>

				</div>
				
			</div>
		</div>

		<div class="official__name">
			<span>Мерчендайзинговый магазин</span>
			
		</div>

		<div class="info">
			<div class="half">
				<div class="var">
					<span class="var__name">Рюкзак</span>

					<div class="image__block">
						<div class="image image1"></div>
					</div>

					<input type="submit" value="Заказать" class="var__button">
				</div>
				<div class="var">
					<span class="var__name">Кошелек</span>

					<div class="image__block">
						<div class="image image2"></div>
					</div>

					<input type="submit" value="Заказать" class="var__button">
				</div>
				<div class="var">
					<span class="var__name">Чехол</span>

					<div class="image__block">
						<div class="image image3"></div>
					</div>

					<input type="submit" value="Заказать" class="var__button">
				</div>
				<div class="var">
					<span class="var__name">Футболка</span>

					<div class=" image__block">
						<div class="image image4"></div>
					</div>

					<input type="submit" value="Заказать" class="var__button">
				</div>
			</div>

			<div class="half">
				<div class="var">
					<span class="var__name">Кольца</span>

					<div class="image__block">
						<div class="image image5"></div>
					</div>

					<input type="submit" value="Заказать" class="var__button">
				</div>
				<div class="var">
					<span class="var__name">Стикеры</span>

					<div class="image__block">
						<div class="image image6"></div>
					</div>

					<input type="submit" value="Заказать" class="var__button">
				</div>
				<div class="var">
					<span class="var__name">Брелки</span>

					<div class="image__block">
						<div class="image image7"></div>
					</div>

					<input type="submit" value="Заказать" class="var__button">
				</div>
				<div class="var">
					<span class="var__name">Чашки</span>

					<div class="image__block">
						<div class="image image8"></div>
					</div>

					<input type="submit" value="Заказать" class="var__button">
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

	<div class="feedBack">

		<div fb__main__wrapper>
		<div class="fb__title">
			<span><p><b>Обратная связь</b></p></span>
		</div>


		<div class="half">
		<form action="send.php" method="POST" class="FrmFeedback">
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