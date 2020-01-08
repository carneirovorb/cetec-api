<?php

namespace App\Repositories;

use App\Course;

class CourseRepository implements Repository
{
    public function create(array $data)
    {
        $course = new Course;
        $course->fill($data);
        Course::create($course);
    }

    public function read(int $id)
    {
        return Course::find($id);
    }

    public function update(int $id, array $data)
    {
       $course = $this->read($id);
       $course->fill($data);
       $course->save();
    }

    public function delete(int $id)
    {
        $course = $this->read($id);
        $course->delete();
    }

    public function all()
    {
        return Course::all();
    }
}