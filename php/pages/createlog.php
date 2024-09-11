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
        $log = new Log(
            "Beans",
            new DateTime(),
            30,
            60,
            array("image1" => "beans", "image2" => "beans"),
            "Rust",
            false,
            "Rust is notorious for not being treatable.",
            "Neem Oil, Anti-fungals",
            "None",
            false,
            false,
            0,
            "Miracle Grow",
            14.3,
            array(
                "n" => 2,
                "p" => 2,
                "k" => 2
            )
        );

        var_dump($log);
        R::setup('sqlite:/home/awesomepilot/rbdb/rb.db');
        $logBean = R::dispense('log');

        // Set properties
        $logBean->plantName = $log->getPlantName();
        $logBean->logDate = $log->getLogDate();
        $logBean->lastCheckedDays = $log->getLastCheckedDays();
        $logBean->lastFertilizedDays = $log->getLastFertilizedDays();
        $logBean->images = $log->getImages();
        $logBean->problemName = $log->getProblemName();
        $logBean->isTreatable = $log->getIsTreatable();
        $logBean->research = $log->getResearch();
        $logBean->treatmentsTried = $log->getTreatmentsTried();
        $logBean->treatmentsFound = $log->getTreatmentsFound();
        $logBean->isFlowering = $log->getIsFlowering();
        $logBean->isFruiting = $log->getIsFruiting();
        $logBean->numberOfFruits = $log->getNumberOfFruits();
        $logBean->fertilizerUsed = $log->getFertilizerUsed();
        $logBean->fertilizerWeight = $log->getFertilizerWeight();
        $logBean->npk = $log->getNPK();

        $id = R::store($logBean);
    } catch (Exception $e) {
        echo $e;
    }
    ?>
</body>
</html>