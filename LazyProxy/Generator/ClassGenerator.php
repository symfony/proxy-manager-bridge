<?php

namespace Symfony\Bridge\ProxyManager\LazyProxy\Generator;

use ProxyManager\Generator\ClassGenerator as BaseClassGenerator;
use Zend\Code\Generator\AbstractMemberGenerator;

class ClassGenerator extends BaseClassGenerator
{
    /**
     * Keywords regex
     */
    const KEYWORDS_REGEX = '#\b((a(bstract|nd|rray|s))|(c(a(llable|se|tch)|l(ass|one)|on(st|tinue)))|(d(e(clare|fault)|ie|o))|(e(cho|lse(if)?|mpty|nd(declare|for(each)?|if|switch|while)|val|x(it|tends)))|(f(inal|or(each)?|unction))|(g(lobal|oto))|(i(f|mplements|n(clude(_once)?|st(anceof|eadof)|terface)|sset))|(n(amespace|ew))|(p(r(i(nt|vate)|otected)|ublic))|(re(quire(_once)?|turn))|(s(tatic|witch))|(t(hrow|r(ait|y)))|(u(nset|se))|(__halt_compiler|break|list|(x)?or|var|while))\b#';

    /**
     * @inheritdoc
     * @return array
     * @author Vitaliy Stepanyuk <vitaliy.stepanyuk@westwing.de>
     */
    public function getMethods()
    {
        // Skip method that name is PHP keyword
        return array_filter(parent::getMethods(), function (AbstractMemberGenerator $method) {
            return !preg_match(self::KEYWORDS_REGEX, $method->getName());
        });
    }
}
