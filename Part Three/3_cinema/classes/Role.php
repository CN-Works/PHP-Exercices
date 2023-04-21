<?php

class Role {
    // Role information
    private string $roleName;
    
    private $castings = [];

    public function __construct(string $roleName) {
        $this->roleName = $roleName;
    }

    public function __toString() {
        return $this->roleName;
    }

    // Getters & setters

    public function getRoleName()
    {
        return $this->roleName;
    }

    public function setRoleName($roleName)
    {
        $this->roleName = $roleName;
    }



    // Casting related
    public function getCastings(): array
    {
        return $this->castings;
    }

    public function setCastings($castings)
    {
        $this->castings = $castings;
    }
}