@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Mapel
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif
                    <form method="post" action="{{ route('mapel.update', $mapel->id) }}">
                        <div class="form-group">
                            @csrf
                            @method('PATCH')
                            <label for="name">mapel Name:</label>
                            <input type="text" class="form-control" name="nama" value="{{$mapel->nama}}"/>
                        </div>
                        <div class="form-group">
                            <label for="price">mapel ISBN Number :</label>
                            <input type="text" class="form-control" name="nama_penulis" value="{{$mapel->nama_penulis}}"/>
                        </div>
                        <div class="form-group">
                            <label for="quantity">mapel Price :</label>
                            <input type="text" class="form-control" name="cover" value="{{$mapel->cover}}"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection