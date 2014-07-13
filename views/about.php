<div class="container">
    <div class="page-header">
        <h1>Поиск по библиотеке</h1>
    </div>
    <p class="lead">Тестовое задание для Online Consultant</p>
    <p class="lead"><b>Автор:</b> Айдар Габдуллин</p>
    <p>Конфигурирование: <br />
        <ul>
            <li>Создайте БД Mysql (по умолчанию oclibrary)</li>
            <li>Загрузите дамп базы из файла <b>data/oclibrary.sql</b></li>
            <li>Изменение строки подключения (имя БД, пользователя и пароля) - в файле <b>index.php:17</b></li>
        </ul>
        Использованные технологии:<br />
        <ul>
            <li>Серверный фреймворк реализован для данного проекта. Использует PDO для работы с MySql. </li>
            <li>Jquery+Jquery UI (autocomplete)</li>
            <li>Twitter Bootstrap</li>
        </ul>
        Структура приложения:
        <ul>
            <li><b>/classes</b> - Серверные классы. Единственный контроллер+работа с БД+рендерер</li>
            <li><b>/views</b> - отображения страниц</li>
            <li><b>index.php</b> - точка входа</li>
        </ul>
    </p>
</div>