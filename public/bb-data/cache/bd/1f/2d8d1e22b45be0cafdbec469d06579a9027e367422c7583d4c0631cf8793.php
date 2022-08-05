<?php

/* mod_order_index.phtml */
class __TwigTemplate_bd1f2d8d1e22b45be0cafdbec469d06579a9027e367422c7583d4c0631cf8793 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content_before' => array($this, 'block_content_before'),
            'content' => array($this, 'block_content'),
            'sidebar2' => array($this, 'block_sidebar2'),
            'js' => array($this, 'block_js'),
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
        // line 5
        $context["periods"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_periods");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Order");
    }

    // line 7
    public function block_content_before($context, array $blocks = array())
    {
        // line 8
        $this->env->loadTemplate("partial_steps.phtml")->display(array_merge($context, array("selected" => 1)));
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
<div class=\"h-block\">
    <div class=\"h-block-header\">
        <div class=\"icon\"><span class=\"number\">1</span></div>
        <h2>";
        // line 16
        echo gettext("Select Product");
        echo "</h2>
        <p>";
        // line 17
        echo gettext("Choose products we offer for selling");
        echo "</p>
    </div>
    <div class=\"block\">
    ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "product_category_get_list"), "list"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["i"] => $context["category"]) {
            // line 21
            echo "    <div class=\"product-category";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last")) {
                echo " last";
            }
            echo "\" id=\"pc-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "html", null, true);
            echo "\">
        <div class=\"show-products\">
            ";
            // line 23
            if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "icon_url")) {
                // line 24
                echo "            <div style=\"float: left; margin: 20px;\">
                ";
                // line 25
                echo twig_img_tag($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "icon_url"));
                echo "
            </div>
            ";
            }
            // line 28
            echo "            <div class=\"block product-pricing\" style=\"float: right;\">
                <span class=\"starting_from\">";
            // line 29
            echo gettext("Starting from:");
            echo "</span>
                <div class=\"currency\">";
            // line 30
            echo twig_money_convert($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "price_starting_from"));
            echo "</div>
                <a class=\"bb-button\" href=\"#\">";
            // line 31
            echo gettext("View products");
            echo "</a>
            </div>
            <div class=\"block\">
                <h2>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "title"), "html", null, true);
            echo "</h2>
                ";
            // line 35
            echo twig_bbmd_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "description"));
            echo "
            </div>
        </div>
        <div class=\"clear\"></div>
        <div class=\"products\" style=\"display:none; position: relative;\">
            <div class=\"fader\" style=\"width: 100%;margin-right: 0;height: 8px;position: absolute;top: 0;left: 0;opacity: 0.75;border-top: 1px solid rgba(0, 0, 0, 0.4);background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .2)), to(transparent));-webkit-mask-box-image: -webkit-gradient(linear, left top, right top, color-stop(0.0, rgba(0,0,0,0)), color-stop(0.5, rgba(0,0,0,.8)), color-stop(1.0, rgba(0,0,0,0)));\"></div>
            ";
            // line 41
            $context["listing_template"] = (("mod_service" . $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "type")) . "_listing.phtml");
            // line 42
            echo "            ";
            if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_template_exists", array(0 => array("file" => (isset($context["listing_template"]) ? $context["listing_template"] : null))), "method")) {
                // line 43
                echo "                <div class=\"mod_service";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "type"), "html", null, true);
                echo "\">";
                $template = $this->env->resolveTemplate((isset($context["listing_template"]) ? $context["listing_template"] : null));
                $template->display($context);
                echo "</div>
            ";
            } else {
                // line 45
                echo "            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "products"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 46
                    echo "            <div class=\"product";
                    if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                        echo " first";
                    }
                    if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last")) {
                        echo " last";
                    }
                    echo "\">
                <div class=\"block\" style=\"position: relative;\">
                    <div class=\"product-pricing\" style=\"float:right; text-align: right; margin: 0 0 20px 20px;\">
                        <span class=\"starting_from\">";
                    // line 49
                    echo gettext("Starting from:");
                    echo "</span>
                        <div class=\"currency\">";
                    // line 50
                    echo twig_money_convert($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price_starting_from"));
                    echo "</div>
                        ";
                    // line 51
                    if (($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "pricing"), "type") == "recurrent")) {
                        // line 52
                        echo "                        <form method=\"get\" action=\"\">
                        <p>
                        <input type=\"hidden\" name=\"_url\" value=\"/order/";
                        // line 54
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "slug"), "html", null, true);
                        echo "\"/>
                        <select name=\"period\" id=\"period-selector\">
                        ";
                        // line 56
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "pricing"), "recurrent"));
                        foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                            // line 57
                            echo "                            ";
                            if ($this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "enabled")) {
                                // line 58
                                echo "                            <option value=\"";
                                echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
                                echo "\" data-bb-price=\"";
                                echo twig_money_convert($this->env, $this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "price"));
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periods"]) ? $context["periods"] : null), (isset($context["code"]) ? $context["code"] : null), array(), "array"), "html", null, true);
                                echo "</option>
                            ";
                            }
                            // line 60
                            echo "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 61
                        echo "                        </select>
                        </p>
                        <button class=\"bb-button bb-button-submit\" type=\"submit\">";
                        // line 63
                        echo gettext("Order now");
                        echo "</button>
                        </form>
                        ";
                    } else {
                        // line 66
                        echo "                        <p><button class=\"bb-button bb-button-submit\" type=\"button\" onclick=\"parent.location='";
                        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/order");
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "slug"), "html", null, true);
                        echo "'\">";
                        echo gettext("Order now");
                        echo "</button></p>
                        ";
                    }
                    // line 68
                    echo "                    </div>

                    ";
                    // line 70
                    if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "icon_url")) {
                        // line 71
                        echo "                    <div style=\"display: block;float:left; margin:0 20px 20px 0;\">
                        ";
                        // line 72
                        echo twig_img_tag($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "icon_url"));
                        echo "
                    </div>
                    ";
                    }
                    // line 75
                    echo "                    
                    <h2>";
                    // line 76
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title"), "html", null, true);
                    echo "</h2>

                    ";
                    // line 78
                    echo twig_bbmd_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"));
                    echo "
                    <div class=\"clear\"></div>
                </div>
                <div class=\"clear\"></div>
            </div>
            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "            ";
            }
            // line 85
            echo "            <div class=\"clear\"></div>
        </div>
    </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "    <div class=\"clear\"></div>
    </div>
