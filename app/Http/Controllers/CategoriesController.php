<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {

        $this->middleware('auth');
    }

    public function index() {

    $categories = Category::paginate(3);
     return view('categories.index', [
            'categories' => DB::table('cabin_categories')->paginate(3)
        ]);
    }

    public function edit($id) {
    $category = Category::findOrFail((int)$id);
    return view('categories.edit')->with('category', $category);
    }

    public function update(Request $request) {

        $request->validate([
            'title' => 'required|max:155',
            'photos' => 'required|max:155',
            'description' => 'required|min:25',
            'vendor_code' => 'required|min:3',
            'photos' => 'required|min:25',
            'ordering' => 'required|integer|min:1',
            'ship_id' => 'required|integer|min:1',
            'state' => 'required|min:1',

        ]);

        $id = $request->form_id;
        $category = Category::where('id', (int) $id)->first(); 
        $category->title = $request->title;
        $category->description =$request->description;
        $category->ordering = $request->ordering;
        $category->state = $request->state;
        $category->ship_id = $request->ship_id;
        $category->photos = $request->photos;
        $category->vendor_code = $request->vendor_code;
        $category->save();
        
        return redirect()->route('categories.index')->with('success', 'Category was updated successfully');

    }


}
