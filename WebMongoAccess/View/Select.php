<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moginho</title>
    <link href="../Public/Vendor/table/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css">
</head>
<?php include_once("Template/header.php"); ?>
<?php include_once("../Controller/Select.php"); ?>

<div class="container">
    <h2 class="my-4 text-center">Listagem da Tabela: <?= $user_name ?></h2>
    <br>
    <!-- table... -->
    <div class="table-responsive">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <?php foreach ($datas as $key => $value) {
                            foreach ($value as $key2 => $value2) {
                                if ($key2 == "_id") {
                                    echo "<th>opções</th>";
                                } else if ($key2 != "__v") {
                                    echo "<th> $key2 </th>";
                                }         
                            }
                            break;
                        } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datas as $key => $value) {
                        echo "<tr>";
                        foreach ($value as $key2 => $value2) {
                            if ($key2 == "_id") { ?>
                                <td>
                                    <a href="../View/Alter.php?username=<?= $user_name ?>&id=<?= $value2 ?>">&#128395;</a>
                                    <a href="../Controller/Delete.php?username=<?= $user_name ?>&id=<?= $value2 ?>">&#10006;</a>
                                </td>
                            <?php } else if ($key2 != "__v") { ?>
                                <td><?= $value2 ?></td>
                            <?php } }
                        echo "</tr>";
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /table... -->

</div>

<?php

include_once 'Template/footer2.php';

?>

<script src="../Public/Vendor/table/datatables/jquery.dataTables.js"></script>
<script src="../Public/Vendor/table/datatables/dataTables.bootstrap4.js"></script>
<script src="../Public/Vendor/table/demo/datatables-demo.js"></script>"


<script src="../Public/Vendor/jquery-3.5.1.slim.min.js"></script>
<script src="../Public/Vendor/popper.min.js"></script>
<script src="../Public/Vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>