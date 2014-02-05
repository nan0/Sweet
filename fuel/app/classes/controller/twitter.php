<?php

class Controller_Twitter extends Controller_Rest
{

    public function get_tweets()
    {
        try
        {
            /* TODO GET TWEETS WITH API */

            $response = array(
                'error'		=> false,
                'message'   => 'Succès de la connexion',
            );
            $http_code = 200;
        }
        catch (\Fuel\Core\FuelException $e)
        {
            $response = array(
                'error'		=> true,
                'message'   => 'Echec de la connexion',
            );
            $http_code = 400;
        }

        echo json_encode($response, $http_code);
    }
}