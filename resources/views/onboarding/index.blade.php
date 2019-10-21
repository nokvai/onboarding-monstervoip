@extends('layouts.app')

@section('content')

<script>
    $(document).ready(function() {
        //  alert(sessionStorage.getItem('onboarding_company'));

        // if (sessionStorage.getItem('onboarding_company') == null) {
        //     $("#initialFormButton").trigger('click');
        // }

        var cname = "{{ Session::get('onboarding_company') }}";
        console.log('cname: ', cname);
        console.log(cname.length);
        if (cname.length == 0) {
            $("#initialFormButton").trigger('click');
        } else if (cname.length > 0) {

        }

    });
</script>

<div>
    <img src="/images/final_mv-onboarding-272x111.png">
    <small style="float: right;"><a href="{{ route('forget') }}">delete company</a></small>
</div>

<div class=" container">
    <div class="row" style="text-align: center;">
        <button id="initialFormButton" hidden type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Set company name and number of users
        </button>
    </div>
</div>

<div class="card">
    <div class="card-body">


        <div class="container">
            <h2 class="card-title" style="text-align: center;">{{ $onboadinguser->first()->company_name ?? null }} ( {{ $onboadinguser->count() }} )</h2>
            <br />
            <div class="row" style="display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px;">
                @foreach ($onboadinguser as $ob)
                <div class="col-sm-12 col-lg-4" style="margin-bottom: 25px;">
                    <ul class="list-group" style="box-shadow: 0 0 19px 7px rgba(228, 228, 228, 1); border-radius: 8px;">
                        @if ($ob->done == 'yes' )
                        <li class="list-group-item" style="background-color: #28a745!important;">
                            <img style="width: 24px; height: 24px;" src="https://image.flaticon.com/icons/png/512/14/14946.png">
                            <b style="color: #fff;">{{ strtoupper( $ob->username ) }}</b>
                            <a href="{{ route('editonboarding', $ob->id) }}" id="editButton{{$ob->id}}" style="text-align: right; color: #fff;">[edit]</a>

                            <a style="float: right; margin-top: -3px;" href="javascript:{}" onclick="document.getElementById('form_del{{$ob->id}}').submit(); return false;" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </a>
                            <b style="float: right; color: #fff;">DONE</b>
                            @else
                        <li class="list-group-item active">
                            <b style="color: #fff;">{{ strtoupper( $ob->username ) }}</b>
                            <a href="{{ route('editonboarding', $ob->id) }}" id="editButton{{$ob->id}}" style="text-align: right; color: #fff;">[edit]</a>
                            <a style="float: right; margin-top: -3px;" href="javascript:{}" onclick="document.getElementById('form_del{{$ob->id}}').submit(); return false;" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </a>
                            @endif

                        </li>
                        <form id="form_del{{$ob->id}}" action="{{ route('onboarding.destroy', $ob->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                        </form>
                        <li class="list-group-item">
                            <div><small><b>Extension No: </b>{{ $ob->extension_no }}</small></div>
                            <div><small><b>Email: </b>{{ $ob->email }}</small></div>
                            <div><small><b>first_name: </b>{{ $ob->first_name }}</small></div>
                            <div><small><b>last_name: </b>{{ $ob->last_name }}</small></div>
                            <div><small><b>voicemail_pin: </b>{{ $ob->voicemail_pin }}</small></div>
                            <div><small><b>portal_username: </b>{{ $ob->portal_username }}</small></div>
                            <div><small><b>portal_password: </b>{{ $ob->portal_password }}</small></div>
                            <div><small><b>phone_model: </b>{{ $ob->phone_model }}</small></div>
                            <div><small><b>mac_address: </b>{{ $ob->mac_address }}</small></div>
                            <div><small><b>department: </b>{{ $ob->department }}</small></div>
                            <div><small><b>portal_access: </b>{{ $ob->portal_access }}</small></div>
                            <div><small><b>vm_2_email: </b>{{ $ob->vm_2_email }}</small></div>
                            <div><small><b>missed_call: </b>{{ $ob->missed_call }}</small></div>
                            <div><small><b>call_recording: </b>{{ $ob->call_recording }}</small></div>
                            <div><small><b>has_music_onhold: </b>{{ $ob->has_music_onhold }}</small></div>
                            <div><small><b>music: </b>{{ $ob->music }}</small></div>
                            <div><small><b>client_business_after_hours: </b>{{ $ob->client_business_after_hours }}</small></div>
                            <div><small><b>time_zone: </b>{{ $ob->time_zone }}</small></div>
                            <div><small><b>need_fax: </b>{{ $ob->need_fax }}</small></div>
                            <div><small><b>fax_used: </b>{{ $ob->fax_used }}</small></div>
                            <div><small><b>call_queue: </b>{{ $ob->call_queue }}</small></div>
                            <div><small><b>auto_attendant: </b>{{ $ob->auto_attendant }}</small></div>



                            <!-- $onboardinguser->company_name = request('company_name');
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
                            $onboardinguser->done = 'yes'; -->


                        </li>
                    </ul>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Monster VoIP Onboarding</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> -->
            </div>
            <div class="modal-body">
                <form id="formCreateCompany" class="forms-sample" autocomplete="off" action="/onboarding/store" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="company_name">Enter business name</label>
                                <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Business name" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label for="number_of_user">How many users need portal access?</label>
                                <input type="number" class="form-control" id="number_of_user" name="number_of_user" placeholder="0" autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                <button onclick=" document.getElementById('formCreateCompany').submit(); return false;" class="btn btn-primary">Accept</button>
            </div>
        </div>
    </div>
</div>

@endsection