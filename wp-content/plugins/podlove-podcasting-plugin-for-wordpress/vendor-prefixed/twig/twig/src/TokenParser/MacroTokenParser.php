<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PodlovePublisher_Vendor\Twig\TokenParser;

use PodlovePublisher_Vendor\Twig\Error\SyntaxError;
use PodlovePublisher_Vendor\Twig\Node\BodyNode;
use PodlovePublisher_Vendor\Twig\Node\MacroNode;
use PodlovePublisher_Vendor\Twig\Node\Node;
use PodlovePublisher_Vendor\Twig\Token;
/**
 * Defines a macro.
 *
 *   {% macro input(name, value, type, size) %}
 *      <input type="{{ type|default('text') }}" name="{{ name }}" value="{{ value|e }}" size="{{ size|default(20) }}" />
 *   {% endmacro %}
 */
final class MacroTokenParser extends AbstractTokenParser
{
    public function parse(Token $token)
    {
        $lineno = $token->getLine();
        $stream = $this->parser->getStream();
        $name = $stream->expect(
            /* Token::NAME_TYPE */
            5
        )->getValue();
        $arguments = $this->parser->getExpressionParser()->parseArguments(\true, \true);
        $stream->expect(
            /* Token::BLOCK_END_TYPE */
            3
        );
        $this->parser->pushLocalScope();
        $body = $this->parser->subparse([$this, 'decideBlockEnd'], \true);
        if ($token = $stream->nextIf(
            /* Token::NAME_TYPE */
            5
        )) {
            $value = $token->getValue();
            if ($value != $name) {
                throw new SyntaxError(\sprintf('Expected endmacro for macro "%s" (but "%s" given).', $name, $value), $stream->getCurrent()->getLine(), $stream->getSourceContext());
            }
        }
        $this->parser->popLocalScope();
        $stream->expect(
            /* Token::BLOCK_END_TYPE */
            3
        );
        $this->parser->setMacro($name, new MacroNode($name, new BodyNode([$body]), $arguments, $lineno, $this->getTag()));
        return new Node();
    }
    public function decideBlockEnd(Token $token)
    {
        return $token->test('endmacro');
    }
    public function getTag()
    {
        return 'macro';
    }
}
@\class_alias('PodlovePublisher_Vendor\\Twig\\TokenParser\\MacroTokenParser', 'PodlovePublisher_Vendor\\Twig_TokenParser_Macro');
