<?php

function extractHtmlSection($htmlFile, $tagName) {
    if (!file_exists($htmlFile)) {
        return '';
    }

    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    @$dom->loadHTMLFile($htmlFile, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    libxml_clear_errors();

    $elements = $dom->getElementsByTagName($tagName);
    return ($elements->length > 0) ? $dom->saveHTML($elements->item(0)) : '';
}

function extractHeadSection($htmlFile) {
    return extractHtmlSection($htmlFile, 'head');
}

function extractHeader($htmlFile) {
    return extractHtmlSection($htmlFile, 'header');
}

function extractFooter($htmlFile) {
    return extractHtmlSection($htmlFile, 'footer');
}
?>
