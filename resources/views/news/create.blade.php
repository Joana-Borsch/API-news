@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Camilion News <form action="{{Route('news.store')}}" method="POST">
                        @csrf
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Headline</label>
                            <input type="text" name="headline" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Newsbody</label>
                            <input type="mediumtext" name="newsbody" class="form-control"/>
                        </div>
                        <div class="card-footer">
                            <input type="submit" value="Create" class="btn btn-primary">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
