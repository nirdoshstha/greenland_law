<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class MessageController extends BackendBaseController
{
    private $model;
    protected $base_route = 'message.';
    protected $view_path = 'admin.message.';
    protected $panel = 'Message from Owner';
    protected $img_path = 'uploads/message/';

    public function __construct(){
    $this->model = new Message();
    }

    public function index(){
        $data = $this->model::all();
        // return view($this->view_path.'index')->with('data',$data);
        return view($this->__loadDataToView($this->view_path.'index'),compact('data'));

    }

    public function create(){
        // return view($this->view_path.'create');
        return view($this->__loadDataToView($this->view_path.'create'));
    }

    public function store(MessageRequest $request){
        // We have already Make Request->MessageRequest for Dynamic validation;
        // $aboutus = new About();
        if($this->model){
            if($request->hasFile('image_field')){
                $image_name =$this->uploadImage($request);
                $request->request->add(['image'=>$image_name]);
            }
            $this->model->create($request->all());
            // $aboutus->save();
            session()->flash('success_message', $this->panel. ' Inserted Successfully');
        }
        else{
        session()->flash('error_message', $this->panel. ' Inserted Fail');
        }
        return redirect()->route($this->base_route.'index');
    }

    public function edit($id){
        $data= $this->model::findOrFail($id);
        // return view($this->view_path.'edit')->with('aboutus',$aboutus);
        return view($this->__loadDataToView($this->view_path.'edit'),compact('data'));

    }

    public function update(MessageRequest $request, $id){
        // We have already Make Request->MessageRequest for Dynamic validation;
        $data = $this->model::findOrFail($id);

        if($data){
            if($request->hasFile('image_field')){
                $this->deleteImage($data->image);
                $image_name =$this->uploadImage($request);
                $request->request->add(['image'=>$image_name]);
            }
            // $data->status = $request->input('status')==true ? '1' : '0';

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
