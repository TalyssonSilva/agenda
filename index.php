<?php 
error_reporting(0);
 ini_set('display_errors', 0 );

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Agenda | Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/SimpleClass.css">
	<link href="frameworks/bootstrap/bootstrap5.css" rel="stylesheet">
    <script src="frameworks/ajax/jquery2-0-2.min.js"></script>
	<script src="frameworks/bootstrap/bootstrap5.js"></script>
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
   

		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method='POST' action='./php/autent_user.php'>
					<span class="login100-form-title p-b-26">
						Acessar conta
					</span>
					
					
					<?php 
					if($_GET['r'] == 'UserPassSucess' ){	
						echo  "<div class='result' style='background-color:rgb(114, 233, 98);'> Acesso liberado";
						echo "</div>";
               			header( "refresh:2;url=./php" );
						
					}
					else if($_GET['r'] == 'UserPassFail' ){
						echo  "<div class='result resultFail' style='background-color:#ff6c6c82;'> Acesso negado</div>";
					}
						?>
						
					
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c" >
						<input class="input100" type="text" name="log_user" id="log_user" autofocus required>
						<span class="focus-input100" data-placeholder="Usuario"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
                        <img id="olho" src="img/showpass.png"
/>
						</span>
						<input class="input100" type="password" name="log_pass" id="log_pass" required>
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<?php
							if($_GET['r'] == 'UserPassSucess' ){	
								echo  "<button class='login100-form-btn' disabled>";
					   				echo "<img src='img/load.gif' title='loading' alt='este arquivo não foi encontrado' width='40' height='30'>"	;			
							}
							else{
								echo  "<button class='login100-form-btn' >";
								echo "Entrar";
							}
							?>
							
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Não posssui conta?
						</span>

						<a class="txt2" href="#cadastro" data-bs-toggle='modal' class="small text-muted">
							Crie uma
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
    <script >
      var senha = $('#log_pass');
var olho= $("#olho");

olho.mousedown(function() {
  senha.attr("type", "text");
});

olho.mouseup(function() {
  senha.attr("type", "password");
});
// para evitar o problema de arrastar a imagem e a senha continuar exposta, 
//citada pelo nosso amigo nos comentários
$( "#olho" ).mouseout(function() { 
  $("#senha").attr("type", "password");
});
    </script>   



<div class="modal fade" id="cadastro" aria-hidden="true" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content " align='center'>
      <div class="modal-header ">
        <h5 class="modal-title" id="cadastro">CADASTRO DE USUARIO</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action='./cadastro.php?sessao=$Numsessao' method='POST' enctype='multipart/form-data'>
        
        <table align='center' >
        <tr><td  colspan='3' ><h5> </h5></td></tr>
        <tr> <td  colspan='3'>
            
        
            <div class='form-floating mb-3'>
            <input type='text' class='form-control' id='cad_user' name='cad_user' maxlength='15' pattern='[A-Za-z]{5,15}' autofocus  required>
          <label for='floatingInput'>usuario</label>
        </div>
        <div class='form-floating mb-3'>
            <input type='password' class='form-control' id='cad_password' name='cad_password' maxlength='15' pattern='[A-Za-z 0-9]{5,15}' autofocus  required>
          <label for='floatingInput'>senha</label>
        </div>
            <div class='form-floating mb-3'>
          <input type='text' class='form-control' id='cad_nome' name='cad_nome' maxlength='60' pattern='[A-Za-z ]{10,60}' autofocus required>
          <label for='floatingInput'>Nome completo</label>
        </div>
        <div class='form-floating'>
          <input type='text' class='form-control' id='cad_numero' name='cad_numero' pattern='[0-9]{12,12}' autofocus required>
          <label for='floatingPassword'>DDD + TEL</label>
        </div>
      
        </td>
        </tr>
        <tr  colspan='3'>
          <td align='left'><br></td>
          <td align='center'><br></td>
          <td align='right'><br><input type='submit' class='btn btn-primary' value='CADASTRAR ' ></td></tr>
        
        </table></form>
        

      
      </div>
      <div class="modal-footer">
        
      

      </div>
    </div>
  </div>
</div>
</body>
</html>