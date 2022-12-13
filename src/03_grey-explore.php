<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Krei</title>
    <link rel="icon" href="images/icon-red.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Krei" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/plugins.css" rel="stylesheet" type="text/css" />    
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/de-grey.css" rel="stylesheet" type="text/css" />
    <!-- color scheme -->   
    <link id="colors" href="css/colors/scheme-04.css" rel="stylesheet" type="text/css" />
    <link href="css/coloring.css" rel="stylesheet" type="text/css" />
</head>

<body class="dark-scheme de-grey">
    <div id="wrapper">

            <!-- header begin -->
            <header class="transparent">
                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="03_grey-index-2.php">
                                            <img alt="" src="images/logo-3.png" />
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                                <div class="de-flex-col">
                                    <input id="quick_search" class="xs-hide" name="quick_search" placeholder="search item here..." type="text" />
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <!-- mainmenu begin -->
                                <ul id="mainmenu">
                                    <li>
                                        <a href="03_grey-index-2.php">Home<span></span></a>
                                    </li>
                                    <li>
                                        <a href="03_grey-explore.php">Explore<span></span></a>
                                        <!-- <ul>
                                            <li><a href="03_grey-explore.php">Explore</a></li>
                                            <li><a href="03_grey-explore-music-nft.php">New: Music NFT</a></li>
                                            <li><a href="03_grey-collection.php">Collections</a></li>
                                            <li><a href="03_grey-live-auction.php">Live Auction</a></li>
                                            <li><a href="03_grey-item-details.php">Item Details</a></li>
                                            <li><a href="03_grey-help-center.php">Help Center</a></li>
                                        </ul> -->
                                    </li>
                                    <li>
                                        <a href="03_grey-author.php">Author<span></span></a>
                                        <ul>
                                            <li><a href="03_grey-author.php">Author</a></li>
                                            <li><a href="profile.php">Profile</a></li>
                                            <li><a href="03_grey-wallet.php">Wallet</a></li>
                                            <!-- <li><a href="03_grey-create-options.php">Create</a></li> -->
                                            <li><a href="03_grey-login.php">Login</a></li>
                                        </ul>
                                    </li>                                    
                                    <!-- <li>
                                        <a href="#">Stats<span></span></a>
                                        <ul>
                                            <li><a href="03_grey-activity.php">Activity</a></li>
                                            <li><a href="03_grey-rankings.php">Rankings</a></li>
                                        </ul>
                                    </li> -->
                                </ul>
                                <!-- mainmenu close -->
                                <div class="menu_side_area">
                                <a href="03_grey-login.php" class="btn-main btn-wallet"><i class="icon_wallet_alt"></i><span>Logout</span></a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </header>
            <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            
            <!-- section begin -->
            <section id="subheader">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-md-12 text-center">
									<h1>Explore</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->
            

            <!-- section begin -->
			<section aria-label="section">
                <div class="container">
                    <div class="row wow fadeIn">
                        <!-- <div class="col-lg-12">

                            <div class="items_filter">
                                <form action="blank.php" class="row form-dark" id="form_quick_search" method="post" name="form_quick_search">
                                    <div class="col text-center">
                                        <input class="form-control" id="name_1" name="name_1" placeholder="search item here..." type="text" /> <a href="#" id="btn-submit"><i class="fa fa-search bg-color-secondary"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>

                                <div id="item_category" class="dropdown">
                                    <a href="#" class="btn-selector">All categories</a>
                                    <ul>
                                        <li class="active"><span>All categories</span></li>
                                        <li><span>Painting</span></li>
                                        <li><span>Sculpture</span></li>
                                        <li><span>Poster</span></li>
                                        <li><span>Design</span></li>
                                        <li><span>Architecture</span></li>
                                        <li><span>Cinema</span></li>
                                        <li><span>Music</span></li>
                                        <li><span>Anything</span></li>
                                    </ul>
                                </div>

                                <div id="buy_category" class="dropdown">
                                    <a href="#" class="btn-selector">Delivery Time</a>
                                    <ul>
                                        <li class="active"><span>Delivery Time</span></li>
                                        <li><span>Express 24H</span></li>
                                        <li><span>Up to 3 days</span></li>
                                        <li><span>Up to 7 days</span></li>
                                        <li><span>Anytime</span></li>
                                    </ul>
                                </div>

                                <div id="items_type" class="dropdown">
                                    <a href="#" class="btn-selector">Sort By</a>
                                    <ul>
                                        <li class="active"><span>Sort By</span></li>
                                        <li><span>Best Seller</span></li>
                                        <li><span>Populer</span></li>
                                        <li><span>Recommend</span></li>
                                    </ul>
                                </div>

                            </div>
                        </div>                      -->
                        <!-- nft item begin -->
                        <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <!-- <div class="de_countdown" data-year="2022" data-month="12" data-day="16" data-hour="8"></div> -->
                                <div class="author_list_pp">
                                    <!-- <a href="03_grey-author.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Monica Lucas">                                    
                                        <img class="lazy" src="images/author/author-1.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a> -->
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.php'">Request Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="03_grey-item-details.php">
                                        <div class="d-placeholder"></div>
                                        <img src="images/items/big-4.jpg" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="03_grey-item-details.php">
                                        <h4>AnimeSailorClub</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        Rp. 350.000<span></span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="#">Request Now</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>50</span>
                                    </div>                            
                                </div> 
                            </div>
                        </div>                 
                        <!-- nft item begin -->
                        <!-- <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="author_list_pp">
                                    <a href="03_grey-author.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Stacy Long">                                    
                                        <img class="lazy" src="images/author/author-10.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.php'">Request Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="03_grey-item-details.php">
                                        <div class="d-placeholder"></div>
                                        <img src="images/carousel/crs-1.jpg" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="03_grey-item-details.php">
                                        <h4>Glass Cube</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        Rp. 300.000<span></span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="#">Request Now</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>80</span>
                                    </div>                                 
                                </div> 
                            </div>
                        </div> -->
                        <!-- nft item begin -->
                        <!-- <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <!-- <div class="de_countdown" data-year="2022" data-month="12" data-day="14" data-hour="8"></div> -->
                                <div class="author_list_pp">
                                    <!-- <a href="03_grey-author.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Ida Chapman">                                    
                                        <img class="lazy" src="images/author/author-11.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a> -->
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.php'">Request Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="03_grey-item-details.php">
                                        <div class="d-placeholder"></div>
                                        <img src="images/items/static-3.jpg" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="03_grey-item-details.php">
                                        <h4>Rainbow Style</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        Rp. 230.000<span></span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="#">Request Now</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>97</span>
                                    </div>                                 
                                </div> 
                            </div>
                        </div> -->
                        <!-- nft item begin -->
                        <!-- <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="author_list_pp">
                                    <a href="03_grey-author.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Fred Ryan">                                    
                                        <img class="lazy" src="images/author/author-12.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.php'">Request Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="03_grey-item-details.php">
                                        <div class="d-placeholder"></div>
                                        <img src="images/items/static-4.jpg" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="03_grey-item-details.php">
                                        <h4>Two Tigers</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        Rp. 350.000<span></span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="#">Request Now</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>73</span>
                                    </div>                                 
                                </div> 
                            </div>
                        </div> -->
                        <!-- nft item begin -->
                        <!-- <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="author_list_pp">
                                    <a href="03_grey-author.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Franklin Greer">                                    
                                        <img class="lazy" src="images/author/author-9.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.php'">Request Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="03_grey-item-details.php">
                                        <div class="d-placeholder"></div>
                                        <img src="images/items/anim-4.webp" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="03_grey-item-details.php">
                                        <h4>The Truth</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        Rp. 400.000<span></span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="#">Request Now</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>26</span>
                                    </div>                                 
                                </div>
                            </div>
                        </div> -->
                        <!-- nft item begin -->
                        <!-- <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                 <div class="de_countdown" data-year="2022" data-month="12" data-day="6" data-hour="8"></div> 
                                <div class="author_list_pp">
                                    <a href="03_grey-author.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Mamie Barnett">                                    
                                        <img class="lazy" src="images/author/author-2.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.php'">Request Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="03_grey-item-details.php">
                                        <div class="d-placeholder"></div>
                                        <img src="images/items/anim-2.webp" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="03_grey-item-details.php">
                                        <h4>Running Puppets</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        Rp. 230.000<span></span>
                                    </div>    
                                    <div class="nft__item_action">
                                        <a href="#">Request Now</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>45</span>
                                    </div>                                  
                                </div> 
                            </div>
                        </div>-->
                        <!-- nft item begin -->
                        <!-- <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="author_list_pp">
                                    <a href="03_grey-author.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Nicholas Daniels">                                    
                                        <img class="lazy" src="images/author/author-3.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.php'">Request Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="03_grey-item-details.php">
                                        <div class="d-placeholder"></div>
                                        <img src="images/items/anim-1.webp" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="03_grey-item-details.php">
                                        <h4>USA Wordmation</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        Rp. 600000<span></span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="#">Request Now</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>76</span>
                                    </div>                                 
                                </div> 
                            </div>
                        </div> -->
                        <!-- nft item begin -->
                        <!-- <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="author_list_pp">
                                    <a href="03_grey-author.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Lori Hart">                                    
                                        <img class="lazy" src="images/author/author-4.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.php'">Request Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="03_grey-item-details.php">
                                        <div class="d-placeholder"></div>
                                        <img src="images/items/anim-5.webp" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="03_grey-item-details.php">
                                        <h4>Loop Donut</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        Rp. 670.000<span></span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="#">Request Now</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>94</span>
                                    </div>                                 
                                </div> 
                            </div>
                        </div> -->
                        <!-- nft item begin -->
                        <!-- <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                 <div class="de_countdown" data-year="2022" data-month="12" data-day="16" data-hour="8"></div> 
                                <div class="author_list_pp">
                                    <a href="03_grey-author.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Jimmy Wright">                                    
                                        <img class="lazy" src="images/author/author-5.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.php'">Request Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="03_grey-item-details.php">
                                        <div class="d-placeholder"></div>
                                        <img src="images/items/anim-3.webp" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="03_grey-item-details.php">
                                        <h4>Lady Copter</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        Rp. 270.000<span></span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="#">Request Now</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>75</span>
                                    </div>                                 
                                </div> 
                            </div>
                        </div> -->
                        <!-- nft item begin -->
                        <!-- <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="author_list_pp">
                                    <a href="03_grey-author.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Gayle Hicks">                                    
                                        <img class="lazy" src="images/author/author-7.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.php'">Request Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="03_grey-item-details.php">
                                        <div class="d-placeholder"></div>
                                        <img src="images/items/static-5.jpg" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="03_grey-item-details.php">
                                        <h4>Purple Planet</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        Rp. 723.000<span></span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="#">Request Now</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>93</span>
                                    </div>                                 
                                </div> 
                            </div>
                        </div> -->
                        <!-- nft item begin -->
                        <!-- <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                 <div class="de_countdown" data-year="2022" data-month="12" data-day="16" data-hour="8"></div> 
                                <div class="author_list_pp">
                                    <a href="03_grey-author.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Karla Sharp">                                    
                                        <img class="lazy" src="images/author/author-6.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.php'">Request Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="03_grey-item-details.php">
                                        <div class="d-placeholder"></div>
                                        <img src="images/items/static-14.jpg" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="03_grey-item-details.php">
                                        <h4>Oh Yeah!</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        Rp. 500.000<span></span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="#">Request Now</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>6</span>
                                    </div>                                 
                                </div> 
                            </div>
                        </div> -->
                        <!-- nft item begin -->
                        <!-- <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="author_list_pp">
                                    <a href="03_grey-author.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Claude Banks">                                    
                                        <img class="lazy" src="images/author/author-8.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.php'">Request Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="03_grey-item-details.php">
                                        <div class="d-placeholder"></div>
                                        <img src="images/items/anim-7.webp" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="03_grey-item-details.php">
                                        <h4>This is Our Story</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        Rp. 450.000<span></span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="#">Request Now</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>21</span>
                                    </div>                                 
                                </div> 
                            </div>
                        </div> -->
                        <!-- nft item begin -->
                        <!-- <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="author_list_pp">
                                    <a href="03_grey-author.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Franklin Greer">                                    
                                        <img class="lazy" src="images/author/author-9.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.php'">Request Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="03_grey-item-details.php">
                                        <div class="d-placeholder"></div>
                                        <img src="images/items/static-6.jpg" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="03_grey-item-details.php">
                                        <h4>Pixel World</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        Rp. 700.000<span></span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="#">Request Now</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>46</span>
                                    </div>                                 
                                </div> 
                            </div>
                        </div> -->
                        <!-- nft item begin -->
                        <!-- <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="author_list_pp">
                                    <a href="03_grey-author.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Fred Ryan">                                    
                                        <img class="lazy" src="images/author/author-12.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.php'">Request Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="03_grey-item-details.php">
                                        <div class="d-placeholder"></div>
                                        <img src="images/items/anim-8.webp" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="03_grey-item-details.php">
                                        <h4>I Believe I Can Fly</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        Rp. 600.000<span></span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="#">Request Now</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>54</span>
                                    </div>                                 
                                </div> 
                            </div>
                        </div> -->
                        <!-- nft item begin -->
                        <!-- <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="author_list_pp">
                                    <a href="03_grey-author.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Lori Hart">                                    
                                        <img class="lazy" src="images/author/author-4.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.php'">Request Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="03_grey-item-details.php">
                                        <div class="d-placeholder"></div>
                                        <img src="images/items/static-7.jpg" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="03_grey-item-details.php">
                                        <h4>Cute Astronout</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        Rp. 560.000<span></span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="#">Request Now</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>32</span>
                                    </div>                                 
                                </div> 
                            </div>
                        </div> -->
                        <!-- nft item begin -->
                        <!-- <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="author_list_pp">
                                    <a href="03_grey-author.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Monica Lucas">                                    
                                        <img class="lazy" src="images/author/author-1.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.php'">Request Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="03_grey-item-details.php">
                                        <div class="d-placeholder"></div>
                                        <img src="images/items/static-8.jpg" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="03_grey-item-details.php">
                                        <h4>Teal Ocean</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        Rp. 800.000<span></span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="#">Request Now</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>24</span>
                                    </div>                                 
                                </div> 
                            </div>
                        </div> --> 

                        <div class="col-md-12 text-center">
                            <a href="#" id="loadmore" class="btn-main wow fadeInUp lead">Load more</a>
                        </div>                                              
                    </div>
                </div>
            </section>

        </div>
        <!-- content close -->

        <a href="#" id="back-to-top"></a>
        
        <!-- footer begin -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>My account</h5>
                            <ul>
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Request</a></li>
                                <li><a href="#">Explore</a></li>
                                <li><a href="#">Settings</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Resources</h5>
                            <ul>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Partners</a></li>
                                <li><a href="#">Suggestions</a></li>
                                <li><a href="#">Discord</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Company</h5>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Asset</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Newsletter</h5>
                            <p>Signup for our newsletter to get the latest news in your inbox.</p>
                            <form action="blank.php" class="row form-dark" id="form_subscribe" method="post" name="form_subscribe">
                                <div class="col text-center">
                                    <input class="form-control" id="txt_subscribe" name="txt_subscribe" placeholder="enter your email" type="text" /> <a href="#" id="btn-subscribe"><i class="arrow_right bg-color-secondary"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                            <div class="spacer-10"></div>
                            <small>Your email is safe with us. We don't spam.</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <a href="03_grey-index-2.php">
                                        <span class="copy">&copy; Create by Krei Studio</span>
                                    </a>
                                </div>
                                <div class="de-flex-col">
                                    <div class="social-icons">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
        
    </div>
    
    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>


</body>

</html>