<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    /*
    Table: houses
     - id AI PK UN NN BIGINT
     - reference string()
     - address string()
     - city sting()
     - post_code string()
     - state string()
     - square_meters smallinteger()
     - bathrooms tinyinteger()
     - rooms tinyinteger()
     - type string()
     - description text()
     - price flat()
     - is_available boolean()  | tinyinteger()
     - create_at
     - updated_at
     */


    public function up(): void
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('reference', 12)->nullable();
            $table->string('address', 100);
            $table->string('city', 50)->nullable();
            $table->string('state', 50)->nullable();
            $table->string('post_code', 10)->nullable();
            $table->smallInteger('square_meters')->nullable()->unsigned();
            $table->tinyInteger('bathrooms')->nullable()->unsigned();
            $table->tinyInteger('rooms')->nullable()->unsigned();
            $table->string('type', 50)->nullable();
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->boolean('is_available')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
