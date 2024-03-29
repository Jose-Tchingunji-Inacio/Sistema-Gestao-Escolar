<html>
    <head>        
        <title>Home dos alunos</title>
        <meta charset="utf-8"  lang="pt">
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
     <?php include("dados_aluno.php");?>
    
    <div class="row">
<div class="col l2" style="padding:0px;margin:0px;">   
        <a class="dropdown-button btn blue darken-4" data-beloworigin="true" href="#" data-activates="dropdown1"><i class="fa fa-navicon"></i> Menu o aluno</a>
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="#"class="blue-text darken-4"><i class="fa fa-Home right"></i>Home</a></li>
        <li class="divider"></li>
    <li><a href="notas.php"class="blue-text darken-4"><i class="fa fa-support right"></i>Notas</a></li>
        <li class="divider"></li>
    <li><a href="faltas.php" class="blue-text darken-4"><i class="fa fa-times-circle right"></i>Faltas</a></li>
        <li class="divider"></li>
    <li><a href="Alterar.php"class="blue-text darken-4"><i class="fa fa-edit right"></i>Alterar dado</a></li>
    <li class="divider"></li>
    <li><a href="#"class="blue-text darken-4"><i class="fa fa-history right"></i>Historicos</a></li>
        <li class="divider"></li>
        <li><a href="../index.php"class="blue-text darken-4"><i class="fa fa-sign-out right"></i>Sair</a></li>
    </ul>
</div>
        
        <div class="col l7">
            
            <div class="row">
                <div class="col l12"><p class="blue-text darken-4" >Instituto Médio Técnico 30 de Setembro</p></div>
                <div class="col l12">
                    <img src="img/male-circle-64.png" class="responsive-img"> 
                    <?php echo $nome; ?><p>
                    Curso: <?php echo $curso; ?>
                    </p>
                    Classe: <?php echo $classe; ?>                                        
                </div>
                <div class="col l12">
                    <?php include("horario_aluno.php"); ?>
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