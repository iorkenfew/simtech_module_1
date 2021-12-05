<?php require_once __DIR__ . '/DB.php'; ?>

<?php
     $conn = new Db();

     $list = $conn->query("SELECT * FROM `users`");
?>

<html>
    <head>
        <meta charset = "utf8_general_ci">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
                <div class="container pt-3" style="text-align: center;"><h1>Страница результатов</h1></div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Имя</th>
                      <th scope="col">Фамилия</th>
                      <th scope="col">Пол</th>
                      <th scope="col">Email</th>
                      <th scope="col">Должность</th>
                      <th scope="col">О себе</th>
                      <th scope="col">Согласие</th>
                      <th scope="col">Фото</th>
                    </tr>
                  </thead>
                  <tbody>
            <?php

            $data_list = [];

            foreach($list as $id => $val_list)
                {
                    $data_list[$id] = $val_list;
                ?>
                <tr>
                    <th scope="row"><?php echo $data_list[$id]->id;?></th>
                    <td><?php echo $data_list[$id]->name;?></td>
                    <td><?php echo $data_list[$id]->surname;?></td>
                    <td><?php echo $data_list[$id]->gender;?></td>
                    <td><?php echo $data_list[$id]->email;?></td>
                    <td><?php echo $data_list[$id]->post;?></td>
                    <td><?php echo $data_list[$id]->textarea;?></td>
                    <td><?php echo $data_list[$id]->confirmation;?></td>
                    <td><img width="300" height="300" src="/photos/<?php echo $data_list[$id]->ph_name; ?>"> </td>
                </tr>
                 <?php } ?>
                  </tbody>
                </table>

            <a class="btn btn-secondary" href="main.php">Регистрация</a>
              
            </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>