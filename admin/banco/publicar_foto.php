<?php
$servidor="localhost";
    $usuario="root";
    $senha="";
    $banco="projectoFinal";
     $conecta = mysqli_connect($servidor,$usuario,$senha,$banco);
    
   $msg = false;

    if(isset($_FILES['foto'])){


        $extensao = strtolower(substr($_FILES['foto']['name'], -4)); //pega a extensão da imagem
        $novo_nome = md5(time()) . $extensao;
        $diretorio = "../img/";//onde irá o arquivo
        
   move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$novo_nome);//efectua o upload
        
        $sql_code = mysqli_query($conecta,"insert into fotografias (foto) values ('$novo_nome')");
                
        if($sql_code)
         $msg = "Imagem Postada com sucesso";
        else
         $msg = "Falha ao Guardar a imagem";  
    }

?>
