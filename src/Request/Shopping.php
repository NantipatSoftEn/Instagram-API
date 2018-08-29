<?php

namespace InstagramAPI\Request;

use InstagramAPI\Response;

/**
 * Functions related to Shopping and catalogs.
 */
class Shopping extends RequestCollection
{
    /**
     * Get on tag product information.
     *
     * @param string $productId   The product ID.
     * @param string $mediaId     The media ID in Instagram's internal format (ie "1820978425064383299").
     * @param int    $deviceWidth Device width (optional).
     *
     * @throws \InstagramAPI\Exception\InstagramException
     *
     * @return \InstagramAPI\Response\OnTagProductResponse
     */
    public function getOnTagProductInfo(
        $productId,
        $mediaId,
        $deviceWidth = 720)
    {
        return $this->ig->request("commerce/products/{$productId}/on_tag/")
            ->addParam('media_id', $mediaId)
            ->addParam('device_width', $deviceWidth)
            ->getResponse(new Response\OnTagProductResponse());
    }

    /**
     * Sets on board catalog.
     *
     * @param string $catalogId
     *
     * @throws \InstagramAPI\Exception\InstagramException
     *
     * @return \InstagramAPI\Response\OnBoardCatalogResponse
     */
    public function setOnBoardCatalog(
        $catalogId)
    {
        return $this->ig->request('commerce/onboard/')
            ->addPost('current_catalog_id', $catalogId)
            ->addPost('_uid', $this->ig->account_id)
            ->addPost('_uuid', $this->ig->uuid)
            ->addPost('_csrftoken', $this->ig->client->getToken())
            ->getResponse(new Response\OnBoardCatalogResponse());
    }
}
