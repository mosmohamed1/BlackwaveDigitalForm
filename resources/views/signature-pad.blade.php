<!DOCTYPE html>
<html>
<head>
<title>Laravel 7 Signature Pad Tutorial From Scratch - tutsmake.com</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<style>
            .background {
            height: 100vh;
            background-image: url("assets/tretlagerknoten_free.png");
            background-size: cover;
            background-position: center;
            position: relative;

        }
        .overlay {
            background-color: rgba(0, 0, 0, .8);
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            z-index: 0;
        }
        .buttonsp1 {
        transition: all .4s ease;
        color: #fff;
        border: 3px solid transparent;
        background-color: #861a22;
        text-align: center;
        line-height: 1;
        font-size: 15px;
        padding: 10px;
        outline: none;
        border-radius: 4px;
        text-decoration: none;
    }
        .buttonsp1:hover {
            background-color: #C00000;
        }
.kbw-signature { width: 100%; height: 180px;}
#signaturePad canvas{
width: 100% !important;
height: auto;
}
</style>
</head>
<body>
<section class=" background ">
<div class="overlay"></div>
<div class="mask d-flex align-items-center h-100 gradient-custom-3 ">
<div class="container h-100">
<div class="row d-flex justify-content-center align-items-center h-100">
<div class="col-12 col-md-9 col-lg-7 col-xl-6">
<div class="card" style="border-radius: 15px;">
<div class="card-body p-2 text-center" >
<img src="assets/Blackwave_Logo_V2_black.svg" alt="Blackwave-logo-Black" style="width: 180px;" class="mb-3">
<h2 class="text-uppercase text-center mb-3 fs-3" style="color: brown;">Welcome to Blackwave</h2>
</div>
<div class="card-body p-2 text-center">
@if ($message = Session::get('success'))
    <div class="alert alert-success  alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
    </div>
@endif
<form method="POST" action="{{ url('laravel-signature-pad') }}">
@csrf
        <div class="form-outline mx-auto mb-3 w-75">
        <label class="visually-hidden" for="">Name:</label>
        <input type="text" name="name" class="form-control form-control-l" value="" placeholder="Your Full Name" >
        </div>
        <div class="form-outline mx-auto mb-3 w-75">
        <label class="visually-hidden" for="">Company:</label>
        <input type="text" name="company" class="form-control form-control-l" value="" placeholder="Origin Company">
        </div>
        <div class="form-outline mx-auto mb-3 w-75">
        <label class="visually-hidden" for="contactperson" ></label>
        <select name="contact_person" class="form-select form-select-l" >
        <option selected hidden>Contact Person</option>
        <option value="Chris">Chris</option>
        <option value="Mostafa">Mostafa</option>
        <option value="Theresa">Theresa</option>
        </select>
        </div>

        <div class="form-outline mx-auto mb-3 w-75">
        <label class="" for="">Signature:</label>
        <br/>
        <div id="signaturePad" ></div>
        <br/>
        <button id="clear" class="btn btn-danger btn-sm">Clear Signature</button>
        <textarea id="signature64" name="signed" style="display: none"></textarea>
        </div>
<br/>
<button class="buttonsp1">Submit</button>
</form>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
<link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
<script type="text/javascript">
var signaturePad = $('#signaturePad').signature({syncField: '#signature64', syncFormat: 'PNG'});
$('#clear').click(function(e) {
e.preventDefault();
signaturePad.signature('clear');
$("#signature64").val('');
});
</script>
</section>
</body>
</html>
