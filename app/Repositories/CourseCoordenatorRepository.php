<?php

namespace App\Repositories;

use App\CourseCoordenator;

class CourseCoordenatorRepository implements Repository
{
    public function create(array $data)
    {
        $courseCoordenator = new CourseCoordenator;
        $courseCoordenator->fill($data);
        CourseCoordenator::create($courseCoordenator);
    }

    public function read(int $id)
    {
        return CourseCoordenator::find($id);
    }

    public function update(int $id, array $data)
    {
       $courseCoordenator = $this->read($id);
       $courseCoordenator->fill($data);
       $courseCoordenator->save();
    }

    public function delete(int $id)
    {
        $courseCoordenator = $this->read($id);
        $courseCoordenator->delete();
    }

    public function all()
    {
        return CourseCoordenator::all();
    }
}