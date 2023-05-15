<?php

namespace App\Http\Controllers;

use App\Models\ArticleModel;
use Illuminate\Http\Request;
use PDF;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images','public');
        }

        ArticleModel::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured_image' => $image_name,
        ]);
        return 'Artikel berhasil Disimpan';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = ArticleModel::find($id);

        return view('articles.edit', ['article' => $article]);
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
        $article = ArticleModel::find($id);

        $article->title = $request->title;
        $article->content = $request->content;

        if($article->featured_image && file_exists(storage_path('app/public' . $article->featured_image))) {
            \Storage::delete(['public/', $article->featured_image]);
        }

        $image_name = $request->file('image')->store('iamges', 'public');
        $article->featured_image = $image_name;

        $article->save();
        return 'Artikel berhasil diubah';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cetak_pdf(){
        $articles = ArticleModel::all();
        $pdf = PDF::loadview('articles.articles_pdf', ['articles' => $articles]);
        return $pdf -> stream();
    }
}
