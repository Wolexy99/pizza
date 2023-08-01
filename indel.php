<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Little Taco Shop</title>
    <link rel="stylesheet" href="indel.css">
</head>
<body>
    <header>
        <h1>Welcome To The Little Taco Shop</h1>

        <nav>
            <ul>
                <li><a href="#about">About <abbr title="About The Little Taco Shop">LTS</abbr></a></li>
                <li><a href="#menu">Our Menu</a></li>
                <li><a href="hours.php">Store Hours</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>

        <figure>
            <img src="taco.jpg" alt="Every one loves tacos" title="Taste Delicious" width="1000" height="562">
            <figcaption>Tacos and a Drink</figcaption>
        </figure>
    </header>
    <hr>

    <main>
        <article id="about">
            <h2>About <abbr title="About The Little Taco Shop"></abbr>LTS</h2>

            <p>
             <abbr title="About The Little Taco Shop">LTS</abbr> was founded in <time datetime="2022">2022</time>. Our shop was built from a <strong>love of tacos</strong>🌮🌮🌮. We hope our shop adds a unique and interesting place to our little town.
            </p>

             <aside>
                 <h3>Taco Trivia</h3>
                 <details>
                     <summary>When did tacos first appear in the United States?</summary>
                    <p>
                        Jeffery M.pilcher, taco historian and professor of history at the University of minnesota, says the earliest mention of tacos in the United states are in a newspaper from <time datetime="1905">1905</time>. (Source:<cite><a href="https://www.smithsonianmag.com/arts-culture/where-did-the-taco-come-from-81228162" target="_blank">smithsonian Magazine</a></cite>)
                    </p>
                </details>
             </aside>
        </article>
        <hr>

        <article id="menu">

            <h2>Our Menu</h2>

            <table>
                <caption>Our Tacos</caption>
                <thead>
                    <tr>
                        <th>Tacos</th>
                        <th scope="col"><abbr title="How many quantities do you need">Qty</abbr></th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th scope="row" rowspan="3">Cruchy</th>
                        <td>1</td>
                        <td>$1.50</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>$2.50</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>$3.25</td>
                    </tr>

                    <tr>
                        <th scope="row" rowspan="3">Soft</th>
                        <td>1</td>
                        <td>$2.00</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>$3.50</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>$4.50</td>
                    </tr>
                </tbody>

                <tfoot>
                    <tr>
                        <td colspan="3">Chips & Salsa $2</td>
                    </tr>
                </tfoot>
            </table>
            <br>
            <p>
                <a href="#">Back To Top</a>
            </p>
        </article>
    </main>
    <hr>
    <footer>
        <p>
            Copyright &copy; The Little Taco Shop
        </p>
    </footer>
</body>
</html>
