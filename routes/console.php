<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

Artisan::command('afu:admin-create {email} {--name=AFU Administrator} {--from-env}', function () {
    $email = strtolower(trim($this->argument('email')));
    if (User::where('email', $email)->exists()) { $this->error('Account already exists. Change access through Users & Access.'); return 1; }
    $password = $this->option('from-env') ? getenv('AFU_ADMIN_PASSWORD') : $this->secret('Administrator password');
    if (!$this->option('from-env') && $password !== $this->secret('Confirm password')) { $this->error('Passwords do not match.'); return 1; }
    $validator = Validator::make(['email'=>$email,'name'=>$this->option('name'),'password'=>$password], ['email'=>'required|email|max:255','name'=>'required|string|max:100','password'=>'required|string|min:8']);
    if ($validator->fails()) { $this->error($validator->errors()->first()); return 1; }
    $user = new User(['name'=>$this->option('name'), 'email'=>$email, 'password'=>$password]);
    $user->role = 'admin';
    $user->is_active = true;
    $user->save();
    $this->info('Administrator created. Sign in at /admin/login.');
})->purpose('Create an administrator securely from the local console');

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
