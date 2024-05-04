<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminInboxController extends Controller
{
        public function index()
    {
        return view('admin.inbox.index',);
    }



}
