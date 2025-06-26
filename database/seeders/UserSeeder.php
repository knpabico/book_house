<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Staff;
use App\Models\Student;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Staff user
        $staff = User::create([
            'name' => 'Staff User',
            'email' => 'staff@example.com',
            'password' => Hash::make('password'),
            'role' => 'staff',
        ]);

        Staff::create([
            'full_name' => $staff->name,
            'email' => $staff->email,
            'password' => $staff->password,
            'phone_number' => '09123456789',
            'gender' => 'Female',
            'age' => 27,
            'position' => 'Librarian',
            'status' => 'Active',
        ]);

        // Student user
        $student = User::create([
            'name' => 'Student User',
            'email' => 'student@example.com',
            'password' => Hash::make('password'),
            'role' => 'student',
        ]);

        Student::create([
            'full_name' => $student->name,
            'email' => $student->email,
            'password' => $student->password,
            'phone_number' => '09123456788',
            'gender' => 'Female',
            'age' => 22,
            'student_id' => '202011111',
            'borrow_status' => 'Not Borrowing',
        ]);
    }
}

