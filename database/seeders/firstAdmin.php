<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class firstAdmin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      User::create($this->adminData());
    }
    private function adminData(){
        return [
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>Hash::make(value:"Admin2022"),
            'email_verified_at'=>Carbon::now()
        ];
    }
}
