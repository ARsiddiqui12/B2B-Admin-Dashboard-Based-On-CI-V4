<?php

namespace App\Controllers;

class Businesstobusiness extends BaseController
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
    
    public function B2bCustomersList()
    {
        $session = session();
        $sess_info = $session->auth;
        if(!$sess_info)
        {
            return redirect()->to(base_url()); 
        }else
        {
            $db = db_connect();
            
            $b2b_group = $db->query("SELECT * FROM b2b_group");
            
            $data['b2b_group_list'] = $b2b_group->getResult();
            
            $refered_query = $db->query("SELECT * FROM b2b_customers");
    
            $data['b2b_refered_list'] = $refered_query->getResult();
            
            $country = $db->query("SELECT * FROM country");
            
            $data['country_list'] = $country->getResult();
            
            
            $state = $db->query("SELECT * FROM state");
            
            $data['state_list'] = $state->getResult();
            
            

            
            echo view('header_view',$data);
            echo view('b2b_customers_list_view',$data);
            echo view('footer_view',$data);
        }
    }
    
    public function B2bGroupList()
    {
        $session = session();
        $sess_info = $session->auth;
        if(!$sess_info)
        {
            return redirect()->to(base_url()); 
        }else
        {
            echo view('header_view');
            echo view('b2b_customer_group_view');
            echo view('footer_view');
        }
    }
    
    public function B2bCustomFormSubmission()
    {
        helper('text');
        
        $db = db_connect();
        
        $account_number =  random_string('numeric', 8);
         
        $db->table('b2b_customers')->insert([
            'account_number'=>$account_number,
            'first_name'=>$this->request->getVar('first_name'),
            'last_name' =>$this->request->getVar('last_name'),
            'email_address' =>$this->request->getVar('email'),
            'company_name' =>$this->request->getVar('company_name'),
            'mobile_number' =>$this->request->getVar('mobile_number'),
            'date_of_birth' =>$this->request->getVar('date_of_birth'),
            'notes' =>$this->request->getVar('note'),
            'id_customer_group'=>$this->request->getVar('customer_group'),
            'id_referred_by'=>$this->request->getVar('referred_by'),
            'address_line_one'=>$this->request->getVar('address_line_one'),
            'address_line_two'=>$this->request->getVar('address_line_two'),
            'id_country'=>$this->request->getVar('country'),
            'state'=>$this->request->getVar('state'),
            'city'=>$this->request->getVar('city'),
            'postcode'=>$this->request->getVar('postal_code'),
            'id_favorite_destination'=>$this->request->getVar('favorite_id'),
            'allow_general_email'=>$this->request->getVar('allow_general_email'),
            'allow_invoice_email'=>$this->request->getVar('allow_invoice_email'),
            'allow_support_email'=>$this->request->getVar('allow_support_email'),
            'allow_product_email'=>$this->request->getVar('allow_product_email'),
            'allow_single_signin'=>$this->request->getVar('allow_single_signin'),
            'allow_marketing_email'=>$this->request->getVar('allow_marketing_email'),
            'password' =>$this->request->getVar('password'),
            'created_at'=>date('Y-m-d H:i:s'),
        ]);
        
        return $this->response->setJSON(['code'=>200]);
 
    }
    
    public function DataTableB2bCustoemers()
    {
      $draw = intval($this->request->getVar("draw"));
      $start = intval($this->request->getVar("start"));
      $length = intval($this->request->getVar("length"));

      $db = db_connect();
      
      $query = $db->query('SELECT * FROM b2b_customers');

      $data = [];

      foreach($query->getResult() as $r) {
           
           $buttons = "
           <a href='javascript:;' title='Edit Customer Info'><i class='fa fa-edit'></i></a>
           &nbsp;&nbsp;
           <a href='".base_url('b2b/customer/profile')."' title='View Customer Info'><i class='fa-solid fa-magnifying-glass'></i></a>
           &nbsp;&nbsp;
           <a href='javascript:;' title='Delete Customer Info'><i class='fa fa-trash'></i></a>
           ";
          
           $data[] = array(
                $r->account_number,
                $r->first_name,
                $r->last_name,
                $r->email_address,
                $r->mobile_number,
                $buttons
           );
      }


      $result = array(
               "draw" => $draw,
                 "recordsTotal" => $query->getNumRows(),
                 "recordsFiltered" => $query->getNumRows(),
                 "data" => $data
            );


      echo json_encode($result);
    }
    
    public function B2bCustomerProfile()
    {
        $session = session();
        $sess_info = $session->auth;
        if(!$sess_info)
        {
            return redirect()->to(base_url()); 
        }else
        {
            
            $data = [];
            
            echo view('header_view',$data);
            echo view('b2bcustomerprofile_view',$data);
            echo view('footer_view',$data);
        }
    }
}