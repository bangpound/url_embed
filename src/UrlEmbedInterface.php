<?php

/**
 * @file
 * Contains Drupal\url_embed\UrlEmbedInterface.
 */

namespace Drupal\url_embed;

/**
 * A service class for handling URL embeds.
 *
 * @todo Add more documentation.
 */
interface UrlEmbedInterface {

  public function __construct(array $config = []);

  public function getConfig();

  public function setConfig(array $config);

  /**
   * @param string $url
   *   The url
   * @param array $config
   *   (optional) Options passed to the adapter. If not provided the default
   *   options on the service will be used.
   *
   * @throws \Embed\Exceptions\InvalidUrlException
   *   If the urls is not valid
   * @throws \InvalidArgumentException
   *   If any config argument is not valid
   *
   * @return \Embed\Adapters\Adapter
   */
  public function getEmbed($url, array $config = []);

}
