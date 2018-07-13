# Slack for Kirby

This plugin provides a thin wrapper for the popular [php-slack/slack](https://github.com/php-slack/slack) library.

It allows you to easily send messages to slack based on events inside your kirby system.

You're strongly encouraged to read [their readme](https://github.com/php-slack/slack/blob/master/README.md) to 
understand how to use this plugin.

Steps:

1. Install the plugin in the directory site/plugins/slack.
2. Configure at least an endpoint from Slack in site/config.php
3. Call slack()->send("Hello World") from inside your site.

## Installation

1. ```cd site/plugins```
2. ```git clone https://github.com/mrunkel/kirby-slack slack```

or

one of the many other ways to install kirby plugins..

## Configuration

Edit config.php using [c::set](https://getkirby.com/docs/developer-guide/configuration/options).

You must set ```slack.endpoint``` with the URL provided when you configured your slack WebHook.

You may set any of the following keys, or you can roll with the defaults.

You can also override any of these values by using the API of the underlying client.  The documentation for that
is available in [their readme](https://github.com/php-slack/slack/blob/master/README.md)

Field | Type | Default | Description
----- | ---- | ------- | -----------
`slack.channel` | string | #kirby | The default channel that messages will be sent to
`slack.username` | string | Kirby | The default username for your bot
`slack.icon` | string | kirby icon | The default icon that messages will be sent with, either `:emoji:` or a URL to an image
`slack.link_names` | bool | false | Whether names like `@regan` or `#accounting` should be linked in the message (defaults to false)
`slack.unfurl_links` | bool | false | Whether Slack should unfurl text-based URLs (defaults to false)
`slack.unfurl_media` | bool | true | Whether Slack should unfurl media-based URLs, like tweets or Youtube videos (defaults to true)
`slack.allow_markdown` | bool | true | Whether markdown should be parsed in messages, or left as plain text (defaults to true)
`slack.markdown_in_attachments` | array | none | Which attachment fields should have markdown parsed (defaults to none)

If you've been paying attention, you'll notice that these are the same configuration variables you can set
for the underlying client.  If you haven't been paying attention, these are the same configuration 
variables you can set for the underlying client.

## Using the client.

Once at least the endpoint is configured, you should be able to send messages with
```slack()->send('Hello World');```

The slack() function exposes a slack client, so for full docs, please read the client docs 
[the readme](https://github.com/php-slack/slack/blob/master/README.md)

## FAQ

Q: I'm getting a 404 error

A: Did you setup the slack webhook? and does the room you configured exist in slack?

Q: Where are the complete docs?

A: This module only provides a convenient shim for the pre-existing kirby client.  Their excellent documentation is 
available in [the readme](https://github.com/php-slack/slack/blob/master/README.md)

