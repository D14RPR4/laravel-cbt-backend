<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSoalRequest;
use App\Http\Requests\UpdateSoalRequest;
use App\Models\Soal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SoalController extends Controller
{
    public function index(Request $request)
    {
        // $users = \App\Models\User::paginate(10);

        $soals = DB::table('soals')
            ->when($request->input('pertanyaan'), function ($query, $pertanyaan) {
                return $query->where('pertanyaan', 'like', '%' . $pertanyaan . '%');
            })
            ->orderBy('id', 'DESC')
            ->paginate(10);

        return view('pages.soals.index', compact('soals'));
    }

    public function create (){
        return view('pages.soals.create');
    }

    public function store(StoreSoalRequest $request){
        $data = $request->all();
        \App\Models\Soal::create($data);
        return redirect()->route('soal.index')->with('success', 'Soal successfully created');
    }

    public function edit ($id){
        $soals =\App\Models\Soal::findOrFail($id);
        return view('pages.soals.edit',compact('soals'));
    }

    public function update (UpdateSoalRequest $request, Soal $soal){
        $data =$request->validated();
        $soal->update($data);
        return redirect()->route('soal.index')->with('success', 'User seccessfully updated');
    }

    public function destroy (Soal $soal){
        $soal->delete();
        return redirect()->route('soal.index')->with('success', 'successfully deleted');
    }

}
