=== Plugin Name ===
Contributors: adityavm
Donate link: 
Tags: image, subtitles, captions
Requires at least: 2.3.2
Tested up to: 2.5
Stable tag: 0.9


== Description ==

This is a Wordpress plug-in to automatically add subtitle-like captions to the images in your posts. The included stylesheet should take care of majority of cases. You can see it in action everywhere on Geekaholic, and on this page (images in post/page content only).

Requires the [jQuery][jq] framework.

The only customisation that you need to do is change the value of `$subtitler_body` in the plug-in file. It’s a comma-separated list of class names of containers with post content. For example, on Geekaholic, the classes I use for post bodies are the_body and body. So my list would be `the_body,body` (without the space).

[jq]: http://jquery.com

== Installation ==

1. Upload all the files into one directory in your plugins folder
2. Activate the plugin from 'Plugins' tab

== Known Bugs ==

0.9: Subtitles created in IE are unstyle-able.

