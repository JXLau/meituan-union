<?php

/*
 * This file is part of the gaowei-space/meituan-pub-union.
 *
 * (c) gaowei <huyao9950@hotmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace GaoweiSpace\MeituanPubUnion\Api\ToShop\Request;

use GaoweiSpace\MeituanPubUnion\Http\Request;

/**
 * 到店-商品搜索
 */
class SearchDealsRequest extends Request
{
    protected $promotionId = '';
    protected $keyWords    = '';
    protected $page        = 1;
    protected $size        = 50;
    protected $sortType    = 0;
    protected $cat1Id      = 0;
    protected $cat1Ids     = [];
    protected $geo         = [];

    public function __construct()
    {
    }

    protected function setUserParams(&$params)
    {
        // 必传参数
        $this->setUserParam($params, "platformId", $this->platformId);
        $this->setUserParam($params, "utmSource", $this->utmSource);
        $this->setUserParam($params, "utmMedium", $this->utmMedium);
        $this->setUserParam($params, "page", $this->page);
        $this->setUserParam($params, "size", $this->size);
        $this->setUserParam($params, "cat0Id", $this->cat0Id);

        // 非必传参数
        $this->cat1Id && $this->setUserParam($params, "cat1Id", $this->cat1Id);
        $this->shopIds && $this->setUserParam($params, "shopIds", $this->shopIds);
        $this->dealIds && $this->setUserParam($params, "dealIds", $this->dealIds);
        $this->cat1Ids && $this->setUserParam($params, "cat1Ids", $this->cat1Ids);
        $this->sortType && $this->setUserParam($params, "sortType", $this->sortType);
        $this->promotionId && $this->setUserParam($params, "promotionId", $this->promotionId);
        $this->keyWords && $this->setUserParam($params, "keyWords", $this->keyWords);
        $this->geo && $this->setUserParam($params, "geo", $this->geo);
        $this->filters && $this->setUserParam($params, "filters", $this->filters);
        $this->dealType && $this->setUserParam($params, "dealType", $this->dealType);
    }

    public function getVersion()
    {
        return "1.0";
    }

    public function getDataType()
    {
        return "json";
    }

    public function getApiAction()
    {
        return '/api/search/deals';
    }

    public function getMethod()
    {
        return "post";
    }

    public function setPlatformId(int $platformId)
    {
        $this->platformId = $platformId;
    }

    public function setUtmMedium(string $utmMedium)
    {
        $this->utmMedium = $utmMedium;
    }

    public function setUtmSource(string $utmSource)
    {
        $this->utmSource = $utmSource;
    }

    public function setPromotionId(string $promotionId)
    {
        $this->promotionId = $promotionId;
    }

    public function setPage(int $page)
    {
        $this->page = $page;
    }

    public function setSize(int $size)
    {
        $this->size = $size;
    }

    public function setCat0Id(int $cat0Id)
    {
        $this->cat0Id = $cat0Id;
    }

    public function setCat1Id(int $cat1Id)
    {
        $this->cat1Id = $cat1Id;
    }

    public function setGeo(array $geo)
    {
        $this->geo = $geo;
    }

    public function setSortType(int $sortType)
    {
        $this->sortType = $sortType;
    }

    public function setShopIds(array $shopIds)
    {
        $this->shopIds = $shopIds;
    }

    public function setDealIds(array $dealIds)
    {
        $this->dealIds = $dealIds;
    }

    public function setFilters(array $filters)
    {
        $this->filters = $filters;
    }

    public function setDealType(int $dealType)
    {
        $this->dealType = $dealType;
    }

    public function setKeyWords(string $keyWords)
    {
        $this->keyWords = $keyWords;
    }
}
