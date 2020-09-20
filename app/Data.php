<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    public function validateElectoralAreaDetails()
    {
        return tap(
            request()->validate([
                'ea_name' => "required|string",
                'ps_code' => "required|string",
            ]),
            function () {
                if (!request()->description == null) {
                    request()->validate(
                        [
                            'description' => "required|string|max:100"
                        ]
                    );
                }
            }
        );
    }

    public function validatePollingStationDetails()
    {
        return request()->validate([
            'name' => "required|string",
            'code' => "required|string",
            'no_voters'  => "required|numeric",
            'ea_id' => 'required|numeric'
        ]);
    }
}
