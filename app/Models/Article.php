<?php

namespace App\Models;
use Elasticquent\ElasticquentTrait;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use ElasticquentTrait;
    use HasFactory;
    protected $fillable = ['title', 'body', 'tags'];
     protected $mappingProperties = array(
        'title' => [
          'type' => 'text',
          "analyzer" => "standard",
        ],
        'body' => [
          'type' => 'text',
          "analyzer" => "standard",
        ],
        'tags' => [
          'type' => 'text',
          "analyzer" => "standard",
        ],
      );
     
}
