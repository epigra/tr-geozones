<?php echo '<?php' ?>

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityDistricts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geozone_city_districts', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('geozone_cities')->onDelete('cascade');
            $table->string('ilce');
            $table->string('semt');
            $table->string('mahalle');
            $table->string('posta_kodu',5);

            $table->unique(['city_id', 'ilce', 'semt', 'mahalle', 'posta_kodu'],'geozone_key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('geozone_city_districts');
    }
}
