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
    <?php include("conecta.php"); ?>
    <div class="card">
        <div class="card-tabs">
            <ul class="tabs tabs-fixed-width">
                <li class="tab"><a href="#ginastica">Ginastica</a></li>
                <li class="tab"><a href="#piscina">Piscina</a></li>
                <li class="tab"><a href="#lutas">Lutas</a></li>
            </ul>
        </div>
        <div class="card-content ">
            <div id="ginastica">
                <table class="table striped bordered">
                    <?php
                        $aulas = listaAulasGinastica($conexao);  
                        foreach($aulas as $aula):
                        $hora = date_create($aula['hora']);
                    ?>
                        <tr>
                            <td>
                                <?=$aula['aula']?>
                            </td>
                            <td>
                                <?=date_format($hora, 'H:i');?>
                            </td>
                        </tr>

                        <?php    
                            endforeach    

                    ?>
                </table>

            </div>
            <div id="piscina">
                <table class="table striped bordered">
                    <?php
                        $aulas = listaAulasPiscina($conexao);  
                        foreach($aulas as $aula):
                        $hora = date_create($aula['hora']);
                    ?>
                        <tr>
                            <td>
                                <?=$aula['aula']?>
                            </td>
                            <td>
                                <?=date_format($hora, 'H:i');?>
                            </td>
                        </tr>

                        <?php    
                            endforeach    

                    ?>
                </table>
            </div>
            <div id="lutas">
                <table class="table striped bordered">
                    <?php
                        $aulas = listaAulasLuta($conexao);  
                        foreach($aulas as $aula):
                        $hora = date_create($aula['hora']);
                    ?>
                        <tr>
                            <td>
                                <?=$aula['aula']?>
                            </td>
                            <td>
                                <?=date_format($hora, 'H:i');?>
                            </td>
                        </tr>

                        <?php    
                            endforeach    

                    ?>
                </table>
            </div>
        </div>


    </div>

</div>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>
<script src="js/init.js"></script>

</html>
