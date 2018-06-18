# JLT Launchpad

## Introduction
A microformat/schema theme, built to work with (see https://indieweb.org/POSSE) and backfeed. This is a bare bones theme to allow quick jumpoff a into theme development.

Built in image lazyload, async scripts, critical CSS, multiple blog loading options, and SVG handling.

## Image Reveal Built In
Images can be set to animate into view as the reader scrolls down the page. All that is required is for 2 classes to be set on the image.


```
"sr top" - Animates the image from the top
"sr right" - Animates the image from the right
"sr bottom" - Animates the image from the bottom
"sr left" - Animates the image from the left
```

Simples!

## Developer Friendly
Built with developers in mind. File organsation has been considered to make a more efficent workflow. Gulp has been used to process all of those boring tasks. That has allowed us to keep the JS and CSS in small, easy to understand files.

To find out more about Gulp check out the [Gulp WordPress Framework](https://github.com/ahmadawais/WPGulp).

The code is documented as per [PHPDocs](https://www.phpdoc.org/) specification. This allows all functions ect to be outputted into a specification document if required.