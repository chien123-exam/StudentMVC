<?php

class FamilyController
{
 
    protected $model;

    public function __construct()
    {
        $this->model = new Family;
    }

    public function index()
    {

        view('families.index', [
            'families' => $this->model->getAll()
        ]);
    }

    public function create()
    {
        view('families.form', [
            'headingTitle' => 'Create a Family',
            'actionUrl' => 'index.php?controller=family&action=store'
        ]);
    }

    public function store()
    {
        $inputs = $_POST;
        // Validate date
        $errorMessage = $this->validate();



        if (empty($errorMessage)) {
            // Insert to database
            $this->model->create([
                'family_name' => $inputs['family_name'],
                'address' => $inputs['address'],
            ]);

            return redirect('index.php?controller=family');
        }

        view('families.form', [
            'errorMessage' => $errorMessage
        ]);
    }

    public function edit()
    {
        $family = $this->model->findById($_GET['id'] ?? 0);
        
        if (!$family) {
            echo 'Family not found';
            return;
        }

        view('families.form', [
            'headingTitle' => 'Edit a Family',
            'family' => $family,
            'actionUrl' => 'index.php?controller=family&action=update&id=' . $family->id
        ]);
    }

    public function update()
    {

        $inputs = $_POST;
        $familyId = $_GET['id'] ?? 0;

        $family = $this->model->findById($_GET['id'] ?? 0);
        
        if (!$family) {
            echo 'Family not found';
            return;
        }

        $errorMessage = $this->validate();
       
        if (empty($errorMessage)) {
            // Update to database
            $this->model->update([
                'family_name' => $inputs['family_name'],
                'address' => $inputs['address'],
            ], $familyId);

            return redirect('index.php?controller=family');
        }

        view('families.form', [
            'headingTitle' => 'Edit a Family',
            'family' => $family,
            'errorMessage' => $errorMessage
        ]);
    }

    public function delete()
    {
        $this->model->deleteById($_GET['id'] ?? 0);
        return redirect('index.php?controller=family');
        // Flash error message
    }

    protected function validate()
    {
        $inputs = $_POST;
        // Validate data
        $errorMessage = [];

        if (empty($inputs['family_name'])) {
            $errorMessage['family_name'] = 'Family_name is require';
        }

        return $errorMessage;
    }
}