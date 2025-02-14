<?php include('header.php'); ?>

<!-- Hero Section Start -->
<div class="hero hero-video">
    <!-- Video Start -->
    <div class="hero-bg-video">
        <!-- Selfhosted Video Start -->
        <!-- <video autoplay muted loop id="myVideo"><source src="images/hero-bg-video.mp4" type="video/mp4"></video> -->
        <video autoplay muted loop id="myVideo">
            <source src="images/videobg.mp4" type="video/mp4">
        </video>

        <!-- Selfhosted Video End -->

        <!-- Youtube Video Start -->
        <!-- <div id="herovideo" class="player" data-property="{videoURL:'74DWwSxsVSs',containment:'.hero-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
        <!-- Youtube Video End -->
    </div>
    <!-- Video End -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Hero Content Start -->
                <div class="hero-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Experience God’s Word at Noonday Church</h3>
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Living in God’s Grace, Sharing His Love, and Serving with Purpose</h1>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Join us for live-streamed sermons every Sunday. Stay connected with our community and deepen your faith through God’s word, no matter where you are.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Hero Content Body Start -->
                    <div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s">
                        <a href="https://www.youtube.com/@noondaysun.church" class="btn-default"><span>Watch Live Sermons</span></a>
                        <a href="#" class="btn-default btn-highlighted"><span>Donate Now</span></a>
                    </div>
                    <!-- Hero Content Body End -->
                </div>
                <!-- Hero Content End -->
            </div>
        </div>
    </div>
    <div class="down-arrow">
        <a href="#home-about"><i class="fa-solid fa-arrow-down-long"></i></a>
    </div>
</div>
<!-- Hero Section End -->

<!-- Our Scrolling Ticker Section Start -->
<div class="our-scrolling-ticker">
    <!-- Scrolling Ticker Start -->
    <div class="scrolling-ticker-box">
        <div class="scrolling-content">
            <span><img src="images/icon-sparkles.svg" alt="">Live by Faith, Serve with Love</span>
            <span><img src="images/icon-sparkles.svg" alt="">Love Your Neighbor as Yourself</span>
            <span><img src="images/icon-sparkles.svg" alt="">Be the Light in the World</span>
            <span><img src="images/icon-sparkles.svg" alt="">Walk Humbly with God</span>
            <span><img src="images/icon-sparkles.svg" alt="">Spread Kindness, Share Grace</span>
        </div>

        <div class="scrolling-content">
            <span><img src="images/icon-sparkles.svg" alt="">Live by Faith, Serve with Love</span>
            <span><img src="images/icon-sparkles.svg" alt="">Love Your Neighbor as Yourself</span>
            <span><img src="images/icon-sparkles.svg" alt="">Be the Light in the World</span>
            <span><img src="images/icon-sparkles.svg" alt="">Walk Humbly with God</span>
            <span><img src="images/icon-sparkles.svg" alt="">Spread Kindness, Share Grace</span>
        </div>
    </div>
</div>
<!-- Scrolling Ticker Section End -->
<div class="our-sermons">
    <div class="container">
        <div class="row section-row">
            <div class="section-title">
                <h3 class="wow fadeInUp">Watch Live</h3>
                <h2 class="text-anime-style-2" data-cursor="-opaque">Playing <span>Live</span></h2>
            </div>
        </div>

        <div class="row">
            <!-- Sermon 1 -->
            <div class="col-lg-4 col-md-6 mx-auto" style="text-align: center;width: 70%;">
                <div class="sermons-item wow fadeInUp" onclick="openLiveStream()">
                    <div class="sermons-image">
                        <figure>
                            <img src="images/thumbnail.jpg" alt="Live Stream">
                        </figure>
                    </div>
                    <div class="sermons-body">
                        <h2>Watch Our Live Stream</h2>
                    </div>
                </div>
            </div>

            <!-- Popup Modal Structure -->
            <div id="popupModal" class="popup-modal">
                <div class="popup-content">
                    <span class="close-btn" onclick="closePopup()">&times;</span>
                    <div id="popupVideoContainer"></div>
                </div>
            </div>
            <!-- UUzeTZAD2_HlrdG4BZr2J7wA -->
            <script>
                const channelId = "UUzeTZAD2_HlrdG4BZr2J7wA";
                const liveStreamUrl = `https://www.youtube.com/embed/live_stream?channel=${channelId}&autoplay=1`;
                let loadTimeout;

                function openLiveStream() {
                    // Clear previous content and timeout
                    clearTimeout(loadTimeout);
                    document.getElementById("popupVideoContainer").innerHTML = "";
                    document.getElementById("popupModal").style.display = "flex";

                    // Create the iframe for the live stream
                    const iframe = document.createElement("iframe");
                    iframe.src = liveStreamUrl;
                    iframe.width = "100%";
                    iframe.height = "450";
                    iframe.frameBorder = "0";
                    iframe.allowFullscreen = true;

                    // Append the iframe to the container
                    document.getElementById("popupVideoContainer").appendChild(iframe);

                    // Set a timeout to show the fallback message if the video does not load within 5 seconds
                    loadTimeout = setTimeout(() => {
                        showFallbackMessage();
                    }, 5000);

                    // If the iframe loads successfully, clear the timeout
                    iframe.onload = () => {
                        clearTimeout(loadTimeout);
                    };

                    // If there is an error loading the iframe, show the fallback message
                    iframe.onerror = () => {
                        clearTimeout(loadTimeout);
                        showFallbackMessage();
                    };
                }

                function showFallbackMessage() {
                    const fallbackMessage = `<div id="fallbackMessage">No live streams right now, come back later</div>`;
                    document.getElementById("popupVideoContainer").innerHTML = fallbackMessage;
                }

                function closePopup() {
                    clearTimeout(loadTimeout);
                    document.getElementById("popupVideoContainer").innerHTML = "";
                    document.getElementById("popupModal").style.display = "none";
                }
            </script>
        </div>
    </div>
