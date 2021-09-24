<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        return view('pageA');

    }

    public function test($vueB) {
        return view('pageB', ['vueB' => $vueB]);
    }
}
