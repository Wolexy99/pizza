<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="indel.css">
</head>
<body>
    <header>
        <h1>Contact Us</h1>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/#about">About <abbr title="About the little taco shop">LTS</abbr></a></li>
                <li><a href="/#menu">Our Menu</a></li>
                <li><a href="hours.php">Store Hours</a></li>
                <li><a href="indel.php">Welcome</a></li>
            </ul>
        </nav>

        <figure>
            <img src="taco_close_up.jpg" alt="tacos close" title="A nice taco specially made for you to eat and enjoy">
            <figcaption>Little Taco Shop Tacos</figcaption>
        </figure>
    </header>

    <main>
        <section>
         <h2>Our Contact Form</h2>
            <form action="icon.php" method="post">
             <fieldset>
                    <legend>Send Us A Message</legend>

                    <p>
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" placeholder="Type in your name" required>
                    </p>
                    <p>
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" placeholder="Type in your email" required>
                    </p>
                    <p>
                        <label for="message">Your Message:</label>
                        <br>
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Type your message here"></textarea>
                    </p>
                </fieldset>

                <button type="submit" value="send">send</button>
                <button type="reset">Reset</button>

            </form>
    </section>
    <section>
        <h2>Our Location</h2>
        <address>
            555 taco Temptation Lane, Suite T<br>
            kansas City, MO 55555-5555
            <br><br>
            Phone:<a href="tel.+234">08054642613</a>
        </address>
    </section>
    </main>
    <hr>
    <footer>
    <p>
        Copyright &copy; The Little Taco Shop
    </p>
</body>
</html>
