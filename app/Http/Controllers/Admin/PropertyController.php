<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Location;
use App\Property;
use Illuminate\Http\Request;
use Image;
use File;

class PropertyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function index(Request $request)
    {
        $model = str_slug('property','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $property = Property::where('location', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('address', 'LIKE', "%$keyword%")
                ->orWhere('type', 'LIKE', "%$keyword%")
                ->orWhere('price', 'LIKE', "%$keyword%")
                ->orWhere('beds', 'LIKE', "%$keyword%")
                ->orWhere('baths', 'LIKE', "%$keyword%")
                ->orWhere('area', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $property = Property::paginate($perPage);
            }

            return view('admin.property.index', compact('property'));
        }
        return response(view('403'), 403);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $model = str_slug('property','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {

            $items = Location::pluck('name', 'id');

            return view('admin.property.create', compact('items'));
        }
        return response(view('403'), 403);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $model = str_slug('property','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            $this->validate($request, [
			'location' => 'required',
			'name' => 'required',
			'address' => 'required',
			'type' => 'required',
			'price' => 'required',
			'beds' => 'required',
			'baths' => 'required',
			'area' => 'required',
			'description' => 'required',
			'image' => 'required',
           
		]);

            $property = new property($request->all());

            if ($request->hasFile('image')) {

                $file = $request->file('image');
                
                //make sure yo have image folder inside your public
                $property_path = 'uploads/properties/';
                $fileName = $file->getClientOriginalName();
                $profileImage = date("Ymd").$fileName.".".$file->getClientOriginalExtension();

                Image::make($file)->save(public_path($property_path) . DIRECTORY_SEPARATOR. $profileImage);

                $property->image = $property_path.$profileImage;
            }
            
            $property->save();

            return redirect('admin/property')->with('flash_message', 'Property added!');
        }
        return response(view('403'), 403);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $model = str_slug('property','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $property = Property::findOrFail($id);
            return view('admin.property.show', compact('property'));
        }
        return response(view('403'), 403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $model = str_slug('property','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $property = Property::findOrFail($id);

            $items = Location::pluck('name', 'id');

            return view('admin.property.edit', compact('property', 'items'));
        }
        return response(view('403'), 403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $model = str_slug('property','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $this->validate($request, [
			'location' => 'required',
			'name' => 'required',
			'address' => 'required',
			'type' => 'required',
			'price' => 'required',
			'beds' => 'required',
			'baths' => 'required',
			'area' => 'required',
			'description' => 'required',
		]);
            $requestData = $request->all();
            

        if ($request->hasFile('image')) {
            
            $property = property::where('id', $id)->first();
            $image_path = public_path($property->image); 
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $file = $request->file('image');
            $fileNameExt = $request->file('image')->getClientOriginalName();
            $fileNameForm = str_replace(' ', '_', $fileNameExt);
            $fileName = pathinfo($fileNameForm, PATHINFO_FILENAME);
            $fileExt = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            $pathToStore = public_path('uploads/properties/');
            Image::make($file)->save($pathToStore . DIRECTORY_SEPARATOR. $fileNameToStore);

             $requestData['image'] = 'uploads/properties/'.$fileNameToStore;               
        }


            $property = Property::findOrFail($id);
             $property->update($requestData);

             return redirect('admin/property')->with('flash_message', 'Property updated!');
        }
        return response(view('403'), 403);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $model = str_slug('property','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            Property::destroy($id);

            return redirect('admin/property')->with('flash_message', 'Property deleted!');
        }
        return response(view('403'), 403);

    }
}
