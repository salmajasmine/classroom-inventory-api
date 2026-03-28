<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;

class LoanController extends Controller
{

    public function index()
{
    return Loan::all();
}

public function store(Request $request)
{
    return Loan::create([
        'name' => $request->name,
        'nim' => $request->nim,
        'classroom' => $request->classroom,
        'borrow_time' => now(),
        'status' => 'borrowed'
    ]);
}

public function show($id)
{
    return Loan::findOrFail($id);
}

public function update(Request $request, $id)
{
    $loan = Loan::findOrFail($id);

    $loan->update([
        'return_time' => now(),
        'status' => 'returned'
    ]);

    return $loan;
}

public function destroy($id)
{
    Loan::destroy($id);

    return response()->json([
        'message' => 'deleted'
    ]);
}
}