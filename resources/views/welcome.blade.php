<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Monster VoIP Onboarding</title>

    <link rel="shortcut icon" href="mv-ob-icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

    <script>
        $(document).ready(function() {
            var seconds = 20;

            $("#intro").click(function() {
                window.location.href = "{{ route('onboardingindex') }}";
            });

            (function countdown() {
                $('#timer').text('Redirecting in ' + seconds + ' second' + (seconds == 1 ? '' : 's'))
                if (seconds-- > 0) setTimeout(countdown, 1000);
                if (seconds == -1) $("#intro").trigger('click');
            })();
        });
    </script>
</head>

<body>
    <div>
        <br />
        <br />

        <div>
            <a id="intro" hidden href="{{ route('onboardingindex') }}"></a>
        </div>

        <div class="text-center;" style="display: flex; align-items: center; justify-content: center; ">
            <img style=" width: 350px; height: 180px;" src="/images/final_mv-keep-on-boarding-large-image.png">
        </div>
        <br />

        <div>
            <p style="text-align: center; color: #000; font-size: 18px; font-weight: 800;"><b>You’ve made the right decision!<br /><br />
                    Welcome to MonsterVoIP, where we streamline your business phone system.
                    <br />
                    We want to ensure your transition goes as seamless as it can be. <br />
                    Following the On-boarding process, we’d like for you fill out the User Sheet form. <br />
                    <br />Thank you!</b>
                <br />
                <br />

                <p style="text-align: center;" id="timer"></p>


            </p>

            <p style="text-align: center;">
                <a class="btn btn-success" href="{{ route('onboardingindex') }}">Skip</a>
            </p>


        </div>


    </div>
</body>

</html>