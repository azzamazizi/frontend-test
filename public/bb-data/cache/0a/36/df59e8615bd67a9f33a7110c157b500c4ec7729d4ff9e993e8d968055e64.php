<?php

/* mod_page_login.phtml */
class __TwigTemplate_0a36df59e8615bd67a9f33a7110c157b500c4ec7729d4ff9e993e8d968055e64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Login / Sign up");
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"big-light-icon i-profile\"></span></div>
            <h2>";
        // line 11
        echo gettext("Sign In / Create new account");
        echo "</h2>
            <p>";
        // line 12
        echo gettext("Become a member to participate in forum, contact support, order new services");
        echo "</p>
        </div>
        <div class=\"block\" id=\"login-to-account\" ";
        // line 14
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "register")) {
            echo "style=\"display:none;\"";
        }
        echo ">
            <div class=\"splitter\">
            <div class=\"grid_6 alpha\">
                <div class=\"box\" >
                    <div class=\"block\">
                        <h2>";
        // line 19
        echo gettext("Sign in");
        echo "</h2>
                        <form action=\"\" method=\"post\" id=\"client-login\">
                            <fieldset>
                                <legend>";
        // line 22
        echo gettext("Login to client area");
        echo "</legend>
                                <p>
                                    <label>";
        // line 24
        echo gettext("Email Address");
        echo ": </label>
                                    <input type=\"email\" name=\"email\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "email"), "html", null, true);
        echo "\" required=\"required\">
                                </p>

                                <p>
                                    <label>";
        // line 29
        echo gettext("Password");
        echo ": </label>
                                    <input type=\"password\" name=\"password\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "password"), "html", null, true);
        echo "\" required=\"required\">
                                </p>
                                <input type=\"hidden\" name=\"remember\" value=\"1\" />
                                <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
        // line 33
        echo gettext("Login");
        echo "\">
                                <a class=\"bb-button\" href=\"";
        // line 34
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("reset-password");
        echo "\">";
        echo gettext("Reset password");
        echo "</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>

            <div class=\"grid_6 omega\">
                <div class=\"box\" ";
        // line 42
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "register")) {
            echo "style=\"display:none;\"";
        }
        echo ">
                    <h2>";
        // line 43
        echo gettext("Do not have an account yet?");
        echo "</h2>
                    <div class=\"block\">
                        <a style=\"margin: 30px 0 0 40px;\" class=\"bb-button bb-button-red bb-button-big\" href=\"#\" onclick=\"\$('#login-to-account').slideUp(); \$('#register-new-account').slideDown(); return false;\" >";
        // line 45
        echo gettext("Register");
        echo "</a>
                    </div>
                    ";
        // line 47
        if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "oauth")), "method")) {
            // line 48
            echo "                        ";
            $this->env->loadTemplate("mod_oauth_buttons.phtml")->display(array_merge($context, array("redirect_to" => "client/me")));
            // line 49
            echo "                    ";
        }
        // line 50
        echo "                </div>
            </div>
            <div class=\"clear\"></div>
        </div>
        </div>

        <div class=\"block\" id=\"register-new-account\" ";
        // line 56
        if ((!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "register"))) {
            echo "style=\"display:none;\"";
        }
        echo ">
            <form action=\"\" method=\"post\" id=\"create-profile\">
            <div class=\"grid_6 alpha\">
                <div class=\"box\">
                    ";
        // line 60
        $context["r"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "client_required");
        // line 61
        echo "                    <h2>";
        echo gettext("Enter your details below");
        echo "</h2>
                    <div class=\"block\">
                        <fieldset>
                            <legend>";
        // line 64
        echo gettext("Create new profile");
        echo "</legend>
                            <p>
                                <label>";
        // line 66
        echo gettext("Email Address");
        echo ": </label>
                                <input type=\"email\" name=\"email\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "email"), "html", null, true);
        echo "\" required=\"required\" id=\"reg-email\">
                            </p>
                            <p>
                                <label>";
        // line 70
        echo gettext("First Name");
        echo ": </label>
                                <input type=\"text\" name=\"first_name\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "first_name"), "html", null, true);
        echo "\" required=\"required\">
                            </p>
                            ";
        // line 73
        if (twig_in_filter("last_name", (isset($context["r"]) ? $context["r"] : null))) {
            // line 74
            echo "                            <p>
                                <label>";
            // line 75
            echo gettext("Last Name");
            echo ": </label>
                                <input type=\"text\" name=\"last_name\" value=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "last_name"), "html", null, true);
            echo "\" required=\"required\">
                            </p>
                            ";
        }
        // line 79
        echo "                            
                            ";
        // line 80
        if (twig_in_filter("company", (isset($context["r"]) ? $context["r"] : null))) {
            // line 81
            echo "                            <p>
                                <label>";
            // line 82
            echo gettext("Company");
            echo ": </label>
                                <input type=\"text\" name=\"company\" value=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "company"), "html", null, true);
            echo "\" required=\"required\">
                            </p>
                            ";
        }
        // line 86
        echo "                            
                            ";
        // line 87
        if (twig_in_filter("birthday", (isset($context["r"]) ? $context["r"] : null))) {
            // line 88
            echo "                            <p>
                                <label>";
            // line 89
            echo gettext("Birthday");
            echo ": </label>
                                <input type=\"text\" name=\"birthday\" value=\"\">
                            </p>
                            ";
        }
        // line 93
        echo "                            
                            ";
        // line 94
        if (twig_in_filter("gender", (isset($context["r"]) ? $context["r"] : null))) {
            // line 95
            echo "                            <p>
                                <label>";
            // line 96
            echo gettext("You are");
            echo ": </label>
                                <select name=\"gender\">
                                    <option value=\"male\">Male</option>
                                    <option value=\"female\">Female</option>
                                </select>
                            </p>
                            ";
        }
        // line 103
        echo "
                            ";
        // line 104
        $context["custom_fields"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "client_custom_fields");
        // line 105
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["field_name"] => $context["field"]) {
            // line 106
            echo "                            ";
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "active")) {
                // line 107
                echo "                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"";
                // line 108
                echo twig_escape_filter($this->env, (isset($context["field_name"]) ? $context["field_name"] : null), "html", null, true);
                echo "\">";
                if ((!twig_test_empty($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title")))) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title"), "html", null, true);
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["field_name"]) ? $context["field_name"] : null)), "html", null, true);
                    echo " ";
                }
                echo "</label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"";
                // line 110
                echo twig_escape_filter($this->env, (isset($context["field_name"]) ? $context["field_name"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["field_name"]) ? $context["field_name"] : null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), (isset($context["field_name"]) ? $context["field_name"] : null)), "html", null, true);
                echo "\" ";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required")) {
                    echo "required=\"required\"";
                }
                echo ">
                                    <p class=\"help-block\"></p>
                                </div>
                            </div>
                            ";
            }
            // line 115
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                            
                            <p>
                                <label>";
        // line 118
        echo gettext("Password");
        echo ": </label>
                                <input type=\"password\" name=\"password\" value=\"\" required=\"required\" id=\"reg-password\">
                            </p>
                            
                            <p>
                                <label>";
        // line 123
        echo gettext("Password confirm");
        echo ": </label>
                                <input type=\"password\" name=\"password_confirm\" value=\"\" required=\"required\">
                            </p>
                            
                            ";
        // line 127
        echo $context["mf"]->getrecaptcha();
        echo "

                        </fieldset>
                    </div>
                </div>
            </div>

            <div class=\"grid_6 omega\">
                <div class=\"box\" id=\"register-new-account\">
                    <h2>&nbsp;</h2>
                    <div class=\"block\">
                        <fieldset>
                            <legend>";
        // line 139
        echo gettext("Create new profile");
        echo "</legend>

                                ";
        // line 141
        if (twig_in_filter("address_1", (isset($context["r"]) ? $context["r"] : null))) {
            // line 142
            echo "                                <p>
                                    <label>";
            // line 143
            echo gettext("Address");
            echo ": </label>
                                    <input type=\"text\" name=\"address_1\" value=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "address_1"), "html", null, true);
            echo "\">
                                </p>
                                ";
        }
        // line 147
        echo "                                
                                ";
        // line 148
        if (twig_in_filter("address_2", (isset($context["r"]) ? $context["r"] : null))) {
            // line 149
            echo "                                <p>
                                    <label>";
            // line 150
            echo gettext("Address 2");
            echo ": </label>
                                    <input type=\"text\" name=\"address_2\" value=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "address_2"), "html", null, true);
            echo "\">
                                </p>
                                ";
        }
        // line 154
        echo "                                
                                ";
        // line 155
        if (twig_in_filter("city", (isset($context["r"]) ? $context["r"] : null))) {
            // line 156
            echo "                                <p>
                                    <label>";
            // line 157
            echo gettext("City");
            echo ": </label>
                                    <input type=\"text\" name=\"city\" value=\"";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "city"), "html", null, true);
            echo "\">
                                </p>
                                ";
        }
        // line 161
        echo "                                
                                ";
        // line 162
        if (twig_in_filter("country", (isset($context["r"]) ? $context["r"] : null))) {
            // line 163
            echo "                                <p>
                                    <label>";
            // line 164
            echo gettext("Country");
            echo ": </label>
                                    ";
            // line 165
            echo $context["mf"]->getselectbox("country", $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_countries"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "country"), 0, "Select country");
            echo "
                                </p>
                                ";
        }
        // line 168
        echo "                                
                                ";
        // line 169
        if (twig_in_filter("state", (isset($context["r"]) ? $context["r"] : null))) {
            // line 170
            echo "                                <p>
                                    <label>";
            // line 171
            echo gettext("State");
            echo ": </label>
                                     ";
            // line 173
            echo "                                     <input type=\"text\" name=\"state\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "state"), "html", null, true);
            echo "\" />
                                </p>
                                ";
        }
        // line 176
        echo "                                
                                ";
        // line 177
        if (twig_in_filter("postcode", (isset($context["r"]) ? $context["r"] : null))) {
            // line 178
            echo "                                <p>
                                    <label>";
            // line 179
            echo gettext("Zip/Postal Code");
            echo ": </label>
                                    <input type=\"text\" name=\"postcode\" value=\"";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "postcode"), "html", null, true);
            echo "\">
                                </p>
                                ";
        }
        // line 183
        echo "                                
                                ";
        // line 184
        if (twig_in_filter("phone", (isset($context["r"]) ? $context["r"] : null))) {
            // line 185
            echo "                                <p>
                                    <label>";
            // line 186
            echo gettext("Phone Number");
            echo ": </label>
                                    <br/>
                                    <input type=\"text\" name=\"phone_cc\" value=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "phone_cc"), "html", null, true);
            echo "\" style=\"width: 40px\"> <input type=\"text\" name=\"phone\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "phone"), "html", null, true);
            echo "\" style=\"width: 233px\">
                                </p>
                                ";
        }
        // line 191
        echo "                            <input class=\"bb-button bb-button-red bb-button-big\" type=\"submit\" value=\"";
        echo gettext("Register");
        echo "\" style=\"margin: 30px 0 0 70px;\">
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class=\"clear\"></div>
            </form>
        </div>
    </div>

