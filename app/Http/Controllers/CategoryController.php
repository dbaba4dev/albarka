<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\EmployeeCategoryRequest;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Employee Categories';
        $page_description = 'Create a new Employee Categories';
        $categories = Category::all();

        return view('admin.employees.categories.index', compact('page_title', 'page_description', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeCategoryRequest $request)
    {
        $data = $request->all();
        Category::create([ 'name'=>$data['name'] ]);
        $notification = array(
            'message' => 'Category created Successfully',
            'alert-type' => 'success'
        );
        return redirect('/employeeCategories')->with($notification);
//        return redirect('/employeeCategories')->with('success', 'Category created Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::all();
        $page_title = 'Edit Employee Categories';
        $page_description = 'Update an existing Categories';

        return view('admin.employees.categories.edit', compact('page_title', 'page_description', 'category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeCategoryRequest $request, $id)
    {
        if (Category::findOrFail($id)->update(['name'=>$request->name]))
        {
            $notification = array(
                'message' => 'Category Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect('/employeeCategories')->with($notification);
        }
        else
        {
            return redirect()->back()->with('error', 'Error');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Category::findOrFail($id)->delete())
        {
            $notification = array(
                'message' => 'Category deleted Successfully',
                'alert-type' => 'warning'
            );
            return redirect('/employeeCategories')->with($notification);
//            return redirect('/employeeCategories')->with('success', 'Category Deleted Successfully');
        }else
        {
            return redirect()->back()->with('error','Error');
        }
    }
}
