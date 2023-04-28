<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if($_POST){
                
                /*print_r($_GET);*/
                
                @$nome = $_POST['nome'];
                @$email = $_POST['email'];
                @$telefone = $_POST['telefone'];
                @$atuacao = $_POST['atuacao'];
                @$acesso = $_POST['acesso'];
                @$estado = $_POST['estado'];
                @$cidade = $_POST['cidade'];
                
                if(empty($nome) || empty($email) ||empty($telefone) || empty($atuacao)||empty($acesso)|| empty($estado) || empty($cidade) ){
              
                   echo('<div class = "alert"> Todos Os campos são obrigatorios </div>'); 
                   
                }
                else{
                    $result = "Nome:".$nome. "<br> E-mail:".$email."<br> Telefone:".$telefone."<br> Atuação:".$atuacao. 
                            "<br>Acesso:".$acesso."<br> Estado:".$estado."<br> Cidade:".$cidade;;
                    
                    echo($result);
                    
                }
                
            }
        ?>
    </body>
</html>
