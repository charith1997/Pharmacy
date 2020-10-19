<?php
function nic_exists($nic,$connection)
{
    $row =mysqli_query($connection, "SELECT fname from customer where NIC = '$nic'");
    {
        if(mysqli_num_rows($row)==1)
        {
            return true;
        }

        else
        {
            return false;
        }
    }
}
function admin_exists($id,$connection)
{
    $row =mysqli_query($connection, "SELECT admin_fname from admin where admin_num = '$id'");
    {
        if(mysqli_num_rows($row)==1)
        {
            return true;
        }

        else
        {
            return false;
        }
    }
}


function logged_in()
{
    if($_SESSION['id']=='' || $_COOKIE ['name'] == '')
    {
        return true;
    }

    else
    {
        return false;
    }
}
function logged_in2()
{
    if($_SESSION['id1']=='' || $_COOKIE ['name1'] == '')
    {
        return true;
    }

    else
    {
        return false;
    }
}
?>