<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function addIndex(Request $req){
      Article::createIndex($shards = null, $replicas = null);

       Article::putMapping($ignoreConflicts = true);
        $data= Article::addAllToIndex();
          return  response(['data'=>$data]);
    }
    public function reIndex(){
    $data= Article::reindex();
    return response(['data'=>$data]);
    }

    public function search($title){
      $data=Article::searchByQuery(['match'=>['title'=>'Sed']]);
      return response(['data'=>$data->totalHits()],200);
    }
}
