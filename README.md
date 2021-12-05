# Инструкция по установке и использованию приложения.
## Установка.
1) Для использования данного приложения необходимо скачать и установить локальный веб-сервер «OpenServer» с сайта https://ospanel.io/download/.
2) Затем разархивируем все файлы приложения в папку – simtech, в подкаталоге «domains» OpenServer.

![GitHub](/instructions/1.png)

3) Для управления БД можно использовать «HeidiSQL», и выполним авторизацию: Имя хоста: 95.104.192.212, Пользователь: iorken_few, Пароль: 333z567few.
База данных, таблица users и поля в ней уже будут, поэтому создавать ничего не нужно.

![GitHub](/instructions/2.png)
![GitHub](/instructions/db.png)

## Использование.
1) Запускаем сервер и во вкладке мои проекты выбираем проект "simtech" и кликаем на main.php.

![GitHub](/instructions/3.png)
![GitHub](/instructions/5.png)
   
2) Заполняем форму и нажимаем кнопку "Подтвердить".
   * Обязательными полями являются имя, фамилия, email, должность, согласие.
   
![GitHub](/instructions/5.png)
   
   При успешном заполнении формы данные будут отправлены в БД, содержимое таблицы представлено ниже.
   
![GitHub](/instructions/6.png)
    
3) Нажимаем на кнопку "Список результатов", где можно посмотреть список результатов.

![GitHub](/instructions/7.png)
