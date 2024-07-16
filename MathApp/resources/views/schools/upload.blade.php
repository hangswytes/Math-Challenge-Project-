@extends('layouts.app')

@section('title', 'Upload Schools')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Upload Schools Data</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('schools.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="file">Choose Excel File</label>
            <input type="file" class="form-control" id="file" name="file" required>
            @error('file')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>
@endsection
