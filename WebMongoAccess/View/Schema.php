<?php include_once 'Template/header.php'; ?>
<br><br>
<br>
<div class="container">

    <form action="../Controller/Schema.php" method="POST">

        <label for="username">Nome da Tabela:</label>
        <input class="form-control" name="username" type="text">

        <br>
        <input type="button" class="btn btn-success" id="add" value="Novo Campo">
        <button class="btn btn-success" type="submit"> Criar Schema </button>

        <hr>
        <table>
            <thead>
                <tr>
                    <th scope="col">Nome do Campo</th>
                    <th scope="col">Tipo de dados</th>
                    <th scope="col">Require</th>
                    <th scope="col">Unique</th>
                    <th scope="col">Select</th>
                </tr>
            </thead>
            <tbody id="campos">
                <tr>
                    <td><input class="form-control" name="name[]" type="text"></td>
                    <td>
                        <select class="form-control" name="type[]">
                            <option value="string">String</option>
                            <option value="number">Number</option>
                            <option value="boolean">Boolean</option>
                        </select>
                    <td>
                        <select class="form-control" name="require[]">
                            <option value="true">True</option>
                            <option value="false">False</option>
                        </select>
                    <td>
                        <select class="form-control" name="unique[]">
                            <option value="true">True</option>
                            <option selected value="false">False</option>
                        </select>
                    <td>
                        <select class="form-control" name="select[]">
                            <option value="true">True</option>
                            <option value="false">False</option>
                        </select>
                </tr>
            </tbody>
        </table>
    </form>

</div>

<?php

include_once 'Template/footer2.php';

?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>
    var campo = '<tr> <td><input class="form-control" name="name[]" type="text"></td> <td> <select class="form-control" name="type[]"> <option value="string">String</option> <option value="number">Number</option> <option value="boolean">Boolean</option> </select> <td> <select class="form-control" name="require[]"> <option value="true">True</option> <option value="false">False</option> </select> <td> <select class="form-control" name="unique[]"> <option value="true">True</option> <option selected value="false">False</option> </select> <td> <select class="form-control" name="select[]"> <option value="true">True</option> <option value="false">False</option> </select> </tr>'


    $("#add").click(function() {
        $("#campos").append(campo);
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>