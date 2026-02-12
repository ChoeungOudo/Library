<!DOCTYPE HTML>
<html>
<head>
    <title>Massively</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>">
    <noscript>
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/noscript.css')); ?>">
    </noscript>

    <!-- FIX IMAGE SIZE -->
   <style>
.story-image {
    width: 100%;
    height: 260px;
    overflow: hidden;
}
.story-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* 👇 FIX CONTACT VISIBILITY */
#contact {
    background: #ffffff;
    color: #000000;
    padding: 60px 20px;
}

#contact h2,
#contact h3,
#contact p {
    color: #000000;
}

.contact-form input,
.contact-form textarea {
    background: #f4f4f4;
    color: #000;
}
</style>

</head>

<body class="is-preload">

<div id="wrapper" class="fade-in">

    <!-- Intro -->
    <div id="intro">
        <h1>Online<br />Library</h1>
        <p>Simple Laravel project using Massively template</p>
        <ul class="actions">
            <li><a href="#main" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
        </ul>
    </div>

    <!-- Header -->
    <header id="header">
        <a href="/" class="logo">Library</a>
    </header>

    <!-- Nav -->
    <nav id="nav">
        <ul class="links">
            <li class="active"><a href="/">Home</a></li>
        </ul>
    </nav>

    <!-- Main -->
    <div id="main">

        <!-- Featured Story -->
        <article class="post featured">
            <header class="major">
                <span class="date">Story 1</span>
                <h2><a href="/story/1">The book of the National Parks</a></h2>
                <p>Robert Stering Yard</p>
            </header>

            <a href="/story/1" class="image main">
                <div class="story-image">
                    <img src="<?php echo e(asset('images/pic01.jpg')); ?>" alt="Laravel Book">
                </div>
            </a>

            <ul class="actions special">
                <li><a href="/story/1" class="button large">Full Story</a></li>
            </ul>
        </article>

        <!-- Posts -->
        <section class="posts">

            <article>
                <header>
                    <span class="date">Story 2</span>
                    <h2><a href="/story/2">Modern ships of war</a></h2>
                    <p>Sir Edward J. Reed and Edward Simpson </p>
                </header>
                <a href="/story/2" class="image fit">
                    <div class="story-image">
                        <img src="<?php echo e(asset('images/pic02.jpg')); ?>" alt="">
                    </div>
                </a>
                <p>Build dynamic websites using PHP.</p>
                <ul class="actions special">
                    <li><a href="/story/2" class="button">Full Story</a></li>
                </ul>
            </article>

            <article>
                <header>
                    <span class="date">Story 3</span>
                    <h2><a href="/story/3">The Natural History of Pliny, Volume 2 (of 6) </a></h2>
                    <P> the Elder Pliny</P>
                </header>
                <a href="/story/3" class="image fit">
                    <div class="story-image">
                        <img src="<?php echo e(asset('images/pic03.jpg')); ?>" alt="">
                    </div>
                </a>
                <p>Understand HTML, CSS, and layouts.</p>
                <ul class="actions special">
                    <li><a href="/story/3" class="button">Full Story</a></li>
                </ul>
            </article>

            <article>
                <header>
                    <span class="date">Story 4</span>
                    <h2><a href="/story/4">ohn Deere's Steel Plow</a></h2>
                    <p>Edward C. Kendall </p>
                </header>
                <a href="/story/4" class="image fit">
                    <div class="story-image">
                        <img src="<?php echo e(asset('images/pic04.jpg')); ?>" alt="">
                    </div>
                </a>
                <p>Write readable and maintainable code.</p>
                <ul class="actions special">
                    <li><a href="/story/4" class="button">Full Story</a></li>
                </ul>
            </article>

            <article>
                <header>
                    <span class="date">Story 5</span>
                    <h2><a href="/story/5">Origin of Cultivated Plants</a></h2>
                      <p>Alphonse de Candolle</p>
                </header>
                <a href="/story/5" class="image fit">
                    <div class="story-image">
                        <img src="<?php echo e(asset('images/pic05.jpg')); ?>" alt="">
                    </div>
                </a>
                <p>Learn the core of JavaScript.</p>
                <ul class="actions special">
                    <li><a href="/story/5" class="button">Full Story</a></li>
                </ul>
            </article>

            <article>
                <header>
                    <span class="date">Story 6</span>
                    <h2><a href="/story/6">Handbook of Birmingham </a></h2>
                      <p>British Association for the Advancement of Science</p>
                </header>
                <a href="/story/6" class="image fit">
                    <div class="story-image">
                        <img src="<?php echo e(asset('images/pic06.jpg')); ?>" alt="">
                    </div>
                </a>
                <p>Design better user experiences.</p>
                <ul class="actions special">
                    <li><a href="/story/6" class="button">Full Story</a></li>
                </ul>
            </article>

            <article>
                <header>
                    <span class="date">Story 7</span>
                    <h2><a href="/story/7">De Re Metallica, Translated from the First Latin Edition of 1556 </a></h2>
                    <p>Georg Agricola</p>
                </header>
                <a href="/story/7" class="image fit">
                    <div class="story-image">
                        <img src="<?php echo e(asset('images/pic07.jpg')); ?>" alt="">
                    </div>
                </a>
                <p>Free public-domain books online.</p>
                <ul class="actions special">
                    <li><a href="/story/7" class="button">Full Story</a></li>
                </ul>
            </article>

            <article>
                <header>
                    <span class="date">Story 8</span>
                    <h2><a href="/story/7">Encyclopaedia Britannica, 11th Edition, "Magnetite" to "Malt"</a></h2>
                    <p>Various</p>
                </header>
                <a href="/story/7" class="image fit">
                    <div class="story-image">
                        <img src="<?php echo e(asset('images/pic08.jpg')); ?>" alt="">
                    </div>
                </a>
                <p>Free public-domain books online.</p>
                <ul class="actions special">
                    <li><a href="/story/7" class="button">Full Story</a></li>
                </ul>
            </article>
