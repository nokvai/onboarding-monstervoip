@extends('layouts.app')

@section('content')

<script>
    $(document).ready(function() {

        setTimeout(function() {
            $("#portal_access").val('{{ $onboardinguser->portal_access }}').trigger('change');
            $("#music").val('{{ $onboardinguser->music }}').trigger('change');
            $("#time_zone").val('{{ $onboardinguser->time_zone }}').trigger('change');
            $("#fax_used").val('{{ $onboardinguser->fax_used }}').trigger('change');
            $("#call_queue").val('{{ $onboardinguser->call_queue }}').trigger('change');

            $("#vm_2_email").prop("checked", true);
            $("#missed_call").prop("checked", true);
            $("#call_recording").prop("checked", true);
            $("#has_music_onhold").prop("checked", true);
            $("#need_fax").prop("checked", true);
            $("#auto_attendant").prop("checked", true);

        }, 100);

    });
</script>

<div class="card">
    <div class="card-body" style="margin-left: 15%; margin-right: 15%;">

        <h2 class="card-title" style="text-align: center;">{{ $onboardinguser->company_name }} - {{ $onboardinguser->username }}</h2>
        <br />
        <form class="forms-sample" autocomplete="off" action="{{ route('onboarding.update', $onboardinguser->id) }}" method="post">
            @method('PATCH')
            @csrf
            <input type="text" hidden class="form-control" id="company_name" name="company_name" value="{{ $onboardinguser->company_name }}" autocomplete="off">
            <input type="text" hidden class="form-control" id="username" name="username" value="{{ $onboardinguser->username }}" autocomplete="off">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="extension_no">Extension No.</label>
                        <input type="text" class="form-control" id="extension_no" name="extension_no" value="{{ $onboardinguser->extension_no }}" placeholder="Extension Number" autocomplete="off" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $onboardinguser->email }}" placeholder="Email Address" autocomplete="off" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $onboardinguser->first_name }}" placeholder="First Name" autocomplete="off" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $onboardinguser->last_name }}" placeholder="Last Name" autocomplete="off" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="voicemail_pin">Voicemail PIN</label>
                        <input type="text" class="form-control" id="voicemail_pin" name="voicemail_pin" value="{{ $onboardinguser->voicemail_pin }}" placeholder="Voicemail PIN" autocomplete="off" required>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="portal_username">Portal Username</label>
                        <input type="text" class="form-control" id="portal_username" name="portal_username" value="{{ $onboardinguser->portal_username }}" aria-describedby="portal_usernameHelp" placeholder="Portal Username" autocomplete="off" required>
                        <small id="portal_usernameHelp" class="form-text text-muted">Format: ext@domain | e.g. 101@MonsterVoIP</small>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="portal_password ">Portal Password</label>
                        <input type="text" class="form-control" id="portal_password" name="portal_password" value="{{ $onboardinguser->portal_password }}" placeholder="Portal Password" autocomplete="off" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone_model ">Phone Model</label>
                        <input type="text" class="form-control" id="phone_model" name="phone_model" value="{{ $onboardinguser->phone_model }}" aria-describedby="phone_modelHelp" placeholder="Phone Model" autocomplete="off" required>
                        <small id="phone_modelHelp" class="form-text text-muted">Only for BYOD</small>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="mac_address ">MAC Address</label>
                        <input type="text" class="form-control" id="mac_address" name="mac_address" value="{{ $onboardinguser->mac_address }}" aria-describedby="mac_addressHelp" placeholder="MAC Address" autocomplete="off" required>
                        <small id="mac_addressHelp" class="form-text text-muted">Only for BYOD</small>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <h4>Optional Fields</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="number_assigned">Number Assigned</label>
                        <input type="text" class="form-control" id="number_assigned" name="number_assigned" value="{{ $onboardinguser->number_assigned }}" aria-describedby="number_assignedHelp" placeholder="Number Assigned" autocomplete="off">
                        <small id="number_assignedHelp" class="form-text text-muted">applies on ported numbers - which number goes to which person</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="department">Department</label>
                        <input type="text" class="form-control" id="department" name="department" value="{{ $onboardinguser->department }}" aria-describedby="departmentHelp" placeholder="Department" autocomplete="off">
                        <small id="departmentHelp" class="form-text text-muted">for different user to department designation</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="portal_access">Portal Access</label>
                        <!-- <input type="portal_access" class="form-control" id="portal_access" aria-describedby="portal_accessHelp" placeholder="Portal Access"> -->
                        <select id="portal_access" class="form-control" name="portal_access">
                            <option value="Basic">Basic</option>
                            <option value="Manager">Manager</option>
                        </select>
                        <small id="portal_accessHelp" class="form-text text-muted">what kind of access grant a user has Basic or Manager</small>
                    </div>
                </div>

            </div>



            <div class="row">
                <div class="col-md-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="vm_2_email" name="vm_2_email">
                        <label class="form-check-label" for="vm_2_email">VM 2 email</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="missed_call" name="missed_call">
                        <label class="form-check-label" for="missed_call">Missed Call Email Notification</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="call_recording" name="call_recording">
                        <label class="form-check-label" for="call_recording">Call Recording</label>
                    </div>
                </div>
            </div>

            <br />
            <div class="row">
                <div class="col-md-6">
                    <h4>Things to remember:</h4>
                </div>
            </div>



            <div class="row">
                <div class="col-md-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="has_music_onhold" name="has_music_onhold">
                        <label class="form-check-label" for="has_music_onhold">Do they have their own Music on hold?</label>
                    </div>
                    <div class="form-group">
                        <small for="music">If No, we have 4 available for them:</small>
                        <!-- <input type="portal_access" class="form-control" id="portal_access" aria-describedby="portal_accessHelp" placeholder="Portal Access"> -->
                        <select id="music" class="form-control" name="music">
                            <option value="danza">danza-espanola-op-37-h-142-xii-arabesca-16khz</option>
                            <option value="partita">partita-no-3-in-e-major-bwv-1006-1-preludio-16khz</option>
                            <option value="ponce">ponce-preludio-in-e-major-16khz</option>
                            <option value="suite">suite-espanola-op-47-leyenda-16khz</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="client_business_after_hours">What are the clients business and after hours?</label>
                        <input type="text" class="form-control" id="client_business_after_hours" name="client_business_after_hours" value="{{ $onboardinguser->client_business_after_hours }}" placeholder="" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="time_zone">What is your time zone?</label>
                        <select id="time_zone" class="form-control" name="time_zone">
                            <option value="Hawaii">Hawaii Standard Time</option>
                            <option value="Alaska">Alaska Daylight Time</option>
                            <option value="Pacific">Pacific Daylight Time</option>
                            <option value="MountainStandard">Mountain Standard Time</option>
                            <option value="MountainDaylight">Mountain Daylight Time</option>
                            <option value="Central">Central Daylight Time</option>
                            <option value="Eastern">Eastern Daylight Time</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="need_fax" name="need_fax">
                        <label class="form-check-label" for="need_fax">Need to Fax?</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <small for="fax_used">If No, we have 2 options:</small>
                        <select id="fax_used" class="form-control" name="fax_used">
                            <option value="Fax machine">Fax machine</option>
                            <option value="Sending fax to email">Sending fax to email</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="call_queue">Call Queue</label>
                        <select id="call_queue" class="form-control" name="call_queue">
                            <option value="Round-robin (longest idle)">Round-robin (longest idle)</option>
                            <option value="Ring All">Ring All</option>
                            <option value="Linear Hunt">Linear Hunt</option>
                            <option value="Linear Cascade">Linear Cascade</option>
                            <option value="Call Park">Call Park</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="auto_attendant" name="auto_attendant">
                        <label class="form-check-label" for="auto_attendant">Do they have an auto attendant?</label>
                    </div>
                </div>
            </div>

            <br />
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


@endsection