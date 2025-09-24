<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pages</title>
    <style type="text/css">
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.4;
            box-sizing: border-box;
        }
        a {
            display: inline-block;
        }
        a:focus {
            color: chocolate;
        }
        div {
            padding-left: 40px;
            margin-bottom: 20px;
        }
        ul {
            padding-left: 15px;
            list-style: none;
        }
        li {
            position: relative;
            margin-bottom: 10px;
            padding-left: 15px;
        }
        li:before {
            position: absolute;
            content: "";
            top: 7px;
            left: 0;
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background-color: #000;
        }
        .logo {
            display: inline-flex;
            margin-right: 40px;
            padding: 15px 0;
        }

        .dev {
            color: #F93;
            font-weight: 600;
        }
        .ready {
            color: forestgreen;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div style="display: flex; align-items:center; margin: 0 0 15px 20px;">
        <div class="logo">
            <img src="img/logo.svg#logo" width="350" height="100" alt="Логотип компании">
        </div>
		<span style="display: inline-flex; align-items:center; font-size: 24px;">
            <span style="color: forestgreen; font-weight: 600;">11<?/* + ui*/?></span>
            &nbsp;/&nbsp;
            <span style="font-size: 24px;">11<?/* + ui*/?> (всего страниц в макете)</span>
        </span>
    </div>

    <div>
        <ul>
			<li><a class="ready" href="plug.php" target="_blank">Заглушка</a></li>
			<li><a class="ready" href="index.php" target="_blank">Главная</a></li>

            <br>
			<li><a class="ready" href="catalog.php" target="_blank">Каталог</a></li>
			<li><a class="ready" href="card-details.php" target="_blank">Один товар</a></li>

            <br>
			<li><a class="ready" href="about.php" target="_blank">О компании</a></li>

            <br>
			<li><a class="ready" href="articles.php" target="_blank">Статьи</a></li>
			<li><a class="ready" href="articles-details.php" target="_blank">Статьи-деталка</a></li>
			<li><a class="ready" href="projects.php" target="_blank">Проекты</a></li>
			<li><a class="ready" href="projects-details.php" target="_blank">Проекты-деталка</a></li>

            <br>
            <li><a class="ready" href="contacts.php" target="_blank">Контакты</a></li>

            <br>
            <li><a class="ready" href="privacy-policy.php" target="_blank">Политика конфиденциальности</a></li>

            <br>
            <?/*<li><a class="ready" href="ui.php" target="_blank">ui</a></li>*/?>
        </ul>
    </div>
</body>
</html>