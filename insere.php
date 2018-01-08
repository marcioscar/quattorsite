<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/custom.css" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <meta name="geo.region" content="BR-DF" />
    <meta name="geo.position" content="-15.836518;-48.011973" />
    <meta name="ICBM" content="-15.836518, -48.011973" />


</head>
<div class="container">
    <h4>Cadastro de Aulas </h4><br>
    <form class="col s12 cont" id="contactForm" method="get" action="insere_aulas.php">
        <div class="row">
            <div class="input-field col s12 l6">
                <i class="material-icons prefix">account_circle</i>
                <input style="text-transform: uppercase" name="aula" id="aula" type="text" required class="validate">
                <label for="nome">Aula</label>
            </div>

            <div class="input-field col s12 l6">
                <i class="material-icons prefix">today</i>
                <select name="dia" id="dia" required>
                    <option value="1">Segunda</option>
                    <option value="2">Terca</option>
                    <option value="3">Quarta </option>
                    <option value="4">Quinta</option>
                    <option value="5">Sexta</option>
                    <option value="6">Sabado</option>
                </select>

            </div>



            <div class="input-field col s12 l6">
                <i class="material-icons prefix">hourglass_empty</i>
                <input style="text-transform: uppercase" name="hora" id="hora" type="text" required class="validate">
                <label for="hora">Hora</label>
            </div>

            <div class="input-field col s12 l6">
                <i class="material-icons prefix">apps</i>
                <select name="tipo" id="tipo" required>
                    <option value="ginastica">Ginastica</option>
                    <option value="piscina">Piscina</option>
                    <option value="luta">Lutas </option>
                </select>

            </div>

        </div>
        <div class="row">
            <div class="col s12">
                <p class="center-align"><button class="btn waves-effect waves-light blue" type="submit" name="BTEnvia" id="BTEnvia">Cadastrar</button></p>
            </div>
        </div>


    </form>
</div>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>
<script src="js/init.js"></script>

</html>
