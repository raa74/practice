<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.4/dist/semantic.min.css" >
    <link rel="stylesheet" type="text/css" href="front.css" >
    <title>HTML калькулятор</title>
</head>
<body>
<div class="ui container">
<div class="fom">
<form name="calc" class="wrapper" action="{{action('MyMathController@sumbit')}}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <table class="main">
               <tr>
                   <td>
                <div  class="ui input">
                    <input class="ui input" type="text" name="input" value="{{ $ol }}" >
                </div>
                   </td>
               </tr>
   <tr>
       <td>
       <div  class="ui buttons">
           <button id="jok"class="ui button" type="button" OnClick="calc.input.value += '1'">1</button>
           <button id="jok" class="ui button" type="button" OnClick="calc.input.value += '2'">2</button>
           <button id="jok" class="ui button" type="button" OnClick="calc.input.value += '3'">3</button>
           <button id="green" class="ui button" type="button" OnClick="calc.input.value += '+'">+</button>
    </div>
       </td>
   </tr>
    <tr>
        <td>
    <div class="ui buttons">
        <button id="jok" class="ui button" type="button" OnClick="calc.input.value += '4'">4</button>
        <button id="jok" class="ui button" type="button" OnClick="calc.input.value += '5'">5</button>
        <button id="jok" class="ui button" type="button" OnClick="calc.input.value += '6'">6</button>
        <button id="red" class="ui button" type="button" OnClick="calc.input.value += '-'">-</button>
    </div>
        </td>
    </tr>
    <tr>
        <td>
    <div class="ui buttons">
        <button id="jok" class="ui button" type="button" OnClick="calc.input.value += '7'">7</button>
        <button id="jok" class="ui button" type="button" OnClick="calc.input.value += '8'">8</button>
        <button id="jok" class="ui button" type="button" OnClick="calc.input.value += '9'">9</button>
        <button id="jok" class="ui button" type="button" OnClick="calc.input.value += '/'">/</button>

    </div>
    </tr>
        </td>
    <tr>
        <td>
    <div class="ui buttons">
        <button id="rest" class="ui button" type="reset" OnClick="calc.input.value += ''">C</button>
        <button id="jok" class="ui button" type="button" OnClick="calc.input.value += '0'">0</button>
        <button id="yell" class="ui button" type="submit" >=</button>
        <button id="jok" class="ui button" type="button" OnClick="calc.input.value += '*'">*</button>
    </div>
        </td>
    </tr>
    </table>
</form>
</div>
</div>
</body>
</html>