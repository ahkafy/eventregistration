<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $participants = User::join('transactions', 'transactions.user_id', '=', 'users.id')->where('transactions.bk_status', 'Completed')->get();
        return view('admin.dashboard', compact('participants'));
    }

    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function participants()
    {
        $participants = User::all();
        return view('admin.dashboard', compact('participants'));
    }

    public function transactions()
    {
        $transactions = Transaction::join('users', 'users.id', '=', 'transactions.user_id')->select('transactions.*', 'users.name', 'users.phone', 'users.email')->get();
        return view('admin.transactions', compact('transactions'));
    }
}
