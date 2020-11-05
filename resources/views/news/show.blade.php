@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    </div>
                    <div class="card-body">
                        <div>
                            <small><b>News </b></small>
                            <p>{{$news->headline}}</p>
                        </div>
                        <div>
                            <p>{{$news->newsbody}}</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
