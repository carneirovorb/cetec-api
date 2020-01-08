<?php

namespace App\Repositories;

use App\Discipline;

class DisciplineRepository implements Repository
{
    public function create(array $data)
    {
        $discipline = new Discipline;
        $discipline->fill($data);
        Discipline::create($discipline);
    }

    public function read(int $id)
    {
        return Discipline::find($id);
    }

    public function update(int $id, array $data)
    {
        $discipline = $this->read($id);
        $discipline->fill($data);
        $discipline->save();
    }

    public function delete(int $id)
    {
        $discipline = $this->read($id);
        $discipline->delete();
    }

    public function all()
    {
        return Discipline::all();
    }
}