<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Menampilkan semua role.
     */
    public function index()
    {
        $roles = Roles::all();
        return response()->json($roles);
    }

    /**
     * Menyimpan role baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles,name|max:50',
            'description' => 'nullable|string',
        ]);

        $role = Roles::create($request->all());
        return response()->json($role, 201);
    }

    /**
     * Menampilkan role tertentu.
     */
    public function show($id)
    {
        $role = Roles::findOrFail($id);
        return response()->json($role);
    }

    /**
     * Memperbarui role.
     */
    public function update(Request $request, $id)
    {
        $role = Roles::findOrFail($id);
        $role->update($request->all());
        return response()->json($role);
    }

    /**
     * Menghapus role.
     */
    public function destroy($id)
    {
        $role = Roles::findOrFail($id);
        $role->delete();
        return response()->json(['message' => 'Role deleted successfully']);
    }
}
