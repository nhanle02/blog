<?php

namespace App\Services;
use App\Models\Setting;
use DateTimeZone;
use File;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Config;

class SettingService 
{
    public function getAll() 
    {   
        $settings = Setting::get();
        $array = [];
        foreach($settings as $setting) {
            $array[$setting->key] = $setting->value;
        }
        $settings = $array;
        return $settings;
    }
    public function update($request)
    {
        $settings = Setting::get();
        foreach ($settings as $setting) {
            $key = $setting->key;
            $value = $request[$key] ?? null;

            if (!is_null($value)) {
                if ($value !== $setting->value) {
                    if ($key == 'logo' || $key == 'favicon') {
                        if (!empty($setting->value)) {
                            $this->deleteFile($setting->value);
                        }
                        $setting->value = $this->fileUpload($key);
                    } else {
                        $setting->value = $value;
                    }
                }
            }
            $setting->save();
        }
        return $settings;

    }
    public function fileUpload($image)
    {
        if (request()->hasFile($image)) {
            try {
                $name = request()->file($image)->getClientOriginalName();
                $name = time() . '-' . $name;
                $pathFull = 'uploads/' . $image;
                request()->file($image)->storeAs(
                    'public/' . $pathFull, $name
                );
                return '/storage/' . $pathFull . '/' . $name; 
            } catch (\Exception $error) { 
                return false;
            }
        }
    }
    
    public function deleteFile($oldAvatar) 
    {
        $oldAvatar = str_replace("/storage", "app/public", $oldAvatar);
        File::delete(storage_path($oldAvatar));
    }

    public function getTimezones() 
    {
        $timezoneList = [];
        $timezones = DateTimeZone::listIdentifiers();
        foreach ($timezones as $timezone) {
            $carbonDate = Carbon::now($timezone);
            $offset = $carbonDate->offset / 3600;
            $offsetMinutes = abs($carbonDate->offset % 3600) / 60;
            $gmt = ($offset < 0) ? "UTC/GMT-$offset:$offsetMinutes" : "UTC/GMT+$offset:$offsetMinutes";
            $timezoneList[] = [
                'timezone' => $timezone,
                'offset' => "$offset:$offsetMinutes",
                'gmt' => $gmt,
            ];
        }
        return $timezoneList;
    }
}