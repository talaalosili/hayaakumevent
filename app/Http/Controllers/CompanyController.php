<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    // عرض قائمة الشركات
    public function index()
    {
        $companies = Company::all();
        return view('dashboard.companies.index', compact('companies'));
    }

    // عرض نموذج إنشاء شركة جديدة
    public function create()
    {
        return view('dashboard.companies.create');
    }

    // تخزين شركة جديدة في قاعدة البيانات
    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'email' => 'required|email|unique:companies',
        ]);

        Company::create($request->all());

        return redirect()->route('companies.index')->with('success', 'Company created successfully.');
    }

    // عرض تفاصيل شركة محددة
    public function show(Company $company)
    {
        return view('dashboard.companies.show', compact('company'));
    }

    // عرض نموذج تعديل شركة موجودة
    public function edit(Company $company)
    {
        return view('dashboard.companies.edit', compact('company'));
    }

    // تحديث بيانات الشركة
    public function update(Request $request, Company $company)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp',
            'description' => 'nullable|string',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
        ]);
        $path = null; 
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/image/';
            $file->move(public_path($path), $filename);
        }

        $category->update([
            'company_name' => $request->name,
            'image' => $path,
            'description' => $request->description,
            'phone' => $request->phon,
            'address' => $request->address,
        ]);



        return redirect()->route('companies.index')->with('success', 'Company updated successfully.');
    }

    // حذف الشركة
    public function destroy(Company $company)
    {
        $company->delete();

        return redirect()->route('companies.index')->with('success', 'Company deleted successfully.');
    }
}

