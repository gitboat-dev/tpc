@extends('layouts.template') 
@section('content')
<style>
    body,html {
  margin: 0;
  font: bold 14px/1.4 'Open Sans', arial, sans-serif;
  background: #000;
}
.classul { 
  margin: 150px auto 0; 
  padding: 0; 
  list-style: none; 
  display: table;
  width: 600px;
  text-align: center;
}
.classul > li { 
  display: table-cell; 
  position: relative; 
  padding: 15px 0;
}
.classul > li > a {
  color: #fff;
  text-transform: uppercase; text-decoration: none; letter-spacing: 0.15em;display: inline-block;padding: 15px 20px;
  position: relative;
}
.classul > li > a:after {    
  background: none repeat scroll 0 0 transparent; bottom: 0;content: ""; display: block;height: 2px; left: 50%;position: absolute;background: #fff;transition: width 0.3s ease 0s, left 0.3s ease 0s;width: 0;
}
.classul > li > a:hover:after { 
  width: 100%; 
  left: 0; 
}
@media screen and (max-height: 300px) {
    ul {
        margin-top: 40px;
    }
}


.nav>[class*=menu-]>ul.menu>li>a {
    color: black;
    /*text-transform: uppercase;*/
    /*text-decoration: none;
    letter-spacing: 0.15em;
    display: inline-block;
    padding: 15px 20px;*/
    position: relative;

}
.nav>[class*=menu-]>ul.menu>li>a:after {
    background: none repeat scroll 0 0 transparent; 
    bottom: 0;
    content: ""; 
    display: block;
    height: 2px; 
    left: 50%;
    position: absolute;
    background: #fff;
    transition: width 0.3s ease 0s, left 0.3s ease 0s;
    width: 0;
}
.nav>[class*=menu-]>ul.menu>li>a:hover:after {
    width: 100%; 
    left: 0; 
}

</style>
<ul class="classul">
  <li class="classli"><a href="#">About</a></li>
  <li><a href="#">Portfolio</a></li>
  <li><a href="#">Blog</a></li>
  <li><a href="#">Contact</a></li>
</ul>
@endsection
@section('custom-script')
<script>

jQuery(document).ready(function($){

});
</script>
@endsection
