<?php
return [
    '@class' => 'Grav\\Common\\Config\\Config',
    'checksum' => 'f301a455318cdab9688bca03c1ccdb41:571f2cc4f7e1a4a49854e72f59851632',
    'files' => [
        'user/plugins' => [
            'plugins/admin' => [
                'file' => 'user/plugins/admin/blueprints.yaml',
                'modified' => 1445850518
            ],
            'plugins/archives' => [
                'file' => 'user/plugins/archives/blueprints.yaml',
                'modified' => 1445850028
            ],
            'plugins/breadcrumbs' => [
                'file' => 'user/plugins/breadcrumbs/blueprints.yaml',
                'modified' => 1445850028
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/blueprints.yaml',
                'modified' => 1445851490
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/blueprints.yaml',
                'modified' => 1445850028
            ],
            'plugins/featherlight' => [
                'file' => 'user/plugins/featherlight/blueprints.yaml',
                'modified' => 1440493490
            ],
            'plugins/feed' => [
                'file' => 'user/plugins/feed/blueprints.yaml',
                'modified' => 1445850028
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/blueprints.yaml',
                'modified' => 1445851680
            ],
            'plugins/login' => [
                'file' => 'user/plugins/login/blueprints.yaml',
                'modified' => 1445851726
            ],
            'plugins/pagination' => [
                'file' => 'user/plugins/pagination/blueprints.yaml',
                'modified' => 1445850028
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/blueprints.yaml',
                'modified' => 1445850028
            ],
            'plugins/random' => [
                'file' => 'user/plugins/random/blueprints.yaml',
                'modified' => 1445850028
            ],
            'plugins/relatedpages' => [
                'file' => 'user/plugins/relatedpages/blueprints.yaml',
                'modified' => 1445850028
            ],
            'plugins/simplesearch' => [
                'file' => 'user/plugins/simplesearch/blueprints.yaml',
                'modified' => 1445853648
            ],
            'plugins/sitemap' => [
                'file' => 'user/plugins/sitemap/blueprints.yaml',
                'modified' => 1445850030
            ],
            'plugins/taxonomylist' => [
                'file' => 'user/plugins/taxonomylist/blueprints.yaml',
                'modified' => 1445850030
            ],
            'plugins/youtube' => [
                'file' => 'user/plugins/youtube/blueprints.yaml',
                'modified' => 1444227946
            ]
        ],
        'system/blueprints/config' => [
            'media' => [
                'file' => 'system/blueprints/config/media.yaml',
                'modified' => 1445852696
            ],
            'site' => [
                'file' => 'system/blueprints/config/site.yaml',
                'modified' => 1445852696
            ],
            'streams' => [
                'file' => 'system/blueprints/config/streams.yaml',
                'modified' => 1445852696
            ],
            'system' => [
                'file' => 'system/blueprints/config/system.yaml',
                'modified' => 1445852698
            ]
        ]
    ],
    'data' => [
        'items' => [
            'plugins' => [
                'type' => '_parent',
                'name' => 'plugins'
            ],
            'plugins.admin' => [
                'type' => '_parent',
                'name' => 'plugins.admin'
            ],
            'plugins.admin.Basics' => [
                'type' => 'section',
                'title' => 'Basics',
                'underline' => false,
                'name' => 'plugins.admin.Basics'
            ],
            'plugins.admin.enabled' => [
                'type' => 'hidden',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.enabled'
            ],
            'plugins.admin.route' => [
                'type' => 'text',
                'label' => 'Administrator path',
                'size' => 'medium',
                'placeholder' => 'Default route for administrator (relative to base)',
                'help' => 'If you want to change the URL for the administrator, you can provide a path here',
                'name' => 'plugins.admin.route'
            ],
            'plugins.admin.theme' => [
                'type' => 'hidden',
                'label' => 'Theme',
                'default' => 'grav',
                'name' => 'plugins.admin.theme'
            ],
            'plugins.admin.edit_mode' => [
                'type' => 'select',
                'label' => 'Edit mode',
                'size' => 'small',
                'default' => 'normal',
                'options' => [
                    'normal' => 'Normal',
                    'expert' => 'Expert'
                ],
                'help' => 'Auto will use blueprint if available, if none found, it will use "Expert" mode.',
                'name' => 'plugins.admin.edit_mode'
            ],
            'plugins.admin.google_fonts' => [
                'type' => 'toggle',
                'label' => 'Use Google Fonts',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'help' => 'Use Google custom fonts.  Disable this to use Helvetica. Useful when using Cyrillic and other languages with unsupported characters.',
                'name' => 'plugins.admin.google_fonts'
            ],
            'plugins.admin.show_beta_msg' => [
                'type' => 'toggle',
                'label' => 'Show Beta Message',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'help' => 'Show the beta warning message on the dashboard',
                'name' => 'plugins.admin.show_beta_msg'
            ],
            'plugins.admin.enable_auto_updates_check' => [
                'type' => 'toggle',
                'label' => 'Automatically check for updates',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'help' => 'Shows an informative message, in the admin panel, when an update is available.',
                'name' => 'plugins.admin.enable_auto_updates_check'
            ],
            'plugins.admin.session' => [
                'type' => '_parent',
                'name' => 'plugins.admin.session'
            ],
            'plugins.admin.session.timeout' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Session Timeout',
                'help' => 'Sets the session timeout in seconds',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.admin.session.timeout'
            ],
            'plugins.admin.warnings' => [
                'type' => '_parent',
                'name' => 'plugins.admin.warnings'
            ],
            'plugins.admin.warnings.delete_page' => [
                'type' => 'toggle',
                'label' => 'Warn on page delete',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'help' => 'Ask the user confirmation when deleting a page',
                'name' => 'plugins.admin.warnings.delete_page'
            ],
            'plugins.admin.Popularity' => [
                'type' => 'section',
                'title' => 'Popularity',
                'underline' => true,
                'name' => 'plugins.admin.Popularity'
            ],
            'plugins.admin.popularity' => [
                'type' => '_parent',
                'name' => 'plugins.admin.popularity'
            ],
            'plugins.admin.popularity.enabled' => [
                'type' => 'toggle',
                'label' => 'Visitor tracking',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'help' => 'Enable the visitors stats collecting feature',
                'name' => 'plugins.admin.popularity.enabled'
            ],
            'plugins.admin.dashboard' => [
                'type' => '_parent',
                'name' => 'plugins.admin.dashboard'
            ],
            'plugins.admin.dashboard.days_of_stats' => [
                'type' => 'text',
                'label' => 'Days of stats',
                'size' => 'x-small',
                'default' => 7,
                'help' => 'Keep stats for the specified number of days, then drop them',
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'plugins.admin.dashboard.days_of_stats'
            ],
            'plugins.admin.popularity.ignore' => [
                'type' => 'array',
                'label' => 'Ignore',
                'size' => 'large',
                'help' => 'URLs to ignore',
                'default' => [
                    0 => '/test*',
                    1 => '/modular'
                ],
                'value_only' => true,
                'placeholder_value' => '/ignore-this-route',
                'name' => 'plugins.admin.popularity.ignore'
            ],
            'plugins.admin.popularity.history' => [
                'type' => '_parent',
                'name' => 'plugins.admin.popularity.history'
            ],
            'plugins.admin.popularity.history.daily' => [
                'type' => 'hidden',
                'label' => 'Daily history',
                'default' => 30,
                'name' => 'plugins.admin.popularity.history.daily'
            ],
            'plugins.admin.popularity.history.monthly' => [
                'type' => 'hidden',
                'label' => 'Monthly history',
                'default' => 12,
                'name' => 'plugins.admin.popularity.history.monthly'
            ],
            'plugins.admin.popularity.history.visitors' => [
                'type' => 'hidden',
                'label' => 'Visitors history',
                'default' => 20,
                'name' => 'plugins.admin.popularity.history.visitors'
            ],
            'plugins.archives' => [
                'type' => '_parent',
                'name' => 'plugins.archives'
            ],
            'plugins.archives.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.archives.enabled'
            ],
            'plugins.archives.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.archives.built_in_css'
            ],
            'plugins.archives.date_display_format' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Date Format',
                'default' => 'jS M Y',
                'options' => [
                    'F jS Y' => 'January 1st 2014',
                    'l jS of F' => 'Monday 1st of January',
                    'D, m M Y' => 'Mon, 01 Jan 2014',
                    'd-m-y' => '01-01-14',
                    'jS M Y' => '10th Feb 2014'
                ],
                'name' => 'plugins.archives.date_display_format'
            ],
            'plugins.archives.show_count' => [
                'type' => 'toggle',
                'label' => 'Show Count',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.archives.show_count'
            ],
            'plugins.archives.limit' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Count Limit',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.archives.limit'
            ],
            'plugins.archives.order' => [
                'type' => '_parent',
                'name' => 'plugins.archives.order'
            ],
            'plugins.archives.order.dir' => [
                'type' => 'toggle',
                'label' => 'Order Direction',
                'highlight' => 'asc',
                'default' => 'desc',
                'options' => [
                    'asc' => 'Ascending',
                    'desc' => 'Descending'
                ],
                'name' => 'plugins.archives.order.dir'
            ],
            'plugins.archives.order.by' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Order Type',
                'options' => [
                    'default' => 'Default - based on folder name',
                    'folder' => 'Folder - based on prefix-less folder name',
                    'title' => 'Title - based on title field in header',
                    'date' => 'Date - based on date field in header'
                ],
                'name' => 'plugins.archives.order.by'
            ],
            'plugins.archives.filters' => [
                'type' => 'selectize',
                'label' => 'Category filter',
                'help' => 'Comma separated list of category names',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.archives.filters'
            ],
            'plugins.archives.filter_combinator' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Filter Combinator',
                'default' => 'and',
                'options' => [
                    'and' => 'And - Boolean &&',
                    'or' => 'Or - Boolean ||'
                ],
                'name' => 'plugins.archives.filter_combinator'
            ],
            'plugins.breadcrumbs' => [
                'type' => '_parent',
                'name' => 'plugins.breadcrumbs'
            ],
            'plugins.breadcrumbs.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.enabled'
            ],
            'plugins.breadcrumbs.show_all' => [
                'type' => 'toggle',
                'label' => 'Show even with one item',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.show_all'
            ],
            'plugins.breadcrumbs.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.built_in_css'
            ],
            'plugins.breadcrumbs.include_home' => [
                'type' => 'toggle',
                'label' => 'Include Home',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.include_home'
            ],
            'plugins.breadcrumbs.icon_home' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Icon Home',
                'default' => '',
                'name' => 'plugins.breadcrumbs.icon_home'
            ],
            'plugins.breadcrumbs.icon_divider_classes' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Icon Divider Classes',
                'default' => 'fa fa-angle-right',
                'name' => 'plugins.breadcrumbs.icon_divider_classes'
            ],
            'plugins.breadcrumbs.link_trailing' => [
                'type' => 'toggle',
                'label' => 'Link Trailing',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.link_trailing'
            ],
            'plugins.email' => [
                'type' => '_parent',
                'name' => 'plugins.email'
            ],
            'plugins.email.enabled' => [
                'type' => 'hidden',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.email.enabled'
            ],
            'plugins.email.mailer' => [
                'type' => '_parent',
                'name' => 'plugins.email.mailer'
            ],
            'plugins.email.mailer.engine' => [
                'label' => 'Mail Engine',
                'type' => 'hidden',
                'name' => 'plugins.email.mailer.engine'
            ],
            'plugins.email.mailer.default' => [
                'type' => 'select',
                'label' => 'Mailer',
                'size' => 'medium',
                'options' => [
                    'none' => 'Disabled',
                    'smtp' => 'SMTP',
                    'sendmail' => 'Sendmail',
                    'mail' => 'PHP Mail'
                ],
                'name' => 'plugins.email.mailer.default'
            ],
            'plugins.email.from' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Email from',
                'placeholder' => 'Default email from address',
                'name' => 'plugins.email.from'
            ],
            'plugins.email.to' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Email to',
                'placeholder' => 'Default email to address (can also be comma separated list)',
                'name' => 'plugins.email.to'
            ],
            'plugins.email.mailer.smtp' => [
                'type' => '_parent',
                'name' => 'plugins.email.mailer.smtp'
            ],
            'plugins.email.mailer.smtp.server' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'SMTP server',
                'placeholder' => 'e.g. smtp.google.com',
                'name' => 'plugins.email.mailer.smtp.server'
            ],
            'plugins.email.mailer.smtp.port' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'SMTP port',
                'placeholder' => 'Defaults to 25 (plaintext) / 587 (encrypted)',
                'validate' => [
                    'type' => 'number',
                    'min' => 1,
                    'max' => 65535
                ],
                'name' => 'plugins.email.mailer.smtp.port'
            ],
            'plugins.email.mailer.smtp.encryption' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'SMTP encryption',
                'options' => [
                    'none' => 'None',
                    'ssl' => 'SSL',
                    'ttl' => 'TTL'
                ],
                'name' => 'plugins.email.mailer.smtp.encryption'
            ],
            'plugins.email.mailer.smtp.user' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'SMTP login name',
                'name' => 'plugins.email.mailer.smtp.user'
            ],
            'plugins.email.mailer.smtp.password' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'SMTP password',
                'name' => 'plugins.email.mailer.smtp.password'
            ],
            'plugins.email.mailer.sendmail' => [
                'type' => '_parent',
                'name' => 'plugins.email.mailer.sendmail'
            ],
            'plugins.email.mailer.sendmail.bin' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Path to sendmail',
                'placeholder' => '/usr/sbin/sendmail',
                'name' => 'plugins.email.mailer.sendmail.bin'
            ],
            'plugins.error' => [
                'type' => '_parent',
                'name' => 'plugins.error'
            ],
            'plugins.error.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.error.enabled'
            ],
            'plugins.error.routes' => [
                'type' => '_parent',
                'name' => 'plugins.error.routes'
            ],
            'plugins.error.routes.404' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => '404 Route',
                'default' => '/error',
                'name' => 'plugins.error.routes.404'
            ],
            'plugins.featherlight' => [
                'type' => '_parent',
                'name' => 'plugins.featherlight'
            ],
            'plugins.featherlight.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin Status',
                'hightlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.featherlight.enabled'
            ],
            'plugins.featherlight.active' => [
                'type' => 'toggle',
                'label' => 'Active',
                'hightlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'help' => 'Activate on all pages. You can override this setting on a page basis',
                'name' => 'plugins.featherlight.active'
            ],
            'plugins.featherlight.gallery' => [
                'type' => 'toggle',
                'label' => 'Gallery',
                'hightlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'help' => 'Enable/disable the lightbox gallery extension',
                'name' => 'plugins.featherlight.gallery'
            ],
            'plugins.featherlight.openSpeed' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Open Speed',
                'default' => '250',
                'help' => 'Open Speed in ms',
                'name' => 'plugins.featherlight.openSpeed'
            ],
            'plugins.featherlight.closeSpeed' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Close Speed',
                'default' => '250',
                'help' => 'Close Speed in ms',
                'name' => 'plugins.featherlight.closeSpeed'
            ],
            'plugins.featherlight.closeOnClick' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Close on Click',
                'options' => [
                    'background' => 'background',
                    'anywhere' => 'anywhere',
                    'false' => 'false'
                ],
                'name' => 'plugins.featherlight.closeOnClick'
            ],
            'plugins.featherlight.closeOnEsc' => [
                'type' => 'toggle',
                'label' => 'Close on Esc',
                'hightlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'help' => 'Close the lightbox on hitting the Esc key',
                'name' => 'plugins.featherlight.closeOnEsc'
            ],
            'plugins.featherlight.root' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Root',
                'default' => 'body',
                'help' => 'Where to append featherlights',
                'name' => 'plugins.featherlight.root'
            ],
            'plugins.feed' => [
                'type' => '_parent',
                'name' => 'plugins.feed'
            ],
            'plugins.feed.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.feed.enabled'
            ],
            'plugins.feed.limit' => [
                'type' => 'text',
                'label' => 'Feed count',
                'validate' => [
                    'type' => 'number',
                    'min' => 10,
                    'max' => 1000
                ],
                'name' => 'plugins.feed.limit'
            ],
            'plugins.feed.description' => [
                'type' => 'textarea',
                'label' => 'Description',
                'name' => 'plugins.feed.description'
            ],
            'plugins.feed.lang' => [
                'type' => 'text',
                'label' => 'Feed language code',
                'default' => 'en',
                'placeholder' => 'en',
                'validate' => [
                    'pattern' => '[a-zA-Z]{2,3}(-[a-zA-Z]{2,3})?'
                ],
                'name' => 'plugins.feed.lang'
            ],
            'plugins.feed.length' => [
                'type' => 'text',
                'label' => 'Feed Length',
                'validate' => [
                    'type' => 'number',
                    'min' => 10,
                    'max' => 10000
                ],
                'name' => 'plugins.feed.length'
            ],
            'plugins.form' => [
                'type' => '_parent',
                'name' => 'plugins.form'
            ],
            'plugins.form.enabled' => [
                'type' => 'hidden',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.enabled'
            ],
            'plugins.login' => [
                'type' => '_parent',
                'name' => 'plugins.login'
            ],
            'plugins.login.enabled' => [
                'type' => 'hidden',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.enabled'
            ],
            'plugins.login.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'help' => 'Include the CSS provided by the admin plugin',
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.built_in_css'
            ],
            'plugins.login.route' => [
                'type' => 'text',
                'label' => 'Login path',
                'help' => 'Custom route to a custom login page that your theme provides',
                'placeholder' => '/my-custom-login',
                'name' => 'plugins.login.route'
            ],
            'plugins.pagination' => [
                'type' => '_parent',
                'name' => 'plugins.pagination'
            ],
            'plugins.pagination.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.pagination.enabled'
            ],
            'plugins.pagination.delta' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Delta',
                'default' => 0,
                'help' => 'How many pages to show left and right of the current page',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.pagination.delta'
            ],
            'plugins.pagination.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.pagination.built_in_css'
            ],
            'plugins.problems' => [
                'type' => '_parent',
                'name' => 'plugins.problems'
            ],
            'plugins.problems.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.problems.enabled'
            ],
            'plugins.problems.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.problems.built_in_css'
            ],
            'plugins.random' => [
                'type' => '_parent',
                'name' => 'plugins.random'
            ],
            'plugins.random.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.random.enabled'
            ],
            'plugins.random.route' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Route',
                'default' => '/random',
                'help' => 'Default route of the random plugin',
                'name' => 'plugins.random.route'
            ],
            'plugins.random.redirect' => [
                'type' => 'toggle',
                'label' => 'Redirect',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.random.redirect'
            ],
            'plugins.random.filters' => [
                'type' => 'selectize',
                'label' => 'Category filter',
                'help' => 'Comma separated list of category names',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.random.filters'
            ],
            'plugins.random.filter_combinator' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Filter Combinator',
                'default' => 'and',
                'options' => [
                    'and' => 'And - Boolean &&',
                    'or' => 'Or - Boolean ||'
                ],
                'name' => 'plugins.random.filter_combinator'
            ],
            'plugins.relatedpages' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages'
            ],
            'plugins.relatedpages.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.enabled'
            ],
            'plugins.relatedpages.basics_title' => [
                'type' => 'section',
                'title' => 'PLUGIN_REL_PAGES.BASICS',
                'underline' => true,
                'name' => 'plugins.relatedpages.basics_title'
            ],
            'plugins.relatedpages.limit' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_REL_PAGES.LIMIT',
                'help' => 'PLUGIN_REL_PAGES.LIMIT_HELP',
                'validate' => [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 65536
                ],
                'name' => 'plugins.relatedpages.limit'
            ],
            'plugins.relatedpages.show_score' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.SHOW_SCORE',
                'help' => 'PLUGIN_REL_PAGES.SHOW_SCORE_HELP',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.show_score'
            ],
            'plugins.relatedpages.filter' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.filter'
            ],
            'plugins.relatedpages.filter.items' => [
                'type' => 'text',
                'yaml' => true,
                'label' => 'PLUGIN_REL_PAGES.ITEMS',
                'help' => 'PLUGIN_REL_PAGES.ITEMS_HELP',
                'default' => '@page: /blog',
                'name' => 'plugins.relatedpages.filter.items'
            ],
            'plugins.relatedpages.filter.order' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.filter.order'
            ],
            'plugins.relatedpages.filter.order.by' => [
                'type' => 'select',
                'label' => 'PLUGIN_REL_PAGES.ORDER_BY',
                'default' => 'date',
                'options' => [
                    'folder' => 'Folder',
                    'title' => 'Title',
                    'date' => 'Date',
                    'default' => 'Default'
                ],
                'name' => 'plugins.relatedpages.filter.order.by'
            ],
            'plugins.relatedpages.filter.order.dir' => [
                'type' => 'select',
                'label' => 'PLUGIN_REL_PAGES.ORDER',
                'default' => 'desc',
                'options' => [
                    'asc' => 'Ascending',
                    'desc' => 'Descending'
                ],
                'name' => 'plugins.relatedpages.filter.order.dir'
            ],
            'plugins.relatedpages.page_in_filter' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.PAGE_IN_FILTER',
                'help' => 'PLUGIN_REL_PAGES.PAGE_IN_FILTER_HELP',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.page_in_filter'
            ],
            'plugins.relatedpages.explicit_pages' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.explicit_pages'
            ],
            'plugins.relatedpages.explicit_pages.process' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.EXPLICIT_PROCESS',
                'help' => 'PLUGIN_REL_PAGES.EXPLICIT_PROCESS_HELP',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.explicit_pages.process'
            ],
            'plugins.relatedpages.explicit_pages.score' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_REL_PAGES.EXPLICIT_SCORE',
                'help' => 'PLUGIN_REL_PAGES.EXPLICIT_SCORE_HELP',
                'validate' => [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 100
                ],
                'name' => 'plugins.relatedpages.explicit_pages.score'
            ],
            'plugins.relatedpages.taxonomy_title' => [
                'type' => 'section',
                'title' => 'PLUGIN_REL_PAGES.TAXONOMY_MATCH',
                'underline' => true,
                'name' => 'plugins.relatedpages.taxonomy_title'
            ],
            'plugins.relatedpages.taxonomy_match' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.taxonomy_match'
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_REL_PAGES.TAXONOMY',
                'help' => 'PLUGIN_REL_PAGES.TAXONOMY_HELP',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy'
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy'
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.process' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.TAXONOMY_TAXONOMY_PROCESS',
                'help' => 'PLUGIN_REL_PAGES.TAXONOMY_TAXONOMY_PROCESS_HELP',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.process'
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_content' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_content'
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_content.process' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.TAXONOMY_CONTENT_PROCESS',
                'help' => 'PLUGIN_REL_PAGES.TAXONOMY_CONTENT_PROCESS_HELP',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_content.process'
            ],
            'plugins.relatedpages.content_title' => [
                'type' => 'section',
                'title' => 'PLUGIN_REL_PAGES.CONTENT_MATCH',
                'underline' => true,
                'name' => 'plugins.relatedpages.content_title'
            ],
            'plugins.relatedpages.content_match' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.content_match'
            ],
            'plugins.relatedpages.content_match.process' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.CONTENT_PROCESS',
                'help' => 'PLUGIN_REL_PAGES.CONTENT_PROCESS_HELP',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.content_match.process'
            ],
            'plugins.relatedpages.advanced_title' => [
                'type' => 'section',
                'title' => 'PLUGIN_REL_PAGES.ADVANCED',
                'underline' => true,
                'name' => 'plugins.relatedpages.advanced_title'
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.score_scale' => [
                'type' => 'array',
                'label' => 'PLUGIN_REL_PAGES.TAXONOMY_SCORE_SCALE',
                'size' => 'large',
                'default' => [
                    0 => 50,
                    1 => 75,
                    2 => 100
                ],
                'value_only' => true,
                'placeholder_value' => 50,
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.score_scale'
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_content.score_scale' => [
                'type' => 'array',
                'label' => 'PLUGIN_REL_PAGES.CONTENT_SCORE_SCALE',
                'size' => 'large',
                'default' => [
                    0 => 50,
                    1 => 75,
                    2 => 100
                ],
                'value_only' => true,
                'placeholder_value' => 50,
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_content.score_scale'
            ],
            'plugins.simplesearch' => [
                'type' => '_parent',
                'name' => 'plugins.simplesearch'
            ],
            'plugins.simplesearch.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.simplesearch.enabled'
            ],
            'plugins.simplesearch.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.simplesearch.built_in_css'
            ],
            'plugins.simplesearch.route' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Route',
                'default' => '/random',
                'help' => 'Default route of the simplesearch plugin',
                'name' => 'plugins.simplesearch.route'
            ],
            'plugins.simplesearch.template' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Template',
                'default' => 'simplesearch_results',
                'help' => 'Name of the template for the search results',
                'name' => 'plugins.simplesearch.template'
            ],
            'plugins.simplesearch.filters' => [
                'type' => '_parent',
                'name' => 'plugins.simplesearch.filters'
            ],
            'plugins.simplesearch.filters.category' => [
                'type' => 'selectize',
                'label' => 'Category filter',
                'help' => 'Comma separated list of category names',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.simplesearch.filters.category'
            ],
            'plugins.simplesearch.filter_combinator' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Filter Combinator',
                'default' => 'and',
                'options' => [
                    'and' => 'And - Boolean &&',
                    'or' => 'Or - Boolean ||'
                ],
                'name' => 'plugins.simplesearch.filter_combinator'
            ],
            'plugins.simplesearch.order' => [
                'type' => '_parent',
                'name' => 'plugins.simplesearch.order'
            ],
            'plugins.simplesearch.order.by' => [
                'type' => 'select',
                'size' => 'long',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.DEFAULT_ORDERING',
                'help' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_HELP',
                'options' => [
                    'default' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DEFAULT',
                    'folder' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_FOLDER',
                    'title' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_TITLE',
                    'date' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DATE'
                ],
                'name' => 'plugins.simplesearch.order.by'
            ],
            'plugins.simplesearch.order.dir' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DEFAULT_ORDER_DIRECTION',
                'highlight' => 'asc',
                'default' => 'desc',
                'help' => 'PLUGIN_ADMIN.DEFAULT_ORDER_DIRECTION_HELP',
                'options' => [
                    'asc' => 'PLUGIN_ADMIN.ASCENDING',
                    'desc' => 'PLUGIN_ADMIN.DESCENDING'
                ],
                'name' => 'plugins.simplesearch.order.dir'
            ],
            'plugins.sitemap' => [
                'type' => '_parent',
                'name' => 'plugins.sitemap'
            ],
            'plugins.sitemap.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.sitemap.enabled'
            ],
            'plugins.sitemap.route' => [
                'type' => 'text',
                'label' => 'Route to sitemap',
                'placeholder' => '/sitemap',
                'validate' => [
                    'pattern' => '/([a-z\\-_]+/?)+'
                ],
                'name' => 'plugins.sitemap.route'
            ],
            'plugins.sitemap.ignores' => [
                'type' => 'array',
                'label' => 'Ignore',
                'help' => 'URLs to ignore',
                'value_only' => true,
                'placeholder_value' => '/ignore-this-route',
                'name' => 'plugins.sitemap.ignores'
            ],
            'plugins.taxonomylist' => [
                'type' => '_parent',
                'name' => 'plugins.taxonomylist'
            ],
            'plugins.taxonomylist.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.taxonomylist.enabled'
            ],
            'plugins.taxonomylist.route' => [
                'type' => 'text',
                'label' => 'Route to blog',
                'placeholder' => '/blog',
                'validate' => [
                    'pattern' => '/([a-z\\-_]+/?)+'
                ],
                'name' => 'plugins.taxonomylist.route'
            ],
            'plugins.youtube' => [
                'type' => '_parent',
                'name' => 'plugins.youtube'
            ],
            'plugins.youtube.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.youtube.enabled'
            ],
            'plugins.youtube.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.youtube.built_in_css'
            ],
            'plugins.youtube.add_editor_button' => [
                'type' => 'toggle',
                'label' => 'Add editor button',
                'help' => 'The editor button allows you to easily enter YouTube videos in the page content',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.youtube.add_editor_button'
            ],
            'site' => [
                'type' => '_parent',
                'name' => 'site'
            ],
            'site.title' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.SITE_TITLE',
                'size' => 'large',
                'placeholder' => 'PLUGIN_ADMIN.SITE_TITLE_PLACEHOLDER',
                'help' => 'PLUGIN_ADMIN.SITE_TITLE_HELP',
                'name' => 'site.title'
            ],
            'site.author' => [
                'type' => '_parent',
                'name' => 'site.author'
            ],
            'site.author.name' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.DEFAULT_AUTHOR',
                'help' => 'PLUGIN_ADMIN.DEFAULT_AUTHOR_HELP',
                'name' => 'site.author.name'
            ],
            'site.author.email' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.DEFAULT_EMAIL',
                'help' => 'PLUGIN_ADMIN.DEFAULT_EMAIL_HELP',
                'validate' => [
                    'type' => 'email'
                ],
                'name' => 'site.author.email'
            ],
            'site.taxonomies' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.TAXONOMY_TYPES',
                'classes' => 'fancy',
                'help' => 'PLUGIN_ADMIN.TAXONOMY_TYPES_HELP',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'site.taxonomies'
            ],
            'site.summary' => [
                'type' => '_parent',
                'name' => 'site.summary'
            ],
            'site.summary.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'highlight' => 1,
                'help' => 'PLUGIN_ADMIN.ENABLED_HELP',
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'site.summary.enabled'
            ],
            'site.summary.size' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.SUMMARY_SIZE',
                'help' => 'PLUGIN_ADMIN.SUMMARY_SIZE_HELP',
                'validate' => [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 65536
                ],
                'name' => 'site.summary.size'
            ],
            'site.summary.format' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FORMAT',
                'classes' => 'fancy',
                'help' => 'PLUGIN_ADMIN.FORMAT_HELP',
                'highlight' => 'short',
                'options' => [
                    'short' => 'PLUGIN_ADMIN.SHORT',
                    'long' => 'PLUGIN_ADMIN.LONG'
                ],
                'name' => 'site.summary.format'
            ],
            'site.summary.delimiter' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.DELIMITER',
                'help' => 'PLUGIN_ADMIN.DELIMITER_HELP',
                'name' => 'site.summary.delimiter'
            ],
            'site.metadata' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.METADATA',
                'help' => 'PLUGIN_ADMIN.METADATA_HELP',
                'placeholder_key' => 'PLUGIN_ADMIN.METADATA_KEY',
                'placeholder_value' => 'PLUGIN_ADMIN.METADATA_VALUE',
                'name' => 'site.metadata'
            ],
            'site.redirects' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.CUSTOM_REDIRECTS',
                'help' => 'PLUGIN_ADMIN.CUSTOM_REDIRECTS_HELP',
                'placeholder_key' => 'PLUGIN_ADMIN.CUSTOM_REDIRECTS_PLACEHOLDER_KEY',
                'placeholder_value' => 'PLUGIN_ADMIN.CUSTOM_REDIRECTS_PLACEHOLDER_VALUE',
                'name' => 'site.redirects'
            ],
            'site.routes' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.CUSTOM_ROUTES',
                'help' => 'PLUGIN_ADMIN.CUSTOM_ROUTES_HELP',
                'placeholder_key' => 'PLUGIN_ADMIN.CUSTOM_ROUTES_PLACEHOLDER_KEY',
                'placeholder_value' => 'PLUGIN_ADMIN.CUSTOM_ROUTES_PLACEHOLDER_VALUE',
                'name' => 'site.routes'
            ],
            'streams' => [
                'type' => '_parent',
                'name' => 'streams'
            ],
            'streams.schemes' => [
                'type' => '_parent',
                'name' => 'streams.schemes'
            ],
            'streams.schemes.xxx' => [
                'type' => 'array',
                'name' => 'streams.schemes.xxx'
            ],
            'system' => [
                'type' => '_parent',
                'name' => 'system'
            ],
            'system.home' => [
                'type' => '_parent',
                'name' => 'system.home'
            ],
            'system.home.alias' => [
                'type' => 'pages',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.HOME_PAGE',
                'show_all' => false,
                'show_modular' => false,
                'show_root' => false,
                'help' => 'PLUGIN_ADMIN.HOME_PAGE_HELP',
                'name' => 'system.home.alias'
            ],
            'system.pages' => [
                'type' => '_parent',
                'name' => 'system.pages'
            ],
            'system.pages.theme' => [
                'type' => 'themeselect',
                'classes' => 'fancy',
                'selectize' => true,
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.DEFAULT_THEME',
                'help' => 'PLUGIN_ADMIN.DEFAULT_THEME_HELP',
                'name' => 'system.pages.theme'
            ],
            'system.pages.process' => [
                'type' => 'checkboxes',
                'label' => 'PLUGIN_ADMIN.PROCESS',
                'help' => 'PLUGIN_ADMIN.PROCESS_HELP',
                'default' => [
                    0 => [
                        'markdown' => true
                    ],
                    1 => [
                        'twig' => true
                    ]
                ],
                'options' => [
                    'markdown' => 'Markdown',
                    'twig' => 'Twig'
                ],
                'use' => 'keys',
                'name' => 'system.pages.process'
            ],
            'system.timezone' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.TIMEZONE',
                'size' => 'medium',
                'classes' => 'fancy',
                'help' => 'PLUGIN_ADMIN.TIMEZONE_HELP',
                '@data-options' => '\\Grav\\Common\\Utils::timezones',
                'default' => '',
                'options' => [
                    '' => 'Default (Server Timezone)',
                    'Pacific/Midway' => '(UTC-11:00) Pacific/Midway',
                    'Pacific/Niue' => '(UTC-11:00) Pacific/Niue',
                    'Pacific/Pago_Pago' => '(UTC-11:00) Pacific/Pago_Pago',
                    'Pacific/Johnston' => '(UTC-10:00) Pacific/Johnston',
                    'Pacific/Tahiti' => '(UTC-10:00) Pacific/Tahiti',
                    'Pacific/Honolulu' => '(UTC-10:00) Pacific/Honolulu',
                    'Pacific/Rarotonga' => '(UTC-10:00) Pacific/Rarotonga',
                    'Pacific/Marquesas' => '(UTC-09:30) Pacific/Marquesas',
                    'America/Adak' => '(UTC-09:00) America/Adak',
                    'Pacific/Gambier' => '(UTC-09:00) Pacific/Gambier',
                    'America/Anchorage' => '(UTC-08:00) America/Anchorage',
                    'America/Sitka' => '(UTC-08:00) America/Sitka',
                    'America/Yakutat' => '(UTC-08:00) America/Yakutat',
                    'Pacific/Pitcairn' => '(UTC-08:00) Pacific/Pitcairn',
                    'America/Nome' => '(UTC-08:00) America/Nome',
                    'America/Santa_Isabel' => '(UTC-08:00) America/Santa_Isabel',
                    'America/Juneau' => '(UTC-08:00) America/Juneau',
                    'America/Metlakatla' => '(UTC-08:00) America/Metlakatla',
                    'America/Dawson_Creek' => '(UTC-07:00) America/Dawson_Creek',
                    'America/Tijuana' => '(UTC-07:00) America/Tijuana',
                    'America/Phoenix' => '(UTC-07:00) America/Phoenix',
                    'America/Mazatlan' => '(UTC-07:00) America/Mazatlan',
                    'America/Hermosillo' => '(UTC-07:00) America/Hermosillo',
                    'America/Chihuahua' => '(UTC-07:00) America/Chihuahua',
                    'America/Creston' => '(UTC-07:00) America/Creston',
                    'America/Vancouver' => '(UTC-07:00) America/Vancouver',
                    'America/Dawson' => '(UTC-07:00) America/Dawson',
                    'America/Whitehorse' => '(UTC-07:00) America/Whitehorse',
                    'America/Los_Angeles' => '(UTC-07:00) America/Los_Angeles',
                    'America/Merida' => '(UTC-06:00) America/Merida',
                    'America/Regina' => '(UTC-06:00) America/Regina',
                    'America/Edmonton' => '(UTC-06:00) America/Edmonton',
                    'America/Managua' => '(UTC-06:00) America/Managua',
                    'America/Bahia_Banderas' => '(UTC-06:00) America/Bahia_Banderas',
                    'America/Ojinaga' => '(UTC-06:00) America/Ojinaga',
                    'America/El_Salvador' => '(UTC-06:00) America/El_Salvador',
                    'America/Monterrey' => '(UTC-06:00) America/Monterrey',
                    'America/Guatemala' => '(UTC-06:00) America/Guatemala',
                    'America/Mexico_City' => '(UTC-06:00) America/Mexico_City',
                    'America/Swift_Current' => '(UTC-06:00) America/Swift_Current',
                    'America/Cambridge_Bay' => '(UTC-06:00) America/Cambridge_Bay',
                    'America/Yellowknife' => '(UTC-06:00) America/Yellowknife',
                    'America/Tegucigalpa' => '(UTC-06:00) America/Tegucigalpa',
                    'America/Inuvik' => '(UTC-06:00) America/Inuvik',
                    'America/Boise' => '(UTC-06:00) America/Boise',
                    'America/Belize' => '(UTC-06:00) America/Belize',
                    'Pacific/Galapagos' => '(UTC-06:00) Pacific/Galapagos',
                    'America/Costa_Rica' => '(UTC-06:00) America/Costa_Rica',
                    'America/Denver' => '(UTC-06:00) America/Denver',
                    'America/Cayman' => '(UTC-05:00) America/Cayman',
                    'America/Chicago' => '(UTC-05:00) America/Chicago',
                    'America/Matamoros' => '(UTC-05:00) America/Matamoros',
                    'America/Bogota' => '(UTC-05:00) America/Bogota',
                    'America/Atikokan' => '(UTC-05:00) America/Atikokan',
                    'America/Eirunepe' => '(UTC-05:00) America/Eirunepe',
                    'America/Menominee' => '(UTC-05:00) America/Menominee',
                    'America/North_Dakota/Beulah' => '(UTC-05:00) America/North_Dakota/Beulah',
                    'America/Cancun' => '(UTC-05:00) America/Cancun',
                    'America/Lima' => '(UTC-05:00) America/Lima',
                    'America/Rankin_Inlet' => '(UTC-05:00) America/Rankin_Inlet',
                    'America/Indiana/Tell_City' => '(UTC-05:00) America/Indiana/Tell_City',
                    'America/Jamaica' => '(UTC-05:00) America/Jamaica',
                    'America/Resolute' => '(UTC-05:00) America/Resolute',
                    'America/Rio_Branco' => '(UTC-05:00) America/Rio_Branco',
                    'America/Indiana/Knox' => '(UTC-05:00) America/Indiana/Knox',
                    'America/North_Dakota/Center' => '(UTC-05:00) America/North_Dakota/Center',
                    'America/Winnipeg' => '(UTC-05:00) America/Winnipeg',
                    'America/Rainy_River' => '(UTC-05:00) America/Rainy_River',
                    'Pacific/Easter' => '(UTC-05:00) Pacific/Easter',
                    'America/Guayaquil' => '(UTC-05:00) America/Guayaquil',
                    'America/North_Dakota/New_Salem' => '(UTC-05:00) America/North_Dakota/New_Salem',
                    'America/Panama' => '(UTC-05:00) America/Panama',
                    'America/Caracas' => '(UTC-04:30) America/Caracas',
                    'America/Indiana/Winamac' => '(UTC-04:00) America/Indiana/Winamac',
                    'America/Indiana/Vincennes' => '(UTC-04:00) America/Indiana/Vincennes',
                    'America/Indiana/Vevay' => '(UTC-04:00) America/Indiana/Vevay',
                    'America/Kentucky/Monticello' => '(UTC-04:00) America/Kentucky/Monticello',
                    'America/Kentucky/Louisville' => '(UTC-04:00) America/Kentucky/Louisville',
                    'America/Iqaluit' => '(UTC-04:00) America/Iqaluit',
                    'America/Kralendijk' => '(UTC-04:00) America/Kralendijk',
                    'America/Indiana/Indianapolis' => '(UTC-04:00) America/Indiana/Indianapolis',
                    'America/Guadeloupe' => '(UTC-04:00) America/Guadeloupe',
                    'America/Grenada' => '(UTC-04:00) America/Grenada',
                    'America/Lower_Princes' => '(UTC-04:00) America/Lower_Princes',
                    'America/Grand_Turk' => '(UTC-04:00) America/Grand_Turk',
                    'America/Guyana' => '(UTC-04:00) America/Guyana',
                    'America/Manaus' => '(UTC-04:00) America/Manaus',
                    'America/Indiana/Marengo' => '(UTC-04:00) America/Indiana/Marengo',
                    'America/Detroit' => '(UTC-04:00) America/Detroit',
                    'America/Dominica' => '(UTC-04:00) America/Dominica',
                    'America/Havana' => '(UTC-04:00) America/Havana',
                    'America/Indiana/Petersburg' => '(UTC-04:00) America/Indiana/Petersburg',
                    'America/Montserrat' => '(UTC-04:00) America/Montserrat',
                    'America/Santo_Domingo' => '(UTC-04:00) America/Santo_Domingo',
                    'America/St_Barthelemy' => '(UTC-04:00) America/St_Barthelemy',
                    'America/Puerto_Rico' => '(UTC-04:00) America/Puerto_Rico',
                    'America/Curacao' => '(UTC-04:00) America/Curacao',
                    'America/Port-au-Prince' => '(UTC-04:00) America/Port-au-Prince',
                    'America/Port_of_Spain' => '(UTC-04:00) America/Port_of_Spain',
                    'America/St_Kitts' => '(UTC-04:00) America/St_Kitts',
                    'America/St_Lucia' => '(UTC-04:00) America/St_Lucia',
                    'America/Toronto' => '(UTC-04:00) America/Toronto',
                    'America/Tortola' => '(UTC-04:00) America/Tortola',
                    'America/Thunder_Bay' => '(UTC-04:00) America/Thunder_Bay',
                    'America/St_Vincent' => '(UTC-04:00) America/St_Vincent',
                    'America/St_Thomas' => '(UTC-04:00) America/St_Thomas',
                    'America/Pangnirtung' => '(UTC-04:00) America/Pangnirtung',
                    'America/Porto_Velho' => '(UTC-04:00) America/Porto_Velho',
                    'America/Nassau' => '(UTC-04:00) America/Nassau',
                    'America/Martinique' => '(UTC-04:00) America/Martinique',
                    'America/La_Paz' => '(UTC-04:00) America/La_Paz',
                    'America/Anguilla' => '(UTC-04:00) America/Anguilla',
                    'America/Aruba' => '(UTC-04:00) America/Aruba',
                    'America/Blanc-Sablon' => '(UTC-04:00) America/Blanc-Sablon',
                    'America/Marigot' => '(UTC-04:00) America/Marigot',
                    'America/Antigua' => '(UTC-04:00) America/Antigua',
                    'America/Nipigon' => '(UTC-04:00) America/Nipigon',
                    'America/New_York' => '(UTC-04:00) America/New_York',
                    'America/Boa_Vista' => '(UTC-04:00) America/Boa_Vista',
                    'America/Barbados' => '(UTC-04:00) America/Barbados',
                    'Antarctica/Palmer' => '(UTC-03:00) Antarctica/Palmer',
                    'Atlantic/Stanley' => '(UTC-03:00) Atlantic/Stanley',
                    'Atlantic/Bermuda' => '(UTC-03:00) Atlantic/Bermuda',
                    'Antarctica/Rothera' => '(UTC-03:00) Antarctica/Rothera',
                    'America/Moncton' => '(UTC-03:00) America/Moncton',
                    'America/Maceio' => '(UTC-03:00) America/Maceio',
                    'America/Recife' => '(UTC-03:00) America/Recife',
                    'America/Santarem' => '(UTC-03:00) America/Santarem',
                    'America/Santiago' => '(UTC-03:00) America/Santiago',
                    'America/Thule' => '(UTC-03:00) America/Thule',
                    'America/Paramaribo' => '(UTC-03:00) America/Paramaribo',
                    'America/Argentina/Rio_Gallegos' => '(UTC-03:00) America/Argentina/Rio_Gallegos',
                    'America/Argentina/Mendoza' => '(UTC-03:00) America/Argentina/Mendoza',
                    'America/Argentina/Salta' => '(UTC-03:00) America/Argentina/Salta',
                    'America/Argentina/San_Juan' => '(UTC-03:00) America/Argentina/San_Juan',
                    'America/Argentina/San_Luis' => '(UTC-03:00) America/Argentina/San_Luis',
                    'America/Argentina/La_Rioja' => '(UTC-03:00) America/Argentina/La_Rioja',
                    'America/Argentina/Cordoba' => '(UTC-03:00) America/Argentina/Cordoba',
                    'America/Halifax' => '(UTC-03:00) America/Halifax',
                    'America/Araguaina' => '(UTC-03:00) America/Araguaina',
                    'America/Argentina/Buenos_Aires' => '(UTC-03:00) America/Argentina/Buenos_Aires',
                    'America/Argentina/Catamarca' => '(UTC-03:00) America/Argentina/Catamarca',
                    'America/Argentina/Tucuman' => '(UTC-03:00) America/Argentina/Tucuman',
                    'America/Argentina/Jujuy' => '(UTC-03:00) America/Argentina/Jujuy',
                    'America/Fortaleza' => '(UTC-03:00) America/Fortaleza',
                    'America/Goose_Bay' => '(UTC-03:00) America/Goose_Bay',
                    'America/Glace_Bay' => '(UTC-03:00) America/Glace_Bay',
                    'America/Godthab' => '(UTC-03:00) America/Godthab',
                    'America/Argentina/Ushuaia' => '(UTC-03:00) America/Argentina/Ushuaia',
                    'America/Cayenne' => '(UTC-03:00) America/Cayenne',
                    'America/Cuiaba' => '(UTC-03:00) America/Cuiaba',
                    'America/Belem' => '(UTC-03:00) America/Belem',
                    'America/Asuncion' => '(UTC-03:00) America/Asuncion',
                    'America/Bahia' => '(UTC-03:00) America/Bahia',
                    'America/Campo_Grande' => '(UTC-03:00) America/Campo_Grande',
                    'America/St_Johns' => '(UTC-02:30) America/St_Johns',
                    'America/Miquelon' => '(UTC-02:00) America/Miquelon',
                    'Atlantic/South_Georgia' => '(UTC-02:00) Atlantic/South_Georgia',
                    'America/Montevideo' => '(UTC-02:00) America/Montevideo',
                    'America/Sao_Paulo' => '(UTC-02:00) America/Sao_Paulo',
                    'America/Noronha' => '(UTC-02:00) America/Noronha',
                    'Atlantic/Cape_Verde' => '(UTC-01:00) Atlantic/Cape_Verde',
                    'America/Scoresbysund' => '(UTC-01:00) America/Scoresbysund',
                    'Atlantic/Azores' => '(UTC-01:00) Atlantic/Azores',
                    'Africa/Casablanca' => '(UTC+00:00) Africa/Casablanca',
                    'Africa/Conakry' => '(UTC+00:00) Africa/Conakry',
                    'Europe/London' => '(UTC+00:00) Europe/London',
                    'Africa/Lome' => '(UTC+00:00) Africa/Lome',
                    'Africa/El_Aaiun' => '(UTC+00:00) Africa/El_Aaiun',
                    'Africa/Freetown' => '(UTC+00:00) Africa/Freetown',
                    'Africa/Accra' => '(UTC+00:00) Africa/Accra',
                    'Africa/Dakar' => '(UTC+00:00) Africa/Dakar',
                    'Atlantic/St_Helena' => '(UTC+00:00) Atlantic/St_Helena',
                    'Atlantic/Reykjavik' => '(UTC+00:00) Atlantic/Reykjavik',
                    'Atlantic/Faroe' => '(UTC+00:00) Atlantic/Faroe',
                    'Atlantic/Madeira' => '(UTC+00:00) Atlantic/Madeira',
                    'Atlantic/Canary' => '(UTC+00:00) Atlantic/Canary',
                    'Africa/Sao_Tome' => '(UTC+00:00) Africa/Sao_Tome',
                    'Africa/Banjul' => '(UTC+00:00) Africa/Banjul',
                    'UTC' => '(UTC+00:00) UTC',
                    'Africa/Ouagadougou' => '(UTC+00:00) Africa/Ouagadougou',
                    'Europe/Guernsey' => '(UTC+00:00) Europe/Guernsey',
                    'Africa/Bissau' => '(UTC+00:00) Africa/Bissau',
                    'America/Danmarkshavn' => '(UTC+00:00) America/Danmarkshavn',
                    'Europe/Isle_of_Man' => '(UTC+00:00) Europe/Isle_of_Man',
                    'Africa/Nouakchott' => '(UTC+00:00) Africa/Nouakchott',
                    'Africa/Bamako' => '(UTC+00:00) Africa/Bamako',
                    'Europe/Dublin' => '(UTC+00:00) Europe/Dublin',
                    'Africa/Abidjan' => '(UTC+00:00) Africa/Abidjan',
                    'Antarctica/Troll' => '(UTC+00:00) Antarctica/Troll',
                    'Europe/Lisbon' => '(UTC+00:00) Europe/Lisbon',
                    'Europe/Jersey' => '(UTC+00:00) Europe/Jersey',
                    'Africa/Monrovia' => '(UTC+00:00) Africa/Monrovia',
                    'Africa/Algiers' => '(UTC+01:00) Africa/Algiers',
                    'Europe/Luxembourg' => '(UTC+01:00) Europe/Luxembourg',
                    'Africa/Bangui' => '(UTC+01:00) Africa/Bangui',
                    'Europe/Ljubljana' => '(UTC+01:00) Europe/Ljubljana',
                    'Europe/Stockholm' => '(UTC+01:00) Europe/Stockholm',
                    'Europe/Oslo' => '(UTC+01:00) Europe/Oslo',
                    'Europe/Skopje' => '(UTC+01:00) Europe/Skopje',
                    'Europe/Monaco' => '(UTC+01:00) Europe/Monaco',
                    'Europe/Paris' => '(UTC+01:00) Europe/Paris',
                    'Europe/Sarajevo' => '(UTC+01:00) Europe/Sarajevo',
                    'Europe/Rome' => '(UTC+01:00) Europe/Rome',
                    'Europe/Podgorica' => '(UTC+01:00) Europe/Podgorica',
                    'Europe/San_Marino' => '(UTC+01:00) Europe/San_Marino',
                    'Europe/Amsterdam' => '(UTC+01:00) Europe/Amsterdam',
                    'Europe/Tirane' => '(UTC+01:00) Europe/Tirane',
                    'Europe/Zagreb' => '(UTC+01:00) Europe/Zagreb',
                    'Europe/Zurich' => '(UTC+01:00) Europe/Zurich',
                    'Europe/Malta' => '(UTC+01:00) Europe/Malta',
                    'Europe/Warsaw' => '(UTC+01:00) Europe/Warsaw',
                    'Europe/Vienna' => '(UTC+01:00) Europe/Vienna',
                    'Europe/Vaduz' => '(UTC+01:00) Europe/Vaduz',
                    'Europe/Vatican' => '(UTC+01:00) Europe/Vatican',
                    'Europe/Madrid' => '(UTC+01:00) Europe/Madrid',
                    'Europe/Brussels' => '(UTC+01:00) Europe/Brussels',
                    'Africa/Kinshasa' => '(UTC+01:00) Africa/Kinshasa',
                    'Africa/Lagos' => '(UTC+01:00) Africa/Lagos',
                    'Europe/Busingen' => '(UTC+01:00) Europe/Busingen',
                    'Africa/Douala' => '(UTC+01:00) Africa/Douala',
                    'Africa/Ceuta' => '(UTC+01:00) Africa/Ceuta',
                    'Europe/Budapest' => '(UTC+01:00) Europe/Budapest',
                    'Africa/Libreville' => '(UTC+01:00) Africa/Libreville',
                    'Africa/Luanda' => '(UTC+01:00) Africa/Luanda',
                    'Africa/Porto-Novo' => '(UTC+01:00) Africa/Porto-Novo',
                    'Africa/Tunis' => '(UTC+01:00) Africa/Tunis',
                    'Africa/Niamey' => '(UTC+01:00) Africa/Niamey',
                    'Africa/Ndjamena' => '(UTC+01:00) Africa/Ndjamena',
                    'Africa/Malabo' => '(UTC+01:00) Africa/Malabo',
                    'Europe/Gibraltar' => '(UTC+01:00) Europe/Gibraltar',
                    'Europe/Prague' => '(UTC+01:00) Europe/Prague',
                    'Europe/Copenhagen' => '(UTC+01:00) Europe/Copenhagen',
                    'Europe/Belgrade' => '(UTC+01:00) Europe/Belgrade',
                    'Europe/Berlin' => '(UTC+01:00) Europe/Berlin',
                    'Africa/Brazzaville' => '(UTC+01:00) Africa/Brazzaville',
                    'Arctic/Longyearbyen' => '(UTC+01:00) Arctic/Longyearbyen',
                    'Europe/Bratislava' => '(UTC+01:00) Europe/Bratislava',
                    'Europe/Andorra' => '(UTC+01:00) Europe/Andorra',
                    'Europe/Uzhgorod' => '(UTC+02:00) Europe/Uzhgorod',
                    'Africa/Maputo' => '(UTC+02:00) Africa/Maputo',
                    'Africa/Windhoek' => '(UTC+02:00) Africa/Windhoek',
                    'Europe/Riga' => '(UTC+02:00) Europe/Riga',
                    'Asia/Nicosia' => '(UTC+02:00) Asia/Nicosia',
                    'Africa/Lusaka' => '(UTC+02:00) Africa/Lusaka',
                    'Africa/Tripoli' => '(UTC+02:00) Africa/Tripoli',
                    'Europe/Tallinn' => '(UTC+02:00) Europe/Tallinn',
                    'Africa/Blantyre' => '(UTC+02:00) Africa/Blantyre',
                    'Asia/Beirut' => '(UTC+02:00) Asia/Beirut',
                    'Europe/Athens' => '(UTC+02:00) Europe/Athens',
                    'Europe/Sofia' => '(UTC+02:00) Europe/Sofia',
                    'Europe/Mariehamn' => '(UTC+02:00) Europe/Mariehamn',
                    'Africa/Maseru' => '(UTC+02:00) Africa/Maseru',
                    'Africa/Mbabane' => '(UTC+02:00) Africa/Mbabane',
                    'Europe/Istanbul' => '(UTC+02:00) Europe/Istanbul',
                    'Europe/Vilnius' => '(UTC+02:00) Europe/Vilnius',
                    'Africa/Gaborone' => '(UTC+02:00) Africa/Gaborone',
                    'Asia/Jerusalem' => '(UTC+02:00) Asia/Jerusalem',
                    'Africa/Harare' => '(UTC+02:00) Africa/Harare',
                    'Europe/Kiev' => '(UTC+02:00) Europe/Kiev',
                    'Africa/Bujumbura' => '(UTC+02:00) Africa/Bujumbura',
                    'Asia/Gaza' => '(UTC+02:00) Asia/Gaza',
                    'Africa/Cairo' => '(UTC+02:00) Africa/Cairo',
                    'Europe/Bucharest' => '(UTC+02:00) Europe/Bucharest',
                    'Africa/Lubumbashi' => '(UTC+02:00) Africa/Lubumbashi',
                    'Africa/Johannesburg' => '(UTC+02:00) Africa/Johannesburg',
                    'Europe/Kaliningrad' => '(UTC+02:00) Europe/Kaliningrad',
                    'Asia/Hebron' => '(UTC+02:00) Asia/Hebron',
                    'Europe/Chisinau' => '(UTC+02:00) Europe/Chisinau',
                    'Europe/Zaporozhye' => '(UTC+02:00) Europe/Zaporozhye',
                    'Africa/Kigali' => '(UTC+02:00) Africa/Kigali',
                    'Europe/Helsinki' => '(UTC+02:00) Europe/Helsinki',
                    'Europe/Moscow' => '(UTC+03:00) Europe/Moscow',
                    'Africa/Addis_Ababa' => '(UTC+03:00) Africa/Addis_Ababa',
                    'Europe/Minsk' => '(UTC+03:00) Europe/Minsk',
                    'Asia/Damascus' => '(UTC+03:00) Asia/Damascus',
                    'Indian/Comoro' => '(UTC+03:00) Indian/Comoro',
                    'Antarctica/Syowa' => '(UTC+03:00) Antarctica/Syowa',
                    'Africa/Djibouti' => '(UTC+03:00) Africa/Djibouti',
                    'Indian/Antananarivo' => '(UTC+03:00) Indian/Antananarivo',
                    'Africa/Juba' => '(UTC+03:00) Africa/Juba',
                    'Indian/Mayotte' => '(UTC+03:00) Indian/Mayotte',
                    'Asia/Aden' => '(UTC+03:00) Asia/Aden',
                    'Asia/Baghdad' => '(UTC+03:00) Asia/Baghdad',
                    'Asia/Bahrain' => '(UTC+03:00) Asia/Bahrain',
                    'Africa/Asmara' => '(UTC+03:00) Africa/Asmara',
                    'Asia/Amman' => '(UTC+03:00) Asia/Amman',
                    'Asia/Kuwait' => '(UTC+03:00) Asia/Kuwait',
                    'Africa/Dar_es_Salaam' => '(UTC+03:00) Africa/Dar_es_Salaam',
                    'Africa/Khartoum' => '(UTC+03:00) Africa/Khartoum',
                    'Asia/Qatar' => '(UTC+03:00) Asia/Qatar',
                    'Europe/Volgograd' => '(UTC+03:00) Europe/Volgograd',
                    'Asia/Riyadh' => '(UTC+03:00) Asia/Riyadh',
                    'Europe/Simferopol' => '(UTC+03:00) Europe/Simferopol',
                    'Africa/Mogadishu' => '(UTC+03:00) Africa/Mogadishu',
                    'Africa/Kampala' => '(UTC+03:00) Africa/Kampala',
                    'Africa/Nairobi' => '(UTC+03:00) Africa/Nairobi',
                    'Asia/Tehran' => '(UTC+03:30) Asia/Tehran',
                    'Asia/Dubai' => '(UTC+04:00) Asia/Dubai',
                    'Indian/Reunion' => '(UTC+04:00) Indian/Reunion',
                    'Asia/Baku' => '(UTC+04:00) Asia/Baku',
                    'Europe/Samara' => '(UTC+04:00) Europe/Samara',
                    'Asia/Tbilisi' => '(UTC+04:00) Asia/Tbilisi',
                    'Indian/Mauritius' => '(UTC+04:00) Indian/Mauritius',
                    'Asia/Yerevan' => '(UTC+04:00) Asia/Yerevan',
                    'Indian/Mahe' => '(UTC+04:00) Indian/Mahe',
                    'Asia/Muscat' => '(UTC+04:00) Asia/Muscat',
                    'Asia/Kabul' => '(UTC+04:30) Asia/Kabul',
                    'Asia/Aqtau' => '(UTC+05:00) Asia/Aqtau',
                    'Antarctica/Mawson' => '(UTC+05:00) Antarctica/Mawson',
                    'Asia/Aqtobe' => '(UTC+05:00) Asia/Aqtobe',
                    'Indian/Maldives' => '(UTC+05:00) Indian/Maldives',
                    'Asia/Yekaterinburg' => '(UTC+05:00) Asia/Yekaterinburg',
                    'Asia/Oral' => '(UTC+05:00) Asia/Oral',
                    'Asia/Samarkand' => '(UTC+05:00) Asia/Samarkand',
                    'Asia/Tashkent' => '(UTC+05:00) Asia/Tashkent',
                    'Asia/Ashgabat' => '(UTC+05:00) Asia/Ashgabat',
                    'Asia/Karachi' => '(UTC+05:00) Asia/Karachi',
                    'Asia/Dushanbe' => '(UTC+05:00) Asia/Dushanbe',
                    'Indian/Kerguelen' => '(UTC+05:00) Indian/Kerguelen',
                    'Asia/Kolkata' => '(UTC+05:30) Asia/Kolkata',
                    'Asia/Colombo' => '(UTC+05:30) Asia/Colombo',
                    'Asia/Kathmandu' => '(UTC+05:45) Asia/Kathmandu',
                    'Indian/Chagos' => '(UTC+06:00) Indian/Chagos',
                    'Antarctica/Vostok' => '(UTC+06:00) Antarctica/Vostok',
                    'Asia/Novosibirsk' => '(UTC+06:00) Asia/Novosibirsk',
                    'Asia/Urumqi' => '(UTC+06:00) Asia/Urumqi',
                    'Asia/Omsk' => '(UTC+06:00) Asia/Omsk',
                    'Asia/Thimphu' => '(UTC+06:00) Asia/Thimphu',
                    'Asia/Qyzylorda' => '(UTC+06:00) Asia/Qyzylorda',
                    'Asia/Bishkek' => '(UTC+06:00) Asia/Bishkek',
                    'Asia/Dhaka' => '(UTC+06:00) Asia/Dhaka',
                    'Asia/Almaty' => '(UTC+06:00) Asia/Almaty',
                    'Asia/Rangoon' => '(UTC+06:30) Asia/Rangoon',
                    'Indian/Cocos' => '(UTC+06:30) Indian/Cocos',
                    'Asia/Hovd' => '(UTC+07:00) Asia/Hovd',
                    'Asia/Phnom_Penh' => '(UTC+07:00) Asia/Phnom_Penh',
                    'Asia/Pontianak' => '(UTC+07:00) Asia/Pontianak',
                    'Asia/Jakarta' => '(UTC+07:00) Asia/Jakarta',
                    'Antarctica/Davis' => '(UTC+07:00) Antarctica/Davis',
                    'Asia/Krasnoyarsk' => '(UTC+07:00) Asia/Krasnoyarsk',
                    'Asia/Bangkok' => '(UTC+07:00) Asia/Bangkok',
                    'Asia/Novokuznetsk' => '(UTC+07:00) Asia/Novokuznetsk',
                    'Indian/Christmas' => '(UTC+07:00) Indian/Christmas',
                    'Asia/Ho_Chi_Minh' => '(UTC+07:00) Asia/Ho_Chi_Minh',
                    'Asia/Vientiane' => '(UTC+07:00) Asia/Vientiane',
                    'Asia/Macau' => '(UTC+08:00) Asia/Macau',
                    'Asia/Makassar' => '(UTC+08:00) Asia/Makassar',
                    'Asia/Manila' => '(UTC+08:00) Asia/Manila',
                    'Asia/Kuala_Lumpur' => '(UTC+08:00) Asia/Kuala_Lumpur',
                    'Asia/Kuching' => '(UTC+08:00) Asia/Kuching',
                    'Asia/Taipei' => '(UTC+08:00) Asia/Taipei',
                    'Asia/Irkutsk' => '(UTC+08:00) Asia/Irkutsk',
                    'Asia/Choibalsan' => '(UTC+08:00) Asia/Choibalsan',
                    'Asia/Chita' => '(UTC+08:00) Asia/Chita',
                    'Asia/Brunei' => '(UTC+08:00) Asia/Brunei',
                    'Antarctica/Casey' => '(UTC+08:00) Antarctica/Casey',
                    'Asia/Ulaanbaatar' => '(UTC+08:00) Asia/Ulaanbaatar',
                    'Asia/Shanghai' => '(UTC+08:00) Asia/Shanghai',
                    'Asia/Hong_Kong' => '(UTC+08:00) Asia/Hong_Kong',
                    'Asia/Singapore' => '(UTC+08:00) Asia/Singapore',
                    'Australia/Perth' => '(UTC+08:00) Australia/Perth',
                    'Australia/Eucla' => '(UTC+08:45) Australia/Eucla',
                    'Asia/Dili' => '(UTC+09:00) Asia/Dili',
                    'Asia/Khandyga' => '(UTC+09:00) Asia/Khandyga',
                    'Pacific/Palau' => '(UTC+09:00) Pacific/Palau',
                    'Asia/Jayapura' => '(UTC+09:00) Asia/Jayapura',
                    'Asia/Yakutsk' => '(UTC+09:00) Asia/Yakutsk',
                    'Asia/Tokyo' => '(UTC+09:00) Asia/Tokyo',
                    'Asia/Seoul' => '(UTC+09:00) Asia/Seoul',
                    'Asia/Pyongyang' => '(UTC+09:00) Asia/Pyongyang',
                    'Australia/Darwin' => '(UTC+09:30) Australia/Darwin',
                    'Pacific/Saipan' => '(UTC+10:00) Pacific/Saipan',
                    'Australia/Brisbane' => '(UTC+10:00) Australia/Brisbane',
                    'Australia/Lindeman' => '(UTC+10:00) Australia/Lindeman',
                    'Pacific/Port_Moresby' => '(UTC+10:00) Pacific/Port_Moresby',
                    'Pacific/Chuuk' => '(UTC+10:00) Pacific/Chuuk',
                    'Antarctica/DumontDUrville' => '(UTC+10:00) Antarctica/DumontDUrville',
                    'Pacific/Guam' => '(UTC+10:00) Pacific/Guam',
                    'Asia/Ust-Nera' => '(UTC+10:00) Asia/Ust-Nera',
                    'Asia/Vladivostok' => '(UTC+10:00) Asia/Vladivostok',
                    'Asia/Magadan' => '(UTC+10:00) Asia/Magadan',
                    'Asia/Sakhalin' => '(UTC+10:00) Asia/Sakhalin',
                    'Australia/Broken_Hill' => '(UTC+10:30) Australia/Broken_Hill',
                    'Australia/Adelaide' => '(UTC+10:30) Australia/Adelaide',
                    'Pacific/Pohnpei' => '(UTC+11:00) Pacific/Pohnpei',
                    'Pacific/Kosrae' => '(UTC+11:00) Pacific/Kosrae',
                    'Antarctica/Macquarie' => '(UTC+11:00) Antarctica/Macquarie',
                    'Australia/Hobart' => '(UTC+11:00) Australia/Hobart',
                    'Pacific/Noumea' => '(UTC+11:00) Pacific/Noumea',
                    'Asia/Srednekolymsk' => '(UTC+11:00) Asia/Srednekolymsk',
                    'Pacific/Bougainville' => '(UTC+11:00) Pacific/Bougainville',
                    'Australia/Currie' => '(UTC+11:00) Australia/Currie',
                    'Pacific/Guadalcanal' => '(UTC+11:00) Pacific/Guadalcanal',
                    'Australia/Melbourne' => '(UTC+11:00) Australia/Melbourne',
                    'Pacific/Efate' => '(UTC+11:00) Pacific/Efate',
                    'Australia/Lord_Howe' => '(UTC+11:00) Australia/Lord_Howe',
                    'Australia/Sydney' => '(UTC+11:00) Australia/Sydney',
                    'Pacific/Norfolk' => '(UTC+11:30) Pacific/Norfolk',
                    'Pacific/Wallis' => '(UTC+12:00) Pacific/Wallis',
                    'Pacific/Tarawa' => '(UTC+12:00) Pacific/Tarawa',
                    'Pacific/Wake' => '(UTC+12:00) Pacific/Wake',
                    'Pacific/Majuro' => '(UTC+12:00) Pacific/Majuro',
                    'Pacific/Nauru' => '(UTC+12:00) Pacific/Nauru',
                    'Pacific/Fiji' => '(UTC+12:00) Pacific/Fiji',
                    'Asia/Kamchatka' => '(UTC+12:00) Asia/Kamchatka',
                    'Pacific/Funafuti' => '(UTC+12:00) Pacific/Funafuti',
                    'Pacific/Kwajalein' => '(UTC+12:00) Pacific/Kwajalein',
                    'Asia/Anadyr' => '(UTC+12:00) Asia/Anadyr',
                    'Pacific/Tongatapu' => '(UTC+13:00) Pacific/Tongatapu',
                    'Pacific/Auckland' => '(UTC+13:00) Pacific/Auckland',
                    'Pacific/Enderbury' => '(UTC+13:00) Pacific/Enderbury',
                    'Pacific/Fakaofo' => '(UTC+13:00) Pacific/Fakaofo',
                    'Antarctica/McMurdo' => '(UTC+13:00) Antarctica/McMurdo',
                    'Pacific/Chatham' => '(UTC+13:45) Pacific/Chatham',
                    'Pacific/Apia' => '(UTC+14:00) Pacific/Apia',
                    'Pacific/Kiritimati' => '(UTC+14:00) Pacific/Kiritimati'
                ],
                'name' => 'system.timezone'
            ],
            'system.pages.dateformat' => [
                'type' => '_parent',
                'name' => 'system.pages.dateformat'
            ],
            'system.pages.dateformat.default' => [
                'type' => 'select',
                'size' => 'medium',
                'selectize' => [
                    'create' => true
                ],
                'label' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT',
                'help' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT_HELP',
                'placeholder' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT_PLACEHOLDER',
                '@data-options' => '\\Grav\\Common\\Utils::dateFormats',
                'options' => [
                    '' => 'Auto Guess or Enter Custom',
                    'd-m-Y H:i' => 'd-m-Y H:i (e.g. 28-10-2015 17:21)',
                    'Y-m-d H:i' => 'Y-m-d H:i (e.g. 2015-10-28 17:21)',
                    'm/d/Y h:i a' => 'm/d/Y h:i (e.g. 10/28/2015 05:21 pm)',
                    'H:i d-m-Y' => 'H:i d-m-Y (e.g. 17:21 28-10-2015)',
                    'h:i a m/d/Y' => 'h:i a m/d/Y (e.g. 05:21 pm 10/28/2015)'
                ],
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'system.pages.dateformat.default'
            ],
            'system.pages.dateformat.short' => [
                'type' => 'dateformat',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.SHORT_DATE_FORMAT',
                'help' => 'PLUGIN_ADMIN.SHORT_DATE_FORMAT_HELP',
                'default' => 'jS M Y',
                'options' => [
                    'F jS \\a\\t g:ia' => 'Date1',
                    'l jS \\of F g:i A' => 'Date2',
                    'D, m M Y G:i:s' => 'Date3',
                    'd-m-y G:i' => 'Date4',
                    'jS M Y' => 'Date5'
                ],
                'name' => 'system.pages.dateformat.short'
            ],
            'system.pages.dateformat.long' => [
                'type' => 'dateformat',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.LONG_DATE_FORMAT',
                'help' => 'PLUGIN_ADMIN.LONG_DATE_FORMAT_HELP',
                'options' => [
                    'F jS \\a\\t g:ia' => 'Date1',
                    'l jS \\of F g:i A' => 'Date2',
                    'D, m M Y G:i:s' => 'Date3',
                    'd-m-y G:i' => 'Date4',
                    'jS M Y' => 'Date5'
                ],
                'name' => 'system.pages.dateformat.long'
            ],
            'system.pages.order' => [
                'type' => '_parent',
                'name' => 'system.pages.order'
            ],
            'system.pages.order.by' => [
                'type' => 'select',
                'size' => 'long',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.DEFAULT_ORDERING',
                'help' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_HELP',
                'options' => [
                    'default' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DEFAULT',
                    'folder' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_FOLDER',
                    'title' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_TITLE',
                    'date' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DATE'
                ],
                'name' => 'system.pages.order.by'
            ],
            'system.pages.order.dir' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DEFAULT_ORDER_DIRECTION',
                'highlight' => 'asc',
                'default' => 'desc',
                'help' => 'PLUGIN_ADMIN.DEFAULT_ORDER_DIRECTION_HELP',
                'options' => [
                    'asc' => 'PLUGIN_ADMIN.ASCENDING',
                    'desc' => 'PLUGIN_ADMIN.DESCENDING'
                ],
                'name' => 'system.pages.order.dir'
            ],
            'system.pages.list' => [
                'type' => '_parent',
                'name' => 'system.pages.list'
            ],
            'system.pages.list.count' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.DEFAULT_PAGE_COUNT',
                'help' => 'PLUGIN_ADMIN.DEFAULT_PAGE_COUNT_HELP',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.pages.list.count'
            ],
            'system.pages.publish_dates' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DATE_BASED_PUBLISHING',
                'help' => 'PLUGIN_ADMIN.DATE_BASED_PUBLISHING_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.publish_dates'
            ],
            'system.pages.events' => [
                'type' => 'checkboxes',
                'label' => 'PLUGIN_ADMIN.EVENTS',
                'help' => 'PLUGIN_ADMIN.EVENTS_HELP',
                'default' => [
                    0 => [
                        'page' => true
                    ],
                    1 => [
                        'twig' => true
                    ]
                ],
                'options' => [
                    'page' => 'Page Events',
                    'twig' => 'Twig Events'
                ],
                'use' => 'keys',
                'name' => 'system.pages.events'
            ],
            'system.pages.redirect_default_route' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_ROUTE',
                'help' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_ROUTE_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.redirect_default_route'
            ],
            'system.pages.redirect_default_code' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_CODE',
                'help' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_CODE_HELP',
                'options' => [
                    301 => '301 - Permanent',
                    303 => '303 - Other',
                    307 => '307 - Temporary'
                ],
                'name' => 'system.pages.redirect_default_code'
            ],
            'system.pages.redirect_trailing_slash' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.REDIRECT_TRAILING_SLASH',
                'help' => 'PLUGIN_ADMIN.REDIRECT_TRAILING_SLASH_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.redirect_trailing_slash'
            ],
            'system.pages.ignore_hidden' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IGNORE_HIDDEN',
                'help' => 'PLUGIN_ADMIN.IGNORE_HIDDEN_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.ignore_hidden'
            ],
            'system.pages.ignore_files' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.IGNORE_FILES',
                'help' => 'PLUGIN_ADMIN.IGNORE_FILES_HELP',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.pages.ignore_files'
            ],
            'system.pages.ignore_folders' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.IGNORE_FOLDERS',
                'help' => 'PLUGIN_ADMIN.IGNORE_FOLDERS_HELP',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.pages.ignore_folders'
            ],
            'system.pages.url_taxonomy_filters' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ALLOW_URL_TAXONOMY_FILTERS',
                'help' => 'PLUGIN_ADMIN.ALLOW_URL_TAXONOMY_FILTERS_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.url_taxonomy_filters'
            ],
            'system.languages' => [
                'type' => '_parent',
                'name' => 'system.languages'
            ],
            'system.languages.supported' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.SUPPORTED',
                'help' => 'PLUGIN_ADMIN.SUPPORTED_HELP',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.languages.supported'
            ],
            'system.languages.include_default_lang' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.INCLUDE_DEFAULT_LANG',
                'help' => 'PLUGIN_ADMIN.INCLUDE_DEFAULT_LANG_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.include_default_lang'
            ],
            'system.languages.translations' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TRANSLATIONS_ENABLED',
                'help' => 'PLUGIN_ADMIN.TRANSLATIONS_ENABLED_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.translations'
            ],
            'system.languages.translations_fallback' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TRANSLATIONS_FALLBACK',
                'help' => 'PLUGIN_ADMIN.TRANSLATIONS_FALLBACK_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.translations_fallback'
            ],
            'system.languages.session_store_active' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ACTIVE_LANGUAGE_IN_SESSION',
                'help' => 'PLUGIN_ADMIN.ACTIVE_LANGUAGE_IN_SESSION_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.session_store_active'
            ],
            'system.languages.http_accept_language' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.HTTP_ACCEPT_LANGUAGE',
                'help' => 'PLUGIN_ADMIN.HTTP_ACCEPT_LANGUAGE_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.http_accept_language'
            ],
            'system.languages.override_locale' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.OVERRIDE_LOCALE',
                'help' => 'PLUGIN_ADMIN.OVERRIDE_LOCALE_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.override_locale'
            ],
            'system.pages.expires' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.EXPIRES',
                'help' => 'PLUGIN_ADMIN.EXPIRES_HELP',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.pages.expires'
            ],
            'system.pages.last_modified' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.LAST_MODIFIED',
                'help' => 'PLUGIN_ADMIN.LAST_MODIFIED_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.last_modified'
            ],
            'system.pages.etag' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ETAG',
                'help' => 'PLUGIN_ADMIN.ETAG_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.etag'
            ],
            'system.pages.vary_accept_encoding' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.VARY_ACCEPT_ENCODING',
                'help' => 'PLUGIN_ADMIN.VARY_ACCEPT_ENCODING_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.vary_accept_encoding'
            ],
            'system.pages.markdown' => [
                'type' => '_parent',
                'name' => 'system.pages.markdown'
            ],
            'system.pages.markdown.extra' => [
                'type' => 'toggle',
                'label' => 'Markdown extra',
                'help' => 'PLUGIN_ADMIN.MARKDOWN_EXTRA_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.extra'
            ],
            'system.pages.markdown.auto_line_breaks' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTO_LINE_BREAKS',
                'help' => 'PLUGIN_ADMIN.AUTO_LINE_BREAKS_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.auto_line_breaks'
            ],
            'system.pages.markdown.auto_url_links' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTO_URL_LINKS',
                'help' => 'PLUGIN_ADMIN.AUTO_URL_LINKS_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.auto_url_links'
            ],
            'system.pages.markdown.escape_markup' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ESCAPE_MARKUP',
                'help' => 'PLUGIN_ADMIN.ESCAPE_MARKUP_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.escape_markup'
            ],
            'system.cache' => [
                'type' => '_parent',
                'name' => 'system.cache'
            ],
            'system.cache.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CACHING',
                'help' => 'PLUGIN_ADMIN.CACHING_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.enabled'
            ],
            'system.cache.check' => [
                'type' => '_parent',
                'name' => 'system.cache.check'
            ],
            'system.cache.check.method' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.CACHE_CHECK_METHOD',
                'help' => 'PLUGIN_ADMIN.CACHE_CHECK_METHOD_HELP',
                'options' => [
                    'file' => 'File',
                    'folder' => 'Folder',
                    'none' => 'None'
                ],
                'name' => 'system.cache.check.method'
            ],
            'system.cache.driver' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.CACHE_DRIVER',
                'help' => 'PLUGIN_ADMIN.CACHE_DRIVER_HELP',
                'options' => [
                    'auto' => 'Auto detect',
                    'file' => 'File',
                    'apc' => 'APC',
                    'xcache' => 'XCache',
                    'memcache' => 'MemCache',
                    'wincache' => 'WinCache'
                ],
                'name' => 'system.cache.driver'
            ],
            'system.cache.prefix' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.CACHE_PREFIX',
                'help' => 'PLUGIN_ADMIN.CACHE_PREFIX_HELP',
                'placeholder' => 'PLUGIN_ADMIN.CACHE_PREFIX_PLACEHOLDER',
                'name' => 'system.cache.prefix'
            ],
            'system.cache.lifetime' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.LIFETIME',
                'help' => 'PLUGIN_ADMIN.LIFETIME_HELP',
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'system.cache.lifetime'
            ],
            'system.cache.gzip' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.GZIP_COMPRESSION',
                'help' => 'PLUGIN_ADMIN.GZIP_COMPRESSION_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.gzip'
            ],
            'system.twig' => [
                'type' => '_parent',
                'name' => 'system.twig'
            ],
            'system.twig.cache' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_CACHING',
                'help' => 'PLUGIN_ADMIN.TWIG_CACHING_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.cache'
            ],
            'system.twig.debug' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_DEBUG',
                'help' => 'PLUGIN_ADMIN.TWIG_DEBUG_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.debug'
            ],
            'system.twig.auto_reload' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DETECT_CHANGES',
                'help' => 'PLUGIN_ADMIN.DETECT_CHANGES_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.auto_reload'
            ],
            'system.twig.autoescape' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTOESCAPE_VARIABLES',
                'help' => 'PLUGIN_ADMIN.AUTOESCAPE_VARIABLES_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.autoescape'
            ],
            'system.assets' => [
                'type' => '_parent',
                'name' => 'system.assets'
            ],
            'system.assets.css_pipeline' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_PIPELINE',
                'help' => 'PLUGIN_ADMIN.CSS_PIPELINE_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_pipeline'
            ],
            'system.assets.css_minify' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_MINIFY',
                'help' => 'PLUGIN_ADMIN.CSS_MINIFY_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify'
            ],
            'system.assets.css_minify_windows' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_MINIFY_WINDOWS_OVERRIDE',
                'help' => 'PLUGIN_ADMIN.CSS_MINIFY_WINDOWS_OVERRIDE_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify_windows'
            ],
            'system.assets.css_rewrite' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_REWRITE',
                'help' => 'PLUGIN_ADMIN.CSS_REWRITE_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_rewrite'
            ],
            'system.assets.js_pipeline' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE',
                'help' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_pipeline'
            ],
            'system.assets.js_minify' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_MINIFY',
                'help' => 'PLUGIN_ADMIN.JAVASCRIPT_MINIFY_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_minify'
            ],
            'system.assets.enable_asset_timestamp' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED_TIMESTAMPS_ON_ASSETS',
                'help' => 'PLUGIN_ADMIN.ENABLED_TIMESTAMPS_ON_ASSETS_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.enable_asset_timestamp'
            ],
            'system.assets.collections' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.COLLECTIONS',
                'placeholder_key' => 'collection_name',
                'placeholder_value' => 'collection_path',
                'name' => 'system.assets.collections'
            ],
            'system.errors' => [
                'type' => '_parent',
                'name' => 'system.errors'
            ],
            'system.errors.display' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DISPLAY_ERRORS',
                'help' => 'PLUGIN_ADMIN.DISPLAY_ERRORS_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.errors.display'
            ],
            'system.errors.log' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.LOG_ERRORS',
                'help' => 'PLUGIN_ADMIN.LOG_ERRORS_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.errors.log'
            ],
            'system.debugger' => [
                'type' => '_parent',
                'name' => 'system.debugger'
            ],
            'system.debugger.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DEBUGGER',
                'help' => 'PLUGIN_ADMIN.DEBUGGER_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.enabled'
            ],
            'system.debugger.shutdown' => [
                'type' => '_parent',
                'name' => 'system.debugger.shutdown'
            ],
            'system.debugger.shutdown.close_connection' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SHUTDOWN_CLOSE_CONNECTION',
                'help' => 'PLUGIN_ADMIN.SHUTDOWN_CLOSE_CONNECTION_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.shutdown.close_connection'
            ],
            'system.images' => [
                'type' => '_parent',
                'name' => 'system.images'
            ],
            'system.images.default_image_quality' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.DEFAULT_IMAGE_QUALITY',
                'help' => 'PLUGIN_ADMIN.DEFAULT_IMAGE_QUALITY_HELP',
                'classes' => 'x-small',
                'validate' => [
                    'type' => 'number',
                    'min' => 1,
                    'max' => 100
                ],
                'name' => 'system.images.default_image_quality'
            ],
            'system.images.cache_all' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CACHE_ALL',
                'help' => 'PLUGIN_ADMIN.CACHE_ALL_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.cache_all'
            ],
            'system.images.debug' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IMAGES_DEBUG',
                'help' => 'PLUGIN_ADMIN.IMAGES_DEBUG_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.debug'
            ],
            'system.media' => [
                'type' => '_parent',
                'name' => 'system.media'
            ],
            'system.media.upload_limit' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.UPLOAD_LIMIT',
                'help' => 'PLUGIN_ADMIN.UPLOAD_LIMIT_HELP',
                'classes' => 'small',
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'system.media.upload_limit'
            ],
            'system.media.enable_media_timestamp' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLE_MEDIA_TIMESTAMP',
                'help' => 'PLUGIN_ADMIN.ENABLE_MEDIA_TIMESTAMP_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.media.enable_media_timestamp'
            ],
            'system.session' => [
                'type' => '_parent',
                'name' => 'system.session'
            ],
            'system.session.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'help' => 'PLUGIN_ADMIN.SESSION_ENABLED_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.enabled'
            ],
            'system.session.timeout' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.TIMEOUT',
                'help' => 'PLUGIN_ADMIN.TIMEOUT_HELP',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.session.timeout'
            ],
            'system.session.name' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.NAME',
                'help' => 'PLUGIN_ADMIN.SESSION_NAME_HELP',
                'name' => 'system.session.name'
            ],
            'system.absolute_urls' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ABSOLUTE_URLS',
                'highlight' => 0,
                'help' => 'PLUGIN_ADMIN.ABSOLUTE_URLS_HELP',
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.absolute_urls'
            ],
            'system.param_sep' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.PARAMETER_SEPARATOR',
                'classes' => 'fancy',
                'help' => 'PLUGIN_ADMIN.PARAMETER_SEPARATOR_HELP',
                'default' => '',
                'options' => [
                    ':' => ': (default)',
                    ';' => '; (for Apache running on Windows)'
                ],
                'name' => 'system.param_sep'
            ]
        ],
        'rules' => [
            
        ],
        'nested' => [
            'plugins' => [
                'admin' => [
                    'Basics' => 'plugins.admin.Basics',
                    'enabled' => 'plugins.admin.enabled',
                    'route' => 'plugins.admin.route',
                    'theme' => 'plugins.admin.theme',
                    'edit_mode' => 'plugins.admin.edit_mode',
                    'google_fonts' => 'plugins.admin.google_fonts',
                    'show_beta_msg' => 'plugins.admin.show_beta_msg',
                    'enable_auto_updates_check' => 'plugins.admin.enable_auto_updates_check',
                    'session' => [
                        'timeout' => 'plugins.admin.session.timeout'
                    ],
                    'warnings' => [
                        'delete_page' => 'plugins.admin.warnings.delete_page'
                    ],
                    'Popularity' => 'plugins.admin.Popularity',
                    'popularity' => [
                        'enabled' => 'plugins.admin.popularity.enabled',
                        'ignore' => 'plugins.admin.popularity.ignore',
                        'history' => [
                            'daily' => 'plugins.admin.popularity.history.daily',
                            'monthly' => 'plugins.admin.popularity.history.monthly',
                            'visitors' => 'plugins.admin.popularity.history.visitors'
                        ]
                    ],
                    'dashboard' => [
                        'days_of_stats' => 'plugins.admin.dashboard.days_of_stats'
                    ]
                ],
                'archives' => [
                    'enabled' => 'plugins.archives.enabled',
                    'built_in_css' => 'plugins.archives.built_in_css',
                    'date_display_format' => 'plugins.archives.date_display_format',
                    'show_count' => 'plugins.archives.show_count',
                    'limit' => 'plugins.archives.limit',
                    'order' => [
                        'dir' => 'plugins.archives.order.dir',
                        'by' => 'plugins.archives.order.by'
                    ],
                    'filters' => 'plugins.archives.filters',
                    'filter_combinator' => 'plugins.archives.filter_combinator'
                ],
                'breadcrumbs' => [
                    'enabled' => 'plugins.breadcrumbs.enabled',
                    'show_all' => 'plugins.breadcrumbs.show_all',
                    'built_in_css' => 'plugins.breadcrumbs.built_in_css',
                    'include_home' => 'plugins.breadcrumbs.include_home',
                    'icon_home' => 'plugins.breadcrumbs.icon_home',
                    'icon_divider_classes' => 'plugins.breadcrumbs.icon_divider_classes',
                    'link_trailing' => 'plugins.breadcrumbs.link_trailing'
                ],
                'email' => [
                    'enabled' => 'plugins.email.enabled',
                    'mailer' => [
                        'engine' => 'plugins.email.mailer.engine',
                        'default' => 'plugins.email.mailer.default',
                        'smtp' => [
                            'server' => 'plugins.email.mailer.smtp.server',
                            'port' => 'plugins.email.mailer.smtp.port',
                            'encryption' => 'plugins.email.mailer.smtp.encryption',
                            'user' => 'plugins.email.mailer.smtp.user',
                            'password' => 'plugins.email.mailer.smtp.password'
                        ],
                        'sendmail' => [
                            'bin' => 'plugins.email.mailer.sendmail.bin'
                        ]
                    ],
                    'from' => 'plugins.email.from',
                    'to' => 'plugins.email.to'
                ],
                'error' => [
                    'enabled' => 'plugins.error.enabled',
                    'routes' => [
                        404 => 'plugins.error.routes.404'
                    ]
                ],
                'featherlight' => [
                    'enabled' => 'plugins.featherlight.enabled',
                    'active' => 'plugins.featherlight.active',
                    'gallery' => 'plugins.featherlight.gallery',
                    'openSpeed' => 'plugins.featherlight.openSpeed',
                    'closeSpeed' => 'plugins.featherlight.closeSpeed',
                    'closeOnClick' => 'plugins.featherlight.closeOnClick',
                    'closeOnEsc' => 'plugins.featherlight.closeOnEsc',
                    'root' => 'plugins.featherlight.root'
                ],
                'feed' => [
                    'enabled' => 'plugins.feed.enabled',
                    'limit' => 'plugins.feed.limit',
                    'description' => 'plugins.feed.description',
                    'lang' => 'plugins.feed.lang',
                    'length' => 'plugins.feed.length'
                ],
                'form' => [
                    'enabled' => 'plugins.form.enabled'
                ],
                'login' => [
                    'enabled' => 'plugins.login.enabled',
                    'built_in_css' => 'plugins.login.built_in_css',
                    'route' => 'plugins.login.route'
                ],
                'pagination' => [
                    'enabled' => 'plugins.pagination.enabled',
                    'delta' => 'plugins.pagination.delta',
                    'built_in_css' => 'plugins.pagination.built_in_css'
                ],
                'problems' => [
                    'enabled' => 'plugins.problems.enabled',
                    'built_in_css' => 'plugins.problems.built_in_css'
                ],
                'random' => [
                    'enabled' => 'plugins.random.enabled',
                    'route' => 'plugins.random.route',
                    'redirect' => 'plugins.random.redirect',
                    'filters' => 'plugins.random.filters',
                    'filter_combinator' => 'plugins.random.filter_combinator'
                ],
                'relatedpages' => [
                    'enabled' => 'plugins.relatedpages.enabled',
                    'basics_title' => 'plugins.relatedpages.basics_title',
                    'limit' => 'plugins.relatedpages.limit',
                    'show_score' => 'plugins.relatedpages.show_score',
                    'filter' => [
                        'items' => 'plugins.relatedpages.filter.items',
                        'order' => [
                            'by' => 'plugins.relatedpages.filter.order.by',
                            'dir' => 'plugins.relatedpages.filter.order.dir'
                        ]
                    ],
                    'page_in_filter' => 'plugins.relatedpages.page_in_filter',
                    'explicit_pages' => [
                        'process' => 'plugins.relatedpages.explicit_pages.process',
                        'score' => 'plugins.relatedpages.explicit_pages.score'
                    ],
                    'taxonomy_title' => 'plugins.relatedpages.taxonomy_title',
                    'taxonomy_match' => [
                        'taxonomy' => 'plugins.relatedpages.taxonomy_match.taxonomy',
                        'taxonomy_taxonomy' => [
                            'process' => 'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.process',
                            'score_scale' => 'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.score_scale'
                        ],
                        'taxonomy_content' => [
                            'process' => 'plugins.relatedpages.taxonomy_match.taxonomy_content.process',
                            'score_scale' => 'plugins.relatedpages.taxonomy_match.taxonomy_content.score_scale'
                        ]
                    ],
                    'content_title' => 'plugins.relatedpages.content_title',
                    'content_match' => [
                        'process' => 'plugins.relatedpages.content_match.process'
                    ],
                    'advanced_title' => 'plugins.relatedpages.advanced_title'
                ],
                'simplesearch' => [
                    'enabled' => 'plugins.simplesearch.enabled',
                    'built_in_css' => 'plugins.simplesearch.built_in_css',
                    'route' => 'plugins.simplesearch.route',
                    'template' => 'plugins.simplesearch.template',
                    'filters' => [
                        'category' => 'plugins.simplesearch.filters.category'
                    ],
                    'filter_combinator' => 'plugins.simplesearch.filter_combinator',
                    'order' => [
                        'by' => 'plugins.simplesearch.order.by',
                        'dir' => 'plugins.simplesearch.order.dir'
                    ]
                ],
                'sitemap' => [
                    'enabled' => 'plugins.sitemap.enabled',
                    'route' => 'plugins.sitemap.route',
                    'ignores' => 'plugins.sitemap.ignores'
                ],
                'taxonomylist' => [
                    'enabled' => 'plugins.taxonomylist.enabled',
                    'route' => 'plugins.taxonomylist.route'
                ],
                'youtube' => [
                    'enabled' => 'plugins.youtube.enabled',
                    'built_in_css' => 'plugins.youtube.built_in_css',
                    'add_editor_button' => 'plugins.youtube.add_editor_button'
                ]
            ],
            'site' => [
                'title' => 'site.title',
                'author' => [
                    'name' => 'site.author.name',
                    'email' => 'site.author.email'
                ],
                'taxonomies' => 'site.taxonomies',
                'summary' => [
                    'enabled' => 'site.summary.enabled',
                    'size' => 'site.summary.size',
                    'format' => 'site.summary.format',
                    'delimiter' => 'site.summary.delimiter'
                ],
                'metadata' => 'site.metadata',
                'redirects' => 'site.redirects',
                'routes' => 'site.routes'
            ],
            'streams' => [
                'schemes' => [
                    'xxx' => 'streams.schemes.xxx'
                ]
            ],
            'system' => [
                'home' => [
                    'alias' => 'system.home.alias'
                ],
                'pages' => [
                    'theme' => 'system.pages.theme',
                    'process' => 'system.pages.process',
                    'dateformat' => [
                        'default' => 'system.pages.dateformat.default',
                        'short' => 'system.pages.dateformat.short',
                        'long' => 'system.pages.dateformat.long'
                    ],
                    'order' => [
                        'by' => 'system.pages.order.by',
                        'dir' => 'system.pages.order.dir'
                    ],
                    'list' => [
                        'count' => 'system.pages.list.count'
                    ],
                    'publish_dates' => 'system.pages.publish_dates',
                    'events' => 'system.pages.events',
                    'redirect_default_route' => 'system.pages.redirect_default_route',
                    'redirect_default_code' => 'system.pages.redirect_default_code',
                    'redirect_trailing_slash' => 'system.pages.redirect_trailing_slash',
                    'ignore_hidden' => 'system.pages.ignore_hidden',
                    'ignore_files' => 'system.pages.ignore_files',
                    'ignore_folders' => 'system.pages.ignore_folders',
                    'url_taxonomy_filters' => 'system.pages.url_taxonomy_filters',
                    'expires' => 'system.pages.expires',
                    'last_modified' => 'system.pages.last_modified',
                    'etag' => 'system.pages.etag',
                    'vary_accept_encoding' => 'system.pages.vary_accept_encoding',
                    'markdown' => [
                        'extra' => 'system.pages.markdown.extra',
                        'auto_line_breaks' => 'system.pages.markdown.auto_line_breaks',
                        'auto_url_links' => 'system.pages.markdown.auto_url_links',
                        'escape_markup' => 'system.pages.markdown.escape_markup'
                    ]
                ],
                'timezone' => 'system.timezone',
                'languages' => [
                    'supported' => 'system.languages.supported',
                    'include_default_lang' => 'system.languages.include_default_lang',
                    'translations' => 'system.languages.translations',
                    'translations_fallback' => 'system.languages.translations_fallback',
                    'session_store_active' => 'system.languages.session_store_active',
                    'http_accept_language' => 'system.languages.http_accept_language',
                    'override_locale' => 'system.languages.override_locale'
                ],
                'cache' => [
                    'enabled' => 'system.cache.enabled',
                    'check' => [
                        'method' => 'system.cache.check.method'
                    ],
                    'driver' => 'system.cache.driver',
                    'prefix' => 'system.cache.prefix',
                    'lifetime' => 'system.cache.lifetime',
                    'gzip' => 'system.cache.gzip'
                ],
                'twig' => [
                    'cache' => 'system.twig.cache',
                    'debug' => 'system.twig.debug',
                    'auto_reload' => 'system.twig.auto_reload',
                    'autoescape' => 'system.twig.autoescape'
                ],
                'assets' => [
                    'css_pipeline' => 'system.assets.css_pipeline',
                    'css_minify' => 'system.assets.css_minify',
                    'css_minify_windows' => 'system.assets.css_minify_windows',
                    'css_rewrite' => 'system.assets.css_rewrite',
                    'js_pipeline' => 'system.assets.js_pipeline',
                    'js_minify' => 'system.assets.js_minify',
                    'enable_asset_timestamp' => 'system.assets.enable_asset_timestamp',
                    'collections' => 'system.assets.collections'
                ],
                'errors' => [
                    'display' => 'system.errors.display',
                    'log' => 'system.errors.log'
                ],
                'debugger' => [
                    'enabled' => 'system.debugger.enabled',
                    'shutdown' => [
                        'close_connection' => 'system.debugger.shutdown.close_connection'
                    ]
                ],
                'images' => [
                    'default_image_quality' => 'system.images.default_image_quality',
                    'cache_all' => 'system.images.cache_all',
                    'debug' => 'system.images.debug'
                ],
                'media' => [
                    'upload_limit' => 'system.media.upload_limit',
                    'enable_media_timestamp' => 'system.media.enable_media_timestamp'
                ],
                'session' => [
                    'enabled' => 'system.session.enabled',
                    'timeout' => 'system.session.timeout',
                    'name' => 'system.session.name'
                ],
                'absolute_urls' => 'system.absolute_urls',
                'param_sep' => 'system.param_sep'
            ]
        ],
        'filter' => [
            'validation' => true
        ]
    ]
];
