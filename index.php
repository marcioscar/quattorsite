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


    <title>Quattor Academia</title>

</head>

<body>

    <!--Menu principal   -->
    <!--
TO-DO 
    separar em sections 
    colocar cada section de uma cor
FIM TO-DO    
-->

    <header>
        <!--        Menu mobile-->
        <ul class="side-nav" id="mobile-demo">
            <li><a href="index.php">HOME</a></li>
            <li><a href="contato.html">CONTATO</a></li>
            <li><a href="aulas.html">AULAS</a></li>
            <li><a href="clube.html">CLUBE</a></li>
            <li><a href="tagua.html">TAGUATINGA</a></li>
        </ul>
        <!--        fim menu mobile-->
        <div class="navbar-fixed">
            <nav class="navbar z-depth-0">
                <div class="nav-wrapper container">
                    <a href="index.php" class="brand-logo"><img class="responsive-img" id="logo" src="/img/logo_novo.png" /></a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="contato.html">CONTATO</a></li>
                        <li><a href="aulas.html">AULAS</a></li>
                        <li><a href="clube.html">CLUBE</a></li>
                        <li><a href="tagua.html">TAGUA</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!--home fundo-->
    <!--
<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container">
            <br><br><br><br>
            <h1 class="header center white-text"><img width="500" class="responsive-img" id="logo" src="/img/logo10branco.svg" /></h1>
            <br><br>
        </div>
    </div>
    <div class="parallax"><img src="img/capa1.jpg" alt="Unsplashed background img 1"></div>
