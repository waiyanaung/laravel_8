@include('layouts.header')
@include('layouts.nav')

<div class="container">
    <div class="row">
        <div class="md-col-12">
            <h3>Edit Car</h3>
            <p>Trying to edit Car Information</p>
        </div>
    </div>


    <div class="row">
        <div class="md-col-12">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
        </div>
    </div>

    <form method="POST" action="/car/{{$obj->id}}" onSubmit="if(!confirm('Are you sure?')){return false;}">
    
    @csrf
    @method('PUT')
    
    <div class="row">
        <div class="md-col-12 pull-right">
            <a href="{{route('car.index')}}" class="btn btn-info">Back</a>
            <input type="submit" class="btn btn-primary" value="Save Changes">
        </div>

    </div>
    <br/>

    <div class="row">
        <div class="col-md-4">
            <label>Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{$obj->name}}" required >
        </div>

        <div class="col-md-4">
            <label>Color</label>
            <input type="text" id="color" name="color" class="form-control" value="{{$obj->color}}" required>
        </div>

        <div class="col-md-4">
            <label>Company</label>
            <input type="text" id="company" name="company" class="form-control" value="{{$obj->company}}" required >
        </div>
    </div>


    <div class="row">
        <div class="col-md-4">
            <label>Status</label>
            <select name="status" id="status" class="form-control">
                <option disabled>Select Status</option>
                <option value="1" {{ $obj->status === 1 ? 'selected' : ''  }}>Active</option>
                <option value="0" {{ $obj->status === 0 ? 'selected' : ''  }}>In-Active</option>

            </select>
        </div>
    </div>

    <div class="row">
        <div class="md-col-12 pull-right">
            <a href="{{route('car.index')}}" class="btn btn-info">Back</a>
        <input type="submit" class="btn btn-primary" value="Save Changes">
        </div>
    </div>
    <br/>

    </form>

</div>

@include('layouts.footer')