<?php

namespace App\Repositories;

use App\DemandPlanning;

class DemandPlanningRepository implements Repository
{
    public function create(array $data)
    {
        $demandPlanning = new DemandPlanning;
        $demandPlanning->fill($data);
        DemandPlanning::create($demandPlanning);
    }

    public function read(int $id)
    {
        return DemandPlanning::find($id);
    }

    public function update(int $id, array $data)
    {
       $demandPlanning = $this->read($id);
       $demandPlanning->fill($data);
       $demandPlanning->save();
    }

    public function delete(int $id)
    {
        $demandPlanning = $this->read($id);
        $demandPlanning->delete();
    }

    public function all()
    {
        return DemandPlanning::all();
    }
}