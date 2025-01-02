<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use App\Models\Role;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    /**
     * Menampilkan semua admin beserta relasi role.
     */
    public function index()
    {
        $admins = Admins::with('role')->get(); // Mengambil semua admin beserta relasi role
        return response()->json($admins);
    }

    /**
     * Menyimpan admin baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:admins,username|max:50',
            'email' => 'required|unique:admins,email|max:100',
            'password' => 'required|min:8',
            'role_id' => 'required|exists:roles,id',
        ]);

        // Menggunakan Eloquent untuk menyimpan data
        $admin = Admins::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password, // Otomatis di-hash oleh model
            'role_id' => $request->role_id,
        ]);

        return response()->json($admin, 201);
    }

    /**
     * Menampilkan admin tertentu beserta relasi role.
     */
    public function show($id)
    {
        $admin = Admins::with('role')->findOrFail($id); // Menampilkan admin beserta role
        return response()->json($admin);
    }

    /**
     * Memperbarui admin.
     */
    public function update(Request $request, $id)
    {
        $admin = Admins::findOrFail($id);

        $validatedData = $request->validate([
            'username' => 'sometimes|unique:admins,username,' . $id . '|max:50',
            'email' => 'sometimes|unique:admins,email,' . $id . '|max:100',
            'password' => 'sometimes|min:8',
            'role_id' => 'sometimes|exists:roles,id',
        ]);

        // Jika password disediakan, hash sebelum diperbarui
        if ($request->has('password')) {
            $validatedData['password'] = $request->password; // Otomatis di-hash oleh model
        }

        $admin->update($validatedData);
        return response()->json($admin);
    }

    /**
     * Menghapus admin.
     */
    public function destroy($id)
    {
        $admin = Admins::findOrFail($id);
        $admin->delete();
        return response()->json(['message' => 'Admin deleted successfully']);
    }
}
