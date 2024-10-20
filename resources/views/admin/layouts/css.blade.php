<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="apple-touch-icon" href="{{ asset("assets/admin/app-assets/images/logo/m icon.png")}}">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset("assets/admin/app-assets/images/logo/m icon.png")}}">

<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset("assets/admin/app-assets/vendors/css/vendors-rtl.min.css")}}">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset("assets/admin/app-assets/css-rtl/bootstrap.css")}}">
<link rel="stylesheet" type="text/css" href="{{ asset("assets/admin/app-assets/css-rtl/bootstrap-extended.css")}}">
<link rel="stylesheet" type="text/css" href="{{ asset("assets/admin/app-assets/css-rtl/colors.css")}}">
<link rel="stylesheet" type="text/css" href="{{ asset("assets/admin/app-assets/css-rtl/components.css")}}">
<link rel="stylesheet" type="text/css" href="{{ asset("assets/admin/app-assets/css-rtl/themes/dark-layout.css")}}">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset("assets/admin/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css")}}">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset("assets/admin/app-assets/css-rtl/custom-rtl.css")}}">
<link rel="stylesheet" type="text/css" href="{{ asset("assets/admin/assets/scss/style-rtl.css")}}">
<!-- END: Custom CSS-->

<link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.min.css"> --}}
<link rel="stylesheet" href="{{ asset("assets/admin/assets/css/toastr.css") }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script src="{{ asset("assets/admin/assets/js/bootstrap.bundle.min.js") }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{ asset("assets/admin/assets/js/plupload.full.min.js") }}"></script>
{{-- custom style --}}
<style>
@import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200;400;500;800&family=Changa:wght@200;300;400;500;600;700&display=swap');
body {
    font-family: 'Cairo', sans-serif;
}

p,span,h5,h6{
    font-family: 'Cairo', sans-serif;
}

h1,h2,h3{
    font-family: 'Changa', sans-serif;
}

td,th{
    font-family: 'Cairo', sans-serif;
}

.drop-container {
  position: relative;
  display: flex;
  gap: 10px;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 200px;
  padding: 20px;
  border-radius: 10px;
  border: 2px dashed #555;
  color: #444;
  cursor: pointer;
  transition: background .2s ease-in-out, border .2s ease-in-out;
}

.drop-container:hover {
  background: #eee;
  border-color: #111;
}

.drop-container:hover .drop-title {
  color: #222;
}

.drop-title {
  color: #444;
  font-size: 20px;
  font-weight: bold;
  text-align: center;
  transition: color .2s ease-in-out;
}

h2 {
  color: #000;
  text-align: center;
  font-size: 2em;
  margin: 20px 0;
}

.warpper {
  display: flex;
  flex-direction: row-reverse;
  align-items: flex-start;
  width: 100%;
}

.tab {
  cursor: pointer;
  padding: 10px 20px;
  margin: 0px 2px;
  background: #32557f;
  display: block;
  color: #fff;
  border-radius: 3px 3px 0px 0px;
  box-shadow: 0 0.5rem 0.8rem #00000080;
}

.panels {
  background: #fff;
  box-shadow: 0 2rem 2rem #00000080;
  min-height: 200px;
  width: 100%;
  max-width: 600px;
  border-radius: 3px;
  overflow: hidden;
  padding: 20px;
}

.panel {
  display: none;
  animation: fadein 0.8s;
}

@keyframes fadein {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

.panel-title {
  font-size: 1.5em;
  font-weight: bold;
}

.radio {
  display: none;
}

#one:checked ~ .panels #one-panel,
#two:checked ~ .panels #two-panel,
#three:checked ~ .panels #three-panel,
#four:checked ~ .panels #four-panel{
  display: block;
}

#one:checked ~ .tabs #one-tab,
#two:checked ~ .tabs #two-tab,
#three:checked ~ .tabs #three-tab,
#four:checked ~ .tabs #four-tab{
  background: #fff;
  color: #000;
  border-top: 3px solid #32557f;
}

.three-tab{
    display: none;
}

