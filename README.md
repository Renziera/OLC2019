# OLC2019

Untuk register admin manual
php artisan tinker
$user = new App\User();
$user->password = Hash::make('admin');
$user->email = 'admin';
$user->name = 'admin';
$user->save();