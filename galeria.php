<html>
<head>
<title>Galeria</title>    
<link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
</head>
<body>
    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
  
<nav class="blue darken-4 z-depth-0">
    <div class="nav-wrapper container ">
      <a href="#" class="brand-logo right"><i class="">Instituto 30 de Setembro</i></a>
        <a href="#" data-activates="menu-mobile" class="button-collapse left"><i class="fa fa-navicon"></i></a>
        
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="index.php"><i class="fa fa-home"> Home</i></a></li>
            <li><a href="#"><i class="fa fa-picture-o"> Galeria</i></a></li>
            <li><a href="fala_conosco.php" ><i class="fa fa-phone"> Fale conosco</i></a></li>
            <li><a href="noticias.php" ><i class="fa fa-newspaper-o"> Noticias</i></a></li>
            <li><a href="aluno/index.php"><i class="fa fa-sign-in"> Portal de aluno</i></a></li>
        </ul>
        
        <ul id="menu-mobile" class="side-nav ">
            <li><a href="index.php"><i class="fa fa-home right"></i>Home</a></li>
            <li><a href="#"><i class="fa fa-picture-o right"></i>Galeria</a></li>
            <li><a href="fala_conosco.php"><i class="fa fa-phone right"></i>Fale conosco</a></li>
            <li><a href="noticias.php"><i class="fa fa-newspaper-o right"></i>Noticias</a></li>
            <li><a href="aluno/index.php"><i class="fa fa-sign-in right"></i>Portal de aluno</a></li>
        </ul>
        
    </div>
</nav>    

    
    <div class="slider">
     <ul class="slides">
        <li>
         <img src="img/2.JPG">
            <div class="caption left-align">
            <h3 class="white-text">Instituto Médio 30 de Setembro</h3>
                <h5 class="light white-text text-lighten-3">Para quem quer, nada é impossivel</h5>
            </div>
        </li>
         
         <li>
         <img src="img/5.JPG">
            <div class="caption center-align">
            <h3>Informática & Eletricidade</h3>
                <h5 class="light white-text text-lighten-3">Os cursos existentes</h5>
            </div>
        </li>
         
         <li>
         <img src="img/best.jpg">
            <div class="caption right-align">
            <h3 class="white-text">Formando quadros profissionais</h3>
                <h5 class="light white-text text-lighten-3">Catana e enchada mão na obra</h5>
            </div>
        </li>
     </ul>
    </div>
    
    
    <div class="row">   
        
        <div class="col l12 s12">
            <?php
//lista as imagens e as retorna no Array
 $arquivo = glob('IMG/*.*'); 
 print_r($arquivo[2]);
 // quantidade de fotos que serão exibidas
 $qtd = 8;
//verifica a necessidade de paginação
 $atual = (isset($_GET['pg'])) ? intval($_GET['pg']) : 1;
//divide o Array
 $pagArquivo = array_chunk($arquivo, $qtd);
//conta o total de páginas
 $contar = count($pagArquivo);
//como serão exibidos os elementos
 $resultado = $pagArquivo[$atual-1];
?>
<br/>
<?php
    $tda=1;
 //chama as imagens na tela
foreach($resultado as $valor){
    if($tda%2==0)
    {
        printf(' <img src="%s" width="300" class="materialboxed left" style="padding:10px;"/> ', $valor);
    }
    else
    {
        printf(' <img src="%s" width="300" class="materialboxed right " style="padding:10px;"/> ', $valor);
    } 
 }
//link da páginação
printf('<ul class="pagination">');
 for($i = 1; $i <= $contar; $i++)
 {
     if($i == $atual)
     {
         printf('<li class="active blue darken-3"><a href="#"> %s </a></li>', $i);
     }
     else
     {
         printf('<li class="waves-effect"><a href="?pg=%s"> %s </a></li>', $i, $i);
     }
 }
    printf("</ul>")
 ?>
        </div>
        
    </div>  
    
    
    
    
    <div class="fixed-action-btn click-to-toggle" style="bottom:45px,right:45px;">
    <a class="btn-floating blue bnt-large"><i class="fa fa-edit" aria-hidden="true"></i></a>
        <ul>
        <li><a href="www.facebook.com/30setembro"class="btn-floating blue"><i class="fa fa-facebook-square"></i></a></li>
        <li><a href="#" class="btn-floating blue"><i class="fa fa-whatsapp"></i></a></li>
        <li><a href="#" class="btn-floating blue"><i class="fa fa-twitter-square"></i></a></li>
        </ul>
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
                 <img src="img/FB_IMG_15472421999116975.jpg" class="responsive-img circle">                 
             </div>             
         </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Luanda aos 11 de Janeiro de 2019 &copy;
                <a class="white-text text-lightn-4 right" href="#">Mais link</a>
            </div>
        </div>
    </footer>
    
    
    <script>
    $(document).ready(function(){
       $('.slider').slider(); 
    });
    </script>

    <script>
    $(".button-collapse").sideNav();
    </script>
    <script>
    $(document).ready(function(){
        $('.collapsible').collapsible();
    });
    </script>
      
    
       <script>
    $(document).ready(function(){
        $('.carousel').carousel({
            shift:150
        });
    });
    </script>
    <script>
        $(document).ready(function(){
            $('.materialboxed').materialbox();
        });
    </script>
</body>
</html>