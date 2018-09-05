<?PHP
  echo "<pre>";
  session_id('test-redis-session');
  session_start();
  if(isset($_GET["d"])) {
    foreach($_SESSION as $sid => $value){
        unset($_SESSION[$sid]);
    }
  }
  if(isset($_GET["w"])) {
    $_SESSION['a']=1;
    $_SESSION['b']=2;
    $_SESSION['c']=3;
  }
  
  print_R(session_id().":\n");
  print_R($_SESSION);
  echo "</pre>"."\n";
?>
