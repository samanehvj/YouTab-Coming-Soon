<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTab</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a424e00da0.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>
    <div class="flex-container">
        <div class="flex-col image"></div>

        <div class="flex-col content">

            <div id="greeting" class="greeting">
                <div class="logo">
                    <img src="imgs/logo-black.png" alt="logo" width="50%">
                </div>
                <h1>
                    Nice to meet you
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

                <div class="form-head">
                    <h2>STAY IN Touch</h2>
                    <p>
                        Want to know more about us and our brand, feel free to sign up to attend our launch party.

                    </p>
                </div>

                <form action="default.html" method="POST" enctype="multipart/form-data">
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
                            <input type="text" required name="birthdate" placeholder="Your Birthdate"
                                onfocus="(this.type='date')" autocomplete="off">
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

            </div>
        </div>



    </div>
</body>

</html>