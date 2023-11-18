<?php
  $HOST = getenv('MYSQL_HOST');
  $USERNAME = getenv('MYSQL_NAME');
  $PASSWORD = getenv('MYSQL_PASS');
  $DB = getenv('MYSQL_DB');

  #function __construct()
  #{
   # $this->HOST = getenv('MYSQL_HOST');
    #$this->DB = getenv('MYSQL_DB');
    #$this->USERNAME = getenv('MYSQL_NAME');
    #$this->PASSWORD = getenv('MYSQL_PASS');
  #}
  

  @$con = mysqli_connect('127.0.0.1', $USERNAME, $PASSWORD, $DB)
  or
  die("<div class='text-danger text-center h5'>Oops, Unable to connect with database!</div>");

  if(isset($_GET['action']) && $_GET['action'] == 'is_logged_in') {
    $query = "SELECT IS_LOGGED_IN FROM admin_credentials";
    $result = mysqli_query($con,$query);
    if($result) {
      $row = mysqli_fetch_array($result);
      echo $row['IS_LOGGED_IN'];
    }
    else
      echo "setup";
  }
?>
