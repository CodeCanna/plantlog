<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Log</title>
</head>
<body>
    <h1>Create Log Page</h1>
    <?php
    require_once(dirname(__DIR__, 2) . "/php/objects/Log.php");
    require_once(dirname(__DIR__, 2) . "/php/lib/rb.php");
    require_once(dirname(__DIR__, 2) . "/php/constants.php");

    try {
        //echo var_dump($_POST) . "\n";
        // echo var_dump($_FILES["images"]["tmp_name"]) . "\n";

        $images = array();

        echo IMG_UPLOADS_PATH;
        
        foreach ($_FILES["images"]["tmp_name"] as $image => $tmpName) {
            // Move uploaded fies to the uploads directory
            move_uploaded_file($tmpName, IMG_UPLOADS_PATH . $_FILES["images"]["name"][$image]);
            // Push the image paths to the images array
            // array_push($images, IMG_UPLOADS_PATH . $_FILES["images"]["name"][$image]);
            array_push($images, IMG_UPLOADS_PATH . $_FILES["images"]["name"][$image]);
        }

        // Form Values
        // echo $_POST["plantname"];
        // echo $_POST["log-date-time"];
        // echo $_POST["did-fertilize"];
        // echo $_POST["fertilizer-used"];
        // echo $_POST["fertilizer-weight"];
        // echo $_POST["fertilizer-n"];
        // echo $_POST["fertilizer-p"];
        // echo $_POST["fertilizer-k"];
        // echo $_POST["problem-name"];
        // echo $_POST["treatable"];
        // echo $_POST["treatments-tried"];
        // echo $_POST["treatments-found"];
        // echo $_POST["research"];
        // echo $_POST["is-flowering"];
        // echo $_POST["is-fruiting"];
        // echo $_POST["images"];
        // echo $_POST["number-of-fruits"];

        // Create array with NPK values in it
        $npk = array(
            "n" => $_POST["fertilizer-n"],
            "p" => $_POST["fertilizer-p"],
            "k" => $_POST["fertilizer-k"]
        );

        // Create PHP DateTime object from incoming string
        $logDate = new DateTime($_POST["log-date-time"]);

        // Create a new log object with the above data
        $log = new Log(
            $_POST["plantname"],
            $logDate, // $_POST["log-date-time"],
            $_POST["did-fertilize"],
            45,
            $images,
            $_POST["problem-name"],
            $_POST["treatable"],
            $_POST["research"],
            $_POST["treatments-tried"],
            $_POST["treatments-found"],
            $_POST["is-flowering"],
            $_POST["is-fruiting"],
            $_POST["number-of-fruits"],
            $_POST["fertilizer-used"] | "None",
            $_POST["fertiizer-weight"] | 0,
            $npk
        );

        echo var_dump($log);
        //R::setup('sqlite:/home/awesomepilot/rbdb/rb.db');
        //$logBean = R::dispense('log');

        // Set properties
        // $logBean->plantName = $log->getPlantName();
        // $logBean->logDate = $log->getLogDate();
        // $logBean->lastCheckedDays = $log->getLastCheckedDays();
        // $logBean->lastFertilizedDays = $log->getLastFertilizedDays();
        // $logBean->images = serialize($log->getImages());
        // $logBean->problemName = $log->getProblemName();
        // $logBean->isTreatable = $log->getIsTreatable();
        // $logBean->research = $log->getResearch();
        // $logBean->treatmentsTried = $log->getTreatmentsTried();
        // $logBean->treatmentsFound = $log->getTreatmentsFound();
        // $logBean->isFlowering = $log->getIsFlowering();
        // $logBean->isFruiting = $log->getIsFruiting();
        // $logBean->numberOfFruits = $log->getNumberOfFruits();
        // $logBean->fertilizerUsed = $log->getFertilizerUsed();
        // $logBean->fertilizerWeight = $log->getFertilizerWeight();
        // $logBean->npk = serialize($log->getNPK());

        //$id = R::store($logBean);
    } catch (Exception $e) {
        echo $e;
    }
    ?>
</body>
</html>