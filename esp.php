<?php


 session_start ();


error_reporting(0);
$varsession = $_SESSION["uname"];
if($varsession == null || $varsession=''){
echo'No tienes acceso';
die();
}

if ($_GET['action'] == 'logout'){

  unset ($_SESSION['msatg']);

  header ('Location: https://big15.cruises.ec/index.php');
  
  session_destroy();

}


?>


<!DOCTYPE html>
<html lang="en">

<head>


  <meta name="robots" content="noindex,nofollow">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Big15 - Metropolitan-Touring</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="build/css/app.css">

  <link href="build/css/bootstrap-tour.min.css" rel="stylesheet">

  <link rel="icon" type="image/x-icon" href="index_files/favico.png">

  <!-- Styles -->


  <link href="index_files/front.css" rel="stylesheet">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="http://web.big15.todocloud.com/build/vendor/html5shiv/html5shiv.min.js"></script>
        <script src="http://web.big15.todocloud.com/build/vendor/html5shiv/html5shiv-printshiv.min.js"></script>
        <script src="http://web.big15.todocloud.com/build/vendor/respond/respond.min.js"></script> -->

  <!-- Scripts -->
  <script src="index_files/jquery.js"></script>
  <script src="index_files/bootstrap.js"></script>
  <script src="index_files/nprogress.js"></script>
  <script src="index_files/front.js"></script>



  <ul class="nav  nav-pills">

    <li class="boton-spanish"><a href="en.php">Spanish 2022 / 2023</a></li>
  </ul>
</head>






