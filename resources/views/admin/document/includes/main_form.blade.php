<div class="row">
    <div class="col-md-12">
        <div class="row py-1">
            <div class="col-md-6 ">
                <div class="card">
                    <div class="card-header">
                        {{ Form::label('user_id', 'Client Name *', ['class'=>'col-md-6 col-form-label']) }}
                    </div>
                    <div class="card-body">
                        {{ Form::select('user_id',$users, null, ['class'=>'form-control select2','id'=>'user_id','placeholder'=>'Choose Client Name']) }}
                    @include('admin.includes.validation_error_message',['fieldname'=>'user_id'])
                    </div>
                {{--  <div class="text-danger">{{$errors->first('title')}}</div>  --}}

                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        {{ Form::label('company_name', 'Company Name', ['class'=>'col-md-6 col-form-label']) }}
                    </div>
                    <div class="card-body">
                    {{--  <input type="text" name="company_name" class="form-control">  --}}
                    {{Form::text('company_name', null, ['class'=>'form-control','id'=>'company_name','placeholder'=>'Company Name']) }}
                    @include('admin.includes.validation_error_message',['fieldname'=>'company_name'])

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                {{ Form::label('dname', 'Document Name', ['class'=>'col-md-4 col-form-label']) }}
            </div>
            <div class="card-body">
                {{--  <input type="text" name="dname" id="dname" class="form-control text-muted" placeholder="Document Name">  --}}
                {{Form::text('dname', null, ['class'=>'form-control','id'=>'dname','placeholder'=>'Document Name']) }}

            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                {{ Form::label('image_field', 'Image', ['class'=>'col-md-4 col-form-label']) }}
            </div>
            <div class="card-body">
            {{--  <input type="file" name="image" class="form-control" >  --}}
            {{Form::file('image_field', null, ['class'=>'form-control','id'=>'image_field']) }}
            @include('admin.includes.validation_error_message',['fieldname'=>'image'])
            </div>
        </div>
    </div>
</div>

<div class="row p-4">
    <div class="col-4">
        {{ Form::label('status', 'Status',["class" => "radiostatus"]) }}

    </div>
    <div class="col-9">
        <label class="radio-inline">
        {{ Form::radio('status', 1, true) }} Hide </label>
        <label class="radio-inline">
        {{ Form::radio('status',0, false) }} Show </label>
    </div>
</div>



</div>
<div class="modal-footer">
<button type="submit" class="btn btn-primary">Save changes</button>
</div>
