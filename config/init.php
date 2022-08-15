<?php

    function init() {
        createMetric();
        define("USER_ID", getMetricId());
        //echo "El id que se usará es: ".USER_ID;
        //Se hace la cookie qu durará 10 días
        setcookie("user_id", USER_ID, time() + (60 * 60 * 24 * 30)); 
        createDeck(USER_ID);
        createSlabs();
        addSlabsToDeck();
        updateMetric(USER_ID);
        if(isset($_SESSION["deckId"])){
            //echo "<br>Deck Id ya fue inicializado";
            if(setcookie("deck_id", $_SESSION["deckId"], time() + (60 * 60 * 24 * 30))){
                //echo "<br>Se insertó la cookie de deckId";
            } else {
                //echo "No se insertó la cookie";
            }
            
        } else {
            //echo "No existe el deck ID que buscas";
        }
    }

    //Crea la métrica con valores default
    function createMetric(){
        global $conn;
        $sql = "INSERT INTO metrics(progress, exp_name) VALUES (0, 'deck-ft-prueba')";
        if(mysqli_query($conn, $sql)){
            //echo "Se insertó la métrica exitosamente";
        } else {
            echo "Query error: " . mysqli_error($conn);
        }
    }

    //Obtener el valor recientemente insertado en la BD
    function getMetricId(){
        global $conn;
        $sql = "SELECT user_id FROM metrics ORDER BY created_at DESC LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $metric = mysqli_fetch_assoc($result);
        return $metric["user_id"];
    }


    //UTIL -> Verifica si eciste un deck con el User ID
    function deckUserExists($userId) {
        global $conn;
        $sql = "SELECT * FROM deck WHERE user_id = $userId";
        $result = mysqli_query($conn, $sql);
        $deck = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        if(isset($deck)){ 
            return true;
            
        } else {
            return false;
        }
    }

    //Crea un deck con el User ID
    function createDeck($userId){
        global $conn;
        //echo "Vamos a crear el deck para el usuario: ".$userId;
        if(!deckUserExists($userId)){
            $sql = "INSERT INTO deck(user_id) VALUES ($userId)";
            if(mysqli_query($conn, $sql)){
                //echo "Se insertó el deck exitosamente";
                addIdToSession($userId);
            } else {
                echo "-------------Query error: " . mysqli_error($conn);
            }
        } else {
            //echo "Ya existe un deck con con ese ID de usuario";
            addIdToSession($userId);
        }
        
    }

    //Agrega el Deck ID como atributo de sesión
    function addIdToSession($userId){
        global $conn;
        
            $sql = "SELECT id FROM deck WHERE user_id = $userId";
            $result = mysqli_query($conn, $sql);
            $deck = mysqli_fetch_assoc($result);
            mysqli_free_result($result);
            $_SESSION["deckId"] = $deck["id"];
            //echo "Se añadió el deckId correctamente a la sesión";
        
    }

    
    //Verifica si existen slabs con el ID
    function slabsExist(){
        //echo "<br>Deck ID de la sesión: ".$_SESSION["deckId"];
        global $conn;
        $deckId = $_SESSION["deckId"];
        $sql = "SELECT id FROM slab WHERE deck_id = $deckId";
        $result = mysqli_query($conn, $sql);
        $slab = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        if(isset($slab["id"])){
            //echo "Sí hay slabs con el deck ID indicado";
            return true;
        } else {
            //echo "No hay slabs con el deck ID indicado";
            return false;
        }
    }

    //Crea 10 slabs relacionados al ID del Deck
    function createSlabs() {
        global $conn;
        if(!slabsExist()){
            $deckId = $_SESSION["deckId"];
            for($i = 1; $i<= 10; $i++){
                $sql = "INSERT INTO slab(deck_id, slab_num) VALUES ($deckId, $i)";
                if(mysqli_query($conn, $sql)){
                    //echo "Se insertó el slab $i exitosamente";
                } else {
                    echo "Query error: " . mysqli_error($conn);
                }
            }
        } else {
            //echo "<br>El deck con id ".$_SESSION["deckId"]." ya tiene sus slabs :)";
        }
    }

    

    //Relaciona los IDs de los slabs con las columnas del Deck
    function addSlabsToDeck(){
        global $conn;
        $deckId = $_SESSION["deckId"];
        $slab_ids = getSlabIds();
        for($i = 0; $i < 10 ;$i++){
            $slabId = "slab_".($i+1)."_id";
            $sql = "UPDATE deck SET $slabId = $slab_ids[$i] WHERE id = $deckId";
            if(mysqli_query($conn, $sql)){
                //echo "<br> Se insertó el ID: ".$slab_ids[$i]." correctamente";
            } else {
                echo "<br>Query error: " . mysqli_error($conn);
            }
        }
        
    }

    //Verifica si el deck ya tiene slabs asignados
    function deckIsEmpty(){
        global $conn;
        $deckId = $_SESSION["deckId"];
        $sql = "SELECT id FROM slab WHERE deck_id = $deckId";
        $result = mysqli_query($conn, $sql);
        $slabs = mysqli_fetch_all($result, MYSQLI_ASSOC);
        if(count($slabs) == 0){
            //echo "<br>No hay slabs en este deck";
            return true;
        } else {

            return false;
        }
    }

    //Agrega el id del deck a las métricas
    function updateMetric($userId){
        global $conn;
        $deckId = $_SESSION["deckId"];
        if(!deckIsEmpty()){
            $sql = "UPDATE metrics SET deck_id = $deckId WHERE user_id = $userId";
            if(mysqli_query($conn, $sql)){
                //echo "Se actualizó el deck exitosamente";
            } else {
                echo "Query error: " . mysqli_error($conn);
            }
        }
    }


?>