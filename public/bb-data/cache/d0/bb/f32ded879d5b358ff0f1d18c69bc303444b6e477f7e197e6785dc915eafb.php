<?php

/* layout_default.phtml */
class __TwigTemplate_d0bbf32ded879d5b358ff0f1d18c69bc303444b6e477f7e197e6785dc915eafb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'meta_description' => array($this, 'block_meta_description'),
            'meta_keywords' => array($this, 'block_meta_keywords'),
            'opengraph' => array($this, 'block_opengraph'),
            'head' => array($this, 'block_head'),
            'header_buttons' => array($this, 'block_header_buttons'),
            'content_before' => array($this, 'block_content_before'),
            'content' => array($this, 'block_content'),
            'content_after' => array($this, 'block_content_after'),
            'sidebar' => array($this, 'block_sidebar'),
            'sidebar2' => array($this, 'block_sidebar2'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["company"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_company");
        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 5
        $this->displayBlock('meta_title', $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_title"), "html", null, true);
        echo "</title>

    <meta property=\"bb:url\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("BB_URL"), "html", null, true);
        echo "\"/>
    <meta property=\"bb:client_area\" content=\"";
        // line 8
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
        echo "\"/>
    
    <meta name=\"description\" content=\"";
        // line 10
        $this->displayBlock('meta_description', $context, $blocks);
        echo "\" />
    <meta name=\"keywords\" content=\"";
        // line 11
        $this->displayBlock('meta_keywords', $context, $blocks);
        echo "\" />
    <meta name=\"robots\" content=\"index, follow\" />
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />

    <link rel=\"shortcut icon\" href=\"";
        // line 15
        echo twig_asset_url($this->env, "favicon.ico");
        echo "\" />
    <link href=\"https://fonts.googleapis.com/css?family=Cuprum\" rel=\"stylesheet\" type=\"text/css\" />
    ";
        // line 17
        echo twig_stylesheet_tag(twig_asset_url($this->env, "print.css"), "print");
        echo "
    ";
        // line 18
        echo twig_stylesheet_tag(twig_asset_url($this->env, "style.css"));
        echo "
    <!--[if IE 6]>";
        // line 19
        echo twig_stylesheet_tag(twig_asset_url($this->env, "ie6.css"));
        echo "<![endif]-->
    <!--[if IE 7]>";
        // line 20
        echo twig_stylesheet_tag(twig_asset_url($this->env, "ie.css"));
        echo "<![endif]-->

    ";
        // line 22
        echo twig_script_tag(twig_asset_url($this->env, "jquery.min.js"));
        echo "
    ";
        // line 23
        echo twig_script_tag(twig_asset_url($this->env, "jquery.tipsy.js"));
        echo "
    ";
        // line 24
        echo twig_script_tag(twig_asset_url($this->env, "bb-jquery.js"));
        echo "

    ";
        // line 26
        $this->displayBlock('opengraph', $context, $blocks);
        // line 27
        echo "    ";
        $this->displayBlock('head', $context, $blocks);
        // line 28
        echo "</head>

<body>
";
        // line 31
        if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "cookieconsent")), "method")) {
            // line 32
            echo "    ";
            try {
                $this->env->loadTemplate("mod_cookieconsent_index.phtml")->display($context);
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

        }
        // line 34
        echo "<div class=\"header\">
    <div class=\"container_16\">
        <div class=\"grid_4\" >
            <a href=\"";
        // line 37
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("");
        echo "\">
                ";
        // line 38
        if ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "logo_url")) {
            // line 39
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "logo_url"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "name"), "html", null, true);
            echo "\" style=\"max-height: 60px\"/>
                ";
        } else {
            // line 41
            echo "                    <img src=\" ";
            echo twig_asset_url($this->env, "images/logo.png");
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "name"), "html", null, true);
            echo "\" style=\"max-height: 60px\"/>
                ";
        }
        // line 43
        echo "            </a>
        </div>

        <div class=\"grid_12\">
            ";
        // line 47
        if ((isset($context["client"]) ? $context["client"] : null)) {
            // line 48
            echo "            <ul class=\"middleNav\">
                <li>
                    <a href=\"";
            // line 50
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("");
            echo "\" class=\"show-tip\" title=\"";
            echo gettext("Dashboard");
            echo "\"><span class=\"big-dark-icon i-home\"></span></a>
                </li>
                <li>
                    <a href=\"";
            // line 53
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("cart");
            echo "\" class=\"show-tip\" title=\"";
            echo gettext("Shopping cart");
            echo "\"><span class=\"big-dark-icon i-cart\"></span></a>
                </li>
                <li>
                    <a href=\"";
            // line 56
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("client/me");
            echo "\" class=\"show-tip\" title=\"";
            echo gettext("Profile");
            echo "\"><span class=\"big-dark-icon i-profile\"></span></a>
                </li>
                <li>
                    <a href=\"client/client/logout\" class=\"show-tip api\" title=\"";
            // line 59
            echo gettext("Sign out");
            echo "\"><span class=\"big-dark-icon i-logout\"></span></a>
                </li>
            </ul>

            ";
        } else {
            // line 64
            echo "            ";
            $this->displayBlock('header_buttons', $context, $blocks);
            // line 70
            echo "            ";
        }
        // line 71
        echo "        </div>
        <div class=\"clear\"></div>
    </div>
