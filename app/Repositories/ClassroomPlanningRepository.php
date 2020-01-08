<?php

namespace App\Repositories;

use App\ClassroomPlanning;

class ClassroomPlanningRepository implements Repository
{
    public function create(array $data)
    {
        $classroomPlanning = new ClassroomPlanning;
        $classroomPlanning->fill($data);
        ClassroomPlanning::create($classroomPlanning);
    }

    public function read(int $id)
    {
        return ClassroomPlanning::find($id);
    }

    public function update(int $id, array $data)
    {
        $classroomPlanning = $this->read($id);
        $classroomPlanning->fill($data);
        $classroomPlanning->save();
    }

    public function delete(int $id)
    {
        $classroomPlanning = $this->read($id);
        $classroomPlanning->delete();
    }

    public function all()
    {
        return ClassroomPlanning::all();
    }
}