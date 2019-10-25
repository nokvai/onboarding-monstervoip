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
            $table->string('company_name')->nullable();
            $table->string('extension')->nullable();
            $table->string('email_address')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('voicemail_pin')->nullable();
            $table->string('portal_username')->nullable();
            $table->string('portal_password')->nullable();
            $table->string('phone_model')->nullable();
            $table->string('mac_address')->nullable();
            $table->string('number_assigned')->nullable();
            $table->string('department')->nullable();
            $table->string('user_scope')->nullable(); //Basic or Manager
            $table->string('vm_2_email')->nullable();
            $table->string('missed_call_email')->nullable();
            $table->string('call_recording')->nullable();

            $table->string('time_zone')->nullable();
            $table->string('business_hours')->nullable();
            $table->string('call_queue')->nullable();
            $table->string('has_music_on_hold')->nullable();
            $table->string('music_on_hold')->nullable();
            $table->string('fax')->nullable();
            $table->string('auto_attendant')->nullable();
            $table->string('script')->nullable();

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
