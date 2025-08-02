<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Document;

class DocumentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:ktp,kk,ktm,surat_pengantar,id_card_photo',
            'file' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $file = $request->file('file');
        $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('public/documents', $filename);

        $document = Document::create([
            'user_id'  => auth()->id(),
            'type'     => $request->type,
            'file_url' => 'storage/documents/' . $filename,
        ]);

        return response()->json([
            'message' => 'Dokumen berhasil diunggah.',
            'document' => $document
        ]);
    }
}
