<?php

class Book_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
    //TODO RESULT boş geliyor düzeltilicek
    public function getAll()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.collectapi.com/book/newBook",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "authorization: apikey 3yruYYp5I5vqtuQZ9n3r1L:7KhPiws5i3FQBDRLcVd2fN",
                "content-type: application/json"
            ),
            CURLOPT_SSL_VERIFYPEER => false,
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        $books = json_decode($response);
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }
}
