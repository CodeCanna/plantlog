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
        
        // Construct our images array and move uploaded images to upoads folder
        foreach ($_FILES["images"]["tmp_name"] as $image => $tmpName) {
            // Move uploaded fies to the uploads directory
            move_uploaded_file($tmpName, IMG_UPLOADS_PATH . $_FILES["images"]["name"][$image]);
            // Push the image paths to the images array
            // array_push($images, IMG_UPLOADS_PATH . $_FILES["images"]["name"][$image]);
            array_push($images, IMG_UPLOADS_PATH . $_FILES["images"]["name"][$image]);
        }

        // Form Values
        // echo $_POST["plantname"] . "<br>";
        // echo $_POST["log-date-time"] . "<br>";
        // echo $_POST["did-fertilize"] . "<br>";
        // echo $_POST["fertilizer-used"] . "<br>";
        // echo $_POST["fertilizer-weight"] . "<br>";
        // echo $_POST["fertilizer-n"] . "<br>";
        // echo $_POST["fertilizer-p"] . "<br>";
        // echo $_POST["fertilizer-k"] . "<br>";
        // echo $_POST["problem-name"] . "<br>";
        // echo $_POST["treatable"] . "<br>";
        // echo $_POST["treatments-tried"] . "<br>";
        // echo $_POST["treatments-found"] . "<br>";
        // echo $_POST["research"] . "<br>";
        // echo $_POST["is-flowering"] . "<br>";
        // echo $_POST["is-fruiting"] . "<br>";
        // echo $_POST["images"] . "<br>";
        // echo $_POST["number-of-fruits"] . "<br>";

        // Construct our NPK array
        $npk;
        if ($_POST["did-fertilize"] === "true") {
            $npk = array(
                "n" => $_POST["fertilizer-n"],
                "p" => $_POST["fertilizer-p"],
                "k" => $_POST["fertilizer-k"]
            );
        } else {
            $npk = null;
        }
        
        // Create our datetime object from the given string
        // $dt = DateTime::createFromFormat("m-d-Y h:i:s", $_POST["log-date-time"]);
        echo "Date: ". $_POST["log-date-time"];

        $testLog = new Log(
            $_POST["plantname"],
            new DateTime,
            48,
            87,
            $images,
            null,
            null,
            null,
            null,
            null,
            false,
            false,
            0,
            "None",
            0,
            $npk
        );

        

        // Create array with NPK values in it
        // $npk = array(
        //     "n" => $_POST["fertilizer-n"],
        //     "p" => $_POST["fertilizer-p"],
        //     "k" => $_POST["fertilizer-k"]
        // );

        // // Create PHP DateTime object from incoming string
        // $logDate = new DateTime($_POST["log-date-time"]);

        // echo $logDate . "<br>";

        // Create a new log object with the above data
        // $log = new Log(
        //     $_POST["plantname"],
        //     $logDate, // $_POST["log-date-time"],
        //     $_POST["did-fertilize"],
        //     45,
        //     $images,
        //     $_POST["problem-name"],
        //     $_POST["treatable"],
        //     $_POST["research"],
        //     $_POST["treatments-tried"],
        //     $_POST["treatments-found"],
        //     $_POST["is-flowering"],
        //     $_POST["is-fruiting"],
        //     $_POST["number-of-fruits"],
        //     $_POST["fertilizer-used"] | "None",
        //     $_POST["fertiizer-weight"] | 0,
        //     $npk
        // );

        // echo var_dump($log);
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