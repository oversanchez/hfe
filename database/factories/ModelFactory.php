<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Persona::class, function (Faker\Generator $faker) {

    return  [
        'nombres' => $faker->name,
        'apellido_paterno' => $faker->lastName,
        'apellido_materno' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'numero_documento' => $faker->unique()->numberBetween(11111111,99999999),
        'tipo_documento' => 'DN',
        'fecha_nacimiento' => $faker->date('d/m/Y','now'),
        'sexo' => $faker->randomElement(($array = array('M','F'))),
        'direccion' => $faker->address,
        'telf_movil' => $faker->phoneNumber
    ];
    /*
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
    */
});
