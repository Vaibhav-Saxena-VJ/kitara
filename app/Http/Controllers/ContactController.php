<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ContactController extends Controller
{
    public function handleContactForm(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'string',
        ]);

        try {
            $this->sendEmail($data); // your custom email logic

            return response()->json([
                'status' => 'success',
                'message' => 'Your message has been sent successfully!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred while sending your message: ' . $e->getMessage()
            ], 500);
        }
    }

    private function sendEmail($data)
    {
        // Specify the API key
        $apiKey = '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'; 
        
        // Use Guzzle to send the email to both the user and admin
        $client = new Client();

        // Send template email to the user (confirmation email)
        $client->post('https://api.brevo.com/v3/smtp/email', [
            'headers' => [
                'Content-Type' => 'application/json',
                'api-key' => $apiKey,
            ],
            'json' => [
                'sender' => ['email' => 'hitesh.patel@kitaracloud.com', 'name' => 'JFS Technology'],
                'to' => [['email' => $data['email'], 'name' => $data['name']]],
                'templateId' => 1, // Replace with your user email template ID
                'params' => [
                    'name' => $data['name'],
                    'message' => $data['message'],
                ],
            ],
        ]);

        // Send email to the admin with user-entered details
        $response = $client->post('https://api.brevo.com/v3/smtp/email', [
            'headers' => [
                'Content-Type' => 'application/json',
                'api-key' => $apiKey,
            ],
            'json' => [
                'sender' => ['email' => 'hitesh.patel@kitaracloud.com', 'name' => 'Kitaracloud Techlabs'], // Admin's sender email
                'to' => [['email' => 'info@kitaracloud.com', 'name' => 'Sales Head']],
                'subject' => "Website Contact Form Submission",
                'htmlContent' => "
                    <h2>New Contact Form Submission</h2>
                    <p><strong>Name:</strong> {$data['name']}</p>
                    <p><strong>Email:</strong> {$data['email']}</p>
                    <p><strong>Message:</strong> {$data['message']}</p>
                ",
            ],
        ]);
        
        $body = $response->getBody()->getContents();
        \Log::info('Admin Email Response: ' . $body);
    }
}
