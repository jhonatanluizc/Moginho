<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreateSchema</title>
</head>

<body>
    <form action="">
        <div class="campos" id="campos">
            <input name="name[0]" type="text"><input name="type[0]" type="text">
            <input name="required[0]" type="text"><input name="unique[0]" type="text">
            <input name="lowcase[0]" type="text"><input name="select[0]" type="text">
        </div>
        <br><br>

        <input onclick="add()" type="button" value="Adicionar Campo">


        <button type="submit">Confirmar</button>
    </form>


</body>

<script>
    let cont = 0;
    function add() {
        cont++;
       

        let add = ''
        add += "<br><br>"
        add += '<input name="name[' + cont +']" type="text">'
        add += '<input name="type[' + cont +']" type="text">'
        add += '<input name="required[' + cont +']" type="text">'
        add += '<input name="unique[' + cont +']" type="text">'
        add += '<input name="lowcase[' + cont +']" type="text">'
        add += '<input name="select[' + cont +']" type="text">'

        let element = document.getElementById('campos');
        element.innerHTML += add
    }
</script>

</html>