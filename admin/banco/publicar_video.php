<?php

     $servidor="localhost";
    $usuario="root";
    $senha="";
    $banco="projectoFinal";
    $conecta = mysqli_connect($servidor,$usuario,$senha,$banco);

    
   $msg = false;

    if(isset($_FILES['videos'])){


        $extensao = strtolower(substr($_FILES['videos']['name'], -4)); //pega a extensão da imagem
        $novo_nome = md5(time()) . $extensao;
        $diretorio = "../img/";//onde irá o arquivo
        
   move_uploaded_file($_FILES['videos']['tmp_name'], $diretorio.$novo_nome);//efectua o upload
        
        $sql = ("insert into video (video) values ('$novo_nome')");
        
        $sql_code = mysqli_query($conecta,$sql);
                
        if($sql_code)
          echo $msg = "Video Postada com sucesso";
        else
        echo $msg = "Falha ao Guardar a video";  
    }

?>
