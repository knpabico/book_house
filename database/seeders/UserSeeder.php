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
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Staff user
        $staff = User::create([
            'first_name' => 'Staff',
            'last_name' => 'User',
            'email' => 'staff@example.com',
            'password' => Hash::make('password'),
            'role' => 'staff',
        ]);

        Staff::create([
            'first_name' => $staff->first_name,
            'last_name' => $staff->last_name,
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
            'first_name' => 'Student',
            'last_name' => 'User',
            'email' => 'student@example.com',
            'password' => Hash::make('password'),
            'role' => 'student',
        ]);

        Student::create([
            'first_name' => $student->first_name,
            'last_name' => $student->last_name,
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

