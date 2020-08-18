 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('name',25);
            $table->string('class',25);
            $table->string('major',25);
            $table->string('gender',25);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
