<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTab</title>
    <link rel="stylesheet" href="/css/coming.css">
    <script src="https://kit.fontawesome.com/a424e00da0.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">


</head>

<body>
    <div class="flex-container">
        <div class="flex-col image">
            <div class="img-mask"><a href="#greeting" class="m-btn"><i class="fas fa-chevron-down"></i></a></div>
        </div>

        <div class="flex-col content">

            <div id="greeting" class="greeting">
                <div class="logo">
                    <img src="/imgs/logo-black.png" alt="logo" style="max-width: 50%; max-height:100px;">
                </div>
                <h1>
                    Nice to <br>
                    meet you
                </h1>
                <p>Our website is under construction, but we are ready to go! We are preparing something High-end
                    brand,amazing and exciting for you. Special surprise for our Contact only.</p>
                <a href="#form" class="btn-register">Register Me</a>
                <div class="social-media">
                    <a href=""><i class="fa fa-facebook-f"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-youtube"></i></a>
                </div>
            </div>
            <!-- Formm section -->
            <div id="form" class="form">

                <div class="form-back-btn">
                    <a href="#greeting"><i class="fas fa-arrow-left"></i></a>
                </div>
                <?php if (isset($_SESSION['success']) && !empty($_SESSION['subscriber'])) : ?>
                    <div>
                        <h1>Thank You for Register</h1>
                    </div>
                    <div class="subs-card">
                        <img src="<?= $_SESSION['subscriber']['image'] ?>" width="200" alt="">
                        <h2><?= ucfirst($_SESSION['subscriber']['fname']) . " " .  ucfirst($_SESSION['subscriber']['lname']) ?></h2>
                        <h3>Birthdate: <?= $_SESSION['subscriber']['birthdate'] ?></h3>
                        <p>
                            Phone: <?= $_SESSION['subscriber']['phone'] ?>
                        </p>

                        <p>
                            Email: <?= $_SESSION['subscriber']['email'] ?>
                        </p>

                        <p>
                            From: <?= $_SESSION['subscriber']['country'] ?>
                        </p>
                    </div>

                <?php else : ?>
                    <div class="form-head">
                        <h2>STAY IN TOUCH</h2>
                        <p>
                            Want to know more about us and our brand, feel free to sign up to attend our launch party.

                        </p>
                    </div>

                    <form action="/subscriber/add" method="POST" enctype="multipart/form-data">
                        <div class="form-input">
                            <div class="input-row">
                                <input type="text" required name="fname" placeholder="First Name" autocomplete="off">
                                <input type="text" required name="lname" placeholder="Last Name" autocomplete="off">
                            </div>

                            <div class="input-row">
                                <input type="text" required name="phone" placeholder="Phone" autocomplete="off">
                                <input type="email" required name="email" placeholder="Email" autocomplete="off">
                            </div>

                            <div class="input-row">
                                <input type="text" required name="birthdate" placeholder="Your Birthdate" onfocus="(this.type='date')" autocomplete="off">
                                <input type="text" required name="country" placeholder="Country" autocomplete="off">
                            </div>

                            <div class="file-row">
                                <input type="file" required name="image" id="">
                            </div>

                            <div class="submit-row">
                                <button type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                <?php endif; ?>

            </div>
        </div>



    </div>
</body>

</html>