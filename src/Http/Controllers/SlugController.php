<?php

namespace akis\slug\Http\Controllers;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class SlugController extends Controller
{
    public function index()
    {
        $slug = Str::slug('web');

        return view('akis/slug::slug', compact('slug'));
    }
}
