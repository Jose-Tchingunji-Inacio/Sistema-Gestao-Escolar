<?php include("dados_aluno.php");?>

<?php
  $host = 'localhost';
  $user = 'root';
  $password = '';
  $database = 'projectofinal';

  $conn = mysqli_connect($host, $user, $password, $database);

  if (!$conn) {
    die('Falha na conexão com o banco de dados: ' . mysqli_connect_error());
  }

  $query = "select nome_disciplina, qtd_falta,ano from falta,aluno,disciplina,ano_lectivo where falta.ano_lectivo_idano_lectivo = ano_lectivo.idano_lectivo and falta.aluno_idaluno = aluno.idaluno and falta.disciplina_iddisciplina = disciplina.iddisciplina and nome_aluno = '$nome'";
  $result = mysqli_query($conn, $query);
?>
<html>
    <head>
        <title>Faltas</title>
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
        <a class="dropdown-button btn blue darken-4" data-beloworigin="true" href="#" data-activates="dropdown1"><i class="fa fa-navicon"></i> Menu do aluno</a>
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="indexAluno.php"class="blue-text darken-4"><i class="fa fa-Home right"></i>Home</a></li>
        <li class="divider"></li>
    <li><a href="notas.php"class="blue-text darken-4"><i class="fa fa-support right"></i>Notas</a></li>
        <li class="divider"></li>
    <li><a href="#" class="blue-text darken-4"><i class="fa fa-times-circle right"></i>Faltas</a></li>
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
      
                    <div class="container">
    <form>
      <div class="row">
        <div class="input-field col s6">
          <select name="year">
            <option value="" disabled selected>Selecione o ano</option>
            <?php
              $years = array();
              while ($row = mysqli_fetch_assoc($result)) {
                $year = $row['ano'];
                if (!in_array($year, $years)) {
                  array_push($years, $year);
                  echo '<option value="' . $year . '">' . $year . '</option>';
                }
              }
            ?>
          </select>
        </div>
        <div class="input-field col s6">
          <select name="subject">
            <option value="" disabled selected>Selecione a disciplina</option>
            <?php
              $subjects = array();
              mysqli_data_seek($result, 0);
              while ($row = mysqli_fetch_assoc($result)) {
                $subject = $row['nome_disciplina'];
                if (!in_array($subject, $subjects)) {
                  array_push($subjects, $subject);
                  echo '<option value="' . $subject . '">' . $subject . '</option>';
                }
              }
            ?>
          </select>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Mostrar faltas</button>
    </form>
    <table class="highlight">
      <thead>
        <tr>
          <th>Ano</th>
              <th>Disciplina</th>
          <th>Faltas</th>
        </tr>
      </thead>
      <tbody>
        <?php
          
                    if (isset($_GET['year']) && isset($_GET['subject'])) {
            $year = $_GET['year'];
            $subject = $_GET['subject'];
            $query = "SELECT ano,nome_disciplina,qtd_falta FROM aluno,falta,ano_lectivo,disciplina WHERE falta.ano_lectivo_idano_lectivo = ano_lectivo.idano_lectivo and falta.aluno_idaluno = aluno.idaluno and falta.disciplina_iddisciplina = disciplina.iddisciplina and ano = $year AND nome_disciplina = '$subject' and nome_aluno = 'jose tchingunji dos santos inacio'";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<tr>';
              echo '<td>' . $row['ano'] . '</td>';
              echo '<td>' . $row['nome_disciplina'] . '</td>';
              echo '<td>' . $row['qtd_falta'] . '</td>';
              echo '</tr>';
            }
          }
        ?>
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
                    <label class="blue-text darken-4">Nomes dos professores</label>
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