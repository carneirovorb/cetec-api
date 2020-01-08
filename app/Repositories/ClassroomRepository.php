<?php

namespace App\Repositories;

use App\Classroom;

class ClassroomRepository implements Repository
{
    public function create(array $data)
    {
        $classroom = new Classroom;
        $classroom->fill($data);
        Classroom::create($classroom);
    } 

    public function read(int $id)
    {
        return Classroom::find($id);
    }

    public function update(int $id, array $data)
    {
        $classroom = $this->read($id);
        $classroom->fill($data);
        $classroom->save();
    }

    public function delete(int $id)
    {
        $classroom = $this->read($id);
        $classroom->delete();
    }

    public function all()
    {
        return Classroom::all();
    }
} 