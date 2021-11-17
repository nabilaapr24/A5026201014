<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Formulir Pendaftaran</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
            $(document).ready(function(){
                function validate(){
                    var cek = true;
                    
                    var name = $("#nama").val();
                    namaPatt = new RegExp("^[0-9]")
                    if(name == ""){
                        $("#warningnamawajib").show();
                        $("#warningnama").hide();
                        cek = false;
                    } else if(namaPatt.test(name)){
                        $("#warningnamawajib").hide();
                        $("#warningnama").show();
                        cek = false;
                    } else {
                        $("#warningnamawajib").hide();
                        $("#warningnama").hide();
                    }

                    var address = $("#alamat").val();
                    if(address == ""){
                        $("#warningalamat").show();
                        cek = false;
                    } else {
                        $("#warningalamat").hide();
                    }

                    var email = $("#email").val();
                    if(email == ""){
                        $("#warningemailwajib").show();
                        $("#warningemail").hide();
                        cek = false;
                    } else if(email.search("@") == -1) {
                        $("#warningemailwajib").hide();
                        $("#warningemail").show();
                        cek = false;
                    } else {
                        $("#warningemailwajib").hide();
                        $("#warningemail").hide();
                    }

                    var password = $("#password").val();
                    if(password == ""){
                        $("#warningpasswordwajib").show();
                        $("#warningpassword").hide();
                        cek = false;
                    } else if (password.length < 8 || password.length > 16){
                        $("#warningpasswordwajib").hide();
                        $("#warningpassword").show();
                        cek = false;
                    } else {
                        $("#warningpasswordwajib").hide();
                        $("#warningpassword").hide();
                    }

                    var telp = $("#telepon").val();
                    telpPatt = new RegExp("^[0-9]{7,}$")
                    if(telp == ""){
                        $("#warningteleponwajib").show();
                        $("#warningtelepon").hide();
                        cek = false;
                    } else if(!telpPatt.test(telp)){
                        $("#warningteleponwajib").hide();
                        $("#warningtelepon").show();
                        cek = false;
                    } else {
                        $("#warningteleponwajib").hide();
                        $("#warningtelepon").hide();
                    }

                    var course = $("#course").val();
                    if(course == ""){
                        $("#warningcourse").show();
                        cek = false;
                    } else {
                        $("#warningcourse").hide();
                    }

                    var zip = $("#zip").val();
                    zipPatt = new RegExp("^[0-9]{6}$")
                    if(zip == ""){
                        $("#warningzipwajib").show();
                        $("#warningzip").hide();
                        cek = false;
                    } else if(!zipPatt.test(zip)){
                        $("#warningzipwajib").hide();
                        $("#warningzip").show();
                        cek = false;
                    } else {
                        $("#warningzipwajib").hide();
                        $("#warningzip").hide();
                    }

                    return cek;
                }

                $("form").submit(function(event){
                    if(validate() == false) {
                        event.preventDefault();
                    }
                });
                $("form").reset(function(e){
                    e.removeClass("btn-active");
                });
            });

        </script>
    </head>

    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col md-4 offset-md-1">
                    <div class="card card-body">
                        <h1>Formulir Pendaftaran</h1>
                        <form action="https://my.its.ac.id">
                            <div class="form-group">
                                <label>Name:</label><br>
                                <input id="nama" type="text" placeholder="Enter your name"><br>
                                <div id="warningnamawajib" class="collapse text-danger">
                                    <p>This field is required</p>
                                </div>
                                <div id="warningnama" class="collapse text-danger">
                                    <p>Name must not contain number</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Address:</label><br>
                                <input id="alamat" type="text" placeholder="Enter adress"><br>
                                <div id="warningalamat" class="collapse text-danger">
                                    <p>This field is required</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>E-mail:</label><br>
                                <input id="email" type="text" placeholder="Enter email"><br>
                                <div id="warningemail" class="collapse text-danger">
                                    <p>Email is not valid</p>
                                </div>
                                <div id="warningemailwajib" class="collapse text-danger">
                                    <p>This field is required</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password:</label><br>
                                <input id="password" type="password" placeholder="Enter password"><br>
                                <div id="warningpassword" class="collapse text-danger">
                                    <p>Must between 8-16 letters</p>
                                </div>
                                <div id="warningpasswordwajib" class="collapse text-danger">
                                    <p>This field is required</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Telephone:</label><br>
                                <input id="telepon" type="text" placeholder="Enter phone number"><br>
                                <div id="warningtelepon" class="collapse text-danger">
                                    <p>Minimum of 7 digits is required, no letter is allowed</p>
                                </div>
                                <div id="warningteleponwajib" class="collapse text-danger">
                                    <p>This field is required</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>SELECT YOUR COURSE</label><br>
                                <select id="course" aria-placeholder="Select Course">
                                    <option value=""> </option>
                                    <option value="BTECH">BTECH</option>
                                    <option value="BBA">BBA</option>
                                    <option value="BCA">BCA</option>
                                    <option value="B.COM">B.COM</option>
                                    <option value="GEEKSFORGEEKS">GEEKSFORGEEKS</option>
                                </select><br>
                                <div id="warningcourse"  class="collapse text-danger">
                                    <p>This field is required</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>ZipCode:</label><br>
                                <input id="zip" type="text" placeholder="Enter zipcode"><br>
                                <div id="warningzip"  class="collapse text-danger">
                                    <p>Must contain 6 digits number</p>
                                </div>
                                <div id="warningzipwajib"  class="collapse text-danger">
                                    <p>This field is required</p>
                                </div>
                            </div>
                            <div class="form-group form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" name="remember"> Remember me
                                </label>
                              </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <button class="btn btn-close" type="reset">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>