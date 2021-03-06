<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\AdminBundle\Datagrid;

/**
 * @author Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * NEXT_MAJOR: Remove these comments and uncomment corresponding methods.
 *
 * @method int                      getPage()
 * @method int                      getFirstPage()
 * @method int                      getLastPage()
 * @method int                      getNextPage()
 * @method int                      getPreviousPage()
 * @method bool                     isFirstPage()
 * @method bool                     isLastPage()
 * @method int                      getNbResults()
 * @method array                    getLinks(?int $nbLinks = null)
 * @method bool                     haveToPaginate()
 * @method ProxyQueryInterface|null getQuery()
 */
interface PagerInterface
{
    /**
     * Initialize the Pager.
     */
    public function init();

    /**
     * Returns the maximum number of results per page.
     *
     * @return int
     */
    public function getMaxPerPage();

    /**
     * Sets the maximum number of results per page.
     *
     * @param int $max
     */
    public function setMaxPerPage($max);

//    NEXT_MAJOR: uncomment this method in 4.0
//    public function getPage(): int;

    /**
     * @param int $page
     */
    public function setPage($page);

//    NEXT_MAJOR: uncomment this method in 4.0
//    public function getNextPage(): int;

//    NEXT_MAJOR: uncomment this method in 4.0
//    public function getPreviousPage(): int;

//    NEXT_MAJOR: uncomment this method in 4.0
//    public function getFirstPage(): int;

//    NEXT_MAJOR: uncomment this method in 4.0
//    public function isFirstPage(): bool;

//    NEXT_MAJOR: uncomment this method in 4.0
//    public function getLastPage(): int;

//    NEXT_MAJOR: uncomment this method in 4.0
//    public function isLastPage(): bool;

//    NEXT_MAJOR: uncomment this method in 4.0
//    public function getQuery(): ?ProxyQueryInterface;

    /**
     * @param ProxyQueryInterface $query
     */
    public function setQuery($query);

//    NEXT_MAJOR: uncomment this method in 4.0
//    /**
//     * Returns true if the current query requires pagination.
//     */
//    public function haveToPaginate(): bool;

    /**
     * Returns an array of results on the given page.
     *
     * @return object[]
     */
    public function getResults();

//    NEXT_MAJOR: uncomment this method in 4.0
//    public function getNbResults(): int;

//    NEXT_MAJOR: uncomment this method 4.0
//    /**
//     * Returns an array of page numbers to use in pagination links.
//     *
//     * @param int $nbLinks The maximum number of page numbers to return
//     *
//     * @return int[]
//     */
//    public function getLinks(?int $nbLinks = null): array

    /**
     * Sets the maximum number of page numbers.
     *
     * @param int $maxPageLinks
     */
    public function setMaxPageLinks($maxPageLinks);

    /**
     * Returns the maximum number of page numbers.
     *
     * @return int
     */
    public function getMaxPageLinks();
}
