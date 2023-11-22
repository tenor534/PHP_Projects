<?php

/**
 * ApiWizardWorld : En utilisant l'API https://wizard-world-api.herokuapp.com/swagger/index.html
 * Recréer rapidement (avec ou sans CSS) la page suivante avec les données correspondantes dans l'URL
 * @Author : Solofo RAKOTONDRABE
 * @Tel.: 07 44 27 70 74
 * @Email : sh.rakotondrabe@it-students.fr
 */
class ApiWizardWorld
{
    /**
     * @return void
     */
    public function getApiFromUrl (

    ) {
        // Initiate curl session in a variable (resource)
        $curl_handle = curl_init();

        $url = "https://wizard-world-api.herokuapp.com/Wizards";

        // Set the curl URL option
        curl_setopt($curl_handle, CURLOPT_URL, $url);

        // This option will return data as a string instead of direct output
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);

        // Execute curl & store data in a variable
        $curl_data = curl_exec($curl_handle);

        curl_close($curl_handle);

        // Decode JSON into PHP array
        $response_data = json_decode($curl_data);

        // All user data exists in 'data' object
        $api_data = $response_data;

        // Extract only first 5 user data (or 5 array elements)
        $api_data = array_slice($api_data, 0, 7);

        // Traverse array and print employee data
        foreach ($api_data as $api) {

            yield [
                'name'      => $api->elixirs[0]->name,
                'id'        => $api->id,
                'firstName' => $api->firstName,
                'lastName'  => $api->lastName,
            ];
       }
       //return;
    }
}