<?php include_once("../Controller/Alter.php"); ?>

<?php include_once 'Template/header.php'; ?>
<br><br>
    <div class="container">
    <form action="../Controller/AlterData.php" method="POST">
        <label for="username">Nome da Tabela</label>
        <input class="form-control" name="username" value="<?= $username ?>" type="text">
        <br>
        <button class="btn btn-success" type="submit">Alterar na Tabela</button>
        <hr>
        <input type="text" name="id" value="<?= $id ?>" hidden>
            <table>
                <thead>
                    <tr>
                        <th scope="col">Nome do Campo</th>
                        <th scope="col">Valor do Campo</th>
                    </tr>
                </thead>
                <tbody id="campos">
                
                <?php
                foreach ($data as $key => $value) { 
                if ($key != "_id" && $key != "__v") { ?>         
                    <tr>                  
                        <td><input class="form-control" name="column[]" type="text" value="<?= $key ?>"></td>
                        <td><input class="form-control" name="data[]" type="text" value="<?= $value ?>"></td>
                    </tr>                 
                <?php }} ?>
             
                </tbody>
            </table>
        </form>

    </div>

    <?php

    include_once 'Template/footer2.php';

    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
        var campo = '<tr> <td><input class="form-control" name="column[]" type="text"></td> <td><input class="form-control" name="data[]" type="text"></td> </tr>';
        $("#add").click(function() {
            $("#campos").append(campo);
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>