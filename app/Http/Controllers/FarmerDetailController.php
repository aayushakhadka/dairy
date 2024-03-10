<?php

namespace App\Http\Controllers;

use App\Models\FarmerDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FarmerDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $details = FarmerDetail::where('user_id', Auth::id())->get();
        return view('details.index', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/details/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        FarmerDetail::create($request->except('user_id') + [
            'user_id' => Auth::id()
        ]);
    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $detail=FarmerDetail::find($id);
        return view ('details.edit',compact('detail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $detail=FarmerDetail::find($id);
        $detail->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       $detail=FarmerDetail::find($id);
       $detail->delete();
       return redirect('/details');


}
}