</div>
<!-- About Us Section Start -->
<div class="about-us" id="home-about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- About Image Start -->
                <div class="about-image">
                    <div class="about-img-1">
                        <figure class="image-anime reveal">
                            <img src="images/about-us-img-1.jpg" alt="Image of a vibrant church community">
                        </figure>
                    </div>

                    <div class="about-img-2">
                        <figure class="image-anime reveal">
                            <img src="images/about-us-img-2.jpg" alt="People worshipping and connecting">
                        </figure>
                    </div>
                </div>
                <!-- About Image End -->
            </div>

            <div class="col-lg-6">
                <!-- About Content Start -->
                <div class="about-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">about us</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Faith, hope, and love in <span>action every day</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">At Noonday Church, we are a vibrant community of believers committed to worship, fellowship, and service. Our mission is to live out God's love, nurture spiritual growth, and create meaningful connections that inspire positive change in the world.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.5s">We welcome people from all walks of life to join our inclusive church family. Together, we grow in faith, support one another, and actively engage in serving our local and global communities.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- About Content List Start -->
                    <div class="about-content-body">
                        <!-- About List Item Start -->
                        <div class="about-list-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="images/icon-about-list-1.svg" alt="Icon representing God's love">
                            </div>
                            <div class="about-list-item-content">
                                <h3>share god's love</h3>
                                <p>We believe in spreading God's love through kindness, compassion, and acts of service, both within our church and out in the world.</p>
                            </div>
                        </div>
                        <!-- About List Item End -->

                        <!-- About List Item Start -->
                        <div class="about-list-item wow fadeInUp" data-wow-delay="0.25s">
                            <div class="icon-box">
                                <img src="images/icon-about-list-2.svg" alt="Icon symbolizing spiritual growth">
                            </div>
                            <div class="about-list-item-content">
                                <h3>foster spiritual growth</h3>
                                <p>Through Bible studies, worship services, and discipleship programs, we offer opportunities for everyone to deepen their relationship with God.</p>
                            </div>
                        </div>
                        <!-- About List Item End -->

                        <!-- About List Item Start -->
                        <div class="about-list-item wow fadeInUp" data-wow-delay="0.5s">
                            <div class="icon-box">
                                <img src="images/icon-about-list-3.svg" alt="Icon showing community service">
                            </div>
                            <div class="about-list-item-content">
                                <h3>serve our community</h3>
                                <p>Our church is dedicated to making a real difference by supporting local charities, hosting outreach programs, and being a place of hope for those in need.</p>
                            </div>
                        </div>
                        <!-- About List Item End -->

                        <!-- About List Item Start -->
                        <div class="about-list-item wow fadeInUp" data-wow-delay="0.75s">
                            <div class="icon-box">
                                <img src="images/icon-about-list-4.svg" alt="Icon representing strong relationships">
                            </div>
                            <div class="about-list-item-content">
                                <h3>build strong relationships</h3>
                                <p>We believe in the power of fellowship. Through small groups, events, and social activities, we foster deep, lasting relationships within our community.</p>
                            </div>
                        </div>
                        <!-- About List Item End -->
                    </div>
                    <!-- About Content List End -->

                    <!-- About Us Footer Start -->
                    <!-- <div class="about-us-footer wow fadeInUp" data-wow-delay="1s">
                            <a href="#" class="btn-default">read more about us</a>
                        </div> -->
                    <!-- About Us Footer End -->
                </div>
                <!-- About Content End -->
            </div>
        </div>
    </div>
