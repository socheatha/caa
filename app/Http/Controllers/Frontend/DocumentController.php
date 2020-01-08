<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Document;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DocumentController extends Controller
{
    public function show(Document $document)
    {
		$filename = $document->soft;
		$path = public_path().'/'. $filename;
		return response()->file($path);
    }
}
