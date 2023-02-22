<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('ongkir/index', $data);
    }
    public function bantuan()
    {
        $data = [
            'title' => 'Bantuan'
        ];
        return view('ongkir/bantuan', $data);
    }
    public function manual()
    {
        $data = [
            'title' => 'Cara Pakai'
        ];
        return view('ongkir/manual', $data);
    }
}
