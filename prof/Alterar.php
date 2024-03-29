<?php include("dados_aluno.php");?>
<?php
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $banco="projectoFinal";
    $conecta = mysqli_connect($servidor,$usuario,$senha,$banco);


if(isset($_SESSION["user_portal"])){

$sql = ("select aluno_nome_user, senha_aluno from aluno_user where idaluno_user = '$_SESSION[user_portal]'");

$consulta = mysqli_query($conecta,$sql);
}

   if(isset($_POST['email']) && ($_POST['senha'])){
       
       
 $email =$_POST['email'];
     $senha =$_POST['senha'];
       
    
$alterar = mysqli_query($conecta,"UPDATE aluno_user SET aluno_nome_user = '{$email}', senha_aluno = '{$senha}' where idaluno_user = {$_SESSION['user_portal']}");      
       
       if(!$alterar){
			die("Falha na alteração dos dados");
		}
       print "Alteração feita com sucesso";
       echo "style='center'";
   }
?>  

<html>
    <head>
        <title>Alterar Dados</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/materialize.css">
        <link rel="stylesheet" href="../css/animate.css">
     <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
        <style>
           #links a:hover
            {
                text-decoration: underline ;
            }
        </style>
        
    </head>
<body>
     <script src="../js/jquery.js"></script>
     <script src="../js/materialize.js"></script>
     
    
    <div class="row">
<div class="col l2" style="padding:0px;margin:0px;">   
        <a class="dropdown-button btn blue darken-4" data-beloworigin="true" href="#" data-activates="dropdown1"><i class="fa fa-navicon"></i> Menu o aluno</a>
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="indexAluno.php"class="blue-text darken-4"><i class="fa fa-Home right"></i>Home</a></li>
        <li class="divider"></li>
    <li><a href="notas.php"class="blue-text darken-4"><i class="fa fa-support right"></i>Notas</a></li>
        <li class="divider"></li>
    <li><a href="faltas.php" class="blue-text darken-4"><i class="fa fa-times-circle right"></i>Faltas</a></li>
        <li class="divider"></li>
    <li><a href="#"class="blue-text darken-4"><i class="fa fa-edit right"></i>Alterar dados</a></li>
        <li class="divider"></li>
        <li><a href="../index.php"class="blue-text darken-4"><i class="fa fa-sign-out right"></i>Sair</a></li>
    </ul>
</div>
        
          <div class="col l7">
            
            <div class="row">
                <div class="col l12"><p class="blue-text darken-4">Instituto Médio Técnico 30 de Setembro</p></div>
                <div class="col l12">
                    
             
                    
                    <img src="img/male-circle-64.png" class="responsive-img"> 
                      <?php echo $nome; ?><p>
                    Curso: <?php echo $curso; ?>
                    </p>
                    Classe: <?php echo $classe; ?>                                         
                </div>

 <?php while($linha = mysqli_fetch_array($consulta)){ ?>  
 <form class="col s12" action="Alterar.php" method="post">
                    <div class="input-field col s12 l12">
                        
                         <div class="input-field col s12 l12">
                    <i class="fa fa- prefix black-text"></i>
 <input class="validate black-text" data-length="90" type="text" id="idaluno_user" name="idaluno_user" value="<?php echo $_SESSION['user_portal'] ?>" disabled style="display:none">
                     <label for="idaluno_user" class="black-text" style="display:none">Seu ID</label>
                    </div>
                        
                        <div class="input-field col s12 l12">
                    <i class="fa fa-envelope-o prefix black-text"></i>
 <input class="validate black-text" data-length="90" type="email" id="email" name="email" value="<?php echo $linha["aluno_nome_user"] ?>">
                     <label for="email" class="black-text" data-error="Email incorrecto">Seu email</label>
                    </div>
                        <div class="input-field col s12 l12">
                <i class="fa fa-key prefix black-text"></i><input name="senha" type="password" id="password" class="black-text" value="<?php echo $linha["senha_aluno"] ?>" autofocus>
                     <label for="password" class="black-text">Password</label>
                 </div> 
                        
                        <div class="input-field col s12 l12">
                <input type="submit" value="Alterar" class="btn" id="toast"/>
                <input type="reset"  value="Limpar" class="btn right"/>
                        </div>
                    </div>
                </form>
               <?php } ?>
                <div class="col l12">
                   
                </div>
            </div>

        </div>
        
        <div class="col l3" id="links">
            <div class="row">
                <div class="col l12">
                    <img src="../img/FB_IMG_15472421999116975.jpg" class="responsive-img">
                    </div>    
                <div class="col l12">
                    <label class="blue-text darken-4">Listas dos nomes dos professores</label>
                </div>
                <div class="col l12"></div>    
                <?php include("buscar_profs.php"); ?>
            </div>
            
        </div>
    </div>
    
       
 <script>
    $(document).ready(function(){
        $('select').material_select();
    });
    </script>      
        
<script>
$('.dropdown-button').drodown({
inDuration: 300,
outDuration:225;
constrainWidth: false,
hover: true,
gutter:0,
belowOrigin: false,
alignment:  'left' ,
    stopPropagation: false
});  
</script>       
       
</body>
</html>