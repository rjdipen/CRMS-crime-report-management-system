<?php

namespace App\Providers;

use App\Blog;
use App\Fir;
use App\Gd;
use App\MissingGoods;
use App\MissingPerson;
use App\MostWanted;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Blog::creating(function($model)
        {
            $user = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->id = $user;
        });

        Blog::updating(function($model)
        {
            $user = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->id = $user;
        });
        MissingPerson::creating(function($model)
        {
            $user = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->id = $user;
        });

//        MissingPerson::updating(function($model)
//        {
//            $user = (!Auth::guest()) ? Auth::user()->id : null ;
//            $model->id = $user;
//        });

        MissingGoods::creating(function($model)
        {
            $user = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->id = $user;
        });

//        MissingGoods::updating(function($model)
//        {
//            $user = (!Auth::guest()) ? Auth::user()->id : null ;
//            $model->id = $user;
//        });

        Gd::creating(function($model)
        {
            $user = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->id = $user;
        });

//        Gd::updating(function($model)
//        {
//            $user = (!Auth::guest()) ? Auth::user()->id : null ;
//            $model->id = $user;
//        });

        Fir::creating(function($model)
        {
            $user = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->id = $user;
        });

//        Fir::updating(function($model)
//        {
//            $user = (!Auth::guest()) ? Auth::user()->id : null ;
//            $model->id = $user;
//        });

        MostWanted::creating(function($model)
        {
            $user = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->id = $user;
        });

        MostWanted::updating(function($model)
        {
            $user = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->id = $user;
        });


    }
}
