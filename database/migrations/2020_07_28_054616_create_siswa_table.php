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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('name',25);
            $table->string('kelas',25);
            $table->string('jurusan',25);
            $table->string('jenis_jelamin',25);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
