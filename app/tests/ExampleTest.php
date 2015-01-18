<?php

class RouteTests extends TestCase {

    public function setUp()
    {
        parent::setUp();
    }
    /** @test */
    public function home_route_response_is_ok()
    {
        $this->call('GET', '/');
        $this->assertResponseOk();
    }
    /** @test */ 
    public function wrong_login_redirects_back()
    {
        $this->call('POST', '/login',["username"=>"paksummit","password"=>"tomalj2014"]);
        $this->assertRedirectedTo("/");
    }
    /** @test */ 
    public function right_login_redirects_with_success()
    {
        $this->call('POST', '/login',["username"=>"paksummit","password"=>"otomalj2014"]);
        $this->assertRedirectedTo("/admin-panel");
    }
    /** @test */
    public function logout_redirects_with_success()
    {
        $this->call('GET', '/logout');
        $this->assertRedirectedTo("/");
    }
    /** @test */
    public function test_admin_panel_route_without_filters_enabled()
    {
        $response = $this->call('get', '/admin-panel');
        $this->assertResponseOk();
    }

    /** @test */
    public function test_admin_panel_route_with_filters_enabled()
    {
        Route::enableFilters();
        $response = $this->call('get', '/admin-panel');
        $this->assertRedirectedTo("/");
    }

}
