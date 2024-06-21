<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function login(){
        if($this->request->getMethod() == 'POST'){
            $post = $this->request->getPost(['email','password']);
            $admin_model = new \App\Models\AdminModel();
            $admin=$admin_model->where('email', $post['email'])
            ->where('password', sha1($post['password']))
            ->first();

            $session = session();
            if(!$admin){
                $session->setflashdata('invalid','Invalid Username and password');
            }
            else{
                $this->setAdminSession($admin);
                return redirect()->to('content/index');
            }
        }

        echo view('admin/login');


    }
    public function logout(){
        session()->destroy();
        return redirect()->to('admin/login');
    }

    public function setAdminSession($admin){
        $data = [
            'id' => $admin->id,
            'fname' => $admin->fname,
            'lname' => $admin->lname,
            'email' => $admin->email,
            'status' => $admin->status,
            'isAdminLoggedIn' => true,
        ];

        session()->set($data);
    }
}