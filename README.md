# Инструкция по установке и использованию приложения.
## Установка.
1) Для использования данного приложения необходимо скачать и установить локальный веб-сервер «OpenServer» с сайта https://ospanel.io/download/ и запустить его.
2) Затем разархивируем все файлы приложения в папку – simtech, в подкаталоге «domains» OpenServer

![GitHub](/images_instruction/2021-08-01_17-15-18.png)

3) Для управления БД можно использовать «HeidiSQL», и выполним авторизацию: Имя хоста: 95.104.192.212, Пользователь = iorken_few, Пароль = 333z567few
База данных, таблица users и поля в ней уже будут, поэтому создавать ничего не нужно

![GitHub]()

После создаём базу данных с нужным нам названием в кодировке utf8_general_ci

![GitHub](/images_instruction/2021-08-01_17-27-15.png)

теперь нужно импортировать в нашу базу данных бэкап таблиц, выбираем файл из архива с расширением sql и импортировать его

![GitHub](/images_instruction/2021-08-01_17-33-33.png)

![GitHub](/images_instruction/2021-08-01_17-34-16.png)

Далее в корне папки нашего приложения найдём файл config.php и отредактируем его если требуется изменить параметры для подключения БД.

![GitHub](/images_instruction/2021-08-01_17-44-53.png)

### Использование:
1) Запускаем сервер и во вкладке мои проекты выбираем проект "simtech" и кликаем на main.php.

   * ![GitHub](/images_instruction/2021-08-01_18-00-39.png)
   * ![GitHub](/images_instruction/2021-08-01_18-00-39.png)
   
2. Заполняем форму и нажимаем кнопку "Подтвердить".
   * Обязательными полями являются имя, фамилия, email, должность, согласие.
   
   ![GitHub](/images_instruction/2021-08-01_18-04-08.png)
   
   При успешном заполнении формы данные будут отправлены в БД, содержимое таблицы представлено ниже.
   
    ![GitHub](/images_instruction/2021-08-01_18-11-19.png)
    
3) Нажимаем на кнопку "Список результатов", где можно посмотреть список результатов.

   * ![GitHub](/images_instruction/2021-08-01_18-21-24.png)
