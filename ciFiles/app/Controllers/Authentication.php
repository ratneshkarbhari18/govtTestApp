<?php

namespace App\Controllers;

use App\Controllers\PageLoader;
use App\Models\AuthModel;


class Authentication extends BaseController
{


    public function mgt_login_exe(){

        $session = session();

        if($session->logged_in==TRUE){
            return redirect()->to(site_url("dashboard"));
        }

        $pageLoader = new PageLoader();

        $enteredEmail = $this->request->getPost("email");
        $enteredPassword = $this->request->getPost("password");

        if ($enteredEmail==""||$enteredPassword=="") {

            $pageLoader->login("Enter both email & password");
            
        } else {
            
            $authModel = new AuthModel();

            $userData = $authModel->where("email",$enteredEmail)->first();

            if ($userData) {
                
                if (password_verify($enteredPassword,$userData["password"])) {
                    
                    $session->set(
                        array(
                            "first_name" => $userData["first_name"],
                            "last_name" => $userData["last_name"],
                            "email" => $userData["email"],
                            "role" => $userData["role"],
                            "logged_in" => TRUE,
                            "user_id" => $userData["id"],
                        )
                    );
    
                    return redirect()->to(site_url("dashboard"));
                    
                } else {
                    $pageLoader->login("Password incorrect");
                }

            } else {
                $pageLoader->login("Email incorrect");
            }
            
            
        }
        
    }


    public function add_user_exe(){
        $pageLoader = new PageLoader();
        $session = session();
        $role = $session->role;
        if ($role!="cm") {
            return redirect()->to(site_url("login"));
        } else {
            $authModel = new AuthModel();
            $userExists = $authModel->where("email",$this->request->getPost("email"))->first();
            if ($userExists) {
                $pageLoader->add_user("","User Already exists");
            } else {
                $dataToInsert = array(
                    "first_name" => $this->request->getPost("first_name"),
                    "last_name" => $this->request->getPost("last_name"),
                    "email" => $this->request->getPost("email"),
                    "password" => password_hash("testpassword",PASSWORD_DEFAULT),
                    "role" => $this->request->getPost("role")
                );
                $created = $authModel->insert($dataToInsert);
                if ($created) {
                    $pageLoader->add_user("Page created successfully","");
                } else {
                    $pageLoader->add_user("","User not created.");
                }
            }
        }
    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to(site_url("login"));
    }

}