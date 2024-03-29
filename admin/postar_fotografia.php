<?php include("banco/publicar_foto.php"); ?>
<html>
<head>
    <title>Administrador</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/materialize.css">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
</head>
    <body>
    <script src="../js/jquery.js"></script>
    <script src="../js/materialize.js"></script>
  <nav class="blue darken-4 z-depth-0">
    <div class="nav-wrapper container ">
      <a href="#" class="brand-logo right"><i class="">Instituto 30 Setembro</i></a>
        <a href="#" data-activates="menu-mobile" class="button-collapse left"><i class="fa fa-navicon"></i></a>
        
                <ul id="nav-mobile" class="left hide-on-med-and-down">
           <li><a href="indexAdmin.php"><i class="fa fa-cloud-upload right"></i>Postar Noticia</a></li>
            <li><a href="#"><i class="fa fa-cloud-upload right"></i>Postar Fotografia</a></li>
            <li><a href="galeria.html"><i class="fa fa-edit"> Alterar</i></a></li>
            <li><a href="fala_conosco.html" ><i class="fa fa-eject"> Eliminar</i></a></li>
            <li><a href="../index.php"><i class="fa fa-sign-out"> Sair</i></a></li>
        </ul>
        
        <ul id="menu-mobile" class="side-nav ">
            <li><a href="indexAdmin.php"><i class="fa fa-cloud-upload right"></i>Postar Noticia</a></li>
            <li><a href="#"><i class="fa fa-cloud-upload right"></i>Postar Fotografia</a></li>
            <li><a href="galeria.html" ><i class="fa fa-edit right"></i>Alterar</a></li>
            <li><a href="fala_conosco.html" ><i class="fa fa-eject right"></i>Eliminar</a></li>
            <li><a href="../index.php" ><i class="fa fa-sign-out right"></i>Sair</a></li>
        </ul>
        
    </div>
</nav> 
       <div class="row">
           
           
        <div class="col l7 s12">
            <!--Fazer upload de fotos-->
    
            <div class="col l12 s12">       
                <p class="left">Upload de Fotografias</p>
                <form method="post" action="postar_fotografia.php" enctype="multipart/form-data">
                <div class="file-field input-field col s12">
                    <div class="btn">
                      <span>Buscar Imagem</span>
                      <input type="file" name="foto">
                    </div>
                     
                     <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                     </div>
                 </div>
                    <div class="row">
                        <div class="col s5">
                            <input type="submit" value="Publicar" class="btn blue darken-4" id="postaNoti">
                        </div>
                         <div class="col s5">         
                             <input type="reset" value="limpar" class="btn blue darken-4">
                         </div>
                         <div class="col s2"></div>
                     </div>
                </form>                
            </div>
           
        </div>
        
           
    <?php 
		if(isset($msg)){
		?>
		<p><?php echo $msg ?></p>
		<?php 
		}
?>
           
        <div class="col l5 12">
           <!-- Menu lateral -->
        </div>
           
           
        </div>
        
        
            <footer class="page-footer blue darken-4">
        <div class="container">
         <div class="row">
            
             <div class="col l4 s12">
             <h5 class="white-text">Quem somos?</h5>
                <p class="grey-text text-lighten-4">Somos um Instituto Médio localizado
                 no Benfica Tendas lecionamos cursos tecnicos Informática e Elctricidade
                  em dois turnos Manhã e Tarde.</p>
                 <p>
                    Estamos em funcionamento desde 2012, ja 
                     lançamos muitos quadros no mercado de trabalho.
                 </p>
                 
                 <p>
                    Formar e Educar com qualidade.
                 </p>
            </div>
             <div class="col l4 s12">
             <h5 class="white-text">Informações</h5>
                <p class="grey-text text-lighten-4">Qualquer duvida pode se dirigir-se a secretária,
                 de Segunda-Sexta feira esta aberta das 10h a 14h ou ligar no numero 911222333.</p>
                 <p>
                    Temos algumas actividades extras curriculares, como escrusões em barragens e em empresas de tecnologias.
                 </p>
                 <p>Formar e Educar com qualida.</p>
            </div>
             <div class="col l4 s12 blue darken-4">               
                 <img src="../img/FB_IMG_15472421999116975.jpg" class="responsive-img circle">                 
             </div>
         </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Luanda aos 11 de Janeiro de 2019 &copy;
                <a class="white-text text-lightn-4 right" href="../index.php"><i class="fa fa-sign-out"> Sair</i></a>
            </div>
        </div>
    </footer>
        <script>
    $(".button-collapse").sideNav();
    </script>
    </body>
</html>





