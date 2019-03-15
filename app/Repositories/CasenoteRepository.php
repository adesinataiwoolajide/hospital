<?php 

namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;

class CasenoteRepository implements CasenoteRepositoryInterface
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    // Get all instances of model
    public function all()
    {
        return $this->model->all();
    }

    // create a new record in the database
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    // update record in the database
    public function update(array $data, $casenote_id)
    {
        $update = $this->model->findOrFail($casenote_id);
        return $update->update($data);
    }

    // remove record from the database
    public function delete($casenote_id)
    {
        return $this->model->destroy($casenote_id);
    }

    // show the record with the given casenote_id
    public function show($casenote_id)
    {
        return $this->model->findOrFail($casenote_id);
    }

    
    // Get the associated model
    public function getModel()
    {
        return $this->model;
    }

    // Set the associated model
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    // Eager load database relationships
    public function with($relations)
    {
        return $this->model->with($relations);
    }
}


interface CasenoteRepositoryInterface
{
    public function all();

    public function create(array $data);

    public function update(array $data, $casenote_id);

    public function delete($casenote_id);

    public function show($casenote_id);
}