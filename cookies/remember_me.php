<?php


function createRememberCookie($email,$role)
{

    if($role == "customer")
    {
        setcookie(
            "customer_email",
            $email,
            time()+86400*30,
            "/"
        );
    }


    else if($role == "admin")
    {
        setcookie(
            "admin_email",
            $email,
            time()+86400*30,
            "/"
        );
    }


    else if($role == "deliveryman")
    {
        setcookie(
            "deliveryman_email",
            $email,
            time()+86400*30,
            "/"
        );
    }

}



function deleteRememberCookie($role)
{


    if($role == "customer")
    {
        setcookie(
            "customer_email",
            "",
            time()-3600,
            "/"
        );
    }



    else if($role == "admin")
    {
        setcookie(
            "admin_email",
            "",
            time()-3600,
            "/"
        );
    }



    else if($role == "deliveryman")
    {
        setcookie(
            "deliveryman_email",
            "",
            time()-3600,
            "/"
        );
    }


}


?>