/* Import Font Dancing Script */
@import url(https://fonts.googleapis.com/css?family=Dancing+Script);

* {
    margin: 0;
}

/* NavbarTop */
.navbar-top {
    background-color: #fff;
    color: #333;
    box-shadow: 0px 4px 8px 0px grey;
    height: 70px;
}

.title {
    font-family: 'Dancing Script', cursive;
    padding-top: 15px;
    position: absolute;
    left: 45%;
}

.navbar-top ul {
    float: right;
    list-style-type: none;
    margin: 0;
    overflow: hidden;
    padding: 18px 50px 0 40px;
}

.navbar-top ul li {
    float: left;
}

.navbar-top ul li a {
    color: #333;
    padding: 14px 16px;
    text-align: center;
    text-decoration: none;
}

.icon-count {
    background-color: #ff0000;
    color: #fff;
    float: right;
    font-size: 11px;
    left: -25px;
    padding: 2px;
    position: relative;
}

/* End */

/* Sidenav */
.sidenav {
    background-color: #fff;
    color: #333;
    border-bottom-right-radius: 25px;
    height: 86%;
    left: 0;
    overflow-x: hidden;
    padding-top: 20px;
    position: absolute;
    top: 70px;
    width: 250px;
}

.profile {
    margin-bottom: 20px;
    margin-top: -12px;
    text-align: center;
}

.profile img {
    border-radius: 50%;
    box-shadow: 0px 0px 5px 1px grey;
}

.name {
    font-size: 20px;
    font-weight: bold;
    padding-top: 20px;
}

.job {
    font-size: 16px;
    font-weight: bold;
    padding-top: 10px;
}

.url, hr {
    text-align: center;
}

.url hr {
    margin-left: 20%;
    width: 60%;
}

.url a {
    color: #818181;
    display: block;
    font-size: 20px;
    margin: 10px 0;
    padding: 6px 8px;
    text-decoration: none;
}

.url a:hover, .url .active {
    background-color: #e8f5ff;
    border-radius: 28px;
    color: #000;
    margin-left: 14%;
    width: 65%;
}

/* End */

/* Main */
.main {
    margin-top: 2%;
    margin-left: 29%;
    font-size: 28px;
    padding: 0 10px;
    width: 58%;
}

.main h2 {
    color: #333;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 24px;
    margin-bottom: 10px;
}

.main .card {
    background-color: #fff;
    border-radius: 18px;
    box-shadow: 1px 1px 8px 0 grey;
    height: auto;
    margin-bottom: 20px;
    padding: 20px 0 20px 50px;
}

.main .card table {
    border: none;
    font-size: 16px;
    /* height: 270px; */
    width: 80%;
}

.edit {
    position: absolute;
    color: #e7e7e8;
    right: 14%;
}

.social-media {
    text-align: center;
    width: 90%;
}

.social-media span {
    margin: 0 10px;
}

.fa-facebook:hover {
    color: #4267b3 !important;
}

.fa-twitter:hover {
    color: #1da1f2 !important;
}

.fa-instagram:hover {
    color: #ce2b94 !important;
}

.fa-invision:hover {
    color: #f83263 !important;
}

.fa-github:hover {
    color: #161414 !important;
}

.fa-whatsapp:hover {
    color: #25d366 !important;
}

.fa-snapchat:hover {
    color: #fffb01 !important;
}

.height-75 {
    height: 0px !important;
}
/* End */

.check_1,
.check_2{
  height: 0;
  width: 0;
  visibility: hidden;
}

.check_1_label {
  cursor: pointer;
  text-indent: -9999px;
  width: 50px;
  height: 30px;
  background: grey;
  display: block;
  border-radius: 100px;
  position: relative;
}

.check_1_label:after {
  content: '';
  position: absolute;
  top: 5px;
  left: 5px;
  bottom: 2.5px;
  width: 25px;
  height: 25px;
  background: #fff;
  border-radius: 90px;
  transition: 0.3s;
}

.check_1:checked + label {
  background: #bada55;
}
.check_2:checked + label {
  background: #bada55;
}

.check_1:checked + label:after {
  left: calc(100% - 5px);
  transform: translateX(-100%);
}

.check_2:checked + label:after {
  left: calc(100% - 5px);
  transform: translateX(-100%);
}

.check_1_label:active:after {
  width: 25px;
}

.tags-input {
    display: inline-block;
    position: relative;
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 5px;
    box-shadow: 2px 2px 5px #00000033;
    width: 100%;
    margin: 15px 0;
}

.tags-input ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.tags-input li {
    display: inline-block;
    background-color: #0b0009;
    color: #f4f4f4;
    border-radius: 20px;
    padding: 5px 10px;
    margin-right: 5px;
    margin-bottom: 5px;
    position: relative;
}

.tags-input input[type="text"] {
    border: none;
    outline: none;
    padding: 5px;
    font-size: 14px;
    width: 100%;
}

.tags-input input[type="text"]:focus {
    outline: none;
}

.tags-input .delete-button {
    background-color: transparent;
    border: none;
    color: #ffffff;
    cursor: pointer;
    margin-left: 5px;
    top: 5px;
    left: 0px;
    font-size: 16px;
    background: red;
    border-radius: 4px;
    padding: 5px;
}

.form-data{
    display: block;
    margin-top: 10px;
    border-radius: 12px;
    padding: 10px 2px;
    width: 100%;
    background: transparent;
    color: #000;
    box-shadow: 1px 0px 2px #000;
    transition: all 1s ease-in-out;
}

.form-data::placeholder {
  color: #000;
}

.loader {
    width: 20px;
    height: 20px;
    border: 2px solid #FFF;
    border-bottom-color: #FF3D00;
    border-radius: 50%;
    display: none;
    box-sizing: border-box;
    animation: rotation 1s linear infinite;
    position: absolute;
    left: 0;
    bottom: 5px;
}

@keyframes rotation {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

.icon-button {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  color: #333333;
  background: #dddddd;
  border: none;
  outline: none;
  border-radius: 50%;
}

.icon-button:hover {
  cursor: pointer;
}

.icon-button:active {
  background: #cccccc;
}

.icon-button__badge {
  position: absolute;
  top: -5px;
  right: -5px;
  width: 20px;
  height: 20px;
  background: red;
  color: #ffffff;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
}

.img-payment{
    width: 600px;
    max-width: 50%;
    height: 500px;
    object-fit: cover;
}

@media only screen and (max-width: 600px) {
  .container{
    width: 100%;
    max-width: 600px;
  }
}

.mb{
    margin-bottom: 12px;
}

.mt{
    margin-top: 12px;
}

.table td{
    font-size: 14px;
}

.message_not_found{
    font-size: 22px;
    font-weight: 600;
}

.table-name {
    font-size: 25px;
    font-weight: bold;
}

label{
    font-size: 18px;
}

.text-danger {
    color: #EA5455 !important;
    font-size: 16px;
}

.row {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-left: -1rem;
    margin-right: -1rem;
    align-items: center;
}

span.text-error {
    color: red;
    font-size: 16px;
    margin-right: 6px;
    margin-top: 4px;
}


img{
    max-width: 500px;
    max-height: 500px;
    object-fit: cover;
}

.loader {
    margin: auto;
    border: 1px solid #EAF0F6;
    border-radius: 50%;
    border-top: 2px solid #FF7A59;
    width: 25px;
    height: 25px;
    animation: spinner 1s linear infinite;
    /* display: none; */
}

@keyframes spinner {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.checkbox-wrapper-19 {
    box-sizing: border-box;
    --background-color: #fff;
    --checkbox-height: 25px;
  }

  @-moz-keyframes dothabottomcheck-19 {
    0% {
      height: 0;
    }
    100% {
      height: calc(var(--checkbox-height) / 2);
    }
  }

  @-webkit-keyframes dothabottomcheck-19 {
    0% {
      height: 0;
    }
    100% {
      height: calc(var(--checkbox-height) / 2);
    }
  }

  @keyframes dothabottomcheck-19 {
    0% {
      height: 0;
    }
    100% {
      height: calc(var(--checkbox-height) / 2);
    }
  }

  @keyframes dothatopcheck-19 {
    0% {
      height: 0;
    }
    50% {
      height: 0;
    }
    100% {
      height: calc(var(--checkbox-height) * 1.2);
    }
  }

  @-webkit-keyframes dothatopcheck-19 {
    0% {
      height: 0;
    }
    50% {
      height: 0;
    }
    100% {
      height: calc(var(--checkbox-height) * 1.2);
    }
  }

  @-moz-keyframes dothatopcheck-19 {
    0% {
      height: 0;
    }
    50% {
      height: 0;
    }
    100% {
      height: calc(var(--checkbox-height) * 1.2);
    }
  }

  .checkbox-wrapper-19 input[type=checkbox] {
    display: none;
  }

  .checkbox-wrapper-19 .check-box {
    height: var(--checkbox-height);
    width: var(--checkbox-height);
    background-color: transparent;
    border: calc(var(--checkbox-height) * .1) solid #000;
    border-radius: 5px;
    position: relative;
    display: inline-block;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -moz-transition: border-color ease 0.2s;
    -o-transition: border-color ease 0.2s;
    -webkit-transition: border-color ease 0.2s;
    transition: border-color ease 0.2s;
    cursor: pointer;
  }
  .checkbox-wrapper-19 .check-box::before,
  .checkbox-wrapper-19 .check-box::after {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    position: absolute;
    height: 0;
    width: calc(var(--checkbox-height) * .2);
    background-color: #34b93d;
    display: inline-block;
    -moz-transform-origin: left top;
    -ms-transform-origin: left top;
    -o-transform-origin: left top;
    -webkit-transform-origin: left top;
    transform-origin: left top;
    border-radius: 5px;
    content: " ";
    -webkit-transition: opacity ease 0.5;
    -moz-transition: opacity ease 0.5;
    transition: opacity ease 0.5;
  }
  .checkbox-wrapper-19 .check-box::before {
    top: calc(var(--checkbox-height) * .72);
    left: calc(var(--checkbox-height) * .41);
    box-shadow: 0 0 0 calc(var(--checkbox-height) * .05) var(--background-color);
    -moz-transform: rotate(-135deg);
    -ms-transform: rotate(-135deg);
    -o-transform: rotate(-135deg);
    -webkit-transform: rotate(-135deg);
    transform: rotate(-135deg);
  }
  .checkbox-wrapper-19 .check-box::after {
    top: calc(var(--checkbox-height) * .37);
    left: calc(var(--checkbox-height) * .05);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
  }

  .checkbox-wrapper-19 input[type=checkbox]:checked + .check-box,
  .checkbox-wrapper-19 .check-box.checked {
    border-color: #34b93d;
  }
  .checkbox-wrapper-19 input[type=checkbox]:checked + .check-box::after,
  .checkbox-wrapper-19 .check-box.checked::after {
    height: calc(var(--checkbox-height) / 2);
    -moz-animation: dothabottomcheck-19 0.2s ease 0s forwards;
    -o-animation: dothabottomcheck-19 0.2s ease 0s forwards;
    -webkit-animation: dothabottomcheck-19 0.2s ease 0s forwards;
    animation: dothabottomcheck-19 0.2s ease 0s forwards;
  }
  .checkbox-wrapper-19 input[type=checkbox]:checked + .check-box::before,
  .checkbox-wrapper-19 .check-box.checked::before {
    height: calc(var(--checkbox-height) * 1.2);
    -moz-animation: dothatopcheck-19 0.4s ease 0s forwards;
    -o-animation: dothatopcheck-19 0.4s ease 0s forwards;
    -webkit-animation: dothatopcheck-19 0.4s ease 0s forwards;
    animation: dothatopcheck-19 0.4s ease 0s forwards;
  }

  .dropdown-menu{
    flex-direction: column;
  }
</style>

