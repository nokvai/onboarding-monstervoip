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

    function clearSessionCompanyName() {
        return "{{ Session::remove('onboarding_company') }}";
    }
</script>

<div>
    <img src="/images/final_mv-onboarding-272x111.png">
    <small style="float: right;"><a href="" onclick="clearSessionCompanyName(); return false;">Forget Company</a></small>
</div>

<div class="container">
    <div class="row" style="text-align: center;">
        <button id="initialFormButton" hidden type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Set company name and number of users
        </button>
    </div>
</div>

<div class="card">
    <div class="card-body">


        <div class="container">
            <h2 class="card-title" style="text-align: center;">{{ $onboadinguser->first()->company_name ?? null }}</h2>
            <br />
            <div class="row" style="display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px;">
                @foreach ($onboadinguser as $ob)
                <div class="col-sm-12 col-lg-4" style="margin-bottom: 25px;">
                    <ul class="list-group" style="box-shadow: 0 0 19px 7px rgba(228, 228, 228, 1); border-radius: 8px;">
                        <li class="list-group-item active">
                            {{ strtoupper( $ob->username ) }}
                            <a href="{{ route('editonboarding', $ob->id) }}" id="editButton{{$ob->id}}" style="text-align: right; color: #fff;">[edit]</a>
                            <!-- <script>
                                $("#editButton{{$ob->id}}").on('click', function(e) {
                                    e.preventDefault();
                                    $.get("/onboarding/edit", function(data) {
                                        console.log(data);


                                        // $('#tour_id').val(data.id);
                                        // $('#name').val(data.name);
                                        // $('#details').val(data.details);
                                        // $('#btn-save').val("update");
                                        //$('#selectServiceModal').modal('show');
                                    })
                                });
                            </script> -->
                        </li>
                        <li class="list-group-item"></li>
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