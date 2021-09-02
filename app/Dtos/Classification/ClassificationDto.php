<?php namespace App\Dtos\Classification;

use App\Models\Classification;

class ClassificationDto{

    protected string $name;

    public function __construct(Classification $payload)
    {
        $this->name = $payload->name;
    }

    public function get(){
        
        return [ 'name' => $this->name ];
        
    }

}