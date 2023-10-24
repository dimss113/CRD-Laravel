<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('barangs', function (Blueprint $table) {

            $table->foreignId("type_id")->after('id')->nullable()->constrained("types")->onDelete("set null");
            $table->foreignId("condition_id")->nullable()->constrained("conditions")->onDelete("set null");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('barangs', function (Blueprint $table) {
            $table->dropForeign(["type_id"]);
            $table->dropForeign(["condition_id"]);
        });
    }
};
