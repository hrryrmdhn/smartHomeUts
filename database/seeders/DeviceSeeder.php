<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Device;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $devices = [
            'pintu',
            'lampu',
            'termostat',
            'garasi',
            'jetpam',
            'kulkas'
        ];

        foreach($devices as $d){
            Device::create([
                'label' => $d,
                'state' => 0
            ]);
        }
    }
}
