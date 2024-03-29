<?php
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $banco="projectoFinal";
     $conecta = mysqli_connect($servidor,$usuario,$senha,$banco);
    
   $msg = false;

    if(isset($_FILES['foto']) && ($_POST['titulo_noticia']) && ($_POST['noticia'])){
	
		        
	$titulo = $_POST['titulo_noticia'];
	$noticia = $_POST['noticia'];

        $extensao = strtolower(substr($_FILES['foto']['name'], -4)); //pega a extensão da imagem
        $novo_nome = md5(time()) . $extensao;
        $diretorio = "../admin/img_noticia/";//onde irá o arquivo
    
    move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$novo_nome);//efectua o upload
        
        $sql_code = mysqli_query($conecta,"insert into noticias (titulo,foto,sms) values ('$titulo','$novo_nome','$noticia')");
                
        if($sql_code)
           echo $msg = "Notícia postada com sucesso";
        else
          echo $msg = "Falha ao postar a noticia";
        
    }

?>
