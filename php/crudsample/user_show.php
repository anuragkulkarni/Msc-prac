<!doctype html>
<html lang="en">
  <head>

    <title>show data</title>
  </head>
  <body>
    <div>
        <center>
        <br>
        <button><a href="user_create.php">add user</a></button>
        <table class="table">
            <thead>
                <tr>
                <th >id </th>
                <th> Name </th>
                <th> email </th>
                <th > mobile </th>
                <th> password </th>
                <th> operations </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'connect.php';
                    $sql='Select * from `crud`' ;
                    $result=mysqli_query($con,$sql) ;
                    if($result){

                        while($row=mysqli_fetch_assoc(($result))){
                            $id=$row['id'];
                            $name=$row['name'];
                            $email=$row['email'];
                            $mobile=$row['mobile'];
                            $password=$row['password'];
                            echo'<tr>
                                <th >'.$id.'</th>
                                <td>'.$name.'</td>
                                <td>'.$email.'</td>
                                <td>'.$mobile.'</td>
                                <td>'.$password.'</td>
                                <td>
                                <button><a href="update.php?id='.$id.'">update</a></button>
                                <button><a href="delete.php?id='.$id.'">delete</a></button>
                                </td>
                                </tr>
                            ';

                        }


                    }
                ?>
            </tbody>
        </table>
        </center>

    </div>

  </body>
</html>