<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserLogin;
use App\Models\EmailLog;



class AdminDashboardController extends Controller
{
    public function index()
    {
        // Recuperar los últimos 10 registros de correos enviados
        // Recuperar los últimos 10 registros de correos enviados
        $emailLogs = EmailLog::orderBy('created_at', 'desc')->limit(10)->get();

        //recupera los ultimos 10 registros de 
        // Recuperar los últimos 10 registros de login
        $logins = UserLogin::orderBy('created_at', 'desc')
            ->limit(10)
            ->get();

        // Pasar los registros a la vista
        return view('admin.dashboard', compact('logins', 'emailLogs'));
    }
}
