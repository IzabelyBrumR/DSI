<?php
// Se vier qualquer coisa via get
    if($_GET){
        //entra aqui
        $email = $_GET['email'];
        $senha = $_GET['senha'];
        
    if($email == 'a@a' && $senha=='asasas'){
        //echo('Usuario logado com sucesso');
        header('location:../home.php');
    } else{
        header("location:../index.php?cod=171");
    }    
    }else{
        header("location:../index.php");
    }
?>
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