</div>
";
    }

    // line 94
    public function block_sidebar2($context, array $blocks = array())
    {
        // line 95
        echo "    ";
        $this->env->loadTemplate("partial_currency.phtml")->display($context);
    }

    // line 98
    public function block_js($context, array $blocks = array())
    {
        // line 100
        echo "<script type=\"text/javascript\">
\$(function() {

    \$('.show-products').click(function(){
        if(\$(this).parents('.product-category').hasClass('selected')) {
            \$(this).parents('.product-category').find('.products').slideUp();
            \$(this).parents('.product-category').removeClass('selected');
        } else {
            \$('.product-category').removeClass('selected');
            \$(this).parents('.product-category').addClass('selected');
            \$('.product-category .products').slideUp('fast');
            \$(this).parents('.product-category').find('.products').slideToggle();
        }
        return false;
    });
    
    var open = '";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "show"), "js", null, true);
        echo "';
    if(open) {
        \$('#pc-' + open + ' .show-products').trigger('click');
    }
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_order_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 116,  321 => 100,  318 => 98,  313 => 95,  310 => 94,  303 => 89,  286 => 85,  283 => 84,  263 => 78,  258 => 76,  255 => 75,  249 => 72,  246 => 71,  244 => 70,  240 => 68,  230 => 66,  224 => 63,  220 => 61,  214 => 60,  204 => 58,  201 => 57,  197 => 56,  192 => 54,  188 => 52,  186 => 51,  182 => 50,  178 => 49,  166 => 46,  148 => 45,  139 => 43,  136 => 42,  134 => 41,  125 => 35,  121 => 34,  115 => 31,  111 => 30,  107 => 29,  104 => 28,  98 => 25,  95 => 24,  93 => 23,  83 => 21,  66 => 20,  60 => 17,  56 => 16,  50 => 12,  47 => 11,  43 => 8,  40 => 7,  34 => 3,  29 => 5,  27 => 2,);
    }
}
