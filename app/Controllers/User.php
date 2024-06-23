<?php

namespace App\Controllers;
use App\Models\VideoModel;

class User extends BaseController
{
    public function index()
    {
        $model = new VideoModel();
        $data['videos'] = $model->findAll();

        if (session()->has('isLoggedIn')) {
            $data['user'] = session()->get('user');
        } else {
            $data['user'] = null;
        }

        return view('user/index', $data);
    }

    public function detail()
    {
        $model = new VideoModel();
        $data['videos'] = $model->findAll();

        if (session()->has('isLoggedIn')) {
            $data['user'] = session()->get('user');
        } else {
            $data['user'] = null;
        }

        return view('user/detail', $data);
    }

    public function watching()
    {
        $model = new VideoModel();
        $data['videos'] = $model->findAll();

        if (session()->has('isLoggedIn')) {
            $data['user'] = session()->get('user');
        } else {
            $data['user'] = null;
        }

        return view('user/watching', $data);
    }

    public function blog()
    {
        $model = new VideoModel();
        $data['videos'] = $model->findAll();

        if (session()->has('isLoggedIn')) {
            $data['user'] = session()->get('user');
        } else {
            $data['user'] = null;
        }

        return view('user/blog', $data);
    }

    public function warning()
    {
        $model = new VideoModel();
        $data['videos'] = $model->findAll();

        if (session()->has('isLoggedIn')) {
            $data['user'] = session()->get('user');
        } else {
            $data['user'] = null;
        }

        return view('layouts/warning', $data);
    }
}
