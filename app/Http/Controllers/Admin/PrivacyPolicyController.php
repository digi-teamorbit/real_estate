<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PrivacyPolicy;
use Illuminate\Http\Request;
use Image;
use File;

class PrivacyPolicyController extends Controller
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
        $model = str_slug('privacypolicy','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $privacypolicy = PrivacyPolicy::where('title', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $privacypolicy = PrivacyPolicy::paginate($perPage);
            }

            return view('admin.privacy-policy.index', compact('privacypolicy'));
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
        $model = str_slug('privacypolicy','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('admin.privacy-policy.create');
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
        $model = str_slug('privacypolicy','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            $this->validate($request, [
			'title' => 'required',
			'description' => 'required'
		]);

            $privacypolicy = new privacypolicy($request->all());

            if ($request->hasFile('image')) {

                $file = $request->file('image');
                
                //make sure yo have image folder inside your public
                $privacypolicy_path = 'uploads/privacypolicys/';
                $fileName = $file->getClientOriginalName();
                $profileImage = date("Ymd").$fileName.".".$file->getClientOriginalExtension();

                Image::make($file)->save(public_path($privacypolicy_path) . DIRECTORY_SEPARATOR. $profileImage);

                $privacypolicy->image = $privacypolicy_path.$profileImage;
            }
            
            $privacypolicy->save();

            return redirect('admin/privacy-policy')->with('flash_message', 'PrivacyPolicy added!');
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
        $model = str_slug('privacypolicy','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $privacypolicy = PrivacyPolicy::findOrFail($id);
            return view('admin.privacy-policy.show', compact('privacypolicy'));
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
        $model = str_slug('privacypolicy','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $privacypolicy = PrivacyPolicy::findOrFail($id);
            return view('admin.privacy-policy.edit', compact('privacypolicy'));
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
        $model = str_slug('privacypolicy','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $this->validate($request, [
			'title' => 'required',
			'description' => 'required'
		]);
            $requestData = $request->all();
            

        if ($request->hasFile('image')) {
            
            $privacypolicy = privacypolicy::where('id', $id)->first();
            $image_path = public_path($privacypolicy->image); 
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $file = $request->file('image');
            $fileNameExt = $request->file('image')->getClientOriginalName();
            $fileNameForm = str_replace(' ', '_', $fileNameExt);
            $fileName = pathinfo($fileNameForm, PATHINFO_FILENAME);
            $fileExt = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            $pathToStore = public_path('uploads/privacypolicys/');
            Image::make($file)->save($pathToStore . DIRECTORY_SEPARATOR. $fileNameToStore);

             $requestData['image'] = 'uploads/privacypolicys/'.$fileNameToStore;               
        }


            $privacypolicy = PrivacyPolicy::findOrFail($id);
             $privacypolicy->update($requestData);

             return redirect('admin/privacy-policy')->with('flash_message', 'PrivacyPolicy updated!');
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
        $model = str_slug('privacypolicy','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            PrivacyPolicy::destroy($id);

            return redirect('admin/privacy-policy')->with('flash_message', 'PrivacyPolicy deleted!');
        }
        return response(view('403'), 403);

    }
}
