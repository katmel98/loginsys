<?php

class UserTableSeeder extends Seeder
{

    public function run(){
        User::create(array(
            'username'  => 'katmel98',
            'email'     => 'katmel98@gmail.com',
            'name'=> 'Melvin Sequera',
            'remember_token' => '',
            'password' => Hash::make('admin') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
        ));
    }
}
