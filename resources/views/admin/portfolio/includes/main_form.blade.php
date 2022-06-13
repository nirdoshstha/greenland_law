<div class="row">
    <div class="col-md-12">
        <div class="row py-1">
            <div class="col-md-6 ">
                <div class="card">
                    <div class="card-header">
                        {{ Form::label('name', 'Name *', ['class'=>'col-sm-2 col-form-label']) }}
                    </div>
                    <div class="card-body">
                        {{Form::text('name', null, ['class'=>'form-control','id'=>'name','placeholder'=>'Title']) }}
                    @include('admin.includes.validation_error_message',['fieldname'=>'name'])
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        {{ Form::label('designation', 'Designation', ['class'=>'col-sm-6 col-form-label']) }}
                    </div>
                    <div class="card-body">
                    {{--  <input type="text" name="designation" class="form-control">  --}}
                    {{Form::text('designation', null, ['class'=>'form-control','id'=>'designation','placeholder'=>'Designation']) }}
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
                {{ Form::label('order', 'Order', ['class'=>'col-md-6 col-form-label']) }}

            </div>
            <div class="card-body">
                {{Form::number('order', null, ['class'=>'form-control','id'=>'order','placeholder'=>'Order',  ]) }}
                @include('admin.includes.validation_error_message',['fieldname'=>'order'])

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

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                {{ Form::label('description', 'Long Description', ['class'=>'col-md-6 col-form-label']) }}

            </div>
            <div class="card-body">
                {{Form::textarea('description', null, ['class'=>'form-control','id'=>'description','placeholder'=>'Long Description', 'rows'=>'2']) }}
            @include('admin.includes.validation_error_message',['fieldname'=>'description'])

            </div>
        </div>
    </div>


        <div class="col-6">
            {{ Form::label('status', 'Status',["class" => "radiostatus"]) }}

        </div>
        <div class="col-9">
            <label class="radio-inline mr-5">
            {{ Form::radio('status', 1, true) }} Hide </label>
            <label class="radio-inline">
            {{ Form::radio('status',0, false) }} Show </label>
        </div>

</div>



</div>

</div>

</div><!--close product div--></div>
</div>
</div>
 </div>
</div>
<div class="modal-footer">
<button type="submit" class="btn btn-primary">Save changes</button>
</div>
