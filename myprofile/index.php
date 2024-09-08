<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: whitesmoke;
            color: #212529;
            line-height: 1.6;
        }

        .header {
            background: #004d40;
            color: #fff;
            padding: 20px 0;
            border-bottom: 5px solid #00796b;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header h1 {
            margin: 0;
            font-size: 2.5em;
            text-align: center;
        }

        .nav {
            position: fixed;
            top: 60px; /* Adjust based on the height of your header */
            left: 0;
            width: 100%;
            background: #444;
            color: #fff;
            padding: 10px 0;
            z-index: 1000;
        }

        .nav .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav .menu {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .nav .menu li {
            margin: 0 15px;
        }

        .nav .menu a {
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .nav .menu i {
            margin-right: 5px;
        }

        .nav .toggle {
            display: none;
            cursor: pointer;
            font-size: 24px; /* Adjust the size as needed */
            background: transparent;
            border: none;
            padding: 0;
        }

        .nav .toggle .bar {
            display: block;
            width: 25px; /* Adjust the width as needed */
            height: 3px; /* Adjust the height as needed */
            background: #fff; /* Color of the lines */
            margin: 5px 0; /* Space between lines */
            transition: all 0.3s ease;
        }

        .nav .toggle.open .bar:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }

        .nav .toggle.open .bar:nth-child(2) {
            opacity: 0;
        }

        .nav .toggle.open .bar:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }

        @media (max-width: 768px) {
            .nav .menu {
                display: none;
                flex-direction: column;
                text-align: center;
            }

            .nav .menu.show {
                display: flex;
            }

            .nav .toggle {
                display: block;
            }
        }

        .showcase {
            padding: 100px 0;
            text-align: center;
            background: url('background-image.jpg') no-repeat center center/cover;
            color: #fff;
        }

        .showcase h2 {
            font-size: 3em;
            margin-bottom: 20px;
            font-weight: 300;
            animation: fadeInUp 1s ease-in-out;
        }

        .showcase a {
            display: inline-block;
            background: #004d40;
            color: #fff;
            padding: 12px 25px;
            text-transform: uppercase;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            transition: background 0.3s ease;
            animation: fadeInUp 1.5s ease-in-out;
        }

        .showcase a:hover {
            background: #00796b;
        }

        .services,
        .skills {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .services div,
        .skills .skill-set div {
            flex: 1 1 300px;
            max-width: 300px;
            padding: 20px;
            background: #ffffff;
            margin: 10px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
            text-align: center;
        }

        .services div:hover,
        .skills .skill-set div:hover {
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
        }

        .services div i,
        .skills .skill-set div i {
            font-size: 2em;
            margin-bottom: 10px;
            color: #00796b;
        }

        .about {
            text-align: left;
            padding: 30px;
            margin: 40px 0;
            background: #ffffff;
        }

        .about a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background: #004d40;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            text-transform: uppercase;
            transition: background 0.3s ease;
        }

        .about a:hover {
            background: #00796b;
        }

        .skills {
            text-align: center;
            margin: 40px 0;
        }

        .skills h2 {
            margin-bottom: 20px;
        }

        .skills .skill-set {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
        }

        .skills .skill-set div {
            background: #004d40;
            color: #fff;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 5px;
            font-size: 1em;
            text-transform: uppercase;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
            transition: box-shadow 0.3s ease;
        }

        .skills .skill-set div:hover {
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
        }

        .skills .skill-set div i {
            font-size: 1.5em;
            margin-right: 8px;
        }

        .contact {
            text-align: center;
            margin: 40px 0;
        }

        .contact a {
            display: inline-block;
            margin: 10px;
            padding: 12px 25px;
            background: #004d40;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            text-transform: uppercase;
            transition: background 0.3s ease;
        }

        .contact a:hover {
            background: #00796b;
        }

        .contact a i {
            margin-right: 8px;
        }

        .footer {
            background: #004d40;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .content {
            padding-top: 120px; /* Adjust based on the combined height of your header and nav */
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="container">
            <h1>YUMVAGUSENGA Patrick</h1>
        </div>
    </header>

    <nav class="nav">
        <div class="container">
            <div class="toggle" onclick="toggleMenu()">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <ul class="menu">
                <li><a href="#home"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#about"><i class="fas fa-user"></i> About</a></li>
                <li><a href="#skills"><i class="fas fa-cogs"></i> Skills</a></li>
                <li><a href="#contact"><i class="fas fa-envelope"></i> Hire Me</a></li>
            </ul>
        </div>
    </nav>

    <section class="showcase" id="home">
        <div class="container shadow" style="margin-top: -70px;">
            <h2 class="text-dark">Welcome to My Profile</h2>
            <a href="#contact">HIRE Me</a>
            <br><br>
        </div>
    </section>

    <section class="content shadow" style="margin-top: -190px;">
        <div class="services">
        <div>
    <i class="fas fa-laptop-code"></i>
    <h3>Web Development</h3>
    <p>Creating responsive and user-friendly websites using modern tools and technologies. I focus on delivering efficient solutions that meet client needs.</p>
</div>
<div>
    <i class="fas fa-lightbulb"></i>
    <h3>Innovation</h3>
    <p>Leveraging creativity and technical skills to build innovative web applications that enhance user experience and functionality.</p>
</div>
<div>
    <i class="fas fa-check-circle"></i>
    <h3>Success</h3>
    <p>Dedicated to delivering high-quality work that meets the highest standards. My goal is to provide solutions that help clients achieve their objectives seamlessly.</p>
</div>
        </div>
<center>
        <div class="container shadow" id="about">
            <h2>About Me</h2>
            <p>I am Yumvagusesenga Patrick, a web developer with a passion for creating websites that are easy to use and work well on any device. I have experience using modern tools to build web applications that meet the needs of clients. My goal is to deliver efficient and user-friendly solutions that help people get things done easily.</p>
            <a href="MYRESUME.pdf" class="btn btn-primary" target="_blank">View My CV</a>
            <br><br>
        </div>

      </center>
    <section class="skills" id="skills">
        <div class="container shadow">
            <h2>My Skills</h2>
            <div class="skill-set">
                <div><i class="fab fa-html5"></i> HTML5</div>
                <div><i class="fab fa-css3-alt"></i> CSS3</div>
                <div><i class="fab fa-js"></i> JavaScript</div>
                <div><i class="fab fa-php"></i> PHP</div>
                <div><i class="fab fa-laravel"></i> Laravel</div>
                <div><i class="fas fa-database"></i> MySQL</div>
                <div><i class="fab fa-bootstrap"></i> Bootstrap</div>
                <div><i class="fab fa-react"></i> React</div>
                <div><i class="fab fa-git"></i> Git</div>
                <div><i class="fab fa-node"></i> Node.js</div>
            </div>
        </div>
    </section>

        <div class="container shadow contact" id="contact">
            <h2>Contact Me</h2>
            <a href="mailto:yumvagusengapatrick14@gmail.com"><i class="fas fa-envelope"></i> Email Me</a>
<a href="tel:+250781099825"><i class="fas fa-phone"></i> Call Me</a>
<a href="https://wa.me/+250781099825"><i class="fab fa-whatsapp"></i> WhatsApp Me</a>


        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 YUMVAGUSENGA Patrick. All Rights Reserved.</p>
    </footer>

    <script>
        function toggleMenu() {
            const menu = document.querySelector('.menu');
            const toggle = document.querySelector('.toggle');
            menu.classList.toggle('show');
            toggle.classList.toggle('open');
        }
    </script>
</body>

</html>
 <td>
                                        <input type="text" name="qty" value="<?php echo $dd['quantity'] ?>" hidden>
                                        <?php echo number_format($dd['quantity'], 0, '.', ','); ?>
                                    </td>
                                    <td><?php echo $dd['date_time'] ?></td>
                                    <input type="text" name="iddd" value="<?php echo $dd['cechid'] ?>" hidden>
                                    <td>
                                        <!-- <?php
                                        // if ($dd['status'] == "pending") {
                                        //     ?> -->
                                            <!-- <a hidden href="updatestockrequest.php?pname=<?php echo $dd['productname'] ?>&quantity=<?php echo $dd['quantity'] ?>&cechid=<?php echo $dd['cechid'] ?>" class="btn btn-primary">
                                                <i class='fa fa-edit'></i> <?php echo $lang['edit'] ?>
                                            </a>
                                            <button hidden type="button" class="btn btn-danger" onclick="showPopup2('<?php echo $dd['cechid'] ?>', '<?php echo $dd['productname'] ?>')">
                                                <i class="fa fa-trash"></i> <?php echo $lang['delete'] ?>
                                            </button> -->
                                            <?php
                                        // } else {
                                        //     if ($dd['status'] == "Accepted") {
                                        //         ?>
                                                <!-- <p class="text-success"><?php echo $lang['acc'] ?></p> -->
                                                <?php
                                            // } else {
                                                ?>
                                                <!-- <p class="text-danger"><?php echo $lang['re'] ?></p> -->
                                                <?php
                                        //     }
                                        // }
                                        ?>
                                    </td>