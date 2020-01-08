<?php

namespace App\Repositories;

use App\AptDiscipline;

class AptDisciplineRepository implements Repository
{
    public function create(array $data)
    {
        $aptDiscipline = new AptDiscipline;
        $aptDiscipline->fill($data);
        AptDiscipline::create($aptDiscipline);
    }

    public function read(int $id)
    {
        return AptDiscipline::find($id); 
    }

    public function update(int $id, array $data)
    {
        $aptDiscipline = $this->read($id);
        $aptDiscipline->fill($data);
        $aptDiscipline->save();
    }

    public function delete(int $id)
    {
        $aptDiscipline = $this->read($id);
        $aptDiscipline->delete();
    }

    public function all()
    {
        return AptDiscipline::all();
    }
}