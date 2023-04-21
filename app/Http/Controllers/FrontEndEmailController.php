<?php

namespace App\Http\Controllers;

use Mail;
use Config;
use App\Models\Gallery;
use Illuminate\Http\Request;

class FrontEndEmailController extends Controller
{
    /**
     * Send a Contact Email.
     *
     * @return View $view
     */
    public function sendContactEmail(Request $request)
    {

           $data = $request->all();

           //data to use in email
           $email_data = array('sender_message'=>$data['message']);
        
           try{
   
               //send the user a password once the account has been set successfully
               Mail::send('contact_email_template', $email_data, function($message) use ($data) {
                   $message->to('info@kilificentralsda.co.ke', 'Kilifi SDA Central Church')->subject
                   ($data['subject']);
                   $message->from($data['email'],$data['name']);
                   });
   
               session()->flash('success','Email sent successfully');
               return redirect()->back();
   
           }
           catch(Exception $e)
           {
   
               session()->flash('success','There was an error while sending the email');
               return redirect()->back();
   
           }

        return redirect()->back();
    
    }


    /**
     * Send a Transfer Letter to Clerk Email.
     *
     * @return View $view
     */
    public function sendClerkEmail(Request $request)
    {

           $data = $request->all();

           //data to use in email
           $email_data = array('sender_message'=>$data['message']);
        
           try{
   
               //send the user a password once the account has been set successfully
               Mail::send('clerk_email_template', $email_data, function($message) use ($data) {
                   $message->to('clerk@kilificentralsda.co.ke', 'Kilifi SDA Central Church Clerk')->subject
                   ($data['subject']);
                   $message->from($data['email'],$data['name']);
                   });
   
               session()->flash('success','Email sent successfully');
               return redirect()->back();
   
           }
           catch(Exception $e)
           {
   
               session()->flash('success','There was an error while sending the email');
               return redirect()->back();
   
           }

        return redirect()->back();
    
    }
}