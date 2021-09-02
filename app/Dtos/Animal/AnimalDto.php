<?php namespace App\Dtos\Animal;

class AnimalDto{

    protected string $name;
    protected bool $extinct;
    protected int $quantity;

    public function __construct($payload)
    {
        $this->name = $payload['name'];
        $this->extinct = $payload['extinct'];
        $this->quantity = $payload['quantity'];
    }

}