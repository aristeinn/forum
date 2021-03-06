@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Forum Threads</div>

                <div class="panel-body">
                @foreach($threads as $thread)
                    <article>
                        <div>
                            <a href="/threads/{{ $thread->id }}">
                                {{ $thread->title }}
                            </a>
                        </div>
                        <div class="body">
                        {{ $thread->body }}

                        </div>
                    </article>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
