@extends('template/admin/index')

@section('content')
<h1>Tambah Customer</h1>

<form action="{{ route('customer.member') }}" method="POST">
    @csrf
    <div class="form group">
        <label for="name">Name      :</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form group">
        <label for="address">Address      :</label>
        <input type="text" name="address" id="address" class="form-control">
    </div>
    <div class="form group">
        <label for="no_hp">No HP      :</label>
        <input type="text" name="no_hp" id="no_hp" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection