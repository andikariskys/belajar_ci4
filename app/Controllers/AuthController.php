<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function login()
    {
        return view('auth/login');
    }

    public function checkLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $this->userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user->password)) {
            // Set user session data
            session()->set([
                'user_id'   => $user->id,
                'username'  => $user->username,
                'role'      => $user->role,
                'logged_in' => true,
            ]);

            return redirect()->to(route_to('home.index'))->with('success', 'Login successful');
        }
        return redirect()->back()->with('error', 'Invalid username or password')->withInput();
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(route_to('auth.login'))->with('success', 'Logout successful');
    }
}