<body>


  <header class="full-width NavBarP">

    <div class="full-width NavBarP-Logo">
      <img src="assets/images/logo.svg" alt="">



    </div>
    <nav class="full-width NavBarP-Nav">
      <ul class="full-width list-unstyled">

        <li class="derecha mobile-menu">


          <img class="dark-mode-boton" src="build/img/dark-mode.svg" alt="">
          <a href="?action=logout" class=""><i class="fa fa-user" aria-hidden="true"></i> CERRAR SESI??N</a>




        </li>
      </ul>
    </nav>
    <i class="fa fa-bars visible-xs btn-menuMobile ShowMenuMobile" aria-hidden="true"></i>
  </header>

  <section class="banner">


    <div class="banner-content">


      <h1>Bienvenido/a,
        <?php echo $_SESSION["uname"]; ?> !
      </h1>
      <!--  <a href="#">Ver articulos</a>	-->
      <button class="btn button1"> <a href="en.php">Ingl??s 2022 / 2023</a> </button>
      <button class="btn button2 tour-step1 tour-step18" id="initialize-tour">Empezar tour</button>

    </div>
  </section>



  <body class="nav-md">
    <div class="body" style="margin:  2%">
      <!-- Main container -->

      <!--<a id="" class="tour-button" href="#">START TOUR</a>-->

      <div class="front_container" id="front_container">
        <div class="" role="main" id="front_content">




          <div class="tab-content">
            <!-- TABS -->

            <div id="eng2021" class="tab-pane fade in active">



              <!-- TAB ENGLISH -->

              <table id="metro_big15" border="1">
                <!-- INGLES -->
                <thead>
                  <tr class="row_1">
                    <td colspan="2"><strong>GAL??PAGOS</strong></td>
                    <td colspan="8"><strong>ACTIVIDADES</strong></td>
                    <td colspan="9"><strong>ITINERARIOS</strong></td>
                    <td colspan="15"><strong>BIG 15</strong></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr class="row_2">
                    <td class="do_not_touch"><b>Islas</b></td>
                    <td class="do_not_touch"><b>Sitios de visita</b></td>
                    <td class="activity activity_1" id="activity_1" style="cursor: pointer;"><img
                        src="index_files/na.png" data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="Nataci??n" width="25" height="25"></td>
                    <td class="activity activity_2" id="activity_2" style="cursor: pointer;"><img
                        src="index_files/sn.png" data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="Buceo de superficie" width="25" height="25"></td>
                    <td class="activity activity_3" id="activity_3" style="cursor: pointer;"><img
                        src="index_files/bv.png" data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="Bote con fondo de vidrio" width="25" height="25"></td>
                    <td class="activity activity_4" id="activity_4" style="cursor: pointer;"><img
                        src="index_files/pan.png" data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="Panga" width="25" height="25"></td>
                    <td class="activity activity_5 " id="activity_5" style="cursor: pointer;"><img
                        src="index_files/ka.png" data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="Kayak" width="25" height="25"></td>
                    <td class="activity activity_6" id="activity_6" style="cursor: pointer;"><img
                        src="index_files/pb.png" data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="Paddleboard" width="25" height="25"></td>
                    <td class="activity activity_7" id="activity_7" style="cursor: pointer;"><img
                        src="index_files/pla.png" data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="Playa" width="25" height="25"></td>

                    <td class="activity activity_8" id="activity_8" style="cursor: pointer;"><img
                        src="index_files/hike.png" data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="Caminata" width="25" height="25"></td>


                    <td class="ship ship_1 tour-step10" id="ship_1" colspan="3" style="cursor: pointer;"><b>Santa Cruz
                        II</b></td>
                    <td class="ship ship_2" id="ship_2" colspan="3" style="cursor: pointer;"><b>La Pinta</b></td>
                    <td class="ship ship_3" id="ship_3" colspan="3" style="cursor: pointer;"><b>Isabela II</b></td>
                    <td class="specie specie_1" id="specie_1" style="cursor: pointer;"><img src="index_files/ga.png"
                        alt="Gavil??n de Gal??pagos" data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="Gavil??n de Gal??pagos" width="25" height="25"></td>
                    <td class="specie specie_2 tour-step15" id="specie_2" style="cursor: pointer;">
                      <img src="index_files/lo.png" alt="Lobo marino de Gal??pagos" data-toggle="tooltip"
                        data-placement="bottom" title="" data-original-title="Lobo marino de Gal??pagos" width="25"
                        height="25">
                    </td>
                    <td class="specie specie_3" id="specie_3" style="cursor: pointer;"><img src="index_files/pa.png"
                        alt="Piquero de patas azules" data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="Piquero de patas azules" width="25" height="25">
                    </td>
                    <td class="specie specie_4" id="specie_4" style="cursor: pointer;"><img src="index_files/fr.png"
                        alt="Fragatas" data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="Fragatas" width="25" height="25"></td>
                    <td class="specie specie_5" id="specie_5" style="cursor: pointer;"><img src="index_files/to.png"
                        alt="Tortuga gigante de Gal??pagos" data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="Tortuga gigante de Gal??pagos" width="25" height="25"></td>
                    <td class="specie specie_7" id="specie_7" style="cursor: pointer;"><img src="index_files/im.png"
                        alt="Iguana marina" data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="Iguana marina" width="25" height="25"></td>
                    <td class="specie specie_8" id="specie_8" style="cursor: pointer;"><img src="index_files/pn.png"
                        alt="Piquero de Nazca" data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="Piquero de Nazca" width="25" height="25"></td>
                    <td class="specie specie_6" id="specie_6" style="cursor: pointer;"><img src="index_files/fla.png"
                        alt="Flamenco americano" data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="Flamenco americano" width="25" height="25"></td>
                    <td class="specie specie_11" id="specie_11" style="cursor: pointer;"><img src="index_files/pe.png"
                        alt="Lobo peletero" data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="Lobo peletero" width="25" height="25"></td>
                    <td class="specie specie_9" id="specie_9" style="cursor: pointer;"><img src="index_files/u.png"
                        alt="Ping??ino de Gal??pagos" data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="Ping??ino de Gal??pagos" width="25" height="25"></td>
                    <td class="specie specie_12" id="specie_12" style="cursor: pointer;"><img src="index_files/pr.png"
                        alt="Piquero de patas rojas" data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="Piquero de patas rojas" width="25" height="25">
                    </td>
                    <td class="specie specie_10" id="specie_10" style="cursor: pointer;"><img src="index_files/it.png"
                        alt="Iguana terrestre" data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="Iguana terrestre" width="25" height="25"></td>
                    <td class="specie specie_13" id="specie_13" style="cursor: pointer;"><img src="index_files/alb.png"
                        alt="Albatros de Gal??pagos" data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="Albatros de Gal??pagos" width="25" height="25"></td>
                    <td class="specie specie_14" id="specie_14" style="cursor: pointer;"><img src="index_files/co.png"
                        alt="Cormor??n" data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="Cormor??n" width="25" height="25"></td>
                    <td class="specie specie_15" id="specie_15" style="cursor: pointer;"><img src="index_files/is.png"
                        alt="Iguana de Santa F??" data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="Iguana de Santa F??" width="25" height="25"></td>
                    <td>&nbsp;</td>
                    <!-- Placeholder for Count Viesit Point Species -->
                  </tr>
                  <tr class="row_3">
                    <td class="do_not_touch">17</td>
                    <!-- Count Isles -->
                    <td class="do_not_touch">44</td>
                    <!-- Count Viesit Points -->

                    <td class="do_not_touch"> 23 </td>
                    <!-- Count Activities per Viesit Point -->
                    <td class="do_not_touch"> 26 </td>
                    <!-- Count Activities per Viesit Point -->
                    <td class="do_not_touch"> 18 </td>
                    <!-- Count Activities per Viesit Point -->
                    <td class="do_not_touch"> 22 </td>
                    <!-- Count Activities per Viesit Point -->
                    <td class="do_not_touch"> 12 </td>
                    <!-- Count Activities per Viesit Point -->
                    <td class="do_not_touch"> 10 </td>
                    <!-- Count Activities per Viesit Point -->
                    <td class="do_not_touch"> 18 </td>
                    <!-- Count Activities per Viesit Point -->
                    <td class="do_not_touch"> 31 </td>
                    <td class="route route_1 ship_1" id="route_1" style="cursor: pointer;"><b>Norte<br>
                        5D</b> <br>

                      <span class="count_b15_per_route">(<b>12</b> B15)</span></br>

                      <!-- START MODAL MAPS-->

                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#sc-north">
                        Map</button>

                      <!-- Ludal -->

                      <div class="modal fade" id="sc-north" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <!-- Ludal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Santa Cruz II - NORTH</h4>
                            </div>
                            <div class="modal-body">
                              <p>5 Days - 12 Big15</p>
                              <img src="build/img/maps/santa-cruz-cruise-northern-itinerary.svg" alt="santa-cruz-north">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END MODAL MAPS-->
                    </td>
                    <td class="route route_2 ship_1" id="route_2" style="cursor: pointer;"><b>Este<br>
                        7D</b> <br>
                      <span class="count_b15_per_route">(<b>13</b> B15)</span></br>

                      <!-- START MODAL MAPS-->

                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#sc-east">
                        Map</button>

                      <!-- Ludal -->

                      <div class="modal fade" id="sc-east" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <!-- Ludal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Santa Cruz II - Este </h4>
                            </div>
                            <div class="modal-body">
                              <p>7 Days - 13 Big15</p>
                              <img src="build/img/maps/santa-cruz-cruise-eastern-itinerary.svg" alt="santa-cruz-east">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END MODAL MAPS-->
                    </td>
                    <td class="route route_3 ship_1 " id="route_3" style="cursor: pointer;">
                      <b>Oeste<br>
                        5D</b> <br>
                      <span class="count_b15_per_route">(<b>12</b> B15)</span></br>

                      <!-- START MODAL MAPS-->

                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#sc-west">
                        Map</button>

                      <!-- Ludal -->

                      <div class="modal fade" id="sc-west" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <!-- Ludal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Santa Cruz II - Oeste </h4>
                            </div>
                            <div class="modal-body">
                              <p>5 Days - 12 Big15</p>
                              <img src="build/img/maps/santa-cruz-cruise-western-itinerary.svg" alt="santa-cruz-west">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END MODAL MAPS-->
                    </td>
                    <td class="route route_4 ship_2 tour-step11 tour-step12" id="route_4" style="cursor: pointer;">
                      <b>Norte<br>
                        5D</b> <br>
                      <span class="count_b15_per_route">(<b>11</b> B15)</span></br>

                      <!-- START MODAL MAPS-->

                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#lp-north">
                        Map</button>

                      <!-- Ludal -->

                      <div class="modal fade" id="lp-north" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <!-- Ludal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">La Pinta - Norte </h4>
                            </div>
                            <div class="modal-body">
                              <p>5 Days - 11 Big15</p>
                              <img src="build/img/maps/northern-itinerary-map-yacht-la-pinta.svg" alt="la-pinta-north">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END MODAL MAPS-->
                    </td>
                    <td class="route route_5 ship_2" id="route_5" style="cursor: pointer;"><b>Oeste<br>
                        7D</b> <br>
                      <span class="count_b15_per_route">(<b>12</b> B15)</span></BR>

                      <!-- START MODAL MAPS-->

                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#lp-west">
                        Map</button>

                      <!-- Ludal -->

                      <div class="modal fade" id="lp-west" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <!-- Ludal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">La Pinta - Oeste </h4>
                            </div>
                            <div class="modal-body">
                              <p>7 D??as - 12 Big15</p>
                              <img src="build/img/maps/western-itinerary-map-yacht-la-pinta.svg" alt="la-pinta-west">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END MODAL MAPS-->
                    </td>
                    <td class="route route_6 ship_2" id="route_6" style="cursor: pointer;"><b>Este<br>
                        5D</b> <br>
                      <span class="count_b15_per_route">(<b>11</b> B15)</span></BR>

                      <!-- START MODAL MAPS-->

                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#lp-east">
                        Map</button>

                      <!-- Ludal -->

                      <div class="modal fade" id="lp-east" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <!-- Ludal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">La Pinta - Este </h4>
                            </div>
                            <div class="modal-body">
                              <p>5 Days - 11 Big15</p>
                              <img src="build/img/maps/eastern-itinerary-map-yacht-la-pinta.svg" alt="la-pinta-east">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END MODAL MAPS-->
                    </td>
                    <td class="route route_7 ship_3" id="route_7" style="cursor: pointer;"><b>Oeste<br>
                        5D</b> <br>
                      <span class="count_b15_per_route">(<b>12</b> B15)</span></BR>

                      <!-- START MODAL MAPS-->

                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#isa-center">
                        Map</button>

                      <!-- Ludal -->

                      <div class="modal fade" id="isa-center" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <!-- Ludal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Isabela II - Oeste </h4>
                            </div>
                            <div class="modal-body">
                              <p>5 Days - 12 Big15</p>
                              <img src="build/img/maps/yacht-isabela-western-itinerary-map-1.svg" alt="isabela-center">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END MODAL MAPS-->
                    </td>
                    <td class="route route_8 ship_3" id="route_8" style="cursor: pointer;"><b>Norte<br>
                        5D</b> <br>
                      <span class="count_b15_per_route">(<b>13</b> B15)</span></BR>

                      <!-- START MODAL MAPS-->

                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#isa-south">
                        Map</button>

                      <!-- Ludal -->

                      <div class="modal fade" id="isa-south" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <!-- Ludal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Isabela II - Norte </h4>
                            </div>
                            <div class="modal-body">
                              <p>5 Days - 13 Big15</p>
                              <img src="build/img/maps/yacht-isabela-northern-itinerary-map-1.svg" alt="isabela-south">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END MODAL MAPS-->
                    </td>
                    <td class="route route_9 ship_3" id="route_9" style="cursor: pointer;"><b>Sureste<br>
                        7D</b> <br>
                      <span class="count_b15_per_route">(<b>14</b> B15)</span></BR>

                      <!-- START MODAL MAPS-->

                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#isa-north">
                        Map</button>

                      <!-- Ludal -->

                      <div class="modal fade" id="isa-north" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <!-- Ludal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Isabela II - Sureste </h4>
                            </div>
                            <div class="modal-body">
                              <p>7 Days - 14 Big15</p>
                              <img src="build/img/maps/yacht-isabela-southeastern-itinerary-map-1.svg" alt="isabela-north">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END MODAL MAPS-->
                    </td>
                    <td class="do_not_touch tour-step16"> 18 </td>
                    <!-- Count Species per Viesit Point -->
                    <td class="do_not_touch"> 38 </td>
                    <!-- Count Species per Viesit Point -->
                    <td class="do_not_touch"> 28 </td>
                    <!-- Count Species per Viesit Point -->
                    <td class="do_not_touch"> 45 </td>
                    <!-- Count Species per Viesit Point -->
                    <td class="do_not_touch"> 4 </td>
                    <!-- Count Species per Viesit Point -->
                    <td class="do_not_touch"> 40 </td>
                    <!-- Count Species per Viesit Point -->
                    <td class="do_not_touch"> 20 </td>
                    <!-- Count Species per Viesit Point -->
                    <td class="do_not_touch"> 6 </td>
                    <!-- Count Species per Viesit Point -->
                    <td class="do_not_touch"> 7 </td>
                    <!-- Count Species per Viesit Point -->
                    <td class="do_not_touch"> 10 </td>
                    <!-- Count Species per Viesit Point -->
                    <td class="do_not_touch"> 3 </td>
                    <!-- Count Species per Viesit Point -->
                    <td class="do_not_touch"> 8 </td>
                    <!-- Count Species per Viesit Point -->
                    <td class="do_not_touch"> 1 </td>
                    <!-- Count Species per Viesit Point -->
                    <td class="do_not_touch"> 6 </td>
                    <!-- Count Species per Viesit Point -->
                    <td class="do_not_touch"> 1 </td>
                    <td class="do_not_touch" style="width: 20px;"><b>B15 Sitios para visitar</b></td>
                    <!-- Count Species per Viesit Point -->
                  </tr>
                  <tr class="row_4">
                    <td class="do_not_touch">&nbsp;</td>
                    <!-- Empty Space -->
                    <td class="do_not_touch">&nbsp;</td>
                    <td class="do_not_touch">NA</td><!-- Activity Codes -->
                    <td class="do_not_touch">Sn</td><!-- Activity Codes -->
                    <td class="do_not_touch">BV</td><!-- Activity Codes -->
                    <td class="do_not_touch">Pan</td><!-- Activity Codes -->
                    <td class="do_not_touch">Ka</td><!-- Activity Codes -->
                    <td class="do_not_touch">PB</td>

                    <!-- Ac
            tivity Codes -->
                    <td class="do_not_touch">Ply</td><!-- Activity Codes -->
                    <td class="do_not_touch">Cn</td><!-- Activity Codes -->
                    <td class="do_not_touch">Lu1</td><!-- Route Description -->
                    <td class="do_not_touch">Vie1</td><!-- Route Description -->
                    <td class="do_not_touch">Jue2</td><!-- Route Description -->
                    <td class="do_not_touch tour-step13">Lu1</td><!-- Route Description -->
                    <td class="do_not_touch">Vie1</td><!-- Route Description -->
                    <td class="do_not_touch">Jue2</td><!-- Route Description -->
                    <td class="do_not_touch">Jue1</td><!-- Route Description -->
                    <td class="do_not_touch">Lu2</td><!-- Route Description -->
                    <td class="do_not_touch">Vie2</td><!-- Route Description -->

                    <td class="do_not_touch">Ga</td>
                    <td class="do_not_touch">Lm</td>
                    <td class="do_not_touch">Pqa</td>
                    <td class="do_not_touch">Fr</td>
                    <td class="do_not_touch">To</td>
                    <td class="do_not_touch">Im</td>
                    <td class="do_not_touch">Pn</td>
                    <td class="do_not_touch">Fla</td>
                    <td class="do_not_touch">Lp</td>
                    <td class="do_not_touch">??</td>
                    <td class="do_not_touch">Pqr</td>
                    <td class="do_not_touch">It</td>
                    <td class="do_not_touch">Alb</td>
                    <td class="do_not_touch">Co</td>
                    <td class="do_not_touch">SI</td>
                    <td class="do_not_touch">&nbsp;</td>
                    <!-- Empty Space -->
                    <!-- Activity Codes -->
                    <!-- Activity Codes -->
                    <!-- Activity Codes -->
                    <!-- Activity Codes -->
                    <!-- Activity Codes -->
                    <!-- Ac
										tivity Codes -->
                    <!-- Activity Codes -->
                    <!-- Route Description -->
                    <!-- Route Description -->
                    <!-- Route Description -->
                    <!-- Route Description -->
                    <!-- Route Description -->
                    <!-- Route Description -->
                    <!-- Route Description -->
                    <!-- Route Description -->
                    <!-- Route Description -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                  </tr>
                </thead>
                <tbody>
                  <!--
							IMPORTANT: BE CAREFUL WHEN CHANGING THE CLASSES: SPACES ARE IMPORTANT, THE ORDER OF THE CLASSES IS IMPORTANT.
							-->
                  <tr>
                    <td id="isle_1" class="isle isle_1" style="cursor: pointer;"> Baltra </td>
                    <td id="visit_point_1" class="isle_1 visit_point_1 visit_point" style="cursor: pointer;"> Aeropuerto
                    </td>
                    <!-- Isle -->
                    <!-- Frsit Point -->

                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="font-size: 11px; text-align: center" class="isle_1 visit_point_1 ship_1 route_1">
                      1Lu-11Vie </td>
                    <td style="font-size: 11px; text-align: center" class="isle_1 visit_point_1 ship_1 route_2">
                      1Vie-18Jue </td>
                    <td style="font-size: 11px; text-align: center" class="isle_1 visit_point_1 ship_1 route_3">
                      1Jue-14Lu
                    </td>
                    <td style="font-size: 11px; text-align: center" class="isle_1 visit_point_1 ship_2 route_4">
                      1Lu-10Vie
                    </td>
                    <td style="font-size: 11px; text-align: center" class="isle_1 visit_point_1 ship_2 route_5">
                      1Vie-17Jue </td>
                    <td style="font-size: 11px; text-align: center" class="isle_1 visit_point_1 ship_2 route_6">
                      1Jue-12Lu </td>
                    <td style="font-size: 11px; text-align: center" class="isle_1 visit_point_1 ship_3 route_7">
                      1Jue-11Lu
                    </td>
                    <td style="font-size: 11px; text-align: center" class="isle_1 visit_point_1 ship_3 route_8">
                      1Lu-Vie10
                    </td>
                    <td style="font-size: 11px; text-align: center" class="isle_1 visit_point_1 ship_3 route_9">
                      1Vie-20Jue </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""> <span class="">&nbsp; </span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_1 visit_point_1 specie_2"> <span
                        class="fa fa-check">&nbsp; </span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_1 visit_point_1 specie_4"> <span
                        class="fa fa-check">&nbsp; </span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_1 visit_point_1 specie_10"> <span
                        class="fa fa-check">&nbsp; </span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_1 visit_point_1 specie_10 specie_4 specie_4 specie_2"> 3 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>

                  <tr>
                    <td rowspan="2" id="isle_2" class="isle isle_2 " style="cursor: pointer;"> Bartolom?? </td>

                    <td id="visit_point_2" class="isle_2 visit_point_2 visit_point" style="cursor: pointer;"> Playa Bartolom??
                      
                    </td>

                    <!-- Isle -->
                    <!-- Viesit Point -->

                    <td style="text-align: center" class="isle_2 visit_point_2 s_1 s_2 activity_1">
                      <span class="fa fa-check">&nbsp; </span>

                    </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_2 visit_point_2 activity_2"><span
                        class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_2 visit_point_2 activity_3"><span
                        class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_2 visit_point_2 activity_4"><span
                        class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_2 visit_point_2 activity_7 "><span
                        class="fa fa-check">&nbsp; </span></td>

                    <td style="text-align: center" class="isle_2 visit_point_2 activity_8">
                      <span class="fa fa-check">&nbsp; </span>
                    </td>
                    <td style="font-size: 11px; text-align: center" class="isle_2 visit_point_2 ship_1 route_1">
                      6-D3Mie
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_2 visit_point_2 ship_2 route_4"> 5-D3Mie
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_2 visit_point_2 ship_3 route_7"> 4-D2Vie
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_2 visit_point_2 specie_1"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_2 visit_point_2 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_2 visit_point_2 specie_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_2 visit_point_2 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_2 visit_point_2 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_2 visit_point_2 specie_9"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="isle_2 visit_point_2 specie_1 specie_2 activity_7 specie_3 specie_4 specie_7 specie_9 activity_1 activity_2 activity_3 activity_4 activity_8">
                      6 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>


                    <td id="visit_point_37" class="isle_2 visit_point_37 visit_point" style="cursor: pointer;">
                      Bartolom?? sendero a la cumbre
                    </td>

                    <!-- Isle -->
                    <!-- Viesit Point -->

                    <td style="text-align: center" class=""> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""><span class="">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""><span class="">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""><span class="">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""><span class="">&nbsp; </span></td>

                    <td style="text-align: center" class="isle_2 visit_point_37 activity_8"><span
                      class="fa fa-check">&nbsp;</span></td>
                    <td style="font-size: 11px; text-align: center" class="isle_2 visit_point_37 ship_1 route_1">
                      7-D3Mie</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="">
                    </td>
                    <td style="font-size: 11px; text-align: center" class="isle_2 visit_point_37 ship_2 route_4">
                      6-D3Mie</td>
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_2 visit_point_37 ship_3 route_7">
                      5-D2Vie</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_2 visit_point_37 specie_1"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_2 visit_point_37 specie_2"><span
                      class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_2 visit_point_37 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span
                      class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_2 visit_point_37 specie_7"><span
                      class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_2 visit_point_37 specie_9"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_2 visit_point_37 specie_1  specie_4  specie_9 specie_7 specie_2 activity_8"> 5
                    </td>
                    <!-- count Species per Viesit Point-->

                  </tr>



                  <tr>
                    <td rowspan="4" id="isle_3" class="isle isle_3" style="cursor: pointer;"> Espa??ola </td>
                    <td id="visit_point_3" class="isle_3 visit_point_3 visit_point" style="cursor: pointer;"> 
                      Bah??a Gardner
                    </td>
                    <!-- Isle -->
                    <!-- Viesit Point -->

                    <td style="text-align: center" class="isle_3 visit_point_3 activity_1"><span
                        class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_3 visit_point_3 activity_2"><span
                        class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_3 visit_point_3 s_2 s_3 s_1 activity_3">
                      <span class="fa fa-check">&nbsp; </span>
                    </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_3 visit_point_3 s_2 s_3 s_1 activity_4"><span
                        class="fa fa-check">&nbsp; </span> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_3 visit_point_3 activity_5"><span
                        class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_3 visit_point_3 s_2 s_1 s_3 activity_6"><span
                        class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->

                    <td style="text-align: center" class="isle_3 visit_point_3 activity_7"><span
                        class="fa fa-check">&nbsp; </span></td>

                    <td style=" text-align: center" class="isle_3 visit_point_3 activity_8">
                      <span class="fa fa-check">&nbsp; </span>
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_3 visit_point_3 ship_1 route_2"> 14-D5Mar
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_3 visit_point_3 ship_2 route_6">
                      10-D4Dom
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_3 visit_point_3 ship_3 route_9"> 7-D3Dom
                    </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <td style="text-align: center" class="isle_3 visit_point_3 specie_1"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_3 visit_point_3 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_3 visit_point_3 specie_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_3 visit_point_3 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_3 visit_point_3 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="isle_3 visit_point_3 specie_1 specie_2 specie_3 activity_8 specie_4 specie_7  activity_1 activity_2 activity_3 activity_4 activity_5 activity_6 activity_7 activity_">
                      5 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_4" class="isle_3 visit_point_4 visit_point" style="cursor: pointer;"> 
                      Islote Osborn
                    </td>
                    <!-- Viesit Point -->

                    <td style="text-align: center" class=""> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_3 visit_point_4 activity_2"> P I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""> </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="">
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_3 visit_point_4 ship_2 route_6">
                      11-D4Dom </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_3 visit_point_4 ship_3 route_9">8-D3Dom
                    </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_3 visit_point_4 specie_1"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_3 visit_point_4 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_3 visit_point_4 specie_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_3 visit_point_4 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_3 visit_point_4 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center "
                      class="isle_3 visit_point_4 specie_1 specie_2 specie_3 specie_4 specie_7  activity_2  "> 5 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_5" class="isle_3 visit_point_5 visit_point" style="cursor: pointer;"> Punta
                      Suarez </td>
                    <!-- Viesit Point -->

                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style=" text-align: center" class="isle_3 visit_point_5 activity_8">
                      <span class="fa fa-check">&nbsp;</span>
                    </td>

                    <td style=" text-align: center" class="">
                      <span class="">&nbsp;</span>
                    </td>
                    <td style="font-size: 11px; text-align: center" class="isle_3 visit_point_5 ship_1 route_2"> 13-D5Mar
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_3 visit_point_5 ship_2 route_6"> 9-D4Dom
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_3 visit_point_5 ship_3 route_9">
                      10-D3Dom
                    </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_3 visit_point_5 specie_1"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_3 visit_point_5 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_3 visit_point_5 specie_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_3 visit_point_5 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_3 visit_point_5 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_3 visit_point_5 specie_8"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_3 visit_point_5 isle_3  specie_13 "><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="isle_3 visit_point_5 specie_1 specie_2 activity_8 specie_3 specie_4 specie_7 specie_8 specie_13">
                      7
                    </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_31" class="isle_3 visit_point_31 visit_point" style="cursor: pointer;"> 
                      Islote Gardner </td>
                    <!-- Viesit Point -->

                    <td style="text-align: center" class=""><span
                        class="">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_3 visit_point_31 activity_2"><span
                      class="fa fa-check">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_3 visit_point_31 activity_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_3 visit_point_31 activity_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_3 visit_point_31 ship_1 route_2">
                      15-D5Mar</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_3 visit_point_31 ship_2 route_6">
                      12-D4Su</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_3 visit_point_31 ship_3 route_9">
                      9-D3Sun</td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_3 visit_point_31 specie_1"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_3 visit_point_31 specie_2"><span
                      class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_3 visit_point_31 specie_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_3 visit_point_31 specie_4"><span
                      class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_3 visit_point_31 specie_7"><span
                      class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_3 visit_point_31 specie_8"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span
                        class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>

                    <!-- Species -->

                    <td style="text-align: center"
                      class="isle_3 visit_point_31 specie_1 specie_3  specie_4 specie_8 activity_4 activity_2 activity_3 specie_2 specie_7">
                      6
                    </td>
                    <!-- count Species per Viesit Point-->

                  </tr>



                  <tr>
                    <td rowspan="2" id="isle_4" class="isle isle_4" style="cursor: pointer;"> Fernandina </td>
                    <td id="visit_point_6" class="isle_4 visit_point_6 visit_point" style="cursor: pointer;"> Punta
                      Espinoza </td>
                    <!-- Isle -->
                    <!-- Viesit Point -->

                    <td style="text-align: center" class=""> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_4 visit_point_6 activity_2"><span
                        class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""><span class="">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>

                    <td style="text-align: center" class="isle_4 visit_point_6 activity_8"><span
                        class="fa fa-check">&nbsp; </span></td>

                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_4 visit_point_6 ship_1 route_3"> 4-D2Vie
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_4 visit_point_6 ship_2 route_5"> 4-D2Sa
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_4 visit_point_6 ship_3 route_7">
                      10-D4Dom
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_4 visit_point_6 specie_1"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_4 visit_point_6 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_4 visit_point_6 specie_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_4 visit_point_6 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_4 visit_point_6 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_4 visit_point_6 specie_9"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span
                      class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="isle_4 visit_point_6 specie_1 specie_2 specie_3 specie_4 specie_7 specie_9  activity_2 activity_8">
                      6 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_38" class="isle_4 visit_point_38 visit_point" style="cursor: pointer;"> Punta
                      Mangle </td>
                    <!-- Viesit Point -->

                    <td style="text-align: center" class=""> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_4 visit_point_38 s_1 s_3 activity_2 tour-step7"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_4 visit_point_38 s_1 s_3 activity_3"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_4 visit_point_38 s_1 s_3 activity_4"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_4 visit_point_38 ship_3 route_9">
                      17-D5Mar </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_4 visit_point_38 specie_1"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_4 visit_point_38 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span
                        class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_4 visit_point_38 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_4 visit_point_38 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_4 visit_point_38 specie_8"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_4 visit_point_38 specie_9"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_4 visit_point_38 specie_14"><span
                      class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="  isle_4 visit_point_38 specie_1 specie_2 specie_14 activity_3 specie_3 specie_4 specie_7 specie_8 specie_9 activity_4 activity_2">
                      7 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <!-- Fin Fernandina -->

                  <tr>
                    <td rowspan="5" id="isle_5" class="isle isle_5" style="cursor: pointer;"> Floreana </td>
                    <td id="visit_point_7" class="isle_5 visit_point_7 visit_point" style="cursor: pointer;"> Mirador de la Baronesa </td>
                    <!-- Isle -->
                    <!-- Viesit Point -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="text-align: center" class=""> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_7 s_1 s_3 s_2 activity_3"> <span
                        class="fa fa-check">&nbsp;</span> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_7 s_1 s_3 s_2 activity_4"> <span
                        class="fa fa-check">&nbsp;</span> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_7 s_1 s_3 activity_5"> <span
                        class="fa fa-check">&nbsp;</span> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_7 s_1 s_2 s_3 activity_6"><span
                        class="fa fa-check">&nbsp;</span> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_7 s_1 s_3 s_2 activity_7"> <span
                        class="fa fa-check">&nbsp;</span> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_7 s_1 s_3 s_2 activity_8"> <span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Activities -->

                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class="isle_5 visit_point_7 ship_1 route_3">
                      11-D4Dom
                    </td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class="isle_5 visit_point_7 ship_2 route_5">14-D6Mie
                    </td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class="isle_5 visit_point_7 ship_3 route_9"> 15-D4Lu
                    </td>
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_7 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span
                        class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_7 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_7 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class=" isle_5 visit_point_7 specie_2 specie_4 specie_7 activity_3 activity_4 activity_5 activity_6 activity_7">
                      3 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_8" class="isle_5 visit_point_8 visit_point" style="cursor: pointer;"> Bah??a del Correo</td>
                    <!-- Viesit Point -->

                    <td style="text-align: center" class="isle_5 visit_point_8 activity_1"><span
                        class="fa fa-check">&nbsp; </span></td>


                    <td style="text-align: center" class="isle_5 visit_point_8 activity_2"><span
                        class="fa fa-check">&nbsp; </span></td>


                    <!-- Activities -->
                    <td style="text-align: center" class=""> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""><span class="">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""><span class="">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_8 activity_7"><span
                        class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_8 activity_8"><span
                        class="fa fa-check">&nbsp; </span></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_5 visit_point_8 ship_1 route_3"> 9-D4Dom
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_5 visit_point_8 ship_2 route_5"> 12-D6Mie
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_5 visit_point_8 ship_3 route_9"> 13-D4Lu
                    </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_8 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_8 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_8 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class=" activity_2 isle_5 visit_point_8 specie_2  specie_4 specie_7  activity_7 activity_1  activity_8">
                      3 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_39" class="isle_5 visit_point_39 visit_point" style="cursor: pointer;"> Punta
                      Cormorant </td>
                    <!-- Viesit Point -->

                    <td style="text-align: center" class=""> </td>
                    <!-- Activities -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="text-align: center" class=""><span class="">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""><span class="">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_39 activity_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_39 activity_8"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_5 visit_point_39 ship_1 route_3">
                      13-D4Dom</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_5 visit_point_39 ship_2 route_5">
                      16-D6Mie</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_5 visit_point_39 ship_3 route_9">
                      12-D4Lu
                    </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_39 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_39 specie_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_39 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_39 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_39 specie_6"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="  isle_5 visit_point_39 specie_2 specie_3 specie_4 specie_7  specie_6 activity_7 activity_8">
                      5</td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_9" class="isle_5 visit_point_9 visit_point" style="cursor: pointer;">
                      Islote Champion</td>
                    <!-- Viesit Point -->

                    <td style="text-align: center" class=""> <span
                        class="">&nbsp;</span> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_9 s_3 s_2 s_1 activity_2"> <span
                      class="fa fa-check">&nbsp;</span> </td>
                    <td style="text-align: center" class="isle_5 visit_point_9 activity_3 "><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_9 activity_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""><span class="">&nbsp; </span></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_5 visit_point_9 ship_1 route_3">
                      12-D4Dom</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_5 visit_point_9 ship_2 route_5">
                      15-D6Mie</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_5 visit_point_9 ship_3 route_9">
                      11-D4Lu</td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_9 specie_2"><span
                      class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_9 specie_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_9 specie_4"><span
                      class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_9 specie_7"><span
                      class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_9 specie_8"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="  isle_5 visit_point_9 specie_3  specie_8  specie_4 activity_4 activity_2 activity_3 specie_4 specie_2 specie_7">
                      5</td>
                    <!-- count Species per Viesit Point-->

                  </tr>

                  <tr>
                    <td id="visit_point_45" class="isle_5 visit_point_45 visit_point" style="cursor: pointer;">Loberia </td>
                    <!-- Viesit Point -->

                    <td style="text-align: center" class=""> <span
                        class="">&nbsp;</span> </td>
                    <!-- Activities -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="text-align: center" class="isle_5 visit_point_45 activity_3 "><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_45 activity_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_45 activity_5"><span
                      class="fa fa-check">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_45 activity_6"><span
                      class="fa fa-check">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""><span class="">&nbsp; </span></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_5 visit_point_45 ship_1 route_3">
                      10-D4Dom</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_5 visit_point_45 ship_2 route_5">
                      13-D6Mie</td>
                     
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="">
                      </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="font-size: 11px; text-align: center" class="isle_5 visit_point_45 ship_3 route_9">
                      14-D4Lu</td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span
                      class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_45 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_45 specie_3"><span
                      class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_45 specie_4"><span
                      class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span
                      class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_45 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span
                      class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_45 specie_9"><span
                      class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="  isle_5 visit_point_45 specie_3 specie_2  spacie_5 specie_4 activity_4  activity_3 specie_7 activity_6 activity_5 specie_9">
                      5 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td rowspan="2" id="isle_6" class="isle isle_6" style="cursor: pointer;"> Genovesa </td>
                    <td id="visit_point_10" class="isle_6 visit_point_10 visit_point" style="cursor: pointer;"> 
                      Bah??a Darwin
                    </td>
                    <!-- Isle -->
                    <!-- Viesit Point -->

                    <td style="text-align: center" class="isle_6 visit_point_10 activity_1"><span
                        class="fa fa-check">&nbsp; </span></td>

                    <td style="text-align: center" class="isle_6 visit_point_10 activity_2"><span
                        class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""><span class="">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_6 visit_point_10 activity_7"><span
                        class="fa fa-check">&nbsp; </span> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_6 visit_point_10 activity_8"><span
                        class="fa fa-check">&nbsp; </span></td>
                    <td style="font-size: 11px; text-align: center" class="isle_6 visit_point_10 ship_1 route_1"> 9-D4Jue
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_6 visit_point_10 ship_2 route_4"> 8-D4Jue
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_6 visit_point_10 ship_3 route_8"> 6-D3Mie
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_6 visit_point_10 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_6 visit_point_10 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_6 visit_point_10 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_6 visit_point_10 specie_8"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_6 visit_point_10 specie_12"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="  isle_6 visit_point_10 specie_12 activity_7 specie_2 specie_4 specie_7 specie_8 activity_1 activity_2 activity_8">
                      5 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_11" class="isle_6 visit_point_11 visit_point" style="cursor: pointer;"> El Barranco </td>
                    <!-- Viesit Point -->
                    <td style="text-align: center" class=""><span class="">&nbsp; </span> </td>

                    <td style="text-align: center" class="isle_6 visit_point_11 s_3 s_2 s_1 activity_2"><span
                        class="fa fa-check">&nbsp; </span> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_6 visit_point_11 s_3 s_2 s_1 activity_3 tour-step9 ">
                      <span class="fa fa-check">&nbsp; </span> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_6 visit_point_11 s_1 s_2 s_3 activity_4"><span
                        class="fa fa-check">&nbsp; </span> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_6 visit_point_11 activity_5"><span
                        class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_6 visit_point_11 s_1 s_3 activity_6"> <span
                        class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""> <span class="">&nbsp; </span> </td>

                    <td style="text-align: center" class="isle_6 visit_point_11 s_3 s_2 s_1  activity_8"> <span
                        class="fa fa-check">&nbsp; </span> </td>

                    <!-- Activities -->

                    <td style="font-size: 11px; text-align: center" class="isle_6 visit_point_11 ship_1 route_1"> 8-D4Jue
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_6 visit_point_11 ship_2 route_4"> 9-D4Jue
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_6 visit_point_11 ship_3 route_8"> 7-D3Mie
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_6 visit_point_11 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_6 visit_point_11 specie_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_6 visit_point_11 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_6 visit_point_11 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_6 visit_point_11 specie_8"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_6 visit_point_11 specie_11"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_6 visit_point_11 specie_12"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class=" isle_6 visit_point_11 activity_3 activity_6 specie_12 specie_3 specie_8 specie_4 activity_2 activity_8 specie_7 specie_11 specie_2 activity_4 activity_5">
                      7 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td rowspan="4" id="isle_7" class="isle isle_7" style="cursor: pointer;"> Isabela </td>
                    <td id="visit_point_12" class="isle_7 visit_point_12 visit_point" style="cursor: pointer;"> 
                      Bah??a Urbina</td>
                    <!-- Isle -->
                    <!-- Viesit Point -->
                    <td style="text-align: center" class="isle_7 visit_point_12 s_2 s_3 activity_1"> P </td>
                    <td style="text-align: center" class="isle_7 visit_point_12 s_2 s_3 activity_2"> P </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_7 visit_point_12 s_2 s_3 activity_7"> P </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_7 visit_point_12 s_2 s_3 activity_8"> P</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_7 visit_point_12 ship_2 route_5">
                      5-D3Dom </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_7 visit_point_12 specie_1 "><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_12 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_12 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_12 specie_5"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_12 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_12 specie_9"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_12 specie_10"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_12 specie_14"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center "
                      class="isle_7 visit_point_12 specie_1 specie_4 specie_2 activity_7 specie_5 specie_7 specie_9 specie_10 specie_14 activity_2 activity_1 activity_8">
                      8 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_13" class="isle_7 visit_point_13 visit_point" style="cursor: pointer;"> Caleta Tagus </td>
                    <!-- Viesit Point -->
                    <td style="text-align: center" class="isle_7 visit_point_13 s_2 s_3 activity_1"> P </td>
                    <td style="text-align: center" class="isle_7 visit_point_13 s_2 s_3 activity_2"> P </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_7 visit_point_13 s_2 s_3 activity_3"> P </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_7 visit_point_13 s_2 s_3 activity_4"> P </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_7 visit_point_13 s_2 s_3 activity_5"> P </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_7 visit_point_13 s_2 s_3 activity_6"> P </td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_7 visit_point_13 s_2 s_3 activity_8"> P </td>
                    <td style="text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_7 visit_point_13 ship_2 route_5">
                      6-D3Dom </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_7 visit_point_13 specie_1"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_13 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_13 specie_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_13 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_13 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_13 specie_8"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_13 specie_9"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_13 specie_14"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="isle_7 visit_point_13 activity_1 specie_1 specie_2 specie_3 activity_3 activity_8 specie_4 specie_7 specie_8 specie_9 specie_14 activity_2 activity_4 activity_5 activity_6">
                      8 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_14" class="isle_7 visit_point_14 visit_point" style="cursor: pointer;"> Punta
                      Vicente Roca </td>
                    <!-- Viesit Point -->
                    <td style="text-align: center" class="isle_7 visit_point_14 activity_1"><span
                        class="fa fa-check">&nbsp; </span></td>
                    <td style="text-align: center" class="isle_7 visit_point_14 activity_2"><span
                        class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_7 visit_point_14 activity_3"><span
                        class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_7 visit_point_14 s_1 s_2 s_3 activity_4"><span
                        class="fa fa-check">&nbsp; </span> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_7 visit_point_14 ship_1 route_3"> 3-D2Vie
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_7 visit_point_14 ship_2 route_5"> 3-D2Sa
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_7 visit_point_14 ship_3 route_7">
                      9-D4Dom </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_7 visit_point_14 specie_1"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_14 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_14 specie_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_14 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_14 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_14 specie_8"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_14 specie_11"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_14 specie_9"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_14 specie_14"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="activity_2 isle_7 visit_point_14  activity_1 specie_1 specie_2 specie_3 specie_4 specie_7 specie_8 specie_11 specie_9  specie_14 activity_3 activity_4">
                      9 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_41" class="isle_7 visit_point_41 visit_point" style="cursor: pointer;"> Punta
                      Moreno </td>
                    <!-- Viesit Point -->

                    <td style="text-align: center" class="isle_7 visit_point_41 s_3 activity_1"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_7 visit_point_41 s_3 activity_2"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_7 visit_point_41 s_3 activity_3"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_7 visit_point_41 s_3 activity_4"> I </td>
                    <!-- Activities -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_7 visit_point_41 ship_3 route_9">
                      16-D5Mar
                    </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_7 visit_point_41 specie_1"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_41 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_41 specie_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_41 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_41 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_41 specie_8"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_41 specie_6"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_7 visit_point_41 specie_9"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_41 specie_14"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="isle_7 visit_point_41 specie_1 specie_2 specie_3 specie_4 specie_7 specie_8 specie_6 specie_9 specie_1 specie_14 activity_1 activity_2 activity_3 activity_4">
                      9 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td id="isle_8" class="isle isle_8" style="cursor: pointer;"> Mosquera </td>
                    <td id="visit_point_15" class="isle_8 visit_point_15 visit_point tour-step3"
                      style="cursor: pointer;"> Islote Mosquera 
                    </td>
                    <!-- Isle -->
                    <!-- Viesit Point -->
                    <td style="text-align: center" class="isle_8 visit_point_15 activity_1 tour-step4">S</td>
                    <td style="text-align: center" class="isle_8 visit_point_15 activity_2">S</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_8 visit_point_15 activity_4">S</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_8 visit_point_15 activity_7">S</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_8 visit_point_15 activity_8">S</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_8 visit_point_15 ship_1 route_2"> 2-D1Vie
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_8 visit_point_15 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_8 visit_point_15 specie_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_8 visit_point_15 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_8 visit_point_15 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center "
                      class="isle_8 visit_point_15 specie_2 specie_3 specie_4 specie_7 specie_2 activity_7 activity_1 activity_4 activity_8">
                      4
                    </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td id="isle_9" class="isle isle_9" style="cursor: pointer;"> Plaza Sur </td>
                    <td id="visit_point_16" class="isle_9 visit_point_16 visit_point" style="cursor: pointer;"> Plaza Sur </td>
                    <!-- Isle -->
                    <!-- Viesit Point -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="text-align: center" class=""> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_9 visit_point_16 activity_8"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_9 visit_point_16 ship_1 route_2">
                      8-D3Dom </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_9 visit_point_16 ship_2 route_6"> 2-D1Jue
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_9 visit_point_16 ship_3 route_8">9-D4Jue
                    </td>
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>

                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_9 visit_point_16 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_9 visit_point_16 specie_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_9 visit_point_16 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_9 visit_point_16 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_9 visit_point_16 specie_8"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_9 visit_point_16 specie_10"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="isle_9 visit_point_16 specie_2 specie_3 specie_4 specie_7 specie_8 specie_10 activity_8">
                      6 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td id="isle_10" class="isle isle_10" style="cursor: pointer;"> Rabida </td>
                    <td id="visit_point_17" class="isle_10 visit_point_17 visit_point" style="cursor: pointer;">
                      Playa Roja </td>
                    <!-- Isle -->
                    <!-- Viesit Point -->

                    <td style="text-align: center" class="isle_10 visit_point_17 s_1 s_2 activity_1">S P</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_10 visit_point_17 s_1 s_2 activity_2">S P</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_10 visit_point_17 s_1 s_2 activity_3">S P</td>

                    <!-- Activities -->
                    <td style="text-align: center" class="isle_10 visit_point_17 s_1 s_2 activity_4">S P</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_10 visit_point_17 s_1 s_2 activity_5">S P</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_10 visit_point_17 s_1 s_2 activity_6">S P</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_10 visit_point_17 s_1 s_2 activity_7">S P</td>

                    <td style="text-align: center" class="isle_10 visit_point_17 s_1 s_2 activity_8">S P</td>

                    <td style="font-size: 11px; text-align: center" class="isle_10 visit_point_17 ship_1 route_1">
                      5-D3Mie </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center"
                      class="isle_10 visit_point_17 ship_2 route_5 tour-step14"> 7-D4Lu </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_10 visit_point_17 specie_1"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_10 visit_point_17 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_10 visit_point_17 specie_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_10 visit_point_17 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_10 visit_point_17 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_10 visit_point_17 specie_8"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_10 visit_point_17 specie_6"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_10 visit_point_17 specie_11"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center "
                      class="isle_10 visit_point_17 specie_11 specie_1 specie_2 specie_3 specie_4 specie_7 specie_6 activity_8 specie_8 specie_11 activity_1 activity_2 activity_3 activity_4 activity_5 activity_6 activity_7">
                      8 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td rowspan="6" id="isle_11" class="isle isle_11" style="cursor: pointer;"> San Cristobal </td>
                    <td id="visit_point_18" class="isle_11 visit_point_18 visit_point" style="cursor: pointer;">
                      Aeropuerto </td>
                    <!-- Isle -->
                    <!-- Viesit Point -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""><span class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_18 specie_2"><span
                      class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span
                        class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_18 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_18 specie_7 "><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_11 visit_point_18 specie_7 specie_4 specie_2"> 3 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_19" class="isle_11 visit_point_19 visit_point" style="cursor: pointer;"> Cerro
                      Brujo </td>
                    <!-- Viesit Point -->

                    <td style="text-align: center" class="isle_11 visit_point_19 s_2 s_3 activity_1 tour-step5"> P </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_11 visit_point_19 s_2 s_3 activity_2"> P </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_11 visit_point_19 s_2 s_3 activity_4"> P </td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_11 visit_point_19 s_2 s_3 activity_7"> P </td>
                    <td style="text-align: center" class="isle_11 visit_point_19 s_2 s_3 activity_8"> P</td>


                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_11 visit_point_19 ship_2 route_6">
                      8-D3Sa </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_19 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_19 specie_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_19 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_19 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_19 specie_8"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="isle_11 visit_point_19 specie_2 specie_3 specie_4 specie_7 specie_8 isle_11 activity_1 activity_2 activity_4  activity_7 activity_8">
                      5 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_43" class="isle_11 visit_point_43 visit_point" style="cursor: pointer;"> Punta
                      Pitt </td>
                    <!-- Viesit Point -->

                    <td style="text-align: center" class="isle_11 visit_point_43 s_2 s_3 s_1 activity_1"> <span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_11 visit_point_43 s_2 s_3 activity_2"><span
                        class="fa fa-check">&nbsp;</span> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_11 visit_point_43 s_1 s_3 activity_3"> S I <span
                        class="">&nbsp;</span></td> 
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_11 visit_point_43 s_2 s_1 s_3 activity_4"><span
                        class="fa fa-check">&nbsp;</span> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_11 visit_point_43 s_2 s_3 s_1 activity_5"><span
                        class="fa fa-check">&nbsp;</span> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_11 visit_point_43 s_2 s_3 s_1 activity_6"><span
                      class="fa fa-check">&nbsp;</span> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_11 visit_point_43 s_2 s_3 s_1 activity_7"><span
                        class="fa fa-check">&nbsp;</span> </td>


                    <td style="text-align: center" class="isle_11 visit_point_43 s_2 s_3 s_1 activity_8"><span
                        class="fa fa-check">&nbsp;</span> </td>


                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_11 visit_point_43 ship_1 route_2">
                      4-D2Sa</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_11 visit_point_43 ship_2 route_6">
                      6-D3Sa </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_11 visit_point_43 ship_3 route_9">
                      3-D2Sa </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_43 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_43 specie_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_43 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_43 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_43 specie_8"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_43 specie_11"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_43 specie_12"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="isle_11 visit_point_43 specie_8 activity_3 specie_2 specie_3 specie_4 activity_8 specie_7 isle_11 activity_8 activity_6 specie_8 specie_11 specie_12 activity_1 activity_2 activity_4 activity_5 activity_7">
                      7 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_20" class="isle_11 visit_point_20 visit_point" style="cursor: pointer;">
                      Centro de cr??a de tortugas	</td>
                    <!-- Viesit Point -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_11 visit_point_20 activity_8"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_11 visit_point_20 ship_1 route_2">
                      5-D2Sa </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_11 visit_point_20 ship_2 route_6">
                      4-D2Vie </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_11 visit_point_20 ship_3 route_9">
                      5-D2Sa </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_20 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_20 specie_5"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_11 visit_point_20 specie_4 specie_5 activity_8"> 2
                    </td>
                    <!-- count Species per Viesit Point-->

                  </tr>

                  <tr>
                    <td id="visit_point_21" class="isle_11 visit_point_21 visit_point" style="cursor: pointer;"> 
                      Islote Pitt</td>
                    <!-- Viesit Point -->
                    <td style="text-align: center" class=""><span class="">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_11 visit_point_21 activity_2"><span
                        class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_11 visit_point_21 activity_4"><span
                        class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""><span class="">&nbsp; </span></td>

                    <td style="font-size: 11px; text-align: center" class=""></td>

                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_11 visit_point_21 ship_1 route_2">
                      3-D2Sa </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_11 visit_point_21 ship_2 route_6">
                      7-D3Sa </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_11 visit_point_21 ship_3 route_9">
                      4-D2Sa </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_21 specie_2"><span
                      class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_21 specie_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_21 specie_4"><span
                      class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span
                      class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_21 specie_7"><span
                      class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_21 specie_8"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="isle_11 visit_point_21 specie_3  specie_8 activity_4 activity_2 specie_4 specie_2 specie_7">
                      5 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>

               

                  <tr>
                    <td id="visit_point_44" class="isle_11 visit_point_44 visit_point" style="cursor: pointer;"> Paseo por la ciudad </td>
                    <!-- Viesit Point -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="text-align: center" class=""><span class="">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""><span class="">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""><span class="">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""><span class="">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""><span class="">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""><span class="">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_11 visit_point_44 activity_8"><span
                        class="fa fa-check">&nbsp; </span></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_11 visit_point_44 ship_1 route_2">
                      6-D2Sa </td>
                    <td style="font-size: 11px; text-align: center" class="">
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_11 visit_point_44 ship_2 route_6">
                      5-D2Vie </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_11 visit_point_44 ship_3 route_9">
                      6-D2Sa </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_44 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span
                        class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_44 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_44 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span
                        class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span
                        class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="isle_11 visit_point_44 specie_2 specie_4 specie_7   activity_8">
                      3 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td rowspan="9" id="isle_12" class="isle isle_12 tour-step2" style="cursor: pointer;"> Santa Cruz
                    </td>

                  </tr>

                  <tr>
                    <td rowspan="" id="visit_point_23" class="isle_12 visit_point_23 visit_point"
                      style="cursor: pointer;"> Los Gemelos </td>
                    <!-- Viesit Point -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_12 visit_point_23 activity_8"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Activities -->

                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_23 ship_1 route_2">
                      10-D4Lu </td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class="">
                       </td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_23 ship_2 route_5">
                      10-D5Mar </td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class="">
                    </td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_23 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_12 visit_point_23  specie_4 activity_8"> 1 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr class="d-none">
                    <td id="visit_point_24" class="isle_12 visit_point_24 visit_point" style="cursor: pointer;">
                      Playa Garrapatero </td>
                    <!-- Viesit Point -->
                    <td style="text-align: center" class="isle_12 visit_point_24 s_2 s_3 activity_1 tour-step8"> S <span
                        class="">&nbsp;</span></td>
                    <td style="text-align: center" class="&gt;
                                    &lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
                                    &lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
                                    &lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_12 visit_point_24 s_1 s_3 activity_5"> S <span
                        class="">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
                                    &lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_12 visit_point_24 s_2 s_1 s_3 activity_7"> S <span
                        class="">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_12 visit_point_24 s_1 s_2 s_3 activity_8"> S <span
                        class="">&nbsp;</span></td>
                    <!-- Activities -->

                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_24 ship_1 route_2">
                      11-D4Lu </td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center"
                      class="isle_12 visit_point_24 specie_4 "><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center"
                    class="isle_12 visit_point_24 specie_7 "><span
                      class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center"
                    class=""><span
                      class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center"
                    class="isle_12 visit_point_24 specie_6 "><span
                      class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="isle_12 visit_point_24 specie_4 activity_5 activity_7 activity_8 specie_6 specie_7"> 3 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_25" class="isle_12 visit_point_25 visit_point" style="cursor: pointer;"> Tortuga
                      Bay </td>
                    <!-- Viesit Point -->
                    <td style="text-align: center" class="isle_12 visit_point_25 s_2 s_3 activity_1"> S <span
                        class="">&nbsp;</span></td>
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_12 visit_point_25 s_1 s_3 activity_5"> S <span
                        class="">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_12 visit_point_25 s_2 s_1 s_3 activity_7"> S <span
                        class="">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_12 visit_point_25 s_2 s_1 s_3 activity_8"> S <span
                        class="">&nbsp;</span></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_25 ship_1 route_3">7-D3Sa
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_25 specie_4 "><span
                        class="fa fa-check">&nbsp; </span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_25 specie_7 "><span
                        class="fa fa-check">&nbsp; </span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="isle_12 activity_5 visit_point_25 specie_4 specie_7 activity_7 activity_8"> 2 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_26" class="isle_12 visit_point_26 visit_point" style="cursor: pointer;"> ECHD
                    </td>
                    <!-- Viesit Point -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_12 visit_point_26 s_2 s_1 s_3 activity_8"> <span
                        class="fa fa-check">&nbsp;</span></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_26 ship_1 route_2">
                      9-D4Lu </td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_26 ship_1 route_3">
                      5-D3Sa </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_26 ship_2 route_5">
                      9-D5Mar </td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_26 ship_2 route_6">
                      11-D5Lu </td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_26 ship_3 route_7">
                      2-D1Jue </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_26 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_26 specie_5"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_26 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_26 specie_10"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="isle_12 visit_point_26 specie_4 specie_5 specie_7 specie_10 activity_8"> 4 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>

                  <tr>
                    <td id="visit_point_28" class="isle_12 visit_point_28 visit_point" style="cursor: pointer;"> Cerro Drag??n </td>
                    <!-- Viesit Point -->
                    <td style="text-align: center" class="isle_12 visit_point_28 s_2 s_3 activity_1"> <span
                        class="fa fa-check">&nbsp;</span></td>
                    <td style="text-align: center" class="isle_12 visit_point_28 s_2 s_3 s_1 activity_2"> <span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""> <span
                        class="">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""> <span class="">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_12 visit_point_28 s_1 s_2 s_3 activity_7"> <span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_12 visit_point_28 s_2 s_3 s_1 activity_8"> <span
                        class="fa fa-check">&nbsp;</span></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_28 ship_1 route_3">
                      2-D1Jue </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_28 ship_2 route_5">
                      8-D4Lu </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_28 ship_3 route_7">
                      7-D3Sa </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_28 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_28 specie_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_28 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_28 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_28 specie_8"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_28 specie_6"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_28 specie_10"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="isle_12 visit_point_28 specie_2 activity_1 specie_3 activity_8 specie_8 specie_4 specie_7 specie_6 specie_10 activity_2  activity_7">
                      7 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_29" class="isle_12 visit_point_29 visit_point" style="cursor: pointer;"> Playa Las
                      Bachas  </td>
                    <!-- Viesit Point -->

                    <td style="text-align: center" class="isle_12 visit_point_29 s_1 s_3 activity_1"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_12 visit_point_29 s_1 s_3 activity_2"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_12 visit_point_29 s_1 s_3 activity_7">S I </td>

                    <td style="text-align: center" class="isle_12 visit_point_29 s_1 s_3 activity_8">S I </td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_29 ship_1 route_1">
                      2-D1Lu </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_29 ship_3 route_9">
                      2-D1Vie </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_29 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_29 specie_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_29 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_29 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_29 specie_6"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="isle_12 visit_point_29 specie_2 specie_3 specie_4 specie_7 specie_6 activity_1 activity_2 activity_7 activity_8">
                      5 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_30" class="isle_12 visit_point_30 visit_point" style="cursor: pointer;"> Reserva de tortugas gigantes	 </td>
                    <!-- Viesit Point -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_12 visit_point_30 activity_8"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_30 ship_1 route_1">
                      10-D5Vie </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_30 ship_1 route_3">6-D3Sa
                    </td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_30 ship_2 route_4">
                      2-D1Lu </td>
                    <td style="font-size: 11px; text-align: center" class="">
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_30 ship_3 route_8">
                      2-D1Lu</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_30 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_30 specie_5"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_12 visit_point_30 specie_4 specie_5 activity_8"> 2 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td rowspan="" id="visit_point_42" class="isle_12 visit_point_42 visit_point"
                      style="cursor: pointer;"> Paseo por la ciudad </td>
                    <!-- Viesit Point -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_12 visit_point_42 activity_8"><span
                        class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->

                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_42 ship_1 route_2">
                      12-D4Lu </td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_42 ship_1 route_3">
                      8-D3SA </td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_42 ship_2 route_5">
                      11-D5Mar </td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_42 ship_3 route_7">
                      3-D1Jue </td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_42 ship_3 route_8">
                      3-D1Lu </td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_42 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_42 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_42 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_12 visit_point_42 specie_2 specie_4 specie_7 activity_8">
                      3 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>


                  <tr>
                    <td id="isle_17" class="isle isle_17" style="cursor: pointer;">  Islote Ed??n </td>
                    <td id="visit_point_27" class="isle_17 visit_point_27 visit_point" style="cursor: pointer;">
                      Islote Ed??n  </td>
                    <!-- Isle -->
                    <!-- Viesit Point -->
                    <td style="text-align: center" class="isle_17 visit_point_27 activity_1"><span
                        class="fa fa-check">&nbsp; </span></td>
                    <td style="text-align: center" class="isle_17 visit_point_27 activity_2"><span
                        class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_17 visit_point_27 activity_3"><span
                        class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_17 visit_point_27 activity_4"><span
                        class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_17 visit_point_27 activity_5"><span
                        class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_17 visit_point_27 activity_6"><span
                        class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_17 visit_point_27 activity_8"><span
                        class="fa fa-check">&nbsp; </span></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_17 visit_point_27 ship_1 route_2">16-D6Mie</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_17 visit_point_27 ship_2 route_4">
                      3-D2Mar </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="">
                    </td>
                    <td style="font-size: 11px; text-align: center" class="isle_17 visit_point_27 ship_3 route_9">
                      18-D6Mie </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""><span class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_17 visit_point_27 specie_2"><span
                      class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_17 visit_point_27 specie_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_17 visit_point_27 specie_4"><span
                      class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_17 visit_point_27 specie_7"><span
                      class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_17 visit_point_27 specie_8"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <td style="text-align: center" class=" "><span class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span class=" " data-toggle="tooltip"
                        data-placement="bottom" data-original-title="Bainbridge">&nbsp;</span>
                    </td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="isle_17 visit_point_27 specie_3 specie_4 specie_2 specie_8 specie_7 activity_6 activity_4 activity_1 activity_3 activity_5 activity_2 activity_8">
                      5</td>
                    <!-- count Species per Viesit Point-->

                  </tr>

                  <tr>
                    <td id="isle_13" class="isle isle_13" style="cursor: pointer;"> Santa F?? </td>
                    <td id="visit_point_22" class="isle_13 visit_point_22 visit_point" style="cursor: pointer;">
                      Santa F?? </td>
                    <!-- Isle -->
                    <!-- Viesit Point -->

                    <td style="text-align: center" class="isle_13 visit_point_22 activity_1"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_13 visit_point_22 activity_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_13 visit_point_22 activity_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_13 visit_point_22 activity_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_13 visit_point_22 activity_5"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_13 visit_point_22 activity_6"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""> </td>
                    <td style="text-align: center" class="isle_13 visit_point_22 activity_8"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_13 visit_point_22 ship_1 route_2">7-D3Su
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="">
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_13 visit_point_22 ship_2 route_6">3-D2Vie
                    </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_13 visit_point_22 ship_3 route_8">
                      8-D4Jue </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_13 visit_point_22 specie_1"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_13 visit_point_22 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_13 visit_point_22 specie_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_13 visit_point_22 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_13 visit_point_22 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_13 visit_point_22 specie_8"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <td style="text-align: center" class=" "><span class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span class=" " data-toggle="tooltip"
                        data-placement="bottom" data-original-title="Bainbridge">&nbsp;</span>
                    </td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_13 visit_point_22 specie_15"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="isle_13 activity_1 visit_point_22 specie_1 specie_2 activity_6 activity_5 activity_2 activity_8 activity_3 specie_3 specie_7 specie_15 specie_4 specie_8 activity_4">
                      7 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>



                  <tr>
                    <td rowspan="4" id="isle_14" class="isle isle_14" style="cursor: pointer;"> Santiago </td>
                    <td id="visit_point_32" class="isle_14 visit_point_32 visit_point" style="cursor: pointer;">
                      Bah??a Sullivan 
                    </td>
                    <!-- Isle -->
                    <!-- Viesit Point -->

                    <td style="text-align: center" class="isle_14 visit_point_32 s_2 s_3 activity_1"> P I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_14 visit_point_32 s_2 s_3 activity_2"> P I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_14 visit_point_32 s_2 s_3 activity_4"> P I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_14 visit_point_32 s_2 s_3 activity_7"> P I </td>
                    <td style="text-align: center" class="isle_14 visit_point_32 s_2 s_3 activity_8"> P I </td>

                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_14 visit_point_32 ship_2 route_4">
                      7-D3Mie </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_14 visit_point_32 ship_3 route_7">
                      6-D2Vie </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_14 visit_point_32 specie_1"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_32 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_32 specie_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_32 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_32 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="isle_14 visit_point_32 specie_1 activity_8 specie_2 specie_3 activity_4 specie_4 specie_7  activity_1 activity_2  activity_7">
                      5 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_33" class="isle_14 visit_point_33 visit_point" style="cursor: pointer;">
                      Caleta Bucanero </td>
                    <!-- Viesit Point -->
                    <td style="text-align: center" class="isle_14 visit_point_33 s_1 s_3 activity_1"> S I </td>

                    <!-- Activities -->
                    <td style="text-align: center" class="isle_14 visit_point_33 s_1 s_3 activity_2"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_14 visit_point_33 s_1 s_3 activity_3"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_14 visit_point_33 s_1 s_3 activity_4"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_14 visit_point_33 s_1 s_3 activity_5"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_14 visit_point_33 s_1 s_3 activity_6"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>

                    <td style="text-align: center" class=""> </td>
                    <td style="font-size: 11px; text-align: center" class="isle_14 visit_point_33 ship_1 route_1">
                      3-D2Mar </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_14 visit_point_33 ship_3 route_7">
                      8-D3Sa</td>
                    <td style="font-size: 11px; text-align: center" class="">
                      </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_14 visit_point_33 specie_1"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_33 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_33 specie_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_33 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_33 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_33 specie_8"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_33 specie_11"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_33 specie_10"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="isle_14 visit_point_33 specie_1 activity_1 specie_2 activity_5 activity_6 specie_3  specie_4 specie_7 specie_8 specie_11 specie_10  activity_2 activity_3 activity_4">
                      8 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_34" class="isle_14 visit_point_34 visit_point" style="cursor: pointer;"> Puerto
                      Egas </td>
                    <!-- Viesit Point -->

                    <td style="text-align: center" class="isle_14 visit_point_34 s_1 s_3 activity_1"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_14 visit_point_34 s_1 s_3 activity_2"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_14 visit_point_34 s_1 s_3 activity_7"> S I </td>

                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_14 visit_point_34 ship_1 route_1">
                      4-D2Mar </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_14 visit_point_34 ship_3 route_8">
                      4-D2Mar </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_14 visit_point_34 specie_1"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_34 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_34 specie_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_34 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_34 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_34 specie_11"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_34 specie_10"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="isle_14 visit_point_34 specie_1 specie_2 specie_3 specie_4 specie_7 specie_11 specie_10 activity_1 activity_2 activity_7">
                      7 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>



                  </tr>
                  <tr>
                    <td id="isle_15" class="isle isle_15" style="cursor: pointer;"> Seymour Norte  </td>
                    <td id="visit_point_35" class="isle_15 visit_point_35 visit_point" style="cursor: pointer;">  Seymour Norte
                      </td>
                    <!-- Isle -->
                    <!-- Viesit Point -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="text-align: center" class="isle_15 visit_point_35 activity_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_15 visit_point_35 activity_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""> </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_15 visit_point_35 activity_8"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_15 visit_point_35 ship_1 route_2">
                      17-D6Mie </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_15 visit_point_35 ship_2 route_5">
                      2-D1Vie </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_15 visit_point_35 ship_3 route_9">
                      19-D6Mie </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_15 visit_point_35 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_15 visit_point_35 specie_3"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_15 visit_point_35 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_15 visit_point_35 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_15 visit_point_35 specie_8"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_15 visit_point_35 specie_11"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_15 visit_point_35 specie_10"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="isle_15 visit_point_35 specie_2 specie_3 specie_4 specie_7 specie_8 specie_11 specie_10 activity_4 activity_2 activity_8">
                      7 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>
                  <tr>
                    <td id="isle_16" class="isle isle_16" style="cursor: pointer;"> Sobrero Chino </td>
                    <td id="visit_point_36" class="isle_16 visit_point_36 visit_point" style="cursor: pointer;">
                     Islote Sombrero Chino</td>
                    <!-- Isle -->
                    <!-- Viesit Point -->

                    <td style="text-align: center" class="isle_16 visit_point_36 s_2 s_3 activity_1"> P I
                    </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_16 visit_point_36 s_2 s_3 activity_2"> P I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_16 visit_point_36 s_2 s_3 activity_3"> P I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_16 visit_point_36 s_2 s_3 activity_4"> P I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_16 visit_point_36 s_3 s_2 activity_5"> P I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_16 visit_point_36 s_2 s_3 activity_6"> P I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_16 visit_point_36 s_2 s_3 activity_7"> P I</td>
                    <td style="text-align: center" class="isle_16 visit_point_36 s_2 s_3 activity_8"> P I </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="">
                      </td>
                      <td style="font-size: 11px; text-align: center" class="isle_16 visit_point_36 ship_2 route_5">
                        4-D2Mar </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_16 visit_point_36 ship_3 route_8">
                      5-D2Mar </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_16 visit_point_36 specie_1"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_16 visit_point_36 specie_2"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_16 visit_point_36 specie_4"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_16 visit_point_36 specie_7"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=" ">
                    <td style="text-align: center" class=" "><span class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span class="" data-toggle="tooltip" data-placement="bottom"
                        data-original-title="Bainbridge">&nbsp;</span>
                    </td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_16 visit_point_36 specie_9"><span
                        class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""><span class="">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"
                      class="isle_16 visit_point_36 specie_1 specie_2 activity_6 activity_3 activity_8 activity_2 activity_7 specie_9 specie_7  specie_4 activity_4 activity_1 activity_5">
                      5 </td>
                    <!-- count Species per Viesit Point-->

                  </tr>

                </tbody>
              </table>
              <div class="row">
                <div class="col-md-12">
                  <div align="right">
                  
                  </div>
                  <div align="center">
                    <center>

                      <!-- Direccion erronea-->

                      <!-- Creacion del boton-->

                      <a class="weatherwidget-io" href="https://forecast7.com/es/n0d95n90d97/galapagos-islands/"
                      data-label_1="ISLAS GAL??PAGOS" data-font="Roboto Slab" data-icons="Climacons Animated"
                      data-theme="weather_one">GAL??PAGOS ISLANDS</a>
                    <script>
                      !function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = 'https://weatherwidget.io/js/widget.min.js'; fjs.parentNode.insertBefore(js, fjs); } }(document, 'script', 'weatherwidget-io-js');
                    </script>


                      <!--<button type="button" name="button">Log out</button>-->

                    </center>
                  </div>
                </div>
              </div>
              <!-- FIN INGLES -->

            </div>
            <!-- /TAB ENGLISH -->


            <!-- / TAB SPANISH -->

          </div>
          <!-- / TABS -->

        </div>
      </div>
    </div>



    </div>
    </div>
    </div>


    <script src="build/vendor/bootstrap.min.js"></script>
    <script src="build/js/bootstrap-tour.js"></script>
    <script src="build/js/tour.js"></script>
    <script type="application/javascript">
      /* On Ready */
      $(document).ready(function () {
        visit_point_id = '';
        $table_container = $('#metro_big15');
        element_focus = '';

        $('.isle, .visit_point, .activity, .route, .ship, .specie').css('cursor', 'pointer');

        _clickIsle();
        _clickFrsitPoint();
        _clickActivity();
        _clickShip();

        _clickRoute();
        _clickSpecie();
      });

      function _clickIsle() {
        $('.isle').on('click', function (e) {
          _clear();

          if ($(this).prop('id') !== element_focus) {
            var isle_class = $(this).prop('class').split(' ')[1];
            element_focus = isle_class;

            _highlight($('.' + isle_class));

            var elements = $table_container.find('.' + isle_class);

            $.each(elements, function (s_index, s_element) {
              if (s_index > 0) {
                var classes = s_element.className.split(' ');

                $.each(classes, function (class_i, class_v) {
                  if (class_v.includes('visit_point_')) {
                    _highlight($('#' + class_v));
                    visit_point_id = class_v.replace('visit_point_', '');

                  } else if (class_v.includes('activity_') || class_v.includes('specie_') ||
                    class_v.includes('ship_') || class_v.includes('route_')) {

                    _highlight($('#' + class_v));
                    _highlight($('.visit_point_' + visit_point_id + '.' + class_v));

                  }
                });
              }
            });

            _highlight($(this), true);

          } else
            element_focus = '';
        });
      }

      function _clickFrsitPoint() {
        $('.visit_point').on('click', function (e) {
          _clear();

          if ($(this).prop('id') !== element_focus) {
            visit_point_id = $(this).prop('id');
            var visit_point_class = $(this).prop('class').split(' ')[1];
            element_focus = visit_point_class;

            _highlight($('.' + visit_point_class));

            var elements = $table_container.find('.' + visit_point_class);

            $.each(elements, function (s_index, s_element) {
              if (s_index > 0) {
                var classes = s_element.className.split(' ');

                $.each(classes, function (class_i, class_v) {
                  if (class_v.includes('isle_') || class_v.includes('activity_') || class_v.includes('specie_') ||
                    class_v.includes('ship_') || class_v.includes('route_')) {

                    _highlight($('#' + class_v));
                    _highlight($('.visit_point_' + visit_point_id + '.' + class_v));
                  }
                });
              }
            });

            _highlight($(this), true);

          } else
            element_focus = '';
        });
      }

      function _clickActivity() {
        $('.activity').on('click', function (e) {
          _clear();

          if ($(this).prop('id') !== element_focus) {
            //get the activity class for the selected item. You can find it in the key = 1 of the array of classes
            var activity_class = $(this).prop('class').split(' ')[1];
            element_focus = activity_class;

            //highlight the cells with that activity class
            _highlight($('.' + activity_class));

            //find other elements with the same activity class
            var elements = $table_container.find('.' + activity_class);

            //loop elements with the same activity class
            $.each(elements, function (s_index, s_element) {

              if (s_index > 0) { //exclude the selected element b/c it was already highlighted

                //find all the classes of the current cell
                var classes = s_element.className.split(' ');

                $.each(classes, function (class_i, class_v) {

                  if (class_v.includes('isle_')) { //highlight the isle

                    _highlight($('#' + class_v));
                  } else if (class_v.includes('visit_point_')) { //highlight the visit point but taking in account some restrictions

                    _highlight($('#' + class_v));

                    //get the ID of the visit point
                    visit_point_id = class_v.replace('visit_point_', '');

                    //find all the cells with the visit_point class
                    var vp_elements = $table_container.find('.' + class_v);
                    var exclusive_ships = [];

                    $.each(vp_elements, function (vp_i, vp_v) {

                      if (vp_i > 0) { // exclude current cell (already highlighted

                        //get all cell classes
                        var vp_classes = vp_v.className.split(' ');

                        $.each(vp_classes, function (vp_class_i, vp_class_v) {

                          //todo: make ships dynamic (ship_1, ship_2 ...)
                          //if the activity cell contains activity_class (i.e. activity_1) or any ship_ class then take care of highlighting other cells
                          if (vp_classes.includes(activity_class) || vp_classes.includes('ship_1') ||
                            vp_classes.includes('ship_2') || vp_classes.includes('ship_3')) {

                            $.each(vp_classes, function (vp_class_i, vp_class_v) {

                              //add to the exclusive_ships array the ship ID (s_1, s_2...) of the activity cell, if any.
                              if (vp_class_v.includes('s_')) {
                                exclusive_ships.push(vp_class_v.replace('s_', ''));

                              } else if (vp_class_v.includes('ship_')) {
                                //if this is a visit_point_route cell then make sure it is only highlighted if it belongs to some of the exclusive_ships
                                if (exclusive_ships.length > 0) {
                                  var id = vp_class_v.replace('ship_', '');

                                  // .. otherwise do not highlight it
                                  if (!exclusive_ships.includes(id))
                                    return false;
                                }

                                _highlight($('#' + vp_class_v));
                                _highlight($('.visit_point_' + visit_point_id + '.' + vp_class_v));

                              } else if (vp_class_v.includes('route_')) {
                                _highlight($('#' + vp_class_v));
                                _highlight($('.visit_point_' + visit_point_id + '.' + vp_class_v));
                              }
                            });
                          }
                        });
                      }
                    });
                  }
                });
              }
            });

            _highlight($(this), true);

          } else
            element_focus = '';
        });
      }

      function _clickShip() {
        $('.ship').on('click', function (e) {
          _clear();

          if ($(this).prop('id') !== element_focus) {
            var ship_class = $(this).prop('class').split(' ')[1];
            _highlight($('.' + ship_class));
            var ship_id = ship_class.replace('ship_', '');
            element_focus = ship_class;

            var elements = $table_container.find('.' + ship_class);

            $.each(elements, function (s_index, s_element) {
              if (s_index > 0) {
                var classes = s_element.className.split(' ');

                $.each(classes, function (class_i, class_v) {
                  if (class_v.includes('isle_')) {
                    _highlight($('#' + class_v));

                  } else if (class_v.includes('visit_point_')) {
                    visit_point_id = class_v.replace('visit_point_', '');
                    _highlight($('#' + class_v));

                    var vp_elements = $table_container.find('.' + class_v);

                    $.each(vp_elements, function (vp_i, vp_v) {
                      var vp_classes = vp_v.className.split(' ');
                      var exclusive_ships = [];

                      $.each(vp_classes, function (vp_class_i, vp_class_v) {
                        if (vp_class_v.includes('s_')) {
                          exclusive_ships.push(vp_class_v.replace('s_', ''));

                        } else if (vp_class_v.includes('activity_')) {
                          if (exclusive_ships.length > 0) {
                            if (!exclusive_ships.includes(ship_id))
                              return false;
                          }

                          _highlight($('#' + vp_class_v));
                          _highlight($('.visit_point_' + visit_point_id + '.' + vp_class_v));

                        } else if (vp_class_v.includes('specie_')) {
                          _highlight($('#' + vp_class_v));
                          _highlight($('.visit_point_' + visit_point_id + '.' + vp_class_v));
                        }
                      });
                    });
                  }
                });
              }
            });

            _highlight($(this), true);

          } else
            element_focus = '';
        });
      }

      function _clickRoute() {
        $('.route').on('click', function (e) {
          _clear();

          if ($(this).prop('id') !== element_focus) {
            var route_class = $(this).prop('class').split(' ')[1];
            _highlight($('.' + route_class));
            var ship_id = $(this).prop('class').split(' ')[2].replace('ship_', '');
            element_focus = route_class;

            var elements = $table_container.find('.' + route_class);

            $.each(elements, function (s_index, s_element) {
              if (s_index > 0) {
                var classes = s_element.className.split(' ');

                $.each(classes, function (class_i, class_v) {
                  if (class_v.includes('isle_') || class_v.includes('ship_')) {
                    _highlight($('#' + class_v));

                  } else if (class_v.includes('visit_point_')) {
                    visit_point_id = class_v.replace('visit_point_', '');
                    _highlight($('#' + class_v));

                    var vp_elements = $table_container.find('.' + class_v);

                    $.each(vp_elements, function (vp_i, vp_v) {
                      var vp_classes = vp_v.className.split(' ');
                      var exclusive_ships = [];


                      $.each(vp_classes, function (vp_class_i, vp_class_v) {
                        if (vp_class_v.includes('s_')) {
                          exclusive_ships.push(vp_class_v.replace('s_', ''));

                        } else if (vp_class_v.includes('activity_')) {
                          if (exclusive_ships.length > 0) {
                            if (!exclusive_ships.includes(ship_id))
                              return false;
                          }

                          _highlight($('#' + vp_class_v));
                          _highlight($('.visit_point_' + visit_point_id + '.' + vp_class_v));

                        } else if (vp_class_v.includes('specie_')) {
                          _highlight($('#' + vp_class_v));
                          _highlight($('.visit_point_' + visit_point_id + '.' + vp_class_v));
                        }
                      });
                    });
                  }
                });
              }
            });

            _highlight($(this), true);

          } else
            element_focus = '';
        });
      }

      function _clickSpecie() {
        $('.specie').on('click', function (e) {
          _clear();

          if ($(this).prop('id') !== element_focus) {
            var specie_class = $(this).prop('class').split(' ')[1];
            _highlight($('.' + specie_class));
            element_focus = specie_class;

            var elements = $table_container.find('.' + specie_class);

            $.each(elements, function (s_index, s_element) {
              if (s_index > 0) {
                var classes = s_element.className.split(' ');

                $.each(classes, function (class_i, class_v) {
                  if (class_v.includes('isle_')) {
                    _highlight($('#' + class_v));

                  } else if (class_v.includes('visit_point_')) {
                    visit_point_id = class_v.replace('visit_point_', '');
                    _highlight($('#' + class_v));

                    var vp_elements = $table_container.find('.' + class_v);

                    $.each(vp_elements, function (vp_i, vp_v) {
                      if (vp_i > 0) {
                        var vp_classes = vp_v.className.split(' ');

                        $.each(vp_classes, function (vp_class_i, vp_class_v) {

                          if (vp_class_v.includes('route_') || vp_class_v.includes('ship_')) {

                            _highlight($('#' + vp_class_v));
                            _highlight($('.visit_point_' + visit_point_id + '.' + vp_class_v));
                          }
                        });
                      }
                    });
                  }
                });
              }
            });

            _highlight($(this), true);

          } else
            element_focus = '';
        });
      }

      function _highlight(element, current = false) {
        let this_color = '#FFAE78';
        let related_color = '#7ED9A4';

        if (current === false)
          element.css("background-color", related_color);
        else
          element.css("background-color", this_color);
      }

      function _clear() {
        $('td:not(.do_not_touch)').css("background-color", '');
      }
    </script>



    <!-- / TABS -->
    <script src="build/js/bundle.min.js"></script>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

  </body>

  <footer class="footer seccion">

    <p class="copyright">Todos los derechos reservados
      <?php echo date('Y'); ?>Metropolitan Touring &copy; | V2022.11.30

    </p>
  </footer>

</html>