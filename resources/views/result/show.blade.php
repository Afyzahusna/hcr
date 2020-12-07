@extends('layouts.admin')

@section('content')

    <div class="d-flex" id="wrapper">
        <div class="container">
            @if($result)
                <div class="row">
                    <div class="col-md-12 mt-4">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>User</th>
                                <td>{{$result->user->name}} ({{$result->user->email}})</td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td>{{$result->created_at}}</td>
                            </tr>
                            <tr>
                                <th>Score</th>
                                <td>//tick over all item syntax
                            </tr>
                        </table>
                        <table class="table table-bordered table-striped">
                                  <td> </td>
                                  
                        </table>
                    </div>
                </div>
                @else
                <h1>No Result</h1>
            @endif
        </div>
    </div>
@endsection
