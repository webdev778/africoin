<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

;

class DownloadController extends Controller
{
    //
    public function download($language){
        $file= public_path(). "/download/Whitepaper1289/". $language. ".pdf";

        $filename= $language. ".pdf";

        $headers = array(
            'Content-Type: application/pdf',
        );

        return Response()->download($file, $filename, $headers);
    }
}
