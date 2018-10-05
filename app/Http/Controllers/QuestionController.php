<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::orderBy('id', 'asc')->get();
        $questionsCounts = [];
        foreach ($questions as $question) {
            $da = $question->da;
            $nema_misljenje = $question->nema_misljenje;
            $ne = $question->ne;

            $totalVotes = $da + $nema_misljenje + $ne;
            // $percentage = $da / $totalVotes * 100  . '%';

            $questionsCounts[$question->id] = [
                'da'             => round($da / $totalVotes * 100),
                'nema_misljenje' => round($nema_misljenje / $totalVotes * 100),
                'ne'             => round($ne / $totalVotes * 100),
                'total'          => $totalVotes,
                // 'percent'        => $percentage,
            ];
        }
        // dd($questionsCounts);
        // dd($questions);
        // dd($parties);

        return view('questions', compact('questions', 'questionsCounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