</div>
<!-- About Us Section End -->

<!-- Join Worship Section Start -->
<div class="join-worship">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Worship with Us</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">
                        Connect with Us in Real-Time Worship
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s">
                        Be a part of our live worship sessions every <span>week</span> Experience the joy of worship and connect with our vibrant community in real time!

                    </p>
                    <p class="wow fadeInUp" data-wow-delay="0.25s">
                        Experience God’s presence with our community as we gather for inspiring worship and fellowship.
                        Whether you're a first-time visitor or a regular member, we welcome you with open hearts.
                    </p>

                    <p class="wow fadeInUp" data-wow-delay="0.75s">
                        Can't make it in person? Join our live-streamed services online and be part of our worship from anywhere!
                    </p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <!-- Highlighted Worship Item Start -->
                <div class="highlighted-worship-item wow fadeInUp">
                    <!-- Highlighted Worship Featured Image Start -->
                    <div class="highlighted-worship-image">
                        <figure>

                            <img src="images/join-worship-img-1.jpg" alt="Youth Worship Service">

                        </figure>
                    </div>
                    <!-- Highlighted Worship Featured Image End -->

                    <!-- Highlighted Worship Body Start -->
                    <div class="highlighted-worship-body">
                        <!-- Highlighted Worship Content Start -->
                        <div class="highlighted-worship-content">
                            <h3>Youth Worship</h3>
                            <p>Engage teens in worship, fellowship, and spiritual growth.</p>
                        </div>
                        <!-- Highlighted Worship Content End -->
                        <!-- <div class="highlighted-worship-btn">
                            <a href="#" class="readmore-btn"><img src="images/arrow-white.svg" alt="Read more about Youth Worship"></a>
                        </div> -->
                    </div>
                    <!-- Highlighted Worship Body End -->
                </div>
                <!-- Highlighted Worship Item End -->
            </div>
            <div class="col-lg-6">
                <div class="worship-box">
                    <!-- Worship Item Start -->
                    <div class="worship-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Worship Image Start -->
                        <div class="worship-image">
                            <figure>
                                <img src="images/join-worship-img-2.jpg" alt="Children's Worship">
                            </figure>
                        </div>
                        <!-- Worship Image End -->

                        <!-- Worship Body Start -->
                        <div class="worship-body">
                            <!-- Worship Content Start -->
                            <div class="worship-content">
                                <h3>Senior Worship Service</h3>
                                <p>A special service designed for seniors, providing a slower pace and a focus on traditional hymns and scripture readings.</p>
                            </div>
                            <!-- Worship Content End -->

                            <!-- Worship Btn Start -->
                            <!-- <div class="worship-btn">
                                <a href="#" class="readmore-btn"><img src="images/arrow-white.svg" alt="Read more about Children's Worship"></a>
                            </div> -->
                            <!-- Worship Btn End -->
                        </div>
                        <!-- Worship Body End -->
                    </div>
                    <!-- Worship Item End -->

                    <!-- Worship Item Start -->
                    <div class="worship-item wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Worship Image Start -->
                        <div class="worship-image">
                            <figure>
                                <img src="images/join-worship-img-3.jpg" alt="Sunday School Worship">
                            </figure>
                        </div>
                        <!-- Worship Image End -->

                        <!-- Worship Body Start -->
                        <div class="worship-body">
                            <!-- Worship Content Start -->
                            <div class="worship-content">
                                <h3>Healing and Prayer Service</h3>
                                <p>A dedicated service for prayer, healing, and spiritual comfort. A time for individuals to come together and seek God’s presence for physical, emotional, and spiritual healing.</p>
                            </div>
                            <!-- Worship Content End -->

                            <!-- Worship Btn Start -->
                            <!-- <div class="worship-btn">
                                <a href="#" class="readmore-btn"><img src="images/arrow-white.svg" alt="Read more about Sunday School Worship"></a>
                            </div> -->
                            <!-- Worship Btn End -->
                        </div>
                        <!-- Worship Body End -->
                    </div>
                    <!-- Worship Item End -->

                    <!-- Worship Item Start -->
                    <div class="worship-item wow fadeInUp" data-wow-delay="0.75s">
                        <!-- Worship Image Start -->
                        <div class="worship-image">
                            <figure>
                                <img src="images/join-worship-img-4.jpg" alt="Children's Worship">
                            </figure>
                        </div>
                        <!-- Worship Image End -->

                        <!-- Worship Body Start -->
                        <div class="worship-body">
                            <!-- Worship Content Start -->
                            <div class="worship-content">
                                <h3>Contemporary Worship Service</h3>
                                <p>A lively and modern service featuring contemporary Christian music, interactive sermons, and multimedia presentations.</p>
                            </div>
                            <!-- Worship Content End -->

                            <!-- Worship Btn Start -->
                            <!-- <div class="worship-btn">
                                <a href="#" class="readmore-btn"><img src="images/arrow-white.svg" alt="Read more about Children's Worship"></a>
                            </div> -->
                            <!-- Worship Btn End -->
                        </div>
                        <!-- Worship Body End -->
                    </div>
                    <!-- Worship Item End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Join Worship Section End -->
