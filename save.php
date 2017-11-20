<!DOCTYPE HTML>
<html>

<head>

    <!-- meta data -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/custom.css" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />

    <!-- title and favicon -->

    <title>Quattor Academia</title>
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>


</head>
<?php

include ('conn.php');

if ( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['msg_submited']) ) {

	$m1 = isset($_POST['m1']) ? $_POST['m1'] : 'n';
	$m2 = isset($_POST['m2']) ? $_POST['m2'] : 'n'; 
	$m3 = isset($_POST['m3']) ? $_POST['m3'] : 'n';
	$m4 = isset($_POST['m4']) ? $_POST['m4'] : 'n';
	$m5 = isset($_POST['m5']) ? $_POST['m5'] : 'n'; 
	$m6 = isset($_POST['m6']) ? $_POST['m6'] : 'n';
    $m7 = isset($_POST['m7']) ? $_POST['m7'] : 'n';
	$m8 = isset($_POST['m8']) ? $_POST['m8'] : 'n'; 
	$m9 = isset($_POST['m9']) ? $_POST['m9'] : 'n';
    $outro = isset($_POST['outro']) ? $_POST['outro'] : 'n';
    $vezes = isset($_POST['vezes']) ? $_POST['vezes'] : 'n';
    $mod1 = isset($_POST['mod1']) ? $_POST['mod1'] : 'n';
    $mod2 = isset($_POST['mod2']) ? $_POST['mod2'] : 'n';
    $mod3 = isset($_POST['mod3']) ? $_POST['mod3'] : 'n';
    $mod4 = isset($_POST['mod4']) ? $_POST['mod4'] : 'n';
    $mod5 = isset($_POST['mod5']) ? $_POST['mod5'] : 'n';
    $mod6 = isset($_POST['mod6']) ? $_POST['mod6'] : 'n';
    $mod7 = isset($_POST['mod7']) ? $_POST['mod7'] : 'n';
    $mod8 = isset($_POST['mod8']) ? $_POST['mod8'] : 'n';
    $mod9 = isset($_POST['mod9']) ? $_POST['mod9'] : 'n';
    $mod10 = isset($_POST['mod10']) ? $_POST['mod10'] : 'n';
    $mod11 = isset($_POST['mod11']) ? $_POST['mod11'] : 'n';
    $mod12 = isset($_POST['mod12']) ? $_POST['mod12'] : 'n';
    $mod13 = isset($_POST['mod13']) ? $_POST['mod13'] : 'n';
    $mod14 = isset($_POST['mod14']) ? $_POST['mod14'] : 'n';
    $mod15 = isset($_POST['mod15']) ? $_POST['mod15'] : 'n';
    $outro_mod = isset($_POST['outro_mod']) ? $_POST['outro_mod'] : 'n';
    $musculacao = isset($_POST['musculacao']) ? $_POST['musculacao'] : 'n';
    $coletiva = isset($_POST['coletiva']) ? $_POST['coletiva'] : 'n';
    $ergometria = isset($_POST['ergometria']) ? $_POST['ergometria'] : 'n';
    $piscina = isset($_POST['piscina']) ? $_POST['piscina'] : 'n';
    $recepcao = isset($_POST['recepcao']) ? $_POST['recepcao'] : 'n';
    $limpeza = isset($_POST['limpeza']) ? $_POST['limpeza'] : 'n';
    $group1 = isset($_POST['group1']) ? $_POST['group1'] : 'n';
    $mensagem = isset($_POST['mensagem']) ? $_POST['mensagem'] : 'n';
    
    
    
	$validate = true;
//	$validate &= ! empty( $idade );
//	$validate &= ! empty( $email );
//	$validate &= ! empty( $tel );
//	$validate &= ! empty( $idade ) && strlen($idade) >=1;
//    $validate &= ! empty( $endereco );
//    $validate &= ! empty( $um );
//    $validate &= ! empty( $dois );
//    $validate &= ! empty( $tres );
//    $validate &= ! empty( $quatro );
//    $validate &= ! empty( $cinco );
//    $validate &= ! empty( $seis );
//    $validate &= ! empty( $sabe1 );
//    $validate &= ! empty( $sabe2 );
//    $validate &= ! empty( $sabe3 );
//    $validate &= ! empty( $sabe4 );
//    $validate &= ! empty( $sabe5 );
//    $validate &= ! empty( $sabe6 );
    
	if ( $validate ) {
		$stmt = $conn->prepare("INSERT INTO aula (m1,m2,m3,m4,m5,m6,m7,m8,m9,outro,vezes,mod1,mod2,mod3,mod4,mod5,mod6,mod7,mod8,mod9,mod10,mod11,mod12,mod13,mod14,mod15,outro_mod,musculacao,coletiva,ergometria,piscina,recepcao,limpeza,planos,sugestao) VALUES (:m1, :m2, :m3, :m4, :m5, :m6, :m7, :m8, :m9, :outro, :vezes, :mod1, :mod2, :mod3, :mod4, :mod5, :mod6, :mod7, :mod8, :mod9, :mod10, :mod11, :mod12, :mod13, :mod14, :mod15, :outro_mod, :musculacao, :coletiva, :ergometria, :piscina, :recepcao, :limpeza, :group1, :mensagem)");
        
		$stmt->BindValue(':m1', $m1);
		$stmt->BindValue(':m2', $m2);
		$stmt->BindValue(':m3', $m3);
		$stmt->BindValue(':m4', $m4);
        $stmt->BindValue(':m5', $m5);
        $stmt->BindValue(':m6', $m6);
        $stmt->BindValue(':m7', $m7);
        $stmt->BindValue(':m8', $m8);
        $stmt->BindValue(':m9', $m9);
        $stmt->BindValue(':outro', $outro);
        $stmt->BindValue(':vezes', $vezes);
        $stmt->BindValue(':mod1', $mod1);
        $stmt->BindValue(':mod2', $mod2);
        $stmt->BindValue(':mod3', $mod3);
        $stmt->BindValue(':mod4', $mod4);
        $stmt->BindValue(':mod5', $mod5);
        $stmt->BindValue(':mod6', $mod6);
        $stmt->BindValue(':mod7', $mod7);
        $stmt->BindValue(':mod8', $mod8);
        $stmt->BindValue(':mod9', $mod9);
        $stmt->BindValue(':mod10', $mod10);
        $stmt->BindValue(':mod11', $mod11);
        $stmt->BindValue(':mod12', $mod12);
        $stmt->BindValue(':mod13', $mod13);
        $stmt->BindValue(':mod14', $mod14);
        $stmt->BindValue(':mod15', $mod15);
        $stmt->BindValue(':outro_mod', $outro_mod);
        $stmt->BindValue(':musculacao', $musculacao);
        $stmt->BindValue(':coletiva', $coletiva);
        $stmt->BindValue(':ergometria', $ergometria);
        $stmt->BindValue(':piscina', $piscina);
        $stmt->BindValue(':recepcao', $recepcao);
        $stmt->BindValue(':limpeza', $limpeza);
        $stmt->BindValue(':group1', $group1);
        $stmt->BindValue(':mensagem', $mensagem);
        

		if ( $stmt->execute() ) {
			echo '<div class="alert alert-info" role="alert">Enviada com Sucesso!</div>';
			//echo '<a href="contactform.php">Voltar</a>';
            
		} else {
			echo '<div class="alert alert-danger" role="alert">Erro Tente de novo</div>';
            echo'erro';
		}
	} else {
		echo 'Erro de Validação novo';
	}

}
?>
    <!--<a href="index.html">Voltar</a>-->


    <body>

        <a href="index.html" class="waves-effect waves-light btn-large"><i class="material-icons left">home</i>Voltar</a>
    </body>

</html>
