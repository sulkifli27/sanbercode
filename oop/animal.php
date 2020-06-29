<?php

class animal
{
    protected $name;
    protected $legs;
    protected $cold_blooded;


    public function setName($nama)
    {
        $this->name = $nama;
    }
    public function getName()
    {
        return   $this->name;
    }

    public function setLegs($legs)
    {
        $this->legs = $legs;
    }

    public function getLegs()
    {
        return $this->legs;
    }

    public function setColdBlooded($cold_blooded)
    {
        $this->cold_blooded  = $cold_blooded;
    }

    public function getColdBlooded()
    {
        return $this->cold_blooded;
    }
}
