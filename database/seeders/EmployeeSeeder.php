<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        // Division 1
        Employee::create(['name' => 'John Doe', 'position' => 'Developer', 'division' => 'Division 1']);
        Employee::create(['name' => 'Jane Doe', 'position' => 'Designer', 'division' => 'Division 1']);

        // Division 2
        Employee::create(['name' => 'Bob Smith', 'position' => 'Manager', 'division' => 'Division 2']);
        Employee::create(['name' => 'Alice Johnson', 'position' => 'Engineer', 'division' => 'Division 2']);

        // Division 3
        Employee::create(['name' => 'Chris Brown', 'position' => 'Analyst', 'division' => 'Division 3']);
        Employee::create(['name' => 'Eva Davis', 'position' => 'Coordinator', 'division' => 'Division 3']);
    }
}
