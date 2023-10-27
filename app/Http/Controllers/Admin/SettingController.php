<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\SettingService;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    protected $settingService;
    public function __construct(SettingService $settingService)
    {
        $this->settingService = $settingService;
    }
    public function index() 
    {
        $settings = $this->settingService->getAll();
        $timezones = $this->settingService->getTimezones();
        return view('admin.settings.index', [
            'settings' => $settings,
            'timezones' => $timezones,
        ]);
    }
    public function update(Request $request) 
    {
        $settings = $this->settingService->update($request->all());
        if ($settings) {
            return back()->with('success', 'Cập nhật thành công!!!');
        }
        return back()->with('error', 'Cập nhật thất bại');
    }
}
