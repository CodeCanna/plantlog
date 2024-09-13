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
    use Log;

    try {
        //echo var_dump($_POST) . "\n";
        echo var_dump($_FILES["images"]["name"]) . "\n";

        foreach ($_FILES["images"]["tmp_name"] as $image => $tmpName) {
            move_uploaded_file($tmpName, "/home/awesomepilot/plantlog/" . $_FILES["images"]["name"][$image]);
        }
        // Form Values
        // echo $_GET["plantname"];
        // echo $_GET["log-date-time"];
        // echo $_GET["did-fertilize"];
        // echo $_GET["fertilizer-used"];
        // echo $_GET["fertilizer-weight"];
        // echo $_GET["fertilizer-n"];
        // echo $_GET["fertilizer-p"];
        // echo $_GET["fertilizer-k"];
        // echo $_GET["problem-name"];
        // echo $_GET["treatable"];
        // echo $_GET["treatments-tried"];
        // echo $_GET["treatments-found"];
        // echo $_GET["research"];
        // echo $_GET["is-flowering"];
        // echo $_GET["is-fruiting"];
        // echo $_GET["images"];
        // echo $_GET["number-of-fruits"];

        // $npk = array(
        //     "n" => $_GET["fertilizer-n"],
        //     "p" => $_GET["fertilizer-p"],
        //     "k" => $_GET["fertilizer-k"]
        // );

        // $log = new Log(
        //     $_GET["plantname"],
        //     new DateTime(),
        //     30,
        //     20,
        //     $_GET["images"],
        //     $_GET["problem-name"],
        //     $_GET["treatable"],
        //     $_GET["research"],
        //     $_GET["treatments-tried"],
        //     $_GET["treatments-found"],
        //     $_GET["is-flowering"],
        //     $_GET["is-fruiting"],
        //     $_GET["number-of-fruits"],
        //     $_GET["fertilizer-used"],
        //     $_GET["fertilizer-weight"],
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