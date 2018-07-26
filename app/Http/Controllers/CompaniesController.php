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
		$company = new Company();
		$company->fill($request->all());
		$company->save();
		
		return response()->json($company, 201);
	}
	
	public function show($id) {
		$company = Company::find($id);
		
		if (!$company)
			return response()->json([
				'Record not found'
			], 404);
		
		return $company;
	}
	
	public function edit(Company $company) {
	}
	
	public function update(Request $request, $id) {
		$company = Company::find($id);
		
		if (!$company) {
			return response()->json([
				'message' => 'Record not found',
			], 404);
		}
		
		$company->fill($request->all());
		$company->save();
		
		return response()->json($company);
	}
	
	public function destroy($id) {
		$company = Company::find($id);
		
		if (!$company)
			return response()->json([
				'message' => 'Record not found'
			], 404);
		
		$company->delete();
		
		return response('', 204);
	}
}
