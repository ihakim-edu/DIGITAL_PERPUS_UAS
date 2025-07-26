<?php
namespace App\Controllers;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginAction()
    {
        $session = session();
        $userModel = new UserModel();
        $username = $this->request->getPost('username');
        $password = md5($this->request->getPost('password'));
        $user = $userModel->where('username', $username)->first();
        if ($user && $user['password'] === $password) {
            $session->set('isLoggedIn', true);
            return redirect()->to('/buku');
        } else {
            return redirect()->back()->with('error', 'Login gagal');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
