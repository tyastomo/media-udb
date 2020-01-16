@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Add Mapel
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
                    <form method="post" action="{{ route('mapel.store') }}" enctype="multipart/form-data">
                        <div class="form-group">
                            @csrf
                            <label for="name">Judul :</label>
                            <input type="text" class="form-control" name="nama"/>
                        </div>
                        <div class="form-group">
                            <label for="price">Penulis :</label>
                            <input type="text" class="form-control" name="nama_penulis"/>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Cover :</label>
                            <input type="file" name="cover" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Create Book</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection