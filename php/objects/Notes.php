<?php
require_once("Problems.php");
class Notes extends Problems
{
    protected bool $isFlowering = false;
    protected bool $isFruiting = false;
    protected int $numberOfFruits = 0;
    protected string $fertilizerUsed = "";
    protected float $fertilizerAmount = 0.0; // Weight
    protected array $npk = array(
        "n" => 0.0,
        "p" => 0.0,
        "k" => 0.0
    );
    
    // $isFlowering //
    public function getIsFlowering(): bool
    {
        return $this->isFlowering;
    }
    
    public function setIsFlowering(bool $isFlowering)
    {
        $this->isFlowering = $isFlowering;
    }
    
    // $isFruiting //
    public function getIsFruiting(): bool
    {
        return $this->isFruiting;
    }
    
    public function setIsFruiting(bool $isFruiting)
    {
        $this->isFruiting = $isFruiting;
    }
    
    // $numberOfFruits //
    public function getNumberOfFruits(): int
    {
        return $this->numberOfFruits;
    }
    
    public function setNumberOfFruits(int $numberOfFruits)
    {
        $this->numberOfFruits = $numberOfFruits;
    }
    
    
}
?>