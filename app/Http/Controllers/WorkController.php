<?php

namespace App\Http\Controllers;

use App\Works;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $works = Works::all();
        $param = array(
            'uhere'=> 'Work List',
            'data' => $works
        );
        return View('worklist', $param);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $param = array(
            'uhere'=> 'Add Work'
        );
        return View('workadd', $param);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $oWork = new Works();
        if (isset($request->work_id))
        {
            $aWork = $oWork->find($request->work_id);
            $aWork->name = $request->work_name;
            $aWork->save();
        } else {
            $oWork->name = $request->work_name;
            $oWork->save();
        }
        return redirect('/work');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Works  $works
     * @return \Illuminate\Http\Response
     */
    public function edit(Works $works, int $id)
    {
        //
        $data = $works->find($id);
        $param = array (
            'uhere' => 'Edit Work',
            'data' => $data
        );
        return View('workedit', $param);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Works  $works
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Works $works)
    {
        //
    }

}
