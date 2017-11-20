
<!DOCTYPE HTML>
<html>
<head>
<!-- meta data -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">

    <!-- title and favicon -->

    <title>Quattor Academia</title>
    <link rel="icon" href="assets/img/icone.png">
    
    
<link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/ionicons.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/popup.css">
    <link type="text/css" rel="stylesheet" href="assets/css/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="assets/css/owl.theme.css">
    <link type="text/css" rel="stylesheet" href="assets/css/style.css"> 
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="assets/js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/modernizr.js"></script>
    <script type="text/javascript" src="assets/js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.popup.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    
    <script type="text/javascript" src="assets/js/contact.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script type="text/javascript" src="assets/js/javascript.js"></script>

</head>
    <?php

include ('conn.php');

if ( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['msg_submited']) ) {

	$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : ''; 
	$tel = isset($_POST['tel']) ? $_POST['tel'] : '';
	$curso = isset($_POST['idade']) ? $_POST['idade'] : '';
    //$curso = "carnaval";

	$validate = true;
	$validate &= ! empty( $idade );
	$validate &= ! empty( $email );
	$validate &= ! empty( $tel );
	$validate &= ! empty( $idade ) && strlen($curso) >=1;

	if ( $validate ) {
		$stmt = $conn->prepare("INSERT INTO aula (nome,email,telefone,curso) VALUES (:nome, :email, :tel, :idade)");
		$stmt->BindValue(':nome', $nome);
		$stmt->BindValue(':email', $email);
		$stmt->BindValue(':tel', $tel);
		$stmt->BindValue(':idade', $idade);

		if ( $stmt->execute() ) {
			echo '<div class="alert alert-info" role="alert">Inscrição Realizada com Sucesso!</div>';
			//echo '<a href="contactform.php">Voltar</a>';
            
		} else {
			echo '<div class="alert alert-danger" role="alert">Erro Tente de novo</div>';
		}
	} else {
		echo 'Erro de Validação novo';
	}

}
?>
<a href="www.quattoracademia.com.br">Voltar</a>;
<body>    
    
</body>
</html>




