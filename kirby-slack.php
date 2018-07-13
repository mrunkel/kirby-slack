<?php

/**
 * Kirby Slack - Slack client for kirby
 *
 * @package   Kirby CMS
 * @author    Marc Runkel <marc.runkel@runkel.org>
 * @link      https://runkel.org
 * @version   0.1.0
 * @license   MIT
 */

use Maknz\Slack\Client;

if (c::get('slack.endpoint', false)) {
    // Initialising composer's autoloader
    require_once __DIR__ . DS . 'vendor/autoload.php';

    function slack()
    {
        $options = [
            'username'                => c::get('slack.username', 'Kirby'),
            'channel'                 => c::get('slack.channel', '#kirby'),
            'icon'                    => c::get('slack.icon',
                'https://assets.getkirby.com/assets/images/apple-touch-icon.png'),
            'link_names'              => c::get('slack.link_names', false),
            'unfurl_links'            => c::get('slack.unfurl_links', false),
            'unfurl_media'            => c::get('slack.unfurl_media', true),
            'allow_markdown'          => c::get('slack.allow_markdown', true),
            'markdown_in_attachments' => c::get('slack.markdown_in_attachments', []),
        ];

        return new Client(c::get('slack.endpoint', ''), $options);
    }
}

return null;
