<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatsApp extends Model
{
    use HasFactory;
    # Whatsapp variables
    private $usertoken;
    private $numberid;

    # Setwebhook Method
    public function setwebhook($data) {
        echo "<h3>Your request reached Setwebhook Model</h3>";
    }

    # Incoming Method
    public function incomingmessage($data) {
        echo "<h3>Your request reached Incomingmessage Model</h3>";
    }

    # Send Message method
    public function sendmessage($data) {
        echo "<h3>Your request reached Sendmessage Model</h3>";
    }

}
