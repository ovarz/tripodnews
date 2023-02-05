<section aria-label="Topik Terkait" class="section-container topic-list">
  <div class="topic-list-container">
    <?php for ($i=1; $i <= 10 ; $i++) { ?>
	  <a aria-label="Link_Title" title="Link_Title" class="topic-link" href="topik/">
	    <?php echo $random_topic[array_rand($random_topic)]; ?>
	  </a>
	<?php } ?>
  </div>
</section>