<div class="our-sermons">
    <div class="container">
        <div class="row section-row">
            <div class="section-title">
                <h3 class="wow fadeInUp">Our Sermons</h3>
                <h2 class="text-anime-style-2" data-cursor="-opaque">Our Latest <span>Sermons</span></h2>
            </div>
        </div>

        <div class="row">
            <!-- Sermon 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="sermons-item wow fadeInUp" onclick="openPopup(1)">
                    <div class="sermons-image">
                        <figure>
                            <img src="images/thumbnail.jpg" alt="Sermon 1">
                        </figure>
                    </div>
                    <div class="sermons-body">
                        <h2>Noonday Sun Church</h2>
                    </div>
                </div>
            </div>

            <!-- Sermon 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="sermons-item wow fadeInUp" onclick="openPopup(2)">
                    <div class="sermons-image">
                        <figure>
                            <img src="images/thumbnail.jpg" alt="Sermon 2">
                        </figure>
                    </div>
                    <div class="sermons-body">
                        <h2>Noonday Sun Church</h2>
                    </div>
                </div>
            </div>

            <!-- Sermon 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="sermons-item wow fadeInUp" onclick="openPopup(3)">
                    <div class="sermons-image">
                        <figure>
                            <img src="images/thumbnail.jpg" alt="Sermon 3">
                        </figure>
                    </div>
                    <div class="sermons-body">
                        <h2>Noonday Sun Church</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="our-sermons">
    <div class="container">
        <div class="row section-row">
            <div class="section-title">
                <h3 class="wow fadeInUp">Our Audio</h3>
                <h2 class="text-anime-style-2" data-cursor="-opaque">Our Latest <span>Audio</span></h2>
            </div>
        </div>

        <div class="row">
            <!-- Sermon 1 -->

            <section id="audio-library">

                <div id="audio-section">
                    <!-- Audio containers by title will be dynamically inserted here -->
                </div>

                <style>
                    /* General Styles */
                    #audio-library {
                        padding: 20px;
                        background-color: #FE6035;
                        color: #ff0000;
                        border-radius: 0 0 100px 0;
                    }

                    #audio-library h2 {
                        text-align: center;
                        font-family: Arial, sans-serif;
                        color: #333;
                    }

                    /* Audio Section */
                    #audio-section {
                        display: flex;
                        flex-direction: row;
                        /* Arrange items horizontally */
                        flex-wrap: wrap;
                        /* Allow items to wrap onto the next line */
                        gap: 20px;
                        /* Space between the containers */
                        justify-content: center;
                        /* Center the containers */
                    }

                    /* Audio Container for each title */
                    .audio-container {
                        width: 100%;
                        /* Take full width of the container */
                        max-width: 300px;
                        /* Limit the container width */
                    }

                    .audio-container h3 {
                        font-size: 1.5em;
                        margin-bottom: 15px;
                        text-align: center;
                    }

                    /* Audio Card */
                    .audio-card {
                        border: 1px solid #ddd;
                        border-radius: 8px;
                        padding: 15px;
                        width: 100%;
                        /* Take full width of the container */
                        max-width: 250px;
                        /* Limit the card width for better readability */
                        text-align: center;
                        background-color: #fff;
                        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                        margin-bottom: 15px;
                    }

                    .audio-card h4 {
                        font-size: 1.2em;
                        margin: 10px 0;
                    }

                    .audio-card p {
                        font-size: 0.9em;
                        color: #666;
                        margin: 5px 0 15px;
                    }

                    /* Play Button */
                    .play-button {
                        width: 50px;
                        height: 50px;
                        background-color: #FE6035;
                        border: none;
                        border-radius: 50%;
                        color: white;
                        font-size: 18px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        cursor: pointer;
                        outline: none;
                    }

                    .play-button:hover {
                        background-color: #0056b3;
                    }

                    /* Responsive Design */
                    @media (min-width: 768px) {
                        .audio-container {
                            width: 45%;
                            /* Take up less space on larger screens */
                        }
                    }

                    @media (min-width: 1200px) {
                        .audio-container {
                            width: 30%;
                            /* Take up even less space on very large screens */
                        }
                    }
                </style>

                <script>
                    const apiUrl = "https://cdn.contentful.com/spaces/x1e4ilm46ruv/environments/master/entries?access_token=40E2XFTU7R_6LwUkqKiUTMYRSryfVUw0HkC8JylF8jY";

                    // Fetch and display audio files grouped by title
                    async function fetchAndDisplayAudio() {
                        try {
                            const response = await fetch(apiUrl);
                            const data = await response.json();

                            const audioSection = document.getElementById('audio-section');
                            const assets = data.includes.Asset;

                            // Group items by title
                            const groupedByTitle = {};

                            data.items.forEach(item => {
                                const title = item.fields?.audioTitle || "Untitled";
                                const date = item.fields?.releaseDate || "Unknown Date";
                                const audioId = item.fields.audioFile.sys.id;

                                // Find the audio file URL from the assets array
                                const audioFile = assets.find(asset => asset.sys.id === audioId);
                                const audioUrl = audioFile ? `https:${audioFile.fields.file.url}` : null;

                                if (audioUrl) {
                                    if (!groupedByTitle[title]) {
                                        groupedByTitle[title] = [];
                                    }

                                    // Add the audio item to the corresponding group
                                    groupedByTitle[title].push({
                                        date,
                                        audioUrl
                                    });
                                }
                            });

                            // Create separate containers for each title
                            Object.keys(groupedByTitle).forEach(title => {
                                const container = document.createElement('div');
                                container.classList.add('audio-container');



                                // Create audio cards for each item under the title
                                groupedByTitle[title].forEach(item => {
                                    const audioCard = document.createElement('div');
                                    audioCard.classList.add('audio-card');

                                    const formattedDate = item.date !== "Unknown Date" ? new Date(item.date).toLocaleDateString() : item.date;

                                    // Add content to the card
                                    audioCard.innerHTML = `
                                    <h4>${title}</h4>
                                    <p>Release Date: ${formattedDate}</p>
                                    <button class="play-button">▶</button>
                                  `;

                                    const playButton = audioCard.querySelector('.play-button');
                                    const audio = new Audio(item.audioUrl);

                                    // Play/pause logic for the custom button
                                    playButton.addEventListener('click', () => {
                                        if (audio.paused) {
                                            audio.play();
                                            playButton.textContent = '⏸'; // Change to pause symbol
                                        } else {
                                            audio.pause();
                                            playButton.textContent = '▶'; // Change to play symbol
                                        }
                                    });

                                    // Stop the audio and reset button when audio ends
                                    audio.addEventListener('ended', () => {
                                        playButton.textContent = '▶';
                                    });

                                    container.appendChild(audioCard);
                                });

                                // Append the container for the current title
                                audioSection.appendChild(container);
                            });
                        } catch (error) {
                            console.error("Error fetching audio data:", error);
                        }
                    }

                    // Initialize the fetch on page load
                    document.addEventListener('DOMContentLoaded', fetchAndDisplayAudio);
                </script>
            </section>





        </div>


    </div>
