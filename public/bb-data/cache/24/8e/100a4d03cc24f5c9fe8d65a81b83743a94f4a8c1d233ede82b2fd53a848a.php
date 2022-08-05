<?php

/* partial_currency.phtml */
class __TwigTemplate_248e100a4d03cc24f5c9fe8d65a81b83743a94f4a8c1d233ede82b2fd53a848a extends Twig_Template
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
        $context["currencies"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "currency_get_pairs");
        // line 2
        if ((twig_length_filter($this->env, (isset($context["currencies"]) ? $context["currencies"] : null)) > 1)) {
            // line 3
            echo "<div class=\"widget\">
    <div class=\"head\">
        <h2 class=\"dark-icon i-payment\">";
            // line 5
            echo gettext("Select currency");
            echo "</h2>
    </div>
    <div class=\"block\">
        <select name=\"currency\" class=\"currency_selector\">
        ";
            // line 9
            $context["selected"] = $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "cart_get_currency"), "code");
            // line 10
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["code"] => $context["title"]) {
                // line 11
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
                echo "\" class=\"currency_";
                echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
                echo "\"";
                if (((isset($context["code"]) ? $context["code"] : null) == (isset($context["selected"]) ? $context["selected"] : null))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        </select>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partial_currency.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 11,  21 => 2,  69 => 20,  62 => 18,  49 => 13,  36 => 10,  30 => 5,  23 => 3,  19 => 1,  339 => 116,  321 => 100,  318 => 98,  313 => 95,  310 => 94,  303 => 89,  286 => 85,  283 => 84,  263 => 78,  258 => 76,  255 => 75,  249 => 72,  246 => 71,  244 => 70,  240 => 68,  230 => 66,  224 => 63,  220 => 61,  214 => 60,  204 => 58,  201 => 57,  197 => 56,  192 => 54,  188 => 52,  186 => 51,  182 => 50,  178 => 49,  166 => 46,  148 => 45,  139 => 43,  136 => 42,  134 => 41,  125 => 35,  121 => 34,  115 => 31,  111 => 30,  107 => 29,  104 => 28,  98 => 25,  95 => 24,  93 => 23,  83 => 21,  66 => 20,  60 => 13,  56 => 15,  50 => 12,  47 => 11,  43 => 10,  40 => 7,  34 => 9,  29 => 5,  27 => 5,);
    }
}
