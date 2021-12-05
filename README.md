# Инструкция по установке и использованию приложения.
## Установка.
1) Для использования данного приложения необходимо скачать и установить локальный веб-сервер «OpenServer» с сайта https://ospanel.io/download/.

2) Скачиваем архив с файлами из репозитория. Затем разархивируем все файлы приложения в папку – simtech, в подкаталоге «domains» OpenServer.

![GitHub](/instructions/1.png)

3) Для управления БД можно использовать «HeidiSQL», после чего выполним авторизацию: Пользователь: root, Пароль: root.

![GitHub](/instructions/10.png)

4) Создаём базу данных с нужным нам названием в кодировке utf8_general_ci, потом нужно импортировать в нашу базу данных бэкап таблиц, выбираем файл из архива с расширением sql и загружаем его, после этого нажимаем синий треугольник на верхней панели.

![GitHub](/instructions/8.png)
![GitHub](/instructions/9.png)

5) В корне папки нашего приложения найдится файл conn.php, если требуется, то можно внести свои параметры для подключения БД.
 
![GitHub](/instructions/conn.png)

## Использование.
1) Запускаем сервер и во вкладке мои проекты выбираем проект "simtech", затем кликаем на main.php.

![GitHub](/instructions/3.png)
![GitHub](/instructions/4.png)
   
2) Заполняем форму и нажимаем кнопку "Подтвердить".
   * Обязательными полями являются имя, фамилия, email, должность, согласие.
   
![GitHub](/instructions/5.png)
   
   При успешном заполнении формы данные будут отправлены в БД, содержимое таблицы представлено ниже.
   
![GitHub](/instructions/6.png)
    
3) Нажимаем на кнопку "Список результатов", где можно посмотреть список результатов.

![GitHub](/instructions/7.png)