</div>
</div>

<!-- Our Counter Section Start -->
<div class="our-counter">
    <div class="container">
        <div class="row counter-box">
            <div class="col-lg-3 col-md-6">
                <!-- Counter Item Start -->
                <div class="counter-item">
                    <!-- Counter Title Start -->
                    <div class="counter-title">
                        <h2><span class="counter">350</span>+</h2>
                    </div>
                    <!-- Counter Title End -->

                    <!-- Counter Content Start -->
                    <div class="counter-content">
                        <h3>church members</h3>
                        <p>We are blessed to have over 350 active members in our church family, each contributing to our vibrant and welcoming community.</p>
                    </div>
                    <!-- Counter Content End -->
                </div>
                <!-- Counter Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Counter Item Start -->
                <div class="counter-item">
                    <!-- Counter Title Start -->
                    <div class="counter-title">
                        <h2><span class="counter">98</span>+</h2>
                    </div>
                    <!-- Counter Title End -->

                    <!-- Counter Content Start -->
                    <div class="counter-content">
                        <h3>youth retreats</h3>
                        <p>We have hosted over 98 youth retreats, providing young people with opportunities for spiritual growth and fellowship in a faith-centered environment.</p>
                    </div>
                    <!-- Counter Content End -->
                </div>
                <!-- Counter Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Counter Item Start -->
                <div class="counter-item">
                    <!-- Counter Title Start -->
                    <div class="counter-title">
                        <h2><span class="counter">148</span>+</h2>
                    </div>
                    <!-- Counter Title End -->

                    <!-- Counter Content Start -->
                    <div class="counter-content">
                        <h3>community events</h3>
                        <p>We have organized over 148 community events, including outreach programs, charity drives, and social gatherings, fostering connection and service.</p>
                    </div>
                    <!-- Counter Content End -->
                </div>
                <!-- Counter Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Counter Item Start -->
                <div class="counter-item">
                    <!-- Counter Title Start -->
                    <div class="counter-title">
                        <h2><span class="counter">58</span>+</h2>
                    </div>
                    <!-- Counter Title End -->

                    <!-- Counter Content Start -->
                    <div class="counter-content">
                        <h3>christmas concerts</h3>
                        <p>Our annual Christmas concert has been a beloved tradition for 58 years, bringing together the community to celebrate the joy of the season through music and worship.</p>
                    </div>
                    <!-- Counter Content End -->
                </div>
                <!-- Counter Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Counter Section End -->

