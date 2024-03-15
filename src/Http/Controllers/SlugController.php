<?php

namespace wdd\slug\Http\Controllers;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class SlugController extends Controller
{
    public function index()
    {
        $slug = Str::slug('web develper');

        return view('wdd/slug::slug', compact('slug'));
    }
}
