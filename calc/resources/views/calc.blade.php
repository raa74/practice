<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.4/dist/semantic.min.css" >
    <link rel="stylesheet" type="text/css" href="front.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>HTML калькулятор</title>
</head>
<body>
<div class="ui container">
<div class="fom">
<form name="calc" class="wrapper" action="{{action('MyMathController@submit')}}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <table class="main">
               <tr>
                   <td>
                <div  class="ui input">
                    <input class="ui input" id="workinput" type="text" name="input" value="@if(isset($result)){{ $result }}@endif" >
                </div>
                   </td>
               </tr>
   <tr>
       <td>
       <div  class="ui buttons">
           <button id="jok" class="ui button calc" type="button" >1</button>
           <button id="jok" class="ui button calc" type="button" >2</button>
           <button id="jok" class="ui button calc" type="button" >3</button>
           <button id="green" class="ui button calc" type="button" >+</button>
    </div>
       </td>
   </tr>
    <tr>
        <td>
    <div class="ui buttons">
        <button id="jok" class="ui button calc" type="button" >4</button>
        <button id="jok" class="ui button calc" type="button" >5</button>
        <button id="jok" class="ui button calc" type="button" >6</button>
        <button id="red" class="ui button calc" type="button" >-</button>
    </div>
        </td>
    </tr>
    <tr>
        <td>
    <div class="ui buttons">
        <button id="jok" class="ui button calc" type="button" >7</button>
        <button id="jok" class="ui button calc" type="button" >8</button>
        <button id="jok" class="ui button calc" type="button" >9</button>
        <button id="jok" class="ui button calc" type="button" >/</button>

    </div>
    </tr>
        </td>
    <tr>
        <td>
    <div class="ui buttons">
        <button id="rest" class="ui button calc" type="reset" >C</button>
        <button id="jok" class="ui button calc" type="button" >0</button>
        <button id="yell" class="ui button" type="submit" >=</button>
        <button id="jok" class="ui button calc" type="button" >*</button>
    </div>
        </td>
    </tr>
    </table>
</form>
</div>
</div>
</body>
<script>
    $(document).ready(function () {
        $('.calc').click(function(){
            $('#workinput').val($('#workinput').val()+$(this).text());
        });
    });
</script>
</html>