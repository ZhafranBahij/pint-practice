@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (count($errors) > 0)
                        @foreach ( $errors->all() as $message )
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @endforeach
                    @endif
                    <form action="{{ route('note.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="title" class="form-label">Title</label>
                          <input type="text" class="form-control" id="title" aria-describedby="title" name="title" value="{{ old('title') }}" required>
                        </div>
                        <div class="mb-3">
                          <label for="description" class="form-label">Description</label>
                          <input type="text" class="form-control" id="description" aria-describedby="description" name="description" value="{{ old('description') }}" required>
                        </div>
                        <a class="btn btn-secondary" href="{{ route('note.index') }}">Back</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
