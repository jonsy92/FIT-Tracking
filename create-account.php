<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stylesheet.css">
 
        <title>FIT-Tracking</title>    
       
<!--        <script type="text/javascript">
            function updatetextInputS(val)
            {
                document.getElementById('textInputSize').value=val;
            }
        </script>
        
         <script type="text/javascript">
            function updatetextInputW(val)
            {
                document.getElementById('textInputWeight').value=val;
            }
        </script>
        
         <script type="text/javascript">
            function updatetextInputK(val)
            {
                document.getElementById('textInputKfa').value=val;
            }
        </script>-->
    </head>
    
    <body>
        
        <div main>   
        <table border="0" align="left">
        <form action="account-coding.php" method="post">
            <tr><td></td><td><h1>Neuer Account</h1></td></tr>
            
            <tr>     
                <td>   Nutzername:</td><td><input type="text" name="nickname" ></td>
            </tr>
            
            <tr>
                <td>   Passwort:</td><td> <input type="password" name="password" ></td>
            </tr>
            
              <tr>     
                <td>   Email:</td><td><input type="text" name="email" ></td>
            </tr>
            
            <tr>
                <td>   Geburtsdatum:</td><td> <input id="birthdate" name="birthdate" type="date" min="1900-01-01" max="2016-01-01" ></td>
            </tr>
            
              <tr>
                <td>   Größe(cm):</td><td><input type="text" id="textInputSize" name="size" value="" >
<!--                                       <input  type="range" name="rangeInput" min="100" max="220" value="170" onchange="updatetextInputS(this.value);"></td>                                  -->
            </tr>  
            
            <tr>
                <td>   Gewicht(kg):</td><td><input type="text" id="textInputWeight" name="weight" value="" >
<!--                                       <input  type="range" name="rangeInput" min="30" max="220" value="70" onchange="updatetextInputW(this.value);"></td>                                  -->
            </tr>  
            
             <tr>
                <td>   Körperfettanteil(%):</td><td><input type="text" id="textInputKfa" name="kfa" value="" >
<!--                                       <input  type="range" name="rangeInput" min="1" max="100" value="20" onchange="updatetextInputK(this.value);"></td>                                  -->
            </tr>  
       
            <tr>
                <td>   Geschlecht:</td><td><select name="sex" size="1" style="width:200px;">
                                <option>Maennlich</option>
                                <option>Weiblich</option>
                                    </select> 
                </td>
            </tr>
             
            <tr>
                <td></td><td><input type="submit" value="Account anlegen"></td>
            </tr>
            
       </form>
        </div>
                  
    </body>
</html>