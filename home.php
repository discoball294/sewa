<html>

<head>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

        body {
            background: #fff;
        }

        .input-field input[type=date]:focus + label,
        .input-field input[type=text]:focus + label,
        .input-field input[type=email]:focus + label,
        .input-field input[type=password]:focus + label {
            color: #e91e63;
        }

        .input-field input[type=date]:focus,
        .input-field input[type=text]:focus,
        .input-field input[type=email]:focus,
        .input-field input[type=password]:focus {
            border-bottom: 2px solid #e91e63;
            box-shadow: none;
        }
    </style>
</head>

<body class="cyan">
    
<script>
    var x = document.getElementById("demo");
    var y = document.getElementById("demo2");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);

    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    $("#demo").val(position.coords.latitude); 
    $("#demo2").val(position.coords.longitude); 
    
}
</script>    
<div class="section"></div>
<main>
    <center>

        <div class="section"></div>


        <div class="section"></div>

        <div class="container">
            <div class="z-depth-1 white row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
                <img src="http://rs1022.pbsrc.com/albums/af349/oliveryahn/kaskus%20gif/6sx3xd.gif~c200"><br>
                <?php session_start();
                    echo $_SESSION['username'];?>
                 <p>Click the button to get your coordinates.</p>

                            <button onclick="getLocation()">Try It</button>

                            <p id="demo3"></p>  
                <form class="col s12" method="post" action="insert.php">
                    <div class='row'>
                        <div class='col s12'>
                        </div>
                    </div>
                    <div class="row margin">
                        <div class="input-field col s12">
                            <i class="mdi-social-person-outline prefix"></i>
                            <input id="username" name="nama" type="text">
                            <label for="username" class="center-align">Nama</label>
                        </div>
                    </div>


                    <div class='row margin'>
                        <div class='input-field col s12'>
                            <i class="mdi-action-settings-phone prefix"></i>
                            <input type="number" name='telp' id='pass' />
                            <label for="pass">Telp</label>
                        </div>
                    </div>
                    <div class='row margin'>
                        <div class='input-field col s12'>
                            <i class="mdi-action-store prefix"></i>
                            <input type="text" name='alamat' id='alamat' />
                            <label for="alamat">Alamat</label>
                        </div>
                        
                    </div>

                    <div class='row margin'>
                        <div class='input-field col s12'>
                            <input type="text" name='lat' id='demo'  value=""/>
                            <label for="lat">Lat</label>
                        </div>
                    </div>
                    <div class='row margin'>
                        <div class='input-field col s12'>
                            <input type="text" name='lng' id='demo2' value="" />
                            <label for="lng">Lng</label>
                            

                        </div>
                        <label style='float: right;'>
                            <a class='pink-text' href='reset_password.php'><b>Lupa Password?</b></a>
                        </label>
                    </div>
                    
                    <br />
                    <center>
                        <div class='row'>
                            <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Insert</button>
                        </div>
                    </center>
                </form>
            </div>
        </div>

    </center>

    <div class="section"></div>
    <div class="section"></div>
</main>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    
</body>

</html>