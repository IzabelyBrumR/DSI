<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pampa Corte Plus</title>
        <link href="css/defaultpampa.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h2>Solicitar acesso ao sistema</h2>
        <form method="post" action="userdetailspampa.php">
            <fieldset>
            <table>
                <tr>
                    <td>Nome</td>
                    <td>
                        <input type="text" name="nome"
                               placeholder="Informe seu nome completo">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td>
                        <input type="text" name="email"
                               placeholder="Informe seu e-mail.">
                    </td>
                    <td></td>
                </tr>
                <tr>
                <tr>
                    <td>Telefone</td>
                    <td>
                        <input type="text" name="telefone"
                               placeholder="Informe seu telefone">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Atuação</td>
                    <td>
                        <input type="text" name="atuacao"
                               placeholder="Informe sua Área de atuação">
                    </td>
                    <td></td>
                </tr>
                    <td>Selecione um tipo <br>
                        de acesso</td>
                    <td>
                        <input type="radio" name="acesso" value="Administrador">Administrador<br>
                        <input type="radio" name="acesso" value="Estudante">Estudante<br>
                        <input type="radio" name="acesso" value="Produtor">Produtor<br>
                        <input type="radio" name="acesso" value="Professor">Professor<br>
                        <input type="radio" name="acesso" value="técnico">Técnico<br>
                        <input type="radio" name="acesso" value="Visitante">Visitante<br>
                    </td>
                    <td></td>
                </tr>

                <tr>
                    <td>Estado</td>
                    <td>
                        <select name="estado">
                            <option value="">Selecione um estado</option>
                            <option value="RS">RS</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                                <tr>
                    <td>Cidade</td>
                    <td>
                        <select name="cidade">
                            <option value="">Selecione uma cidade</option>
                            <option value="São Sepé">São Sepé</option>
                            <option value="Santa Maria">Santa Maria</option>
                            <option value="Caçapava Do Sul">Caçapava Do Sul</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Solicirar Acesso">
                    </td>
                    <td></td>
                </tr>
            </table>
        <?php
        
        ?>
    </body>
</html>
