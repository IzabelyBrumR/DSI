<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Ensino</title>
        <link href="css/default.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <h2>Sistema de Ensino</h2>
        <form method="get" action="index.php">
        <table>
            <tr>
                <td>Matrícula (Número) :</td>
                <td>
                    <input type="number" name="matrícula" placeholder="Matrícula">
                </td>
                <td></td>
            </tr>
            <tr>
                <td>nome do Aluno:</td>
                <td>
                    <input type="text" name="nome" placeholder="nome do Aluno">
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Turmas:</td>
                <td>
                    <input type="radio" name="turma" value="411">411
                    <input type="radio" name="turma" value="412">412
                    <input type="radio" name="turma" value="413">413
                    <br>
                    <input type="radio" name="turma" value="421">421
                    <input type="radio" name="turma" value="422">422
                    <input type="radio" name="turma" value="423">423
                    <br>
                    <input type="radio" name="turma" value="431">431
                    <input type="radio" name="turma" value="432">432
                    <input type="radio" name="turma" value="433">433
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Telefone:</td>
                <td>
                    <input type="text" name="Telefone" placeholder="Telefone para contato">
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Endereço:</td>
                <td>
                    <input type="text" name="endereco" placeholder="Endereco">
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Estado:</td>
                <td>
                    <select name="Estado">
                        <option value="">Selecione um estado</option>
                        <option value="AC">AC</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
                    </select>
                </td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Enviar" placeholder="Cadastrar Aluno">
                    <input type="reset" value="Limpar Campos" placeholder="Limpar Campos">
                </td>
                <td></td>
            </tr>

        </table>
        </form>
        <?php
            if($_GET){
                $nome = $_GET['nome'];
                echo("Seu nome é: ". $nome);
            }
        ?>
    </body>
</html>
