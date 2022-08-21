<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\WhatsApp;
use Illuminate\Http\Request;

class IncomingController extends Controller
{
    /**
     * setwebhook | GET
     *
     * @return \Illuminate\Http\Response
     */
    public function setwebhook(Request $request)
    {
        # Get all request data
        $data = (object) $request->all();
        # Send Request to the Model | After passing basic validation
        $whatsapp = new WhatsApp();
        $whatsapp->setwebhook($data);
        # Response | Echo back the data that was passed
        return response()->json($data);
    }

    /**
     * incomingmessage | POST
     *
     * @return \Illuminate\Http\Response
     */
    public function incomingmessage(Request $request)
    {
        # Get all request data
        $data = (object) $request->all();
        # Send Request to the Model | After passing basic validation
        $whatsapp = new WhatsApp();
        $whatsapp->incomingmessage($data);
        # Response | Echo back the data that was passed
        return response()->json($data);
    }

    /**
     * sendmessage | POST
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendmessage(Request $request)
    {
        # Get all request data
        $data = (object) $request->all();
        # Send Request to the Model | After passing basic validation
        $whatsapp = new WhatsApp();
        $whatsapp->sendmessage($data);
        # Response | Echo back the data that was passed
        return response()->json($data);
    }
}
