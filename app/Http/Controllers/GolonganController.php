<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use Illuminate\Http\Request;

class GolonganController extends Controller
{
    public function index(Request $request)
    {
        $data = Golongan::all();
        if ($request->ajax()) {
            return datatables()->of($data)
                ->addColumn('action', function ($data) {
                    $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" title="View" class="view btn btn-info btn-sm"><i class="bi bi-eye-fill"></i></a>';
                    $button .= '&nbsp;&nbsp;';
                    $button .= '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" title="Edit" class="edit btn btn-warning btn-sm"><i class="bi bi-pencil-fill"></i></a>';
                    $button .= '&nbsp;&nbsp;';
                    $button .= '<button type="button" name="delete" data-id="' . $data->id . '" title="Delete" class="deletes btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></button>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('components.golongan');
    }

    public function edit($id)
    {
        $data = Golongan::find($id);
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $data = Golongan::updateOrCreate(
            ['id' => $request->id],
            [
                'golongan' => $request->golongan,
                'gaji' => $request->gaji,
            ]
        );
        return response()->json($data);
    }

    public function destroy($id)
    {
        $data = Golongan::find($id)->delete();
        return response()->json($data);
    }
}
