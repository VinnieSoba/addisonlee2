<?php
      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('vacancies-sidebar') ) :
      endif; ?>

    <div class="textwidget">
              
        
        <h4>Current Vacancies</h4>

        <script src='https://www.workable.com/assets/embed.js' type='text/javascript'></script>

        <script type='text/javascript' charset='utf-8'>

        whr(document).ready(function(){

        whr_embed(407621, {detail: 'titles', base: 'jobs', zoom: 'country', grouping: 'none'});

        });

        </script>

        <div id="whr_embed_hook"></div>

    </div>