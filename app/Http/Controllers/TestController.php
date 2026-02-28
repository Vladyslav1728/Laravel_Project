<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TestController extends Controller {
    public function create() {
        return view('new.create');
    }
    public function result(Request $request) {
        $n = $request->n;

        $numbers = [];
        $a = 0;
        $b = 1;

        for ($i = 0; $i < 10; $i++) {
            $numbers[] = $a;
            $temp = $a + $b;
            $a = $b;
            $b = $temp;
        }
        return view('new.result', compact('numbers'));
    }
}
