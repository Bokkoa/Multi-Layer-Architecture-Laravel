<?php   namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository{

    protected Model $model;
    private $relations;

    public function __construct(Model $model, array $relations = [])
    {
        $this->model = $model;
    }

    public function all(){

        $query = $this->model;

        if(!empty($this->relations)){

            $query = $query->with($this->relations);
        }
        
        return $query->get();
    }

    public function get( int $id): Model {

        return $this->model->find( $id );
    }

    public function save( Model $model): Model {

        $model->save();

        return $model;
    }

    public function delete( Model $model): Model {
        
        $model->save();

        return $model;
    }
}