echo date("d/m/Y")."<br>";  
   echo date("l")."<br>";  
   // Defalt
   echo date("h:i:sa")."<br>"; 

   date_default_timezone_set("asia/dhaka");
   echo date("h:i:sa")."<br>";