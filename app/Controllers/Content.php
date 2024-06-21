<?php

namespace App\Controllers;

class Content extends BaseController
{
    protected $helpers=['form'];
    public function index()
    {
        $content_model = new \App\Models\ContentModel();
        $data['content'] = $content_model->findAll();
        return view('content/index', $data);
    }

    public function add(){
            helper('text');
            $data=array();
            if($this->request->getMethod() == 'POST'){

                $post['targetdate'] = strip_quotes($_POST['targetdate']);
                $post['achieve'] = strip_quotes($_POST['achieve']);
                $post['targetoutcome'] = strip_quotes($_POST['targetoutcome']);
                $post['activities'] = strip_quotes($_POST['activities']);
                $post['accomplished'] = strip_quotes($_POST['accomplished']);

                $rules = [
                    'targetdate' => ['label'=> 'targetdate','rules'=>'required'],
                    'achieve' => ['label'=> 'achieve','rules'=>'required'],
                    'targetoutcome' => ['label'=> 'targetoutcome','rules'=>'required'],
                    'activities' => ['label'=> 'activities','rules'=>'required'],
                    'accomplished' => ['label'=> 'accomplished','rules'=>'required']
                ];

                if(!$this->validate($rules)){
                    $data['validation'] = $this->validator;
                }
                else {
                    $content_model = new \App\Models\ContentModel();
                    $content_model->save($post);
                    return redirect()->to('content/index');
                }
            }
        return view('content/add',$data);
    }

    public function insert(){}
 

    public function view($id){
        $content_model = new \App\Models\ContentModel();
        $data['content'] = $content_model->find($id);
        return view('content/view', $data);
    }

    public function edit($id){
        helper('text');
        if($this->request->getMethod() == 'POST'){
            $post = $this->request->getPost(['targetdate','achieve','targetoutcome','activities','accomplished']);

            $rules = [
                'targetdate' => ['label'=> 'targetdate','rules'=>'required'],
                'achieve' => ['label'=> 'achieve','rules'=>'required'],
                'targetoutcome' => ['label'=> 'targetoutcome','rules'=>'required'],
                'activities' => ['label'=> 'activities','rules'=>'required'],
                'accomplished' => ['label'=> 'accomplished','rules'=>'required']
            ];

            if(!$this->validate($rules)){
                $data['validation'] = $this->validator;
            }
            else {
                $content_model = new \App\Models\ContentModel();
                $content_model->update($id, $post);
                return redirect()->to('content/index');
            }
        }

        $content_model = new \App\Models\ContentModel();
        $data['content'] = $content_model->find($id);
        return view('content/edit',$data);
    }

    public function delete($id){
        if($this->request->getMethod() == 'POST'){
            $content_model = new \App\Models\ContentModel();
            $content_model->delete($id);
            return redirect()->to('content/index');
        }
        $content_model = new \App\Models\ContentModel();
        $data['content'] = $content_model->find($id);
        return view('content/delete',$data);
    }

    public function login(){
        return view('content/login');
    }
}