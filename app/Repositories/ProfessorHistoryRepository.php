<?php

namespace App\Repositories;

use App\ProfessorHistory;

class ProfessorHistoryRepository implements Repository
{
    public function create(array $data)
    {
        $professorHistory = new ProfessorHistory;
        $professorHistory->fill($data);
        ProfessorHistory::create($professorHistory);
    }

    public function read(int $id)
    {
        return ProfessorHistory::find($id);
    }

    public function update(int $id, array $data)
    {
        $professorHistory = $this->read($id);
        $professorHistory->fill($data);
        $professorHistory->save();
    }

    public function delete(int $id)
    {
        $professorHistory = $this->read($id);
        $professorHistory->delete();
    }

    public function all()
    {
        return ProfessorHistory::all();
    }
}