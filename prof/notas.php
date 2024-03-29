<html>
    <head>
        <title>Notas</title>
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
     <?php include("dados_aluno.php");?>
    
    <div class="row">
<div class="col l2" style="padding:0px;margin:0px;">   
        <a class="dropdown-button btn blue darken-4" data-beloworigin="true" href="#" data-activates="dropdown1"><i class="fa fa-navicon"></i> Menu do aluno</a>
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="indexAluno.php"class="blue-text darken-4"><i class="fa fa-Home right"></i>Home</a></li>
        <li class="divider"></li>
    <li><a href="#"class="blue-text darken-4"><i class="fa fa-support right"></i>Notas</a></li>
        <li class="divider"></li>
    <li><a href="faltas.php" class="blue-text darken-4"><i class="fa fa-times-circle right"></i>Faltas</a></li>
        <li class="divider"></li>
    <li><a href="Alterar.php"class="blue-text darken-4"><i class="fa fa-edit right"></i>Alterar dados</a></li>
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

    
<form class="col s12">                     
    <div class="input-field col s12 l6">  
        <select>
        <option value="" disabled selected>Selecione o Trimestre</option>
        <option value="1">|º Trimestre</option> 
        <option value="2">||º Trimestre</option> 
        <option value="3">|||º Trimestre</option>    
        </select>
         </div>
         
        <div class="input-field col s12 l6">  
        <select>
        <option value="" disabled selected>Selecione a Classe</option>     
        <option value="1">10ªClasse</option> 
        <option value="2">11ªClasse</option> 
        <option value="3">12ªClasse</option> 
        <option value="4">13ªClasse</option>     
        </select>
         </div>
    
 <div class="row">
    <div class="col s5"></div>
     <div class="col s5"> 
     <input type="submit" value="Ver" class="btn blue darken-4">    
        </div>
         <div class="col s2"></div>
    </div>
     </form> 

                
                <div class="col l12">
                    <table class="highlight responsive-table">
                     <thead>
                      <tr>
                       <th data-field="id" >Disciplinas</th> 
                       <th data-field="id" >Avaliação</th> 
                       <th data-field="id" >Prova1</th> 
                       <th data-field="id" >Prova2</th> 
                       <th data-field="id" >Média</th>
                      </tr>    
                     </thead>
                        <tbody>
                        <tr>
                            <td>Lp</td>
                            <td>12</td>
                            <td>13</td>
                            <td>15</td>
                            <td>13</td>
                        </tr>
                            <tr>
                                <td>Matemática</td>
                                <td>14</td>
                                <td>12</td>
                                <td>10</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>FAI</td>
                                <td>11</td>
                                <td>16</td>
                                <td>15</td>
                                <td>14</td>
                            </tr>
                            <tr>
                                <td>Fisica</td>
                                <td>17</td>
                                <td>12</td>
                                <td>10</td>
                                <td>13</td>
                            </tr>
                            <tr>
                                <td>T.L.P</td>
                                <td>15</td>
                                <td>10</td>
                                <td>10</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>SEAC</td>
                                <td>10</td>
                                <td>11</td>
                                <td>13</td>
                                <td>11</td>
                            </tr>
                            <tr>
                                <td>Empreendedorismo</td>
                                <td>11</td>
                                <td>10</td>
                                <td>10</td>
                                <td>10</td>
                            </tr>    
                              <tr>
                                <td>Ingles</td>
                                <td>13</td>
                                <td>10</td>
                                <td>10</td>
                                <td>11</td>
                            </tr>
                             <tr>
                                <td>Electotecnia</td>
                                <td>16</td>
                                <td>10</td>
                                <td>12</td>
                                <td>13</td>
                            </tr>
                             <tr>
                                <td>TREI</td>
                                <td>15</td>
                                <td>17</td>
                                <td>14</td>
                                <td>15</td>
                            </tr>
                              <tr>
                                <td>Ed.Fisica</td>
                                <td>20</td>
                                <td>15</td>
                                <td>14</td>
                                <td>16</td>
                            </tr>
                        </tbody>
                    </table>
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