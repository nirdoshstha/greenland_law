<div class="row">
    <div class="col-md-12">
        <div class="row py-1">
            <div class="col-md-12 ">
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
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                {{ Form::label('slug', 'Slug', ['class'=>'col-md-4 col-form-label']) }}
            </div>
            <div class="card-body">
                {{--  <input type="text" name="slug" id="slug" class="form-control text-muted" placeholder="Slug">  --}}
                {{Form::text('slug', null, ['class'=>'form-control','id'=>'slug','placeholder'=>'Slug']) }}

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
                {{ Form::label('copyright', 'Copyright', ['class'=>'col-md-6 col-form-label']) }}

            </div>
            <div class="card-body">
                {{Form::textarea('copyright', null, ['class'=>'form-control','id'=>'copyright','placeholder'=>'Copyright', 'rows'=>'2']) }}

                {{--  <textarea name="seo_desc" class="form-control text-muted" placeholder="Type Meta Description"></textarea>  --}}
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
                {{ Form::label('facebook', 'Facebook', ['class'=>'col-md-6 col-form-label']) }}

            </div>
            <div class="card-body">
                {{Form::text('facebook', null, ['class'=>'form-control','id'=>'facebook','placeholder'=>'Facebook', 'rows'=>'2']) }}
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
                {{ Form::label('twitter', 'Twitter', ['class'=>'col-md-6 col-form-label']) }}

            </div>
            <div class="card-body">
                {{Form::text('twitter', null, ['class'=>'form-control','id'=>'twitter','placeholder'=>'Twitter', 'rows'=>'2']) }}
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
                {{ Form::label('youtube', 'Youtube', ['class'=>'col-md-6 col-form-label']) }}

            </div>
            <div class="card-body">
                {{Form::text('youtube', null, ['class'=>'form-control','id'=>'youtube','placeholder'=>'Youtube', 'rows'=>'2']) }}
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
                {{ Form::label('instagram', 'Instagram', ['class'=>'col-md-6 col-form-label']) }}

            </div>
            <div class="card-body">
                {{Form::text('instagram', null, ['class'=>'form-control','id'=>'instagram','placeholder'=>'Instagram', 'rows'=>'2']) }}
            </div>
        </div>
    </div>

</div>


    <div class="row">
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

</div><!--close product div--></div>
</div>
</div>
 </div>
</div>
<div class="modal-footer">
<button type="submit" class="btn btn-primary">Save changes</button>
</div>
