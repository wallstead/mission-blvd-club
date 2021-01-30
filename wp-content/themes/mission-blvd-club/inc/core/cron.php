<?php
// On wp action, lets try and schedule our cron jobs
add_action('wp', function() {
    if (! wp_next_scheduled ( 'daily_cron_jobs' )) {
        wp_schedule_event(time(), 'daily', 'daily_cron_jobs');
    }
});

// Register your cron jobs here:
// Ex: add_action('daily_cron_jobs', 'delete_drafts');


