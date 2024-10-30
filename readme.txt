=== Mini Mail Dashboard Widget ===
Contributors: Marcel Bokhorst
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=AJSBB7DGNA3MJ&lc=US&item_name=Mini%20Mail%20Dashboard%20Widget%20WordPress%20Plugin&item_number=Marcel%20Bokhorst&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donate_SM%2egif%3aNonHosted
Tags: e-mail, email, mail, imap, sms, notify, notification, admin, dashboard, widget, security, ajax
Requires at least: 2.8
Tested up to: 3.5
Stable tag: 1.43

Send and receive e-mails on the administration panel and optionally receive SMS messages when new messages or comments arrive.

== Description ==

**This plugin is no longer supported**

Send and receive e-mail messages on the administration panel and optionally receive SMS messages containing the sender, subject and (part of) the text when new messages or comments arrive.

All e-mail is text based ([HTML](http://en.wikipedia.org/wiki/HTML "HTML") will be converted to text). However, it is possible to view HTML messages and to download attachments. Mail can be received by [POP3](http://en.wikipedia.org/wiki/POP3 "POP3") or [IMAP](http://en.wikipedia.org/wiki/IMAP "IMAP") and sent by [PHP mail](http://www.php.net/mail "PHP mail") or [SMTP](http://en.wikipedia.org/wiki/SMTP "SMTP"). Attaching files is possible. There is a simple address book for both e-mail addresses and phone numbers, which can optionally be populated with your WordPress users.

See [Other Notes](http://wordpress.org/extend/plugins/mini-mail-dashboard-widget/other_notes/ "Other Notes") for usage instructions.

**This plugin requires at least PHP 5.2.4.**

Please report any issue you have in the [forum](http://forum.bokhorst.biz/forums/forum/wordpress-plugins/mini-mail-dashboard-widget/).

See my [other plugins](http://wordpress.org/extend/plugins/profile/m66b "Marcel Bokhorst").

== Installation ==

*Using the WordPress dashboard*

1. Login to your weblog
1. Go to Plugins
1. Select Add New
1. Search for Mini Mail Dashboard Widget
1. Select Install
1. Select Install Now
1. Select Activate Plugin

*Manual*

1. Download and unzip the plugin
1. Upload the entire *mini-mail-dashboard-widget/* directory to the */wp-content/plugins/* directory
1. Activate the plugin through the Plugins menu in WordPress

== Frequently Asked Questions ==

= Why did you write this plugin? =

See [here](http://blog.bokhorst.biz/2414/computers-en-internet/wordpress-plugin-mini-mail-dashboard-widget/ "Marcel's weblog").

= Is this plugin multi-user? =

Yes.

= Who can configure and use the dashboard widget? =

By default users with *edit\_posts* capability (authors), but this can be changed with a setting.

= Who can access the general settings? =

Users with *manage\_options* capability (administrators).

= How can I change the styling? =

1. Copy *wp-mini-mail.css* to your upload directory to prevent it from being overwritten by an update
2. Change the style sheet to your wishes; the style sheet contains documentation

= Why does this plugin require at least PHP version 5.2.4? =

Because this is [a requirement](http://framework.zend.com/manual/en/requirements.introduction.html "PHP 5.2.4") of the Zend Framework.

= Are you affiliated to VoipBuster, Clickatell or TM4B? =

No.

= Can you give me an example of an SMS schedule? =

To receive SMS notifications from 9am to 5pm on working days you could use the following schedule:

* +9:00
* -17:00
* -Sat
* -Sun

= What do 'Connection refused' and 'Connection timed out' mean? =

Probably that your hosting provider has blocked POP3, IMAP and/or SMTP.
Try switching from IMAP to POP3 and/or from SMTP to PHP mail and/or from SSL/TLS to unencrypted.
Use the port test function to get an idea which ports are open or closed.
This function does not always work correct.

= Why do I get error 500? =

See previous question.
Maybe the maximum PHP execution time is exceeded.
You could use for example the [WP System Health](http://wordpress.org/extend/plugins/wp-system-health/ "WP System Health") plugin to check this limit.

= Why are not all new e-mail messages marked as unread? =

Because e-mail messages for which SMS notifications are sent are considered as read.

= The comment notifications don't work! =

The comment notification feature is known to be incompatible with the [IntenseDebate Comments](http://wordpress.org/extend/plugins/intensedebate/ "IntenseDebate") plugin.

= Where can I ask questions, report bugs and request features? =

You can use the [forum](http://forum.bokhorst.biz/forums/forum/wordpress-plugins/mini-mail-dashboard-widget/).

== Screenshots ==

1. The Mini Mail Dashboard Widget

== Changelog ==

= Development version =
* You can download the development version [here](http://downloads.wordpress.org/plugin/mini-mail-dashboard-widget.zip)

= 1.43 =
* Added [HTML Purifier](http://htmlpurifier.org/)
* Updated Zend Framework to version 1.11.12
* Added Lithuanian (lt\_LT) by [Host1Free](http://www.host1free.com/ "Host1Free")

= 1.42 =
* Added Romanian (ro\_RO) translation

= 1.41 =
* Bugfix: convert encoding when sending messages
* Removed [Sustainable Plugins Sponsorship Network](http://pluginsponsors.com/)

= 1.40 =
* Fixed notice
* More debug information
* Use *finfo_file* to determine mime type (when available)

= 1.39 =
* Added settings link to widget
* Tested with WordPress 3.3
* Updated Zend Framework to version 1.11.11

= 1.38 =
* Fixed some translations
* Updated Dutch (nl\_NL) and Flemisch (nl\_BE) translations
* Added Italian (it\_IT) translation by [Gianni](http://gidibao.net/ "Gianni")

= 1.37 =
* Fixed security issue reported by wordpress.org

= 1.36 =
* Bugfix: character encoding headers

= 1.35 =
* Bugfix: reply/forward

= 1.34 =
* Fixed a notice
* Updated Zend Framework to version 1.11.9
* Added *Sustainable Plugins Sponsorship Network* again

= 1.33 =
* Removed *Sustainable Plugins Sponsorship Network*

= 1.32 =
* Updated sponsorship ID

= 1.31 =
* Fixed all notices and warnings
* Updated Zend Framework to version 1.11.7
* Tested with WordPress 3.2

= 1.30 =
* New feature: time zone offset for SMS schedule
* Updated Zend framework to version 1.11.3

= 1.29 =
* Apply SMS schedule to comment notifications too
* Some small improvements

= 1.28 =
* Prevent sending comment notification of post author

= 1.27 =
* New feature: multiple recipients for notifications

= 1.26 =
* Bugfix: added Clickatell sender ID
* Improved debug logging

= 1.25 =
* Support for [TM4B](http://www.tm4b.com/ "TM4B")
* Bugfix: error handling for Clickatell

= 1.24 =
* Support for [Clickatell](http://www.clickatell.com/ "Clickatell")

= 1.23 =
* Improved error handling SMS

= 1.22 =
* Added option ('None') for no mail receiving (only sending)
* Updated Dutch (nl\_NL) and Flemisch (nl\_BE) translations

= 1.21 =
* Checking daily limit for SMS notifications for comments too
* More logging for comment notifications

= 1.20 =
* Bugfix: fixed typo TSL -> TLS for POP3 en IMAP settings

= 1.19 =
* New feature: select 'from' when composing message (use 'Your e-mail' setting)
* Added 'to' when displaying message
* Bugfix: hide BCC when replying
* Added more explanations to settings
* Tested with WordPress version 3.1 RC 3

= 1.18 =
* New feature: notify post author by SMS on new comment
* Bugfix: check for empty headers
* Updated Zend framework to version 1.11.2
* Tested with WordPress version 3.1 RC 2

= 1.17 =
* Updated Zend framework to version 1.11.1
* Tested with WordPress version 3.1 beta 1

= 1.16 =
* Added Turkish translation (tr\_TR) by *Weeebhosting*

= 1.15 =
* Rerelease of version 1.14 with the Zend framework included again

= 1.14 =
* Updated Zend framework to version 1.10.8

= 1.13 =
* Url encode abspath

= 1.12 =
* Deleting log entries older than one week automatically

= 1.11 =
* Improved attachment security and logic

= 1.10 =
* Added option to send BCC to self

= 1.9 =
* Fixed IMAP folder handling

= 1.8 =
* Fetching mail only when widget open

= 1.7 =
* Using http transport when needed

= 1.6 =
* 'I have donated' removes donate link/button

= 1.5 =
* Added option to select minimum capability to configure and use dashboard widget
* Updated Dutch and Flemisch translations
* Updated Zend framework to version 1.10.7

= 1.4.3 =
* Displaying maximum file attachment size

= 1.4.2 =
* Improved styling
* Improved ajax handling

= 1.4.1 =
* Improved pseudo cron handling
* Added option to store css in upload folder

= 1.4 =
* Added new option: limit number of messages to display
* Improved ajax error handling
* Updated Dutch and Flemisch translations
* Added Spanish (es\_ES) translation by [Maria Kovacs](http://www.bluekrawatte.at/ "Maria Kovacs")

= 1.3.4 =
* Check if *mime_content_type* is available
* Constructor compatibility with PHP 5.3.3+

= 1.3.3 =
* Fixed warning when upload folder does not exist yet

= 1.3.2 =
* Added file name html encode
* Generating .htaccess in upload folder

= 1.3.1 =
* Postponed creation of upload folder
* Added file name html decode

= 1.3 =
* Added attachments for outgoing messages

= 1.2.5 =
* Updated Zend framework to version 1.10.6
* Using Zend autoloader

= 1.2.4 =
* Added French (fr\_FR) translation by *wolforg*
* Updated Zend framework to version 1.10.5

= 1.2.3 =
* Fixed getting attachments and HTML body

= 1.2.2 =
* Port test of TCP, SSL and TSL protocol

= 1.2.1 =
* Function to test if the POP3, IMAP and/or SMTP port is open
* Added header with name and e-mail address to mail list
* Updated Dutch and Flemisch translations
* Updated Zend framework to version 1.10.3
* Fixed integration with Zend framework
* Updated Frequently Asked Questions

= 1.2 =
* Pre-release for testing

= 1.1.4 =
* Starting session if not started already for better compatibility with other plugins

= 1.1.3 =
* Checking PHP version before loading class with try-catch

= 1.1.2 =
* More compatible ajax handling

= 1.1.1 =
* Made address book working for BCC
* Localization of mail/SMS errors messages

= 1.1 =
* Added BCC field
* Little style fix
* Updated Zend framework to version 1.10.2

= 1.0.8 =
* Added titles to info, delete and attachment icons

= 1.0.7 =
* Added link to Privacy Policy of Sustainable Plugins Sponsorship Network
* Added option 'I have donated to this plugin'
* Moved Sustainable Plugins Sponsorship Network banner to top

= 1.0.6 =
* Participating in the [Sustainable Plugins Sponsorship Network](http://pluginsponsors.com/ "PluginSponsors.com")

= 1.0.5 =
* Updated German translation by *Frank*

= 1.0.4 =
* Updated Farsi translation

= 1.0.3 =
* Added Farsi (fa\_IR) translation by [Jafar](http://www.nanakar.ir/ "Jafar")

= 1.0.2 =
* Updated everything, but forgot to add translation to subversion ...

= 1.0.1 =
* Added German (de\_DE) translation by [Jan](http://terrarienpflanzen-lexikon.de/ "Jan")

= 1.0 =
* Added option to send announcement e-mails to WordPress users
* Added resources panel to tools menu
* Updated Dutch and Flemisch translations
* Updated to version 1, because there were no error reports so far

= 0.10 =
* Added checks for missing phone number / e-mail address

= 0.9 =
* Replaced *private* by *var* for class variables
* Undone change 0.8.2
* Reduced required capability for tools menu to *edit_posts*
* Added option to limit number of SMS messages per day
* Updated Dutch and Flemisch translations

= 0.8.2 =
* Checking PHP version before loading classes

= 0.8.1 =
* Disabled wrapping of text lines at column 70

= 0.8 =
* Added option to limit SMS message length
* Added option to limit from/subject/text length SMS notifications
* Updated Dutch and Flemisch translations
* Updated documentation (faq)

= 0.7.3 =
* Fix for non-cached HTML message view

= 0.7.2 =
* Fix for SMS phone number
* Replacing unsupported characters in SMS messages

= 0.7.1 =
* Fix for address/phone book

= 0.7 =
* Added option to download attachments
* Added call to *htmlspecialchars* to process message text
* Splitted mail connection and handling
* Improved logging
* Updated Dutch and Flemisch translations

= 0.6 =
* Added some HTML entities and JavaScript escapes
* Moved widget configuration to tools menu to allow non-administrators access
* Added option to in/exclude WordPress address book (default off for privacy reasons)
* Calling *stripslashes* to process form input
* Showing message data when deleting a message
* Updated Dutch and Flemisch translations
* Updated documentation

= 0.5 =
* Allowing multiple to/cc addresses (comma separates)
* Added address book to cc too
* Improved parsing/handling of addresses
* Some little code improvements (it's never perfect ;))

= 0.4 =
* Added option to view HTML messages
* Resetting address book when reply/forward
* Improved logging

= 0.3.1 =
* Fix for SMS schedule, which is now default off

= 0.3 =
* Added CC field to compose message
* Applying *htmlspecialchars* to error messages
* Calling *load\_plugin\_textdomain* for ajax calls
* Updated Dutch and Flemisch translations
* Some little code improvements

= 0.2.1 =
* Fix for fix for encoded headers with surrounding quotes

= 0.2 =
* Added Dutch (nl\_NL) and Flemisch (nl\_BE) translations
* Fixed bug: name of to address was set incorrect
* Fixed bug: use first address if multiple present (Reply-To)
* Improved style of compose buttons
* Fix for encoded headers with surrounding quotes

= 0.1 =
* Initial version

= 0.0 =
* Development version

== Upgrade Notice ==

= 1.43 =
Added HTML Purifier, updated Zend Framework, new translation

= 1.42 =
Translation update

= 1.41 =
Compliance

= 1.40 =
Compatibility

= 1.39 =
Compatibility

= 1.38 =
Fixed/updated/added translations

= 1.37 =
Fixed security issue

= 1.36 =
Bugfix

= 1.35 =
Bugfix

= 1.34 =
Compatibility

= 1.33 =
Compatibility

= 1.32 =
Compatibility

= 1.31 =
Compatibility

= 1.30 =
Time zone offset for SMS schedule

= 1.29 =
Apply SMS schedule to comment notifications too

= 1.28 =
Prevent sending comment notification of post author

= 1.27 =
New feature: multiple recipients notifications

= 1.26 =
Bugfix

= 1.25 =
TM4B support

= 1.24 =
Clickatell support

= 1.21 =
Small improvements

= 1.20 =
Bug fix

= 1.18 =
New feature: comment SMS notify

= 1.13 =
Compatibility

= 1.12 =
Auto clean log

= 1.11 =
Security

= 1.10 =
New feature: BCC self

= 1.9 =
Bug fix

= 1.8 =
New feature: fetch mail only when widget open

= 1.7 =
Compatibility

= 1.6 =
New feature: remove donate link/button

= 1.5 =
New feature: minimum capability

= 1.4.3 =
Usability

= 1.4.2 =
Compatibility

= 1.4.1 =
Compatibility

= 1.4 =
New setting

= 1.3.4 =
Compatibility

= 1.3.3 =
Bug fix

= 1.3.2 =
Security

= 1.3.1 =
Compatibility

= 1.3 =
Attachments for outgoing messages

= 1.2.3 =
Bugfix attachments, HTML body

= 1.2.2 =
Port test extension

= 1.2 =
Function to test if ports are open

= 1.1.4 =
Compatibility

= 1.1.3 =
Compatibility

= 1.1.2 =
Compatibility

= 1.1 =
Added BCC field, updated Zend framework

= 1.0.8 =
Added titles to info, delete and attachment icons

== Usage ==

Goto *Tools*, *Mini Mail*.

*Receiving mail*

1. Select at least a receive method in the *Mail* section
1. Fill in the *POP3* or *IMAP* settings

*Sending mail*

1. Fill in at least your e-mail address in the *Mail* section
1. Select at least a send method in the *Mail* section
1. Fill in the *SMTP* settings if needed

PHP mail is the simplest to use and probably allowed by your hosting provider.

*Sending SMS*

1. Register at one of the [VoipBuster clones](http://progx.ch/home-voip-smsbetamax-3-1-1.html "VoipBuster clones"), [Clickatell](http://www.clickatell.com/ "Clickatell") or [TM4B](http://www.tm4b.com/ "TM4B") and buy some credit
1. Fill in the SMS settings

*Save* the settings

The *General* settings are site-wide and only accessible for users with *manage\_options* capability (administrators).
All other settings are user specific.

== Acknowledgments ==

This plugin uses:

* [Zend Framework](http://framework.zend.com/ "Zend Framework") published under the new BSD license

* [XML Parser Class](http://www.criticaldevelopment.net/xml/ "XML Parser Class")
by *Adam A. Flynn*, published under the GNU Lesser General Public License version 2

* [PHP Class: HTML to Plain Text Conversion](http://www.chuggnutt.com/html2text.php "HTML to Plain Text Conversion")
by *Jonathon T. Abernathy* et al, published under the GNU General Public License version 2

* [HTML Purifier](http://htmlpurifier.org/) by *Edward Z. Yang* et al, publised under GNU Lesser General Public License Version 2.1

* [jQuery JavaScript Library](http://jquery.com/ "jQuery") published under both the GNU General Public License and MIT License

* [AJAX upload](http://valums.com/ajax-upload/ "AJAX upload") by *Andrew Valums*, published under the MIT license

* Ajax loader image generated by [ajaxload.info](http://ajaxload.info/ "ajaxload.info") "totally free for use"

* [Info](http://commons.wikimedia.org/wiki/File:Info_Simple_bw.svg "File:Info_Simple_bw.svg"),
[delete](http://commons.wikimedia.org/wiki/File:Pictogram_voting_delete.svg "Pictogram_voting_delete.svg") and
[attachment](http://commons.wikimedia.org/wiki/File:Gnome-mail-attachment.svg "File:Gnome-mail-attachment.svg")
icons from [Wikimedia Commons](http://commons.wikimedia.org/ "Wikimedia Commons"),
published under the GNU General Public License version 2 or released in the [public domain](http://en.wikipedia.org/wiki/Public_domain "public domain")