</div>

<div id=\"main\">
    <div class=\"container_16\">
        ";
        // line 78
        $this->displayBlock('content_before', $context, $blocks);
        // line 79
        echo "
        <div class=\"grid_12\">
            ";
        // line 81
        $this->env->loadTemplate("partial_message.phtml")->display($context);
        // line 82
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "            ";
        $this->displayBlock('content_after', $context, $blocks);
        // line 84
        echo "        </div>

        <div class=\"grid_4\">
            ";
        // line 87
        $this->displayBlock('sidebar', $context, $blocks);
        // line 88
        echo "
            ";
        // line 89
        if ((!(isset($context["client"]) ? $context["client"] : null))) {
            // line 90
            echo "            <div class=\"widget\" id=\"login-form\" style=\"display: none;\" >
                <div class=\"head\">
                    <h2 class=\"dark-icon i-profile\">";
            // line 92
            echo gettext("Login to client area");
            echo "</h2>
                </div>
                <div class=\"block\">
                <form action=\"\" method=\"post\" class=\"api_form\" data-api-url=\"";
            // line 95
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/guest/client/login");
            echo "\" data-api-redirect=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("");
            echo "\">
                    <fieldset>
                        <legend>";
            // line 97
            echo gettext("Login to client area");
            echo "</legend>
                        <p>
                            <input type=\"email\" name=\"email\" value=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "email"), "html", null, true);
            echo "\" required=\"required\" placeholder=\"";
            echo gettext("Email address");
            echo "\">
                        </p>
                        <p>
                            <input type=\"password\" name=\"password\" value=\"\" required=\"required\" placeholder=\"";
            // line 102
            echo gettext("Password");
            echo "\">
                        </p>
                        <a class=\"bb-button\" href=\"";
            // line 104
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("reset-password");
            echo "\">";
            echo gettext("Reset password");
            echo "</a>
                        <input type=\"hidden\" name=\"remember\" value=\"1\" />
                        <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
            // line 106
            echo gettext("Sign in");
            echo "\" style=\"float: right\">
                    </fieldset>
                </form>
                </div>
            </div>
            ";
        }
        // line 112
        echo "            
            <div class=\"gradient\" style=\"margin-bottom: 10px;\">
                <nav>";
        // line 114
        $this->env->loadTemplate("partial_menu.phtml")->display($context);
        echo "</nav>
            </div>

            ";
        // line 117
        $context["languages"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_languages");
        // line 118
        echo "            ";
        if ((twig_length_filter($this->env, (isset($context["languages"]) ? $context["languages"] : null)) > 1)) {
            // line 119
            echo "            <div class=\"widget\">
                <div class=\"head\">
                    <h2 class=\"dark-icon i-drag\">";
            // line 121
            echo gettext("Select language");
            echo "</h2>
                </div>
                <div class=\"block\">
                    <select name=\"lang\" class=\"language_selector\">
                    ";
            // line 125
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 126
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : null), "html", null, true);
                echo "\" class=\"lang_";
                echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, gettext((isset($context["lang"]) ? $context["lang"] : null)), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "                    </select>
                </div>
            </div>
            ";
        }
        // line 132
        echo "            
            ";
        // line 133
        $this->displayBlock('sidebar2', $context, $blocks);
        // line 134
        echo "
        </div>
        <div class=\"clear\"></div>
    </div>
</div>

