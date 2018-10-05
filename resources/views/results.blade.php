@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 pb-5 px-2">
            <table class="table table-striped">
            @foreach ($questions as $question)
                <tr><td>{{$question->id}} - {{$question->title}}</td></tr>
            @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
