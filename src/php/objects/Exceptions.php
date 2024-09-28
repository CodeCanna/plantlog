<?php
class PlantLogMissingValue extends Exception
{
    public function __construct() {
        parent::__construct(
            "This value cannot be null.",
            10,
            true
        );
    }
}

class PlantLogInvalidDateTime extends Exception
{
    public function __construct()
    {
        parent::__construct(
            "Invalid DateTime detected.",
            20,
            true
        );
    }
}

class PlantLogGeneralException extends Exception {
    public function __construct()
    {
        parent::__construct(
            "Plantlog encountered a problem...",
            1,
            true
        );
    }
}