<div class=\"footer\">
    <div class=\"container_16\">
        ";
        // line 142
        if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "kb")), "method")) {
            // line 143
            echo "        <div class=\"grid_4\">
            <div class=\"box\">
                <h2>";
            // line 145
            echo gettext("Popular articles");
            echo "</h2>
                <div class=\"block\">
                    <ul>
                        ";
            // line 148
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "kb_article_get_list", array(0 => array("per_page" => 4, "page" => 1)), "method"), "list"));
            foreach ($context['_seq'] as $context["i"] => $context["article"]) {
                // line 149
                echo "                            <li><a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/kb");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "category"), "slug"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "slug"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), 30), "html", null, true);
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "                    </ul>
                </div>
            </div>
        </div>
        ";
        }
        // line 156
        echo "
        ";
        // line 157
        if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "news")), "method")) {
            // line 158
            echo "        <div class=\"grid_4\">
            <div class=\"box\">
                <h2>";
            // line 160
            echo gettext("Recent posts");
            echo "</h2>
                <div class=\"block\">
                    <ul>
                        ";
            // line 163
            $context["posts"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "news_get_list", array(0 => array("per_page" => 4, "page" => 1)), "method");
            // line 164
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "list"));
            foreach ($context['_seq'] as $context["i"] => $context["post"]) {
                // line 165
                echo "                        <li>
                            <a href=\"";
                // line 166
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/news");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), 30), "html", null, true);
                echo "</a>
                        </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "                    </ul>
                </div>
            </div>
        </div>
        ";
        }
        // line 174
        echo "        
        <div class=\"grid_4\">
            <div class=\"box\">
                <h2>";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "name"), "html", null, true);
        echo "</h2>
                <div class=\"block\">
                    <ul>
                        <li>
                            <a href=\"";
        // line 181
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/about-us");
        echo "\">";
        echo gettext("About us");
        echo "</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 184
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/tos");
        echo "\">";
        echo gettext("Terms and conditions");
        echo "</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 187
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/privacy-policy");
        echo "\">";
        echo gettext("Privacy policy");
        echo "</a>
                        </li>
                        ";
        // line 189
        if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "branding")), "method")) {
            // line 190
            echo "                        <li>
                            <a href=\"http://www.boxbilling.com\" title=\"Billing Software\" target=\"_blank\">Billing software</a>
                        </li>
                        ";
        }
        // line 194
        echo "                    </ul>
                </div>
            </div>
        </div>

        <div class=\"grid_4\">
            ";
        // line 200
        if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "branding")), "method")) {
            // line 201
            echo "            <p class=\"logo\">
                <a class=\"boxbilling\" href=\"http://www.boxbilling.com\" title=\"Invoicing software\" target=\"_blank\">";
            // line 202
            echo twig_img_tag(twig_asset_url($this->env, "images/boxbilling-logo.png"), "Business software");
            echo "</a>
            </p>
            ";
        }
        // line 205
        echo "        </div>

        <div class=\"clear\"></div>
    </div>
</div>

<div class=\"footer lower\">
    <div class=\"container_16\">
        <div class=\"grid_16\">
            <div class=\"box\">
                <div class=\"block\">
                    <p>
                    ";
        // line 218
        echo "                    ";
        // line 219
        echo "                    © ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "signature"), "html", null, true);
        echo "
                    </p>
                </div>
            </div>
        </div>
        <div class=\"clear\"></div>
    </div>
</div>
<div class=\"loading dim\" style=\"display:none\"><div class=\"popup_block\"><h3>";
        // line 227
        echo gettext("Loading ..");
        echo "</h3></div></div>
    ";
        // line 228
        $this->displayBlock('js', $context, $blocks);
        // line 229
        echo "    <noscript>NOTE: Many features on BoxBilling require Javascript and cookies. You can enable both via your browser's preference settings.</noscript>