<!-- Our Mission Section Start -->
<div class="our-mission">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="mission-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our mission</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Our Mission to Serve, <span>Love, and Grow</span></h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Mission Content Body Start -->
                    <div class="mission-content-body">
                        <h3 class="wow fadeInUp" data-wow-delay="0.25s">At Noonday Church, we are committed to sharing God's love, fostering spiritual growth, and serving our Brisbane community with compassion.</h3>
                        <p class="wow fadeInUp" data-wow-delay="0.5s">Rooted in faith and driven by purpose, our mission is to live out the teachings of Jesus Christ by uplifting our neighbors and making a positive impact. Through worship, outreach, and acts of kindness, we aim to build a stronger, more connected community—right here in Brisbane and beyond.</p>
                    </div>
                    <!-- Mission Content Body End -->

                    <!-- Mission Content Footer Start -->
                    <div class="mission-content-footer wow fadeInUp" data-wow-delay="0.75s">
                        <a href="#" class="btn-default">contact us</a>
                    </div>
                    <!-- Mission Content Footer End -->
                </div>
            </div>

            <div class="col-lg-6">
                <!-- Mission Image Start -->
                <div class="mission-image">
                    <!-- Mission Image Start -->
                    <div class="mission-img">
                        <figure class="image-anime reveal">
                            <img src="images/mission-image.jpg" alt="Noonday Church serving the Brisbane community">
                        </figure>
                    </div>
                    <!-- Mission Image End -->

                    <!-- Mission Life Circle Start -->
                    <div class="mission-life-circle">
                        <img src="images/mission-life-circle-img.png" alt="Mission life at Noonday Church">
                    </div>
                    <!-- Mission Life Circle End -->
                </div>
                <!-- Mission Image End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Mission Section End -->

