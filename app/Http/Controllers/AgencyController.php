<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgencyRequest;
use App\Http\Requests\UpdateAgencyRequest;
use App\Models\Agency;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AgencyController extends Controller
{
    public function indexAgency()
    {
        $agencies = Agency::all();
        return view('index', compact('agencies'));
    }

    public function createAgency()
    {
        return view('create');
    }

    public function storeAgency(AgencyRequest $request)
    {
        $agency = new Agency();
        $agency->fill($request->all());
        $agency->save();
        return redirect()->route('agency.index');
    }

    public function editAgency($id)
    {
        $agency = Agency::findOrFail($id);
        return view('edit', compact('agency'));
    }

    public function updateAgency(Request $request, $id)
    {
        $agency = Agency::findOrFail($id);
        $agency->code = $request->code;
        $agency->name = $request->name;
        $agency->phone = $request->phone;
        $agency->mail = $request->mail;
        $agency->address = $request->address;
        $agency->manager = $request->manager;
        $agency->status = $request->status;
        $agency->save();
        return redirect()->route('agency.index');
    }

    public function deleteAgency($id)
    {
        $agency = Agency::findOrFail($id);
        $agency->delete();
        return redirect()->route('agency.index')->with('message','Deleted');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $agencies = Agency::where('name', 'LIKE', '%' . $keyword . '%')->get();
        return view('search',compact('agencies'));
    }
}
