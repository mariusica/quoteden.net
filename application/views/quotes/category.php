<?php if (!isset($category)): ?>
<div class="list-note category-header">
Sorry, could not find this category.<br/>
<a href="<?php print Url::site('category'); ?>">See all categories</a>
</div>
<?php return;
endif; ?>
<div class="quote-list">
<?php foreach ($quotes as $quote): ?>
<?php include('quote_single.php'); ?>
<?php endforeach; ?>
<?php print $pager; ?>
<?php if (isset($last_page)): ?>
<div class="list-note border">
Looking for other great quotes?<br/>
Check out <a href="<?php print Url::site('quote/top'); ?>">top rated quotes</a> below.
</div>
<?php endif; ?>
<div class="feed-icons">
    <a href="/rss.xml"><img width="16" height="16" title="Quote feed" alt="Syndicate content" src="/img/feed.png"></a>
</div><!-- /.feed-icons -->
</div><!-- /.quote-list -->