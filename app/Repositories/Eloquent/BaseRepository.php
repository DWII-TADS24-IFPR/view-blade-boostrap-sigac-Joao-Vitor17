<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all() {
        return $this->model->all();
    }
    
    public function find($id) {
    }
    
    public function create(array $dados) {
        return $this->model->create($dados);
    }
    
    public function update($id, array $dados) {
    }
    
    public function delete($id) {
    }
}