<?php

/* macro_functions.phtml */
class __TwigTemplate_fb1fa172c4b2269cb3389326c462325f15458ed026473fdd63169b2b14835802 extends Twig_Template
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
        // line 9
        echo "
";
        // line 17
        echo "
";
        // line 22
        echo "
";
        // line 27
        echo "
";
        // line 31
        echo "
";
        // line 36
        echo "
";
        // line 45
        echo "

";
    }

    // line 1
    public function getselectbox($_name = null, $_options = null, $_selected = null, $_required = null, $_nullOption = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "options" => $_options,
            "selected" => $_selected,
            "required" => $_required,
            "nullOption" => $_nullOption,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <select name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                echo "required=\"required\"";
            }
            echo ">
        ";
            // line 3
            if ((isset($context["nullOption"]) ? $context["nullOption"] : null)) {
                echo "<option value=\"\">-- ";
                echo twig_escape_filter($this->env, (isset($context["nullOption"]) ? $context["nullOption"] : null), "html", null, true);
                echo " --</option>";
            }
            // line 4
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["val"] => $context["label"]) {
                // line 5
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
                echo "\" label=\"";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null));
                echo "\" ";
                if (((isset($context["selected"]) ? $context["selected"] : null) == (isset($context["val"]) ? $context["val"] : null))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null));
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['val'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "    </select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 10
    public function getselectboxtld($_name = null, $_options = null, $_selected = null, $_required = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "options" => $_options,
            "selected" => $_selected,
            "required" => $_required,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "    <select name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                echo "required=\"required\"";
            }
            echo " style=\"width:80px;\">
        ";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 13
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tld"), "html", null, true);
                echo "\" label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tld"), "html", null, true);
                echo "\" ";
                if (((isset($context["selected"]) ? $context["selected"] : null) == $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tld"))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tld"), "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    </select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 19
    public function getcurrency_format($_price = null, $_currency = null)
    {
        $context = $this->env->mergeGlobals(array(
            "price" => $_price,
            "currency" => $_currency,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 20
            echo "    ";
            echo twig_money($this->env, (isset($context["price"]) ? $context["price"] : null), (isset($context["currency"]) ? $context["currency"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function getcurrency($_price = null, $_currency = null)
    {
        $context = $this->env->mergeGlobals(array(
            "price" => $_price,
            "currency" => $_currency,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 25
            echo "    ";
            echo twig_money_convert($this->env, (isset($context["price"]) ? $context["price"] : null), (isset($context["currency"]) ? $context["currency"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 28
    public function getstatus_name($_status = null)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $_status,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 29
            echo "    ";
            echo twig_escape_filter($this->env, gettext(twig_title_string_filter($this->env, strtr((isset($context["status"]) ? $context["status"] : null), array("_" => " ")))), "html", null, true);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function getperiod_name($_period = null)
    {
        $context = $this->env->mergeGlobals(array(
            "period" => $_period,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 34
            echo "    ";
            echo twig_period_title($this->env, (isset($context["period"]) ? $context["period"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 37
    public function getmarkdown_quote($_text = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $_text,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 38
            echo "


";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter((isset($context["text"]) ? $context["text"] : null), "
"));
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 42
                echo "> ";
                echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : null), "html", null, true);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 47
    public function getrecaptcha()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 48
            echo "
";
            // line 49
            if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "spamchecker")), "method")) {
                // line 50
                $context["rc"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "spamchecker_recaptcha");
                // line 51
                echo "    ";
                if ($this->getAttribute((isset($context["rc"]) ? $context["rc"] : null), "enabled")) {
                    // line 52
                    echo "        ";
                    if (($this->getAttribute((isset($context["rc"]) ? $context["rc"] : null), "version") == 2)) {
                        // line 53
                        echo "            <script src='https://www.google.com/recaptcha/api.js' async defer></script>
            <div class=\"g-recaptcha\" data-sitekey=\"";
                        // line 54
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rc"]) ? $context["rc"] : null), "publickey"), "html", null, true);
                        echo "\"></div>
        ";
                    } else {
                        // line 56
                        echo "        ";
                        $context["server"] = "https://www.google.com/recaptcha/api";
                        // line 57
                        echo "            <script type=\"text/javascript\">
                var RecaptchaOptions = {
                theme : 'custom',
                custom_theme_widget: 'recaptcha_widget'
            };
            </script>

            <div id=\"recaptcha_widget\" style=\"display:none\">

            <div id=\"recaptcha_image\"></div>
            <div class=\"recaptcha_only_if_incorrect_sol\" style=\"color:red\">";
                        // line 67
                        echo gettext("Incorrect please try again");
                        echo "</div>

            <p>
                <label>";
                        // line 70
                        echo gettext("Enter the words above");
                        echo "</label>
                <br/>
                <input type=\"text\" id=\"recaptcha_response_field\" name=\"recaptcha_response_field\" style=\"width: 245px\"/>
                    <a class=\"bb-button\" href=\"javascript:Recaptcha.reload()\" style=\"float: right\"><span class=\"dark-icon i-reload\"></span></a>
            </p>
            </div>

            <script type=\"text/javascript\" src=\"";
                        // line 77
                        echo twig_escape_filter($this->env, (isset($context["server"]) ? $context["server"] : null), "html", null, true);
                        echo "/challenge?k=";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rc"]) ? $context["rc"] : null), "publickey"), "html", null, true);
                        echo "\"></script>
            <noscript>
                <iframe src=\"";
                        // line 79
                        echo twig_escape_filter($this->env, (isset($context["server"]) ? $context["server"] : null), "html", null, true);
                        echo "/noscript?k=";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rc"]) ? $context["rc"] : null), "publickey"), "html", null, true);
                        echo "\" height=\"300\" width=\"500\" frameborder=\"0\"></iframe><br/>
                <textarea name=\"recaptcha_challenge_field\" rows=\"3\" cols=\"40\"></textarea>
                <input type=\"hidden\" name=\"recaptcha_response_field\" value=\"manual_challenge\"/>
            </noscript>
        ";
                    }
                    // line 84
                    echo "    ";
                }
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macro_functions.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 77,  355 => 70,  349 => 67,  337 => 57,  334 => 56,  329 => 54,  326 => 53,  323 => 52,  320 => 51,  316 => 49,  313 => 48,  286 => 42,  281 => 41,  265 => 37,  251 => 34,  215 => 28,  201 => 25,  189 => 24,  175 => 20,  163 => 19,  151 => 15,  134 => 13,  130 => 12,  121 => 11,  107 => 10,  78 => 5,  73 => 4,  58 => 2,  43 => 1,  37 => 45,  34 => 36,  31 => 31,  28 => 27,  22 => 17,  19 => 9,  650 => 296,  647 => 295,  641 => 290,  637 => 288,  629 => 283,  624 => 281,  620 => 279,  618 => 278,  615 => 277,  607 => 272,  600 => 270,  596 => 268,  594 => 267,  591 => 266,  583 => 261,  576 => 259,  572 => 257,  570 => 256,  562 => 251,  555 => 249,  546 => 243,  539 => 241,  529 => 234,  522 => 232,  517 => 229,  508 => 222,  499 => 219,  496 => 218,  484 => 215,  476 => 214,  471 => 213,  466 => 212,  459 => 208,  449 => 200,  440 => 197,  437 => 196,  429 => 193,  421 => 192,  416 => 191,  411 => 190,  404 => 186,  388 => 175,  382 => 84,  372 => 79,  368 => 166,  362 => 163,  358 => 162,  352 => 159,  348 => 158,  340 => 153,  324 => 142,  318 => 50,  308 => 134,  304 => 47,  298 => 130,  294 => 129,  288 => 126,  284 => 125,  276 => 38,  260 => 109,  250 => 102,  246 => 101,  240 => 33,  236 => 97,  230 => 94,  226 => 29,  218 => 88,  202 => 77,  192 => 70,  188 => 69,  182 => 66,  178 => 65,  172 => 62,  168 => 61,  159 => 55,  154 => 52,  152 => 51,  149 => 50,  142 => 45,  132 => 41,  128 => 39,  119 => 35,  115 => 34,  111 => 33,  103 => 32,  99 => 31,  95 => 7,  92 => 29,  87 => 28,  79 => 23,  75 => 22,  71 => 21,  67 => 3,  63 => 19,  55 => 14,  51 => 12,  49 => 11,  47 => 10,  44 => 9,  42 => 8,  39 => 7,  36 => 6,  30 => 3,  25 => 22,);
    }
}
