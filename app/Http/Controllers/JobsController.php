<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;
use function response;

class JobsController extends Controller {
	
	public function index() {
		$jobs = Job::all();
		
		return response()->json($jobs);
	}
	
	public function create() {
	}
	
	public function store(Request $request) {
	}
	
	public function show(Job $job) {
	}
	
	public function edit(Job $job) {
	}
	
	public function update(Request $request, Job $job) {
	}
	
	public function destroy(Job $job) {
	}
}
