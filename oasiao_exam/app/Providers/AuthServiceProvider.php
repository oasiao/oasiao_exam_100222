<?php

namespace App\Providers;

use App\Models\Post;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

       /* Gate::define('isAuthor', function($user) {

            //cogemos el autor de la publicación
            $author = Post::where('id',$user->id)->first();
            //comprobamos que la publicación es del user loggeado
            return $user->id == ;

        });*/
    }
}
