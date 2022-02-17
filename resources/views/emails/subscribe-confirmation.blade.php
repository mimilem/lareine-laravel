<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Test</title>
</head>
<style>
    div.main {
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-align: center;
        padding: 15px;
    }
    div.code-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        align-content: center;
        place-items: center;
    }
    div.header {
        width: 50%;
        margin: auto;
    }
    div.code {
        width: auto;
        padding: 15px;
        background-color: #1C8FBF;
        color: #000000;
        margin: auto;
    }
    div.text {
        width: 60%;
        margin: auto auto 15px;
    }
</style>
<body>
    <div class="main">
        <div class="img">
            <img src="https://lasouveraine.marketing/public/assets/img/logo.png" alt="">
        </div>
        <div class="header">
            <h2>Salut {{ $name }}</h2>
            <p>
                Votre réservation pour
                    @if ($activity_type == 'COURSE')
                        la formation
                    @else
                        l'événement
                    @endif
                "{{ $activity_name }}"  a réussi.
            </p>
        </div>
        <div class="code-container">
            <div class="code">
                <div class="title">
                    Votre numéro de réservation est :
                </div>
                <div>
                    <h1>{{ $code }}</h1>
                </div>
            </div>
        </div>
        <div class="text">
            <p>
                Si 
                    @if ($activity_type == 'COURSE')
                    cette formation est payante
                    @else
                    cet événement est payant
                    @endif 
                , nous vous contacterons en 24 heures pour vous aider à effectuer votre payment. Si non, votre numéro de réservation suffira pour participer à l'événement.
                Nous vous remercions pour votre soutien.
            </p>
        </div>
        <div class="footer">
            <p> <strong>L'Equipe La Souveraine</strong> </p>
        </div>
    </div>
</body>
</html>