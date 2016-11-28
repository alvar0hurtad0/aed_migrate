<?php

namespace Drupal\aed_migration\Plugin\migrate\source;

use Drupal\migrate\Row;
use Drupal\node\Plugin\migrate\source\d7\Node;

/**
 * Drupal 7 node source from database.
 *
 * @MigrateSource(
 *   id = "node_videos"
 * )
 */
class NodeVideos extends Node {

  /**
   * {@inheritdoc}
   */
  public function prepareRow(Row $row) {

    $nid = $row->getSourceProperty('nid');
    $vid = $row->getSourceProperty('vid');

    // Body.
    $body = $this->getFieldValues('node', 'body', $nid, $vid);

    $row->setSourceProperty('body_value', $body[0]['value']);
    $row->setSourceProperty('body_format', 'full_html');
    $row->setSourceProperty('body_summary', $body[0]['summary']);

    return parent::prepareRow($row);

  }

}
