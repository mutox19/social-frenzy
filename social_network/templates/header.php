<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login and Signup</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css" media="all">
</head>
<body>
    <div id="main-container">
    
    <div id="header">
        <div id="logo">
            Social Frenzy
        </div>
        <div class="login_form">
            <form method="post" id="login_form">
                <table>
                    <tbody>
                        <tr>
                            <td>Email</td>
                            <td>Password</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="Email" name="email" placeholder="Enter Your Email" required="required">
                            </td>
                            <td>
                                <input type="Password" name="pass" placeholder="Enter Your Password" required="required">
                            </td>
                            <td>
                                <button id="btn1" name="login">Login</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox"><span style="text-decoration: none; color: #7FFF00">Keep me logged in</span>
                            </td>
                            <td>
                                <a href="#" style="text-decoration: none; color: #7FFF00">Forgotton Password</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>

