<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommetRequest;
use App\Http\Requests\UpdateCommetRequest;
use App\Models\Commet;

class CommetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommetRequest $request)
    {
       $input = $request->validated();

       Commet::create([
        'article_id'=>$input['article_id'],
        'user_id'=>$request->user()->id,
        'body'=>$input['body']
       ]);

       return redirect()->route('articles.show',['article'=>$input['article_id']]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Commet $commet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commet $commet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommetRequest $request, Commet $commet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commet $commet)
    {
        //
    }
}
