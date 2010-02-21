<div class="quote-list">
<?php if (isset($quotes)): ?>
<?php foreach ($quotes as $quote): ?>

<div class="quote">
<div class="id">
<a href="<?php print Url::site('quote/id/' . $quote->id); ?>" title="Details about this quote"><?php print $quote->id; ?></a>
</div>
<div class="quote-inner">
<div class="text">
<?php print $quote->text; ?>
</div>
<div class="categories">
<?php foreach ($categories_list_bolded[$quote->id] as $category) {
    print '<a href="' . Url::site('category/id/' . $category->id) . '">' . $category->name . '</a> ';
} ?>
</div>
<div class="author"><a href="<?php print Url::site('author/id/' . $quote->author->id); ?>" title="More quotes by this author"><?php
$author_name = explode(' ', $quote->author->name, 4);
$last_name = $author_name[count($author_name)-1];
unset($author_name[count($author_name)-1]);
foreach ($author_name as $k => $name) {
    $author_name[$k] = mb_eregi_replace("^([A-Za-z])[A-Za-z]+(.*)$", "\\1.\\2", $name);
}
print implode(' ', $author_name) . ' ' . $last_name; ?></a></div>
<br class="after-author" />
</div><!-- /.quote-inner -->
</div><!-- /.quote -->

<?php endforeach; ?>
<?php print $pager; ?>
<?php if (isset($last_page)): ?>
<div class="list-note border">
Looking for other great quotes?<br/>
Check out <a href="<?php print Url::site('quote/top'); ?>">top rated quotes</a> below.
</div>
<?php endif; ?>
<?php else: ?>
<div class="list-note border">
Sorry, couldn't find any quotes.<br/>
Try a broader search by entering fewer words, or check out <a href="<?php print Url::site('quote/top'); ?>">top rated quotes</a> below.
</div>
<?php endif; ?>
<div class="feed-icons">
    <a href="/rss.xml"><img width="16" height="16" title="Quote feed" alt="Syndicate content" src="/img/feed.png"></a>
</div><!-- /.feed-icons -->
</div><!-- /.quote-list -->