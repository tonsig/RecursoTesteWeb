<?php
// Inicialize a sessão
session_start();
 
// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8' lang='pt-br'>
        <title>Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		
    </head>
    <body>
        <script src='_js/script.js'></script>
		<center>
		<h5>Super Calculadora Quântica</h5> <br>
        <div class='main'>
            <form name='form'>
                <input type="text" name='textbox'>
            </form>
            <table>
                <tr class='numbers'>
                    <td><input type='button' value='C' class='buttons' onclick='clean()'></td> 
                    <td><input type='button' value='<' class='buttons' onclick='back()'></td>
                    <td><input type='button' value='-' class='buttons' onclick='insert("-")'></td>
                    <td><input type='button' value='+' class='buttons' onclick='insert("+")'></td>

                </tr>
                <tr class='numbers'>
                    <td><input type="button" value='1' class='buttons' onclick="insert(1)"></td>
                    <td><input type='button' value='2' class='buttons' onclick="insert(2)"></td>
                    <td><input type='button' value='3' class='buttons' onclick="insert(3)"></td>
                    <td><input type='button' value='/' class='buttons' onclick='insert("/")'></td>
                </tr>
                <tr class='numbers'>
                    <td><input type='button' value='4' class='buttons' onclick='insert(4)'></td>
                    <td><input type='button' value='5' class='buttons' onclick='insert(5)'></td>
                    <td><input type='button' value='6' class='buttons' onclick='insert(6)'></td>
                    <td><input type='button' value='*' class='buttons' onclick='insert("*")'></td>
                </tr>
                <tr class='numbers'>
                    <td><input type='button' value='7' class='buttons' onclick='insert(7)'></td>
                    <td><input type='button' value='8' class='buttons' onclick='insert(8)'></td>
                    <td><input type='button' value='9' class='buttons' onclick='insert(9)'></td>
                    <td><input type='button' value='=' class='buttons' onclick='total()'></td>
                </tr>
                <tr class='numbers'>
                    <td><input type='button' value='.' class='buttons' onclick='insert(".")'></td>
                    <td><input type='button' value='0' class='buttons' onclick='insert(0)'></td>
                </tr>
            </table>
			<br><br>			
			<a href="../welcome.php" class="btn btn-success">Sair</a>
        </div>
		</center>
		

		

    </body>
</html>
