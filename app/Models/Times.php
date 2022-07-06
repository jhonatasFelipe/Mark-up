<?php

namespace App\Models;

class Times{

    private \DateTime $start;
    private \DateTime $end;
    private bool $avaible; 

    public function __construct( \DateTime $start, \DateTime $end, bool $avaible )
    {
        $this->start = $start;
        $this->end = $end;
        $this->avaible = $avaible;
    }

    public function getStart():\DateTime
    {
        return $this->start;
    }

    public function getEnd():\DateTime
    {
        return $this->end;
    }

    public function getAvaible():bool
    {
        return $this->avaible;
    }

    public function setAvaible(bool $isAvaible){
        $this->avaible = $isAvaible;
    }
}