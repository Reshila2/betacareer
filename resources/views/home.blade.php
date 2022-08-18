@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="container">
                            <form method="post" action="{{ route('images.store') }}"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="image">
                                    <label><h4>Add image</h4></label>
                                    <input type="file" class="form-control" required name="image">
                                </div>

                                <div class="post_button">
                                    <button type="submit" class="btn btn-success">Add</button>
                                </div>
                            </form>
                            @foreach($imageData as $data)
                                <div class="event-card-half">
                                    <img width="100%" height="250px" src="{{ asset('images/'.$data->image) }}"
                                         class="img-fluid" alt="event">
                                </div>
                            @endforeach
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
