<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

class HomeController extends Controller
{
    public function index() {
        $ingelogd = false;
        $users = [
            'user1', 'user2', 'user3'
        ];
        return view('home', compact('ingelogd', 'users'));
    }
}
