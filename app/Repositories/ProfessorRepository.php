<?php

namespace App\Repositories;

use App\Professor;

class ProfessorRepository implements Repository
{
    public function create(array $data)
    {
        $professor = new Professor;
        $professor->fill($data);
        Professor::create($professor);
    }

    public function read(int $id)
    {
        return Professor::find($id);
    }

    public function update(int $id, array $data)
    {
        $professor = $this->read($id);
        $professor->fill($data);
        $professor->save();
    }

    public function delete(int $id)
    {
        $professor = $this->read($id);
        $professor->delete();
    }

    public function all()
    {
        return Professor::all();
    }
}