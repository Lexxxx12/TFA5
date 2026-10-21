<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CustomerController extends Controller
{
    public function index(): View
    {
        $customers = [
            ['id' => 'CUS-1042', 'full_name' => 'Maya Santos', 'email' => 'maya.santos@example.com', 'phone' => '+63 917 321 8042', 'status' => 'Active'],
            ['id' => 'CUS-1043', 'full_name' => 'Carlo Reyes', 'email' => 'carlo.reyes@example.com', 'phone' => '+63 918 442 1190', 'status' => 'Active'],
            ['id' => 'CUS-1044', 'full_name' => 'Alyssa Lim', 'email' => 'alyssa.lim@example.com', 'phone' => '+63 905 667 2301', 'status' => 'Loyal'],
            ['id' => 'CUS-1045', 'full_name' => 'Nathan Cruz', 'email' => 'nathan.cruz@example.com', 'phone' => '+63 956 108 7745', 'status' => 'Active'],
            ['id' => 'CUS-1046', 'full_name' => 'Bianca Flores', 'email' => 'bianca.flores@example.com', 'phone' => '+63 927 509 3826', 'status' => 'New'],
            ['id' => 'CUS-1047', 'full_name' => 'Luis Mendoza', 'email' => 'luis.mendoza@example.com', 'phone' => '+63 939 884 0163', 'status' => 'Loyal'],
        ];

        return view('customers.index', [
            'title' => 'Customer Accounts',
            'customers' => $customers,
        ]);
    }
}