<!-- Our Services Section Start -->
<div class="our-services">
    <div class="container">
        <div class="row section-row">
            <!-- Section Title Start -->
            <div class="section-title">
                <h3 class="wow fadeInUp">services</h3>
                <h2 class="text-anime-style-2" data-cursor="-opaque">Loving God, Helping Others, and Serving the <span>World Together</span></h2>
            </div>
            <!-- Section Title End -->
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp">
                    <!-- Icon Box Start -->
                    <div class="icon-box">
                        <img src="images/icon-service-1.svg" alt="Support groups icon">
                    </div>
                    <!-- Icon Box End -->

                    <!-- Service Body Start -->
                    <div class="service-body">
                        <p>Offering compassionate support for those navigating grief, relationship challenges, and personal struggles. Join our monthly support groups or schedule one-on-one counseling.</p>
                    </div>
                    <!-- Service Body End -->

                    <!-- Service Footer Start -->
                    <div class="service-footer">
                        <div class="service-content">
                            <h3>support groups</h3>
                        </div>
                        <div class="service-btn">
                            <a href="#" class="readmore-btn"><img src="images/arrow-white.svg" alt="Learn more about support groups"></a>
                        </div>
                    </div>
                    <!-- Service Footer End -->
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.25s">
                    <!-- Icon Box Start -->
                    <div class="icon-box">
                        <img src="images/icon-service-2.svg" alt="Special events icon">
                    </div>
                    <!-- Icon Box End -->

                    <!-- Service Body Start -->
                    <div class="service-body">
                        <p>Join us for exciting community events, including holiday services, family picnics, and fundraising activities that bring people together throughout the year.</p>
                    </div>
                    <!-- Service Body End -->

                    <!-- Service Footer Start -->
                    <div class="service-footer">
                        <div class="service-content">
                            <h3>special events</h3>
                        </div>
                        <div class="service-btn">
                            <a href="#" class="readmore-btn"><img src="images/arrow-white.svg" alt="Learn more about special events"></a>
                        </div>
                    </div>
                    <!-- Service Footer End -->
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.5s">
                    <!-- Icon Box Start -->
                    <div class="icon-box">
                        <img src="images/icon-service-3.svg" alt="Online services icon">
                    </div>
                    <!-- Icon Box End -->

                    <!-- Service Body Start -->
                    <div class="service-body">
                        <p>Experience worship online through live-streamed Sunday services, virtual Bible studies, and interactive prayer meetings—wherever you are, you can join in.</p>
                    </div>
                    <!-- Service Body End -->

                    <!-- Service Footer Start -->
                    <div class="service-footer">
                        <div class="service-content">
                            <h3>online services</h3>
                        </div>
                        <div class="service-btn">
                            <a href="#" class="readmore-btn"><img src="images/arrow-white.svg" alt="Learn more about online services"></a>
                        </div>
                    </div>
                    <!-- Service Footer End -->
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.75s">
                    <!-- Icon Box Start -->
                    <div class="icon-box">
                        <img src="images/icon-service-4.svg" alt="Pastoral care icon">
                    </div>
                    <!-- Icon Box End -->

                    <!-- Service Body Start -->
                    <div class="service-body">
                        <p>Receive compassionate pastoral care through personal counseling and visits, offering guidance for spiritual needs and life’s challenges with warmth and understanding.</p>
                    </div>
                    <!-- Service Body End -->

                    <!-- Service Footer Start -->
                    <div class="service-footer">
                        <div class="service-content">
                            <h3>pastoral care</h3>
                        </div>
                        <div class="service-btn">
                            <a href="#" class="readmore-btn"><img src="images/arrow-white.svg" alt="Learn more about pastoral care"></a>
                        </div>
                    </div>
                    <!-- Service Footer End -->
                </div>
                <!-- Service Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Services Section End -->

<!-- Service Ticker Start -->
<div class="service-ticker">
    <div class="scrolling-ticker">
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">
                <span><img src="images/icon-asterisk.svg" alt="">Love God, Love Others</span>
                <span><img src="images/icon-asterisk.svg" alt="">Faith in Action</span>
                <span><img src="images/icon-asterisk.svg" alt="">Serving with Compassion</span>
                <span><img src="images/icon-asterisk.svg" alt="">Building Strong Communities</span>
                <span><img src="images/icon-asterisk.svg" alt="">Hope for All</span>
            </div>

            <div class="scrolling-content">
                <span><img src="images/icon-asterisk.svg" alt="">Spreading God's Love</span>
                <span><img src="images/icon-asterisk.svg" alt="">Worship, Fellowship, Serve</span>
                <span><img src="images/icon-asterisk.svg" alt="">Together in Faith</span>
                <span><img src="images/icon-asterisk.svg" alt="">A Community of Grace</span>
                <span><img src="images/icon-asterisk.svg" alt="">Growing in Christ</span>
            </div>
        </div>
    </div>
</div>
<!-- Service Ticker End -->

<!-- Our Ministries Section Start -->

<!-- Our Ministries Section End -->

<!-- Our Sermons Section Start -->


<!-- Popup Modal Structure -->
<div id="popupModal" class="popup-modal">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopup()">&times;</span>
        <div id="popupVideoContainer">
            <!-- YouTube iframe will be inserted here -->
        </div>
    </div>
</div>
<script>
    function openPopup(index) {
        const videoLinks = [
            "https://www.youtube.com/embed?listType=playlist&list=UUzeTZAD2_HlrdG4BZr2J7wA&index=2",
            "https://www.youtube.com/embed?listType=playlist&list=UUzeTZAD2_HlrdG4BZr2J7wA&index=3",
            "https://www.youtube.com/embed?listType=playlist&list=UUzeTZAD2_HlrdG4BZr2J7wA&index=4"
        ];

        const iframe = `<iframe src="${videoLinks[index - 1]}" width="100%" height="450" frameborder="0" allowfullscreen></iframe>`;
        document.getElementById("popupVideoContainer").innerHTML = iframe;
        document.getElementById("popupModal").style.display = "flex";
    }

    function closePopup() {
        document.getElementById("popupVideoContainer").innerHTML = "";
        document.getElementById("popupModal").style.display = "none";
    }
</script>
<!-- Modal Structure -->

<!-- Our Sermons Section End -->

