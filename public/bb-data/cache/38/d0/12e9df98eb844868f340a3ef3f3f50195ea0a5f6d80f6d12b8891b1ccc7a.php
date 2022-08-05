<?php

/* partial_steps.phtml */
class __TwigTemplate_38d012e9df98eb844868f340a3ef3f3f50195ea0a5f6d80f6d12b8891b1ccc7a extends Twig_Template
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
        echo "<div class=\"steps\">

<div class=\"grid_4 alpha";
        // line 3
        if (((isset($context["selected"]) ? $context["selected"] : null) == 1)) {
            echo " selected";
        }
        echo "\">
    <span>1</span>
    <p>";
        // line 5
        echo gettext("Select product");
        echo "</p>
</div>

<div class=\"grid_4";
        // line 8
        if (((isset($context["selected"]) ? $context["selected"] : null) == 2)) {
            echo " selected";
        }
        echo "\">
    <span>2</span>
    <p>";
        // line 10
        echo gettext("Configure");
        echo "</p>
</div>

<div class=\"grid_4";
        // line 13
        if (((isset($context["selected"]) ? $context["selected"] : null) == 3)) {
            echo " selected";
        }
        echo "\">
    <span>3</span>
    <p>";
        // line 15
        echo gettext("Confirm");
        echo "</p>
</div>

<div class=\"grid_4 omega";
        // line 18
        if (((isset($context["selected"]) ? $context["selected"] : null) == 4)) {
            echo " selected";
        }
        echo "\">
    <span>4</span>
    <p>";
        // line 20
        echo gettext("Checkout");
        echo "</p>
</div>

<div class=\"clear\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "partial_steps.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  62 => 18,  49 => 13,  36 => 8,  30 => 5,  23 => 3,  19 => 1,  339 => 116,  321 => 100,  318 => 98,  313 => 95,  310 => 94,  303 => 89,  286 => 85,  283 => 84,  263 => 78,  258 => 76,  255 => 75,  249 => 72,  246 => 71,  244 => 70,  240 => 68,  230 => 66,  224 => 63,  220 => 61,  214 => 60,  204 => 58,  201 => 57,  197 => 56,  192 => 54,  188 => 52,  186 => 51,  182 => 50,  178 => 49,  166 => 46,  148 => 45,  139 => 43,  136 => 42,  134 => 41,  125 => 35,  121 => 34,  115 => 31,  111 => 30,  107 => 29,  104 => 28,  98 => 25,  95 => 24,  93 => 23,  83 => 21,  66 => 20,  60 => 17,  56 => 15,  50 => 12,  47 => 11,  43 => 10,  40 => 7,  34 => 3,  29 => 5,  27 => 2,);
    }
}
