<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use function response;

class CompaniesController extends Controller {
	
	/**
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function index() {
		$companies = Company::all();
		
		return response()->json($companies);
	}
	
	public function create() {
	}
	
	public function store(Request $request) {
	}
	
	public function show(Company $company) {
	}
	
	public function edit(Company $company) {
	}
	
	public function update(Request $request, Company $company) {
	}
	
	public function destroy(Company $company) {
	}
}
