<?php
  include('config/setup.php');
  include('config/data.php');
  //Datos

$currentSlab = getDeckData("current_slab");

  if(isset($_POST["submit"])){
    echo "Le dio click a ".$_POST["submit"];
    switch($_POST["submit"]){
      case "slab":
        $_SESSION["slabId"] = $_POST["slabId"];
        header("Location: slab.php");
        break;
      case "descubre":
        setcookie("slab_id", $_POST["slabId"], time() + (60 * 60 * 24 * 7));
        header("Location: descubre.php");
        break;
      case "demuestra":
        setcookie("slab_id", $_POST["slabId"], time() + (60 * 60 * 24 * 7));
        header("Location: demuestra.php");
        break;
      case "autoval":
        setcookie("slab_id", $_POST["slabId"], time() + (60 * 60 * 24 * 7));
        header("Location: autoev.php");
        break;
    }

    
  }

  //Trackers
  $trackers = getTrackersDeck();
  $tracker_1 = $trackers["tracker_1"];
  $tracker_2 = $trackers["tracker_2"];

  if(isset($_COOKIE["tracker_1"])){
    if($trackers["tracker_1"]==0){
      setTracker("tracker_1");
    }
  }

  if(isset($_COOKIE["tracker_2"])){
    if($trackers["tracker_2"]==0){
      setTracker("tracker_2");
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Bootsrap-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <!--CSS-->
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/deck.css" />
    
    <title>Deck</title>
  </head>
  <body>
    <input id="value_tracker_1" type="hidden"  name="value_tracker_1" value=<?php echo $tracker_1; ?>>
    <input id="value_tracker_2" type="hidden"  name="value_tracker_2" value=<?php echo $tracker_2; ?>>
    <header class="pb-5">
      <div class="container w-75 menu">
        <nav>
          <a href="index.php" class="logo">
            <img src="img/logos/lxlab.png" alt="Logo" />
          </a>
        </nav>
      </div>
      <div class="container w-75">
        <!--BEGIN: Intro-->
        <div class="row mt-4">
          <div class="col-lg">
            <!--Título-->
            <h1 class="heading blue-text"> <?php echo $deckTitle; ?></h1>
            <p class="body">
              <?php echo $deckIntro?>
            </p>
            <h3 class="subtitle "><?php echo $deckWelcome?></h3>
            <!--Características-->
            <div class="detalles mt-4">
              <h4 class="body">Características del curso</h4>
              <ul class="body">
                <li>Duración: <?php echo $duration?></li>
                <li>Nivel: <?php echo $level?></li>
                <li>Enfoque: <?php echo $focus?></li>
                <li>Experiencia de aprendizaje: <?php echo $learningExp?></li>
                <li>Requerimientos: <?php echo $requirements?></li>
              </ul>
            </div>
          </div>
          <div class="col-lg align-self-center intro intro-video">
            <div class="heading-img">
              <img class="video-block" src="img/intro.jpg" alt="video" />
              <img class="bg-img" src="img/shapes/heading.png" alt="heading png">
            </div>
            <!--BEGIN: Botones-->
            <div class="d-grid gap-3 d-md-flex justify-content-md-end mt-5">
              <!--BEGIN: Carta compromiso-->
              <button id="tracker_1" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cartaModal">
                Carta compromiso
              </button>
              <!-- Modal -->
              <div class="modal fade" id="cartaModal" tabindex="-1" aria-labelledby="cartaModalLabel" aria-hidden="true">
                <div class="modal-dialog mw-75">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-center" id="cartaModalLabel">Carta compromiso de política normativa</h5>
                    </div>
                    <div class="modal-body">
                      <p>La acreditación de este programa responde a un modelo de aprendizaje por competencias, de ahí la importancia de que conozcas y consideres los elementos que definen la normativa.
                        <br><br>Los <strong>criterios</strong> básicos para acreditar tu experiencia de aprendizaje son:
                      </p>
                      <ul>
                        <li>Resolver las actividades indicadas de acuerdo con las especificaciones correspondientes</li>
                        <li>Completar los formatos que se soliciten</li>
                        <li>Solucionar los ejercicios de valoración que se presenten</li>
                      </ul>
                      <p><strong>En ningún caso y por ninguna circunstancia se aceptarán situaciones como el plagio, ya sea copia de evidencias realizadas por otro aprendedor o copia total o parcial de documentos, video o imágenes de la red.</strong>
                      <br><br>Te invitamos a realizar un ejercicio de honestidad y hacer de esta experiencia de aprendizaje una oportunidad para identificar tanto tus fortalezas, como para trabajar en las áreas que requieren ser reforzadas. Al seleccionar la casilla “Acepto” estarás formalizando tu compromiso para observar las normativas y dar lo mejor de ti.</p>
                    </div>
                    <div class="modal-footer">
                      <button id="carta-aceptar" type="button" class="btn btn-primary" data-bs-dismiss="modal">Acepto</button>
                    </div>
                  </div>
                </div>
              </div>
              <!--END: Carta compromiso-->
              <!--BEGIN: Diagnóstico-->
              <button id="tracker_2" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#diagnosticoModal">
                Diagnóstico
              </button>
              <!-- Modal -->
              <div class="modal fade" id="diagnosticoModal" tabindex="-1" aria-labelledby="diagnosticoModalLabel" aria-hidden="true">
                <div class="modal-dialog mw-75">
                  <div class="modal-content">
                    <div class="modal-body typeform-body">
                      <div data-tf-widget="Q9w20G65" data-tf-iframe-props="title=Diagnostico-SCRUM" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>
                    </div>
                  </div>
                </div>
              </div>
              <!--END: Diagnóstico-->
            </div>
            <!--END: Botones-->
          </div>
        </div>
        <!--END: Intro-->
      </div>
    </header>
    <main class="my-5">
      
        <div class="container">
          <div class="timeline my-5">
            <div class="chevron">
              <img src="img/shapes/chevrones.png" alt="Chevrones">
            </div>
            <!--Lista de slabs-->
            <ul>
              <!--Ciclo slabs-->
            <?php for($i = 1; $i <= 10; $i++) { ?>
              <?php $slabId = $slab_ids[$i-1];
                      $slabProgress = $slab_progress[$i-1];
              ?>
                <!--Slab 1-->
              <li class="current-slab">
                <div class="timeline-content">
                  <div class="row">
                  <div class="col-md-6 slab-text-col">
                      <h5 class="body"><?php echo $slabHeadings[$i-1]; ?></h5>
                    <div class="actividades">
                      <form class="actividades" action="index.php" method="post">
                      <input type="hidden" name="slabId" value="<?= $slabId?>">
                        <!--Actividad: Descubre-->
                        <button <?php if($currentSlab < $i) { echo "disabled"; }?> class="no-btn" type="submit" name="submit" value="descubre">
                          <div class="actividad d-flex align-items-center gap-2 mr-75 <?php if($currentSlab >= $i) { echo "available"; }?>">
                            <svg class="icon line" id="note-book" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path id="primary" d="M20,21H5a1,1,0,0,1-1-1V4A1,1,0,0,1,5,3H20a1,1,0,0,1,1,1V20A1,1,0,0,1,20,21ZM5,8H3m2,4H3m2,4H3M17,7H9v4h8Z" style="fill: none; stroke: rgb(50, 50, 50); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px;"></path></svg>
                            <div class="body">Descubre</div>
                          </div>
                        </button>
                        <!--Actividad: Demuestra-->
                        <button <?php if($slab_act1[$i-1] == 0) { echo "disabled";}?> class="no-btn" type="submit" name="submit" value="demuestra">
                          <div class="actividad d-flex align-items-center gap-2 <?php if($slab_act1[$i-1] > 0) { echo "available";}?>">
                            <svg class="icon line" id="note-book" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path id="primary" d="M20,21H5a1,1,0,0,1-1-1V4A1,1,0,0,1,5,3H20a1,1,0,0,1,1,1V20A1,1,0,0,1,20,21ZM5,8H3m2,4H3m2,4H3M17,7H9v4h8Z" style="fill: none; stroke: rgb(50, 50, 50); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px;"></path></svg>
                            <div class="body">Demuestra</div>
                          </div>
                        </button>
                        <div class="w-100"></div>
                        <!--Actividad: Autovaloración-->
                        <button <?php if($slab_act2[$i-1] == 0) { echo "disabled";}?> class="no-btn" type="submit" name="submit" value="autoval">
                          <div class="actividad d-flex align-items-center gap-2 <?php if($slab_act2[$i-1] > 0) { echo "available";}?>">
                            <svg class="icon line" id="note-book" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path id="primary" d="M20,21H5a1,1,0,0,1-1-1V4A1,1,0,0,1,5,3H20a1,1,0,0,1,1,1V20A1,1,0,0,1,20,21ZM5,8H3m2,4H3m2,4H3M17,7H9v4h8Z" style="fill: none; stroke: rgb(50, 50, 50); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px;"></path></svg>
                            <div class="body">Autovaloración</div>
                          </div>
                        </button>
                      
                      </form>
                    </div>
                    <!--Progress-->
                    <div class="row align-items-center">
                      <div class="col-md-7">
                      <div class="progress">
                    <div class="progress-bar" style="width: <?php echo $slabProgress;?>%" role="progressbar" aria-valuenow="<?php echo $slabProgress;?>" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                      </div>
                      <div class="col-md-5">
                      <div class="time">90 min.</div>
                      </div>
                    </div>
                    
                  
                    </div>
                    <div class="col-md-6">
                      <form class="img-form d-flex align-items-center justify-content-center" action="index.php" method="post">
                        <input type="hidden" name="slabId" value="<?= $slabId?>">
                        <button class="img-btn" type="submit" value="slab" name="submit"><img class="img" src="<?php echo $slabImages[$i-1];?>" alt=""></button>
                      </form>
                      <!--a href="slab.php?deckId=<?php echo $deckId?>&slabId=<?php echo $slabId?>">
                        <img class="img" src="<?php echo $slabImages[$i-1];?>" alt="">
                      </!--a-->
                    </div>
                    
                  </div>
                  <!--Elementos absolutos-->
                  <div class="paso">SLAB <?php echo $i?></div>
                  

                  <form class="next-form" action="index.php" method="post" >
                    <input type="hidden" name="slabId" value="<?= $slabId?>">

                    <button class="btn btn-primary next-btn" value="slab" type="submit" name="submit"><i class="bi bi-arrow-right"></i></button>
                  </form>
                  <!--a href="slab.php?deckId=<?php echo $deckId?>&slabId=<?php echo $slabId?>" class="btn btn-primary next-btn">
                    <i class="bi bi-arrow-right"></i>
                  </!--a>
                </div>
              </li>
              <!--END: Slab 1-->
              <?php }?>
              <!--END: Ciclo slabs-->
              
            </ul>
            <!--END: Lista de slabs-->
            <div class="cross">
              <img src="img/shapes/cross.png" alt="Chevrones">
            </div>
          </div>
        </div>
    </main>
    <footer class="p-4 mt-3 d-flex justify-content-center align-items-center">
      Copyright 2021. Tecmilenio.
    </footer>
    <!--Scripts-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="module" src="js/deck.js" ></script>
  </body>
</html>