<div class="row">
    <div class="col-md-12">
        <div class="row py-1">
            <div class="col-md-6 ">
                <div class="card">
                    <div class="card-header">
                        {{ Form::label('title', 'Title *', ['class'=>'col-md-6 col-form-label']) }}
                    </div>
                    <div class="card-body">
                        {{ Form::text('title',null, ['class'=>'form-control','id'=>'title','placeholder'=>'Title']) }}
                    @include('admin.includes.validation_error_message',['fieldname'=>'title'])
                    </div>
                {{--  <div class="text-danger">{{$errors->first('title')}}</div>  --}}

                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        {{ Form::label('slug', 'Slug', ['class'=>'col-md-6 col-form-label']) }}
                    </div>
                    <div class="card-body">
                    {{--  <input type="text" name="slug" class="form-control">  --}}
                    {{Form::text('slug', null, ['class'=>'form-control','id'=>'slug','placeholder'=>'Slug']) }}
                    @include('admin.includes.validation_error_message',['fieldname'=>'slug'])

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
                {{ Form::label('order', 'Order *', ['class'=>'col-md-4 col-form-label']) }}
            </div>
            <div class="card-body">
                {{--  <input type="text" name="order" id="order" class="form-control text-muted" placeholder="Order *">  --}}
                {{Form::number('order', null, ['class'=>'form-control','id'=>'order','placeholder'=>'Order *']) }}
                @include('admin.includes.validation_error_message',['fieldname'=>'order'])

            </div>
        </div>
    </div>
    <div class="col-md-6">
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
</div>





</div>
<div class="modal-footer">
<button type="submit" class="btn btn-primary">Save changes</button>
</div>
