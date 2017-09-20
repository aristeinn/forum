@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Forum Threads</div>

                <div class="panel-body">
                    <form>
                        <div class="form-group">
                            <label>Title: </label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Body: </label>
                            <textarea type="text" name="title" class="form-control" rows="8"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Publish</button>
                        </div>
                        <ul>
                            @foreach ($tasks as $task)
                            @if ( $task['complete'])
                                <li>
                                    <a href="{{ $task['anchor'] }}">{{ $task['title'] }}</a>
                                </li>
                            @else
                                <li>
                                    <s>{{ $task['title'] }}</s>
                                </li>
                            @endif
                            @endforeach
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


{{--

<li>
    <a href="{{ $task['anchor'] }}"><s>{{ $task['title'] }}</s></a>
 </li> 

 --}}
