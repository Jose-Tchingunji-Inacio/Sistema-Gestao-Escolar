
<?php
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $banco="projectoFinal";

    
    if(isset($_SESSION["idaluno"]))
    {
        $conecta = mysqli_connect($servidor,$usuario,$senha,$banco);
        $sql = "select nome,nome_disciplina from lecionador,funcionario,disciplina where lecionador.funcionario_idfuncionario=funcionario.idfuncionario and lecionador.disciplina_iddisciplina=disciplina.iddisciplina and turma_idturma='$idturma'";
        $resultado = mysqli_query($conecta, $sql);

        
        while($linha = mysqli_fetch_array($resultado))
        {
         
        echo "<div class='col l12'><label><a href='#' class='grey-text' style='text-transform: uppercase;'>".$linha["nome_disciplina"]."-".$linha["nome"]."</a></label></div>";
           
        }
     } 
?>