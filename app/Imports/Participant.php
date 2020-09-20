<?php

namespace App\Imports;

use App\Participant;
use App\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class ParticipantImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Participant([
            'day' => $row[0],
            'name' => $row[1],
            'gender' => $row[2],
            'voters_id' => $row[3],
            'contact' => $row[4],
            'category' => $row[5]
        ]);
    }
}
