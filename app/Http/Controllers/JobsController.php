<?php

namespace App\Http\Controllers;

use App\Company;
use App\Job;
use Illuminate\Http\Request;
use function response;

class JobsController extends Controller {
	
	public function index() {
		$jobs = Job::with('Company')->get();
		
		return response()->json($jobs);
	}
	
	public function create() {
	}
	
	public function store(Request $request) {
		$job = new Job();
		$job->fill($request->all());
		$job->save();
		
		return response()->json($job, 201);
	}
	
	public function show($id) {
		$job = Job::find($id);
		
		if (!$job)
			return response()->json([
				'message' => 'Record not found',
			], 404);
		
		return response()->json($job);
	}
	
	public function edit(Job $job) {
	}
	
	public function update(Request $request, $id) {
		$job = Job::find($id);
		
		if (!$job)
			return response()->json([
				'message'   => 'Record not found',
			], 404);
		
		$job->fill($request->all());
		$job->save();
		
		return response()->json($job);
	}
	
	public function destroy($id) {
		$job = Job::find($id);
		
		if(!$job) {
			return response()->json([
				'message'   => 'Record not found',
			], 404);
		}
		
		$job->delete();
		
		return response('', 20);
	}
}
