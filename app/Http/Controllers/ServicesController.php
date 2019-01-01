<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function create(){
        return view ('admin.service.create');
    }

    public function store(Request $request){
        $service = new Service;
        $data = $request->all();
        $service->name = ucwords(strtolower($data['name']));
        $service->icon = strtolower($data['icon']);
        $service->body = $data['body'];
        $service->save();
        return redirect()->route('service.index')->with('flash_message_success', 'Service Has Been Inserted');
    }

    public function index(){
        $services = Service::latest()->get();
        return view ('admin.service.index', compact('services'));
    }

    public function edit($id){
        $service = Service::findOrFail($id);
        return view ('admin.service.edit', compact('service'));
    }

    public function update(Request $request, $id){
        $service = Service::findOrFail($id);
        $data = $request->all();
        $service->name = ucwords(strtolower($data['name']));
        $service->icon = strtolower($data['icon']);
        $service->body = $data['body'];
        $service->save();
        return redirect()->route('service.index')->with('flash_message_info', 'Service Has Been Updated');
    }

    public function delete($id){
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect()->route('service.index')->with('flash_message_danger', 'Service Has Been Deleted');
    }
}
