<?php 


class UserController extends Controller
{
    public function __construct()
    {
        $this->callModel = $this->model('UserModel');;
    }

    public function index()
    {
        $data = $this->callModel->getUser();
        $this->view('pages/BlogsPage' ,$data);
    }
    // public function login()
    // {
    //     // Check for POST
    //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //         // Process form
    //         // Sanitize POST data
    //         $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    //         // Init data
    //         $data = [
    //             'email' => trim($_POST['email']),
    //             'password' => trim($_POST['password']),
    //             'email_err' => '',
    //             'password_err' => '',
    //         ];

    //         // Validate Email
    //         if (empty($data['email'])) {
    //             $data['email_err'] = 'Please enter email';
    //         }

    //         // Validate Password
    //         if (empty($data['password'])) {
    //             $data['password_err'] = 'Please enter password';
    //         }

    //         // Check for user/email
    //         if ($this->callModel->findUserByEmail($data['email'])) {
    //             // User found
    //         } else {
    //             // User not found
    //             $data['email_err'] = 'No user found';
    //         }

    //         // Make sure errors are empty
    //         if (empty($data['email_err']) && empty($data['password_err'])) {
    //             // Validated
    //             // Check and set logged in user
    //             $loggedInUser = $this->callModel->login($data['email'], $data['password']);

    //             // if ($loggedInUser) {
    //             //     // Create Session
    //             //     $this->createUserSession($loggedInUser);
    //             // } else {
    //             //     $data['password_err'] = 'Password incorrect';

    //             //     $this->view('users/login', $data);
    //             // }
    //         } else {
    //             // Load view with errors
    //             $this->view('pages/BlogsPage', $data);
    //         }
    //     } else {
    //         // Init data
    //         $data = [
    //             'email' => '',
    //             'password' => '',
    //             'email_err' => '',
    //             'password_err' => '',
    //         ];

    //         // Load view
    //         $this->view('pages/BlogsPage', $data);
    //     }
    // }
    public function Admin()
    {
        
        $this->view('pages/Signin');
        

    }
    public function Home()
    {
        
        $this->view('pages/Home');
        

    }


    public function insert()
    {

        if (!isset($_POST['submit_add'])) {
            //load the view insert
            $this->view('pages/BlogsPage');
            
        }
        else {
            //array qui retourn le resultat envoyé par $_POST
            $data = [
                'titre' => $_POST['titre'],
                'description' => $_POST['description'],
                'contenu' => $_POST['contenu']
           ];
            //consomation du data
            $this->callModel->addUser($data);
            header('location: ' . URLROOT . '/' . 'UserController/BlogsPage');
        }
      
    }


    public function delete() {
            
        $data = [
            'id' => $_GET['id']
        ];

        $this->callModel->deleteUser($data);

        header('location:' . URLROOT . '/' . 'UsersController/index');
    
    
}

            public function update($id)
            {

            if (isset($_POST["submit"]))
            {


                $params=[ 
            'id'=>$id,
            'titre' =>$_POST['titre'],
            'contenu' => $_POST['contenu'],
            'description' => $_POST['description'],
                ];
                $this->callModel->updatePost($params);
                // header('location:'.URLROOT.'/' . '/contact/index');
                header('location:'.URLROOT);
            }
            else {
                $contact = $this->callModel->getPostctbyId($id);



                $this->view('pages/BlogsPage',$contact);
            }

        }


            
}














