$sql = "INSERT INTO customer (NIC,fname,lname,address1,address2,address3,mail,dob,password,img)
            VALUES ('$nic','$fname','$lname','$ad1','$ad2','$ad3','$email','$date','$hashed','$img')";
            if ($conn->query($sql) === TRUE) {
                $msg10 = "<div style = 'color:green; align:center;'> You are SucessFully Registerd</div>";
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
              940853354V
              12345