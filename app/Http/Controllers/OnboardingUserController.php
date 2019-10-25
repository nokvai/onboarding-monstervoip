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
    public function index($company_name)
    {
        // dd($company_name);
        if ($company_name == "All Onboarding") {
            $onboardinguser = OnboardingUser::all();
            return view('onboarding.index', compact(['onboardinguser', 'company_name']));
        } else {
            $onboardinguser = OnboardingUser::where('company_name', $company_name)->get();
            return view('onboarding.index', compact(['onboardinguser', 'company_name']));
        }
        //$company_name = Session::get('onboarding_company');
        // $onboardinguser = OnboardingUser::where('company_name', $company_name)->orderBy('created_at', 'desc')->get();

        // dd($onboardinguser);
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
        // dd($request);
        $request->validate([
            'company_name' => 'required',
        ]);

        $onboardinguser = new OnboardingUser();
        $onboardinguser->company_name = request('company_name');
        $onboardinguser->extension = request('extension');
        $onboardinguser->email_address = request('email_address');
        $onboardinguser->first_name = request('first_name');
        $onboardinguser->last_name = request('last_name');
        $onboardinguser->voicemail_pin = request('voicemail_pin');
        $onboardinguser->portal_username = request('portal_username');
        $onboardinguser->portal_password = request('portal_password');
        $onboardinguser->phone_model = request('phone_model');
        $onboardinguser->mac_address = request('mac_address');
        $onboardinguser->number_assigned = request('number_assigned');
        $onboardinguser->department = request('department');
        $onboardinguser->user_scope = request('user_scope');
        $onboardinguser->vm_2_email = request('vm_2_email');
        $onboardinguser->missed_call_email = request('missed_call_email');
        $onboardinguser->call_recording = request('call_recording');

        $onboardinguser->time_zone = request('time_zone');
        $onboardinguser->business_hours = request('business_hours');
        $onboardinguser->call_queue = request('call_queue');
        if (request('has_music_on_hold') == 'on') {
            $onboardinguser->has_music_on_hold = "Yes";
        } else {
            $onboardinguser->has_music_on_hold = "No";
        }

        if ($onboardinguser->has_music_on_hold == 'Yes') {
            $onboardinguser->music_on_hold = null;
        } else {
            $onboardinguser->music_on_hold = request('music_on_hold');
        }
        $onboardinguser->fax = request('fax');
        if (request('auto_attendant') == 'on') {
            $onboardinguser->auto_attendant = "Yes";
        } else {
            $onboardinguser->auto_attendant = "No";
        }

        if ($onboardinguser->auto_attendant == "Yes") {
            $onboardinguser->script = null;
        } else {
            $onboardinguser->script = request('music_on_hold');
        }

        $onboardinguser->save();

        return redirect('/onboarding/index/' . request('company_name'));
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

    public function edit2(OnboardingUser $onboardingUser, $id)
    {
        $onboardinguser = OnboardingUser::find($id);

        return $onboardinguser;
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
        $request->validate([
            'company_name' => 'required',
        ]);

        $onboardinguser = OnboardingUser::find($id);
        $onboardinguser->company_name = request('company_name');
        $onboardinguser->extension = request('extension');
        $onboardinguser->email_address = request('email_address');
        $onboardinguser->first_name = request('first_name');
        $onboardinguser->last_name = request('last_name');
        $onboardinguser->voicemail_pin = request('voicemail_pin');
        $onboardinguser->portal_username = request('portal_username');
        $onboardinguser->portal_password = request('portal_password');
        $onboardinguser->phone_model = request('phone_model');
        $onboardinguser->mac_address = request('mac_address');
        $onboardinguser->number_assigned = request('number_assigned');
        $onboardinguser->department = request('department');
        $onboardinguser->user_scope = request('user_scope');
        $onboardinguser->vm_2_email = request('vm_2_email');
        $onboardinguser->missed_call_email = request('missed_call_email');
        $onboardinguser->call_recording = request('call_recording');

        $onboardinguser->time_zone = request('time_zone');
        $onboardinguser->business_hours = request('business_hours');
        $onboardinguser->call_queue = request('call_queue');
        if (request('has_music_on_hold') == 'on') {
            $onboardinguser->has_music_on_hold = "Yes";
        } else {
            $onboardinguser->has_music_on_hold = "No";
        }

        if ($onboardinguser->has_music_on_hold == 'Yes') {
            $onboardinguser->music_on_hold = null;
        } else {
            $onboardinguser->music_on_hold = request('music_on_hold');
        }
        $onboardinguser->fax = request('fax');
        if (request('auto_attendant') == 'on') {
            $onboardinguser->auto_attendant = "Yes";
        } else {
            $onboardinguser->auto_attendant = "No";
        }

        if ($onboardinguser->auto_attendant == "Yes") {
            $onboardinguser->script = null;
        } else {
            $onboardinguser->script = request('music_on_hold');
        }

        $onboardinguser->save();

        return redirect('/onboarding/index/' . request('company_name'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OnboardingUser  $onboardingUser
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $onboardinguser = OnboardingUser::find($id);
        $onboardinguser->delete();
        return redirect()->back();
    }

    public function destroycompany()
    {
        //dd($id);
        $company_name = Session::get('onboarding_company');
        dd($company_name);
        OnboardingUser::where('company_name', $company_name)->delete();
        Session::remove('onboarding_company');

        return redirect()->back();
    }
}
