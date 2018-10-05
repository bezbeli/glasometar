@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 pb-5 px-2">
            <h1 class="text-center">Odgovori glasača</h1>
            <div class="table-responsive">
            <table class="table table-striped text-right">
                <thead>
                    <tr class="small">
                        <th class="text-left">Pitanje</th>
                        <th>Da</th>
                        <th class="text-center">Nema mišljenje</th>
                        <th>Ne</th>
                    </tr>
                </thead>
            @foreach ($questions as $question)
                <tr>
                    <td class="text-left">
                        <h6>{{$question->id}}. {{$question->title}}</h6>
                        <small>{{$question->question}}</small>
                    </td>

                                <td class="text-center align-middle">
                                        {{$questionsCounts[$question->id]['da']}}%
                                </td>

                                <td class="text-center align-middle">
                                        {{$questionsCounts[$question->id]['nema_misljenje']}}%
                                </td>

                                <td class="text-center align-middle">
                                        {{$questionsCounts[$question->id]['ne']}}%
                                </td>
               </tr>
            @endforeach
            </table>
        </div>
        </div>
    </div>
</div>
@endsection
