<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all()->pluck('value', 'key');
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'company_logo' => 'nullable|image|max:2048',
            'company_favicon' => 'nullable|image|max:512',
            'company_email' => 'nullable|email',
        ]);

        $keys = [
            'company_name', 'company_tagline', 'company_email', 'company_address',
            'whatsapp_number', 'whatsapp_message',
            'instagram', 'linkedin', 'github', 'meta_description',
        ];

        foreach ($keys as $key) {
            if ($request->has($key)) {
                Setting::set($key, $request->input($key));
            }
        }

        // Handle File Uploads
        foreach (['company_logo', 'company_favicon'] as $fileKey) {
            if ($request->hasFile($fileKey)) {
                // Delete old file
                $oldPath = Setting::get($fileKey);
                if ($oldPath) {
                    Storage::disk('public')->delete($oldPath);
                }

                $path = $request->file($fileKey)->store('settings', 'public');
                Setting::set($fileKey, $path);
            }
        }

        return redirect()->route('admin.settings.index')->with('success', 'Pengaturan berhasil disimpan.');
    }
}
