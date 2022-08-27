<?php

namespace LightSaml\Tests\Credential\Criteria;

use LightSaml\Credential\Criteria\AlgorithmCriteria;
use LightSaml\Credential\Criteria\TrustCriteriaInterface;
use LightSaml\Tests\BaseTestCase;
use RobRichards\XMLSecLibs\XMLSecurityKey;

class AlgorithmCriteriaTest extends BaseTestCase
{
    public function test_implements_trust_criteria_interface()
    {
        $this->assertInstanceOf(TrustCriteriaInterface::class, new AlgorithmCriteria(''));
    }

    public function test_returns_value_given_to_constructor()
    {
        $criteria = new AlgorithmCriteria($expectedValue = XMLSecurityKey::AES256_CBC);
        $this->assertEquals($expectedValue, $criteria->getAlgorithm());
    }
}
