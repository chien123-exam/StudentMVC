<?php

class UserController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new User;
    }
    public function index()
    {
        view('users.index', [
            'title' => 'MVC in PHP',
            'users' => $this->userModel->getAll(),
        ]);
    }

    public function create()
    {
        view('users.form', [
            'headingTitle' => 'Create a new User',
        ]);
    }

    public function store()
    {
        $data = [];
        $this->userModel->create($data);
        // chuyển trang về danh sách
    }

    public function edit()
    {

    }

    public function show()
    {
        
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }
}