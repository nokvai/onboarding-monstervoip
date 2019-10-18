<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Unified Onboarding</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script>
        $(document).ready(function() {
            $("#initialFormButton").trigger('click');
        });
    </script>
</head>

<body>

    <div>
        <img src="/images/final_mv-onboarding-272x111.png">
    </div>

    <div class="container">
        <div class="row" style="text-align: center;">
            <button id="initialFormButton" hidden type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Set company name and number of users
            </button>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Number of Users</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> -->
                </div>
                <div class="modal-body">
                    <p>Enter business name</p>
                    <input type="text" class="form-control" id="company_name" placeholder="Business name" autocomplete="off">
                    <p>How many users need portal access?</p>
                    <input type="text" class="form-control" id="number_of_user" placeholder="0" autocomplete="off">
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    <button type="button" disabled class="btn btn-primary">Accept</button>
                </div>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-body">
            <h6 class="card-title">User 1</h6>

            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="extension_no">Extension No.</label>
                            <input type="extension_no" class="form-control" id="extension_no" placeholder="Extension Number" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="Email Address" autocomplete="off">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="first_name" class="form-control" id="first_name" placeholder="First Name" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="last_name" class="form-control" id="last_name" placeholder="Last Name" autocomplete="off">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="voicemail_pin">Voicemail PIN</label>
                            <input type="voicemail_pin" class="form-control" id="voicemail_pin" placeholder="Voicemail PIN" autocomplete="off">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="portal_username">Portal Username</label>
                            <input type="portal_username" class="form-control" id="portal_username" aria-describedby="portal_usernameHelp" placeholder="Portal Username" autocomplete="off">
                            <small id="portal_usernameHelp" class="form-text text-muted">Format: ext@domain | e.g. 101@MonsterVoIP</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="portal_password ">Portal Password</label>
                            <input type="portal_password" class="form-control" id="portal_password" placeholder="Portal Password" autocomplete="off">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone_model ">Phone Model</label>
                            <input type="phone_model" class="form-control" id="phone_model" aria-describedby="phone_modelHelp" placeholder="Phone Model" autocomplete="off">
                            <small id="phone_modelHelp" class="form-text text-muted">Only for BYOD</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="mac_address ">MAC Address</label>
                            <input type="mac_address" class="form-control" id="mac_address" aria-describedby="mac_addressHelp" placeholder="MAC Address" autocomplete="off">
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
                            <label for="number_assigned ">Number Assigned</label>
                            <input type="number_assigned" class="form-control" id="number_assigned" aria-describedby="number_assignedHelp" placeholder="Number Assigned" autocomplete="off">
                            <small id="number_assignedHelp" class="form-text text-muted">applies on ported numbers - which number goes to which person</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="department">Department</label>
                            <input type="department" class="form-control" id="department" aria-describedby="departmentHelp" placeholder="Department" autocomplete="off">
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
                            <input type="checkbox" class="form-check-input" id="vm_2_email">
                            <label class="form-check-label" for="vm_2_email">VM 2 email</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="missed_call">
                            <label class="form-check-label" for="missed_call">Missed Call Email Notification</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="call_recording">
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
                            <input type="checkbox" class="form-check-input" id="has_music_onhold">
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
                            <input type="client_business_after_hours" class="form-control" id="client_business_after_hours" placeholder="" autocomplete="off">
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
                            <input type="checkbox" class="form-check-input" id="need_fax">
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
                            <input type="checkbox" class="form-check-input" id="auto_attendant">
                            <label class="form-check-label" for="auto_attendant">Do they have an auto attendant?</label>
                        </div>
                    </div>
                </div>

                <br />
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>
</body>

</html>