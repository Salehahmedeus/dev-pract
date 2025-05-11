<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PaitentController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', compact('patients'));
    }

    public function search(Request $request)
    {
        $query = $request->get('query');

        $patients = Patient::where('name', 'LIKE', "%{$query}%")
            ->select('id', 'name', 'email')
            ->limit(10)
            ->get();

        return response()->json($patients);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'dob' => 'nullable|date',
            'gender' => 'required|in:male,female',
        ]);

        Patient::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'gender' => $request->gender,
        ]);

        return redirect()->route('patients.create');
    }

    // public function create(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'phone' => 'nullable|string|max:20',
    //         'dob' => 'nullable|date',
    //         'gender' => 'required|in:male,female',
    //     ]);

    //     Patient::create([
    //         'name' => $request->name,
    //         'phone' => $request->phone,
    //         'dob' => $request->dob,
    //         'gender' => $request->gender,
    //     ]);



    //     return view('patients.create'); // Make sure this view exists
    // }
}
