<!DOCTYPE html>
<html>
    <head>
        <title>Pixel Creativity Board</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>
        <div class="container">
            <div class="grid">
                <table>
                    @foreach($gridItems as $gridRow)
                        <tr class="row-{{ $gridRow[0]->y }}">
                            @foreach($gridRow as $gridItem)
                                <td id="{{ $gridItem->x }}x{{ $gridItem->y }}" @if ($gridItem->color != null) style="background-color: {{ $gridItem->color }}" @endif @if($gridItem->color != null)class="disabled"@endif></td>
                            @endforeach
                        </tr>
                    @endforeach
                </table>
            </div>
            <a href="{{ $justGivingUrl }}" class="donate-button">Donate</a>
        </div>
    </body>
</html>
