@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Items Index
                
                    <div class="float-right">
                        <form class="form-inline" method="get"
                        action="">
                            <input type="text" name="keyword"
                            class="form-control">
                            <button type="submit" 
                            class="btn btn-primary"
                            title="Search item">
                                <i class="fa fa-search">Search
                                </i>
                            </button>
                                <div class="btn-toolbar float-right" role="toolbar" >
                                    <a href="{{url('/item/create')}}" class="btn btn-success ml-1" data-toggle="tooltip" >Create New<i class="fas fa-plus-circle"></i></a>
                                </div><!--btn-toolbar-->
                        </form>
                        
                    </div>
                </div>

                <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success')}}
                    </div>
                @endif
                
                <table class="table table-striped">
                    <thead><tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>Reference</th>
                        <th>Action</th>
                    </tr></thead>

                    <tbody>
                      
                        @foreach($items as $item)
                    <tr>                 
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->reference}}</td>
                        <td> <input type="checkbox" class="marks" value="" data-score="2"> </td> 
                        <script>
                            $('.marks').on('change', function() {
                             var total = 0;
                                $('.marks:checked').each(function() {
                               total += $(this).data('score');
                                });
                                 $('#total').text( total.toFixed(2) );
                                });
                            </script>
                        </div>
                        <td><a class="btn btn-success btn-sm" href=""> Show <i class="fa fa-list-alt">
                            </i>
                        </a>
                        <!-- button edit -->
                        <a href="" class="btn btn-warning btn-sm"> Edit   <i class="fa fa-edit">
                            </i>
                        </a>
                        <a form method="POST" action="">
                        @csrf
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?')"> Delete  <i class="fa fa-trash"></i> </a>
                            </button>
                        </td>                     
                        </form>
                    </tr>
                      @endforeach
                    </tbody>
                 </table>
                 <h4>Total : <span id="total">0</span></h4>

                 {{-- <input type="text" id="total" value="0" readonly="readonly" /> --}}
                </div>
            </div>
            </div>
     </div>
</div>

@endsection

