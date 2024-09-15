<?php
use App\Models\Job;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
   $jobs= Job::with('employer')->simplePaginate(5);
    return view('jobs', [
        'jobs' => $jobs
    ]);
});
Route::get('/jobs/{id}', function ($id){
    $job=Job::find($id);

    return view('job', ['job' => $job]);
});
Route::post('/jobs', function () {
    request()->validate([
        'employer_id'=>['required','exists:employers'],
        'title' =>['required'],
        'salary'=>['required'],
    ]);
});
Route::get('/contact', function () {
    return view('contact');
});