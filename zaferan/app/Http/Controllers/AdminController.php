<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
use App\Models\Order;
use App\Models\Contact;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        $userCount = User::count();
        $orderCount = Order::count();
        $blogCount = Blog::count();
        $contactCount = Contact::count();
        return view('admin.index', compact('userCount', 'orderCount', 'blogCount','contactCount'));
    }
}
