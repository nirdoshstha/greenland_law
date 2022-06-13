<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class UserRegisterController extends BackendBaseController
{
    private $model;
    protected $base_route = 'user.';
    protected $view_path = 'admin.user.';
    protected $panel = 'User Register';
    protected $img_path = 'uploads/userregister/';

    public function __construct(){
    $this->model = new User();
    }

    public function index(){
        $data = $this->model::all();
        // return view($this->view_path.'index')->with('data',$data);
        return view($this->__loadDataToView($this->view_path.'index'),compact('data'));

    }


    public function edit($id){
        $data = $this->model::findorFail($id);
        // return view($this->view_path.'edit')->with('aboutus',$aboutus);
        return view($this->__loadDataToView($this->view_path.'edit'),compact('data'));

    }

    public function update(UserRegisterRequest $request, $id){
        // We have already Make Request->UserRegisterRequest for Dynamic validation;
        $data = $this->model::findorFail($id);

        if($data){
            $request->request->add(['updated_by' => auth()->user()->name]);
            $data->update($request->all());
            session()->flash('success_message', $this->panel. ' Updated Successfully');
            }
        else{
                session()->flash('error_message',$this->panel. ' Updated Fail');
            }

            return redirect()->route($this->base_route.'index');
    }

    public function delete($id){
        try{
            $data = $this->model::findOrFail($id);
            $this->deleteImage($data->image);
            $data->delete();
            session()->flash('success_message', $this->panel. '  deleted successfully..');
            }
        catch(\Exception $e){
            session()->flash('error_message', $this->panel. ' not deleted, something went wrong..');
            }
        return redirect()->route($this->base_route.'index');
    }
}
