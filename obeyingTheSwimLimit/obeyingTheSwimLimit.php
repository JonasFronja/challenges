function obeyingTheSwimLimit($i) {
    foreach($i as $v){
                switch ($v) {
                    case "Banana":
                        $c += 100;                 
                        break;
                    case "Apple":
                        $c += 80;  
                        break;
                    case "Pizza":
                        $c += 300;  
                        break;
                     case "Chicken":
                        $c += 300;  
                        break;
                    case "Chocolate":
                        $c += 500;
                        break;
                    case "Roast Beef":
                        $c += 850;  
                        break;
                    case "Milk":
                        $c += 110;                                     
                        break; 
                    case "Deluxe Burger":
                        $c += 1000;                                     
                }  
        
    }
    
   if($c>=0&&$c<=600){
      return 0;
   }
   if($c>=601&&$c<=1400){
      return 15;
   }
    if($c>=1401&&$c<=2000){
      return 30;
   }
    if($c>=2001){
      return 60;
   }
}
