<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRcodeGenerateController extends Controller
{
    public function qrcode()
    {
        $qrCodes = [];

        $qrCodes['withImage'] = QrCode::size(400)->format('png')->generate('https://www.github.com/projecthanif');

        return view('qrcode', $qrCodes);
    }
}
