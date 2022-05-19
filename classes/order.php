<?php

// TODO: Add a description to each method
class Order
{
    private $_meal;
    private $_food;
    private $_condiments;



    /**
     * Order constructor
     * @param $_meal
     * @param $_food
     * @param $_condiments
     */
    public function __construct()
    {
        $this->_meal = "";
        $this->_food = "";
        $this->_condiments = "";
    }

    /**
     * @return string
     */
    public function getMeal(): string
    {
        return $this->_meal;
    }

    /**
     * @param string $meal
     */
    public function setMeal(string $meal): void
    {
        $this->_meal = $meal;
    }

    /**
     * Return the food item for the order
     * @return string
     */
    public function getFood(): string
    {
        return $this->_food;
    }

    /**
     * Set the food item
     * @param string $food
     */
    public function setFood(string $food): void
    {
        $this->_food = $food;
    }

    /**
     * @return string
     */
    public function getCondiments(): string
    {
        return $this->_condiments;
    }

    /**
     * @param string $condiments
     */
    public function setCondiments(string $condiments): void
    {
        $this->_condiments = $condiments;
    }



    

}