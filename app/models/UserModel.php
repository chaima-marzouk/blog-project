<?php

class UserModel {

    private $database;
    public function __construct()
    {
        //creer un objet d'une class en utulisant "new"
        $this->database = new Database; //objet

    }

    public function getUser()
    {
        //preparation de la query
        $this->database->query("SELECT * FROM `blogs` ");
        //execution de la query / fetch all 
        $result = $this->database->resultSet();
        return $result;
      
    }

    public function addUser($data)
    {
        //preparation de la query
        // :placeholders
        $this->database->query("INSERT INTO `blogs` (`titre`, `description`, `contenu` ) VALUES (:titre, :description, :contenu)");

        //saniteser contre sql injection
        $this->database->bind(':titre', $data['titre']);
        $this->database->bind(':description', $data['description']);
        $this->database->bind(':contenu', $data['contenu']);
      
        //execution
        if ($this->database->execute()){
            return true;
        }
        else {
            return false;
        }

    }

    public function getContactById($id)
    {
        $this->database->query('SELECT * FROM `bloger` WHERE id = :id');
        $this->database->bind(':id' , $id);

        $row = $this->database->single();

        return $row;
 
    }

    public function getPostbyId($id){
        $this->database->query("SELECT * FROM `blogs` WHERE id = :id");
        $this->database->bind(':id',$id);
  
        $results = $this->database->single();
  
        return $results;
      }


      public function updatePost($params)
      {
        $this->database->query("UPDATE blogs  SET titre= :titre, contenu= :contenu, description= :description WHERE id= :id");
        $this->database->bind(':titre', $params['titre']);
        $this->database->bind(':contenu',$params['contenu']);
        $this->database->bind(':description',$params['description']);
        $this->database->bind(':id',$params['id']);
        $this->database->execute();
        // return $database;
  
      }

     // <--// delete//-->

     public function deleteUser($data)
     {
         $this->database->query('DELETE FROM blogs WHERE id = :id');
         $this->database->bind(':id', $data['id']);
 
 
         $row = $this->database->single();
 
         return $row;
 
     }

    


    // Login User
    // public function login($email, $password)
    // {
    //     $this->database->query('SELECT * FROM `bloger` WHERE email = :email');
    //     $this->database->bind(':email', $email);

    //     $row = $this->database->single();

    //     $hashed_password = $row->password;
    //     if (password_verify($password, $hashed_password)) {
    //         return $row;
    //     } else {
    //         return false;
    //     }
    // }

    // // Find user by email
    // public function findUserByEmail($email)
    // {
    //     $this->database->query('SELECT * FROM `bloger` WHERE email = :email');
    //     // Bind value
    //     $this->database->bind(':email', $email);

    //     $row = $this->database->single();

    //     // Check row
    //     if ($this->database->rowCount() > 0) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
}

