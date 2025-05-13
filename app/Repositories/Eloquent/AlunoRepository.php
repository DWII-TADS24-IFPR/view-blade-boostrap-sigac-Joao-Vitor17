<?php

namespace App\Repositories\Eloquent;

use App\Models\Aluno;
use App\Models\Curso;
use App\Repositories\Contracts\AlunoRepositoryInterface;
use App\Repositories\Contracts\CursoRepositoryInterface;

class AlunoRepository extends BaseRepository implements AlunoRepositoryInterface
{
    public function __construct(Aluno $model)
    {
        parent::__construct($model);
    }

    public function findWithRelations($id)
    {
        return $this->model->with(['curso', 'turma'])->findOrFail($id);
    }
}