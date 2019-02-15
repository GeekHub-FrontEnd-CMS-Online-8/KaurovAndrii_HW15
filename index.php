<!DOCTYPE html>
<html lang=ru>
	<head>
		<meta charset="UTF-8">
		<title>Home work 3</title>
		<link rel="stylesheet" href="style.css" type="text/css"/>
	</head>
	<body>
		<header>
			<div id="header">
				<h1>Урок "Формы": теги и их атрибуты.</h1>
				<h2>Расскажите немного о себе</h2>
			</div>
		</header>
		<form method="post" action="data.php">
			<fieldset class=frame>
				<legend><span>Кратко о себе</span></legend>
				<p><label>Имя:
					<input type="text" name="firstName">
				</label></p>
				<p><label>Фамилия:
					<input type="text" name="secondName">
				</label></p>
				<p><label>Пол:</label><input name="sex" type="radio" value="man">мужской
					<label><input name="sex" type="radio" value="woman"> женский
				</label></p>
				<p><label>Возраст:
					<input type="text" name="age">
				</label></p>
			</fieldset>
			<fieldset class="frame">
				<legend><span>Подробнее о себе</span></legend>
				<p><input name="gender" type="radio" value="human"> молодой человек</p>
				<p><input name="gender" type="radio" value="girl"> девушка</p>
				<div>
					<p><input id=happy type="text" name="birthday"><label for="happy">Дата рождения</label></p>
					<p><input id="family" type="text" name="maritalStatus"><label for="family">Семейное положение</label></p>
					<p><input id="status" type="text" name="socialStatus"><label for="status">Социальный статус</label></p>
					<p><input id="place" type="text" name="location"><label for="place">Место жительства</label></p>
				</div>
				<div>
					<h4>Что вы обычно делаете на выходных:</h4>
					<p><input id="sleep" type="checkbox" name="weekend" value="sleep"><label for="sleep">Сплю</label></p>
					<p><input id="friends" type="checkbox" name="weekend" value="friends"><label for="friends">Гуляю с друзьями</label></p>
					<p><input id="fishing" type="checkbox" name="weekend" value="fishing"><label for="fishing">Хожу на рыбалку</label></p>
					<p><input id="games" type="checkbox" name="weekend" value="games"><label for="games">Играю в игры</label></p>
				</div>
				<h4>Какие жанры книг вы любите читать:</h4>
				<select name="genreBooks">
					<option value="fantasy">Фантастика</option>
					<option value="poetry">Поэзия</option>
					<option value="business">Бизнес-книги</option>
					<option value="detectives">Детективы</option>
					<option value="adventure">Приключения</option>
				</select>
				<div>
					<h4>Сколько книг вы прочитали за свою жизнь:</h4>
					<p><input id="to10" name="books" type="radio" value="to 10"><label for="to10">0-10</label></p>
					<p><input id="to20" name="books" type="radio" value="to 20"><label for="to20">11-20</label></p>
					<p><input id="to50" name="books" type="radio" value="to 50"><label for="to50">21-50</label></p>
					<p><input name="books" type="radio" value="more 50"><label>+50</label></p>
				</div>
				<h4>Ваши коментарии:</h4>
				<p><textarea rows="10" cols="50" name="coments"></textarea></p>
				<select multiple="" name="numberPosition">
					<option value="first">Первая позиция</option>
					<option value="second">Вторая позиция</option>
					<option value="third">Третья позиция</option>
				</select>
			</fieldset>
			<fieldset class="frame">
				<legend><span>И в заключении</span></legend>
				<input type="text" placeholder="Это поле было введено до вас" size="30" name="conclusion">
				<h4>Email:</h4>
				<input type="email" size="30" name="emailAddres">
				<div>
					<h4>Хотите подписатся на самую модную рассылку спама?</h4>
					<p id="em">Выберите категории</p>
					<p><input id="equipment" type="checkbox" name="category" value="equipment"><label for="equipment">Оборудование</label></p>
					<p><input id="dinner" type="checkbox" name="category" value="dinner"><label for="dinner">Как приготовить обеды</label></p>
					<p><input id="earn" type="checkbox" name="category" value="earn"><label for="earn">Заработай миллион за 2 дня</label></p>
				</div>
				<div>
					<h4>На сколько сложная была задача:</h4>
					<p><input id="no" type="radio" name="task" value="no"><label for="no">Совсем нет</label></p>
					<p><input id="or" type="radio" name="task" value="yes or no"><label for="or">Так себе</label></p>
					<p><input id="yes" type="radio" name="task" value="yes"><label for="yes">Еле справился</label></p>
				</div>
			</fieldset>
			<button>Отправить</button>
		</form>
	</body>
</html>