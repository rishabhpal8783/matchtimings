<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Articlecountrymapping;
use App\Models\Artictagmapping;
use App\Models\Articles;
use App\Models\Articletype;
use App\Models\Tagtypes; 
use App\Models\Sports;
use App\Models\Schedules;
use App\Models\Matchlevels;



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
       $schedule_data=Schedules::latest('created')->limit(5)->get();
       $articles_data=Articles::latest('created')->get();
       $articles_latest_data=Articles::latest('created')->limit(10)->get();
       $article_mapping=Articlecountrymapping::all();
       $article_type=Articletype::all(); 
       $article_type1=Articletype::where('article_type_name','Recent News')->first();
       $recent_stories_data=Articletype::where('article_type_name','Recent Stories')->first(); 
      $userdata1 = DB::table('seasons')
      ->join('sports', 'seasons.sport_id', '=', 'sports.sport_id')
      ->join('events', 'seasons.event_id', '=', 'events.event_id')
      ->select('seasons.season_name', 'sports.sport_name','events.event_name')
      ->get()->toArray();
  
       return view('index',compact('articles_data','article_mapping','article_type','article_type1','sports_data','recent_stories_data','articles_latest_data','schedule_data','userdata1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sports_data=Sports::all();
       // dd($sports_data);
        // foreach($sports_data as $data)
        // {
        //     foreach($data->league as $leag)
        //     {
        //        foreach($leag->event as $events)
        //        {
        //            print_r($events);
        //        }
        //     }
        // }die;
        $schedule_data=Schedules::latest('created')->get();
        return view('schedule',compact('sports_data','schedule_data'));
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
        $sports_data=Sports::all(); 
        $article_type=Articletype::all();
        $articles_latest_data=Articles::latest('created')->limit(3)->get(); 
        return view('details',compact('sports_data','articles_data','articles_latest_data','article_type'));
    }
    public function  all($name)
    {
        $name=(str_replace('-', ' ', $name));
        $articles_data=Articletype::where('article_type_name',$name)->first();
        $articles_datap=Articles::where('article_type_id',$articles_data->article_type_id)->get();
        $sports_data=Sports::all();
        foreach( $articles_datap as $value){
             $value->profile= DB::table('article_tag_mapping')
             ->join('tag_types', 'article_tag_mapping.tag_type_id', '=', 'tag_types.tag_type_id')
             ->select('tag_types.tag_type_name', 'tag_types.tag_type_id')
            -> where('article_id',$value->article_id)->get();



             
             
            //  Artictagmapping::where("article_id",$value->article_id)->get();
        
            }
        $articles_tag=Tagtypes::all();
        $articles_latest_data=Articles::latest('created')->limit(3)->get(); 
        return view('all',compact('name','articles_tag','sports_data','articles_data','articles_latest_data','articles_datap'));
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
