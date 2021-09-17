<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articlecountrymapping;
use App\Models\Articles;
use App\Models\Articletype;
use App\Models\Sports;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $sports_data=Sports::all();
       
       $articles_data=Articles::latest('created')->get();
    
       $articles_latest_data=Articles::latest('created')->limit(10)->get();
       $article_mapping=Articlecountrymapping::all();
       $article_type=Articletype::all(); 
       
       $article_type1=Articletype::where('article_type_name','Recent News')->first();
      
       $recent_stories_data=Articletype::where('article_type_name','Recent Stories')->first(); 
       
       return view('index',compact('articles_data','article_mapping','article_type','article_type1','sports_data','recent_stories_data','articles_latest_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sports_data=Sports::all();
        return view('schedule',compact('sports_data'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articles_data=Articles::where('article_id',$id)->first();
        //dd($articles_data);
        $sports_data=Sports::all(); 
        $article_type=Articletype::all();
        //dd($article_type);
        $articles_latest_data=Articles::latest('created')->limit(3)->get(); 
       // dd($articles_latest_data);
        return view('details',compact('sports_data','articles_data','articles_latest_data','article_type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
