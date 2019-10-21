<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnboardingUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onboarding_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('username');
            $table->string('extension_no')->nullable();
            $table->string('email')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('voicemail_pin')->nullable();
            $table->string('portal_username')->nullable();
            $table->string('portal_password')->nullable();
            $table->string('phone_model')->nullable();
            $table->string('mac_address')->nullable();
            $table->string('number_assigned')->nullable();
            $table->string('department')->nullable();
            $table->string('portal_access')->nullable();

            $table->string('vm_2_email')->nullable(); //boolean
            $table->string('missed_call')->nullable(); //boolean
            $table->string('call_recording')->nullable(); //boolean
            $table->string('has_music_onhold')->nullable(); //boolean

            $table->string('music')->nullable();
            $table->string('client_business_after_hours')->nullable();
            $table->string('time_zone')->nullable();


            $table->string('need_fax')->nullable(); //boolean

            $table->string('fax_used')->nullable();
            $table->string('call_queue')->nullable();

            $table->string('auto_attendant')->nullable(); //boolean

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
        Schema::dropIfExists('onboarding_users');
    }
}
