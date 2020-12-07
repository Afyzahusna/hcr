@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Insert New Item</div>

                <div class="card-body">
                    <!-- show validation error messages -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <!-- form start -->
                    <form action="{{url('item')}}"  method="POST" enctype="multipart/form-data">
                        @csrf

                        Title 
                        <input name="title" type="text" class="form-control">

                        <br>

                        Reference 
                        <input name="reference" type="text" class="form-control">
                        
                        {{-- <input type=file 
                        <input type="file"
                        name="attachment"
                        {{-- class="form-control">  --}}

                        Score
                        <input name="score" type="text" class="form-control">

                        

                        <!-- submit button -->
                        <br>    
                        <button type="submit" class="btn btn-primary">
                        Save</button>
                    </form>

                    <!-- form ends -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
