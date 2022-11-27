<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Publishers;
use App\Models\BookCategories;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $books = Books::all();
        return view ('index', compact('books'));
    }

    public function bookdetail($id)
    {
        $book = Books::where('id', $id)->first();
        return view('books.detail-book', compact('book'));
    }

    public function publisher()
    {
        $publishers = Publishers::all();
        return view('publisher', compact('publishers'));
    }

    public function publisherdetail($id)
    {
        $publisher = Publishers::where('id', $id)->first();
        return view('publisher.detail-publisher', compact('publisher'));
    }

    public function bookcategories($categories)
    {
        $books = BookCategories::with('books')->where('categories_id', $categories)->get();
        return view('categories', compact('books'));
    }

    public function contact()
    {
        # code...
        return view('contact');
    }
}
