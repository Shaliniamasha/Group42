<?php require APPROOT . '/views/includes/header.php' ?>

<head> <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/1.css"></head>
<main>

        <main class="w-100 mx-auto">
            <!-- Main Section-->
            <section id="main-section" class="main-section container-full mx-auto d-flex">
                <article class="product-showcase h-100 border-right-light">
                    <section class="product-path">
                        <h1><?php echo $data->title; ?></h1>
                    </section>
    
                    
                    <section class="product-family w-100 position-relative">
                        
                        
                        <div class="small-preview-container d-flex align-items-center position-absolute">
                            <a href="#" class="preview-btn position-relative">
                                <img src="https://donatelife.net/wp-content/uploads/icons-donate-kidney.png" />
                            </a>
                            <a href="#" class="preview-btn position-relative">
                                <img src="https://static5.depositphotos.com/1005537/405/i/600/depositphotos_4051655-stock-photo-man-grabing-a-help-sign.jpg" />
                            </a>
                            <a href="#" class="preview-btn position-relative">
                                <img src="https://donatelife.net/wp-content/uploads/icons-donate-kidney.png.jpg" />
                            </a>
                        </div>
                    </section>
    <section>
        <p>
        <?php echo $data->description; ?>
            <!-- " I wanted to take a moment to shed some light on an important issue that needs our attention: the living conditions in slum areas. Many individuals and families in these communities face daily challenges, from inadequate housing to limited access to basic amenities.

But here's the thing: we have the power to make a difference! ✨ By coming together as a community, we can support and uplift those living in slum areas. Here are a few ways you can get involved:

Volunteer your time: Consider reaching out to local organizations that work directly with these communities. You can offer your skills, whether it's teaching classes, organizing workshops, or providing mentorship. Your presence and support can have a profound impact on their lives.

Donate to local initiatives: Financial contributions can go a long way in providing essential resources and services to those in need. Whether it's food, clean water, education, or healthcare, your donations can help improve their quality of life.

Raise awareness: Use your platform to spread awareness about the challenges faced by those in slum areas. Share stories, facts, and personal experiences to educate others and inspire action. Together, we can amplify their voices and advocate for change. -->

        </p>
    </section>
                    
                </article>
    
                <aside class="user-navbar h-100">
                    <div class="user-avatar position-relative">
                        <img src="p.png" class="rounded-circle" />
                        
                    </div>
                    <h3 class="title">Contact through</h3>
                    <h1 class="user-greeting">
                    <?php echo $data->contact; ?>
                    </h1>
                    <div class="user-choice">
                        <h5 class="title">My Choices</h5>
                        <ul class="choice-list">
                            <li class="nav-item d-flex align-items-center justify-content-between border-bottom-light">
                                <a><button class="add-cart-btn rounded-pill d-flex align-items-center justify-content-between">
                                    Donate<span class="features-btn rounded-circle d-flex align-items-center justify-content-center">
                                        
                                    </span>
                                </button>
                                </a>
                            </li>
                            <li class="nav-item d-flex align-items-center justify-content-between">
                                <a><button class="add-cart-btn rounded-pill d-flex align-items-center justify-content-between">
                                    Share<span class="features-btn rounded-circle d-flex align-items-center justify-content-center">
                                        
                                    </span>
                                </button>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="user-proposal">
                        <h5 class="title">Views</h5>
                        <ul class="proposal-list">
                            <!-- <li class="nav-item d-flex align-items-center justify-content-between selected">
                                
                                45 Donations
                            </li> -->
                            <li class="nav-item d-flex align-items-center justify-content-between">
                                
                               118 Views
                            </li>
                        </ul>
                    </div>
    
                    
                </aside>
            </section>
    
            <!-- Product Suggestions Section-->
            <section id="product-suggestion" class="product-suggestion w-100">
                <div class="container-full d-flex justify-content-between mx-auto w-100">
                    <div class="section-title h-100">
                        <h1>Other Stories</h1>
                        
                    </div>
    
                    <div class="product-suggestion-showcase d-flex align-items-center">
                        <div class="suggestion-card h-100 bg-light d-flex column border-light position-relative">
                            <img src="https://donatelife.net/wp-content/uploads/icons-donate-kidney.png" />
                            <h2>Kidney needed</h2>
                            <!-- <h5>Stockholm 2020</h5>
                            <h3 class="price">$12</h3> -->
                            <button class="add-cart-btn rounded-pill d-flex align-items-center justify-content-between">
                                View Story<span class="features-btn rounded-circle d-flex align-items-center justify-content-center">
                                    <svg class="rounded-circle" xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 24 24" width="16">
                                        <path d="M0 0h24v24H0z" fill="none" />
                                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <div class="suggestion-card h-100 bg-light d-flex column border-light position-relative">
                            <img src="https://t3.ftcdn.net/jpg/04/70/02/36/360_F_470023679_xgFhfOLjUweKmLzT8ODiLxFDAw1ag3kV.jpg" />
                            <h2>A+ Blood needed</h2>
                            <!-- <h5>Foto</h5>
                            <h3 class="price">$24</h3> -->
                            <button class="add-cart-btn rounded-pill d-flex align-items-center justify-content-between">
                                View Story<span class="features-btn rounded-circle d-flex align-items-center justify-content-center">
                                    <svg class="rounded-circle" xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 24 24" width="16">
                                        <path d="M0 0h24v24H0z" fill="none" />
                                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <div class="suggestion-card h-100 bg-light d-flex column border-light position-relative">
                            <img src="https://static5.depositphotos.com/1005537/405/i/600/depositphotos_4051655-stock-photo-man-grabing-a-help-sign.jpg" />
                            <h2>O- Blood needed</h2>
                            <!-- <h5>Sippra</h5>
                            <h3 class="price">$12</h3> -->
                            <button class="add-cart-btn rounded-pill d-flex align-items-center justify-content-between">
                                View Story<span class="features-btn rounded-circle d-flex align-items-center justify-content-center">
                                    <svg class="rounded-circle" xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 24 24" width="16">
                                        <path d="M0 0h24v24H0z" fill="none" />
                                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
    
            <!-- Client Suggestions Section-->
          
            </main>
<?php require APPROOT . '/views/includes/footer.php' ?>
