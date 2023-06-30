<?php
require_once './shared/header.php';
?>
<div class="row">
    <div class="col-md-4"> </div>
    <div class="col-md-4" >
        <form action="controller/loginController.php"  method="get" >
            <div class="row"  style="margin: 30px 30px 30px 30px" padding="20px">
                
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" 
                       placeholder="Insira seu email" name="email">
            </div>
            <div class="mb-3 mt-3">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" class="form-control" id="senha" 
                       placeholder="Insira sua senha" name="senha">
            </div> 
        <div class="d-grid">
            <input type="submit" value="Logar" class="btn btn-outline-success" style="margin: 15px 20px 20px 20px; padding: 10px 10px 10px 10px"> 
        </div>
                <div class="d-grid">
                    <?php
                    @$cod = $_REQUEST['cod'];
                    if(isset($cod)){
                        if($cod == '171'){
                            echo('<div class="alert alert-danger">');
                            echo('Verifique usuário ou senha');
                            echo('</div>');
                        }
                    }
                    ?>
                </div>
        </div>
    </form>
    </div>
    </div>

    <div class="col-md-4"> </div>

<?php
require_once './shared/footer.php';
?>
