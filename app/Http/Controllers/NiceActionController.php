<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class NiceActionController extends Controller
{
    public function getGreet() {
        return view('greet');
    }

    public function getHug($name = null) {
        return view('hug', ['name' => $name]);
    }

    public function postDoCustomAction(Request $request) {
        if (isset($request['action']) && isset($request['name'])) {
            if (strlen($request['name']) > 0) {
                return view('nice', ['action' => $request['action'], 'name' => $this->transformName($request['name'])]);
            }
            if (View::exists($request['action'])) {
                return view($request['action']);
            }
        }
        return redirect()->back();
    }

    private function transformName($name) {
        $prefix = "KING ";
        return $prefix . strtoupper($name);
    }
}