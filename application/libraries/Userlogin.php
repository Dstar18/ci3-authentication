<?php

Class Userlogin{
    protected $ci;

    function __construct(){
        $this->ci =& get_instance();
    }

    function oauth2_google(){
        $client_id       = $this->ci->config->item('client_id');
        $client_secret   = $this->ci->config->item('client_secret');
        $redirect_uri    = $this->ci->config->item('redirect_uri');

        $client = new Google_Client();
        $client->setClientId($client_id);
        $client->setClientSecret($client_secret);
        $client->setRedirectUri($redirect_uri);

        $client->addScope('email');
        $client->addScope('profile');

        $result['urlOauth2'] = $client->createAuthUrl();

        if(isset($_GET['code'])){
            $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

            if(isset($token['error'])){
                $result['error'] = $token['error'];
            }else{
                $client->setAccessToken($token['access_token']);
    
                $service = new Google_Service_Oauth2($client);
                $result['profile'] = $service->userinfo->get();
            }
        }

        return $result;
    }
}
