<?php

namespace App\Repositories;

use App\DisciplineType;

class DisciplineTypeRepository implements Repository
{
    public function create(array $data)
    {
        $disciplineType = new DisciplineType;
        $disciplineType->fill($data);
        DisciplineType::create($disciplineType);
    }

    public function read(int $id)
    {
        return DisciplineType::find($id);
    }

    public function update(int $id, array $data)
    {
        $disciplineType = $this->read($id);
        $disciplineType->fill($data);
        $disciplineType->save();
    }

    public function delete(int $id)
    {
        $disciplineType = $this->read($id);
        $disciplineType->delete();
    }

    public function all()
    {
        return DisciplineType::all();
    }
}