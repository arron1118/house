<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->lineString('line_string');
            $table->string('category')->index()->default('')->comment('分类');
            $table->json('series')->comment('序列化');
            $table->string('name', 255)->default('')->unique()->comment('名称');
            $table->mediumText('path')->comment('路径');
            $table->decimal('size', 10, 3)->default('0.000')->comment('大小');
            $table->tinyInteger('status')->default(0)->comment('状态');
            $table->double('cost', 10, 3)->default('0.000')->comment('花费');
            $table->integer('created_at')->default(0)->comment('创建时间');
            $table->integer('updated_at')->default(0)->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attachments');
    }
};
