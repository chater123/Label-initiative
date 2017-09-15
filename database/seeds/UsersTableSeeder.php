<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'name' => 'Admin agoujil',
                'email' => 'agoujilsaad@gmail.com',
                'password' => bcrypt('123456'),
                'address' => NULL,
                'categorie' => NULL,
                'fonction' => NULL,
                'region' => NULL,
                'tel' => NULL,
                'remember_token' => 'RsmOU50BGhEurVdlWQKk2tIIPgDE9aJdlHyZqnp4fbo84Zh6At99wA8JGD1l',
                'created_at' => '2017-08-25 20:14:30',
                'updated_at' => '2017-08-25 20:18:28',
            ),
            1 => 
            array (
                'name' => 'hama',
                'email' => 'sad',
                'password' => bcrypt('123456'),
                'address' => 'sad',
                'categorie' => 'type2',
                'fonction' => 'sadd',
                'region' => 'reg1',
                'tel' => 'das',
                'remember_token' => NULL,
                'created_at' => '2017-08-25 20:21:25',
                'updated_at' => '2017-08-25 20:21:25',
            ),
            2 => 
            array (
                'name' => 'sad',
                'email' => 'dkjankj',
                'password' => bcrypt('123456'),
                'address' => 'njfkankj',
                'categorie' => 'type1',
                'fonction' => 'sss',
                'region' => 'reg1',
                'tel' => 'fjkankf',
                'remember_token' => 'Qs0RMhhbj0a9UImuC662hzCeqoHqedcBVtY2QZrJ0lxdmu7xsqS399In2TvM',
                'created_at' => '2017-08-26 10:43:23',
                'updated_at' => '2017-08-26 10:43:23',
            ),
            3 => 
            array (
                'name' => 'youssef chater',
                'email' => 'youssef@gmail.com',
                'password' => bcrypt('123456'),
                'address' => 'toi',
                'categorie' => 'type2',
                'fonction' => 'sad',
                'region' => 'reg1',
                'tel' => 'd131098',
                'remember_token' => NULL,
                'created_at' => '2017-08-26 21:49:17',
                'updated_at' => '2017-08-26 21:49:17',
            ),
            4 => 
            array (
                'name' => 'sad',
                'email' => 'faq',
                'password' => bcrypt('123456'),
                'address' => 'asffq',
                'categorie' => 'type1',
                'fonction' => 'fas',
                'region' => 'reg1',
                'tel' => 'fas',
                'remember_token' => 'fmMl7dChCXh2gRPLNZ9HeOGC69vsZqt1qE67lzeMknoyONAhIxxQuyDSNoyX',
                'created_at' => '2017-08-27 12:42:12',
                'updated_at' => '2017-08-27 12:42:12',
            ),
            5 => 
            array (
                'name' => 'sad',
                'email' => 'test@domain.tld',
                'password' => bcrypt('123456'),
                'address' => 'Aenea',
                'categorie' => 'type2',
                'fonction' => 'Nunc nec',
                'region' => 'reg1',
                'tel' => '26.8.2019',
                'remember_token' => 'LMLQusI7Y31G5sRKq5jwT76PX4oA0YB3lVzixhejXeaIuSH1aFq6BuZ9cT4A',
                'created_at' => '2017-08-27 17:06:13',
                'updated_at' => '2017-08-27 17:06:13',
            ),
            6 => 
            array (
                'name' => 'dood',
                'email' => 'test@domain.tld2',
                'password' => bcrypt('123456'),
                'address' => 'jnf',
                'categorie' => 'type1',
                'fonction' => 'jo',
                'region' => 'reg2',
                'tel' => 'fkjnjk',
                'remember_token' => 'Su4n0etHSmqtBKYxxMDNjc7APPMc1ObdAtU9XcTa04RsAYGSUFPNcsc0wN3k',
                'created_at' => '2017-08-27 17:09:07',
                'updated_at' => '2017-08-27 17:09:07',
            ),
            7 => 
            array (
                'name' => 'koka',
                'email' => 'test@domain.tld3',
                'password' => bcrypt('123456'),
                'address' => 'adf',
                'categorie' => 'type1',
                'fonction' => 'fun',
                'region' => 'reg2',
                'tel' => 'telk',
                'remember_token' => NULL,
                'created_at' => '2017-08-27 17:12:14',
                'updated_at' => '2017-08-27 17:12:14',
            ),
            8 => 
            array (
                'name' => 'sad',
                'email' => 'test@domain.tld12',
                'password' => bcrypt('123456'),
                'address' => 'asd',
                'categorie' => 'type2',
                'fonction' => 'sjd',
                'region' => 'reg2',
                'tel' => '6789',
                'remember_token' => 'iWu9AHksDHg8KZIeZ3rGLM90yfeDBWM7UQSuXQZSTIDvhXbAGQRA2rUKzxbh',
                'created_at' => '2017-08-29 10:32:56',
                'updated_at' => '2017-08-29 10:32:56',
            ),
        ));
        
        
    }
}