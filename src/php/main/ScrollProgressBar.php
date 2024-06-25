<?php
/*
Plugin Name: Scroll Progress Bar
Description: Scroll to the top button with progress bar.
Author: Swino4ka
Version: 1.0
*/

function wdfc_enqueue_styles() {
    wp_enqueue_style('wdfc-style', plugin_dir_url(__FILE__) . 'css/style.css');
}

add_action('wp_enqueue_scripts', 'wdfc_enqueue_styles');

function wdfc_add_circle() {
    echo '<div onclick="scrollToTop()" class="wdfc-circle" id="scrollTopBtn">
        <span class="wdfc-circle__progress" id="scrollTopBtn__Text">↑</span>
    </div>';
}

add_action('wp_footer', 'wdfc_add_circle');

function wdfc_add_inline_style() {
    ?>
    <style>
        .wdfc-circle {
            width: 70px;
            height: 70px;
            color: white;
            border-radius: 50%;
            border: 2px;
            position: fixed;
            bottom: 75px;
            right: 35px;
            padding: auto;
            font-size: 30px;
            text-align: center;
            display: flex;
            padding-top: auto;
            padding-bottom: auto;
            justify-content: center;
            z-index: 10;
            transition: 250ms;
            line-height: 50px;
            cursor: pointer;
            display: flex;
            place-items: center;
            background-color: white;
        }
        .wdfc-circle__progress {
            -webkit-user-select: none;
            -ms-user-select: none;
            user-select: none;
            display: block;
            height: calc(100% - 10px);
            width: calc(100% - 10px);
            background-color: rgb(18, 18, 18);
            z-index: 11;
            border-radius: 50%;
        }
        .wdfc-circle:hover {
            box-shadow: 1px 1px 2px black, 0 0 25px #0CF57E, 0 0 5px #068141;
            width: 80px;
            height: 80px;
            font-size: 36px;
            bottom: 70px;
            right: 30px;
            line-height: 60px;
        }
        .wdfc-circle:active {
            box-shadow: none;
            width: 60px;
            height: 60px;
            font-size: 24px;
            bottom: 80px;
            right: 40px;
            line-height: 40px;
        }
    </style>
    <script>
let scrollPercentage = () => {
        let scrollProgress = document.getElementById("scrollTopBtn");
        let progressValue = document.getElementById("scrollTopBtn__Text");
        let pos = document.documentElement.scrollTop;
        let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        let scrollValue = Math.round(pos * 100 / calcHeight);

        scrollProgress.style.background = `conic-gradient(#0CF57E ${scrollValue}%, #FFFFFF ${scrollValue}%)`;
}


        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

 /*               function handleScroll() {
            const button = document.getElementById('scrollTopBtn');
            const scrollPosition = window.scrollY || document.documentElement.scrollTop;

            if (scrollPosition > 80) { 
                button.style.opacity = '1';
                setTimeout(() => {
                button.style.display = 'flex';
                }, 500);
            } else {
                button.style.opacity = '0';
                setTimeout(() => {
                    button.style.display = 'none';
                }, 500);
            }
        }

        window.addEventListener('scroll', handleScroll);
        handleScroll();*/
        window.onscroll = scrollPercentage;
    </script>
    <?php
}

add_action('wp_head', 'wdfc_add_inline_style');
?>