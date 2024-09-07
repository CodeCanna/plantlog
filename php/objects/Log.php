<?php
require_once("Notes.php");
class Log extends Notes
{
    // public vars
    private string $plantName = "";
    private DateTime $logDate; // This must be initialize in a Magic Method __construct() below
    private int $lastCheckedDays = 0;
    private int $lastFertilizedDays = 0;
    private array $images = array();
    private Problems $problems;
    private Notes $notes;
    
    /**
     * @param string $plantName
     * @param DateTime $logDate
     * @param int $lastCheckedDays
     * @param int $lastFertilizedDays
     * @param array $images
     * @param Problems $problems
     * @param Notes $notes
     */
    public function __construct(
        string $plantName,
        DateTime $logDate,
        int $lastCheckDays,
        int $lastFertilizedDays,
        array $images,
        Problems $problems,
        Notes $notes
    )
    {
        $this->plantName = $plantName;
        $this->logDate = $logDate;
        $this->problems = $problems;
        $this->notes = $notes;
    }
    
    // Getters Setters //
    
    // $plantName //
    public function getPlantName(): string
    {
        return $this->plantName;
    }
    
    public function setPlantName(string $plantName)
    {
        $this->plantName = $plantName;
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
?>