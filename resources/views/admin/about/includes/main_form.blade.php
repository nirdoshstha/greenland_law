<div class="row">
            <div class="col-md-6 ">
                <div class="card">
                    <div class="card-header">
                        {{ Form::label('title', 'Title *', ['class'=>'col-sm-2 col-form-label']) }}
                    </div>
                    <div class="card-body">
                        {{Form::text('title', null, ['class'=>'form-control','id'=>'title','placeholder'=>'Title']) }}
                    @include('admin.includes.validation_error_message',['fieldname'=>'title'])
                    </div>
                </div>
            </div>

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

</div>

<div class="row">
    <div class="col-12">
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

<div class="row">
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
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                {{ Form::label('seo_title', 'Meta Title', ['class'=>'col-md-4 col-form-label']) }}
            </div>
            <div class="card-body">
                {{Form::text('seo_title', null, ['class'=>'form-control','id'=>'seo_title','placeholder'=>'Seo Title']) }}

                {{--  <input type="text" name="seo_title" class="form-control text-muted" placeholder="Type Meta Title">  --}}
                <div class="alert-danger">{{$errors->first('seo_title')}}</div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                {{ Form::label('seo_desc', 'Meta Description', ['class'=>'col-md-6 col-form-label']) }}

            </div>
            <div class="card-body">
                {{Form::textarea('seo_desc', null, ['class'=>'form-control','id'=>'seo_desc','placeholder'=>'Seo Description', 'rows'=>'2']) }}

                {{--  <textarea name="seo_desc" class="form-control text-muted" placeholder="Type Meta Description"></textarea>  --}}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                {{ Form::label('seo_keyword', 'Meta Keyword', ['class'=>'col-md-6 col-form-label']) }}

            </div>
            <div class="card-body">
                {{Form::textarea('seo_keyword', null, ['class'=>'form-control','id'=>'seo_keyword','placeholder'=>'Seo Keyword', 'rows'=>'2']) }}

                {{--  <textarea name="seo_keyword" class="form-control text-muted" placeholder="Type Meta Description"></textarea>  --}}
            </div>
        </div>
    </div>

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
