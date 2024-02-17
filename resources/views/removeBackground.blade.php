@extends('shared.layout')
@section('title','Remove Background')
@section('content')
<div id="app">
    <div class="container mt-5">
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="imageFile" class="form-label">Original Image (JPG/PNG, max 16 MP, max 30 Mb)</label>
                <input type="file" class="form-control" id="imageFile" name="image_file" accept=".jpg, .png" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection