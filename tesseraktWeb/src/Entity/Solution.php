<?php


namespace App\Entity;


class Solution
{
    public $solution;

    /**
     * @return mixed
     */
    public function getSolution()
    {
        return $this->solution;
    }

    /**
     * @param mixed $solution
     */
    public function setSolution($solution): void
    {
        $this->solution = $solution;
    }


}