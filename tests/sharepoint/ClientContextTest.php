<?php

namespace Office365;

use Exception;
use Office365\Runtime\Auth\UserCredentials;
use Office365\Runtime\Http\RequestOptions;
use Office365\SharePoint\ClientContext;

class ClientContextTest extends SharePointTestCase
{

    public function testIfSingleRequestProcessed()
    {
        try{
            $listTitle = "Orders_" . rand(1,100000);
            $list = self::$context->getWeb()->getLists()->getByTitle($listTitle);
            self::$context->load($list);
            self::$context->executeQuery();
            self::assertFalse(self::$context->hasPendingRequest());
        }
        catch(Exception $e){
            self::assertFalse(self::$context->hasPendingRequest());
        }
    }


    public function testIfMultipleRequestsProcessed()
    {
        $numOfQueries = 2;
        try {
            for ($i = 0;$i < $numOfQueries; $i++) {
                $listTitle = "Orders_" . rand(1, 100000);
                $list = self::$context->getWeb()->getLists()->getByTitle($listTitle);
                self::$context->load($list);
            }
            self::$context->executeQuery();
            self::assertFalse(self::$context->hasPendingRequest());
        } catch (Exception $e) {
            self::assertTrue(self::$context->hasPendingRequest());
            self::$context->getPendingRequest()->clearActions();
        }
    }


    public function testBuildGetRequest(){
        $request = self::$context->getWeb()->getCurrentUser()->get()->buildRequest();
        self::assertInstanceOf(RequestOptions::class, $request);
        self::$context->getPendingRequest()->clearActions();
    }


    public function testBuildUpdateRequest(){
        $request = self::$context->getWeb()->getCurrentUser()->update()->buildRequest();
        self::assertInstanceOf(RequestOptions::class, $request);
        self::$context->getPendingRequest()->clearActions();
    }

    public function testBuildDeleteRequest(){
        $request = self::$context->getWeb()->deleteObject()->buildRequest();
        self::assertInstanceOf(RequestOptions::class, $request);
        self::$context->getPendingRequest()->clearActions();
    }


    public function testEnsureScalarProperty(){
        $web = self::$context->getWeb();
        $web->ensureProperty("Title", function () use ($web){
            self::assertEquals("Title",$web->getQueryOptions()->Select);
        });
        self::$context->executeQuery();
    }


    public function testEnsureNavigationProperty(){
        $web = self::$context->getWeb();
        $web->ensureProperty("CurrentUser");
        self::$context->executeQuery();
        self::assertTrue($web->isPropertyAvailable("CurrentUser"));
    }


    public function testInitClientFromAbsUrl(){
        $settings = include(__DIR__ . '/../../Settings.php');
        $pageAbsUrl = $settings["Url"] . "/sites/team/SitePages/Home.aspx";
        $credentials = new UserCredentials($settings['UserName'],$settings['Password']);
        $ctx = ClientContext::fromUrl($pageAbsUrl)->withCredentials($credentials);
        $whoami = $ctx->getWeb()->getCurrentUser();
        $ctx->load($whoami);
        $ctx->executeQuery();
        self::assertNotEmpty($whoami->getEmail());
    }

}
