<?php
$connection = $app->eloquent->getConnection();
$connection->useDefaultSchemaGrammar();
$schema = new \Laraquent\Schema($connection);

/*
|--------------------------------------------------------------------------
| Database Schema Here
|--------------------------------------------------------------------------
*/
/*$schema->table('user', function(\Laraquent\Blueprint $table) {
    $table->primary('id');
    $table->string('email');
    $table->string('password');
    $table->timestamps();
});*/