<!DOCTYPE html>
<html>
<head lang="ru">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Галлерея</title>
    <link rel="stylesheet" type="text/css" href="reset.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ruslan+Display&subset=cyrillic' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="wrapper">
    <?php include("sidebar.html");?>
    <div class="main">
        <header>
            <?php include("heading.html");?>
            <menu>
                <a href="skills.php">Умения</a>
                <a href="chiropractor.php">Статьи</a>
                <a class="active">Галерея</a>
                <a href="contact.php">Контакты</a>
            </menu>
        </header>
        <div class="content gallery">
            <h1>
                Галлерея
            </h1>
            <p>
                <img src="imgo.jpg">
                Исцеление водой
                <img src="imgo1.jpg">
                Исцеление водой
            </p>
        </div>
    </div>
    <?php include("footer.html");?>
</div>
</body>
</html>