<article>
                <header>
                    <span class="date">Story 9</span>
                    <h2><a href="/story/7">The Voyage of the Beagle</a></h2>
                    <p>Charles Darwin</p>
                </header>
                <a href="/story/7" class="image fit">
                    <div class="story-image">
                        <img src="<?php echo e(asset('images/pic09.jpg')); ?>" alt="">
                    </div>
                </a>
                <p>Free public-domain books online.</p>
                <ul class="actions special">
                    <li><a href="/story/7" class="button">Full Story</a></li>
                </ul>
            </article>
<article>
    <header>
        <span class="date">Story 10</span>
        <h2><a href="/story/10">Soils and Men</a></h2>
        <p>Hugh Hammond Bennett</p>
    </header>
    <a href="/story/10" class="image fit">
        <div class="story-image">
            <img src="<?php echo e(asset('images/pic10.jpg')); ?>" alt="">
        </div>
    </a>
    <p>Explores soil conservation and its importance to civilization.</p>
    <ul class="actions special">
        <li><a href="/story/10" class="button">Full Story</a></li>
    </ul>
</article>

<article>
    <header>
        <span class="date">Story 11</span>
        <h2><a href="/story/11">Manures and the Principles of Manuring</a></h2>
        <p>Charles Morton Aikman</p>
    </header>
    <a href="/story/11" class="image fit">
        <div class="story-image">
            <img src="<?php echo e(asset('images/pic11.jpg')); ?>" alt="">
        </div>
    </a>
    <p>Scientific explanation of fertilizers and soil nutrients.</p>
    <ul class="actions special">
        <li><a href="/story/11" class="button">Full Story</a></li>
    </ul>
</article>

<article>
    <header>
        <span class="date">Story 12</span>
        <h2><a href="/story/12">The Soil</a></h2>
        <p>Milton Whitney</p>
    </header>
    <a href="/story/12" class="image fit">
        <div class="story-image">
            <img src="<?php echo e(asset('images/pic12.jpg')); ?>" alt="">
        </div>
    </a>
    <p>Fundamental principles of soil science and farming.</p>
    <ul class="actions special">
        <li><a href="/story/12" class="button">Full Story</a></li>
    </ul>
</article>

<article>
    <header>
        <span class="date">Story 13</span>
        <h2><a href="/story/13">Elements of Agriculture</a></h2>
        <p>George E. Morrow</p>
    </header>
    <a href="/story/13" class="image fit">
        <div class="story-image">
            <img src="<?php echo e(asset('images/pic13.jpg')); ?>" alt="">
        </div>
    </a>
    <p>Educational guide to crops, soil, and farm management.</p>
    <ul class="actions special">
        <li><a href="/story/13" class="button">Full Story</a></li>
    </ul>
</article>

<article>
    <header>
        <span class="date">Story 14</span>
        <h2><a href="/story/14">Farm Drainage</a></h2>
        <p>Henry Flagg French</p>
    </header>
    <a href="/story/14" class="image fit">
        <div class="story-image">
            <img src="<?php echo e(asset('images/pic14.jpg')); ?>" alt="">
        </div>
    </a>
    <p>Improving soil productivity through drainage systems.</p>
    <ul class="actions special">
        <li><a href="/story/14" class="button">Full Story</a></li>
    </ul>
</article>

