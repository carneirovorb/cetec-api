<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factories\RepositoryFactory as Factory;

class ClassroomController extends Controller
{
    private $repository;

    public function __construct()
    {
        $this->repository = new Factory('Classroom');
    }

    public function listAll()
    {
        return response('ok', 200)->json([$this->repository->all()]);
    }

    public function createOne(Request $request)
    {
        $this->repository->create($request->all());
        return response('ok', 200);
    }

    public function readOne(int $id)
    {
        return response('ok', 200)->json([$this->repository->read($id)]);
    }

    public function updateOne(int $id, Request $request)
    {
        $this->repository->update($id, $request->all());
        return response('ok', 200);
    }

    public function deleteOne(int $id)
    {
        $this->repository->delete($id);
        return response('ok', 200);
    }

}
