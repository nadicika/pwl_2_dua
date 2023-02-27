<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function index()
    {
        echo "Selamat Datang di Website Kami";
    }
    */

    public function home()
    {
        return view('home', ['name' => 'Hello, Selamat Datang Inthania Nadicika']);;
    }

    public function aboutus()
    {
        return view('about-us', ['aboutus' => 'Saya Inthania Nadicika Kurniawan seorang mahasiswa dari Politeknik Negeri Malang.']);
    }

    public function articles($id)
    {
        echo "Halaman Artikel dengan ID "; 
        return ($id);
    }

    public function product()
    {
        return view('product', ['product' => 'List Product
        <br>
        <ul>
            <li>
                <a href="https://www.educastudio.com/category/marbel-edu-games">Edu Games</a>
            </li>
            <li>
                <a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">Kids Games</a>
            </li>
            <li>
                <a href="https://www.educastudio.com/category/riri-story-books">Story Books</a>
            </li>
            <li>
                <a href="https://www.educastudio.com/category/kolak-kids-songs">Kids Song</a>
            </li>
        </ul>']);
    }

    public function news()
    {
        return view('news', ['news' => 'List News
        <br>
        <ul>
            <li>
                <a href="https://www.educastudio.com/news">Berita 1</a>
            </li>
            <li>
                <a href="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19">Berita 2</a>
            </li>
        </ul>']);
    }

    public function program()
    {
        return view('program', ['program' => 'List Program
        <br>
        <ul>
            <li>
                <a href="https://www.educastudio.com/program/karir">Program Karir</a>
            </li>
            <li>
            <a href="https://www.educastudio.com/program/magang">Program Magang</a>
            </li>
            <li>
            <a href="https://www.educastudio.com/program/kunjungan-industri">Program Kunjungan Industri</a>
            </li>
        </ul>']);
    }

    public function index()
    {
        return view('contact-us', ['contact' => '
        KONTAK KAMI <br>
        <ul>
            <li> Telp : 02182972 </li>
            <li> E-mail : edu-web@gmail.com </li>
        </ul>
        <label>Kontak</label> <br>
            <input placeholder="Masukkan kontak">
            <button>Submit</button>
        ']);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
}
