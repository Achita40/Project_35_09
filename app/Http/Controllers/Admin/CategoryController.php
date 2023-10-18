<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ProductType;

class CategoryController extends Controller
{
    public function index()
    {
        return view(
            'admin.category.index',
            [
                'categorys' => ProductType::all(),
            ]
        );
    }
    public function create()
    {
        return view('admin.category.create');
    }

    public function insert(Request $request)
    {

        $request->validate(
            [
                'name' => 'required',
            ],
            [
                'name.required' => 'โปรดกรอกชื่อประเภท',
            ]
        );

        ProductType::create([

            'name' => $request->name,

        ]);

        return redirect()->route('cat.index');

    }

    public function edit($id)
    {

        $find = ProductType::find($id);

        if(!empty($find->id))
        {
            return view(
                'admin.category.edit',
                [
                    'type' => $find,
                ]
            );
        }else{
            return redirect()->route('cat.index');
        }

    }

    public function update(Request $request, $id)
    {

        $request->validate(
            [
                'name' => 'required',
            ],
            [
                'name.required' => 'โปรดกรอกชื่อประเภท',
            ]
        );

        $find = ProductType::find($id);

        if(!empty($find->id))
        {
            $find->name = $request->name;
            $find->update();
            return redirect()->route('cat.index');
        }else{
            return redirect()->route('cat.index');
        }

    }

    public function destroy($id)
    {

        $find = ProductType::find($id);

        if(!empty($find->id))
        {
            $find->delete();
            return redirect()->route('cat.index');
        }else{
            return redirect()->route('cat.index');
        }

    }

}
