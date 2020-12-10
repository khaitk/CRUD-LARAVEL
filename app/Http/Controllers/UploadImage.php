<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\UploadModel;

class UploadImage extends Controller
{
    public function index()
    {
        return view('index');
    }
    //create data
    public function fileupload(Request $request)
    {
        $name = $request->input('name');
        $group = $request->input('group');
        $gmail = $request->input('gmail');
        if($file=$request->file('images')){
            $namefile = $file->getClientOriginalName();
            $file->move('image', $namefile);
            DB::table('image')->insert([
                'image'=>$namefile,
                'name'=>$name,
                'group' => $group,
                'gmail' => $gmail
            ]);
        }
        return redirect()->back();
    }
    //show data
    public function show()
    {
        $uploadimage = UploadModel::all();
        return view('show')->with('show', $uploadimage);
    }
    //delete data
    public function destroy($id)
    {
        DB::delete('delete from image where id = ?', [$id]);
        return redirect()->back();
    }
    //show data for update
    public function showupdate($id)
    {
        $user = DB::select('select * from image where id = ?', [$id]);
        return view('update')->with('user', $user);
    }
    //update data
    public function edit(Request $request, $id)
    {
        $name = $request->input('name');
        $group = $request->input('group');
        $gmail = $request->input('gmail');
        if($file=$request->file('images')){
            $namefile = $file->getClientOriginalName();
            $file->move('image', $namefile);
            DB::table('image')->where('id', $id)->update([
                'image'=>$namefile,
                'name'=>$name,
                'group' => $group,
                'gmail' => $gmail
            ]);
        }
        return redirect()->back();
    }
    //search data
    public function search(Request $request)
    {
        $search = $request->get('search');
        $user = DB::table('image')->where('name', 'LIKE', '%'. $search. '%')->get();
        return view('show', ['show' => $user]);
    }
}
