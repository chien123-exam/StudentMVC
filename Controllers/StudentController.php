<?php 

class StudentController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Student;
    }

    public function index() 
    {
        view('students.index', [
            'students' => $this->model->getAll(),
        ]);
    }

    public function create()
    {
        view('students.form', [
            'headingTitle' => 'Create a Student',
            'actionUrl' => 'index.php?controller=student&action=store'
        ]);
    }

    public function store() 
    {
        $inputs = $_POST;

        $errorMessage = $this->validate();

        if(empty($errorMessage)) {

            $this->model->create([
                'name' => $inputs['name'],
                'email' => $inputs['email'],
                'address' => $inputs['address'],
                'gender' => $inputs['gender'],
            ]);

            return redirect('index.php?controller=student');
        }

        view('students.form', [
            'errorMessage' => $errorMessage
        ]);
    }

    public function edit()
    {
        $student = $this->model->findById($_GET['id'] ?? 0);

        if(!$student) {
            echo 'Student not found';
            return;
        }

        view('students.form', [
            'headingTitle' => 'Edit a Student',
            'student' => $student,
            'actionUrl' => 'index.php?controller=student&action=update&id='.$student->id,
        ]);
    }

    public function update()
    {
        $inputs = $_POST;
        $studentID = $_GET['id'] ?? 0;
        $student = $this->model->findById($_GET['id'] ?? 0);

        if(!$student) {
            echo 'Student not found';
            return;
        }

        $errorMessage = $this->validate();

        if(empty($errorMessage)) {
            $this->model->update([
                'name' => $inputs['name'],
                'email' => $inputs['email'],
                'address' => $inputs['address'],
                'gender' => $inputs['gender']
            ], $studentID);

            return redirect('index.php?controller=student');
        }

        view('students.form', [
            'headingTitle' => 'Edit a Student',
            'student' => $student,
            'errorMessage' => $errorMessage
        ]);
    }

    public function delete()
    {
        $this->model->deleteById($_GET['id'] ?? 0);
        return redirect('index.php?controller=student');
    }

    public function validate()
    {
        $inputs = $_POST;
        $errorMessage = [];

        if(empty($inputs['name'])) {
            $errorMessage['name'] = 'Vui lòng nhập tên';
        }

        if(empty($inputs['email'])) {
            $errorMessage['email'] = 'Vui lòng nhập email';
        }

        if(empty($inputs['address'])) {
            $errorMessage['address'] = 'Vui lòng nhập địa chỉ';
        }
        
        if(empty($inputs['gender'])) {
            $errorMessage['gender'] = 'Vui lòng chọn giới tính';
        }

        return $errorMessage;
    }
}



?>