<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;
use App\Models\Login;
use App\Models\Detail;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');
        // ADMIN
        $token = Str::random(16);
        $role = "admin";
        $hashPassword = Hash::make('jancok', [
            'rounds' => 12,
        ]);
        $hashToken = Hash::make($token, [
            'rounds' => 12,
        ]);
        Login::create([
            'login_nama' => 'FathurWalkers',
            'login_username' => 'fathurwalkers',
            'login_password' => $hashPassword,
            'login_email' => 'fathurwalkers44@gmail.com',
            'login_telepon' => '085342072185',
            'login_token' => $hashToken,
            'login_level' => $role,
            'login_status' => "verified",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $token = Str::random(16);
        $role = "admin";
        $hashPassword = Hash::make('fia12345', [
            'rounds' => 12,
        ]);
        $hashToken = Hash::make($token, [
            'rounds' => 12,
        ]);
        Login::create([
            'login_nama' => 'Fia',
            'login_username' => 'fia',
            'login_password' => $hashPassword,
            'login_email' => 'fia@gmail.com',
            'login_telepon' => '085342072185',
            'login_token' => $hashToken,
            'login_level' => $role,
            'login_status' => "verified",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // ---------------------------------------------------------------------------

        // Pelaksana
        $token = Str::random(16);
        $role = "pelaksana";
        $hashPassword = Hash::make('pelaksana', [
            'rounds' => 12,
        ]);
        $hashToken = Hash::make($token, [
            'rounds' => 12,
        ]);
        Login::create([
            'login_nama' => 'Pelaksana 1',
            'login_username' => 'pelaksana',
            'login_password' => $hashPassword,
            'login_email' => 'Pelaksana@gmail.com',
            'login_telepon' => '085342072185',
            'login_token' => $hashToken,
            'login_level' => $role,
            'login_status' => "verified",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // ---------------------------------------------------------------------------

        // User Pertama
        // $token = Str::random(16);
        // $role = "user";
        // $hashPassword = Hash::make('user1234', [
        //     'rounds' => 12,
        // ]);
        // $hashToken = Hash::make($token, [
        //     'rounds' => 12,
        // ]);
        // Login::create([
        //     'login_nama' => 'User 1',
        //     'login_username' => 'user1',
        //     'login_password' => $hashPassword,
        //     'login_email' => 'user1@gmail.com',
        //     'login_telepon' => '085342072185',
        //     'login_token' => $hashToken,
        //     'login_level' => $role,
        //     'login_status' => "verified",
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        // ---------------------------------------------------------------------------

        // User Kedua
        // $token = Str::random(16);
        // $role = "user";
        // $hashPassword = Hash::make('user1234', [
        //     'rounds' => 12,
        // ]);
        // $hashToken = Hash::make($token, [
        //     'rounds' => 12,
        // ]);
        // Login::create([
        //     'login_nama' => 'User 2',
        //     'login_username' => 'user2',
        //     'login_password' => $hashPassword,
        //     'login_email' => 'user2@gmail.com',
        //     'login_telepon' => '085342072185',
        //     'login_token' => $hashToken,
        //     'login_level' => $role,
        //     'login_status' => "verified",
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
    }
}
