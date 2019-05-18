@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Threads Details</div>

                    <div class="card-body">
                        <article>
                            <h4>{{$thread->title}}, Posted By : {{$thread->creator->name}}</h4>
                            <div class="body">
                                {{$thread->body}}
                            </div>
                            <br>
                            @foreach($thread->replies as $reply)
                                <div class="body">
                                    {{$reply->body}}
                                    <br>
                                    <small>Posted By: {{$reply->user->name}},
                                        Posted At: {{$reply->created_at->diffForHumans()}}
                                    </small>
                                </div>

                                <hr>
                            @endforeach
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
