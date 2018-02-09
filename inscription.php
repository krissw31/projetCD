<?php
/**
 * Created by PhpStorm.
 * User: kriss
 * Date: 09/02/2018
 * Time: 08:49
 */

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf_8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="inscription.css">
        <link href="https://fonts.googleapis.com/css?family=Bungee|Lobster" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <title>Essai affichage texte</title>
        <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>

    <body>
    <div class="contenair">

        <div class="col-lg-8  col-md-8 col-sm-8 col-xs-12 ">
            <div class="inscription mb-4 ">
                <h1 class="text-center">Pas encore inscrit...</h1>
                <br>
                <hr>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Votre adresse Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Votre mot de passe</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="hunter2">
                </div>
                <div class="form-group ">
                    <label for="example-tel-input" class="form-label">Telephone</label>
                        <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                </div>
                <div class="form-group">
                    <label for="example-date-input" class="form-label">Date de naissance</label>
                        <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                </div>
                <button type="submit" class="btn btn-primary">Inscription</button>
            </form>
        </div>

        </div>


    </div>


    </body>
</html>
