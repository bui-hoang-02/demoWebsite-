<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataHandleController extends Controller
{
    public function handlePathVariable($id){
        return "hello".$id;
    }

    public function handleQueryString(Request $req){
        $firstName = $req->get('firstName');
        $lastName = $req->get('lastName');
        $email = $req->get('email');
        return view('dataHandle', [
            'email' => $email,
            'firstName' => $firstName,
            'lastName' => $lastName
        ]);
    }

    public function returnForm(){
        return view('formData');
    }

    public function processForm(Request $req){
        $eventname = $req->get('eventName');
        $bandnames = $req->get('bandNames');
        $stardate = $req->get('startDate');
        $endData = $req->get('endDate');
        $protfolio = $req->get('portfolio');
        $ticketprice = $req->get('ticketPrice');
        $status = $req->get('status');
        return view('form-success', [
            'eventname'=> $eventname,
            'bandnames' => $bandnames,
            'stardate' => $stardate,
            'endData' => $endData,
            'protfolio' => $protfolio,
            'ticketprice' => $ticketprice,
            'status' => $status
        ]);
    }
}
