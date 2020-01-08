<?php

namespace App\Repositories;

use App\ClassroomType;

class ClassroomTypeRepository implements Repository
{
    public function create(array $data)
    {
        $classroomType = new ClassroomType;
        $classroomType->fill($data);
        ClassroomType::create($classroomType);
    }

    public function read(int $id)
    {
        return ClassroomType::find($id);
    }

    public function update(int $id, array $data)
    {
        $classroomType = $this->read($id);
        $classroomType->fill($data);
        $classroomType->save();
    }

    public function delete(int $id)
    {
        $classroomType = $this->read($id);
        $classroomType->delete();
    }

    public function all()
    {
        return ClassroomType::all();
    }
}