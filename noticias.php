<?php

$servidor="localhost";
$usuario="root";
$senha="";
$banco="projectoFinal";

$conecta = mysqli_connect($servidor,$usuario,$senha,$banco);

$sql = "SELECT * FROM noticias ORDER BY idnoticias DESC ";

$resultado = mysqli_query($conecta, $sql);

if(!$resultado){
    die("Falha na consulta ao banco");
}


?>

<html>
<head>
<title>Noticias</title>    
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
            <li><a href="galeria.php"><i class="fa fa-picture-o"> Galeria</i></a></li>
            <li><a href="fala_conosco.php" ><i class="fa fa-phone"> Fale conosco</i></a></li>
            <li><a href="#" ><i class="fa fa-newspaper-o"> Noticias</i></a></li>
            <li><a href="aluno/index.php"><i class="fa fa-sign-in"> Portal de aluno</i></a></li>
        </ul>
        
        <ul id="menu-mobile" class="side-nav ">
            <li><a href="index.php"><i class="fa fa-home right"></i>Home</a></li>
            <li><a href="galeria.php"><i class="fa fa-picture-o right"></i>Galeria</a></li>
            <li><a href="fala_conosco.php"><i class="fa fa-phone right"></i>Fale conosco</a></li>
            <li><a href="#"><i class="fa fa-newspaper-o right"></i>Noticias</a></li>
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
                <h5 class="light white-text text-lighten-3">Os cursos leccionados</h5>
            </div>
        </li>
         
         <li>
         <img src="img/10.jpg">
            <div class="caption right-align">
            <h3 class="white-text">Formando quadros profissionais</h3>
                <h5 class="light white-text text-lighten-3">Catana e enchada mão na obra</h5>
            </div>
        </li>
     </ul>
    </div>
    
    
    <div class="row">
         
        <div class="col s8 l8">     
            <div class="row">
            <?php while ($linha = mysqli_fetch_array($resultado)) { ?>     
                <div class="col s12 l6"> 
                  
                    <div class="card blue">
                        <div class="card-image">
                    <img id="foto" name="foto" src="admin/img_noticia/<?php echo $linha["foto"]?>" height="400px">        
                        </div>
                        <div class="card-content white-text">
                           <span class="card-title" id="titulo_noticia"><?php echo $linha["titulo"] ?></span>
                            <p id="noticia">
                                    <?php echo $linha["sms"] ?>
                            </p>
                        </div>
                        <div class="card-action">
                            <a href="#">Saiba mais</a>
                        </div>
                    </div>
                     
                </div>    
                <?php } ?>
            </div>
        </div>
       
    <div class="col s4 l4">
        <div class="input-field">
                 <i class="fa fa-search prefix"></i><input type="search" id="pesquisa" >
                    <label for="pesquisa">Digite o titulo da noticia</label>
        </div>
        
        <h5 class="blaco-text">Menu</h5>
                 
                 <ul class="collapsible  popout z-depth-2" data-collapsible="accordion">
                     <li class="blue darken-4" ><div class="collapsible-header "><i class="fa fa-graduation-cap"></i>Cursos</div>
                         <div class="collapsible-body white black-text"><span><i class="fa fa-desktop"> Informática</i><br><br><i class="fa fa-bolt">  Electricidade</i></span></div>
                     </li>
                     
                     <li class="blue darken-4"><div class="collapsible-header "><i class="fa fa-sun-o orange-text darken-4"></i>Turnos</div>
                        <div class="collapsible-body white black-text"><span>Manhã.<br><br> Tarde.</span></div>
                     </li>
                     
                     <li class="blue darken-4"><div class="collapsible-header "><i class="fa fa-wifi brown-text darken4"></i>Classes</div>
                        <div class="collapsible-body white black-text"><span> 10º, 11º, 12º, 13º Classe.<br> </span></div>
                     </li>
                     <li><div class="collapsible-header "><i class="fa fa-grav green-text darken-4"></i>Estagios</div>
                        <div class="collapsible-body white black-text"><span>Actualemte disponiblizamos estagios em 5 empresas<br> Wapth, RamosSoft e etc.</span></div>
                     </li>
                     <li><div class="collapsible-header "><i class="fa fa-database indigo-text darken-4"></i>Salas</div>
                        <div class="collapsible-body white black-text"><span>Actualemte dispomos 9 salas, sendo 5 de Informática e 4 de Electricidade.</span></div>
                     </li>
                     <li><div class="collapsible-header "><i class="fa fa-gitlab red-text darken-4"></i>Laboratorios</div>
                        <div class="collapsible-body white black-text"><span>Temos 2 laboratorios, 1 de Informática e outro de Electricidade.</span></div>
                     </li>
                     <li><div class="collapsible-header "><i class="fa fa-globe blue-text darken-4"></i>Localização</div>
                        <div class="collapsible-body white black-text"><span>Benfica, Tendas Unidade Escola.</span></div>
                     </li>
                     <li><div class="collapsible-header"><i class="fa fa-star yellow-text"></i>Classificação</div>
                        <div class="collapsible-body white black-text"><span>
                            
                        </span></div>
                     </li>
                 </ul>
        
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
                <a class="white-text text-lightn-4 right" href="#">&copy;</a>
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
           $('select').material_select(); 
        });
    </script>
    
</body>
</html>