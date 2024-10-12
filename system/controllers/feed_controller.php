<?php

class Feed_controller {
    public function render_post($user_avatar_path, $post_author, $post_author_rating,
                                    $post_title, $post_text, $post_date, $post_views, 
                                    $post_pluses, $post_minuses, $post_comments_counter,
                                    $gallery_images_arr){
        echo('
        <div class="fullscreen-post-container">
            <div class="main-post-container">
                <div class="text-post-container">
                    <div class="meta-post-container">
                        <img src="'.$user_avatar_path.'" alt="" class="avatar">
                        <p class="post-author">'.$post_author.'</p>
                        <p class="post-author-rating">'.$post_author_rating. '</p>
                        <input type="button" name="sub-button" id="sub-button" value="+">
                    </div>

                    <div class="post-data">
                        <div class="post-title">
                            '.$post_title.'
                        </div>
                        <div class="post-text">
                            '.$post_text.'
                        </div>
                        <div class="post-info">
                            <p class="post-date">
                                '.$post_date.'
                            </p>
                            <p class="post-views">
                                '.$post_views.'
                            </p>
                        </div>
                    </div>

                    <div class="post-rating">
                        <div class="post-plus">
                            '.$post_pluses.'
                        </div>
                        <div class="post-minus">
                            '.$post_minuses.'
                        </div>
                        <div class="post-comments">
                            '.$post_comments_counter.'
                        </div>
                    </div>
                </div>
                <div class="gallery-post-container">
                <div class="gallery-image">
                    <img src="" alt="" class="gallery-image-item">
                </div>
                <div class="previous-gallery-item-button">
                    
                </div>
                <div class="next-gallery-item-button">

                </div>
                </div>
            </div>
        </div>
        ');
    }
}