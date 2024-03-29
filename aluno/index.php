<html>
    <head>
        <title>
            Sistema de gerenciamento de alunos
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/materialize.css">
        <link rel="stylesheet" href="../css/animate.css">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.css">
    </head>
    <body>
        <script src="../js/jquery.js"></script>
    <script src="../js/materialize.js"></script>
        <div class="row">
        
            <div class=" col s12 l12">
            <p style="color:transparent;">
               Instituto Médio 30 Setembro </p>
            </div>
            
            <div class=" col s12 l12">
                <p style="color:transparent;">Benfica Tenda Unidade escola</p>
                <p style="color:transparent;">Sistema de gestão de alunos</p>
                
            </div>
            <div class=" col s12 l12">
                <p></p><p></p><p></p>
            </div>
            
            
            
            <div class="col s12 l12">
                
            <div class=" col l3" ></div>                
            <div class="col l7" id="corpo">
                <form class="col s12" action="#" method="post">
                    <div class="input-field col s12 l12">
                        <div class="input-field col s12 l12">
                    <i class="fa fa-envelope-o prefix black-text"></i>
                            <input class="validate black-text" data-length="90" type="email" id="email" name="email" >
                     <label for="email" class="black-text" data-error="Email incorrecto">Seu email</label>
                    </div>
                        <div class="input-field col s12 l12">
                    <i class="fa fa-key prefix black-text"></i><input name="senha" type="password" id="password" class="black-text">
                     <label for="password" class="black-text">Password</label>
                 </div> 
                        
                        <div class="input-field col s12 l12">
                            <input type="submit" value="Entrar" class="btn" id="toast"/>
                            <input type="reset"  value="Limpar" class="btn right"/>
                        </div>
                    </div>
                </form>
            </div>
            
                <div class="col l2" ></div>
            </div> 
            
        </div>
        
        
        <?php
  $servidor="localhost";
    $usuario="root";
    $senha="";
    $banco="projectoFinal";
    $conecta = mysqli_connect($servidor,$usuario,$senha,$banco);
        
        
    session_start();
        
        if(isset($_POST["email"]) && isset($_POST["senha"]))
{
    
    $email = $_POST["email"];
    $senha = $_POST["senha"];
     
            $sql = ("select * from aluno_user where aluno_nome_user='$email' and senha_aluno='$senha'");
      
            $consulta = mysqli_query($conecta,$sql);
            
      if(!$consulta){
			die("Falha na consulta ao banco");
		}
	$informacao = mysqli_fetch_assoc($consulta);
	if( empty($informacao) ){
	$mensagem = "Login sem sucesso";
	}else{
        $_SESSION["user_email"]= $informacao["aluno_nome_user"];
        $_SESSION["user_senha"]= $informacao["senha_aluno"];
		$_SESSION["user_portal"]= $informacao["idaluno_user"];
        $_SESSION["idaluno"]= $informacao["aluno_idaluno"];
		header("location:indexAluno.php");
	}
}
?>
        
    </body>
</html>




