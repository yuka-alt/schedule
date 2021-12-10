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
    <link href="{{ asset('css/oneday.css') }}" rel="stylesheet">
    <title>1dayスケジュール</title>
</head>
<body>
    <h1>1dayスケジュール</h1>

    <div class="day">
        ○月○日
    </div>
    
    <div class="all">
        <div class="table_css">
            <table border="1" align="right">
            <tr class="nostripe">
                <td >&nbsp;</td>
            </tr>    
            <tr class="nostripe">
                <td>&nbsp;</td>
            </tr>    
            <tr class="nostripe">
                <td>&nbsp;</td>
            </tr>    
            <tr class="nostripe">
                <td>&nbsp;</td>
            </tr>    
            <tr class="nostripe">
                <td>&nbsp;</td>
            </tr>    
            <tr class="nostripe">
                <td>&nbsp;</td>
            </tr>    
            <tr class="nostripe">
                <td>&nbsp;</td>
            </tr>    
            <tr class="nostripe">
                <td>&nbsp;</td>
            </tr>    
            <tr class="nostripe">
                <td>&nbsp;</td>
            </tr>    
            <tr class="nostripe">
                <td>&nbsp;</td>
            </tr>    
            <tr class="nostripe">
                <td>&nbsp;</td>
            </tr>    
            <tr class="nostripe">
                <td>&nbsp;</td>
            </tr>    
            <tr class="nostripe">
                <td>&nbsp;</td>
            </tr>
            </table>
        </div>
            <p>8:00</p>
            <p>9:00</p>
            <p>10:00</p>
            <p>11:00</p>
            <p>12:00</p>
            <p>13:00</p>
            <p>14:00</p>
            <p>15:00</p>
            <p>16:00</p>
            <p>17:00</p>
            <p>18:00</p>
            <p>19:00</p>
            <p>20:00</p>
    </div>
</body>
</html>