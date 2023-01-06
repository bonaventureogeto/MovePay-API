<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    // Declare the API endpoint
    const API_ENDPOINT = 'https://api.example.com/payments';

    /**
     * Display a listing of the payment transactions.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Send a GET request to the API endpoint
        $response = $this->sendRequest('GET', self::API_ENDPOINT);

        // Check if the request was successful
        if ($response->successful()) {
            // Get the list of transactions from the response
            $transactions = $response->json();

            // Return a view with the list of transactions
            return view('payments.index', compact('transactions'));
        } else {
            // Return an error message
            return 'There was an error retrieving the payment transactions';
        }
    }

    /**
     * Send a request to the API.
     *
     * @param string $method
     * @param string $url
     * @param array $data
     * @return \Illuminate\Http\Response
     */
    protected function sendRequest($method, $url, $data = [])
    {
        // Initialize the cURL client
        $client = curl_init();

        // Set the request method and API endpoint
        curl_setopt($client, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($client, CURLOPT_URL, $url);

        // Set the request options
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($client, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
        ]);

        // Set the request data, if any
        if (!empty($data)) {
            curl_setopt($client, CURLOPT_POSTFIELDS, json_encode($data));
        }

        // Execute the request
        $response = curl_exec($client);

        // Get the status code and response data
        $statusCode = curl_getinfo($client, CURLINFO_HTTP_CODE);
        $responseData = json_decode($response, true);

        // Close the cURL client
        curl_close($client);

        // Return a response object
        return response()->json($responseData, $statusCode);
    }
}
