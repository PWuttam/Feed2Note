<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // No-Op: feeds.link の UNIQUE は既に存在
    }

    public function down(): void
    {
        Schema::table('feeds', function (Blueprint $table) {
            // ✅ デフォルト名で作ったUNIQUEは、カラム配列で外す
            $table->dropUnique(['link']);
        });
    }
};