<?php
// $Id:

/**
 * @file
 * Template for se48po2lr bracket design
 *
 * Available variables:
 * - $node: The node object for the bracket to be rendered.
 */
drupal_add_css(drupal_get_path('module', 'bracket') . '/designs/se24po2lr/bracket-se24po2lr.css', array('preprocess' => FALSE));
?>

<div class="bracket-block">
  <?php if ($node->subtitle) { ?>
  <div class="bracket-subtitle"><?php print filter_xss_admin($node->subtitle) ?></div>
  <?php } ?>
  <?php if ($node->comments) { ?>
  <div class="bracket-comments"><?php print nl2br(filter_xss_admin($node->comments)) ?></div>
  <?php } ?>
  <div id="round-1-left" class="bracket-round">
    <div class="bracket-round-comment"><?php print filter_xss_admin($node->round[1]->comment) ?></div>
    <div id="round-1-spacer"></div>
    <?php print theme('bracket_match', array('node' => $node, 'round_index' => 1, 'match_index' => 1, 'orientation' => 'left')) ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', array('node' => $node, 'round_index' => 1, 'match_index' => 2, 'orientation' => 'left')) ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', array('node' => $node, 'round_index' => 1, 'match_index' => 3, 'orientation' => 'left')) ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', array('node' => $node, 'round_index' => 1, 'match_index' => 4, 'orientation' => 'left')) ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', array('node' => $node, 'round_index' => 1, 'match_index' => 5, 'orientation' => 'left')) ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', array('node' => $node, 'round_index' => 1, 'match_index' => 6, 'orientation' => 'left')) ?>
    <div class="bracket-footer"><?php print nl2br(filter_xss_admin($node->footer)) ?></div>
  </div>
  <div id="round-2-left" class="bracket-round">
    <div class="bracket-round-comment"><?php print filter_xss_admin($node->round[2]->comment) ?></div>
    <div id="round-2-spacer"></div>
    <?php print theme('bracket_match', array('node' => $node, 'round_index' => 2, 'match_index' => 1, 'orientation' => 'left')) ?>
    <div class="bracket-round-2-match-spacer"></div>
    <?php print theme('bracket_match', array('node' => $node, 'round_index' => 2, 'match_index' => 2, 'orientation' => 'left')) ?>
    <div class="bracket-round-2-match-spacer"></div>
    <?php print theme('bracket_match', array('node' => $node, 'round_index' => 2, 'match_index' => 3, 'orientation' => 'left')) ?>
  </div>
  <div id="results-left" class="bracket-results">
    <div id="results-spacer"></div>
    <?php print theme('bracket_result', $node, 1, 'left') ?>
    <?php print theme('bracket_result', $node, 2, 'left') ?>
    <?php print theme('bracket_result', $node, 3, 'left') ?>
  </div>
  <div id="round-spacer" class="bracket-round">&nbsp;</div>
  <div id="results-right" class="bracket-results">
    <div id="results-spacer"></div>
    <?php print theme('bracket_result', $node, 4, 'right') ?>
    <?php print theme('bracket_result', $node, 5, 'right') ?>
    <?php print theme('bracket_result', $node, 6, 'right') ?>
  </div>
  <div id="round-2-right" class="bracket-round">
    <div class="bracket-round-comment"><?php print filter_xss_admin($node->round[2]->comment) ?></div>
    <div id="round-2-spacer"></div>
    <?php print theme('bracket_match', array('node' => $node, 'round_index' => 2, 'match_index' => 4, 'orientation' => 'right')) ?>
    <div class="bracket-round-2-match-spacer"></div>
    <?php print theme('bracket_match', array('node' => $node, 'round_index' => 2, 'match_index' => 5, 'orientation' => 'right')) ?>
    <div class="bracket-round-2-match-spacer"></div>
    <?php print theme('bracket_match', array('node' => $node, 'round_index' => 2, 'match_index' => 6, 'orientation' => 'right')) ?>
  </div>
  <div id="round-1-right" class="bracket-round">
    <div class="bracket-round-comment"><?php print filter_xss_admin($node->round[1]->comment) ?></div>
    <div id="round-1-spacer"></div>
    <?php print theme('bracket_match', array('node' => $node, 'round_index' => 1, 'match_index' => 7, 'orientation' => 'right')) ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', array('node' => $node, 'round_index' => 1, 'match_index' => 8, 'orientation' => 'right')) ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', array('node' => $node, 'round_index' => 1, 'match_index' => 9, 'orientation' => 'right')) ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', array('node' => $node, 'round_index' => 1, 'match_index' => 10, 'orientation' => 'right')) ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', array('node' => $node, 'round_index' => 1, 'match_index' => 11, 'orientation' => 'right')) ?>
    <div class="bracket-round-1-match-spacer"></div>
    <?php print theme('bracket_match', array('node' => $node, 'round_index' => 1, 'match_index' => 12, 'orientation' => 'right')) ?>
  </div>
  <?php print theme('bracket_images', array('node' => $node)) ?>
</div>
