<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;
use App\Models\PostModel;

class PostController extends BaseController
{
    public function index()
    {
        return view('index');
    }

    // Add post ajax
    public function addPost()
{
    try {
        $file = $this->request->getFile('file');
        if (!$file->isValid()) {
            return $this->response->setJSON([
                'error' => true,
                'message' => 'Invalid file upload'
            ]);
        }

        $filename = $file->getRandomName();

        $data = [
            'title' => $this->request->getPost('title'),
            'category' => $this->request->getPost('category'),
            'body' => $this->request->getPost('body'),
            'image' => $filename,
        ];

        $validation = Services::validation();
        $validation->setRules([
            'file' => 'uploaded[file]|max_size[file,1024]|is_image[file]|mime_in[file,image/jpg,image/jpeg,image/png]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return $this->response->setJSON([
                'error' => true,
                'message' => $validation->getErrors()
            ]);
        } else {
            // Move the file to the desired location
            $file->move('uploads/avatar', $filename);
            $postModel = new PostModel();
            $postModel->save($data);
            return $this->response->setJSON([
                'error' => false,
                'message' => 'Post added successfully!'
            ]);
        }
    } catch (\Exception $e) {
        return $this->response->setJSON([
            'error' => true,
            'message' => $e->getMessage()
        ]);
    }
}
// Get posts for AJAX request
public function ajaxPosts()
{
        $postModel = new PostModel();
        $posts = $postModel->findAll();

        $data = ['posts' => $posts];
        $html = view('posts', $data);

        return $this->response->setJSON([
            'html' => $html,
        ]);
}

//get post for ajax request
public function getPost()
{
    
}

}
