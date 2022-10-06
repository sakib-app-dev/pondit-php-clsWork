<?php

namespace Project\Controllers;

class Student
{

    public $id;
    public $name;

    public function __construct()
    {
        session_start();
    }

    public function store(array $data)
    {

        //$_SESSION
        // $students=[
        //     ['id'=>'1111','name'=>'Rasel'],
        //     ['id'=>'1112','name'=>'RUMEL'],
        
        // ];
    //    if($data['first_name']==""){
    //     $_SESSION['message'] = '<p style="color:red">First name required!</p>';
    //    }
    //    if($data['last_name']==""){
    //     $_SESSION['message'] = '<p style="color:red">Last name required!</p>';
    //    }
    //    if($data['first_name']==""){
    //     $_SESSION['message'] = '<p style="color:red">first_name required!</p>';
    //    }
    //    if($data['Contacts']==""){
    //     $_SESSION['message'] = '<p style="color:red">first name required!</p>';
    //    }
    //    else{
    //     $_SESSION['students'][] = $data;
    //     //array_push($_SESSION, $data);
    //     // print_r($_SESSION);
    //     $_SESSION['message'] = 'Sucessfully Created';
    //    }
    //     // print_r($students);


        if(empty($data['id'])){
            $_SESSION['errors']['id']='ID Required';
        }
        if(empty($data['first_name'])){
            $_SESSION['errors']['first_name']='Name Required';
        }
        if(empty($data['last_name'])){
            $_SESSION['errors']['last_name']='Required';
        }
        if(empty($data['email'])){
            $_SESSION['errors']['email']='email Required';
        }
        if(empty($data['contact_no'])){
            $_SESSION['errors']['contact_no']='contact_no Required';
        }
        header('Location:./create.php');

        // print_r($_SESSION['errors']);
        // exit();
        // else{

        // $_SESSION['students'][] = $data;
        // array_push($_SESSION, $data);
        // print_r($_SESSION);
        // $_SESSION['message'] = 'Sucessfully Created';
        // }
       

     
    }

    public function update(array $data,int $id)
    {
        
        $_SESSION['students'][$index=$this->findIndex($id)]=$data;
        $_SESSION['message'] = 'Sucessfully Updated';
    }

    public function details(int $id)
    {
        
     
      return $_SESSION['students'][$index=$this->findindex($id)];

    }

    public function destroy(int $id)
    {
        


        $index=$this->findindex($id);
       unset($_SESSION['students'][$index]);
        $_SESSION['message'] = 'Sucessfully Deleted';
    }

    public function findIndex(int $id) // : int|null  //resulting int retunring null
    {
        $students = $_SESSION['students'];

        $index= null;


        //$id=$_GET['id'];
        foreach ($students as $key => $student) {

            if ($student['id'] == $id) {

                $index = $key;
            }
        }
       // die($index);
        return $index;
    }
}
