<?php

namespace Drupal\aed_migration\Plugin\migrate\source;

use Drupal\migrate\Plugin\migrate\source\SqlBase;
use Drupal\migrate\Row;

/**
 * Source plugin for articles.
 *
 * @MigrateSource(
 *   id = "article_node"
 * )
 */
class ArticleNode extends SqlBase {

  public function query() {
    $query = $this->select('node','a')
      ->fields('a', [
        'nid',
        'title',
      ]);
    return $query;
  }

  public function fields() {
    $fields = [
      'nid' => $this->t("Node NID"),
      'title' => $this->t("Node Title"),
    ];
    return $fields;
  }

  public function getIds() {
    return [
      'nid' => [
        'type' => 'integer',
        'alias' => 'a',
      ],
    ];
  }
}

