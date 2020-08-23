<?php

use App\Admin;
use App\Category;
use App\Employee;
use App\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->enum('role',['customer','admin'])->default('customer'); // 0: customer, 1: Super Admin, 2: sub_admin
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();


        });

       $user = User::create([
            'role' => 'admin',
            'email' => 'dbaba4u@gmail.com',
            'username' => 'dbaba',
            'password' => Hash::make('funken'),
        ]);

        $category = Category::create([
            'name' => 'IT Technician',
        ]);

        $employee = Employee::create([
            'category_id' => $category->id,
            'first_name' => 'Dauda',
            'surname' => 'Baba',
            'address' => '36 Ngorgi Street, Hausari Ward.',
            'lga_id' => '1',
            'state_id' => '8'
        ]);

       Admin::create([
            'user_id' => $user->id,
            'employee_id' => $employee->id,
            'admin' =>'1',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
