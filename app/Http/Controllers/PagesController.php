<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('pages.homepage', ['books'=>$books]);
    }
    public function insert(){
        return view("pages.insert");
    }
    public function storage(){
        $books = Book::all();
        return view("pages.storage", ['books'=>$books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("insert");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book;

        $book->name = $request->name;
        $book->description = $request->description;
        $book->coast = $request->coast;
        $book->price = $request->price;
        $book->storage = $request->storage;

        $book->save();

        return redirect()->route("home")->with("msg", "Book created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view("pages.edit", ['book'=>$book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Book::findOrFail($id)->update($request->all());
        return redirect()->route('storage')->with("msg", "Book edited successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::findOrFail($id)->delete();
        return redirect()->route("home")->with("msg", "Books deleted successfully!");
    }
}
