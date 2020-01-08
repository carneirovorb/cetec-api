<?php

namespace App\Repositories;

use App\Demand;

class DemandRepository implements Repository
{
    public function create(array $data)
    {
        $demand = new Demand;
        $demand->fill($data);
        Demand::create($demand);
    }

    public function read(int $id)
    {
        return Demand::find($id);
    }

    public function update(int $id, array $data)
    {
       $demand = $this->read($id);
       $demand->fill($data);
       $demand->save();
    }

    public function delete(int $id)
    {
        $demand = $this->read($id);
        $demand->delete();
    }

    public function all()
    {
        return Demand::all();
    }
}