";
    }

    // line 203
    public function block_js($context, array $blocks = array())
    {
        // line 204
        echo "<script type=\"text/javascript\">
\$(function() {

    \$('#password-reset').bind('submit',function(event){
        bb.post(
            'guest/client/reset_password',
            \$(this).serialize(),
            function(result) {
                bb.msg('Password reset confirmation email was sent');
            }
        );
        return false;
    });

    \$('#client-login').bind('submit',function(event){
        bb.post(
            'guest/client/login',
            \$(this).serialize(),
            function(result) {
                bb.redirect();
            }
        );
        return false;
    });

    \$('#create-profile').bind('submit',function(event){
        bb.post(
            'guest/client/create',
            \$(this).serialize(),
            function(result) {
                //login after registration
                var login_details = {
                    email: \$('#reg-email').val(),
                    password: \$('#reg-password').val()
                };
                bb.post(
                    'guest/client/login',
                    login_details,
                    function(result) {
                        bb.redirect();
                    }
                );
            }
        );
        return false;
    });

});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_page_login.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 204,  486 => 203,  470 => 191,  462 => 188,  457 => 186,  454 => 185,  452 => 184,  449 => 183,  443 => 180,  439 => 179,  436 => 178,  434 => 177,  431 => 176,  424 => 173,  420 => 171,  417 => 170,  415 => 169,  412 => 168,  406 => 165,  402 => 164,  399 => 163,  397 => 162,  394 => 161,  388 => 158,  384 => 157,  381 => 156,  379 => 155,  376 => 154,  370 => 151,  366 => 150,  363 => 149,  361 => 148,  358 => 147,  352 => 144,  348 => 143,  345 => 142,  343 => 141,  338 => 139,  323 => 127,  316 => 123,  308 => 118,  304 => 116,  298 => 115,  282 => 110,  269 => 108,  266 => 107,  263 => 106,  258 => 105,  256 => 104,  253 => 103,  243 => 96,  240 => 95,  238 => 94,  235 => 93,  228 => 89,  225 => 88,  223 => 87,  220 => 86,  214 => 83,  210 => 82,  207 => 81,  205 => 80,  202 => 79,  196 => 76,  192 => 75,  189 => 74,  187 => 73,  182 => 71,  178 => 70,  172 => 67,  168 => 66,  163 => 64,  156 => 61,  154 => 60,  145 => 56,  137 => 50,  134 => 49,  131 => 48,  129 => 47,  124 => 45,  119 => 43,  113 => 42,  100 => 34,  96 => 33,  90 => 30,  86 => 29,  79 => 25,  75 => 24,  70 => 22,  64 => 19,  54 => 14,  49 => 12,  45 => 11,  39 => 7,  36 => 6,  30 => 5,  25 => 3,);
    }
}
