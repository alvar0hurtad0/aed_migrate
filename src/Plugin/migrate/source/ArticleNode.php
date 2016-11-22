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
    $query = $this->select('articles','a')
      ->fields('a', [
        'id',
        'title',
      ]);
    return $query;
  }

  public function fields() {
    $fields = [
      'id' => $this->t("Article ID"),
      'title' => $this->t("Node Title"),
    ];
    return $fields;
  }

  public function getIds() {
    return [
      'id' => [
        'type' => 'integer',
        'alias' => 'a',
      ],
    ];
  }
}

