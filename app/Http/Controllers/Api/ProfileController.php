<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        return response()->json([
            'user' => $request->user()
        ]);
    }

    public function update(Request $request)
    {
        $user = $request->user();

        $request->validate([
            'name'         => 'nullable|string|max:255',
            'avatar_url'   => 'nullable|url',
            'phone_number' => 'nullable|string|max:20',
            'whatsapp'     => 'nullable|string|max:20',
            'gender'       => 'nullable|in:male,female,other',
            'birth_date'   => 'nullable|date',
            'university'   => 'nullable|string|max:255',
            'faculty'      => 'nullable|string|max:255',
            'major'        => 'nullable|string|max:255',
            'hobby'        => 'nullable|string|max:255',
        ]);

        $data = $request->only([
            'name', 'avatar_url', 'phone_number', 'whatsapp',
            'gender', 'birth_date', 'university', 'faculty', 'major', 'hobby',
        ]);


        $user->update(array_filter($data));

        return response()->json([
            'message' => 'Profil berhasil diperbarui',
            'user' => $user
        ]);
    }

    public function destroy(Request $request)
    {
        $user = $request->user();
        $user->delete();

        return response()->json([
            'message' => 'User telah dihapus.'
        ]);
    }
}
