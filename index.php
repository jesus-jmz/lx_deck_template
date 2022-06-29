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
    
    <title>Deck Excel</title>
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
              <img class="video-block" src="img/home.jpg" alt="video" />
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
                    <div data-tf-widget="WIQjHJgv" data-tf-iframe-props="title=Diagnostico inicio EXCEL" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>
                    </div>
                  </div>
                </div>
              </div>
              <!--END: Diagnóstico-->
              <!--BEGIN: Experto-->
              <button id="tracker_2" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newExpertosModal">
                Experto
              </button>
              <!-- New Modal -->
              <div class="modal fade exp-modal" id="newExpertosModal" tabindex="-1" aria-labelledby="newExpertosModalLabel" aria-hidden="true">
                <div class="modal-dialog mw-75">
                  <div class="modal-content">
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-4 profile-col">
                          <div class="profile">
                            <img class="modal-bg" src="img/shapes/modal/background.png" alt="modal-bg">
                            <div class="exp-title">
                              <h5 class="pink-text heading">*</h5>
                              <h5 class="heading exp-name"><?= $exp_name ?></h5>
                              <h6 class="exp-position"><?= $exp_position ?></h6>
                              <h5 class="pink-text heading">.</h5>
                            </div>
                            <img src="img/shapes/modal/shape1.png" class="modal-shape-1" alt="shape-1">
                            <img src="img/shapes/modal/shape2.png" class="modal-shape-2" alt="shape-1">
                          </div>
                        </div>
                        <div class="col-md-8 exp-desc-col">
                            <!--Bio-->
                            <p class="body exp-desc"><?= $exp_desc ?></p>
                                <!--Botones redes sociales-->
                                <div class="exp-sn-btns">
                                  <!--Btn LinkedIn-->
                                  <?php if($exp_has_linkedin===true){?>
                                    <a href="<?= $exp_linkedin ?>" class="btn sn-btn btn-primary "> 
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-linkedin" viewBox="0 0 16 16">
                                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                      </svg>
                                    </a>
                                  <?php } ?>
                                  <!--Btn Portafolio-->
                                  <?php if($exp_has_portfolio===true){?>
                                    <a href="<?= $exp_portfolio ?>" class="btn sn-btn btn-primary "> 
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-folder" viewBox="0 0 16 16">
                                        <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z"/>
                                      </svg>
                                    </a>
                                  <?php } ?>
                                  <!--Chevron-->
                                  <img class="modal-chev" src="img/shapes/chevrones.png" alt="modal-chev">
                                </div>
                        </div>
                      </div>
                      <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close">
                        <span class="closing-modal-x" aria-hidden="true">&times;</span>
                      </button> 
                    </div>
                  </div>
                </div>
              </div>
              <!--END: Experto-->
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
                          <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                          </svg>
                            <div class="body">Descubre</div>
                          </div>
                        </button>
                        <!--Actividad: Demuestra-->
                        <button <?php if($slab_act1[$i-1] == 0) { echo "disabled";}?> class="no-btn" type="submit" name="submit" value="demuestra">
                          <div class="actividad d-flex align-items-center gap-2 <?php if($slab_act1[$i-1] > 0) { echo "available";}?>">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                          </svg>
                            <div class="body">Demuestra</div>
                          </div>
                        </button>
                        <div class="w-100"></div>
                        <!--Actividad: Autovaloración-->
                        <button <?php if($slab_act2[$i-1] == 0) { echo "disabled";}?> class="no-btn" type="submit" name="submit" value="autoval">
                          <div class="actividad d-flex align-items-center gap-2 <?php if($slab_act2[$i-1] > 0) { echo "available";}?>">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                          </svg>
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
