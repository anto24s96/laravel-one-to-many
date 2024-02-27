@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row py-3">
            <div class="col-12">
                <h2 class="text-center">Create new project</h2>
            </div>
        </div>

        <div class="row justify-content-center py-3">
            <div class="col-8">
                <div class="border border-3 rounded-2 p-3 border-danger">
                    <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" required value="{{ old('name') }}">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo:</label>
                            <input type="file" class="form-control @error('logo') is-invalid @enderror" id="logo"
                                name="logo" value="{{ old('logo') }}">
                            @error('logo')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description:</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="textarea-description" rows="10"
                                name="description" required>{{ old('description') }}</textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="start_date" class="form-label">Start Date:</label>
                            <input type="text" class="form-control @error('start_date') is-invalid @enderror"
                                id="start_date" name="start_date" required value="{{ old('start_date') }}">
                            @error('start_date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="end_date" class="form-label">End Date:</label>
                            <input type="text" class="form-control @error('end_date') is-invalid @enderror"
                                id="end_date" name="end_date" required value="{{ old('end_date') }}">
                            @error('end_date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit"
                                class="btn btn-outline-warning text-uppercase fw-bolder my-3">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
