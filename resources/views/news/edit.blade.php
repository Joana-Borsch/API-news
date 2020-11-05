@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Camilion News <form action="{{Route('news.update', $news->id)}}" method="POST">
                        @csrf
                        @method('put')
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Headline</label>
                            <input type="text" name="headline" class="form-control" value="{{$news->headline}}"/>
                        </div>
                        <div class="form-group">
                            <label>Newsbody</label>
                            <textarea type="text" name="newsbody" class="form-control">{{$news->newsbody}}</textarea>
                        </div>
                        <div class="card-footer">
                            <input type="submit" value="Update" class="btn btn-primary">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
