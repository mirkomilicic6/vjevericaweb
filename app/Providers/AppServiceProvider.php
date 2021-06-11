<?php

namespace App\Providers;

use TCG\Voyager\Models\Post;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /* $provedeniProjektiNav = Post::where('category_id', 2)->get();
        $projektiUprovedbiNav = Post::where('category_id', 3)->take(4)->get();
        $natjecaji = Post::where('category_id', 4)->get();
        view()->share(['projektiUprovedbiNav'=> $projektiUprovedbiNav,
                        'provedeniProjektiNav' => $provedeniProjektiNav,
                         'natjecaji' => $natjecaji]); */
    }
}
