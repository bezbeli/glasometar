@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 pb-5 px-2">
            <h1 class="text-center">Odgovori partija</h1>
            @foreach ($parties as $party)
                <h3 class="text-center">{{$party->abbreviation}}</h3>
                <p class="text-center">{{$party->title}}</p>
                    <table class="table table-striped">
                        <theader>
                            <tr>
                                <td>Pitanje</td>
                                <td class="text-center small">Odgovor partije</td>
                                <td colspan="4" class="text-center small">Slaganje glasača</td>
                            </tr>
                        </theader>
                        <tbody>
                        @foreach ($party->results as $result)
                            <tr>
                                <td>
                                    <h6>{{$result->question_id}}. {{$result->question_title}}</h6>
                                    <small>{{$result->question}}</small>
                                </td>
                                <td class="text-center align-middle">{{$result->answer}}</td>
                                {{-- <td class="text-center align-middle">{{$questionsCounts[$result->question_id]['da']}}%</td>
                                <td class="text-center align-middle">{{$questionsCounts[$result->question_id]['nema_misljenje']}}%</td>
                                <td class="text-center align-middle">{{$questionsCounts[$result->question_id]['ne']}}%</td> --}}
                                <td class="text-center align-middle">
                                    @switch($result->answer)
                                        @case('DA')
                                        {{$questionsCounts[$result->question_id]['da']}}%
                                            @break
                                        @case('NE')
                                        {{$questionsCounts[$result->question_id]['ne']}}%
                                            @break
                                        @default
                                    @endswitch
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
            @endforeach
        </div>
    </div>
</div>
@endsection
