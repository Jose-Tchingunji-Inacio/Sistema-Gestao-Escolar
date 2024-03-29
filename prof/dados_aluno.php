<html>
<head>
    <meta charset="iso-8859-1" lang="pt">
</head>
    <body>
        
    <?php 
        
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $banco="projectoFinal";
        
    session_start();
    $idaluno = $_SESSION["idaluno"];
    $nome="";$classe="";$curso="";
    $idturma="";    
        if(isset($_SESSION["idaluno"])){
            
        $conecta = mysqli_connect($servidor,$usuario,$senha,$banco);
        $sql = "SELECT * from aluno_completo where idaluno='$idaluno' ";
        $resultado = mysqli_query($conecta, $sql);

        while($linha = mysqli_fetch_array($resultado)){
            
            $nome = $linha["nome_aluno"];
            $classe = $linha["nome_classe"];
            $curso = $linha["nome_curso"];
            $idturma = $linha["idturma"];
        }
     } 
?>
    </body>
</html>
