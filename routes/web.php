<?php

use App\Events\SomeOneCheckedProfile;
use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Jobs\SendMailJob;
use App\Mail\SendMarkDown;
use App\Models\User;
use App\Notifications\OrderShippedNotification;
use App\PaymentServices\PaymentServiceInterface;
use App\Service\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

// Route::get('/', function () {
//   Article::createIndex($shards = null, $replicas = null);

//     Article::putMapping($ignoreConflicts = true);

//     Article::addAllToIndex();

//     return view('welcome');
// });

// Route::get('/',[ArticleController::class,'addIndex']);
// Route::get('/reindex',[ArticleController::class,'reIndex']);

// Route::get('/search',[ArticleController::class,'search']);
// Route::get('/search', function() {

//     $articles = Article::searchByQuery(['match' => ['title' => 'Sed']]);

//     return $articles;
// });

// Route::get('/',function(PaymentServiceInterface $payment){
//     return $payment->checkout();
// });

Route::get('/',function(Request  $req){
   // $data=['name'=>"abc"];
   // Mail::send('email',$data,function($msg){
   //    $msg->to('test@test.com');
   // });

   // dispatch(function(){
   // Mail::to('abc2@test.com')->send(new SendMarkDown());

   // })->delay(now()->addSeconds(5));
   // dispatch(new SendMailJob())->delay(now()->addSeconds(5));
   // $user=User::find(1);
   // SendMailJob::dispatch($user)->delay(now()->addSeconds(5));
   // echo "Mail Sent";
    
   // $user=User::inRandomOrder()->first();
// Event  SomeOneCheckedProfile::dispatch($user);
      //   $user->notify((new OrderShippedNotification())->delay(10));

         // $user->notify(new OrderShippedNotification());

   // Macro 

   // dd($req->username());
    $username=new UserService();
  echo  $username->printMyName();


});