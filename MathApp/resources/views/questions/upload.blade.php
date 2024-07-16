<!-- resources/views/questions/upload.blade.php -->

@extends('layouts.app') <!-- Adjust according to your layout -->

@section('content')
<div class="container">
    <h2>Upload Questions and Answers</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('questions.upload') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="questions_file">Select Questions File (xlsx/xls)</label>
        <input type="file" class="form-control" id="questions_file" name="questions_file" accept=".xlsx, .xls" required>
        @error('questions_file')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <!-- Debugging output -->
        <p>Selected file: {{ $errors->has('questions_file') ? 'Error' : 'No error' }}</p>
    </div>

    <div class="form-group">
        <label for="answers_file">Select Answers File (xlsx/xls)</label>
        <input type="file" class="form-control" id="answers_file" name="answers_file" accept=".xlsx, .xls" required>
        @error('answers_file')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <!-- Debugging output -->
        <p>Selected file: {{ $errors->has('answers_file') ? 'Error' : 'No error' }}</p>
    </div>

    <button type="submit" class="btn btn-primary">Upload</button>
</form>

</div>
@endsection