</div>
-->
    <!--fim home fundo-->
    <section class="home-banner bloco">
        <div class="row container banner">
            <div class="col s12 l6 center">
                <img class="responsive-img" src="img/botoes%20site.png" alt="slogan">
            </div>

            <div class="col s12 l6 center">
                <img class="responsive-img" src="img/logo_banner.png" alt="logo">
            </div>

        </div>
    </section>


    <section class="home bloco">
        <div class="row container">
            <div class="col s12 m4 l4">
                <div class="card verde">
                    <div class="card-image">
                        <img class="activator" src="img/tagua.jpg">
                        <span class="card-title">Quattor Taguatinga <br> 3042-0068</span>
                    </div>

                    <div class="card-content white-text light">
                        <span class="card-title activator">Quattor Taguatinga</span>
                        <p>A Quattor Academia agora está em Taguatinga Norte!!</p>
                    </div>
                    <div class="card-action white-text light">
                        <a href="tagua.html">Quattor Taguatinga</a>
                    </div>
                </div>
            </div>

            <!--aulas-->
            <?php include("conecta.php"); ?>
            <div class="col s12 m4 l4">
                <div class="card medium">
                    <div class="card-tabs">
                        <ul class="tabs tabs-fixed-width">
                            <li class="tab"><a href="#ginastica">Ginastica</a></li>
                            <li class="tab"><a href="#piscina">Piscina</a></li>
                            <li class="tab"><a href="#lutas">Lutas</a></li>
                        </ul>
                    </div>
                    <div class="card-content ">

                        <div id="ginastica">
                            <table class="table striped pequena">
                                <caption>AULAS DE HOJE</caption>

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
                            <table class="table striped pequena">
                                <caption>AULAS DE HOJE</caption>
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
                            <table class="table striped pequena">
                                <caption>AULAS DE HOJE</caption>
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
            <!--            fim aulas-->
            <!--treino-->
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image">
                        <img class="activator" src="img/spinning2018.jpg">
                    </div>
                </div>
            </div>

        </div>


        <!--row promocao-->
        <div class="row container">
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image">
                        <img class="activator" src="img/combo%20verao%201.jpg">
                    </div>
                </div>
            </div>

            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image">
                        <img class="activator" src="img/combo%20verao%202.jpg">
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image">
                        <img class="activator" src="img/combo%20verao%203.jpg">


                    </div>
                </div>
            </div>

        </div>
        <!--fim promocao -->

        <!--        row 2-->
        <div class="row container">
            <div class="col s12 m4 l4">
                <div class="card medium black">
                    <div class="card-image">
                        <img class="activator" src="img/pilates.jpg">
                        <!--<a href="#jiu" class="btn-floating halfway-fab waves-effect red activator pulse"><i class="material-icons">photo_camera</i></a>-->
                    </div>

                    <div class="card-content white-text">
                        <h3>Aulas individualizadas no estudio !!!</h3>
                    </div>
                </div>
            </div>

            <div class="col s12 m4 l4">
                <div class="card medium green">
                    <div class="card-image">
                        <img class="activator" src="img/play1.jpg">
                        <a class="btn-floating halfway-fab waves-effect vermelho activator pulse"><i class="material-icons">add</i></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator">PlaySports <i class="small material-icons">phone_iphone</i>99319-0685 </span>
                        <h3>Venha correr, Pedalar e Nadar com a gente</h3>
                    </div>

                    <div class="card-reveal green">
                        <span class="card-title">Treinos<i class="material-icons right">close</i></span>
                        <ul class="collection">

                            <li class="collection-item avatar">
                                <img src="img/nadar.jpg" alt="" class="circle">
                                <span class="title">Treinos: Seg / Qua</span>
                                <p>12:30 - Lago Sul</p>

                            </li>
                            <li class="collection-item avatar">
                                <img src="img/bike.jpg" alt="" class="circle">
                                <span class="title">Treinos: Ter / Qui</span>
                                <p>5:00 - Park Way</p>

                            </li>
                            <li class="collection-item avatar">
                                <img src="img/run.jpg" alt="" class="circle">
                                <span class="title">Treinos: Ter / Qui</span>
                                <p>6:30 e 19:00</p>
                                <p>Parque Águas Claras</p>

                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <!--        fim row 2-->

        <div class="divider "></div>
        <div class="section container scrollspy" id="choque">
            <h5>Tratamento de Choque</h5>
            <h6>Primeira Reunião</h6>
        </div>

        <div class="row container">
            <div class="col s6 m4 l3">
                <img class="materialboxed" width="200" height="132" src="img/choque/1.jpg">
            </div>
            <div class="col s6 m4 l3">
                <img class="materialboxed" width="200" height="132" src="img/choque/2.jpg">
            </div>
            <div class="col s6 m4 l3">
                <img class="materialboxed" width="200" height="132" src="img/choque/3.jpg">
            </div>
            <div class="col s6 m4 l3">
                <img class="materialboxed" width="200" height="132" src="img/choque/4.jpg">
            </div>
        </div>

        <div class="divider"></div>
        <div class="section container scrollspy" id="jiu">
            <h5>Jiu-Jitsu Feminino</h5>

        </div>

        <div class="row container">
            <div class="col s6 m4 l3">
                <img class="materialboxed" width="200" height="132" src="img/jiu/1.jpg">
            </div>
            <div class="col s6 m4 l3">
                <img class="materialboxed" width="200" height="132" src="img/jiu/2.jpg">
            </div>
            <div class="col s6 m4 l3">
                <img class="materialboxed" width="200" height="132" src="img/jiu/3.jpg">
            </div>
            <div class="col s6 m4 l3">
                <img class="materialboxed" width="200" height="132" src="img/jiu/4.jpg">
            </div>
        </div>




        <!--        row aulas-->
        <div class="row container">
            <div class="divider"></div>
            <div class="section">
                <h5>AULAS PARA OS QUATTORIANOS</h5>
                <div class="col s12 m4 l4">
                    <img class="circle responsive-img" src="img/bale.jpg">
                </div>

                <div class="col s12 m4 l4">
                    <img class="circle responsive-img" src="img/natacao.jpg">
                </div>

                <div class="col s12 m4 l4">
                    <img class="circle responsive-img" src="img/arena.jpg">
                </div>

                <!--
<div class="col s12 m4 l4">
    <img class="circle responsive-img" src="img/solo.jpg">
</div>
-->

            </div>
        </div>
    </section>
    <!--fim row aulas-->

    <!--    fim cotainer-->

    <!--    rodapé-->
    <div class="container">
        <footer class="page-footer red darken-2">
            <div class="footer-copyright">
                Quattor Academia - <a class="yellow-text text-lighten-3 center-align" href="http://www.quattoracademia.com.br"> 61 3965-7444 / 61 3042-0068</a>
            </div>

        </footer>
    </div>
    <!--fim rodape    -->




    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    <script>
        $(document).ready(function() {

            $(".button-collapse").sideNav();
            $('.scrollspy').scrollSpy({
                scrollOffset: 0
            });
        })

    </script>
</body>

</html>
