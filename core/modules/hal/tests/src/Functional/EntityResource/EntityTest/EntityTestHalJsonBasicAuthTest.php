<?php

namespace Drupal\Tests\hal\Functional\EntityResource\EntityTest;

use Drupal\Tests\hal\Functional\HalJsonBasicAuthWorkaroundFor2805281Trait;
use Drupal\Tests\rest\Functional\BasicAuthResourceTestTrait;

/**
 * @group hal
 */
class EntityTestHalJsonBasicAuthTest extends EntityTestHalJsonAnonTest {

  use BasicAuthResourceTestTrait;

  /**
   * {@inheritdoc}
   */
  public static $modules = ['basic_auth'];

  /**
   * {@inheritdoc}
   */
  protected static $auth = 'basic_auth';

  // @todo Fix in https://www.drupal.org/node/2805281: remove this trait usage.
  use HalJsonBasicAuthWorkaroundFor2805281Trait {
    HalJsonBasicAuthWorkaroundFor2805281Trait::assertResponseWhenMissingAuthentication insteadof BasicAuthResourceTestTrait;
  }

}
