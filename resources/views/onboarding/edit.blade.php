<form id="onboardingEditForm{{$ob->id}}" class="forms-sample" autocomplete="off" action="{{ route('onboarding.update', $ob->id) }}" method="post">
    @method('PATCH')
    @csrf
    <td>
        <input type="text" hidden id="company_name" class="form-control" name="company_name" value="{{ $company_name }}" placeholder="Company Name" autocomplete="off">
        <input type="text" id="extension" class="form-control" name="extension" value="{{ $ob->extension }}" placeholder="Extension" autocomplete="off" required>
    </td>
    <td>
        <input type="email" id="email_address" class="form-control" name="email_address" value="{{ $ob->email_address }}" placeholder="Email Address" autocomplete="off" required>
    </td>
    <td>
        <input type="text" id="first_name" class="form-control" name="first_name" value="{{ $ob->first_name }}" placeholder="First Name" autocomplete="off" required>
    </td>
    <td>
        <input type="text" id="last_name" class="form-control" name="last_name" value="{{ $ob->last_name }}" placeholder="Last Name" autocomplete="off" required>
    </td>
    <td>
        <input type="text" id="voicemail_pin" class="form-control" name="voicemail_pin" value="{{ $ob->voicemail_pin }}" placeholder="Voicemail PIN" autocomplete="off" required>
    </td>
    <td>
        <input type="text" id="portal_username" class="form-control" name="portal_username" value="{{ $ob->portal_username }}" placeholder="Portal Username" autocomplete="off" required>
    </td>
    <td>
        <input type="text" id="portal_password" class="form-control" name="portal_password" value="{{ $ob->portal_password }}" placeholder="Portal Password" autocomplete="off" required>
    </td>
    <td>
        <input type="text" id="phone_model" class="form-control" name="phone_model" value="{{ $ob->phone_model }}" placeholder="Phone Model" autocomplete="off">
    </td>
    <td>
        <input type="text" id="mac_address" class="form-control" name="mac_address" value="{{ $ob->mac_address }}" placeholder="MAC Address" autocomplete="off">
    </td>
    <td>
        <input type="text" id="number_assigned" class="form-control" name="number_assigned" value="{{ $ob->number_assigned }}" placeholder="Number Assigned" autocomplete="off">
    </td>
    <td>
        <input type="text" id="portal_access" class="form-control" name="portal_access" value="{{ $ob->portal_access }}" placeholder="Portal Access" autocomplete="off">
    </td>
    <td>
        <input type="text" id="department" class="form-control" name="department" value="{{ $ob->department }}" placeholder="Department" autocomplete="off">
    </td>
    <td>
        <input type="text" id="user_scope" class="form-control" name="user_scope" value="{{ $ob->user_scope }}" placeholder="User Scope" autocomplete="off">
    </td>
    <td>
        <input type="text" id="vm_2_email" class="form-control" name="vm_2_email" value="{{ $ob->vm_2_email }}" placeholder="VM 2 Email" autocomplete="off">
    </td>
    <td>
        <input type="text" id="missed_call_email" class="form-control" name="missed_call_email" value="{{ $ob->missed_call_email }}" placeholder="Missed Call Email" autocomplete="off">
    </td>
    <td>
        <input type="text" id="call_recording" class="form-control" name="call_recording" value="{{ $ob->call_recording }}" placeholder="Call Recording" autocomplete="off">
    </td>
    <td>
        <select id="time_zone" class="form-control" name="time_zone">
            <option value="Hawaii">Hawaii Standard Time</option>
            <option value="Alaska">Alaska Daylight Time</option>
            <option value="Pacific">Pacific Daylight Time</option>
            <option value="MountainStandard">Mountain Standard Time</option>
            <option value="MountainDaylight">Mountain Daylight Time</option>
            <option value="Central">Central Daylight Time</option>
            <option value="Eastern">Eastern Daylight Time</option>
        </select>
    </td>
    <td>
        <input type="text" id="business_hours" class="form-control" name="business_hours" value="{{ $ob->business_hours }}" placeholder="Business Hours" autocomplete="off" required>
    </td>
    <td>
        <select id="call_queue" class="form-control" name="call_queue">
            <option value="Round-robin (longest idle)">Round-robin (longest idle)</option>
            <option value="Ring All">Ring All</option>
            <option value="Linear Hunt">Linear Hunt</option>
            <option value="Linear Cascade">Linear Cascade</option>
            <option value="Call Park">Call Park</option>
        </select>
        <small id="call_queueHelp" class="form-text text-muted"></small>
        <script>
            $(document).ready(function() {
                $("#call_queue").change(function() {
                    var v = $("#call_queue").val();
                    if (v == "Round-robin (longest idle)") {
                        $("#call_queueHelp").text('this type of queue routes callers to the available agent that has been idle longest.');
                    } else if (v == "Ring All") {
                        $("#call_queueHelp").text('this type of queue routes callers to all available agents at the same time.');

                    } else if (v == "Linear Hunt") {
                        $("#call_queueHelp").text("this type of queue routes callers to the available agents in a predefined order. The order is defined when editing the queue's agents.");

                    } else if (v == "Linear Cascade") {
                        $("#call_queueHelp").text("this type of queue routes callers to groups of available agents in a predefined order. The order is defined when editing the queue's agents.");

                    } else if (v == "Call Park") {
                        $("#call_queueHelp").text('this feature places the caller on hold until an agent retrieves them. It is not used for ACD functionality.');
                    }
                });
            });
        </script>
    </td>
    <td>
        <input type="checkbox" id="has_music_on_hold" class="form-control" name="has_music_on_hold" value="{{ $ob->has_music_on_hold }}">
    </td>
    <td>
        <select id="music_on_hold" class="form-control" name="music_on_hold">
            <option value="danza-espanola-op-37-h-142-xii-arabesca-16khz">danza-espanola-op-37-h-142-xii-arabesca-16khz</option>
            <option value="partita-no-3-in-e-major-bwv-1006-1-preludio-16khz">partita-no-3-in-e-major-bwv-1006-1-preludio-16khz</option>
            <option value="ponce-preludio-in-e-major-16khz">ponce-preludio-in-e-major-16khz</option>
            <option value="suite-espanola-op-47-leyenda-16khz">suite-espanola-op-47-leyenda-16khz</option>
        </select>
    </td>
    <td>
        <select id="fax" class="form-control" name="fax">
            <option value="Fax machine">Fax machine</option>
            <option value="Sending fax to email">Sending fax to email</option>
        </select>
    </td>
    <td>
        <input type="checkbox" id="auto_attendant" class="form-control" name="auto_attendant" value="{{ $ob->auto_attendant }}">
    </td>

    <td>
        <button id="confirmButton{{$ob->id}}" class="btn btn-primary">Update</button>
        <script>
            $(document).ready(function() {
                $("#confirmButton{{$ob->id}}").click(function(e) {
                    e.preventDefault();
                    $('#confirmModal{{$ob->id}}').modal('toggle');
                });
            });
        </script>
    </td>
    <td>
        <button id="CancelButton{{$ob->id}}" class="btn btn-primary">Cancel</button>
        <script>
            $(document).ready(function() {
                $("#CancelButton{{$ob->id}}").click(function(e) {
                    e.preventDefault();
                    // $('#confirmModal{{$ob->id}}').modal('toggle');
                    $('#tr{{$ob->id}}').show();
                    $('#tr-edit{{$ob->id}}').hide();
                });
            });
        </script>
    </td>
</form>

<div class="modal fade" id="confirmModal{{$ob->id}}" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Do you confirm that all the information is accurate?</b> ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a class="btn btn-success" href="javascript:{}" onclick="document.getElementById('onboardingEditForm{{$ob->id}}').submit(); return false;">Confirm Update</a>
            </div>
        </div>
    </div>
</div>