<?php
// $dir = 'sqlite:./toybot.sqlite';
// $dbh  = new PDO($dir) or die("cannot open the database");

// $query = "CREATE TABLE IF NOT EXISTS counterTable(id integer PRIMARY KEY AUTOINCREMENT NOT NULL, name varchar(255) NOT NULL, count integer NOT NULL DEFAULT 0)";
// $dbh->query($query);

// $query = "INSERT INTO counterTable(name) VALUES ('buy')";
// $dbh->query($query);

// $query = "SELECT * FROM counterTable";
// $res = $dbh->query($query);

// foreach ($res as $row)
// {
//     print_r($row);
// }
if (isset($_POST['addcounter'])) {
    $dir = 'sqlite:./toybot.sqlite';
    $dbh  = new PDO($dir) or die("cannot open the database");
    $query = "UPDATE counterTable SET count = count + 1 WHERE id=1";
    $dbh->query($query);
    $dbh = null;
}

?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/main.min.css" />
    <script src="js/juxtapose.min.js" defer></script>
    <link rel="stylesheet" href="css/juxtapose.css" />
    <title>Toybot</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="logo">
            <img src="media/logo_colorful.svg" alt="toybot Logo" />
        </div>
        <nav>
            <p>About us</p>
            <p>Support</p>
            <p>Contact</p>
        </nav>
    </header>
    <main>
        <div class="image">
            <img src="media/robot_heading_picture.png" alt="" />
            <div class="box">
                <h1>Say goodbye to cluttered rooms</h1>
                <p>
                    By using our ToyBot in your household you will never
                    spend time manually tidying up your children's toys
                    again.
                </p>
                <form method="POST" action="" class="buttons">
                    <input type="hidden" name="addcounter">
                    <button class="white">Try it for free!</button>
                    <button class="primary">Talk to us</button>
                </form>
            </div>
        </div>
        <div class="smokeVideo">
            <h2>Introducing ToyBot</h2>
            <!-- <iframe class="videoFrame" src="https://drive.google.com/file/d/1jgdICbpuVOca4bB6D6LCMsErwKQM16rT/preview"
                allow="fullscreen"></iframe> -->
            <p class="text">We offer a free trial of our robot for the first month. We will simply deliver it to your
                home and you can try it out without any risk.</p>
        </div>
        <div class="buttonRow">
            <form method="POST" action="" class="buttons">
                <input type="hidden" name="addcounter">
                <button class="primary primb">Try it for free!</button>
                <button class="white primb">Learn more</button>
            </form>
        </div>
        <div class="colorRow">
            <div class="colorRowIcon">
                <img src="media/logo_negative.svg" alt="">
            </div>
            <div class="colorRowText">
                <p class="text">For busy parents who like tidiness</p>
                <div class="colors">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <div class="picturesWithTextBox">
            <div class="text-right">
                <div class="picture">
                    <img src="media/working_mom.png" alt="">
                </div>
                <div class="text">
                    <p>All parents are busy and want to relax after a long day of work. However, when the children have
                        made a mess in the house while playing, who will tidy it up? Children who want to play even more
                        or tired parents. A conflict is inevitable.</p>
                    <p style="margin-top: 2rem;">ToyBot solves this problem!</p>
                </div>
            </div>
            <div class="text-left">
                <div class="picture">
                    <img src="media/robot_picking_lego.png" alt="">
                </div>
                <div class="text">
                    <p>The ToyBot is a robot arm that can move through a room and sort toys lying around into boxes,
                        shelves or in any other way you like.</p>
                </div>
            </div>
        </div>
        <div>
            <div class="juxtapose-custom-text">
                <p>Before the ToyBot was started.</p>
                <p>After the ToyBot is finished.</p>
            </div>
            <div id="juxtapose-wrapper" class="juxtapose" data-startingposition="65%">
                <img src="media/roomBefore.jpg" />
                <img src="media/roomAfter.jpg" />
            </div>
        </div>
        <div class="icons_container">
            <div class="logo">
                <img src="media/logo_colorful.svg" alt="ToyBot Logo">
            </div>
            <div class="icons_subcontainer">
                <div>
                    <img src="media/easy_to_use.png" alt="">
                    <p>is easy to use</p>
                </div>
                <div>
                    <img src="media/save_money.png" alt="">
                    <p>saves you money</p>
                </div>
                <div>
                    <img src="media/save_time.png" alt="">
                    <p>saves you time</p>
                </div>
                <div>
                    <img src="media/safe.png" alt="">
                    <p>and is safe</p>
                </div>
            </div>
        </div>
        <div class="buttonRow">
            <form method="POST" action="" class="buttons">
                <input type="hidden" name="addcounter">
                <button class="primary primb">Get a ToyBot now!</button>
                <button class="white primb">Chat with us</button>
            </form>
        </div>
        <div style="margin-top: 8rem">
            <h2>What our customers say</h2>
        </div>
        <div class="customer_container">
            <div class="grid">
                <div>
                    <div class="customer_image">
                        <img src="media/susan.png" alt="">
                    </div>
                    <p class="heading">Susan, mother of two boys</p>
                    <p>I really don???t like it when my house is untidy. Before I had a ToyBot I had to spend time every
                        evening cleaning up. Now I can instead spend more time with my boys and read books with them.
                    </p>
                </div>
                <div>
                    <div class="customer_image">
                        <img src="media/antonio.png" alt="">
                    </div>
                    <p class="heading">Antonio, father of a girl</p>
                    <p>I was constantly finding myself picking up toys and trying to keep our house organized. It was a
                        never-ending battle and it seemed like no matter how much time I spent cleaning, the toys just
                        kept
                        multiplying. That's why I was so excited to try out the new toy-picking robot.</p>
                </div>
                <div>
                    <div class="customer_image">
                        <img src="media/patricia.png" alt="">
                    </div>
                    <p class="heading">Patricia and David, one girl and one boy</p>
                    <p>ToyBot has been a game-changer for our family. The kids love being able to just toss their toys
                        wherever they please, knowing that ToyBot will take care of putting them away for them.</p>
                </div>
            </div>
            <div class="customer_button">
                <button class="primary primb">More customer stories</button>
            </div>
        </div>
        <div class="colorRow">
            <div class="colorRowIcon">
                <img src="media/logo_negative.svg" alt="">
            </div>
            <div class="colorRowText">
                <p class="text">Rent a ToyBot</p>
                <div class="colors">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <div class="pricing">
            <h2>Pricing</h2>
            <div class="price_boxes">
                <div>
                    <p class="heading">FREE trial version</p>
                    <p class="subheading">1 month</p>
                    <p>You can test it without any risk. After the trial period you can choose either of the two payed
                        plans or decide to send it back without any fees.</p>
                    <form method="POST" action="">
                        <input type="hidden" name="addcounter">
                        <button class="white">Get me a ToyBot now!</button>
                    </form>
                </div>
                <div>
                    <p class="heading">yearly subscription</p>
                    <p class="subheading">1730??? / year</p>
                    <p>Our cheapest option: save 20% compared to monthly.</p>
                    <p class="info">20% cheaper than a nanny*</p>
                </div>
                <div>
                    <p class="heading">monthly subscription</p>
                    <p class="subheading">180??? / month</p>
                    <p>Can be canceled anytime. Gives you the most flexibility.</p>
                </div>
            </div>
            <div class="pricing_text">
                <div>
                    <p>Do you need help to decide or want more information? We are very happy to talk to you.</p>
                </div>
                <div class="buttonRow">
                    <div class="buttons">
                        <button class="white primb">Chat with us</button>
                        <button class="white primb">Call us</button>
                    </div>
                </div>
            </div>
            <div class="pricing_hint">
                <p>*The comparison with a nanny was made by taking 14,73 ??? as the hourly wage and calculating the
                    partial wage for a whole year assuming 30 minutes of tdying per day.</p>
            </div>
        </div>
    </main>
    <footer>
        <div class="socialMedia">
            <div class="background">
                <div>
                    <img src="media/instagram.png" alt="">
                    <p>toybot_instagram</p>
                </div>
                <div>
                    <img src="media/facebook.png" alt="">
                    <p>toybot_facebook</p>
                </div>
                <div>
                    <img src="media/whatsapp.png" alt="">
                    <p>toybot_whatsapp</p>
                </div>
                <div>
                    <img src="media/twitter.png" alt="">
                    <p>toybot_twitter</p>
                </div>
            </div>
        </div>
        <div class="links">
            <p>jobs</p>
            <p>contact</p>
            <p>customer support</p>
            <p>general terms and conditions</p>
            <p>&copy; ToyBot GmbH 2022</p>
        </div>
        <div class="footer_logo">
            <img src="media/logo_negative.svg" alt="">
        </div>
    </footer>
</body>

</html>