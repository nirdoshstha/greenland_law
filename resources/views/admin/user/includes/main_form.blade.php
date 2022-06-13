<div class="row">
    <div class="col-md-12">
        <div class="row py-1">
            <div class="col-md-6 ">
                <div class="card">
                    <div class="card-header">
                        {{ Form::label('name', 'Name *', ['class'=>'col-sm-2 col-form-label']) }}
                    </div>
                    <div class="card-body">
                        {{Form::text('name', null, ['class'=>'form-control','id'=>'name','placeholder'=>'Name']) }}
                    @include('admin.includes.validation_error_message',['fieldname'=>'name'])
                    </div>
                {{--  <div class="text-danger">{{$errors->first('name')}}</div>  --}}

                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        {{ Form::label('email', 'Email', ['class'=>'col-sm-2 col-form-label']) }}
                    </div>
                    <div class="card-body">
                    {{--  <input type="text" name="email" class="form-control">  --}}
                    {{Form::text('email', null, ['class'=>'form-control','id'=>'email','placeholder'=>'Email']) }}
                    @include('admin.includes.validation_error_message',['fieldname'=>'email'])

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
                {{ Form::label('user_role', 'User Role', ['class'=>'col-md-4 col-form-label']) }}
            </div>
            <div class="card-body">
                {{--  <input type="text" name="user_role" id="user_role" class="form-control text-muted" placeholder="User Role">  --}}
        {{--  {{Form::select('user_role', ['L' => 'Large', 'S' => 'Small'], null, ['class'=>'form-control','id'=>'user_role','placeholder'=>'User Role']) }}  --}}
          {{Form::select('user_role', ['0' => 'Client', '1' => 'Manager','2' => 'Admin'], null, ['class'=>'form-control','placeholder' => 'Please Choose']) }}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                {{ Form::label('ban_unban', 'Ban Unban', ['class'=>'col-md-4 col-form-label']) }}
            </div>
            <div class="card-body">
                {{--  <input type="text" name="ban_unban" id="ban_unban" class="form-control text-muted" placeholder="Ban Unban">  --}}
                {{Form::select('ban_unban', ['0' => 'Unban', '1' => 'Banned'], null, ['class'=>'form-control','placeholder'=> 'Please Choose']) }}

            </div>
        </div>
    </div>

</div>


<div class="modal-footer">
<button type="submit" class="btn btn-primary">Save changes</button>
</div>
