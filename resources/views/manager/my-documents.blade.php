@extends('layouts.manager')

@section('title')
Manager My Documents |Manager Dashboard
@endsection

@section('content')
<div class="container bg-light">

        <div class="px-3 card-header"><h4>My Document Details</h4></div>
        <div class="card-body">
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>S.N</th>
                    <th>Client Name/ID</th>
                    <th>Document Name</th>
                    <th>Document</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($mydocument as $mydocuments )

                <tr>
                    <td>{{$mydocuments->id}}</td>
                    <td>{{$mydocuments->user->name}}</td>
                    <td>{{$mydocuments->dname}}</td>
                    <td><a href="{{url('uploads/mydocument/'.$mydocuments->image)}}" target="_blank"><span class="btn btn-primary btn-sm"><i class="fas fa-download p-2"></i>Download </span></a></td>

                </tr>
                @endforeach

            </tbody>
        </table>
        {{-- <div class="text-center mt-3 d-flex justify-content-center">{{$mydocument->Links('pagination::bootstrap-4')}}</div> --}}
    </div>
</div>

@endsection

@section('script')
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endsection
