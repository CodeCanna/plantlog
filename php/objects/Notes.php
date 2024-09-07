<?php
require_once("Problems.php");
class Notes extends Problems
{
    protected bool $isFlowering = false;
    protected bool $isFruiting = false;
    protected int $numberOfFruits = 0;
    protected string $fertilizerUsed = "";
    protected float $fertilizerWeight = 0.0; // Weight
    protected array $npk = array(
        "n" => 0.0,
        "p" => 0.0,
        "k" => 0.0
    );
    protected Problems $problems;

    public function __construct(
        bool $isFlowering,
        bool $isFruiting,
        int $numberOfFruits,
        string $fertilizerUsed,
        float $fertilizerWeight,
        array $npk,
        Problems $problems
    )
    {
        $this->isFlowering = $isFlowering;
        $this->isFruiting = $isFruiting;
        $this->numberOfFruits = $numberOfFruits;
        $this->fertilizerUsed = $fertilizerUsed;
        $this->fertilizerWeight = $fertilizerWeight;
        $this->npk = $npk;
        $this->problems = $problems;
    }

    
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

    // Fertilizer Used //
    public function getFertilizerUsed(): string
    {
        return $this->fertilizerUsed;
    }

    public function setFertilizerUsed(string $fertilizerUsed)
    {
        $this->fertilizerUsed = $fertilizerUsed;
    }
    
    // Fertilizer Weight //
    public function getFertilizerWeight(): float
    {
        return $this->fertilizerWeight;
    }

    public function setFertilizerWeight(float $fertilizerWeight)
    {
        $this->fertilizerWeight = $fertilizerWeight;
    }

    // NPK //
    public function getNPK(): array
    {
        return $this->npk;
    }

    public function setNPK(array $npk)
    {
        $this->npk = $npk;
    }
}
?>