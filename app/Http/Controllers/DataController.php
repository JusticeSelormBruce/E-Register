<?php

namespace App\Http\Controllers;

use App\Data;
use App\EA;
use App\Imports\ParticipantImport;
use App\Participant;
use App\PS;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class DataController extends Controller
{
    private $model;
    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new Data();
    }
    public function storeElectoralAreaDetails()
    {
        $validated_details = $this->model->validateElectoralAreaDetails();
        EA::create($validated_details);
        return back()->with('msg', 'Details Saved Successfully');
    }
    public function electoralAreaList()
    {
        return view('admin.data.ea.list');
    }

    public function storePollingStationDetails()
    {
        $validated_details = $this->model->validatePollingStationDetails();
        PS::create($validated_details);
        return back()->with('msg', 'Details Saved Successfully');
    }

    public function pollingStationList ()
    {
        return view('admin.data.ps.list');
    }

    public function storePollingStationList(Request $request)
    {

        $data = $request->validate(
            [
                'ps_id' => 'required|int',
                'file' => 'required|file|mimes:csv,xlsx'
            ]
        );

        $list =  Excel::toArray(new ParticipantImport,  request()->file('file'));
        foreach ($list[0] as $items) {
            $info = array(
            'day' => $items[0],
            'name' => $items[1],
            'gender' => $items[2],
            'voters_id' => $items[3],
            'contact' => $items[4],
            'category' => $items[5],
            'ps_id' => $data['ps_id']);
            Participant::create($info);
        }
        return back()->with('msg', 'List Uploaded Successfully');
    }


}
