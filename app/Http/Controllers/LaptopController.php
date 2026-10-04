<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    public function index()
    {
        $laptops = Laptop::all();
        return view('laptops.index', compact('laptops'));
    }

    public function create()
    {
        return view('laptops.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand_name' => 'required',
            'serial_number' => 'required',
            'condition' => 'required',
            'status' => 'required',
            'borrow_date' => 'required|date',
        ]);
$laptop = Laptop::findOrFail($id);
        $laptop->update($request->all()); // Baris ini otomatis menyimpan semua input termasuk tanggal
       
        return redirect('/laptops');
    }

    public function edit($id)
    {
        $laptop = Laptop::findOrFail($id);
        return view('laptops.edit', compact('laptop'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'brand_name' => 'required',
            'serial_number' => 'required',
            'condition' => 'required',
            'status' => 'required',
        ]);

        $laptop = Laptop::findOrFail($id);
        $laptop->update($request->all());

        return redirect('/laptops');
    }

    public function destroy($id)
    {
        $laptop = Laptop::findOrFail($id);
        $laptop->delete();

        return redirect('/laptops');
    }
}