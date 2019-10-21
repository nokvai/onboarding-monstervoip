<?php

namespace App\Http\Controllers;

use App\OnboardingUser;
use ErrorException;
use Illuminate\Http\Request;
use Session;

class OnboardingUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company_name = Session::get('onboarding_company');
        //dd($company_name);

        $onboadinguser = OnboardingUser::where('company_name', $company_name)->orderBy('created_at', 'desc')->get();
        // dd($onboading);

        return view('onboarding.index', compact('onboadinguser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'number_of_user' => 'required',
        ]);

        Session::put('onboarding_company', request('company_name'));

        $num = (int) request('number_of_user');
        // dd($num);
        for ($i = 1; $i <= $num; $i++) {
            $company = new OnboardingUser();
            $company->company_name = request('company_name');
            $company->username = 'User ' . $i;
            $company->save();
        }

        return redirect('/onboarding/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OnboardingUser  $onboardingUser
     * @return \Illuminate\Http\Response
     */
    public function show(OnboardingUser $onboardingUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OnboardingUser  $onboardingUser
     * @return \Illuminate\Http\Response
     */
    public function edit(OnboardingUser $onboardingUser, $id)
    {
        $onboardinguser = OnboardingUser::find($id);

        return view('onboarding.edit', compact(['onboardinguser']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OnboardingUser  $onboardingUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // $request->validate([
        //     'company_name' => 'required',
        // ]);



        // $table->string('company_name');
        // $table->string('username');
        // $table->string('extension_no')->nullable();
        // $table->string('email')->nullable();
        // $table->string('first_name')->nullable();
        // $table->string('last_name')->nullable();
        // $table->string('voicemail_pin')->nullable();
        // $table->string('portal_username')->nullable();
        // $table->string('portal_password')->nullable();
        // $table->string('phone_model')->nullable();
        // $table->string('mac_address')->nullable();
        // $table->string('number_assigned')->nullable();
        // $table->string('department')->nullable();
        // $table->string('portal_access')->nullable();

        // $table->boolean('vm_2_email')->nullable();
        // $table->boolean('missed_call')->nullable();
        // $table->boolean('call_recording')->nullable();
        // $table->boolean('has_music_onhold')->nullable();

        // $table->string('music')->nullable();
        // $table->string('client_business_after_hours')->nullable();
        // $table->string('time_zone')->nullable();


        // $table->boolean('need_fax')->nullable();

        // $table->string('fax_used')->nullable();
        // $table->string('call_queue')->nullable();

        // $table->boolean('auto_attendant')->nullable();

        $onboardinguser = OnboardingUser::find($id);
        $onboardinguser->company_name = request('company_name');
        $onboardinguser->username = request('username');
        $onboardinguser->extension_no = request('extension_no');
        $onboardinguser->email = request('email');
        $onboardinguser->first_name = request('first_name');
        $onboardinguser->last_name = request('last_name');
        $onboardinguser->voicemail_pin = request('voicemail_pin');
        $onboardinguser->portal_username = request('portal_username');
        $onboardinguser->portal_password = request('portal_password');
        $onboardinguser->phone_model = request('phone_model');
        $onboardinguser->mac_address = request('mac_address');
        $onboardinguser->number_assigned = request('number_assigned');
        $onboardinguser->department = request('department');
        $onboardinguser->portal_access = request('portal_access');
        $onboardinguser->vm_2_email = request('vm_2_email');
        $onboardinguser->missed_call = request('missed_call');
        $onboardinguser->call_recording = request('call_recording');
        $onboardinguser->has_music_onhold = request('has_music_onhold');
        $onboardinguser->music = request('music');
        $onboardinguser->client_business_after_hours = request('client_business_after_hours');
        $onboardinguser->time_zone = request('time_zone');
        $onboardinguser->need_fax = request('need_fax');
        $onboardinguser->fax_used = request('fax_used');
        $onboardinguser->call_queue = request('call_queue');
        $onboardinguser->auto_attendant = request('auto_attendant');

        $onboardinguser->save();

        return redirect('/onboarding/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OnboardingUser  $onboardingUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(OnboardingUser $onboardingUser)
    {
        //
    }
}
