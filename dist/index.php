<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>K Undefine</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700');
        @import url('https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i');
    </style>

    <link rel="icon" href="assets/img/favicon.png" type="image/png">
</head>
<body>

    <div class="preloader" id="preloader">
        <div id="linebar" class="linebar"></div>
        <div class="spinloader-fixed-right">
            <div class="spinloader"></div>
        </div>
        <div id="preloader-overlap" class="overlap">
            <span id="preloader-overlap-close" class="close">Close the Loader...</span>
        </div>
    </div>
    <div class="preloadergap" style="margin-bottom: 20px"></div>

    <div class="enable-dark-light">
        <div class="default-color">
            <div id="theme-change" class="switch-ball"></div>
        </div>
    </div>

    <div class="your-name">
        <div class="your-name-con">
            <span>Default name is "Jone Doe"</span>
            <input type="text" id="yourName" placeholder="Enter your name pls">
            <button id="yourNameSubmit">Submit</button>
            <span id="yourNameClose">Close</span>
            <span id="yourNameCloseLong">Close for this day</span>
        </div>
        
    </div>

    <div class="bottom-nav-container">
        <nav id="bottomNav">
            <ul>
                <li><a href="#home" class="spylink active">Home</a></li>
                <li><a href="#about" class="spylink">About</a></li>
                <li><a href="#portfolio" class="spylink">Portfolio</a></li>
                <li><a href="#contact" class="spylink">Contact</a></li>
            </ul>
        </nav>
        <div id="toggleNav" class="toggleNav">
            <div class="dotline"></div>
            <div class="dotline"></div>
            <div class="dotline"></div>
        </div>
        <div id="navOverlap"></div>
    </div>

    <section id="home" class="section homesection">
        <div class="home-section-container container">
            <div class="commonHeadingTitle" secId="home">
                <div class="line-design"></div>
                <h1 class="headingText">Home</h1>
            </div>

            <div class="home-content content">
                <div class="logo">
					<svg version="1.1" id="logoSvg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 103 51.5" style="enable-background:new 0 0 103 51.5;" xml:space="preserve">
						<path class="logoPath" d="M51.9,7.8h13.7v23.8c0,9.4,7.6,17,16.9,17s16.9-7.6,16.9-17V2.9h-5v28.8c0,6.6-5.4,12-12,12
						c-6.6,0-12-5.4-12-12V2.9H51.9c-3.4,0-6.5,1.3-8.9,3.7L8.5,41.2V2.9h-5v41.9c0,1.6,1.1,3.1,2.8,3.4c1.2,0.3,2.4-0.2,3.3-1.1
						l16.6-16.7l9.6,14.1c2.4,2.3,5.5,3.6,8.8,3.6h18.5l-4.7-5H44.6c-2,0-3.9-0.8-5.4-2.2l-0.1-0.2L29.7,27l16.8-16.9
						C48,8.6,49.9,7.8,51.9,7.8z"/>
					</svg>
                    <div class="info">
                        <p>Hello <span id="username">Jone Doe</span> and Welcome to mySite</p>
                    </div>
                </div>
                <div class="home-left-relative-content left-relative-content">
                    <h1>mySiteMadeWith</h1>
                    <ul>
                        <li>No BootStrap</li>
                        <li>No Jquery</li>
                        <li>No Plugin</li>
                        <li>No Icon</li>
                        <li>No Wordpress</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section id="about" class="section">
        <div class="about-section-container container">
            <div class="commonHeadingTitle" secId="about">
                <div class="line-design"></div>
                <h1 class="headingText">About</h1>
            </div>

            <div class="about-content content">
                <div class="my-skill-con">
                    <div class="my-skill-title">
                        <h1>mySkill</h1>
                    </div>
                    <div class="my-skill">
                        <p>html</p>
                        <p>html5</p>
                        <p>css</p>
                        <p>css3</p>
                        <p>javascript</p>
                        <p>php</p>
                        <p>mysql</p>
                        <p>wordpress</p>
                        <p>nodejs</p>
                        <p>Vue js</p>
                        <p>Angular js</p>
                        <p>Rect js</p>
                        <p>Express</p>
                        <p>Webpack</p>
                    </div>
                </div>
                <div class="about-left-relative-content left-relative-content">
                    <h1>WhoAmI?</h1>
                    <p>I don’t know who I am!!! But I really like the web world. I like it very much. I like the fornt display of the web and also the complex backend staff that under going and making all the connectivity with server and database.</p>
                </div>
            </div>
        </div>
    </section>


    <section id="portfolio" class="section">
        <div class="portfolio-section-container container">
            <div class="commonHeadingTitle" secId="portfolio">
                <div class="line-design"></div>
                <h1 class="headingText">Portfolio</h1>
            </div>

            <div class="all-portfolio">
                <div class="single-portfolio">
                    <div class="thumbnail" style="background-image: url(assets/img/1.jpg);">

                    </div>
                    <div class="description">
                        <h4>Simple Title</h4>
                        <a href="#" target="_blank">https://www.portfolio.com/one</a>
                    </div>
                </div>
                <div class="single-portfolio">
                    <div class="thumbnail" style="background-image: url(assets/img/2.jpg);">

                    </div>
                    <div class="description">
                        <h4>Simple Title</h4>
                        <a href="#" target="_blank">https://www.portfolio.com/two</a>
                    </div>
                </div>
                <div class="single-portfolio">
                    <div class="thumbnail" style="background-image: url(assets/img/3.jpg);">

                    </div>
                    <div class="description">
                        <h4>Simple Title</h4>
                        <a href="#" target="_blank">https://www.portfolio.com/two</a>
                    </div>
                </div>
                <div class="single-portfolio">
                    <div class="thumbnail" style="background-image: url(assets/img/4.jpg);">

                    </div>
                    <div class="description">
                        <h4>Simple Title</h4>
                        <a href="#" target="_blank">https://www.portfolio.com/one</a>
                    </div>
                </div>
                <div class="single-portfolio">
                    <div class="thumbnail" style="background-image: url(assets/img/5.jpg);">

                    </div>
                    <div class="description">
                        <h4>Simple Title</h4>
                        <a href="#" target="_blank">https://www.portfolio.com/twohttps://www.portfolio.com/twohttps://www.portfolio.com/twohttps://www.portfolio.com/two</a>
                    </div>
                </div>
                <div class="single-portfolio">
                    <div class="thumbnail" style="background-image: url(assets/img/1.jpg);">

                    </div>
                    <div class="description">
                        <h4>Simple Title</h4>
                        <a href="www.link.com" target="_blank">https://www.portfolio.com/two</a>
                    </div>
                </div>
                <div class="single-portfolio">
                    <div class="thumbnail" style="background-image: url(assets/img/4.jpg);">

                    </div>
                    <div class="description">
                        <h4>Simple Title</h4>
                        <a href="#" target="_blank">https://www.portfolio.com/one</a>
                    </div>
                </div>
                <div class="single-portfolio">
                    <div class="thumbnail" style="background-image: url(assets/img/4.jpg);">

                    </div>
                    <div class="description">
                        <h4>Simple Title</h4>
                        <a href="#" target="_blank">https://www.portfolio.com/one</a>
                    </div>
                </div>
                <div class="single-portfolio">
                    <div class="thumbnail" style="background-image: url(assets/img/1.jpg);">

                    </div>
                    <div class="description">
                        <h4>Simple Title</h4>
                        <a href="#" target="_blank">https://www.portfolio.com/one</a>
                    </div>
                </div>
                <div class="single-portfolio">
                    <div class="thumbnail" style="background-image: url(assets/img/2.jpg);">

                    </div>
                    <div class="description">
                        <h4>Simple Title</h4>
                        <a href="#" target="_blank">https://www.portfolio.com/two</a>
                    </div>
                </div>
                <div class="single-portfolio">
                    <div class="thumbnail" style="background-image: url(assets/img/3.jpg);">

                    </div>
                    <div class="description">
                        <h4>Simple Title</h4>
                        <a href="#" target="_blank">https://www.portfolio.com/two</a>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section id="contact" class="section">
        <div class="contact-section-container container">
            <div class="commonHeadingTitle" secId="contact">
                <div class="line-design"></div>
                <h1 class="headingText">Contact</h1>
            </div>

            <div class="contact-content content">

                <div class="social-media">
                    <div class="social-media-description">
                        <div class="my-social-title">
                            <h1>socialMedia</h1>
                        </div>
                        <div class="socila-media-link">
                            <a href="">Facebook</a>
                            <a href="">Twitter</a>
                            <a href="">Google plus</a>
                            <a href="">Linked In</a>
                        </div>
                    </div>
                </div>

                <div class="contact-left-relative-content left-relative-content">
                    <div class="success">Your message has been sent</div>
                    <div class="error">Please fullfill all the box</div>
                    <h1>sendYourMessage</h1>
                    <div class="send-message">
                        <div class="send-message-name">
                            <input id="mailerName" type="text" placeholder="Your Name">
                        </div>
                        <div class="send-message-text">
                            <textarea name="" id="mailerMessage" placeholder="Your Message"></textarea>
                        </div>
                        <div class="send-message-submit">
                            <button id="sendMail">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="bundle.js"></script>

</body>
</html>