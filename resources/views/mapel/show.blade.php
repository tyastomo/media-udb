@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Mapel 
                </div>
                <div class="card-body">
                        @foreach($buku as $key => $data)
                
                        <div class="form-group">
                            @csrf
                            <label for="name">Judul :</label>
                            <p> {{ $data->nama }} </p>
                        </div>
                        <div class="form-group">
                            <label for="price">Penulis :</label>
                            <p> {{ $data->nama_penulis }} </p>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Cover :</label>
                            <img style="max-width:350px; max-height:auto;" src="{{ asset('images/'.$data->cover) }}">
                        </div>
                        @endforeach
                </div>
               
                
            </div>
        </div>
    </div>
</div>
@endsection