<!DOCTYPE html>
<html>
<title>User_dashboard</title>
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    
<script>
    function showTextArea(){
var selectBox = document.getElementById('select');
var userInput = selectBox.options[selectBox.selectedIndex].value;
if (userInput == 'other'){
document.getElementById('text').style.visibility = 'visible';
    }else{
document.getElementById('text').style.visibility = 'hidden';
}
return false;
}
    </script>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>

    <!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/Navigation-Clean.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/styles.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/user_styles.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md text-white bg-success navigation-clean">
            <div class="container"><a class="navbar-brand" href="#">NAMI LOGO</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse text-white"
                    id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active text-white" href="#">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-white" href="#">Notification</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-white" href="#">Third Item</a></li>
                        <li class="dropdown nav-item"><a class="dropdown-toggle nav-link text-white" data-toggle="dropdown" aria-expanded="false" href="#">John</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item text-center" role="presentation" href="#">Message</a><a class="dropdown-item text-center" role="presentation" href="#">Logout</a><a class="dropdown-item text-center" role="presentation" href="#">Profile</a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div>
   
    
    <!-- <script src="assets/js/jquery.min.js"></script> -->
    <!-- <script src="assets/bootstrap/js/bootstrap.min.js"></script> -->
</body>

</html>
<script> 
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<style>
    #container{
        padding: 15px;
    }

    </style>