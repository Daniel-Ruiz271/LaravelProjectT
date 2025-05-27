<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('game_matches', function (Blueprint $table) {
            $table->foreignId('winner_id')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('game_matches', function (Blueprint $table) {
            $table->foreignId('winner_id')->nullable(false)->change();
        });
    }
};
