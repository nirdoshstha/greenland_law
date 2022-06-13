<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Models\Submenu;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubmenuController extends Controller
{
    public function index(){
        $submenu = Submenu::all();
        return view('admin.submenu.index')->with('submenu',$submenu);
    }

    public function create(){
        $menu = Menu::all();
        return view('admin.submenu.create-submenu')
        ->with('menu',$menu);
    }

    public function store(Request $request){
        $submenu = new Submenu();
        $submenu->title = $request->input('title');
        $submenu->mainmenu_id = $request->input('mainmenu_id');
        // $submenu->slug = Str::slug($submenu->title);
        $submenu->slug = $request->input('slug');
        $submenu->status = $request->input('status')==true ? '1' : '0';
        $submenu->save();
        return redirect('admin/submenu')->with('status','Data Stored Successfully.');
    }

    public function edit($id){
        $menu = Menu::all();
        $submenu = Submenu::find($id);
        return view('admin.submenu.edit-submenu')
        ->with('menu',$menu)
        ->with('submenu',$submenu);
    }

    public function update(Request $request, $id){
        $submenu = Submenu::find($id);

        $submenu->title = $request->input('title');
        $submenu->mainmenu_id = $request->input('mainmenu_id');
        // $submenu->slug = Str::slug($submenu->title);
        $submenu->slug = $request->input('slug');
        $submenu->status = $request->input('status')==true ? '1' : '0';
        $submenu->update();
        return redirect('admin/submenu')->with('status','Data Updated Successfully');
    }

    public function delete($id){
        $submenu = Submenu::find($id);
        $submenu->delete();
        return redirect('admin/submenu')->with('status','Your Data is deleted successfully..');
    }
}
