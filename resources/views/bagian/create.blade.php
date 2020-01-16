@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Add Bagian
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
                    <form method="post" action="{{ route('bagian.store') }}" enctype="multipart/form-data">
                        <div class="form-group">
                            @csrf
                            <label for="name">Pilih Judul :</label>
                            <select class="form-control" name="id_mapel">
                                @foreach($mapel as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Bagian :</label>
                            <input type="text" class="form-control" name="nama"/>
                        </div>
                        <div class="form-group">
                            <label for="price">Isi :</label>
                            <textarea class="form-control" name="editor1"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Book</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    CKEDITOR.replace('editor1', {
        filebrowserUploadUrl: "{{route('bagian.store', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
@endsection