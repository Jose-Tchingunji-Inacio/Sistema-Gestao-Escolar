<?php
if(isset($_POST["email"]) && isset($_POST["senha"]))
{
    session_start();
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $banco="projectoFinal";
     $conecta = mysqli_connect($servidor,$usuario,$senha,$banco);
    
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
     $consulta = mysqli_query($conecta,"select * from usuario where nome_user='$email' and senha='$senha'");
      if(mysqli_num_rows($consulta)<=0)
      {
          session_destroy();
          echo "Os dados introduzidos estão errados<br>Seras redirecionado dentro de segundos";
        header('refresh:1,../');
      }
    else
    {
        header('refresh: 1;indexAdmin.php');
    }
}
else
{
    echo "Faça o login please<br>Seras redirecionado dentro de segundos";
    header('refresh: 1;../');
}

?>