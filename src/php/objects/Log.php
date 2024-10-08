<?php
require_once("Notes.php");
require_once("Exceptions.php");
class Log extends Notes
{
    // public vars
    private string $plantName;
    private DateTime $logDate; // This must be initialize in a Magic Method __construct() below
    private int $lastCheckedDays;
    private int $lastFertilizedDays;
    private ?array $images = null; // A questionmark before the type declaration means this is either an array or null

    /**
     * @param string $plantName
     * @param DateTime $logDate
     * @param int $lastCheckedDays // This is going to be for statistics not reminders.
     * @param int $lastFertilizedDays
     * @param array $images
     */
    public function __construct(
        string $plantName,
        DateTime $logDate,
        int $lastCheckedDays,
        int $lastFertilizedDays,
        ?array $images,
        // Problems //
        ?string $problemName,
        ?bool $isTreatable,
        ?string $research,
        ?string $treatmentsTried,
        ?string $treatmentsFound,
        // Notes //
        bool $isFlowering,
        bool $isFruiting,
        int $numberOfFruits,
        ?string $fertilizerUsed,
        ?float $fertilizerWeight,
        ?array $npk
    ) {
        $this->setPlantName($plantName);
        $this->setLogDate($logDate);
        $this->setLastCheckedDays($lastCheckedDays);
        $this->setImages($images);

        // Notes.php constructor //
        parent::__construct(
            $isFlowering,
            $isFruiting,
            $numberOfFruits,
            $fertilizerUsed,
            $fertilizerWeight,
            $npk,
            $problemName,
            $isTreatable,
            $research,
            $treatmentsTried,
            $treatmentsFound
        );
    }

    // Getters Setters //

    // $plantName //
    public function getPlantName(): string | null
    {
        if (! isset($this->plantName)) {
            return null;
        }
        return $this->plantName;
    }

    public function setPlantName(string $plantName)
    {
        try {
            if (isset($plantName)) {
                $this->plantName = $plantName;
            } else {
                throw new PlantLogMissingValue(); // Plant name cannot be null
            }
        } catch (Exception $e) {
            echo "Plantlog has encountered an error: " . $e->getMessage();
        }
    }

    // $logDate //
    public function getLogDate(): DateTime
    {
        return $this->logDate;
    }

    public function setLogDate(DateTime $logDate)
    {
        $this->logDate = $logDate;
    }

    // $lastCheckDays //
    public function getLastCheckedDays()
    {
        return $this->lastCheckedDays;
    }

    public function setLastCheckedDays(int $lastCheckedDays)
    {
        $this->lastCheckedDays = $lastCheckedDays;
    }

    // Last Fertilized Days //
    public function getLastFertilizedDays(): int
    {
        return $this->lastFertilizedDays;
    }

    public function setLastFertilizedDays(int $lastFertilizedDays)
    {
        $this->lastFertilizedDays = $lastFertilizedDays;
    }

    // $images //
    public function getImages(): array
    {
        return $this->images;
    }

    public function setImages(array $images)
    {
        $this->images = $images;
    }
}
