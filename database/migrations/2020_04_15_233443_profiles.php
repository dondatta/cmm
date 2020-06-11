<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Profiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('gender');
            $table->string('skincolor');            
            $table->string('haircolor');
            $table->string('hairlength');
            $table->string('eyecolor');            
            $table->string('tattoos');
            $table->string('piercing');
            $table->string('cup');
            $table->bigInteger('bust');
            $table->bigInteger('hips');
            $table->bigInteger('dress');
            $table->bigInteger('waist');
            $table->bigInteger('shoe');
            $table->bigInteger('height');
            $table->bigInteger('weight');             
            $table->string('ethnicity');
            $table->string('compensation');
            $table->string('experience');            
            $table->string('acting');
            $table->string('art');
            $table->string('bodypaint');            
            $table->string('cosplay');
            $table->string('dance');
            $table->string('editorial');            
            $table->string('erotic');
            $table->string('fashion');
            $table->string('fetish');            
            $table->string('fitmodeling');
            $table->string('fitness');
            $table->string('glamour');            
            $table->string('hairmakeup');
            $table->string('lifestyle');
            $table->string('lingerie');            
            $table->string('parts');
            $table->string('performance');
            $table->string('pinup');            
            $table->string('pregnancy');
            $table->string('promotional');
            $table->string('runway');            
            $table->string('spokesperson');
            $table->string('sports');
            $table->string('stunt');            
            $table->string('swimwear');
            $table->string('underwater');
            $table->timestamps();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
