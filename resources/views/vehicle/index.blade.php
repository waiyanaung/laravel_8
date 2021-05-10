@include('layouts.header')
@include('layouts.nav')

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <h3>Car List</h3>
            <p>Car List informations.</p>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <a href="/car/create" class="btn btn-primary pull-right">Create New Car</a>
        </div>
    </div>
    <br/>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Color</th>
                        <th>Company</th>
                        <th>Status</th>
                        <th colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($objs as $obj)
                        <tr>
                            <td><a href="/car/{{$obj->id}}">{{$obj->id}}</a></td>
                            <td><a href="/car/{{$obj->id}}">{{$obj->name}}</a></td>
                            <td><a href="/car/{{$obj->id}}">{{$obj->color}}</a></td>
                            <td>{{$obj->company}}</td>
                            <td>{!! $obj->status === 1 ? '<span class="text-primary" >Active</span>' : '<span class="text-danger font-weight-bold" >In-Active</span>'  !!}</td>

                            <td>
                                <a href="/car/{{$obj->id}}" class="btn btn-primary form-control">View</a>
                            </td>
                            
                            <td>
                                <a href="/car/{{$obj->id}}/edit" class="btn btn-warning form-control">Edit</a>
                            </td>
                            
                            <td>
                                <form method="POST" action="/car/{{$obj->id}}" onSubmit="
                                if(!confirm('Are you sure?')){return false;}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger form-control" value="Delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row ">        
        <div class="col-md-12 text-center">
            {{ $objs->links() }}
        </div>
    </div>


</div>

@include('layouts.footer')