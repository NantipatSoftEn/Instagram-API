<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * GraphData.
 *
 * @method CatalogItems getCatalogItems()
 * @method mixed getError()
 * @method string getName()
 * @method ShadowInstagramUser getUser()
 * @method string get__Typename()
 * @method bool isCatalogItems()
 * @method bool isError()
 * @method bool isName()
 * @method bool isUser()
 * @method bool is__Typename()
 * @method $this setCatalogItems(CatalogItems $value)
 * @method $this setError(mixed $value)
 * @method $this setName(string $value)
 * @method $this setUser(ShadowInstagramUser $value)
 * @method $this set__Typename(string $value)
 * @method $this unsetCatalogItems()
 * @method $this unsetError()
 * @method $this unsetName()
 * @method $this unsetUser()
 * @method $this unset__Typename()
 */
class GraphData extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        '__typename'    => 'string',
        'name'          => 'string',
        'user'          => 'ShadowInstagramUser',
        'error'         => '',
        'catalog_items' => 'CatalogItems',
    ];
}
