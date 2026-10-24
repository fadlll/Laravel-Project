<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BukuResource;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        return BukuResource::collection(Buku::all());
    }

    public function show($id)
    {
        $buku = Buku::find($id);

        if (!$buku) {
            return response()->json([
                'message' => 'Data buku tidak ditemukan'
            ], 404);
        }

        return new BukuResource($buku);
    }
}
