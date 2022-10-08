<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        
        
        $session = session();
        
        $sess_info = $session->auth;
        
        if(!$sess_info)
        {
            return view('login_view');
            
        }else
        {
            return redirect()->to(base_url('/dashboard')); 
        }
        
    }
    
    public function CheckAuth()
    {
        if($this->request->getVar('email') && !empty($this->request->getVar('email'))
        && $this->request->getVar('password') && !empty($this->request->getVar('password'))
        )
        {
            $email = $this->request->getVar('email');
            
            $password = sha1($this->request->getVar('password'));
            
            $db = db_connect();
            
            $query = $db->query("SELECT id,email_address FROM users WHERE email_address='$email' AND password='$password'");
            
            if($query->getNumRows() > 0)
            {
                $row = $query->getRow();
                
                $session = session();
                
                $session->set('auth',[
                    
                    'user_id'=>$row->id,
                    'email'=>$row->email_address,
                    'username'=>$row->first_name,
                    'is_logged_in'=>true
                    ]);
                
                
                
                return $this->response->setJSON(['code'=>200]);
                
            }
            else
            {
                
                return $this->response->setJSON(['code'=>404]);
                
            }
            
            

            
        }
        else
        {
            return $this->response->setJSON(['code'=>404]);
        }
       
        
    }
    
    public function SingOut()
    {
        $session = session();
        unset($_SESSION['auth']);
        $session->destroy();
        return redirect()->to(base_url()); 

        
    }
}

