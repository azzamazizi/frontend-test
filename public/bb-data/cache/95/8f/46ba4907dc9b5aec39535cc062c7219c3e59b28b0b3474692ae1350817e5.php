<?php

/* partial_message.phtml */
class __TwigTemplate_958f46ba4907dc9b5aec39535cc062c7219c3e59b28b0b3474692ae1350817e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["flashes"]) ? $context["flashes"] : null));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 2
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 3
                echo "        <div class=\"h-block ";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "\">
            <h2>";
                // line 4
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "</h2>
            <p>";
                // line 5
                echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : null), "html", null, true);
                echo "</p>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partial_message.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  617 => 228,  612 => 133,  602 => 83,  597 => 82,  592 => 78,  577 => 66,  574 => 65,  571 => 64,  566 => 27,  561 => 26,  549 => 10,  544 => 5,  532 => 230,  527 => 228,  523 => 227,  509 => 219,  507 => 218,  493 => 205,  487 => 202,  482 => 200,  474 => 194,  468 => 190,  451 => 184,  443 => 181,  436 => 177,  431 => 174,  424 => 169,  408 => 165,  403 => 164,  401 => 163,  395 => 160,  391 => 158,  389 => 157,  386 => 156,  379 => 151,  364 => 149,  360 => 148,  354 => 145,  350 => 143,  338 => 134,  336 => 133,  333 => 132,  327 => 128,  314 => 126,  310 => 125,  303 => 121,  299 => 119,  296 => 118,  275 => 106,  268 => 104,  263 => 102,  255 => 99,  243 => 95,  237 => 92,  233 => 90,  231 => 89,  228 => 88,  221 => 84,  213 => 81,  209 => 79,  207 => 78,  198 => 71,  195 => 70,  184 => 59,  176 => 56,  160 => 50,  156 => 48,  148 => 43,  140 => 41,  126 => 37,  112 => 32,  110 => 31,  105 => 28,  102 => 27,  100 => 26,  91 => 23,  82 => 20,  74 => 18,  70 => 17,  65 => 15,  54 => 10,  45 => 7,  38 => 5,  33 => 4,  365 => 77,  355 => 70,  349 => 67,  337 => 57,  334 => 56,  329 => 54,  326 => 53,  323 => 52,  320 => 51,  316 => 49,  313 => 48,  286 => 42,  281 => 41,  265 => 37,  251 => 34,  215 => 82,  201 => 25,  189 => 24,  175 => 20,  163 => 19,  151 => 15,  134 => 13,  130 => 38,  121 => 34,  107 => 10,  78 => 19,  73 => 4,  58 => 11,  43 => 1,  37 => 5,  34 => 36,  31 => 1,  28 => 3,  22 => 17,  19 => 1,  650 => 296,  647 => 295,  641 => 290,  637 => 288,  629 => 283,  624 => 281,  620 => 279,  618 => 278,  615 => 277,  607 => 87,  600 => 270,  596 => 268,  594 => 267,  591 => 266,  583 => 67,  576 => 259,  572 => 257,  570 => 256,  562 => 251,  555 => 11,  546 => 243,  539 => 231,  529 => 229,  522 => 232,  517 => 229,  508 => 222,  499 => 219,  496 => 218,  484 => 201,  476 => 214,  471 => 213,  466 => 189,  459 => 187,  449 => 200,  440 => 197,  437 => 196,  429 => 193,  421 => 192,  416 => 191,  411 => 166,  404 => 186,  388 => 175,  382 => 84,  372 => 79,  368 => 166,  362 => 163,  358 => 162,  352 => 159,  348 => 142,  340 => 153,  324 => 142,  318 => 50,  308 => 134,  304 => 47,  298 => 130,  294 => 117,  288 => 114,  284 => 112,  276 => 38,  260 => 109,  250 => 97,  246 => 101,  240 => 33,  236 => 97,  230 => 94,  226 => 87,  218 => 83,  202 => 77,  192 => 64,  188 => 69,  182 => 66,  178 => 65,  172 => 62,  168 => 53,  159 => 55,  154 => 47,  152 => 51,  149 => 50,  142 => 45,  132 => 39,  128 => 39,  119 => 35,  115 => 34,  111 => 33,  103 => 32,  99 => 31,  95 => 24,  92 => 29,  87 => 22,  79 => 23,  75 => 22,  71 => 21,  67 => 3,  63 => 19,  55 => 14,  51 => 12,  49 => 8,  47 => 10,  44 => 9,  42 => 8,  39 => 7,  36 => 6,  30 => 3,  25 => 22,);
    }
}
