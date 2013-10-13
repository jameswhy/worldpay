<?php namespace Worldpay;

class RequestTest extends TestCase {

  public function testSettingRequestParameters()
  {
    $wp = $this->getWorldpay();
    $request = $wp->request($this->getNormalRequest());
    $r = $request->prepare();
    $this->assertEquals('123456789', $r['data']['instId']);
    $this->assertEquals('my_shop', $r['data']['cartId']);
    $this->assertEquals('GBP', $r['data']['currency']);
    $this->assertEquals('99.99', $r['data']['amount']);
    $this->assertEquals(100, $r['data']['testMode']);
    $this->assertEquals('Philip Brown', $r['data']['name']);
    $this->assertEquals('phil@ipbrown.com', $r['data']['email']);
    $this->assertEquals('101 Blah Blah Lane', $r['data']['address1']);
    $this->assertEquals('London', $r['data']['town']);
    $this->assertEquals('E20 123', $r['data']['postcode']);
    $this->assertEquals('GB', $r['data']['country']);
    $this->assertEquals('123456789', $r['data']['telephone']);
  }

}