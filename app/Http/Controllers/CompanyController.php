<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::paginate(10);
        return view('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'  => 'required',
            'email' => 'required|email',
            'logo ' => 'dimensions:min_width=100, min_height=100',
            
        ]);

        $company = new Company();
        $company->name = $request->input('name');
        $company->email = $request->input('email');
        $company->website = $request->input('website');
        $logo = $request->file('logo');
        if (isset($logo)) {
            $path = $request->file('logo')->store('images', 'public');
            $company->logo = $path;
            $company->save();
        }
        if (isset($company)) {
            return redirect('/admin/companies');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);
        return view('company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'  => 'required|',
            'email' => 'required|email',
            'logo ' => 'dimensions:min_width=100, min_height=100',
            
        ]);

        $company = Company::find($id);
        $oldLogo = $company->logo;
        $company->name = $request->input('name');
        $company->email = $request->input('email');
        $company->website = $request->input('website');
        $logo = $request->file('logo');
        if (isset($logo) && ($logo!= $oldLogo)) {
            $path = $request->file('logo')->store('images', 'public');
            $company->logo = $path;
            $company->save();
        }
        if (isset($company)) {
            return redirect('/admin/companies');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);
	Storage::disk('public')->delete($company->logo);
        $company->delete();
        if (isset($company)) {
            return redirect('/admin/companies');
        }
    }
}
