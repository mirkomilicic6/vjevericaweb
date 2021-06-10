<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Testimonials;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use PhpParser\Node\Expr\FuncCall;


class PostsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latestPosts = Post::latest()->take(4)->get();
        $projektiUprovedbi = Post::where('category_id', 3)->get();
        foreach($latestPosts as $post){
        $post->body = Str::limit($post->body, 150);
        }
        $projektiUprovedbiNav = Post::where('category_id', 3)->take(4)->get();
        $provedeniProjekti = Post::where('category_id', 2)->get();
        $team = Team::all();
        $testimonials = Testimonials::all();
        //dd($provedeniProjektiNav);
        return view('frontend.index', compact(['latestPosts', 'projektiUprovedbiNav', 'projektiUprovedbi', 'provedeniProjekti', 'team', 'testimonials']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function news() {
        //$projektiUprovedbi = Post::where('category_id', 3)->get();
        $news = Post::where('category_id', 1)->get();
        foreach($news as $post){
            $post->body = Str::limit($post->body, 200);
            }
        //dd($news);

        return view('frontend.news', compact('news'));
    }

    public function natjecaji() {

        $natjecaji = Post::where('category_id', 4)->get();

        return view('frontend.natjecaji', compact('natjecaji'));

    }

    public function projektiUprovedbi() {
        $projektiUprovedbi = Post::where('category_id', 3)->get();
        foreach($projektiUprovedbi as $post){
            $post->body = Str::limit($post->body, 200);
            }
        return view('frontend.projektiUprovedbi', compact('projektiUprovedbi'));
    }


    public function provedeniProjekti() {
        $provedeniProjekti = Post::where('category_id', 2)->get();
        foreach($provedeniProjekti as $post){
            $post->body = Str::limit($post->body, 200);
            }
        return view('frontend.provedeniProjekti', compact('provedeniProjekti'));
    }

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

        return view('frontend.show', compact('post'));
    }

   /*  public function provedeniProjektiShow(Post $post){

        //$post = Post::findOrFail($id);

        return view('frontend.provedeniProjektiShow', compact('post'));
    } */



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

    public function team()
    {
        $team = Team::all();
        dd($team);
/*         return view('frontend.index', compact('team'));
 */    }

    public function contact() {

        return view('frontend.contact');
    }


    public function services() {

        return view('frontend.services');
    }
}
