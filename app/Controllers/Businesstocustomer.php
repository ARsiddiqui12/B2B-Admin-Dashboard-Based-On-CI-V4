<?php

namespace App\Controllers;

class Businesstocustomer extends BaseController
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
            echo view('b2b_customer_add');
            echo view('footer_view');
        }
    }
    
    public function B2cCustomersList()
    {
        $session = session();
        $sess_info = $session->auth;
        if(!$sess_info)
        {
            return redirect()->to(base_url()); 
        }else
        {
            echo view('header_view');
            echo view('b2c_customers_list_view');
            echo view('footer_view');
        }
    }
    
    public function B2cGroupList()
    {
        $session = session();
        $sess_info = $session->auth;
        if(!$sess_info)
        {
            return redirect()->to(base_url()); 
        }else
        {
            echo view('header_view');
            echo view('b2c_customer_group_list_view');
            echo view('footer_view');
        }
    }
}