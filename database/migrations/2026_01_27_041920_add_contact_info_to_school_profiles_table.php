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
        Schema::table('school_profiles', function (Blueprint $table) {
            $table->text('address')->nullable()->after('history_image');
            $table->string('phone')->nullable()->after('address');
            $table->string('email')->nullable()->after('phone');
            $table->string('facebook')->nullable()->after('email');
            $table->string('instagram')->nullable()->after('facebook');
            $table->string('youtube')->nullable()->after('instagram');
            $table->text('maps_embed')->nullable()->after('youtube');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('school_profiles', function (Blueprint $table) {
             $table->dropColumn(['address', 'phone', 'email', 'facebook', 'instagram', 'youtube', 'maps_embed']);
        });
    }
};
