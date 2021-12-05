<?php require_once __DIR__ . '/DB.php';
      require_once __DIR__ . '/upload.php';

    if(trim(!empty($_POST['name'])))
    {
        $name = $_POST['name'];
    }

    if(trim(!empty($_POST['surname'])))
    {
        $surname = $_POST['surname'];
    }

    if(trim(!empty($_POST['gender'])))
    {
        $gender = $_POST['gender'];
    }

    if(trim(!empty($_POST['email'])) && preg_match('|^[-0-9A-Za-z_\.]+@[-0-9A-Za-z^\.]+\.[a-z]{2,6}$|i', $_POST['email']) )
    {
        $email = $_POST['email'];
    }

    if(trim(!empty($_POST['post'])))
    {
        $post = $_POST['post'];
    }

    if(trim(!empty($_POST['textarea'])))
    {
        $textarea = $_POST['textarea'];
    }

    if(trim(!empty($_POST['confirmation'])))
    {
        $confirmation = $_POST['confirmation'];
    }

    if (!empty($_FILES['image']['tmp_name']))
    {
        $uploaded = $_FILES['image'];
        $tmp_path = $_FILES['image']['tmp_name'];
        $ph_name = $_FILES['image']['name'];
        $uploadedFiles = new Upload($uploaded);
        $uploadedFiles->isUploaded();
        $ph_path = __DIR__ . '/photos/' . $_FILES['image']['name'];
    }

    $conn = new Db();
    try
    {
            $conn->query("INSERT INTO `users1` (`name`, `surname`, `gender`, `email`, `post`, `textarea`, `confirmation`, `ph_name`, `ph_path`, `tmp_path`) VALUES (:name, :surname, :gender, :email, :post, :textarea, :confirmation, :ph_name, :ph_path, :tmp_path);",
            [':name' => $name, ':surname' => $surname, ':gender' => $gender, ':email' => $email, ':post' => $post, ':textarea' => $textarea, ':confirmation' => $confirmation, ':ph_name' => $ph_name, ':ph_path' => $ph_path, ':tmp_path' => $tmp_path]);
    }
    catch(PDOException $e)
    {
        die ("ERROR: " . $e->getMessage());
    }
?>

<html>
    <head>
        <meta charset = "utf8">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            </head>
            <body>

    <div class="container">
        <h1 class="pt-3" style="text-align: center;">Связаться с нами</h1>
            <div class="row">
                <div class="offset-nd-4 col-sm 6">
                    <form action="main.php" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="name">Имя</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>

                        <div class="form-group">
                            <label for="surname">Фамилия</label>
                            <input type="text" class="form-control" name="surname" id="surname" required>
                        </div>

                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="gender" value="male" id="gender" checked="checked">
                            <label for="gender" class="form-check-label">Мужcкой</label>
                        </div>

                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="gender" value="female">
                            <label for="gender" class="form-check-label">Женский</label>
                        </div>

                        <div class="form-group">
                            <label for="post">Должность</label>
                            <select name="post" class="form-control" id="post" required>
                                <option value="">Выберите должность</option>
                                <option value="student">Студент/Школьник</option>
                                <option value="it">IT-специалист</option>
                                <option value="user">Пользователь/Любитель</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>

                        <div class="form-group">
                        <div class="col-form-label">Прикрепить своё фото:</div>
                        <div class="custom-file file">
                            <div>
                            <input for="image" type="file" name="image" accept=".jpg, .png .jpeg"  class="custom-file-input" id="file">
                            <label class="custom-file-label" for="customFile">Choose in .jpg or .png or .jpeg format</label>
                        </div>
                        </div>
                        </div>

                        <div class="form-group">
                            <label for="textarea">Напишите о себе</label>
                            <input class="form-control" type="textarea" name="textarea" id="textarea">
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox" name="confirmation"  value="yes">
                            <label class="form-check-label" for="checkbox">Я даю согласие на обработку персональных данных</label>
                        </div>
                        </br>

                            <input class="btn btn-success" type="submit" value="Подтвердить" name="submit" id="submit">

                            <input class="btn btn-primary" type="reset" name="reset">

                            <a class="btn btn-secondary" href="users.php">Список результатов</a>
                <form>
            </div>
        </div>
    </div>
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>