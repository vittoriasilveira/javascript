<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="js/funcoesTres.js"></script>
    </head>
    <body>
        <div class="menu">
            <a href="index.php">aritméticos</a>
            <a href="checkbox.php">checkbox e radio</a>
            <a href="imc.php">imc</a>
              <a href="salario.php">salário</a>
        </div>
        <form action="#" name="frmImc" id="frmImc">
            <label for="peso">informe o seu peso</label>
            <input type="text" name="peso" id="peso">
            <label for="altura">informe a sua altura</label>
            <input type="text" name="altura" id="altura">
            <button type="button" onclick="imc()" >calcular</button>
        </form>
    </body>
</html>
