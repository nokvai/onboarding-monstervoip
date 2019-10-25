@extends('layouts.app')

@section('content')

<style>
    .onboard-col-w {
        min-width: 250px;
        font-weight: bold;
    }

    .onboard-col-w2 {
        min-width: 400px;
        font-weight: bold;
    }

    .onboard-col-w3 {
        min-width: 600px;
        font-weight: bold;
    }

    .onboard-col-w4 {
        min-width: 800px;
        font-weight: bold;
    }
</style>

<script>
    $(document).ready(function() {

        $('#example_wrapper').css({
            'min-width': '100%'
        });

        var divAddRecord = $('<div />').addClass('col-sm-12');
        var tr = $("#createNew");
        tr.hide();

        var btnAdd = $('<button />').attr('id', 'btnAdd').addClass('btn btn-primary').text('Add New');
        divAddRecord.append(btnAdd);
        $('#main-div').append(divAddRecord);

        $("#btnAdd").click(function() {
            $(tr).toggle("slow");
            if ($(this).text() == 'Add New') {
                $(this).text('Cancel');
            } else {
                $(this).text('Add New');
            }
        });

    });
</script>


<div class="card">
    <div class="card-body">

        <div class="container">
            <img src="/images/final_mv-onboarding-272x111.png" style="margin-left: -20px;">
            <br />
            <h2 class="card-title">{{ $company_name }} <small>( {{ $onboardinguser->count() }} company members)</small></h2>
            <br />
            <div id="main-div" class="row" style="display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px;">

                <table id="onboadingtable" class="table table-bordered table-hover">
                    <thead style="background-color: #E65325;">
                        <tr>
                            @if($company_name == 'All Onboarding')
                            <td class="onboard-col-w">Company Name</td>
                            @endif
                            <td class="onboard-col-w">Extension</td>
                            <td class="onboard-col-w">Email Address</td>
                            <td class="onboard-col-w">First Name</td>
                            <td class="onboard-col-w">Last Name</td>
                            <td class="onboard-col-w">Voicemail PIN</td>
                            <td class="onboard-col-w">Portal Username</td>
                            <td class="onboard-col-w">Portal Password</td>
                            <td class="onboard-col-w">Phone Model</td>
                            <td class="onboard-col-w">Mac Address</td>
                            <td class="onboard-col-w">Number Assigned</td>
                            <td class="onboard-col-w">Department</td>
                            <td class="onboard-col-w">User Scope</td>
                            <td class="onboard-col-w">VM 2 Email</td>
                            <td class="onboard-col-w">Missed Call Email</td>
                            <td class="onboard-col-w">Call Recording</td>
                            <td class="onboard-col-w">Time Zone</td>
                            <td class="onboard-col-w">Business Hours</td>
                            <td class="onboard-col-w">Call Queue</td>
                            <td class="onboard-col-w2">Has Music On Hold</td>
                            <td class="onboard-col-w4">Music On Hold</td>
                            <td class="onboard-col-w">Fax</td>
                            <td class="onboard-col-w2">Using an Auto Attendant</td>
                            <td class="onboard-col-w3">Audio Script</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($onboardinguser as $ob)
                        <tr id="tr{{$ob->id}}" style="cursor: pointer;">
                            @if($company_name == 'All Onboarding')
                            <td>{{$ob->company_name}}</td>
                            @endif
                            <td>{{ $ob->extension }}</td>
                            <td>{{ $ob->email_address }}</td>
                            <td>{{ $ob->first_name }}</td>
                            <td>{{ $ob->last_name }}</td>
                            <td>{{ $ob->voicemail_pin }}</td>
                            <td>{{ $ob->portal_username }}</td>
                            <td>{{ $ob->portal_password }}</td>
                            <td>{{ $ob->phone_model }}</td>
                            <td>{{ $ob->mac_address }}</td>
                            <td>{{ $ob->number_assigned }}</td>
                            <td>{{ $ob->department }}</td>
                            <td>{{ $ob->user_scope }}</td>
                            <td>{{ $ob->vm_2_email }}</td>
                            <td>{{ $ob->missed_call_email }}</td>
                            <td>{{ $ob->call_recording }}</td>
                            <td>{{ $ob->time_zone }}</td>
                            <td>{{ $ob->business_hours }}</td>
                            <td>{{ $ob->call_queue }}</td>
                            <td>{{ $ob->has_music_on_hold }}</td>
                            <td>{{ $ob->music_on_hold }}</td>
                            <td>{{ $ob->fax }}</td>
                            <td>{{ $ob->auto_attendant }}</td>
                            <td>{{ $ob->script }}</td>
                            <td>
                                <a href="javascript:{}" onclick="edit({{ $ob->id }}); return false;">Edit</a>
                                <script>
                                    function edit(id) {

                                        $('button[id^=CancelButton]').trigger('click');
                                        $('#tr' + id).hide();
                                        $('#tr-edit' + id).show('slow');

                                        $.get("/onboarding/edit2/" + id, function(data) {

                                            setTimeout(function() {

                                                $("select#time_zone").val(data.time_zone).trigger('change');
                                                $("select#call_queue").val(data.call_queue).trigger('change');
                                                $("select#music_on_hold").val(data.music_on_hold).trigger('change');
                                                $("select#fax").val(data.fax).trigger('change');

                                                $("select#has_music_on_hold").val(data.has_music_on_hold).trigger('change');
                                                $("select#music_on_hold").val(data.music_on_hold).trigger('change');

                                            }, 100);
                                        });

                                    }
                                </script>
                            </td>
                            <td>
                                <a href="" data-toggle="modal" data-target="#deleteOnboardingModal{{$ob->id}}">Delete</a>
                            </td>
                        </tr>
                        <tr id="tr-edit{{$ob->id}}" style="display: none;">
                            @include('onboarding.edit')
                        </tr>

                        <div class="modal fade" id="deleteOnboardingModal{{$ob->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteOnboardingModalLabel{{$ob->id}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteOnboardingModalLabel{{$ob->id}}">Confirm Delete</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete selected record ?
                                        <form id="form_delOnboarding{{$ob->id}}" action="{{ route('onboarding.destroy', $ob->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="button" onclick="document.getElementById('form_delOnboarding{{$ob->id}}').submit(); return false;" class="btn btn-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </tbody>

                    <tfoot>
                        @include('onboarding.create')
                    </tfoot>
                </table>







            </div>
        </div>

    </div>
</div>

@endsection