@include('layouts.header')
@include('layouts.nav')

<div class="container">
    <div class="row">
        <div class="md-col-12">
            <h3>Show Car</h3>
            <p>Show Car Information</p>
        </div>
    </div>

    
    <div class="row">
        <div class="md-col-12 pull-right">
            <a href="{{route('car.index')}}" class="btn btn-info">Back</a>
            <a href="/car/{{$obj->id}}/edit" class="btn btn-primary">Edit Car</a>
        </div>
    </div>
    <br/>

    <div class="row">
        <div class="col-md-4">
            <label>Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{$obj->name}}" readonly >
        </div>

        <div class="col-md-4">
            <label>Color</label>
            <input type="text" id="color" name="color" class="form-control" value="{{$obj->color}}" readonly>
        </div>

        <div class="col-md-4">
            <label>Company</label>
            <input type="text" id="company" name="company" class="form-control" value="{{$obj->company}}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <label>Status</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $obj->status === 1 ? 'Active' : 'In-Active'  }}" readonly >
        </div>
    </div>

    <div class="row">
        <div class="md-col-12 pull-right">
            <a href="{{route('car.index')}}" class="btn btn-info">Back</a>
            <a href="/car/{{$obj->id}}/edit" class="btn btn-primary">Edit Car</a>
        </div>
    </div>
    <br/>


</div>

@include('layouts.footer')