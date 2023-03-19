<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyCRUDController extends Controller
{
    // create index
    public function index(){
        // asc น้อย -> มาก
        // desc มาก -> น้อย
        // paginate -> จำกัดข้อมูลต่อ 1 หน้า
        $data['companies'] = Company::orderBy('id', 'asc')->paginate(5);
        return view('companies.index',$data);
    }

    // create resource
    public function create(){
        return view('companies.create');
    }
    //store resoucre
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
        ]);
        $company = new Company;
        $company->name = $request->name;
        $company->email = $request->email;
        $company->address = $request->address;
        $company->save();
        return redirect()->route('companies.index')->with('success','create successfully');
    }

    //create edit
    public function edit(Company $company){
        return view('companies.edit', compact('company'));
    }

    //create update
    public function update(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
        ]);
        $company = Company::find($id);
        $company->name = $request->name;
        $company->email = $request->email;
        $company->address = $request->address;
        $company->save();
        return redirect()->route('companies.index')->with('success', 'Company update');
    }

    //create delete
    public function destroy(Company $company){
        $company->delete();
        return redirect()->route('companies.index')->with('success', 'Company delete');
    }
}
