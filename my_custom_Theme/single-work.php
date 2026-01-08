<?php get_header();?>

    <main id="work-single">
        <div class="wrapper">
            <h1 class="myname-en"><?php the_title();?></h1>
            <div class="ws">
                <div class="ws-header">
                    <div class="my-appeal">A cutting-edge digital platform designed to revolutionize the way people interact with technology.</div>      
                    <table class="ws-data">
                        <tr>
                            <th class="da">(Client)</th>
                            <td class="da">Noise</td>
                        </tr>
                        <tr>
                            <th class="da">(Year)</th>
                            <td class="da">20xx</td>
                        </tr>
                        <tr>
                            <th class="da">(Website)</th>
                            <td class="da">www.xxxx.jp</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="myimg">
          <img src="<?php echo get_field('work_thumbnail');?>" alt="<?php the_title();?>">
        </div>
        <div class="ws-inner">
            <ul class="fst-section">
                <li  class="fst-section-fstli"> 
                    <div class="my-data-title">
                        <p>この作品について</p>
                        <div>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </li>
                <li class="fst-section-sndli">
                    <ul class="way">
                        <li>
                            <div class="way-detail">(Challenge)</div>
                            <div class="design-textbox-title" >Complex Design Challenges</div>
                            <p class="way-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </li>
                        <li>
                            <div class="way-detail">(Goal)</div>
                            <div class="design-textbox-title" data-way="Goal">Enhance User Experience</div>
                            <p class="way-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </li>
                        <li>
                            <div class="way-detail">(Result)</div>
                            <div class="design-textbox-title" data-way="Result">Revolutionizing the Digital Landscape</div>
                            <p class="way-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="p-inner">
            <p>プロジェクトギャラリー</p>
            <div>
                <span></span>
                <span></span>
                <span></span>    
            </div>
        </div>
        <div class="g-img"><img src="<?php echo get_template_directory_uri().'/assets/img/wosin1.png';?>" alt="work-single-01"></div>
        <div class="g-img"><img src="<?php echo get_template_directory_uri().'/assets/img/wosin2.png';?>" alt="work-single-02"></div>
    </main>

<?php get_footer();?>