";
        // line 230
        try {
            $this->env->loadTemplate("partial_pending_messages.phtml")->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 231
        echo "</body>
</html>";
    }

    // line 5
    public function block_meta_title($context, array $blocks = array())
    {
    }

    // line 10
    public function block_meta_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_description"), "html", null, true);
    }

    // line 11
    public function block_meta_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_keywords"), "html", null, true);
    }

    // line 26
    public function block_opengraph($context, array $blocks = array())
    {
    }

    // line 27
    public function block_head($context, array $blocks = array())
    {
    }

    // line 64
    public function block_header_buttons($context, array $blocks = array())
    {
        // line 65
        echo "            <div class=\"top-buttons\">
                <a id=\"login-form-link\" class=\"bb-button bb-button-submit\" href=\"";
        // line 66
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("login");
        echo "\">";
        echo gettext("Sign in");
        echo "</a>
                <a class=\"bb-button bb-button-red\" href=\"";
        // line 67
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("login", array("register" => 1));
        echo "\">";
        echo gettext("Register");
        echo "</a>
            </div>
            ";
    }

    // line 78
    public function block_content_before($context, array $blocks = array())
    {
    }

    // line 82
    public function block_content($context, array $blocks = array())
    {
    }

    // line 83
    public function block_content_after($context, array $blocks = array())
    {
    }

    // line 87
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 133
    public function block_sidebar2($context, array $blocks = array())
    {
    }

    // line 228
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout_default.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  617 => 228,  612 => 133,  602 => 83,  597 => 82,  592 => 78,  577 => 66,  574 => 65,  571 => 64,  566 => 27,  561 => 26,  549 => 10,  544 => 5,  532 => 230,  527 => 228,  523 => 227,  509 => 219,  507 => 218,  493 => 205,  487 => 202,  482 => 200,  474 => 194,  468 => 190,  451 => 184,  443 => 181,  436 => 177,  431 => 174,  424 => 169,  408 => 165,  403 => 164,  401 => 163,  395 => 160,  391 => 158,  389 => 157,  386 => 156,  379 => 151,  364 => 149,  360 => 148,  354 => 145,  350 => 143,  338 => 134,  336 => 133,  333 => 132,  327 => 128,  314 => 126,  310 => 125,  303 => 121,  299 => 119,  296 => 118,  275 => 106,  268 => 104,  263 => 102,  255 => 99,  243 => 95,  237 => 92,  233 => 90,  231 => 89,  228 => 88,  221 => 84,  213 => 81,  209 => 79,  207 => 78,  198 => 71,  195 => 70,  184 => 59,  176 => 56,  160 => 50,  156 => 48,  148 => 43,  140 => 41,  126 => 37,  112 => 32,  110 => 31,  105 => 28,  102 => 27,  100 => 26,  91 => 23,  82 => 20,  74 => 18,  70 => 17,  65 => 15,  54 => 10,  45 => 7,  38 => 5,  33 => 2,  365 => 77,  355 => 70,  349 => 67,  337 => 57,  334 => 56,  329 => 54,  326 => 53,  323 => 52,  320 => 51,  316 => 49,  313 => 48,  286 => 42,  281 => 41,  265 => 37,  251 => 34,  215 => 82,  201 => 25,  189 => 24,  175 => 20,  163 => 19,  151 => 15,  134 => 13,  130 => 38,  121 => 34,  107 => 10,  78 => 19,  73 => 4,  58 => 11,  43 => 1,  37 => 45,  34 => 36,  31 => 1,  28 => 27,  22 => 17,  19 => 9,  650 => 296,  647 => 295,  641 => 290,  637 => 288,  629 => 283,  624 => 281,  620 => 279,  618 => 278,  615 => 277,  607 => 87,  600 => 270,  596 => 268,  594 => 267,  591 => 266,  583 => 67,  576 => 259,  572 => 257,  570 => 256,  562 => 251,  555 => 11,  546 => 243,  539 => 231,  529 => 229,  522 => 232,  517 => 229,  508 => 222,  499 => 219,  496 => 218,  484 => 201,  476 => 214,  471 => 213,  466 => 189,  459 => 187,  449 => 200,  440 => 197,  437 => 196,  429 => 193,  421 => 192,  416 => 191,  411 => 166,  404 => 186,  388 => 175,  382 => 84,  372 => 79,  368 => 166,  362 => 163,  358 => 162,  352 => 159,  348 => 142,  340 => 153,  324 => 142,  318 => 50,  308 => 134,  304 => 47,  298 => 130,  294 => 117,  288 => 114,  284 => 112,  276 => 38,  260 => 109,  250 => 97,  246 => 101,  240 => 33,  236 => 97,  230 => 94,  226 => 87,  218 => 83,  202 => 77,  192 => 64,  188 => 69,  182 => 66,  178 => 65,  172 => 62,  168 => 53,  159 => 55,  154 => 47,  152 => 51,  149 => 50,  142 => 45,  132 => 39,  128 => 39,  119 => 35,  115 => 34,  111 => 33,  103 => 32,  99 => 31,  95 => 24,  92 => 29,  87 => 22,  79 => 23,  75 => 22,  71 => 21,  67 => 3,  63 => 19,  55 => 14,  51 => 12,  49 => 8,  47 => 10,  44 => 9,  42 => 8,  39 => 7,  36 => 6,  30 => 3,  25 => 22,);
    }
}
