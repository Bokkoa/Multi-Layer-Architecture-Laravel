<?php namespace App\Repositories;

use App\Models\Classification;

class ClassificationRepository extends BaseRepository {

    const RELATIONS = [
        'animals'
    ];

    public function __construct(Classification $classification)
    {
        parent::__construct($classification, self::RELATIONS);
    }
    public function all(){

        return $this->model->get();
    }

}