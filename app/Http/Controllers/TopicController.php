<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index()
    {
        return Inertia::render('Topics/Index', [
            'topics' => Topic::all()
        ]);
    }
}
