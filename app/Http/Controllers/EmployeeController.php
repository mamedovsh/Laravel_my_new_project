<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view ('get-employee-data');
    }

    public function store(Request $request)
    {
        $path = $this->getPath($request);
        $url = $this->getUrl($request);

        $workData = json_decode($request->input('workData'), true);

        $name = $request->input('name');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $post = $request->input('post');

        $additionalField1 = $workData['field1'] ?? null;
        $additionalField2 = $workData['field2'] ?? null;
    }

    public function update(Request $request, $id)
    {
        $path = $this->getPath($request);
        $url = $this->getUrl($request);

        $workData = json_decode($request->input('workData'), true);
        
        $name = $request->input('name');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $post = $request->input('post');
    }


    private function getPath(Request $request)
    {
        return $request->path();
    }

    private function getUrl(Request $request)
    {
        return $request->url();
    }
}
