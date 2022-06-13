<div class="row">
    <div class="col-md-12">
        <div class="row py-1">
            <div class="col-md-6 ">
                <div class="card">
                    <div class="card-header">
                        {{ Form::label('title', 'Title *', ['class'=>'col-sm-2 col-form-label']) }}
                    </div>
                    <div class="card-body">
                        {{Form::text('title', null, ['class'=>'form-control','id'=>'title','placeholder'=>'Title']) }}
                    @include('admin.includes.validation_error_message',['fieldname'=>'title'])
                    </div>
                {{--  <div class="text-danger">{{$errors->first('title')}}</div>  --}}

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
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                {{ Form::label('subtitle', 'Subtitle', ['class'=>'col-sm-2 col-form-label']) }}
            </div>
            <div class="card-body">
            {{--  <input type="text" name="subtitle" class="form-control">  --}}
            {{Form::textarea('subtitle', null, ['class'=>'form-control','id'=>'subtitle','placeholder'=>'Sub title']) }}
            @include('admin.includes.validation_error_message',['fieldname'=>'subtitle'])

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mb-1">
        <div class="card">
            <div class="card-header">
                {{ Form::label('description', 'Long Description', ['class'=>'col-md-6 col-form-label']) }}

            </div>
            <div class="card-body">
                {{Form::textarea('description', null, ['class'=>'form-control','id'=>'description','placeholder'=>'Long Description', 'rows'=>'2']) }}

            {{--  <textarea name="description" class="form-control"></textarea>  --}}
            @include('admin.includes.validation_error_message',['fieldname'=>'description'])
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



<div class="row">



 </div>
</div>
<div class="modal-footer">
<button type="submit" class="btn btn-primary">Save changes</button>
</div>
