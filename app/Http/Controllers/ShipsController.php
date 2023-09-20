<?php

namespace App\Http\Controllers;
use App\Models\Ship;
use App\Models\Photo;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShipsController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('auth');
	}

	public function index() {
		return view('ships.index', [
			'ships' => DB::table('ships')->paginate(3),
		]);
	}

	public function edit($id) {
		$ship = Ship::findOrFail((int)$id);
		$categories = Category::with('ship')->where('ship_id','=', $id)->get();
		$photos = Photo::with('ship')->where('ship_id','=', $id)->distinct()->get();
		return view('ships.edit')->with('ship', $ship)->with('categories', $categories)->with('photos',$photos);
	}

	public function update(Request $request) {
		$request->validate([
			'title' => 'required|max:155',
			'spec' => 'required|min:55',
			'description' => 'required|min:25',
			'ordering' => 'required|integer|min:1',
			'state' => 'required|integer|min:1',
		]);

        $category_id =  $request->category_id;
        $category = Category::where('id', (int) $category_id)->first();
        $category->save(); 
    
        $photo_id = $request->photo_id;
        $photo = Category::where('id', (int) $photo_id)->first();
        $photo->save(); 
      
        $id = $request->form_id;  
        $ship = Ship::where('id', (int) $id)->first();  
        $ship->title = $request->title;
        $ship->spec = $request->spec;
        $ship->description =$request->description;
        $ship->ordering = $request->ordering;
        $ship->state = $request->state;
        $ship->save();
		
		return redirect()->route('ships.index')->with('success', 'Ship was updated successfully');

	}

}