<!-- Verse Church Section Start -->
<div class="verse-church">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- Verse Church Content Start -->
                <div class="verse-church-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Verse of the Day</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">A Church that Loves <span>God and People.</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">At Noonday Church, we are committed to loving God and serving people. Our community is built on faith, compassion, and the desire to make a meaningful difference in the lives of others. Each day, we reflect on God’s word and embrace its teachings in our daily lives. Join us as we walk in faith and love.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Verse Church Btn Start -->
                    <div class="verse-church-btn wow fadeInUp" data-wow-delay="0.5s">
                        <a href="#" class="btn-default">Donate Now</a>
                    </div>
                    <!-- Verse Church Btn End -->
                </div>
                <!-- Verse Church Content End -->
            </div>
        </div>
    </div>
</div>
<!-- Verse Church Section End -->

<!-- CTA Box Section Start -->
<div class="cta-box">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-9">
                <!-- CTA Box Content Start -->
                <div class="cta-box-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Get Involved and Stay Connected: Support Our Mission, Proudly Hosted by <a href="https://ozspeed.com.au" target="_blank">Ozspeed Hosting</a>, and Join Our Community Today!</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
                <!-- CTA Box Content End -->
            </div>

            <div class="col-md-3">
                <!-- CTA Box Btn Start -->
                <div class="cta-box-btn wow fadeInUp">
                    <a href="https://ozspeed.com.au/" class="btn-default btn-highlighted">Try Ozspeed</a>
                </div>
                <!-- CTA Box Btn End -->
            </div>
        </div>
    </div>
</div>
<!-- CTA Box Section End -->


<!-- Donate Now Section Start -->
<div class="donate-now parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-4">
                <div class="intro-video-box">
                    <!-- Video Play Button Start -->
                    <div class="video-play-button">
                        <!-- <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video" data-cursor-text="Play">
                                <i class="fa-solid fa-play"></i>
                            </a> -->
                    </div>
                    <!-- Video Play Button End -->
                </div>
            </div>

            <div class="col-lg-6 col-md-8">
                <!-- Donate Box Start -->
                <div class="donate-box">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">donate now</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Support <span>Our Mission</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Your generous support enables to continue its mission of spreading God's love and serving our community.</p>
                    </div>
                    <!-- Section Title End -->

                    <div class="donate-form wow fadeInUp" data-wow-delay="0.5s">
                        <form id="donateForm" action="#" method="POST">
                            <div class="form-group mb-4">
                                <input type="text" name="text" class="form-control" placeholder="donate now ..." required>
                            </div>

                            <fieldset class="donate-value-box">
                                <div class="donate-value">
                                    <input type="radio" id="value1" name="value" value="value1" checked>
                                    <label for="value1">AU$ 100.00</label>
                                </div>

                                <div class="donate-value">
                                    <input type="radio" id="value2" name="value" value="value2">
                                    <label for="value2">AU$ 200.00</label>
                                </div>

                                <div class="donate-value">
                                    <input type="radio" id="value3" name="value" value="value3">
                                    <label for="value3">AU$ 300.00</label>
                                </div>

                                <div class="donate-value">
                                    <input type="radio" id="value4" name="value" value="value4">
                                    <label for="value4">AU$ 400.00</label>
                                </div>

                                <div class="donate-value">
                                    <input type="radio" id="value5" name="value" value="value5">
                                    <label for="value5">AU$ 500.00</label>
                                </div>

                                <div class="donate-value">
                                    <input type="radio" id="value6" name="value" value="value6">
                                    <label for="value6">AU$ 600.00</label>
                                </div>
                            </fieldset>

                            <div class="form-group-btn">
                                <button type="submit" class="btn-default">donate now</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Donate Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Donate Now Section End -->



<!-- Subscribe Newsletter Section Start -->
<div class="subscribe-newsletter parallaxie">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">subscribe newsletter</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Keep Up With Our <span>Latest News</span></h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s">Subscribe to our newsletter to stay informed about upcoming events, inspiring messages, and the latest news from our church community.</p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Subscribe Newsletter Form Start -->
                <div class="subscribe-newsletter-form wow fadeInUp" data-wow-delay="0.5s">
                    <form id="newslettersForm" type="hidden" name="table" value="table" action="https://formsubmit.co/siddharthlaldeo@gmail.com" method="POST">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="mail" placeholder="Your Email..." required>
                            <button type="submit" class="subscribe-btn">subscribe</button>
                        </div>
                    </form>
                </div>
                <!-- Subscribe Newsletter Form End -->
            </div>
        </div>
    </div>
</div>
<!-- Subscribe Newsletter Section End -->

<?php include('footer.php'); ?>