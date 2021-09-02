<?php namespace App\Services;

use App\Dtos\Classification\ClassificationDto;
use App\Repositories\ClassificationRepository;


class ClassificationService extends BaseService{


    private $repo;

    public function __construct(ClassificationRepository $classificationRepository)
    {
        $this->repo = $classificationRepository; 
    }

    public function getAll(){

        $result = $this->repo->all();

        $data = array();

        foreach($result as $res ){

            $dto = new ClassificationDto($res);
            array_push($data, $dto->get() );

        }

        return $this->success($data, 'Información encontrada');
        
    }

}