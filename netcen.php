<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/materialize.css" rel="stylesheet" type="text/css">
    <link href="index.css" rel="stylesheet" type="text/css"/>

</head>
<body>

<div class="container">
    <div class="divider"></div>
    <div class="section">
        <h1 align="center">
            Netcen</a></h1>

    </div>
    <div>
        <h6>
            <?php
            session_start();
            echo "Welcome \t " . ucfirst($_SESSION['username']);
            ?>
        </h6>
    </div>
    <div class="divider"></div>
    <div class="section">
        <div class="row">

            <div class="col s3">
                <p>
                    <?php
                    include_once "users.php";
                    $lstzusers = new users();
                    $lstzusers->listUsers(); ?>
                </p>
            </div>

            <div class="col s9">
                <p>
                    Lorem ma nizzle dolor sizzle amet, fo shizzle adipiscing elizzle.
                    Nullizzle sapizzle shit, sure volutpat, suscipizzle quizzle,
                    crackalackin ass, crackalackin. Pellentesque shizznit tortizzle.
                    Fo shizzle eros. Yippiyo fo shizzle mah nizzle fo rizzle, mah
                    home g-dizzle dapibizzle doggy tempus . Maurizzle pellentesque
                    nibh et break it down. Shizzle my nizzle crocodizzle izzle shit.
                    Pellentesque crazy rhoncizzle you son of a bizzle. In dope habitasse
                    platea dictumst. dapibus. Bow wow wow dizzle uhuh ...
                    yih!, pretizzle dope, mattizzle things, rizzle vitae, nunc. Uhuh ...
                    yih! hizzle. Integizzle semper velit crackalackin doggy.

                    Lorem ma nizzle dolor sizzle amet, fo shizzle adipiscing elizzle.
                    Nullizzle sapizzle shit, sure volutpat, suscipizzle quizzle,
                    crackalackin ass, crackalackin. Pellentesque shizznit tortizzle.
                    Fo shizzle eros. Yippiyo fo shizzle mah nizzle fo rizzle, mah
                    home g-dizzle dapibizzle doggy tempus . Maurizzle pellentesque
                    nibh et break it down. Shizzle my nizzle crocodizzle izzle shit.
                    Pellentesque crazy rhoncizzle you son of a bizzle. In dope habitasse
                    platea dictumst. dapibus. Bow wow wow dizzle uhuh ...
                    yih!, pretizzle dope, mattizzle things, rizzle vitae, nunc. Uhuh ...
                    yih! hizzle. Integizzle semper velit crackalackin doggy.

                    Lorem ma nizzle dolor sizzle amet, fo shizzle adipiscing elizzle.
                    Nullizzle sapizzle shit, sure volutpat, suscipizzle quizzle,
                    crackalackin ass, crackalackin. Pellentesque shizznit tortizzle.
                    Fo shizzle eros. Yippiyo fo shizzle mah nizzle fo rizzle, mah
                    home g-dizzle dapibizzle doggy tempus . Maurizzle pellentesque
                    nibh et break it down. Shizzle my nizzle crocodizzle izzle shit.
                    Pellentesque crazy rhoncizzle you son of a bizzle. In dope habitasse
                    platea dictumst. dapibus. Bow wow wow dizzle uhuh ...
                    yih!, pretizzle dope, mattizzle things, rizzle vitae, nunc. Uhuh ...
                    yih! hizzle. Integizzle semper velit crackalackin doggy.
                </p>

            </div>

        </div>
    </div>
    <div class="divider"></div>
    <div class="section">
        <form id="chat-form" method="post">
        <div class="form-group">
            <label for="InputMessage">Message</label>
            <input type="text" class="form-control" name="InputMessage" placeholder="Post.........">
        </div>
            <button id="post-messages" type="submit" class="btn btn-primary">Submit</button>
        </form>
        <span id="post-result"></span>
    </div>


</div>
<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="js/jquery.validationEngine.js"></script>
<script src="js/updateMessages.js"></script>

</body>
</html>