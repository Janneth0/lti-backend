<?php
$string['pluginname'] = 'FARO Accessibility Panel';
$string['opentoolbar'] = 'Open accessibility panel';
$string['close'] = 'Close';
$string['welcome'] = 'Hello, {$a}!';
$string['welcomeback'] = 'Welcome back, {$a}!';
$string['navigation'] = 'Course navigation';
$string['nocoursenav'] = 'No course navigation available on this page.';
$string['reading'] = 'Assisted reading';
$string['readcontent'] = 'Read content';
$string['stopreading'] = 'Stop';
$string['speed'] = 'Speed';
$string['visualsettings'] = 'Visual settings';
$string['decreasefont'] = 'Decrease font size';
$string['resetfont'] = 'Reset font size';
$string['increasefont'] = 'Increase font size';
$string['highcontrast'] = 'High contrast';
$string['dyslexiafont'] = 'Dyslexia-friendly font';
$string['spacing'] = 'Text spacing';
$string['summary'] = 'Content summary';
$string['generatesummary'] = 'Generate summary';
$string['progress'] = 'Course progress';
$string['completionnotenabled'] = 'Activity completion tracking is not enabled in this course.';

// Settings
$string['settings_backendheading'] = 'Backend connection';
$string['settings_backendheading_desc'] = 'Accessibility server (Node API + own database) that stores each user\'s profile, onboarding state and usage events. If left empty, the panel runs in local mode with no persistence (onboarding is shown every time).';
$string['settings_toolurl'] = 'Backend URL';
$string['settings_toolurl_desc'] = 'Base URL of the accessibility backend (e.g. https://a11y-api.yourdomain.com), no trailing slash.';
$string['settings_sharedsecret'] = 'Shared secret';
$string['settings_sharedsecret_desc'] = 'HMAC-SHA256 key used to sign the token that identifies the user to the backend. Must match MOODLE_SHARED_SECRET in the backend\'s .env exactly.';
$string['settings_panelheading'] = 'Visible panel sections';

// Privacy
$string['privacy:metadata:accesspanel_backend'] = 'To identify the user, store their preferences, and log usage events for analytics, the plugin sends data to the external accessibility backend.';
$string['privacy:metadata:accesspanel_backend:moodle_user_sub'] = 'The Moodle user id, used as a unique identifier.';
$string['privacy:metadata:accesspanel_backend:moodle_course_id'] = 'The id of the course where the tool was used.';
$string['privacy:metadata:accesspanel_backend:user_agent'] = 'The browser user-agent, for diagnostic purposes.';
$string['privacy:metadata:accesspanel_backend:ip_address'] = 'The IP address of the session.';
$string['privacy:metadata:accesspanel_backend:accessibility_settings'] = 'Chosen accessibility preferences (contrast, font size and font family).';
$string['privacy:metadata:accesspanel_backend:event_logs'] = 'Tool usage events (applied presets, text-to-speech use, focus mode, etc.) used for analytics.';
