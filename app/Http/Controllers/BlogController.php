<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redis;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $storage = Redis::connection();
        $popular = $storage->zRevRange('articleViews', 0, -1);

        foreach ($popular as $key) 
        {
            $views = $storage->get($key . ":views");
            $id = str_replace('article:', '', $key);
            echo "Article " . $id . " is popular with " . $views ." views.<br>";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showArticle($id)
    {
        $this->id = $id;
        $storage = Redis::connection();

        if ($storage->zScore('articleViews', 'article:' . $id)) 
        {
            $storage->pipeline(function($pipe) 
            {
                $pipe->zIncrBy('articleViews', 1, 'article:' . $this->id);
                $pipe->incr('article:' . $this->id . ':views');
            });
        } else {
            $views = $storage->incr('article:' . $this->id . ':views');
            $storage->zIncrBy('articleViews', $views, 'article:' . $this->id);
        }

        $views = $storage->incr('article:' . $id . ':views');

        return "Article id: " . $id . " has " . $views . " views";
    }

}