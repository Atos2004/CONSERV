<?php
    if (isset($_POST['submit'])){
       

        include_once('config.php');

        $NomeCliente = ($_POST['Nome']);
        $Telefone = ($_POST['Telefone']);
        $cidade = ($_POST['cidade']);
        $bairro = ($_POST['bairro']);
        $Endereco = ($_POST['Endereco']);

        $result = mysqli_query($conexao, "INSERT INTO cliente (NomeCliente,Telefone,cidade,bairro,Endereco)
         VALUES ('$NomeCliente', '$Telefone', '$cidade', '$bairro', '$Endereco')");


    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | Conserv </title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71) );
        }

        .box{
            
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 15px;
            width: 50%;
        }

        fieldset {
            border: 3px solid dodgerblue;
        }

        legend {
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
            
        }

        .inputbox{
            position: relative;
            
        }
        .inputUser{
            font-size: 15px;
    
            
        }
        
        #submit{
            background-color: dodgerblue;
            width: 100%;
            border: none;
            padding: 15px;
            font-size: 15px;
            color: white;
            cursor: pointer;
        }

        

        @media screen and (max-width:1020px) {

            .box{
                width: 65%;
            }
            
        }

    

    </style>
</head>
<body> 
    <img src="Untitled-2.gif" alt="" width="20%" >
    <div class="box">
        <form action="testecopy.php" method="POST">
            
            <fieldset>
                <legend><b>Preencha o Formulário</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="Nome" id="Nome" class="inputUser" required>
                    <label for="Nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="Telefone" id="Telefone" class="inputUser" required>
                    <label for="Telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="bairro" id="bairro" class="inputUser" required>
                    <label for="bairro" class="labelInput">Bairro</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="Endereco" id="Endereco" class="inputUser" required>
                    <label for="Endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit" >
            </fieldset>
        </form>
    </div>
</body>
</html>