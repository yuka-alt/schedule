<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles -->
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <title>1dayスケジュール</title>
</head>
<body>
    <h1>1dayスケジュール</h1>
    
    <table class="day" border="1">
    <tr>
        <p>8:00</p><td>&nbsp;</td>
        <p>9:00</p><td></td>
        <p>10:00</p><td></td>
        <p>11:00</p><td></td>
        <p>12:00</p><td></td>
        <p>13:00</p><td></td>
        <p>14:00</p><td></td>
        <p>15:00</p><td></td>
        <p>16:00</p><td></td>
        <p>17:00</p><td></td>
        <p>18:00</p><td></td>
        <p>19:00</p><td></td>
        <p>20:00</p><td></td>
    </tr>
    </table>
    
</body>
</html>