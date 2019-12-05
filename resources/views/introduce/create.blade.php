@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    @foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        {{ $error }}
    </div>
    @endforeach

    <div class="row mb-4">
        <div class="col-md-4 offset-md-4">
            <form action="{{ route('introduces.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                <br><br><br><br>
                    <input type="file" name="image" class="form-control-file"><br><br>
                    <input type="text" name="name" placeholder="name"><br><br>
                    <input type="text" name="comment" placeholder="comment"><br><br>
                    <input type="submit" class="btn btn-primary btn-block">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection