<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobsController extends Controller
{
  //show all jobs
  public function index()
  {
    return view('jobs.index', [
      'jobs' => Job::latest()->filter(request(['tag', 'search']))->simplePaginate(4)
    ]);
  }

  //show single job
  public function show(Job $job)
  {
    return view('jobs.show', [
      'job' => $job
    ]);
  }

  public function create(Job $job)
  {
    return view('jobs.create');
  }

  public function store(Request $request)
  {
    $formFields = $request->validate([
      'title' => 'required',
      'company' => 'required',
      'location' => 'required',
      'email' => ['required', 'email'],
      'tags' => 'required',
      'logo' => 'required',
      'description' => 'required',
      'website' => 'required',
    ]);

    Job::create($formFields);
    return redirect('/')->with('message', 'success');
  }
}
