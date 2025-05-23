<?php

declare(strict_types=1);

/*
 * This file is part of rekalogika/rekapager package.
 *
 * (c) Priyadi Iman Nurcahyo <https://rekalogika.dev>
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

namespace Rekalogika\Rekapager\Bundle;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

final readonly class PagerOptions
{
    /**
     * @param int<0,max>|null $proximity
     * @param array<string,mixed>|null $routeParams
     * @param UrlGeneratorInterface::*|null $urlReferenceType
     * @param int<1,max>|null $itemsPerPage
     * @param int<1,max>|null $pageLimit
     */
    public function __construct(
        private ?string $pageParameterName = null,
        private ?int $proximity = null,
        private ?string $routeName = null,
        private ?array $routeParams = null,
        private ?int $urlReferenceType = null,
        private ?int $itemsPerPage = null,
        private ?int $pageLimit = null,
    ) {}

    public function getPageParameterName(): ?string
    {
        return $this->pageParameterName;
    }

    /**
     * @return null|int<0,max>
     */
    public function getProximity(): ?int
    {
        return $this->proximity;
    }

    public function getRouteName(): ?string
    {
        return $this->routeName;
    }

    /**
     * @return array<string,mixed>|null
     */
    public function getRouteParams(): ?array
    {
        return $this->routeParams;
    }

    /**
     * @return UrlGeneratorInterface::*|null
     */
    public function getUrlReferenceType(): ?int
    {
        return $this->urlReferenceType;
    }

    /**
     * @return null|int<1,max>
     */
    public function getItemsPerPage(): ?int
    {
        return $this->itemsPerPage;
    }

    /**
     * @return null|int<1,max>
     */
    public function getPageLimit(): ?int
    {
        return $this->pageLimit;
    }
}
