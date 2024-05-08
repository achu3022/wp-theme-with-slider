<?php
/*
Template Name: Service Page
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/core.css">
</head>
<body>
    <header>
            <!--<a href="">Home</a>
            <a href="">Contacts</a>
            <a href="">Info</a>-->
            <?php require_once('header.php'); 
            get_header();?>
       
    </header>

    <!-- carousel -->
    <div class="carousel">
        <!-- list item -->
        <div class="list">
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/services/embedded_auto.jpg">
                <div class="content">
                    <div class="author">SMEC</div>
                    <div class="topic">EMBEDDED</div>
                    <div class="title">AUTOMATION</div>
                    <div class="des">
                        <!-- lorem 50 -->
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                    <button>SEE MORE</button>
                        <!--<button>SUBSCRIBE</button>-->
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/services/industrial_auto.jpg">
                <div class="content">
                    <div class="author">SMEC</div>
                    <div class="topic">INDUSTRIAL</div>
                    <div class="title">AUTOMATION</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/services/marine_auto.jpg">
                <div class="content">
                    <div class="author">SMEC</div>
                    <div class="topic">MARINE</div>
                    <div class="title">AUTOMATION</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/services/process_auto.jpg">
                <div class="content">
                    <div class="author">SMEC</div>
                    <div class="topic">PROCESS</div>
                    <div class="title">AUTOMATION</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- list thumnail -->
        <div class="thumbnail">
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/services/embedded_auto.jpg">
                <div class="content">
                    <div class="title">
                        Embedded
                    </div>
                    <div class="description">
                        Automation
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/services/industrial_auto.jpg">
                <div class="content">
                    <div class="title">
                        Industrial                    
                    </div>
                    <div class="description">
                    Automation
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/services/marine_auto.jpg">
                <div class="content">
                    <div class="title">
                        Marine
                    </div>
                    <div class="description">
                    Automation
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/services/process_auto.jpg">
                <div class="content">
                    <div class="title">
                        Process
                    </div>
                    <div class="description">
                    Automation
                    </div>
                </div>
            </div>
        </div>
        <!-- next prev -->

        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <!-- time running -->
    </div>

</body>

<script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
</html>