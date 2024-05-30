 

  <?php  
     
  
    
 
    echo "<br><br>";

    $nb1 = $_GET["n1"];
    $nb2 = $_GET["n2"];

    $op = $_GET["op"];
    $res = 0;
    

    switch ($op) {
      case '+':
        $res = $nb1 + $nb2;
        break;
      case '-':
        $res = $nb1 - $nb2;
        break;

      case '/':
        $res = $nb1 / $nb2;
        break;
      case '*':
        $res = $nb1 * $nb2;
          break;
      
      default:
        $res = "enter Numbers";
        break;
    }
    echo $nb1 ."   ". $op . $nb2." = " . $res;
  ?>
  