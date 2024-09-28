<?php
class Problems
{
    /**
     * @var $name The name of the found problem
     */
    protected ?string $name = null;

    /**
     * @var $isTreatable Is this problem considered treatable?
     */
    protected ?bool $isTreatable = null;

    /**
     * @var $research Any research done on this problem
     */
    protected ?string $research = null;

    /**
     * @var $treatmentsTried Treatments that you have tried
     */
    protected ?string $treatmentsTried = null;

    /**
     * @var $treatmentsFound Treatments that have been found to work
     */
    protected ?string $treatmentsFound = null; // Treatments that WORKED

    /**
     * @param $name The name of found problem
     * @param $isTreatble Is this disease/problem treatable?
     * @param $research Any research notes that have been taken
     * @param $treatmentsTried Treatments that have been tried whether successfull of not
     * @param $treatmentsFound Treatments that have been found to work
     * @return void
     */
    public function __construct(
        ?string $name,
        ?bool $isTreatable,
        ?string $research,
        ?string $treatmentsTried,
        ?string $treatmentsFound
    )
    {
        $this->setName($name);
        $this->setIsTreatable($isTreatable);
        $this->setResearch($research);
        $this->setTreatmentsTried($treatmentsTried);
        $this->setTreatmentsFound($treatmentsFound);
    }
    
    // $name //
    public function getProblemName()
    {
        return $this->name;
    }
    
    /**
     * @param $name Name to set
     */
    public function setName(?string $name)
    {
        $this->name = $name;
    }
    
    // $isTreatable //
    public function getIsTreatable()
    {
        return $this->isTreatable;
    }
    
    public function setIsTreatable(?bool $isTreatable)
    {
        $this->isTreatable = $isTreatable;
    }
    
    // $research //
    public function getResearch()
    {
        return $this->research;
    }
    
    public function setResearch(?string $research)
    {
        $this->research = $research;
    }
    
    // $treatmentsTried //
    public function getTreatmentsTried()
    {
        return $this->treatmentsTried;
    }
    
    public function setTreatmentsTried(?string $treatmentsTried)
    {
        $this->treatmentsTried = $treatmentsTried;
    }
    
    // $treatmentsFound //
    public function getTreatmentsFound()
    {
        return $this->treatmentsFound;
    }
    
    public function setTreatmentsFound(?string $treatmentsFound)
    {
        $this->treatmentsFound = $treatmentsFound;
    }
        
}
?>