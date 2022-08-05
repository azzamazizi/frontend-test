<?php

/* mod_invoice_index.phtml */
class __TwigTemplate_3826754ece1bcdcb231dd1050e3be33bcd8256281cc4b35c9d0ecf9deb0be238 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Invoices");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        $context["unpaid_invoices"] = $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "invoice_get_list", array(0 => array("status" => "unpaid", "per_page" => 100)), "method"), "list");
        // line 8
        echo "
    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"big-light-icon i-invoice\"></span></div>
            <h2>";
        // line 12
        echo gettext("Invoices");
        echo "</h2>
            <p>";
        // line 13
        echo gettext("List of invoices");
        echo "</p>
        </div>
        
        <div class=\"block conversation\">
        <div class=\"widget simpleTabs tabsRight first\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-invoice\">";
        // line 19
        echo gettext("Invoice management");
        echo "</h2>
        </div>
        <ul class=\"tabs\">
            ";
        // line 22
        if (twig_length_filter($this->env, (isset($context["unpaid_invoices"]) ? $context["unpaid_invoices"] : null))) {
            // line 23
            echo "            <li><a href=\"#tab-unpaid\">";
            echo gettext("Unpaid");
            echo "</a></li>
            ";
        }
        // line 25
        echo "            <li><a href=\"#tab-paid\">";
        echo gettext("Paid");
        echo "</a></li>
        </ul>
        <div class=\"tabs_container\">
            
            ";
        // line 29
        if (twig_length_filter($this->env, (isset($context["unpaid_invoices"]) ? $context["unpaid_invoices"] : null))) {
            // line 30
            echo "            <div class=\"tab_content\" id=\"tab-unpaid\">
            <table class=\"with-border\">
                <thead>
                    <tr>
                        <th>";
            // line 34
            echo gettext("Title");
            echo "</th>
                        <th>";
            // line 35
            echo gettext("Issue Date");
            echo "</th>
                        <th>";
            // line 36
            echo gettext("Due Date");
            echo "</th>
                        <th>";
            // line 37
            echo gettext("Total");
            echo "</th>
                        <th>&nbsp</th>
                    </tr>
                </thead>

                <tbody>

                    ";
            // line 44
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["unpaid_invoices"]) ? $context["unpaid_invoices"] : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["invoice"]) {
                // line 45
                echo "                    <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo "\">
                        <td>";
                // line 46
                echo twig_escape_filter($this->env, sprintf("Proforma invoice #%05s", $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id")), "html", null, true);
                echo "</td>
                        <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "created_at")), "html", null, true);
                echo "</td>
                        <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "due_at")), "html", null, true);
                echo "</td>
                        <td>";
                // line 49
                echo twig_money($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "total"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
                echo "</td>
                        <td class=\"actions\"><a class=\"bb-button bb-button-red\" href=\"";
                // line 50
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("invoice");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "hash"), "html", null, true);
                echo "\">";
                echo gettext("Pay");
                echo "</a></td>
                    </tr>

                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 54
                echo "                    <tr>
                        <td colspan=\"5\">";
                // line 55
                echo gettext("The list is empty");
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['invoice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                </tbody>
            </table>
        </div>
        ";
        }
        // line 62
        echo "        
        <div class=\"tab_content\" id=\"tab-paid\">
            <table class=\"with-border\">
                <thead>
                    <tr>
                        <th>";
        // line 67
        echo gettext("Title");
        echo "</th>
                        <th>";
        // line 68
        echo gettext("Issue Date");
        echo "</th>
                        <th>";
        // line 69
        echo gettext("Paid at");
        echo "</th>
                        <th>";
        // line 70
        echo gettext("Total");
        echo "</th>
                        <th>&nbsp</th>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 76
        $context["paid_invoices"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "invoice_get_list", array(0 => array("per_page" => 10, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page"), "status" => "paid")), "method");
        // line 77
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paid_invoices"]) ? $context["paid_invoices"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["invoice"]) {
            // line 78
            echo "
                    <tr class=\"";
            // line 79
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "\">
                        <td>";
            // line 80
            echo twig_escape_filter($this->env, sprintf("Proforma invoice #%05s", $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id")), "html", null, true);
            echo "</td>
                        <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "created_at")), "html", null, true);
            echo "</td>
                        <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "paid_at")), "html", null, true);
            echo "</td>
                        <td>";
            // line 83
            echo twig_money($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "total"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
            echo "</td>
                        <td class=\"actions\"><a class=\"bb-button\" href=\"";
            // line 84
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("invoice");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "hash"), "html", null, true);
            echo "\"><span class=\"dark-icon i-drag\"></span></a></td>
                    </tr>

                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 88
            echo "                    <tr>
                        <td colspan=\"7\">";
            // line 89
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                </tbody>
            </table>
            ";
        // line 94
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["paid_invoices"]) ? $context["paid_invoices"] : null))));
        // line 95
        echo "            
        </div>
    </div>
</div>
</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_invoice_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 95,  257 => 94,  253 => 92,  244 => 89,  241 => 88,  230 => 84,  226 => 83,  222 => 82,  218 => 81,  214 => 80,  210 => 79,  207 => 78,  201 => 77,  199 => 76,  190 => 70,  186 => 69,  182 => 68,  178 => 67,  171 => 62,  165 => 58,  156 => 55,  153 => 54,  140 => 50,  136 => 49,  132 => 48,  128 => 47,  124 => 46,  119 => 45,  114 => 44,  104 => 37,  100 => 36,  96 => 35,  92 => 34,  86 => 30,  84 => 29,  76 => 25,  70 => 23,  68 => 22,  62 => 19,  53 => 13,  49 => 12,  43 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  24 => 2,);
    }
}
