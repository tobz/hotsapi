<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FingerprintsV2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('replays', function (Blueprint $table) {
            $table->string('fingerprints_old'); // not settings unique because collisions are possible with new fingerprint
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('replays', function (Blueprint $table) {
            //
        });
    }
}
