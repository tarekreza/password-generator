<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Password Generator</title>
</head>

<body>
    <div class="password-generator">
        <h1>Password Generator</h1>
        <form class="generate-password-form" action="{{ url('/password') }}" method="post">
            @csrf
            <div class="form-group">
                <input type="checkbox" id="uppercase" name="uppercase">
                <label for="uppercase">Uppercase Letters</label>
            </div>
            <div class="form-group">
                <input type="checkbox" id="lowercase" name="lowercase">
                <label for="lowercase">Lowercase Letters</label>
            </div>
            <div class="form-group">
                <input type="checkbox" id="numbers" name="numbers" checked>
                <label for="numbers">Numbers</label>
            </div>
            <div class="form-group">
                <input type="checkbox" id="special" name="special">
                <label for="special">Special Characters</label>
            </div>
            <div class="block">
                <input type="range" name="length" id="rangeSlider" min="1" max="50" value="{{ $length }}">
                <div id="rangeValue">{{ $length }}</div>
                <input type="submit" value="Generate Password" class="btn generate-password">
            </div>
        </form>
    </div>
    <div class="generated-password">
        <input type="text" class="password" value="@isset($password){{ $password }}@endisset">
    </div>

    <script>
        var rangeSlider = document.getElementById("rangeSlider");
        var rangeValueDisplay = document.getElementById("rangeValue");

        rangeSlider.oninput = function() {
            var rangeValue = rangeSlider.value;
            rangeValueDisplay.innerHTML = rangeValue;
        }
    </script>

</body>

</html>
