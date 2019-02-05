<?php

namespace Drupal\workwise\Entity;

use Drupal\Core\Config\Entity\ConfigEntityInterface;

/**
 * Defines the interface for WorkWise integration config entities.
 */
interface WorkWiseIntegrationInterface extends ConfigEntityInterface {

  /**
   * Gets the WorkWise integration machine name.
   *
   * @return string
   *   The machine name.
   */
  public function getId();

  /**
   * Sets the WorkWise integration machine name.
   *
   * @param string $id
   *   The machine name.
   *
   * @return self
   */
  public function setId($id);

  /**
   * Gets the WorkWise integration label.
   *
   * @return string
   *   The label.
   */
  public function getLabel();

  /**
   * Sets the WorkWise integration label.
   *
   * @param string $label
   *   The label.
   *
   * @return self
   */
  public function setLabel($label);

  /**
   * Gets the WorkWise connection ID.
   *
   * @return string
   *   The connection ID.
   */
  public function getConnectionId();

  /**
   * Sets the WorkWise connection ID.
   *
   * @param string $connectionId
   *   The connection ID.
   *
   * @return self
   */
  public function setConnectionId($connectionId);

  /**
   * Gets the WorkWise plugin ID.
   *
   * @return string
   *   The plugin ID.
   */
  public function getPluginId();

  /**
   * Sets the WorkWise plugin ID.
   *
   * @param string $pluginId
   *   The plugin ID.
   *
   * @return self
   */
  public function setPluginId($pluginId);

  /**
   * Gets the WorkWise plugin configuration.
   *
   * @return array
   *   The plugin configuration.
   */
  public function getPluginConfiguration();

  /**
   * Sets the WorkWise plugin configuration.
   *
   * @param array $configuration
   *   The plugin configuration.
   *
   * @return self
   */
  public function setPluginConfiguration(array $configuration);

  /**
   * Get whether the WorkWise connection is enabled.
   *
   * @return bool
   *   TRUE if the WorkWise connection is enabled, FALSE otherwise.
   */
  public function isEnabled();

  /**
   * Sets whether the WorkWise connection is enabled.
   *
   * @param bool $enabled
   *   Whether the WorkWise connection is enabled.
   *
   * @return $this
   */
  public function setEnabled($enabled);

  /**
   * Checks whether the WorkWise plugin is active.
   *
   * @return bool
   *   TRUE if the integration is enabled and its plugin requirements have been met, FALSE otherwise.
   */
  public function isActive();

  /**
   * Returns the WorkWise connection entity associated with this integration.
   *
   * @return \Drupal\workwise\Entity\WorkWiseConnectionInterface
   *   The WorkWise connection.
   */
  public function getConnection();

  /**
   * Returns the plugin associated with this integration.
   *
   * @return \Drupal\workwise\Plugin\WorkWiseConnection\WorkWisePluginInterface
   *   The plugin associated with this integration.
   */
  public function getPlugin();
}
