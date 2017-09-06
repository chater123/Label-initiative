<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateProjetNouvellesTable extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
Schema::create('projet_nouvelles', function (Blueprint $table) {
$table->increments('id');
$table->integer('projet_id')->unsigned();
$table->foreign('projet_id')->references('id')->on('projets')->onDelete('cascade');
$table->string('title');
$table->text('description');
$table->string('photo')->default('default_photo.png');
$table->timestamps();
});
}
/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::dropIfExists('projet_nouvelles');
}
}