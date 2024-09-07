<?php
class Problems
{
    protected string $name = "";
    protected bool $isTreatable = true;
    protected string $research = "";
    protected string $treatmentsTried = "";
    protected string $treatmentsFound = ""; // Treatments that WORKED 

    public function __construct(
        string $name,
        bool $isTreatable,
        string $research,
        string $treatmentsTried,
        string $treatmentsFound
    )
    {
        $this->setName($name);
        $this->setIsTreatable($isTreatable);
        $this->setResearch($research);
        $this->setTreatmentsTried($treatmentsTried);
        $this->setTreatmentsFound($treatmentsFound);
    }
    
    // $name //
    public function getName(): string
    {
        return $this->name;
    }
    
    public function setName(string $name)
    {
        $this->name = $name;
    }
    
    // $isTreatable //
    public function getIsTreatable(): bool
    {
        return $this->isTreatable;
    }
    
    public function setIsTreatable(bool $isTreatable)
    {
        $this->isTreatable = $isTreatable;
    }
    
    // $research //
    public function getResearch(): string
    {
        return $this->research;
    }
    
    public function setResearch(string $research)
    {
        $this->research = $research;
    }
    
    // $treatmentsTried //
    public function getTreatmentsTried(): string
    {
        return $this->treatmentsTried;
    }
    
    public function setTreatmentsTried()
    {
        $this->treatmentsTried = $treatmentsTried;
    }
    
    // $treatmentsFound //
    public function getTreatmentsFound(): string
    {
        return $this->treatmentsFound;
    }
    
    public function setTreatmentsFound()
    {
        $this->treatmentsFound = $treatmentsFound;
    }
        
}
?>