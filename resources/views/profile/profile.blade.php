@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
        <div style="font-size:30px;">Ari Steinn Guðmundsson Meðlimur í 3 vikur</div>
        @foreach($threads as $thread)
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $thread['title'] }} <a href="#">Laravel controller</a>
                </div>
                <div class="panel-heading">
                    {{ $thread['body'] }}
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $thread['title'] }} <a href="#">Laravel 5.5</a>
                </div>
                <div class="panel-heading">
                    {{ $thread['body'] }}
                </div>
            </div>
            @endforeach
            <div style="display:inline-block; float:right;" class="panel panel-default">
                <div class="panel-body">
                    <div>
                    Nafn
                        <p>Ari Steinn Guðmundsson</p>
                    </div>
                    <div>
                    Netfang
                        <p>aristeinn@gmail.com</p>
                    </div>
                    <div>
                    Fjöldi þráða
                        <p>10</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
