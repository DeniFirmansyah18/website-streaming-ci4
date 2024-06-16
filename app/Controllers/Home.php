<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Myth\Auth\Config\Auth as AuthConfig;

class Home extends BaseController
{
    public function index()
    {
        // Load authentication service
        $auth = service('authentication');

        // Set user if logged in
        $user = null;
        if ($auth->check()) {
            $user = $auth->user();
        }

        $authConfig = new AuthConfig();
        return view('auth/login', ['config' => $authConfig]);
    }

    public function register()
    {
        // Load authentication service
        $auth = service('authentication');

        // Set user if logged in
        $user = null;
        if ($auth->check()) {
            $user = $auth->user();
        }
        
        $authConfig = new AuthConfig();
        return view('auth/register', ['config' => $authConfig]);
    }

    public function user()
    {
        return view('admin/index');
    }
}
