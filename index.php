<?php
require_once "config/bootstrap.php";

use app\Controller\EmployeesController;

$list = (new EmployeesController())->list();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Список сотрудников</title>
</head>

<body>
    <div class="mx-auto p-2" style="width: 200px;">
        Список сотрудников
    </div>
    <div class="mx-auto p-2" style="width: 1000px;">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Роль</th>
                    <th scope="col">ФИО</th>
                    <th scope="col">email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($list->getEmployees() as $value) {
                    $i++;
                ?>
                    <tr>
                        <th scope="row"><?php echo $i ?></th>
                        <td><?php echo $value->getNameRole() ?></td>
                        <td><?php echo $value->getFio() ?></td>
                        <td><?php echo $value->getEmail() ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>