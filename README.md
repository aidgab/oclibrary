oclibrary
=========

Конфигурирование:
* Создайте БД Mysql (по умолчанию oclibrary)
* Загрузите дамп базы из файла data/oclibrary.sql
* Изменение строки подключения (имя БД, пользователя и пароля) - в файле index.php:17


Использованные технологии:
* Серверный фреймворк реализован для данного проекта. Использует PDO для работы с MySql.
* Jquery+Jquery UI (autocomplete)
* Twitter Bootstrap


Структура приложения:
* **/classes** - Серверные классы. Единственный контроллер+работа с БД+рендерер
* **/views** - отображения страниц
* **index.php** - точка входа
