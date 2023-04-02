<div>
        <?php
                $args = array(
                    'post_type'=>'tourdate'
                );
                $the_query = new WP_Query($args);
        if ( $the_query->have_posts() ) {
            echo '<ul>';
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                echo '<li>' . get_the_title() . '</li>';
                echo '<li>' . get_field('date') . '</li>';
            }
            echo '</ul>';
        } else {
            // no posts found
        }

        // print_r($the_query-> have_posts());
        // if($the_query->have_posts()){
        //     while(have_posts()){
        //         echo "there are posts";
        //     }
        
        // } else {
        //     echo "no posts";
        // }
         ?>
    </div>
    <div class="main-content">
        <div class="first-container">
            <div class="events-container">
                <h2>Event Schedule</h2>
                <div class="event">
                    <a>
                        <span class="month">MAR</span>
                        <span>25</span>
                    </a>
                    <div class="event-text">
                        <h5>event 1</h5>
                        <p>lorem ipsum description of the event</p>
                    </div>
                </div>
            </div>
            <div class="news-container">

            </div>
        </div>
    </div>
