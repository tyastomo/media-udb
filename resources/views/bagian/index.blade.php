@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    List Mapel
                </div>
                <div class="card-body">
                    @if(session()->get('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}  
                        </div><br />
                    @endif
                    <a href="{{ route('mapel.create')}}" class="btn btn-success">Tambah Data</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <td>ID</td>
                            <td>Judul</td>
                            <td>Bagian</td>
                            
                            <td colspan="2">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bagian as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->mapel->nama}}</td>
                                <td><a href="{{ route('bagian.show', $data->id)}}">{{$data->nama}}</a></td>
                                <td><a href="{{ route('bagian.edit',$data->id)}}" class="btn btn-primary">Edit</a></td>
                                <td>
                                    <form action="{{ route('mapel.destroy', $data->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection