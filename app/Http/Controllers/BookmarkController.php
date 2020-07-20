<?php

namespace App\Http\Controllers;

use App\models\Bookmark;
use App\Http\Requests\BookmarkRequest;
//use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookmarks = Bookmark::orderBy('id', 'desc')->paginate(20);
        
        return view('auth.bookmarks.index', compact('bookmarks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.bookmarks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookmarkRequest $request)
    {
        Bookmark::create($request->all());

        return redirect()
                ->route('bookmarks.index')
                ->with('status', 'ブックマークを登録しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function show(Bookmark $bookmark)
    {
        return view('auth.bookmarks.show', compact('bookmark'));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookmark $bookmark)
    {
        return view('auth.bookmarks.edit', compact('bookmark'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function update(BookmarkRequest $request, Bookmark $bookmark)
    {
        $bookmark->update($request->all());

        return redirect()
                ->route('bookmarks.index')
                ->with('status', 'ブックマークを更新しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookmark $bookmark)
    {
        $bookmark->delete();

        return redirect()
                ->route('bookmarks.index')
                ->with('status', 'ブックマークを削除しました');
    }
}
