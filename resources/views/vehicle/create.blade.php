@include('layouts.header')
@include('layouts.nav')

<div class="container">
    <div class="row">
        <div class="md-col-12">
            <h3>Car List</h3>
            <p>An inverted navbar is black instead of gray.</p>
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

    <form method="POST" action="/car" onSubmit="if(!confirm('Are you sure?')){return false;}">
    @csrf   

    <div class="row">
        <div class="md-col-12 pull-right">
            <input type="submit" class="btn btn-primary" value="Save Car">
        </div>
    </div>
    <br/>

    <div class="row">
        <div class="col-md-4">
            <label>Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="col-md-4">
            <label>Color</label>
            <input type="text" id="color" name="color" class="form-control" required>
        </div>

        <div class="col-md-4">
            <label>Company</label>
            <input type="text" id="company" name="company" class="form-control" required>
        </div>
    </div>

    <div class="row">
        <div class="md-col-12 pull-right">
            <input type="submit" class="btn btn-primary" value="Save Car">
        </div>
    </div>

    </form>

</div>

@include('layouts.footer')