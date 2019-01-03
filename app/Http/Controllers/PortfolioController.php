<?php

namespace App\Http\Controllers;

use App\PortfolioCategory;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function createCategory(){
        return view ('admin.portfolio.createCategory');
    }

    public function storeCategory(Request $request){
        $data = $request->all();
        $category = new PortfolioCategory;
        $category->name = ucwords(strtolower($data['name']));
        $category->slug = str_slug($data['name']);
        $category->save();
        return redirect()->route('viewCategory')->with('flash_message_success', 'Category Created Successfully');
    }

    public function viewCategory(){
        $categories = PortfolioCategory::all();
        return view ('admin.portfolio.viewCategory')->with(compact('categories'));
    }

    public function editCategory($id){
        $cat = PortfolioCategory::findOrFail($id);
        return view ('admin.portfolio.editCategory', compact('cat'));
    }

    public function updateCategory(Request $request, $id){
        $category = PortfolioCategory::findOrFail($id);
        $data = $request->all();
        $category->name = ucwords(strtolower($data['name']));
        $category->slug = str_slug($data['name']);
        $category->save();
        return redirect()->route('viewCategory')->with('flash_message_info', 'Category Updated Successfully');
    }

    public function deleteCategory($id){
        $portfolio_category = PortfolioCategory::findOrFail($id);
        $portfolio_category->delete();
        return redirect()->route('viewCategory')->with('flash_message_danger', 'Category Deleted Successfully');

    }
}
