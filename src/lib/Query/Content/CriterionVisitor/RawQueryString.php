<?php

declare(strict_types=1);

namespace Novactive\EzSolrSearchExtra\Query\Content\CriterionVisitor;

use Ibexa\Contracts\Core\Repository\Values\Content\Query\CriterionInterface;
use Ibexa\Contracts\Solr\Query\CriterionVisitor;
use Novactive\EzSolrSearchExtra\Query\Content\Criterion\RawQueryString as RawQueryStringCriterion;

class RawQueryString extends CriterionVisitor
{
    public function canVisit(CriterionInterface $criterion)
    {
        return $criterion instanceof RawQueryStringCriterion;
    }

    /**
     * @param RawQueryStringCriterion $criterion
     *
     * @return string
     */
    public function visit(CriterionInterface $criterion, CriterionVisitor $subVisitor = null)
    {
        return $criterion->queryString;
    }
}
