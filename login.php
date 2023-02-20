<html>  
<head>  
    <title>Naoki OnNet Login</title>  
    <link rel = "stylesheet" type = "text/css" href = "./assets/css/login.css">
    <link rel = "stylesheet" type = "text/css" href = "./assets/css/plot.css"> 
</head>  
<body>  
    <div id="frm">  
        <center><h1>Iniciar sesión</h1></center>  
        <center><p>Introduce tus credenciales para continuar</p></center>
        <form name="f1" action = "./phpLogin/authentication.php" onsubmit = "return validation()" method = "POST">  
            <div class="dfc gg">  
                <span class="co_1 f11 ffbr mb7 ttu df aic t02">Usuario:</span>
                <input class="p9 br bg_3 bo bo_s f14 co_2 t02" type="text" id="user" name="user" />  
</div>  
            <div class="dfc mt10 gg">
                <span class="co_1 f11 ffbr mb7 ttu df aic t02">Contraseña:</span>
                <input class="p9 br bg_3 bo bo_s f14 co_2 t02" type="password" id="pass" name="pass" />  
</div>  
            <div class="df jce mt10">
            <button class="p4 pl20 pr20 dfac aic br c_bl" style="background-color:#3d4eae;border-color:#3d4eae;">Iniciar Sesion</button>
</div>
        </form>  
    </div>  
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html> 