@extends('master')

@section('content')

<style>
  .tile{
    width: 100px;
    height: 100px;
  }
  .rows{
    margin: auto;
    width: 100%;
    padding: 10px;
  }
</style>


    <div class="rows container">
        <div class="row">
            <div id="one" onmousedown="js_ChangeColor_one()" class="tile">1</div>
            <div id="two" onmousedown="js_ChangeColor_two()" class="tile" style="background: #721c24">2</div>
            <div id="three" onmousedown="js_ChangeColor_three()" class="tile" style="background: #005cbf">3</div>
        </div>
        <div class="row">
            <div id="four" onmousedown="js_ChangeColor_four()" class="tile" style="background: #005cbf">1</div>
            <div id="five" onmousedown="js_ChangeColor_five()" class="tile" style="background: #1c7430">2</div>
            <div id="six" onmousedown="js_ChangeColor_six()" class="tile" style="background: #721c24">3</div>
        </div>
        <div class="row">
            <div id="seven" onmousedown="js_ChangeColor_seven()" class="tile" style="background: #721c24">1</div>
            <div id="eight" onmousedown="js_ChangeColor_eight()" class="tile" style="background: #005cbf">2</div>
            <div id="nine" onmousedown="js_ChangeColor_nine()" class="tile" style="background: #1c7430">3</div>
        </div>

    </div>
    <script type="text/javascript">

    var counter=0;

        function js_ChangeColor_one(){
          if (counter==0) {
            document.getElementById('one').style.background="red";
            counter=1;
          }else if (counter==1) {
            document.getElementById('one').style.background="blue";
            counter=0;
          }
        }

        function js_ChangeColor_two(){
          if (counter==0) {
            document.getElementById('two').style.background="red";
            counter=1;
          }else if (counter==1) {
            document.getElementById('two').style.background="blue";
            counter=0;
          }
        }

        function js_ChangeColor_three(){
          if (counter==0) {
            document.getElementById('three').style.background="red";
            counter=1;
          }else if (counter==1) {
            document.getElementById('three').style.background="blue";
            counter=0;
          }
        }

        function js_ChangeColor_four(){
          if (counter==0) {
            document.getElementById('four').style.background="red";
            counter=1;
          }else if (counter==1) {
            document.getElementById('four').style.background="blue";
            counter=0;
          }
        }
        function js_ChangeColor_five(){
          if (counter==0) {
            document.getElementById('five').style.background="red";
            counter=1;
          }else if (counter==1) {
            document.getElementById('five').style.background="blue";
            counter=0;
          }
        }

        function js_ChangeColor_six(){
          if (counter==0) {
            document.getElementById('six').style.background="red";
            counter=1;
          }else if (counter==1) {
            document.getElementById('six').style.background="blue";
            counter=0;
          }
        }

        function js_ChangeColor_seven(){
          if (counter==0) {
            document.getElementById('seven').style.background="red";
            counter=1;
          }else if (counter==1) {
            document.getElementById('seven').style.background="blue";
            counter=0;
          }
        }

        function js_ChangeColor_eight(){
          if (counter==0) {
            document.getElementById('eight').style.background="red";
            counter=1;
          }else if (counter==1) {
            document.getElementById('eight').style.background="blue";
            counter=0;
          }
        }

        function js_ChangeColor_nine(){
          if (counter==0) {
            document.getElementById('nine').style.background="red";
            counter=1;
          }else if (counter==1) {
            document.getElementById('nine').style.background="blue";
            counter=0;
          }
        }


    </script>


    @stop