<article>
    <header>
        <span class="date">Story 15</span>
        <h2><a href="/story/15">Rural Hygiene</a></h2>
        <p>Henry N. Ogden</p>
    </header>
    <a href="/story/15" class="image fit">
        <div class="story-image">
            <img src="<?php echo e(asset('images/pic15.jpg')); ?>" alt="">
        </div>
    </a>
    <p>Health, sanitation, and environment in rural life.</p>
    <ul class="actions special">
        <li><a href="/story/15" class="button">Full Story</a></li>
    </ul>
</article>

<article>
    <header>
        <span class="date">Story 16</span>
        <h2><a href="/story/16">The Farmer’s Business Handbook</a></h2>
        <p>Isaac Phillips Roberts</p>
    </header>
    <a href="/story/16" class="image fit">
        <div class="story-image">
            <img src="<?php echo e(asset('images/pic16.jpg')); ?>" alt="">
        </div>
    </a>
    <p>Managing farms with business and economic principles.</p>
    <ul class="actions special">
        <li><a href="/story/16" class="button">Full Story</a></li>
    </ul>
</article>

<article>
    <header>
        <span class="date">Story 17</span>
        <h2><a href="/story/17">Agriculture for Beginners</a></h2>
        <p>Charles William Burkett</p>
    </header>
    <a href="/story/17" class="image fit">
        <div class="story-image">
            <img src="<?php echo e(asset('images/pic17.jpg')); ?>" alt="">
        </div>
    </a>
    <p>Introductory guide to farming and soil management.</p>
    <ul class="actions special">
        <li><a href="/story/17" class="button">Full Story</a></li>
    </ul>
</article>

<article>
    <header>
        <span class="date">Story 18</span>
        <h2><a href="/story/18">The Book of Farm-Buildings</a></h2>
        <p>Henry Stephens</p>
    </header>
    <a href="/story/18" class="image fit">
        <div class="story-image">
            <img src="<?php echo e(asset('images/pic18.jpg')); ?>" alt="">
        </div>
    </a>
    <p>Design and construction of efficient farm buildings.</p>
    <ul class="actions special">
        <li><a href="/story/18" class="button">Full Story</a></li>
    </ul>
</article>

<article>
    <header>
        <span class="date">Story 19</span>
        <h2><a href="/story/19">Practical Agriculture</a></h2>
        <p>John McLennan</p>
    </header>
    <a href="/story/19" class="image fit">
        <div class="story-image">
            <img src="<?php echo e(asset('images/pic19.jpg')); ?>" alt="">
        </div>
    </a>
    <p>Hands-on farming practices and crop management.</p>
    <ul class="actions special">
        <li><a href="/story/19" class="button">Full Story</a></li>
    </ul>
</article>

<article>
    <header>
        <span class="date">Story 20</span>
        <h2><a href="/story/20">The Chemistry of the Farm</a></h2>
        <p>R. Warington</p>
    </header>
    <a href="/story/20" class="image fit">
        <div class="story-image">
            <img src="<?php echo e(asset('images/pic20.jpg')); ?>" alt="">
        </div>
    </a>
    <p>Chemical processes behind soil fertility and crops.</p>
    <ul class="actions special">
        <li><a href="/story/20" class="button">Full Story</a></li>
    </ul>
</article>



        </section>

    </div>

    <!-- Footer -->
    <div id="copyright">
        <ul>
            <li>&copy; 2026</li>
            <li>Design: Choeung Oudom</li>
        </ul>
    </div>

</div>

<!-- Scripts -->
<script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery.scrollex.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery.scrolly.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/browser.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/breakpoints.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/util.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
 

 <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="section-title">
                <h2>IF THERE ANY PROBLEM</h2>
                <p>Please Contact us in Email</p>
            </div>
            <div class="contact-container">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h3>Email</h3>
                            <p>Choeungoudom@gmail.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h3>Phone</h3>
                            <p>(885) 123-4567</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h3>Location</h3>
                            <p>Phnom Penh</p>
                        </div>
                    </div>
                </div>
                <form class="contact-form">
                    <input type="text" placeholder="Your Name" required>
                    <input type="email" placeholder="Your Email" required>
                    <input type="text" placeholder="Subject" required>
                    <textarea placeholder="Your Message" required></textarea>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <a href="#" class="logo" style="color: white;">LIBRARY</a>
            <div class="social-links">
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <p class="copyright" style="color: white;">© 24/01/2026 Choeung Oudom.</p>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const menuBtn = document.getElementById('menuBtn');
        const navLinks = document.getElementById('navLinks');
        
        menuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
        
        // Close menu when clicking a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
            });
        });
        
        // Simple form submission
        document.querySelector('.contact-form').addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Thank you for your message! I\'ll get back to you soon.');
            e.target.reset();
        });
    </script>
</body>
</html><?php /**PATH C:\breeze-2.x\breeze-2.x\myproject\resources\views/home.blade.php ENDPATH**/ ?>