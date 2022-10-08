<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();
        $sess_info = $session->auth;
        if(!$sess_info)
        {
            return redirect()->to(base_url()); 
        }else
        {
            echo view('header_view');
            echo view('dashboard_view');
            echo view('footer_view');
            
        }
    }
    
    
}