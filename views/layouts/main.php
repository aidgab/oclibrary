<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico">

    <title>Поиск книг по библиотеке</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="js/jqueryui/jquery-ui.min.css" rel="stylesheet">
    <link href="js/jqueryui/jquery-ui.structure.min.css" rel="stylesheet">
    <link href="js/jqueryui/jquery-ui.theme.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/jqueryui/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Библиотека.Поиск</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php?route=index">Поиск</a></li>
                    <li><a href="index.php?route=about">О системе</a></li>
                </ul>
            </div><!--/.navbar-collapse -->
        </div>
    </div>

    <? echo $content; ?>
</body>
</html>
