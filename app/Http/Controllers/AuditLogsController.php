<?php

namespace App\Http\Controllers;

use App\Models\AuditLogs;
use Illuminate\Http\Request;

class AuditLogsController extends Controller
{
    /**
     * Menampilkan semua audit logs.
     */
    public function index()
    {
        $logs = AuditLogs::with('admin')->get(); // Mengambil semua log beserta admin yang melakukan aksi
        return response()->json($logs);
    }

    /**
     * Menyimpan audit log baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'admin_id' => 'required|exists:admins,id',
            'action' => 'required|string|max:100',
            'description' => 'nullable|string',
            'ip_address' => 'nullable|ip',
        ]);

        $log = AuditLogs::create($request->all());
        return response()->json($log, 201);
    }

    /**
     * Menampilkan audit log tertentu.
     */
    public function show($id)
    {
        $log = AuditLogs::with('admin')->findOrFail($id);
        return response()->json($log);
    }

    /**
     * Menghapus audit log.
     */
    public function destroy($id)
    {
        $log = AuditLogs::findOrFail($id);
        $log->delete();
        return response()->json(['message' => 'Audit log deleted successfully']);
    }
}
