# Slack for Kirby

This plugin provides a thin wrapper for the popular [php-slack/slack](https://github.com/php-slack/slack) library.

It allows you to easily send messages to slack based on events inside your kirby system.

You're strongly encouraged to read [their readme](https://github.com/php-slack/slack/blob/master/README.md) to understand how to use this plugin.

Steps:

1. Install the plugin in the directory site/plugins/slack.
2. Configure at least an endpoint from Slack in site/config.php
3. Call slack()->send("Hello World") from inside your site.

## Installation

1. ```cd site/plugins```
2. ```git clone https://github.com/mrunkel/kirby-slack slack```

or

