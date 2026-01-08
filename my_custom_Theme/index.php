<?php get_header();?>
    <main id="index">
        <div class="top-inner">
            <h1 class="myname-en">HINATA NINJA</h1>
            <div class="myname-ja">忍者 日向</div>
        </div>
        <div class="myimg">
            <img src="<?php echo get_template_directory_uri().'/assets/img/home.png';?>" alt="home">
        </div>
        <div class="inner">
            <ul class="fst-section">
                <li  class="self-introduction-li"> 
                    <h2 class="self-introduction-body">As a digital designer, I focus on producing top-notch and impactful digital experiences.</h2>
                </li>
                <li class="my-data">
                    <h2 class="my-data-title">私について</h2>
                    <ul class="my-data-sns">
                        <li><div class="my-data-sns-twi"><img src="<?php echo get_template_directory_uri().'/assets/img/ri_twitter.png';?>" alt="twitter"></div></li>
                        <li><div class="my-data-sns-ins"><img src="<?php echo get_template_directory_uri().'/assets/img/ri_instagram.png';?>" alt="instagram"></div></li>
                        <li><div class="my-data-sns-ytb"><img src="<?php echo get_template_directory_uri().'/assets/img/ri_youtube.png';?>" alt="youtube"></div></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="inner">
            <ul class="snd-section">
                <li class="Ican-li">
                  <h2 class="my-data-title">
                    私のできること
                    <div>
                      <span></span>
                      <span></span>
                      <span></span>
                    </div>
                  </h2>
                </li>
                <li class="design-box"><ul class="design-list design-list-1">
                    <li>
                        <section class="design-textbox">
                            <h3 class="design-textbox-title">Digital Design</h3>
                            <p class="design-detail">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </section>
                    </li>
                    <li>
                        <section class="design-textbox">
                            <h3 class="design-textbox-title">Art Design</h3>
                            <p class="design-detail">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </section>
                    </li></ul>
                    <ul class="design-list design-list-2">
                    <li>
                        <section class="design-textbox">        
                            <h3 class="design-textbox-title">Interaction Design</h3>
                            <p class="design-detail">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </section>
                    </li>
                    <li>
                        <section class="design-textbox">        
                            <h3 class="design-textbox-title">Motion Design</h3>
                            <p class="design-detail">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </section>
                    </li>
                </ul></li>
            </ul>
        </div>

    </main>
<?php get_footer();?>
