<div class="sidebar travel-guide">
    <div id="form-lookup" class="container-fluid">
        <div class="find-flight container">
            <form method="post" action="" name="flight-search" class="flight-search">
                <div class="col-md-5">
                    <label for="flight_number">Personalised Travel Guide</label>
                </div>
                <div class="col-md-4">
                    <input type="text" id="flight_number" name="flight_number" placeholder="Enter flight no." value="">
                </div>
                
                <div class="col-md-3">
                    <input type="submit" value="Find my flight" name="submit" class="cta inverse">
                    <span class="loader"></span>
                </div>
                <div style="clear:both"></div>
            </form>

        </div>
        <div class="form-overlay">

        </div>
    </div>
    <div class="container live-data flight-details">
        <div class="row">

            <!-- depart -->
            <div class="col-md-6">

                <div class="dep-airport">
                    <div class="airport-code"></div>
                    <div class="airport-name"></div>
                </div>

                <div class="schedule">
                    <div class="dep-time">
                        <span class="scheduled-label">Scheduled </span>
                        <span class="scheduled-value"></span>
                        <div class="big-time"></div>
                    </div>
                </div>
                <div class="airport-detail">
                    <div class="dep-airport-detail">
                        <div class="terminal">
                            <div class="terminal-label">Terminal</div>
                            <div class="terminal-value"></div>
                        </div>
                        <div class="gate">
                            <div class="gate-label">Gate</div>
                            <div class="gate-value"></div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- arrive -->
            <div class="col-md-6">

                <div class="arr-airport">
                    <div class="airport-code"></div>
                    <div class="airport-name"></div>
                </div>
                <div class="schedule">
                    <div class="arr-time">
                        <span class="scheduled-label">Scheduled </span>
                        <span class="scheduled-value"></span>
                        <div class="big-time"></div>
                    </div>
                </div>
                <div class="airport-detail">

                    <div class="arr-airport-detail">
                        <div class="terminal">
                            <div class="terminal-label">Terminal</div>
                            <div class="terminal-value"></div>
                        </div>
                        <div class="gate">
                            <div class="gate-label">Gate</div>
                            <div class="gate-value"></div>
                        </div>
                    </div>
                </div>

            </div>
        
            <div class="wrapper">
                <div class="duration">
                    <span class="duration-label">Estimated flight time: </span>
                    <span class="duration-value"></span>
                </div>
                <div class="flight-path">
                    <span class="line-start"></span>
                    <span class="plane"></span>
                    <span class="line-end"></span>
                </div>
                <div class="delay">Your flight is delayed</div>
            </div>


        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="countdown">
                    <div class="countdown-label">Your flight leaves in</div>
                    <div class="countdown-value">08 : 32 : 35</div>

                </div>
                <div class="book-now">
                    <h3>Book your airport transfer</h3>
                    <div class="two-btns desktop-content">
                        <a href="https://book.addisonlee.com/" class="cta">Sign in</a>
                    </div>
                    <div class="two-btns mobile-content">
                        <?php //echo do_shortcode( '[downloadappbtn]' ); ?>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <div class="container live-data loc-info">
        <div class="row row-eq-height tiles">
            <div class="col-md-4">
                <div class="tile">
                    <div class="wrapper">
                        <h3>The Weather in <div class="region"></div></h3>
                        
                        <div class="big-temp">
                            <span class="big-temp-value"></span>
                            <span class="big-temp-symbol"></span>
                        </div>
                        <div class="big-weather-symbol"></div>

                    </div>
                    <div class="forecast">
                        <div class="day">
                            <div class="day-label"></div>
                            <div class="day-icon"></div>
                            <div class="day-temp"></div>
                        </div>
                        <div class="day">
                            <div class="day-label"></div>
                            <div class="day-icon"></div>
                            <div class="day-temp"></div>
                        </div>
                        <div class="day">
                            <div class="day-label"></div>
                            <div class="day-icon"></div>
                            <div class="day-temp"></div>
                        </div>
                        <div class="day">
                            <div class="day-label"></div>
                            <div class="day-icon"></div>
                            <div class="day-temp"></div>
                        </div>
                        <div class="day">
                            <div class="day-label"></div>
                            <div class="day-icon"></div>
                            <div class="day-temp"></div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="tile">
                    <div class="wrapper">
                        <h3>Hotels near <span class="airportname"></span></h3>

                        <ul class="table-hotels">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="tile">
                    <div class="wrapper">
                        <h3>Events you will be in time for in <span class="region"></span></h3>

                        <ul class="events">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-eq-height tiles">
            <div class="col-md-4">
                <div class="tile">
                    <div class="wrapper">
                        <h3>Bars &amp; Restaurants near <span class="airportname"></span></h3>
                        
                        <ul class="table-bars-restaurants">
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="tile">
                    <div class="wrapper">
                        <h3>What you can expect from your Addison Lee</h3>
                        <ul class="table-what-to-expect">
                            <li>
                                <span><p>Complimentary WiFi and phone chargers</p></span>
                            </li>
                            <li>
                                <span><p>We monitor your flight for delays</p></span>
                            </li>
                            <li>
                                <span><p>Up to 30% cheaper than black taxis</p></span>
                            </li>
                            <li>
                                <span><p>We’ll help you with your luggage</p></span>
                            </li>
                            <li>
                                <span><p>Collect loyalty points as you travel with ClubLee</p></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="tile">
                    <div class="wrapper">
                        <h3>Latest posts from AddLib</h3>
                        <ul class="table-addlib">
                            <?php
                    $args = array( 'post_type' => 'addlib',

                     'posts_per_page' => 5 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                <li><span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></li>

                                <?php endwhile; wp_reset_query();
                        ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="map-container live-data">
            <div id="flight-map"></div>
        </div>
    </div>
    <div class="container error-widget">
        <div class="error-title">Flight Not Found</div>
        <div class="error-message">Please check the flight number and try again.</div>
    </div>
</div>
