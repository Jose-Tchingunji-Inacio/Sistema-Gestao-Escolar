

<table class="highlight responsive-table">
                     <thead>
                      <tr>
                       <th data-field="id" >Horario</th> 
                       <th data-field="id" >Segunda</th> 
                       <th data-field="id" >terça</th> 
                       <th data-field="id" >Quarta</th> 
                       <th data-field="id" >Quinta</th> 
                       <th data-field="id" >Sexta</th> 
                      </tr>    
                     </thead>
                        <tbody>
                            
<?php 
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $banco="projectofinal";
                            
    $conecta = mysqli_connect($servidor,$usuario,$senha,$banco);
    
    $consulta = "select distinct(entrada) from horario where turma_idturma='$idturma'";
    $resultado = mysqli_query($conecta,$consulta);
    $entrada;
    $limite=0;
    while($linha = mysqli_fetch_array($resultado))
    {
        $entrada[]=$linha["entrada"];
        $limite++;
        
    }
    for($i=0;$i<$limite;$i++)
    {
        $entra = $entrada[$i];
        echo "<tr>";
        echo "<td>".$entra."</td>";
$consulta2 = "select disciplina from horario where entrada='$entra' and turma_idturma='$idturma'";
        $resultado2 = mysqli_query($conecta,$consulta2);
        
        while($linha2 = mysqli_fetch_array($resultado2))
        {
            
            echo "<td>".$linha2["disciplina"]."</td>";
        }
        echo "</tr>";
    }
?>
</tbody>
</table>    