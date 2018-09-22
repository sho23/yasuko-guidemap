<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChildArea;
use App\Area;

class ChildAreasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($areaId)
    {
        $childAreas = ChildArea::where('area_id', $areaId)->orderBy('id', 'asc')->get();
        return view('child_areas.index', compact('childAreas', 'areaId'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $area = Area::where('id', $id)->first();
        return view('child_areas.create', compact('area'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'area_id' => 'required',
            'name' => 'required',
        ]);
        $childArea = new ChildArea;
        $childArea->area_id = $request->area_id;
        $childArea->name = $request->name;
        $childArea->save();
        return redirect()->route('child_areas.index', $childArea->area_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
