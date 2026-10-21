<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = [
            ['username' => 'admin.mia', 'full_name' => 'Mia Villanueva', 'role' => 'Administrator', 'created_at' => '2026-07-12'],
            ['username' => 'cashier.jules', 'full_name' => 'Jules Navarro', 'role' => 'Cashier', 'created_at' => '2026-07-18'],
            ['username' => 'stock.ren', 'full_name' => 'Ren Garcia', 'role' => 'Inventory', 'created_at' => '2026-08-03'],
            ['username' => 'cashier.sam', 'full_name' => 'Sam Dela Cruz', 'role' => 'Cashier', 'created_at' => '2026-08-21'],
            ['username' => 'manager.toni', 'full_name' => 'Toni Aquino', 'role' => 'Manager', 'created_at' => '2026-09-02'],
            ['username' => 'support.lei', 'full_name' => 'Lei Ramos', 'role' => 'Support', 'created_at' => '2026-09-15'],
        ];

        return view('users.index', [
            'title' => 'User Accounts',
            'users' => $users,
        ]);
    }
}
