<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PTTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = DB::table('personal_training_time')
            ->whereNotIn('status', [-1]) -> paginate(5);
        $data = ['lists' => $lists];
        return view('admin.pt-time.list-pt-time', $data);

    }

    public function index2()
    {
        $lists =DB::table('personal_training_time')->whereNotIn('status', [1]) ->paginate(5);
        $data = ['lists' => $lists];
        return view('admin.pt-time.deleted-pt-time', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pt-time.create-pt-time');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lists =  DB::table('personal_training_time');
        $lists->time_id = $request->get('time_id');
        $lists->personal_training_id = $request->get('personal_training_id');
        $lists->save();
        return redirect('admin/pt-time');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lists = DB::table('personal_training_time')->find($id);
        $data = ['lists' => $lists];
        return view('admin.pt-time.list-pt-time', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lists = DB::table('personal_training_time')->find($id);
        $data = ['lists' => $lists];
        return view('admin.pt-time.edit-pt-time', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lists = DB::table('personal_training_time')->find($id);
        $lists->time_id = $request->get('time_id');
        $lists->personal_training_id = $request->get('personal_training_id');
        $lists->save();
        return redirect('admin/pt-time');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pt_time = DB::table('personal_training_time')->find($id);
        $pt_time->status = -1;
        $pt_time->save();
        return response()->json(['status' => '200', 'message' => 'Okie']);
    }

    public function changeStatus(Request $request)
    {
        $listItem = DB::table('personal_training_time')->whereIn('id', $request->input('ids'));
        $listItem->update(array(
            'status' => (int)$request->input('status'),
            'updated_at' => date('Y-m-d H:i:s')));
        return response()->json(['status' => '200', 'message' => 'Good']);
    }
}
