@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Camilion News <a href="{{Route('news.create')}}" class="btn btn-secondary">New</a>
                    </div>
                    <div class="card-body">
                        <table class="table justify-content">
                            <tbody>
                            @foreach($news as $new)
                                <tr>
                                    <td>{{$new->headline}}</td>
                                    <td>{{$new->newsbody}}</td>
                                    <td><a href="{{Route('news.show', $new->id)}}">See more</a></td>
                                    <td><a href="{{Route('news.edit', $new->id)}}">Edit</a></td>
                                    <td><form action="{{Route('news.destroy', $new->id)}}"
                                    method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Delete">
                                    </form></td>
                                    @endforeach
                                </tr>
                            </tbody>

                        </table>
                    </div>

                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
